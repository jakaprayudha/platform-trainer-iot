<?php
require '../controller/profile/getProfile.php';
require '../controller/profile/loginActivity.php';
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

                     <h4 class="fw-bold mb-1">
                        👤 My Profile
                     </h4>

                     <p class="text-muted mb-0">
                        Kelola informasi akun dan aktivitas pembelajaran Anda
                     </p>

                  </div>

                  <button class="btn btn-primary">

                     <i class="ti ti-device-floppy"></i>
                     Simpan Perubahan

                  </button>

               </div>

               <div class="row">

                  <!-- PROFILE CARD -->
                  <div class="col-lg-4">

                     <div class="card border-0 shadow-sm mb-4">

                        <div class="card-body text-center p-4">

                           <img src="../assets/images/profile/user-1.jpg"
                              class="rounded-circle mb-3"
                              width="120">

                           <h4 class="fw-bold mb-1">
                              <?= $dataProfile['fullname'] ?>
                           </h4>

                           <p class="text-muted">
                              <?= $dataProfile['email'] ?>
                           </p>

                           <span class="badge bg-primary">
                              <?= strtoupper($dataProfile['role']) ?>
                           </span>

                           <hr>

                           <div class="row text-center">

                              <div class="col-4">

                                 <h5 class="fw-bold text-primary">
                                    24
                                 </h5>

                                 <small class="text-muted">
                                    Modul
                                 </small>

                              </div>

                              <div class="col-4">

                                 <h5 class="fw-bold text-success">
                                    12
                                 </h5>

                                 <small class="text-muted">
                                    Praktikum
                                 </small>

                              </div>

                              <div class="col-4">

                                 <h5 class="fw-bold text-warning">
                                    8
                                 </h5>

                                 <small class="text-muted">
                                    Sertifikat
                                 </small>

                              </div>

                           </div>

                        </div>

                     </div>

                     <!-- PROGRESS -->
                     <div class="card border-0 shadow-sm">

                        <div class="card-body">

                           <h5 class="fw-bold mb-4">
                              📊 Learning Progress
                           </h5>

                           <div class="mb-3">

                              <div class="d-flex justify-content-between">

                                 <span>IoT Fundamental</span>
                                 <span>90%</span>

                              </div>

                              <div class="progress">
                                 <div class="progress-bar bg-success"
                                    style="width:90%">
                                 </div>
                              </div>

                           </div>

                           <div class="mb-3">

                              <div class="d-flex justify-content-between">

                                 <span>ESP32 Development</span>
                                 <span>75%</span>

                              </div>

                              <div class="progress">
                                 <div class="progress-bar bg-primary"
                                    style="width:75%">
                                 </div>
                              </div>

                           </div>

                           <div>

                              <div class="d-flex justify-content-between">

                                 <span>Industrial IoT</span>
                                 <span>40%</span>

                              </div>

                              <div class="progress">
                                 <div class="progress-bar bg-warning"
                                    style="width:40%">
                                 </div>
                              </div>

                           </div>

                        </div>

                     </div>


                     <!-- SUBSCRIPTION -->
                     <div class="card border-0 shadow-sm">

                        <div class="card-body">

                           <h5 class="fw-bold mb-4">
                              💎 Subscription
                           </h5>

                           <div class="mb-3">

                              <small class="text-muted">
                                 Paket Aktif
                              </small>

                              <div class="fw-bold">
                                 Standard Package
                              </div>

                           </div>

                           <div class="mb-3">

                              <small class="text-muted">
                                 Status
                              </small>

                              <div>
                                 <span class="badge bg-success">
                                    Active
                                 </span>
                              </div>

                           </div>

                           <div>

                              <small class="text-muted">
                                 Expired Date
                              </small>

                              <div class="fw-bold">
                                 18 Juni 2027
                              </div>

                           </div>

                        </div>

                     </div>

                  </div>

                  <!-- PROFILE FORM -->
                  <div class="col-lg-8">

                     <div class="card border-0 shadow-sm mb-4">

                        <div class="card-header bg-white">

                           <h5 class="fw-bold mb-0">
                              📝 Informasi Akun
                           </h5>

                        </div>

                        <div class="card-body">

                           <div class="row">

                              <div class="col-md-6 mb-3">

                                 <label class="form-label">
                                    Nama Lengkap
                                 </label>

                                 <input type="text"
                                    class="form-control"
                                    value="<?= $dataProfile['fullname'] ?>">

                              </div>

                              <div class="col-md-6 mb-3">

                                 <label class="form-label">
                                    Email
                                 </label>

                                 <input type="email"
                                    class="form-control"
                                    value="<?= $dataProfile['email'] ?>">

                              </div>

                              <div class="col-md-6 mb-3">

                                 <label class="form-label">
                                    Role
                                 </label>

                                 <input type="text"
                                    class="form-control"
                                    value="<?= $dataProfile['role'] ?>"
                                    readonly>

                              </div>

                              <div class="col-md-6 mb-3">

                                 <label class="form-label">
                                    Institution
                                 </label>

                                 <input type="text"
                                    class="form-control"
                                    value="<?= $dataProfile['school_name'] ?>">

                              </div>

                              <div class="col-12">

                                 <label class="form-label">
                                    Bio
                                 </label>

                                 <textarea class="form-control"
                                    rows="4">Tertarik pada Embedded System, IoT dan AI Development.</textarea>

                              </div>

                           </div>

                        </div>

                     </div>

                     <!-- ACCOUNT SECURITY -->
                     <div class="card border-0 shadow-sm">

                        <div class="card-header bg-white">

                           <h5 class="fw-bold mb-0">
                              🔐 Keamanan Akun
                           </h5>

                        </div>

                        <div class="card-body">

                           <div class="d-flex justify-content-between align-items-center mb-3">

                              <div>

                                 <div class="fw-semibold">
                                    Password
                                 </div>

                                 <small class="text-muted">
                                    Terakhir diperbarui 30 hari lalu
                                 </small>

                              </div>

                              <button class="btn btn-outline-primary">

                                 Ubah Password

                              </button>

                           </div>

                           <div class="d-flex justify-content-between align-items-center">

                              <div>

                                 <div class="fw-semibold">
                                    Two Factor Authentication
                                 </div>

                                 <small class="text-muted">
                                    Tingkatkan keamanan akun
                                 </small>

                              </div>

                              <button class="btn btn-success">

                                 Aktifkan

                              </button>

                           </div>

                        </div>

                     </div>

                     <!-- LOGIN ACTIVITY -->
                     <div class="card border-0 shadow-sm">

                        <div class="card-header bg-white">

                           <h5 class="fw-bold mb-0">
                              📜 Login Activity
                           </h5>

                        </div>

                        <div class="card-body">

                           <?php while ($dataLogin = mysqli_fetch_assoc($checkLogin)) { ?>

                              <div class="d-flex justify-content-between border-bottom pb-3 mb-3">

                                 <div>

                                    <div class="fw-semibold">
                                       <?= htmlspecialchars($dataLogin['browser'] ?? 'Unknown Device') ?>
                                    </div>

                                    <small class="text-muted">
                                       <?= htmlspecialchars($dataLogin['latitude'] + $dataLogin['longitude']  ?? '-') ?>
                                    </small>

                                 </div>

                                 <small class="<?= ($dataLogin['is_active'] ?? 0) == 1 ? 'text-success' : 'text-secondary' ?>">
                                    <?= ($dataLogin['is_active'] ?? 0) == 1 ? 'Active Now' . '<br>' .  $dataLogin['login_time'] : 'Logged Out' ?>
                                 </small>

                              </div>

                           <?php } ?>

                        </div>

                     </div>

                  </div>

               </div>

            </div>
         </div>
      </div>
   </div>
   <?php require 'library.php'; ?>
</body>

</html>