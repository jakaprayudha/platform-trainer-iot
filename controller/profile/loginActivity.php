<?php
session_start();

require_once dirname(__DIR__, 2) . '/database/connect.php';

$id = $_SESSION['user_id'] ?? '';

if (!$id) {
   die('Session user_id tidak ditemukan');
}

$checkLogin = mysqli_query(
   $conn,
   "SELECT *
    FROM user_sessions
    WHERE user_id='$id'
    ORDER BY login_time DESC"
);
