<?php

session_start();
require_once dirname(__DIR__, 2) . '/database/connect.php';
require_once dirname(__DIR__, 2) . '/lib/assessment.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !in_array($_SESSION['role'] ?? '', ['admin', 'superadmin'], true)) {
    header('Location: ../../portal/dashboard.php');
    exit;
}

$csrfToken = $_POST['csrf_token'] ?? '';
if (!is_string($csrfToken) || !hash_equals($_SESSION['csrf_token'] ?? '', $csrfToken)) {
    header('Location: ../../portal/cbt_results.php?reset=failed');
    exit;
}

$target = assessment_reset_target($_POST);
if ($target === null) {
    header('Location: ../../portal/cbt_results.php?reset=failed');
    exit;
}

mysqli_begin_transaction($conn);
try {
    $statement = mysqli_prepare($conn, 'DELETE FROM assessment_results WHERE schedule_id = ? AND user_id = ? AND test_type = ?');
    $scheduleId = $target['schedule_id'];
    $userId = $target['user_id'];
    $testType = $target['test_type'];
    mysqli_stmt_bind_param($statement, 'iis', $scheduleId, $userId, $testType);
    if (!mysqli_stmt_execute($statement)) {
        throw new RuntimeException('Result reset failed.');
    }
    $deleted = mysqli_stmt_affected_rows($statement) === 1;
    mysqli_commit($conn);
} catch (Throwable $error) {
    mysqli_rollback($conn);
    $deleted = false;
}

header('Location: ../../portal/cbt_results.php?reset=' . ($deleted ? 'success' : 'failed'));
exit;
