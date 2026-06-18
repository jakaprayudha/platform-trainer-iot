<?php
session_start();

require_once dirname(__DIR__, 2) . '/database/connect.php';

$id = $_SESSION['user_id'] ?? '';

if (!$id) {
   die('Session user_id tidak ditemukan');
}

$checkProfile = mysqli_query(
   $conn,
   "SELECT * FROM users LEFT JOIN schools ON schools.id = users.id  WHERE users.id='$id'"
);

$dataProfile = mysqli_fetch_assoc($checkProfile);
