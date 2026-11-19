<?php
require '../controller/profile/getProfile.php';
require_once '../lib/assessment.php';

$testType = ($_GET['type'] ?? 'pretest') === 'posttest' ? 'posttest' : 'pretest';
$questionCount = assessment_question_count($testType);
$userId = (int) $_SESSION['user_id'];
$schedules = mysqli_query($conn, "SELECT * FROM assessment_schedules WHERE NOW() BETWEEN opens_at AND closes_at ORDER BY opens_at DESC");
$scheduleId = (int) ($_GET['schedule_id'] ?? 0);
$schedule = null;
if ($scheduleId > 0) {
    $scheduleStatement = mysqli_prepare($conn, 'SELECT * FROM assessment_schedules WHERE id = ? AND NOW() BETWEEN opens_at AND closes_at');
    mysqli_stmt_bind_param($scheduleStatement, 'i', $scheduleId);
    mysqli_stmt_execute($scheduleStatement);
    $schedule = mysqli_fetch_assoc(mysqli_stmt_get_result($scheduleStatement));
}
if (!$schedule && mysqli_num_rows($schedules) > 0) {
    $schedule = mysqli_fetch_assoc($schedules);
    $scheduleId = (int) $schedule['id'];
}

$alreadyCompleted = false;
$questions = null;
if ($schedule) {
    $resultStatement = mysqli_prepare($conn, 'SELECT id FROM assessment_results WHERE schedule_id = ? AND user_id = ? AND test_type = ?');
    mysqli_stmt_bind_param($resultStatement, 'iis', $scheduleId, $userId, $testType);
    mysqli_stmt_execute($resultStatement);
    $alreadyCompleted = mysqli_num_rows(mysqli_stmt_get_result($resultStatement)) > 0;
    if (!$alreadyCompleted) {
        $questions = mysqli_query($conn, "SELECT id, question_text, option_a, option_b, option_c, option_d FROM assessment_questions WHERE is_active = 1 ORDER BY RAND() LIMIT $questionCount");
    }
}
?>
<!doctype html><html lang="id"><head><?php require 'partial-head.php'; ?></head><body><div class="page-wrapper" id="main-wrapper"><aside class="left-sidebar"><?php require 'partial-sidebar.php'; ?></aside><div class="body-wrapper"><div class="body-wrapper-inner"><div class="container-fluid py-4">
<h4 class="fw-bold"><?= $testType === 'pretest' ? 'Pre-Test' : 'Post-Test' ?></h4><p class="text-muted"><?= $questionCount ?> soal dari bank soal bersama.</p>
<?php if (!$schedule): ?><div class="alert alert-warning">Belum ada jadwal tes yang aktif.</div><?php elseif ($alreadyCompleted): ?><div class="alert alert-success">Anda sudah menyelesaikan <?= $testType === 'pretest' ? 'pre-test' : 'post-test' ?> untuk jadwal <strong><?= htmlspecialchars($schedule['title']) ?></strong>. Jadwal berikutnya akan membuka kesempatan baru.</div><?php else: ?>
<div class="alert alert-info"><strong><?= htmlspecialchars($schedule['title']) ?></strong><br>Aktif hingga <?= htmlspecialchars($schedule['closes_at']) ?></div>
<form id="assessmentForm"><input type="hidden" name="schedule_id" value="<?= $scheduleId ?>"><input type="hidden" name="test_type" value="<?= $testType ?>">
<?php $number = 1; while ($question = mysqli_fetch_assoc($questions)): ?><div class="card mb-3"><div class="card-body"><h6><?= $number++ ?>. <?= htmlspecialchars($question['question_text']) ?></h6><?php foreach (['A' => 'option_a', 'B' => 'option_b', 'C' => 'option_c', 'D' => 'option_d'] as $letter => $column): ?><div class="form-check"><input required class="form-check-input" type="radio" name="answers[<?= (int) $question['id'] ?>]" value="<?= $letter ?>" id="q<?= $question['id'] . $letter ?>"><label class="form-check-label" for="q<?= $question['id'] . $letter ?>"><?= $letter ?>. <?= htmlspecialchars($question[$column]) ?></label></div><?php endforeach; ?></div></div><?php endwhile; ?>
<button class="btn btn-primary">Kirim Jawaban</button></form>
<script>document.getElementById('assessmentForm').addEventListener('submit', async function(event) { event.preventDefault(); const response = await fetch('../controller/assessment/storeAssessment.php', {method: 'POST', body: new FormData(this)}); const data = await response.json(); if (data.status) { alert('Tes tersimpan. Nilai: ' + data.score); window.location.reload(); } else { alert(data.message); } });</script>
<?php endif; ?></div></div></div></div><?php require 'library.php'; ?></body></html>
