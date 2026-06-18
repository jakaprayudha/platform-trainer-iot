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

/*
|--------------------------------------------------------------------------
| Cek apakah sudah pernah mengerjakan Post Test
|--------------------------------------------------------------------------
*/

$check = mysqli_query(
   $conn,
   "SELECT id
   FROM posttest_results
   WHERE user_id='$user_id'
   LIMIT 1"
);

if (mysqli_num_rows($check) > 0) {

   echo json_encode([
      'status' => false,
      'message' => 'Anda sudah pernah mengerjakan Post Test'
   ]);

   exit;
}

/*
|--------------------------------------------------------------------------
| Hitung Nilai
|--------------------------------------------------------------------------
*/

$total = 0;

for ($i = 1; $i <= 20; $i++) {

   $nilai = intval($_POST['q' . $i] ?? 0);

   $total += $nilai;
}

/*
|--------------------------------------------------------------------------
| Kategori Nilai
|--------------------------------------------------------------------------
*/

if ($total >= 90) {

   $category = 'Sangat Baik';
} elseif ($total >= 75) {

   $category = 'Baik';
} elseif ($total >= 60) {

   $category = 'Cukup';
} else {

   $category = 'Perlu Pendampingan';
}

/*
|--------------------------------------------------------------------------
| Simpan Hasil Post Test
|--------------------------------------------------------------------------
*/

$query = mysqli_query(
   $conn,
   "INSERT INTO posttest_results(
      user_id,
      score,
      category,
      total_question
   ) VALUES(
      '$user_id',
      '$total',
      '$category',
      '20'
   )"
);

if (!$query) {

   echo json_encode([
      'status' => false,
      'message' => mysqli_error($conn)
   ]);

   exit;
}

$posttest_id = mysqli_insert_id($conn);

/*
|--------------------------------------------------------------------------
| Simpan Detail Jawaban
|--------------------------------------------------------------------------
*/

for ($i = 1; $i <= 20; $i++) {

   $nilai = intval($_POST['q' . $i] ?? 0);

   mysqli_query(
      $conn,
      "INSERT INTO posttest_answers(
         posttest_id,
         question_no,
         answer_value
      ) VALUES(
         '$posttest_id',
         '$i',
         '$nilai'
      )"
   );
}

/*
|--------------------------------------------------------------------------
| Response
|--------------------------------------------------------------------------
*/

echo json_encode([
   'status' => true,
   'score' => $total,
   'category' => $category,
   'message' => 'Post Test berhasil disimpan'
]);
