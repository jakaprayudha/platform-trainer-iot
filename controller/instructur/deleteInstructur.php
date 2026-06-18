<?php

require_once dirname(__DIR__, 2) . '/database/connect.php';

$id = $_POST['id'];

$query = mysqli_query(
   $conn,
   "DELETE FROM users
    WHERE id='$id'"
);

echo json_encode([
   'status' => $query
]);
