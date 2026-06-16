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
                              Zack
                           </h4>

                           <p class="text-muted">
                              Software Engineer
                           </p>

                           <span class="badge bg-primary">
                              Enterprise Member
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
                                    value="Zack">

                              </div>

                              <div class="col-md-6 mb-3">

                                 <label class="form-label">
                                    Email
                                 </label>

                                 <input type="email"
                                    class="form-control"
                                    value="zack@email.com">

                              </div>

                              <div class="col-md-6 mb-3">

                                 <label class="form-label">
                                    Role
                                 </label>

                                 <input type="text"
                                    class="form-control"
                                    value="Student"
                                    readonly>

                              </div>

                              <div class="col-md-6 mb-3">

                                 <label class="form-label">
                                    Institution
                                 </label>

                                 <input type="text"
                                    class="form-control"
                                    value="Trainer Kit IoT Academy">

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

                  </div>

               </div>

            </div>
         </div>
      </div>
   </div>
   <?php require 'library.php'; ?>
</body>

</html>