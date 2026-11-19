<?php

session_start();
require_once dirname(__DIR__, 2) . '/database/connect.php';
require_once dirname(__DIR__, 2) . '/lib/assessment.php';

if (!in_array($_SESSION['role'] ?? '', ['admin', 'superadmin'], true)) {
    http_response_code(403);
    exit('Akses ditolak.');
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Metode tidak diizinkan.');
}

$title = trim($_POST['title'] ?? '');
$opensAt = trim($_POST['opens_at'] ?? '');
$closesAt = trim($_POST['closes_at'] ?? '');
$activeCountResult = mysqli_query($conn, 'SELECT COUNT(*) AS total FROM assessment_questions WHERE is_active = 1');
$activeCount = (int) (mysqli_fetch_assoc($activeCountResult)['total'] ?? 0);

if ($title === '' || !assessment_schedule_is_valid($opensAt, $closesAt) || !assessment_can_create_schedule($activeCount)) {
    header('Location: ../../portal/assessment_schedules.php?error=Jadwal+memerlukan+judul%2C+periode+valid%2C+dan+minimal+20+soal+aktif');
    exit;
}

$statement = mysqli_prepare($conn, 'INSERT INTO assessment_schedules (title, opens_at, closes_at, created_by) VALUES (?, ?, ?, ?)');
$userId = (int) ($_SESSION['user_id'] ?? 0);
mysqli_stmt_bind_param($statement, 'sssi', $title, $opensAt, $closesAt, $userId);
mysqli_stmt_execute($statement);

header('Location: ../../portal/assessment_schedules.php?success=Jadwal+berhasil+dibuat');
