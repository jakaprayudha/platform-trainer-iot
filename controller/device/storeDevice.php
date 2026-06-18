<?php

session_start();
header('Content-Type: application/json');
require_once dirname(__DIR__, 2) . '/database/connect.php';

$device_name = $_POST['device_name'];
$device_type = $_POST['device_type'];
$school = $_POST['school'];
$status = $_POST['status'];

$created_by = $_SESSION['user_id'] ?? 0;

$device_code = 'DEV-' . date('ymd') . '-' . strtoupper(substr(md5(uniqid()), 0, 6));
$id = $_POST['id'] ?? '';

if ($id != '') {

   $query = mysqli_query(
      $conn,
      "UPDATE devices SET
         device_name='$device_name',
         device_type='$device_type',
         status='$status'
       WHERE id='$id'"
   );
} else {
   $query = mysqli_query(
      $conn,
      "INSERT INTO devices(
        device_code,
        device_name,
        device_type,
        school,
        status,
        created_by
    ) VALUES(
        '$device_code',
        '$device_name',
        '$device_type',
        '$school',
        '$status',
        '$created_by'
    )"
   );
}

if ($query) {

   echo json_encode([
      'status' => true,
      'message' => 'Perangkat IoT berhasil ditambahkan'
   ]);
} else {

   echo json_encode([
      'status' => false,
      'message' => mysqli_error($conn)
   ]);
}
