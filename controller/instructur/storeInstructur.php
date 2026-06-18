<?php

session_start();
header('Content-Type: application/json');
require_once dirname(__DIR__, 2) . '/database/connect.php';

$school = $_POST['school'];
$fullname = $_POST['nama'];
$username = $_POST['email'];
$role = $_POST['role'];
$phone = $_POST['phone'];
$password  = trim($_POST['password']);
$hash =
   password_hash(
      $password,
      PASSWORD_DEFAULT
   );
$id = $_POST['id'] ?? '';

$query = mysqli_query(
   $conn,
   "INSERT INTO users(
        school_id,
        fullname,
        username,
        email,
        password,
        role,
        phone
    ) VALUES(
        '$school',
        '$fullname',
        '$username',
        '$username',
        '$hash',
        '$role',
        '$phone'
    )"
);
if ($query) {

   echo json_encode([
      'status' => true,
      'message' => 'User Instruktur berhasil ditambahkan'
   ]);
} else {

   echo json_encode([
      'status' => false,
      'message' => mysqli_error($conn)
   ]);
}
