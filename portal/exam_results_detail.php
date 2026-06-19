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
   header('Location: exam_results.php');
   exit;
}

// Get pretest results
$pretest_query = mysqli_query($conn, "SELECT * FROM pretest_results WHERE user_id = '$user_id' ORDER BY created_at DESC LIMIT 1");
$pretest_data = mysqli_fetch_assoc($pretest_query);

// Get posttest results
$posttest_query = mysqli_query($conn, "SELECT * FROM posttest_results WHERE user_id = '$user_id' ORDER BY created_at DESC LIMIT 1");
$posttest_data = mysqli_fetch_assoc($posttest_query);

// Questions mapping
$pretest_questions = [
   1 => "Apa yang dimaksud dengan internet?",
   2 => "Manfaat utama teknologi dalam pembelajaran adalah?",
   3 => "Manakah yang termasuk perangkat digital?",
   4 => "Apa fungsi utama email?",
   5 => "Apa yang dimaksud pembelajaran digital?",
   6 => "Jika menemukan informasi di internet, langkah yang tepat adalah?",
   7 => "Aplikasi presentasi digunakan untuk?",
   8 => "Sikap yang baik dalam menggunakan teknologi adalah?",
   9 => "Mengapa guru perlu mengikuti pelatihan teknologi?",
   10 => "Mengapa guru perlu memahami perkembangan teknologi?"
];

$posttest_questions = [
   1 => "Apa kepanjangan dari IoT?",
   2 => "ESP32 termasuk perangkat?",
   3 => "Fungsi sensor adalah?",
   4 => "IDE yang umum digunakan untuk Arduino adalah?",
   5 => "LDR digunakan untuk mendeteksi?",
   6 => "Sensor Ultrasonik digunakan untuk?",
   7 => "WiFi digunakan untuk?",
   8 => "MQTT digunakan untuk?",
   9 => "Dashboard IoT digunakan untuk?",
   10 => "Tujuan utama IoT adalah?"
];

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
   <?php require 'partial-head.php' ?>
</head>

<body>
   <!--  Body Wrapper -->
   <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
      data-sidebar-position="fixed" data-header-position="fixed">

      <!--  App Topstrip -->
      <?php require 'partial-topstrip.php' ?>
      <!-- Sidebar Start -->
      <aside class="left-sidebar">
         <!-- Sidebar scroll-->
         <?php require 'partial-sidebar.php' ?>
         <!-- End Sidebar scroll-->
      </aside>
      <!--  Sidebar End -->
      <!--  Main wrapper -->
      <div class="body-wrapper">
         <!--  Header Start -->
         <?php require 'partial-header.php' ?>
         <!--  Header End -->
         <div class="body-wrapper-inner">
            <div class="container-fluid">

               <!-- HEADER -->
               <div class="d-flex justify-content-between align-items-center mb-4">
                  <div>
                     <h4 class="fw-bold mb-1">📊 Detail Hasil Ujian</h4>
                     <p class="text-muted mb-0">
                        <?= htmlspecialchars($user_data['fullname']) ?> (<?= htmlspecialchars($user_data['email']) ?>)
                     </p>
                  </div>
                  <div>
                     <a href="exam_results.php" class="btn btn-secondary">← Kembali</a>
                     <a href="exam_results_print.php?user_id=<?= $user_id ?>" class="btn btn-primary" target="_blank">🖨️ Cetak</a>
                  </div>
               </div>

               <!-- USER INFO CARD -->
               <div class="card shadow-sm border-0 mb-4">
                  <div class="card-body">
                     <div class="row">
                        <div class="col-md-6">
                           <h6 class="text-muted">Informasi Peserta</h6>
                           <table class="table table-sm table-borderless">
                              <tr>
                                 <td><strong>Nama</strong></td>
                                 <td>: <?= htmlspecialchars($user_data['fullname']) ?></td>
                              </tr>
                              <tr>
                                 <td><strong>Email</strong></td>
                                 <td>: <?= htmlspecialchars($user_data['email']) ?></td>
                              </tr>
                              <tr>
                                 <td><strong>Role</strong></td>
                                 <td>: <?= htmlspecialchars($user_data['role']) ?></td>
                              </tr>
                           </table>
                        </div>
                        <div class="col-md-6">
                           <h6 class="text-muted">Ringkasan Nilai</h6>
                           <div class="row">
                              <div class="col-6">
                                 <div class="p-3 bg-light rounded">
                                    <h6 class="text-muted">Pre-Test</h6>
                                    <h3 class="fw-bold text-primary">
                                       <?= $pretest_data ? $pretest_data['score'] : '-' ?>
                                    </h3>
                                    <small><?= $pretest_data ? $pretest_data['category'] : 'Belum' ?></small>
                                 </div>
                              </div>
                              <div class="col-6">
                                 <div class="p-3 bg-light rounded">
                                    <h6 class="text-muted">Post-Test</h6>
                                    <h3 class="fw-bold text-success">
                                       <?= $posttest_data ? $posttest_data['score'] : '-' ?>
                                    </h3>
                                    <small><?= $posttest_data ? $posttest_data['category'] : 'Belum' ?></small>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- TABS -->
               <ul class="nav nav-tabs" id="examTabs" role="tablist">
                  <li class="nav-item" role="presentation">
                     <button class="nav-link active" id="pretest-tab" data-bs-toggle="tab" data-bs-target="#pretest" 
                        type="button" role="tab" aria-controls="pretest" aria-selected="true">
                        📝 Pre-Test
                     </button>
                  </li>
                  <li class="nav-item" role="presentation">
                     <button class="nav-link" id="posttest-tab" data-bs-toggle="tab" data-bs-target="#posttest" 
                        type="button" role="tab" aria-controls="posttest" aria-selected="false">
                        ✅ Post-Test
                     </button>
                  </li>
               </ul>

               <!-- TAB CONTENT -->
               <div class="tab-content" id="examTabContent">

                  <!-- PRETEST TAB -->
                  <div class="tab-pane fade show active" id="pretest" role="tabpanel" aria-labelledby="pretest-tab">
                     <?php if ($pretest_data) { ?>

                        <div class="card shadow-sm border-0 mt-4">
                           <div class="card-header bg-primary text-white">
                              <h5 class="mb-0">📋 Hasil Pre-Test</h5>
                           </div>
                           <div class="card-body">

                              <!-- SCORE SUMMARY -->
                              <div class="row mb-4">
                                 <div class="col-md-3">
                                    <div class="card border-primary">
                                       <div class="card-body text-center">
                                          <h6 class="text-muted">Total Score</h6>
                                          <h2 class="fw-bold text-primary"><?= $pretest_data['score'] ?></h2>
                                          <small class="text-muted">dari 100</small>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="card border-info">
                                       <div class="card-body text-center">
                                          <h6 class="text-muted">Kategori</h6>
                                          <h4 class="fw-bold text-info"><?= $pretest_data['category'] ?></h4>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="card border-success">
                                       <div class="card-body text-center">
                                          <h6 class="text-muted">Total Soal</h6>
                                          <h4 class="fw-bold text-success"><?= $pretest_data['total_question'] ?></h4>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="card border-warning">
                                       <div class="card-body text-center">
                                          <h6 class="text-muted">Tanggal Ujian</h6>
                                          <small class="fw-bold">
                                             <?= date('d M Y', strtotime($pretest_data['created_at'])) ?>
                                          </small>
                                          <br>
                                          <small class="text-muted">
                                             <?= date('H:i:s', strtotime($pretest_data['created_at'])) ?>
                                          </small>
                                       </div>
                                    </div>
                                 </div>
                              </div>

                              <!-- ANSWERS TABLE -->
                              <div class="table-responsive">
                                 <table class="table table-hover">
                                    <thead class="table-light">
                                       <tr>
                                          <th style="width: 5%">No</th>
                                          <th>Pertanyaan</th>
                                          <th style="width: 15%">Nilai</th>
                                          <th style="width: 15%">Status</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach ($pretest_answers as $answer) { ?>
                                          <tr>
                                             <td><?= $answer['question_no'] ?></td>
                                             <td>
                                                <strong>Soal <?= $answer['question_no'] ?>:</strong><br>
                                                <?= $pretest_questions[$answer['question_no']] ?? 'N/A' ?>
                                             </td>
                                             <td>
                                                <span class="badge bg-primary"><?= $answer['answer_value'] ?> poin</span>
                                             </td>
                                             <td>
                                                <?php if ($answer['answer_value'] > 0) { ?>
                                                   <span class="badge bg-success">✓ Benar</span>
                                                <?php } else { ?>
                                                   <span class="badge bg-danger">✗ Salah</span>
                                                <?php } ?>
                                             </td>
                                          </tr>
                                       <?php } ?>
                                    </tbody>
                                 </table>
                              </div>

                           </div>
                        </div>

                     <?php } else { ?>

                        <div class="alert alert-warning mt-4" role="alert">
                           <h4 class="alert-heading">ℹ️ Belum Ada Data</h4>
                           <p>Peserta belum mengerjakan Pre-Test</p>
                        </div>

                     <?php } ?>
                  </div>

                  <!-- POSTTEST TAB -->
                  <div class="tab-pane fade" id="posttest" role="tabpanel" aria-labelledby="posttest-tab">
                     <?php if ($posttest_data) { ?>

                        <div class="card shadow-sm border-0 mt-4">
                           <div class="card-header bg-success text-white">
                              <h5 class="mb-0">📋 Hasil Post-Test</h5>
                           </div>
                           <div class="card-body">

                              <!-- SCORE SUMMARY -->
                              <div class="row mb-4">
                                 <div class="col-md-3">
                                    <div class="card border-success">
                                       <div class="card-body text-center">
                                          <h6 class="text-muted">Total Score</h6>
                                          <h2 class="fw-bold text-success"><?= $posttest_data['score'] ?></h2>
                                          <small class="text-muted">dari 100</small>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="card border-info">
                                       <div class="card-body text-center">
                                          <h6 class="text-muted">Kategori</h6>
                                          <h4 class="fw-bold text-info"><?= $posttest_data['category'] ?></h4>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="card border-success">
                                       <div class="card-body text-center">
                                          <h6 class="text-muted">Total Soal</h6>
                                          <h4 class="fw-bold text-success"><?= $posttest_data['total_question'] ?></h4>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="card border-warning">
                                       <div class="card-body text-center">
                                          <h6 class="text-muted">Tanggal Ujian</h6>
                                          <small class="fw-bold">
                                             <?= date('d M Y', strtotime($posttest_data['created_at'])) ?>
                                          </small>
                                          <br>
                                          <small class="text-muted">
                                             <?= date('H:i:s', strtotime($posttest_data['created_at'])) ?>
                                          </small>
                                       </div>
                                    </div>
                                 </div>
                              </div>

                              <!-- ANSWERS TABLE -->
                              <div class="table-responsive">
                                 <table class="table table-hover">
                                    <thead class="table-light">
                                       <tr>
                                          <th style="width: 5%">No</th>
                                          <th>Pertanyaan</th>
                                          <th style="width: 15%">Nilai</th>
                                          <th style="width: 15%">Status</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach ($posttest_answers as $answer) { ?>
                                          <tr>
                                             <td><?= $answer['question_no'] ?></td>
                                             <td>
                                                <strong>Soal <?= $answer['question_no'] ?>:</strong><br>
                                                <?= $posttest_questions[$answer['question_no']] ?? 'N/A' ?>
                                             </td>
                                             <td>
                                                <span class="badge bg-success"><?= $answer['answer_value'] ?> poin</span>
                                             </td>
                                             <td>
                                                <?php if ($answer['answer_value'] > 0) { ?>
                                                   <span class="badge bg-success">✓ Benar</span>
                                                <?php } else { ?>
                                                   <span class="badge bg-danger">✗ Salah</span>
                                                <?php } ?>
                                             </td>
                                          </tr>
                                       <?php } ?>
                                    </tbody>
                                 </table>
                              </div>

                           </div>
                        </div>

                     <?php } else { ?>

                        <div class="alert alert-warning mt-4" role="alert">
                           <h4 class="alert-heading">ℹ️ Belum Ada Data</h4>
                           <p>Peserta belum mengerjakan Post-Test</p>
                        </div>

                     <?php } ?>
                  </div>

               </div>

               <!-- COMPARISON SECTION (if both exist) -->
               <?php if ($pretest_data && $posttest_data) { ?>

                  <div class="card shadow-sm border-0 mt-4">
                     <div class="card-header bg-dark text-white">
                        <h5 class="mb-0">📈 Perbandingan Pre-Test & Post-Test</h5>
                     </div>
                     <div class="card-body">

                        <div class="row text-center mb-4">
                           <div class="col-md-4">
                              <h6 class="text-muted">Pre-Test</h6>
                              <h3 class="fw-bold text-primary"><?= $pretest_data['score'] ?></h3>
                              <small><?= $pretest_data['category'] ?></small>
                           </div>
                           <div class="col-md-4">
                              <h6 class="text-muted">Peningkatan</h6>
                              <h3 class="fw-bold <?= ($posttest_data['score'] - $pretest_data['score']) > 0 ? 'text-success' : 'text-danger' ?>">
                                 <?php
                                 $diff = $posttest_data['score'] - $pretest_data['score'];
                                 echo ($diff > 0 ? '+' : '') . $diff;
                                 ?>
                              </h3>
                              <small>
                                 <?php
                                 if ($pretest_data['score'] > 0) {
                                    $pct_change = round(($diff / $pretest_data['score']) * 100, 1);
                                    echo ($pct_change > 0 ? '+' : '') . $pct_change . '%';
                                 }
                                 ?>
                              </small>
                           </div>
                           <div class="col-md-4">
                              <h6 class="text-muted">Post-Test</h6>
                              <h3 class="fw-bold text-success"><?= $posttest_data['score'] ?></h3>
                              <small><?= $posttest_data['category'] ?></small>
                           </div>
                        </div>

                        <!-- Progress Bar -->
                        <div class="mb-4">
                           <h6 class="text-muted mb-2">Perkembangan Nilai</h6>
                           <div class="progress" style="height: 30px;">
                              <div class="progress-bar bg-primary" style="width: <?= ($pretest_data['score'] / 100) * 100 ?>%">
                                 Pre: <?= $pretest_data['score'] ?>
                              </div>
                              <div class="progress-bar bg-success" style="width: <?= ($posttest_data['score'] / 100) * 100 ?>%">
                                 Post: <?= $posttest_data['score'] ?>
                              </div>
                           </div>
                        </div>

                     </div>
                  </div>

               <?php } ?>

            </div>
         </div>
      </div>
   </div>
   <?php require 'library.php'; ?>

</body>

</html>
