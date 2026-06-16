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
                        📋 My Tasks
                     </h4>

                     <p class="text-muted mb-0">
                        Kelola tugas, praktikum, project dan aktivitas pembelajaran Anda
                     </p>

                  </div>

                  <button class="btn btn-primary">

                     <i class="ti ti-filter"></i>
                     Filter Task

                  </button>

               </div>

               <!-- SUMMARY -->
               <div class="row">

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="card border-0 shadow-sm">

                        <div class="card-body">

                           <div class="d-flex justify-content-between align-items-center">

                              <div>

                                 <h3 class="fw-bold text-primary mb-0">
                                    12
                                 </h3>

                                 <small class="text-muted">
                                    Total Task
                                 </small>

                              </div>

                              <i class="ti ti-list-check text-primary fs-8"></i>

                           </div>

                        </div>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="card border-0 shadow-sm">

                        <div class="card-body">

                           <div class="d-flex justify-content-between align-items-center">

                              <div>

                                 <h3 class="fw-bold text-warning mb-0">
                                    4
                                 </h3>

                                 <small class="text-muted">
                                    In Progress
                                 </small>

                              </div>

                              <i class="ti ti-loader text-warning fs-8"></i>

                           </div>

                        </div>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="card border-0 shadow-sm">

                        <div class="card-body">

                           <div class="d-flex justify-content-between align-items-center">

                              <div>

                                 <h3 class="fw-bold text-success mb-0">
                                    7
                                 </h3>

                                 <small class="text-muted">
                                    Completed
                                 </small>

                              </div>

                              <i class="ti ti-check text-success fs-8"></i>

                           </div>

                        </div>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="card border-0 shadow-sm">

                        <div class="card-body">

                           <div class="d-flex justify-content-between align-items-center">

                              <div>

                                 <h3 class="fw-bold text-danger mb-0">
                                    1
                                 </h3>

                                 <small class="text-muted">
                                    Overdue
                                 </small>

                              </div>

                              <i class="ti ti-alert-circle text-danger fs-8"></i>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>

               <div class="row">

                  <!-- LEFT -->
                  <div class="col-lg-8">

                     <div class="card border-0 shadow-sm">

                        <div class="card-header bg-white">

                           <h5 class="fw-bold mb-0">
                              📝 Daftar Tugas
                           </h5>

                        </div>

                        <div class="card-body p-0">

                           <!-- TASK 1 -->
                           <div class="p-4 border-bottom">

                              <div class="d-flex justify-content-between align-items-start">

                                 <div>

                                    <span class="badge bg-primary mb-2">
                                       Praktikum
                                    </span>

                                    <h6 class="fw-bold">
                                       Praktikum Sensor DHT11
                                    </h6>

                                    <small class="text-muted">

                                       Membuat sistem monitoring suhu dan kelembaban
                                       menggunakan ESP32 dan DHT11.

                                    </small>

                                 </div>

                                 <span class="badge bg-warning">
                                    In Progress
                                 </span>

                              </div>

                              <div class="progress mt-3"
                                 style="height:8px;">

                                 <div class="progress-bar bg-primary"
                                    style="width:60%">
                                 </div>

                              </div>

                              <div class="d-flex justify-content-between mt-2">

                                 <small class="text-muted">
                                    Progress 60%
                                 </small>

                                 <small class="text-danger">
                                    Deadline: 20 Jul 2025
                                 </small>

                              </div>

                              <div class="mt-3">

                                 <button class="btn btn-primary btn-sm">

                                    Continue Task

                                 </button>

                              </div>

                           </div>

                           <!-- TASK 2 -->
                           <div class="p-4 border-bottom">

                              <div class="d-flex justify-content-between align-items-start">

                                 <div>

                                    <span class="badge bg-success mb-2">
                                       Quiz
                                    </span>

                                    <h6 class="fw-bold">
                                       Quiz ESP8266 WiFi
                                    </h6>

                                    <small class="text-muted">

                                       Evaluasi materi komunikasi WiFi,
                                       HTTP dan MQTT.

                                    </small>

                                 </div>

                                 <span class="badge bg-success">
                                    Completed
                                 </span>

                              </div>

                           </div>

                           <!-- TASK 3 -->
                           <div class="p-4 border-bottom">

                              <div class="d-flex justify-content-between align-items-start">

                                 <div>

                                    <span class="badge bg-info mb-2">
                                       Project
                                    </span>

                                    <h6 class="fw-bold">
                                       Smart Home IoT Project
                                    </h6>

                                    <small class="text-muted">

                                       Integrasi sensor, relay,
                                       dashboard monitoring dan Telegram Bot.

                                    </small>

                                 </div>

                                 <span class="badge bg-danger">
                                    Due Tomorrow
                                 </span>

                              </div>

                              <div class="mt-3">

                                 <button class="btn btn-outline-primary btn-sm">

                                    Open Project

                                 </button>

                              </div>

                           </div>

                           <!-- TASK 4 -->
                           <div class="p-4">

                              <div class="d-flex justify-content-between align-items-start">

                                 <div>

                                    <span class="badge bg-secondary mb-2">
                                       Assignment
                                    </span>

                                    <h6 class="fw-bold">
                                       Laporan Praktikum OLED Display
                                    </h6>

                                    <small class="text-muted">

                                       Upload laporan hasil praktikum
                                       penggunaan OLED SSD1306.

                                    </small>

                                 </div>

                                 <span class="badge bg-secondary">
                                    Pending Review
                                 </span>

                              </div>

                           </div>

                        </div>

                     </div>

                  </div>

                  <!-- RIGHT -->
                  <div class="col-lg-4">

                     <!-- DEADLINE -->
                     <div class="card border-0 shadow-sm mb-4">

                        <div class="card-header bg-white">

                           <h5 class="fw-bold mb-0">
                              ⏰ Upcoming Deadline
                           </h5>

                        </div>

                        <div class="card-body">

                           <div class="mb-3">

                              <div class="fw-semibold">
                                 Smart Home IoT Project
                              </div>

                              <small class="text-danger">
                                 Deadline Besok
                              </small>

                           </div>

                           <div class="mb-3">

                              <div class="fw-semibold">
                                 DHT11 Monitoring
                              </div>

                              <small class="text-warning">
                                 20 Jul 2025
                              </small>

                           </div>

                           <div>

                              <div class="fw-semibold">
                                 MQTT Quiz
                              </div>

                              <small class="text-primary">
                                 22 Jul 2025
                              </small>

                           </div>

                        </div>

                     </div>

                     <!-- ACHIEVEMENT -->
                     <div class="card border-0 shadow-sm mb-4">

                        <div class="card-header bg-white">

                           <h5 class="fw-bold mb-0">
                              🏆 Achievement
                           </h5>

                        </div>

                        <div class="card-body">

                           <div class="mb-3">

                              <span class="badge bg-success">
                                 Completed
                              </span>

                              <div class="mt-2">
                                 10 Praktikum Berhasil Diselesaikan
                              </div>

                           </div>

                           <div class="mb-3">

                              <span class="badge bg-primary">
                                 Quiz Master
                              </span>

                              <div class="mt-2">
                                 Nilai Quiz Rata-rata Diatas 90
                              </div>

                           </div>

                           <div>

                              <span class="badge bg-warning text-dark">
                                 Certified
                              </span>

                              <div class="mt-2">
                                 IoT Fundamental Certificate
                              </div>

                           </div>

                        </div>

                     </div>

                     <!-- QUICK ACTION -->
                     <div class="card border-0 shadow-sm">

                        <div class="card-header bg-white">

                           <h5 class="fw-bold mb-0">
                              🚀 Quick Action
                           </h5>

                        </div>

                        <div class="card-body">

                           <div class="d-grid gap-3">

                              <button class="btn btn-primary">

                                 <i class="ti ti-playstation-circle"></i>
                                 Continue Learning

                              </button>

                              <button class="btn btn-success">

                                 <i class="ti ti-certificate"></i>
                                 View Certificate

                              </button>

                              <button class="btn btn-warning text-white">

                                 <i class="ti ti-file-download"></i>
                                 Download Report

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