<?php

require_once dirname(__DIR__, 2) . '/database/connect.php';

header('Content-Type: application/json');

$id = $_GET['id'] ?? '';

if (!$id) {
   echo json_encode([
      'status' => false,
      'message' => 'ID tidak ditemukan'
   ]);
   exit;
}

$query = mysqli_query(
   $conn,
   "SELECT *
     FROM users
     WHERE id='$id'
     LIMIT 1"
);

$data = mysqli_fetch_assoc($query);

if ($data) {

   echo json_encode([
      'status' => true,
      'data' => $data
   ]);
} else {

   echo json_encode([
      'status' => false,
      'message' => 'Data tidak ditemukan'
   ]);
}
