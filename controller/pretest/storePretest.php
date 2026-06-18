<?php

session_start();

require_once dirname(__DIR__, 2) . '/database/connect.php';

header('Content-Type: application/json');

$user_id = $_SESSION['user_id'] ?? 0;

if (!$user_id) {

   echo json_encode([
      'status' => false,
      'message' => 'Session login tidak ditemukan'
   ]);
   exit;
}

$total = 0;

for ($i = 1; $i <= 10; $i++) {

   $nilai = intval($_POST['q' . $i] ?? 0);

   $total += $nilai;
}

if ($total >= 90) {

   $category = 'Sangat Baik';
} elseif ($total >= 75) {

   $category = 'Baik';
} elseif ($total >= 60) {

   $category = 'Cukup';
} else {

   $category = 'Perlu Pendampingan';
}

mysqli_query(
   $conn,
   "INSERT INTO pretest_results(
      user_id,
      score,
      category
   ) VALUES(
      '$user_id',
      '$total',
      '$category'
   )"
);

$pretest_id = mysqli_insert_id($conn);

for ($i = 1; $i <= 10; $i++) {

   $nilai = intval($_POST['q' . $i] ?? 0);

   mysqli_query(
      $conn,
      "INSERT INTO pretest_answers(
         pretest_id,
         question_no,
         answer_value
      ) VALUES(
         '$pretest_id',
         '$i',
         '$nilai'
      )"
   );
}

echo json_encode([
   'status' => true,
   'score' => $total,
   'category' => $category
]);
