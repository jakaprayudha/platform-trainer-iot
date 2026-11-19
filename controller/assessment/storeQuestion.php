<?php

session_start();
require_once dirname(__DIR__, 2) . '/database/connect.php';

if (!in_array($_SESSION['role'] ?? '', ['admin', 'superadmin'], true)) {
    http_response_code(403);
    exit('Akses ditolak.');
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Metode tidak diizinkan.');
}

$question = trim($_POST['question_text'] ?? '');
$options = [
    'A' => trim($_POST['option_a'] ?? ''),
    'B' => trim($_POST['option_b'] ?? ''),
    'C' => trim($_POST['option_c'] ?? ''),
    'D' => trim($_POST['option_d'] ?? ''),
];
$correct = $_POST['correct_option'] ?? '';

if ($question === '' || in_array('', $options, true) || !isset($options[$correct])) {
    header('Location: ../../portal/question_bank.php?error=Lengkapi+semua+data+soal');
    exit;
}

$statement = mysqli_prepare($conn, 'INSERT INTO assessment_questions (question_text, option_a, option_b, option_c, option_d, correct_option, created_by) VALUES (?, ?, ?, ?, ?, ?, ?)');
$userId = (int) ($_SESSION['user_id'] ?? 0);
mysqli_stmt_bind_param($statement, 'ssssssi', $question, $options['A'], $options['B'], $options['C'], $options['D'], $correct, $userId);
mysqli_stmt_execute($statement);

header('Location: ../../portal/question_bank.php?success=Soal+berhasil+ditambahkan');
