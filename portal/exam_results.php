<?php
require '../controller/profile/getProfile.php';

// Check if user is admin/superadmin
if ($_SESSION['role'] !== 'superadmin' && $_SESSION['role'] !== 'admin') {
   header('Location: dashboard.php');
   exit;
}

// Get filter parameters
$test_type = $_GET['test_type'] ?? 'all'; // all, pretest, posttest
$search = $_GET['search'] ?? '';
$sort_by = $_GET['sort_by'] ?? 'created_at';
$sort_order = $_GET['sort_order'] ?? 'DESC';

// Build query
$query = "SELECT 
            u.id as user_id,
            u.fullname,
            u.email,
            u.role,
            COALESCE(pr.score, 0) as pretest_score,
            COALESCE(pr.category, '-') as pretest_category,
            DATE_FORMAT(pr.created_at, '%d-%m-%Y %H:%i') as pretest_date,
            COALESCE(pt.score, 0) as posttest_score,
            COALESCE(pt.category, '-') as posttest_category,
            DATE_FORMAT(pt.created_at, '%d-%m-%Y %H:%i') as posttest_date,
            CASE 
               WHEN pr.score IS NOT NULL THEN 'Selesai'
               ELSE 'Belum'
            END as pretest_status,
            CASE 
               WHEN pt.score IS NOT NULL THEN 'Selesai'
               ELSE 'Belum'
            END as posttest_status
         FROM users u
         LEFT JOIN pretest_results pr ON u.id = pr.user_id
         LEFT JOIN posttest_results pt ON u.id = pt.user_id
         WHERE 1=1";

// Apply filters
if ($search) {
   $search = mysqli_real_escape_string($conn, $search);
   $query .= " AND (u.fullname LIKE '%$search%' OR u.email LIKE '%$search%')";
}

if ($test_type === 'pretest') {
   $query .= " AND pr.id IS NOT NULL";
} elseif ($test_type === 'posttest') {
   $query .= " AND pt.id IS NOT NULL";
}

// Add sorting
if ($sort_by === 'pretest_score') {
   $query .= " ORDER BY pr.score $sort_order";
} elseif ($sort_by === 'posttest_score') {
   $query .= " ORDER BY pt.score $sort_order";
} else {
   $query .= " ORDER BY u.created_at $sort_order";
}

$result = mysqli_query($conn, $query);
$total_users = mysqli_num_rows($result);
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
                     <h4 class="fw-bold mb-1">📊 Hasil Ujian</h4>
                     <p class="text-muted mb-0">
                        Rekapitulasi hasil Pre-Test dan Post-Test semua peserta
                     </p>
                  </div>
               </div>

               <!-- FILTER SECTION -->
               <div class="card shadow-sm border-0 mb-4">
                  <div class="card-body">
                     <form method="GET" class="row g-3">
                        <div class="col-md-4">
                           <label class="form-label">Cari Peserta</label>
                           <input type="text" class="form-control" name="search" 
                              placeholder="Nama atau Email" value="<?= htmlspecialchars($search) ?>">
                        </div>

                        <div class="col-md-3">
                           <label class="form-label">Tipe Ujian</label>
                           <select class="form-select" name="test_type">
                              <option value="all" <?= $test_type === 'all' ? 'selected' : '' ?>>Semua</option>
                              <option value="pretest" <?= $test_type === 'pretest' ? 'selected' : '' ?>>Pre-Test Only</option>
                              <option value="posttest" <?= $test_type === 'posttest' ? 'selected' : '' ?>>Post-Test Only</option>
                           </select>
                        </div>

                        <div class="col-md-3">
                           <label class="form-label">Urutkan Berdasarkan</label>
                           <select class="form-select" name="sort_by">
                              <option value="created_at" <?= $sort_by === 'created_at' ? 'selected' : '' ?>>Tanggal</option>
                              <option value="pretest_score" <?= $sort_by === 'pretest_score' ? 'selected' : '' ?>>Pre-Test Score</option>
                              <option value="posttest_score" <?= $sort_by === 'posttest_score' ? 'selected' : '' ?>>Post-Test Score</option>
                           </select>
                        </div>

                        <div class="col-md-2 d-flex align-items-end gap-2">
                           <button type="submit" class="btn btn-primary flex-grow-1">🔍 Filter</button>
                           <a href="?test_type=all" class="btn btn-secondary">Reset</a>
                        </div>
                     </form>
                  </div>
               </div>

               <!-- SUMMARY STATS -->
               <div class="row mb-4">
                  <div class="col-md-3">
                     <div class="card border-0 shadow-sm">
                        <div class="card-body">
                           <h3 class="fw-bold text-primary"><?= $total_users ?></h3>
                           <small class="text-muted">Total Peserta</small>
                        </div>
                     </div>
                  </div>

                  <div class="col-md-3">
                     <div class="card border-0 shadow-sm">
                        <div class="card-body">
                           <h3 class="fw-bold text-success">
                              <?php
                              $pretest_done = mysqli_query($conn, 
                                 "SELECT COUNT(*) as count FROM pretest_results"
                              );
                              $pt_data = mysqli_fetch_assoc($pretest_done);
                              echo $pt_data['count'];
                              ?>
                           </h3>
                           <small class="text-muted">Pre-Test Selesai</small>
                        </div>
                     </div>
                  </div>

                  <div class="col-md-3">
                     <div class="card border-0 shadow-sm">
                        <div class="card-body">
                           <h3 class="fw-bold text-info">
                              <?php
                              $posttest_done = mysqli_query($conn, 
                                 "SELECT COUNT(*) as count FROM posttest_results"
                              );
                              $pot_data = mysqli_fetch_assoc($posttest_done);
                              echo $pot_data['count'];
                              ?>
                           </h3>
                           <small class="text-muted">Post-Test Selesai</small>
                        </div>
                     </div>
                  </div>

                  <div class="col-md-3">
                     <div class="card border-0 shadow-sm">
                        <div class="card-body">
                           <h3 class="fw-bold text-warning">
                              <?php
                              $avg_pretest = mysqli_query($conn, 
                                 "SELECT AVG(score) as avg_score FROM pretest_results"
                              );
                              $avg_data = mysqli_fetch_assoc($avg_pretest);
                              echo number_format($avg_data['avg_score'], 1);
                              ?>
                           </h3>
                           <small class="text-muted">Rata-rata Pre-Test</small>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- TABLE -->
               <div class="card shadow-sm border-0">
                  <div class="card-header bg-light">
                     <h5 class="mb-0">📋 Daftar Hasil Ujian</h5>
                  </div>
                  <div class="table-responsive">
                     <table class="table table-hover mb-0">
                        <thead class="table-light">
                           <tr>
                              <th>No</th>
                              <th>Nama Peserta</th>
                              <th>Email</th>
                              <th>Pre-Test Score</th>
                              <th>Pre-Test Kategori</th>
                              <th>Post-Test Score</th>
                              <th>Post-Test Kategori</th>
                              <th>Tanggal Pre-Test</th>
                              <th>Tanggal Post-Test</th>
                              <th>Aksi</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                           $no = 1;
                           mysqli_data_seek($result, 0);
                           while ($row = mysqli_fetch_assoc($result)) {
                              $pretest_badge = $row['pretest_status'] === 'Selesai' 
                                 ? '<span class="badge bg-success">✓ ' . $row['pretest_score'] . '</span>'
                                 : '<span class="badge bg-secondary">Belum</span>';
                              
                              $posttest_badge = $row['posttest_status'] === 'Selesai'
                                 ? '<span class="badge bg-success">✓ ' . $row['posttest_score'] . '</span>'
                                 : '<span class="badge bg-secondary">Belum</span>';
                           ?>
                           <tr>
                              <td><?= $no++ ?></td>
                              <td>
                                 <div class="d-flex align-items-center">
                                    <div>
                                       <h6 class="fw-semibold mb-0"><?= htmlspecialchars($row['fullname']) ?></h6>
                                       <small class="text-muted"><?= $row['role'] ?></small>
                                    </div>
                                 </div>
                              </td>
                              <td><?= htmlspecialchars($row['email']) ?></td>
                              <td><?= $pretest_badge ?></td>
                              <td><?= $row['pretest_category'] ?></td>
                              <td><?= $posttest_badge ?></td>
                              <td><?= $row['posttest_category'] ?></td>
                              <td><?= $row['pretest_date'] !== '01-01-1970 00:00' ? $row['pretest_date'] : '-' ?></td>
                              <td><?= $row['posttest_date'] !== '01-01-1970 00:00' ? $row['posttest_date'] : '-' ?></td>
                              <td>
                                 <div class="btn-group" role="group">
                                    <a href="exam_results_print.php?user_id=<?= $row['user_id'] ?>" 
                                       class="btn btn-sm btn-outline-primary" 
                                       title="Cetak Hasil">
                                       <i class="ti ti-printer"></i>
                                    </a>
                                    <a href="exam_results_detail.php?user_id=<?= $row['user_id'] ?>" 
                                       class="btn btn-sm btn-outline-info" 
                                       title="Detail">
                                       <i class="ti ti-eye"></i>
                                    </a>
                                 </div>
                              </td>
                           </tr>
                           <?php } ?>
                        </tbody>
                     </table>
                  </div>
               </div>

            </div>
         </div>
      </div>
   </div>
   <?php require 'library.php'; ?>

</body>

</html>
