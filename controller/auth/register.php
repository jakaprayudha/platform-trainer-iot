<?php

include '../../database/connect.php';

$school_id = $_POST['school_id'];
$fullname  = trim($_POST['fullname']);
$email     = trim($_POST['email']);
$password  = trim($_POST['password']);
$role      = $_POST['role'];

$cek = mysqli_query(
   $conn,
   "SELECT id
     FROM users
     WHERE email='$email'
     LIMIT 1"
);

if (mysqli_num_rows($cek) > 0) {

   echo json_encode([
      'status' => false,
      'message' => 'Email sudah terdaftar'
   ]);

   exit;
}

$hash =
   password_hash(
      $password,
      PASSWORD_DEFAULT
   );

$username =
   strtolower(
      preg_replace(
         '/[^a-zA-Z0-9]/',
         '',
         $fullname
      )
   );

mysqli_query(
   $conn,
   "INSERT INTO users
    (
        school_id,
        fullname,
        username,
        email,
        password,
        role,
        verification_status,
        status
    )
    VALUES
    (
        '$school_id',
        '$fullname',
        '$email   ',
        '$email',
        '$hash',
        '$role',
        'pending',
        0
    )"
);

echo json_encode([
   'status' => true
]);
