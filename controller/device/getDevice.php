<?php
require_once dirname(__DIR__, 2) . '/database/connect.php';
$school_id = $_GET['school_id'];
$data = [];

$query = mysqli_query(
   $conn,
   "SELECT devices.*,schools.school_name  FROM devices LEFT JOIN schools ON schools.id = devices.school  WHERE devices.school='$school_id'
    "
);

while ($row = mysqli_fetch_assoc($query)) {
   $data[] = $row;
}

header('Content-Type: application/json');

echo json_encode([
   'status' => true,
   'data' => $data
]);
