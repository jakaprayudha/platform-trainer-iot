<?php

session_start();

require_once dirname(__DIR__, 2) . '/database/connect.php';

$user_id = $_SESSION['user_id'];

$query = mysqli_query(
   $conn,
   "SELECT
      u.fullname,
      u.school_id,
      p.score,
      p.category,
      p.created_at
   FROM posttest_results p
   LEFT JOIN users u
   ON u.id = p.user_id
   WHERE p.user_id='$user_id'
   LIMIT 1"
);

$data = mysqli_fetch_assoc($query);

if (!$data) {
   die('Data sertifikat tidak ditemukan');
}

$certificate_number =
   'CERT-IOT-' .
   date('Y') .
   '-' .
   str_pad($user_id, 5, '0', STR_PAD_LEFT);

?>
<!doctype html>
<html>

<head>

   <title>Sertifikat Pelatihan</title>

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

   <style>
      body {
         background: #f5f5f5;
      }

      .certificate {
         width: 1100px;
         margin: 30px auto;
         background: white;
         border: 12px solid #0d6efd;
         padding: 60px;
         position: relative;
      }

      .title {
         font-size: 42px;
         font-weight: bold;
         color: #0d6efd;
      }

      .subtitle {
         font-size: 20px;
         margin-top: 10px;
      }

      .participant {
         font-size: 36px;
         font-weight: bold;
         margin: 30px 0;
      }

      .footer-sign {
         margin-top: 80px;
      }

      @media print {
         .btn-print {
            display: none;
         }

         body {
            background: white;
         }

         .certificate {
            border: 12px solid #0d6efd;
            box-shadow: none;
            margin: 0;
            width: 100%;
         }
      }
   </style>

</head>

<body>

   <div class="text-center mt-3 btn-print">

      <button
         onclick="window.print()"
         class="btn btn-primary">

         🖨️ Cetak Sertifikat

      </button>

   </div>
   <div class="certificate">

      <div class="text-center">


         <img
            src="../../assets/images/logo.png"
            class="logo-top">

         <div class="title">
            SERTIFIKAT
         </div>

         <div class="subtitle">
            Pelatihan Trainer Kit IoT & Artificial Intelligence
         </div>

         <div class="certificate-number mt-2">
            Nomor: <?= $certificate_number ?>
         </div>


      </div>

      <div class="text-center mt-5">


         Diberikan Kepada

         <div class="participant">
            <?= strtoupper($data['fullname']) ?>
         </div>

         Atas partisipasi dan keberhasilan menyelesaikan pelatihan

         <div class="fw-bold fs-5 mt-3">
            Pemanfaatan Trainer Kit IoT dan Artificial Intelligence
            Dalam Pembelajaran Digital
         </div>

         <div class="mt-4">
            Dengan Nilai Akhir
         </div>

         <div class="score">
            <?= $data['score'] ?>
         </div>

         <div class="fs-5">
            Kategori:
            <strong><?= $data['category'] ?></strong>
         </div>


      </div>

      <div class="row signature">


         <div class="col-6 text-center">

            Mengetahui,

            <br><br><br><br>

            <strong>
               Kepala Program Pelatihan
            </strong>

         </div>

         <div class="col-6 text-center">

            Medan,
            <?= date('d F Y') ?>

            <br><br><br><br>

            <strong>
               Instruktur Trainer Kit IoT
            </strong>

         </div>


      </div>

      <div class="qr-box">


         <img
            src="https://api.qrserver.com/v1/create-qr-code/?size=100x100&data=<?= $certificate_number ?>">

         <div class="verify-text">
            Scan untuk verifikasi
         </div>


      </div>

   </div>

   <script>
      window.onload = function() {
         setTimeout(() => {
            window.print();
         }, 500);
      };
   </script>

</body>

</html>