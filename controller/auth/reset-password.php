<?php

header('Content-Type: application/json');

include '../../database/connect.php';

$email = $_POST['email'];

$query = mysqli_query(
   $conn,
   "SELECT * FROM users
     WHERE email='$email'
     LIMIT 1"
);

if (mysqli_num_rows($query) == 0) {

   echo json_encode([
      'status' => false,
      'message' => 'Email tidak ditemukan'
   ]);

   exit;
}

$user =
   mysqli_fetch_assoc($query);

$newPassword =
   substr(
      str_shuffle(
         'ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnpqrstuvwxyz23456789'
      ),
      0,
      10
   );

$passwordHash =
   password_hash(
      $newPassword,
      PASSWORD_DEFAULT
   );

mysqli_query(
   $conn,
   "UPDATE users
     SET password='$passwordHash'
     WHERE id='{$user['id']}'"
);

echo json_encode([
   'status' => true,
   'password' => $newPassword
]);
