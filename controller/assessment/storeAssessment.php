<?php

session_start();
require_once dirname(__DIR__, 2) . '/database/connect.php';
require_once dirname(__DIR__, 2) . '/lib/assessment.php';
header('Content-Type: application/json');

function assessment_response(bool $status, string $message, array $extra = []): void
{
    echo json_encode(array_merge(['status' => $status, 'message' => $message], $extra));
    exit;
}

$userId = (int) ($_SESSION['user_id'] ?? 0);
$scheduleId = (int) ($_POST['schedule_id'] ?? 0);
$testType = $_POST['test_type'] ?? '';
$answers = $_POST['answers'] ?? [];

if (!$userId || !$scheduleId || !in_array($testType, ['pretest', 'posttest'], true) || !is_array($answers)) {
    assessment_response(false, 'Data tes tidak valid.');
}

$expectedCount = assessment_question_count($testType);
$questionIds = array_map('intval', array_keys($answers));
$selectedOptions = array_values($answers);
if (count($questionIds) !== $expectedCount || count(array_unique($questionIds)) !== $expectedCount || array_diff($selectedOptions, ['A', 'B', 'C', 'D'])) {
    assessment_response(false, 'Semua jawaban harus diisi.');
}

$scheduleStatement = mysqli_prepare($conn, 'SELECT id FROM assessment_schedules WHERE id = ? AND NOW() BETWEEN opens_at AND closes_at');
mysqli_stmt_bind_param($scheduleStatement, 'i', $scheduleId);
mysqli_stmt_execute($scheduleStatement);
if (mysqli_num_rows(mysqli_stmt_get_result($scheduleStatement)) === 0) {
    assessment_response(false, 'Jadwal tes sudah tidak aktif.');
}

$resultStatement = mysqli_prepare($conn, 'SELECT id FROM assessment_results WHERE schedule_id = ? AND user_id = ? AND test_type = ?');
mysqli_stmt_bind_param($resultStatement, 'iis', $scheduleId, $userId, $testType);
mysqli_stmt_execute($resultStatement);
if (mysqli_num_rows(mysqli_stmt_get_result($resultStatement)) > 0) {
    assessment_response(false, 'Anda sudah mengerjakan tes ini pada jadwal tersebut.');
}

$idList = implode(',', $questionIds);
$questionResult = mysqli_query($conn, "SELECT id, correct_option FROM assessment_questions WHERE is_active = 1 AND id IN ($idList)");
$questions = [];
while ($question = mysqli_fetch_assoc($questionResult)) { $questions[] = $question; }
if (count($questions) !== $expectedCount) {
    assessment_response(false, 'Soal tes tidak lagi tersedia. Silakan muat ulang halaman.');
}

$answerMap = [];
foreach ($answers as $questionId => $answer) { $answerMap[(int) $questionId] = $answer; }
$score = assessment_score($answerMap, $questions);
$category = assessment_category($score);

mysqli_begin_transaction($conn);
try {
    $insertResult = mysqli_prepare($conn, 'INSERT INTO assessment_results (schedule_id, user_id, test_type, score, category, total_question) VALUES (?, ?, ?, ?, ?, ?)');
    mysqli_stmt_bind_param($insertResult, 'iisisi', $scheduleId, $userId, $testType, $score, $category, $expectedCount);
    if (!mysqli_stmt_execute($insertResult)) {
        throw new RuntimeException('Result insert failed.');
    }
    $resultId = mysqli_insert_id($conn);
    $insertAnswer = mysqli_prepare($conn, 'INSERT INTO assessment_answers (result_id, question_id, selected_option, correct_option) VALUES (?, ?, ?, ?)');
    foreach ($questions as $question) {
        $questionId = (int) $question['id'];
        $selected = $answerMap[$questionId];
        $correct = $question['correct_option'];
        mysqli_stmt_bind_param($insertAnswer, 'iiss', $resultId, $questionId, $selected, $correct);
        if (!mysqli_stmt_execute($insertAnswer)) {
            throw new RuntimeException('Answer insert failed.');
        }
    }
    mysqli_commit($conn);
} catch (Throwable $error) {
    mysqli_rollback($conn);
    assessment_response(false, 'Jawaban gagal disimpan. Silakan coba lagi.');
}

assessment_response(true, 'Tes berhasil disimpan.', ['score' => $score, 'category' => $category]);
