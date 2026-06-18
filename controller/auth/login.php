<?php

session_start();

include '../../database/connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query(
   $conn,
   "SELECT * FROM users
     WHERE username='$username'
     LIMIT 1"
);

if (mysqli_num_rows($query) == 0) {

   echo json_encode([
      'status' => false,
      'message' => 'Username tidak ditemukan'
   ]);
   exit;
}

$user = mysqli_fetch_assoc($query);

if (!password_verify(
   $password,
   $user['password']
)) {
   echo json_encode([
      'status' => false,
      'message' => 'Password salah'
   ]);
   exit;
}

$_SESSION['user_id'] =
   $user['id'];

$_SESSION['fullname'] =
   $user['fullname'];

$_SESSION['role'] =
   $user['role'];

$token = bin2hex(
   random_bytes(32)
);

$ip =
   $_SERVER['REMOTE_ADDR'];

$browser =
   $_POST['browser'];

$latitude =
   $_POST['latitude'];

$longitude =
   $_POST['longitude'];

$screen_width =
   $_POST['screen_width'];

$screen_height =
   $_POST['screen_height'];

$timezone =
   $_POST['timezone'];

mysqli_query(
   $conn,
   "INSERT INTO user_sessions
    (
        user_id,
        session_token,
        ip_address,
        browser,
        latitude,
        longitude,
        screen_width,
        screen_height,
        timezone
    )
    VALUES
    (
        '{$user['id']}',
        '$token',
        '$ip',
        '$browser',
        '$latitude',
        '$longitude',
        '$screen_width',
        '$screen_height',
        '$timezone'
    )"
);

echo json_encode([
   'status' => true,
   'session' => $_SESSION,
   'redirect' => 'portal/dashboard'
]);
