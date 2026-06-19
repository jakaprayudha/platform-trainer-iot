<?php
require '../controller/profile/getProfile.php';

// Check if user is admin/superadmin
if ($_SESSION['role'] !== 'superadmin' && $_SESSION['role'] !== 'admin') {
   header('Location: dashboard.php');
   exit;
}

$user_id = $_GET['user_id'] ?? 0;

// Get user data
$user_query = mysqli_query($conn, "SELECT * FROM users WHERE id = '$user_id' LIMIT 1");
$user_data = mysqli_fetch_assoc($user_query);

if (!$user_data) {
   echo "User tidak ditemukan";
   exit;
}

// Get pretest results
$pretest_query = mysqli_query($conn, "SELECT * FROM pretest_results WHERE user_id = '$user_id' ORDER BY created_at DESC LIMIT 1");
$pretest_data = mysqli_fetch_assoc($pretest_query);

// Get posttest results
$posttest_query = mysqli_query($conn, "SELECT * FROM posttest_results WHERE user_id = '$user_id' ORDER BY created_at DESC LIMIT 1");
$posttest_data = mysqli_fetch_assoc($posttest_query);

// Get pretest answers
$pretest_answers = array();
if ($pretest_data) {
   $pa_query = mysqli_query($conn, "SELECT * FROM pretest_answers WHERE pretest_id = '{$pretest_data['id']}' ORDER BY question_no");
   while ($row = mysqli_fetch_assoc($pa_query)) {
      $pretest_answers[] = $row;
   }
}

// Get posttest answers
$posttest_answers = array();
if ($posttest_data) {
   $pt_query = mysqli_query($conn, "SELECT * FROM posttest_answers WHERE posttest_id = '{$posttest_data['id']}' ORDER BY question_no");
   while ($row = mysqli_fetch_assoc($pt_query)) {
      $posttest_answers[] = $row;
   }
}
?>

<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Cetak Hasil Ujian - <?= htmlspecialchars($user_data['fullname']) ?></title>
   <link rel="stylesheet" href="../assets/css/styles.min.css">
   <style>
      @media print {
         .no-print {
            display: none !important;
         }
         body {
            margin: 0;
            padding: 10px;
         }
         .card {
            page-break-inside: avoid;
            box-shadow: none;
            border: 1px solid #ddd;
         }
         table {
            page-break-inside: avoid;
         }
      }
      
      .header-print {
         text-align: center;
         border-bottom: 2px solid #333;
         padding-bottom: 20px;
         margin-bottom: 30px;
      }
      
      .header-print h1 {
         margin: 0;
         font-size: 28px;
         color: #333;
      }
      
      .header-print p {
         margin: 5px 0;
         color: #666;
      }
      
      .user-info {
         background: #f8f9fa;
         padding: 15px;
         border-radius: 8px;
         margin-bottom: 20px;
      }
      
      .user-info-row {
         display: flex;
         justify-content: space-between;
         margin-bottom: 10px;
         padding-bottom: 10px;
         border-bottom: 1px solid #dee2e6;
      }
      
      .user-info-row:last-child {
         margin-bottom: 0;
         border-bottom: none;
      }
      
      .result-section {
         margin-bottom: 30px;
         page-break-inside: avoid;
      }
      
      .section-title {
         background: #007bff;
         color: white;
         padding: 12px;
         border-radius: 5px;
         font-weight: bold;
         margin-bottom: 15px;
         font-size: 18px;
      }
      
      .section-title.posttest {
         background: #28a745;
      }
      
      .result-cards {
         display: grid;
         grid-template-columns: 1fr 1fr;
         gap: 15px;
         margin-bottom: 20px;
      }
      
      .result-card {
         background: #f8f9fa;
         padding: 15px;
         border-left: 4px solid #007bff;
         border-radius: 5px;
      }
      
      .result-card.posttest {
         border-left-color: #28a745;
      }
      
      .result-card-label {
         font-size: 12px;
         color: #666;
         margin-bottom: 5px;
      }
      
      .result-card-value {
         font-size: 32px;
         font-weight: bold;
         color: #333;
      }
      
      .result-card-category {
         font-size: 14px;
         color: #666;
         margin-top: 5px;
      }
      
      .answers-table {
         width: 100%;
         border-collapse: collapse;
         margin-top: 10px;
      }
      
      .answers-table th {
         background: #e9ecef;
         padding: 10px;
         text-align: left;
         font-weight: bold;
         border: 1px solid #dee2e6;
      }
      
      .answers-table td {
         padding: 10px;
         border: 1px solid #dee2e6;
      }
      
      .answers-table tr:nth-child(even) {
         background: #f8f9fa;
      }
      
      .no-data {
         background: #fff3cd;
         color: #856404;
         padding: 15px;
         border-radius: 5px;
         margin-bottom: 20px;
      }
      
      .footer-print {
         margin-top: 30px;
         padding-top: 20px;
         border-top: 2px solid #ddd;
         text-align: center;
         color: #666;
         font-size: 12px;
      }
      
      .buttons-print {
         text-align: center;
         margin-bottom: 20px;
      }
      
      .buttons-print button {
         margin: 0 10px;
      }
   </style>
</head>

<body>
   <div class="buttons-print no-print">
      <button class="btn btn-primary" onclick="window.print()">🖨️ Cetak</button>
      <button class="btn btn-secondary" onclick="window.history.back()">← Kembali</button>
   </div>

   <div style="max-width: 1000px; margin: 0 auto; background: white; padding: 30px;">

      <!-- HEADER -->
      <div class="header-print">
         <h1>📊 HASIL UJIAN</h1>
         <p>Platform Trainer IoT - Assessment Report</p>
         <p style="font-size: 12px; color: #999;">Tanggal Cetak: <?= date('d F Y H:i:s') ?></p>
      </div>

      <!-- USER INFO -->
      <div class="user-info">
         <div class="user-info-row">
            <strong>Nama Peserta:</strong>
            <span><?= htmlspecialchars($user_data['fullname']) ?></span>
         </div>
         <div class="user-info-row">
            <strong>Email:</strong>
            <span><?= htmlspecialchars($user_data['email']) ?></span>
         </div>
         <div class="user-info-row">
            <strong>Role:</strong>
            <span><?= htmlspecialchars($user_data['role']) ?></span>
         </div>
         <div class="user-info-row">
            <strong>ID User:</strong>
            <span>#<?= $user_data['id'] ?></span>
         </div>
      </div>

      <!-- PRE-TEST SECTION -->
      <div class="result-section">
         <div class="section-title">📝 PRE-TEST</div>

         <?php if ($pretest_data) { ?>
            <div class="result-cards">
               <div class="result-card">
                  <div class="result-card-label">Score</div>
                  <div class="result-card-value"><?= $pretest_data['score'] ?></div>
                  <div class="result-card-category">Nilai Maksimal: 100</div>
               </div>
               <div class="result-card">
                  <div class="result-card-label">Kategori</div>
                  <div class="result-card-value" style="font-size: 20px;"><?= $pretest_data['category'] ?></div>
                  <div class="result-card-category">
                     <?= date('d M Y H:i', strtotime($pretest_data['created_at'])) ?>
                  </div>
               </div>
            </div>

            <?php if (!empty($pretest_answers)) { ?>
               <table class="answers-table">
                  <thead>
                     <tr>
                        <th style="width: 10%;">No</th>
                        <th style="width: 70%;">Pertanyaan</th>
                        <th style="width: 20%;">Nilai</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php foreach ($pretest_answers as $answer) { ?>
                        <tr>
                           <td><?= $answer['question_no'] ?></td>
                           <td>Soal Pre-Test No. <?= $answer['question_no'] ?></td>
                           <td><?= $answer['answer_value'] ?> poin</td>
                        </tr>
                     <?php } ?>
                  </tbody>
               </table>
            <?php } ?>
         <?php } else { ?>
            <div class="no-data">
               ℹ️ Peserta belum mengerjakan Pre-Test
            </div>
         <?php } ?>
      </div>

      <!-- POST-TEST SECTION -->
      <div class="result-section">
         <div class="section-title posttest">✅ POST-TEST</div>

         <?php if ($posttest_data) { ?>
            <div class="result-cards">
               <div class="result-card posttest">
                  <div class="result-card-label">Score</div>
                  <div class="result-card-value"><?= $posttest_data['score'] ?></div>
                  <div class="result-card-category">Nilai Maksimal: 100</div>
               </div>
               <div class="result-card posttest">
                  <div class="result-card-label">Kategori</div>
                  <div class="result-card-value" style="font-size: 20px;"><?= $posttest_data['category'] ?></div>
                  <div class="result-card-category">
                     <?= date('d M Y H:i', strtotime($posttest_data['created_at'])) ?>
                  </div>
               </div>
            </div>

            <?php if (!empty($posttest_answers)) { ?>
               <table class="answers-table">
                  <thead>
                     <tr>
                        <th style="width: 10%;">No</th>
                        <th style="width: 70%;">Pertanyaan</th>
                        <th style="width: 20%;">Nilai</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php foreach ($posttest_answers as $answer) { ?>
                        <tr>
                           <td><?= $answer['question_no'] ?></td>
                           <td>Soal Post-Test No. <?= $answer['question_no'] ?></td>
                           <td><?= $answer['answer_value'] ?> poin</td>
                        </tr>
                     <?php } ?>
                  </tbody>
               </table>
            <?php } ?>
         <?php } else { ?>
            <div class="no-data">
               ℹ️ Peserta belum mengerjakan Post-Test
            </div>
         <?php } ?>
      </div>

      <!-- SUMMARY & COMPARISON -->
      <?php if ($pretest_data && $posttest_data) { ?>
         <div class="result-section">
            <div class="section-title">📈 PERBANDINGAN PRE-TEST & POST-TEST</div>

            <table class="answers-table">
               <thead>
                  <tr>
                     <th>Metrik</th>
                     <th>Pre-Test</th>
                     <th>Post-Test</th>
                     <th>Selisih</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td><strong>Score</strong></td>
                     <td><?= $pretest_data['score'] ?></td>
                     <td><?= $posttest_data['score'] ?></td>
                     <td style="<?= ($posttest_data['score'] - $pretest_data['score']) > 0 ? 'color: green; font-weight: bold;' : '' ?>">
                        <?php
                        $diff = $posttest_data['score'] - $pretest_data['score'];
                        echo ($diff > 0 ? '+' : '') . $diff;
                        ?>
                     </td>
                  </tr>
                  <tr>
                     <td><strong>Kategori</strong></td>
                     <td><?= $pretest_data['category'] ?></td>
                     <td><?= $posttest_data['category'] ?></td>
                     <td>-</td>
                  </tr>
               </tbody>
            </table>
         </div>
      <?php } ?>

      <!-- FOOTER -->
      <div class="footer-print">
         <p>Document ini dicetak dari sistem Platform Trainer IoT</p>
         <p style="margin: 0;">© 2024 Platform Trainer IoT. All Rights Reserved.</p>
      </div>

   </div>

   <script>
      // Auto print if requested
      if (new URLSearchParams(window.location.search).has('autoprint')) {
         window.addEventListener('load', function() {
            window.print();
         });
      }
   </script>
</body>

</html>
