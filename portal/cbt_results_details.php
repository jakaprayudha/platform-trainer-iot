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
                        📄 Detail Hasil CBT
                     </h4>

                     <p class="text-muted mb-0">
                        Informasi lengkap hasil ujian peserta
                     </p>

                  </div>

                  <div>

                     <a href="cbt_results">
                        <button class="btn btn-light">

                           <i class="ti ti-arrow-left"></i>
                           Kembali

                        </button>
                     </a>

                     <button class="btn btn-success">

                        <i class="ti ti-download"></i>
                        Export PDF

                     </button>



                  </div>

               </div>

               <div class="row">

                  <!-- LEFT -->
                  <div class="col-lg-8">

                     <!-- PROFILE -->
                     <div class="card border-0 shadow-sm mb-4">

                        <div class="card-body">

                           <div class="d-flex align-items-center">

                              <img src="../assets/images/profile/user-1.jpg"
                                 class="rounded-circle me-3"
                                 width="80">

                              <div>

                                 <h4 class="fw-bold mb-1">
                                    Ahmad Fauzi
                                 </h4>

                                 <div class="text-muted">
                                    XII RPL
                                 </div>

                                 <span class="badge bg-success mt-2">
                                    Lulus
                                 </span>

                              </div>

                           </div>

                        </div>

                     </div>

                     <!-- DETAIL JAWABAN -->
                     <div class="card border-0 shadow-sm">

                        <div class="card-header bg-white">

                           <h5 class="fw-bold mb-0">
                              📝 Detail Jawaban
                           </h5>

                        </div>

                        <div class="card-body">

                           <!-- SOAL 1 -->
                           <div class="border rounded p-3 mb-3">

                              <div class="fw-bold mb-2">

                                 1. Apa fungsi pin GPIO pada ESP32?

                              </div>

                              <div>

                                 Jawaban Peserta:
                                 <span class="text-success fw-semibold">

                                    Input dan Output Digital

                                 </span>

                              </div>

                              <div>

                                 Jawaban Benar:
                                 <span class="text-success fw-semibold">

                                    Input dan Output Digital

                                 </span>

                              </div>

                           </div>

                           <!-- SOAL 2 -->
                           <div class="border rounded p-3 mb-3">

                              <div class="fw-bold mb-2">

                                 2. Berapa tegangan kerja ESP8266?

                              </div>

                              <div>

                                 Jawaban Peserta:
                                 <span class="text-danger fw-semibold">

                                    5V

                                 </span>

                              </div>

                              <div>

                                 Jawaban Benar:
                                 <span class="text-success fw-semibold">

                                    3.3V

                                 </span>

                              </div>

                           </div>

                           <!-- SOAL 3 -->
                           <div class="border rounded p-3">

                              <div class="fw-bold mb-2">

                                 3. Jelaskan fungsi sensor DHT11!

                              </div>

                              <div class="mb-2">

                                 Jawaban Peserta:

                              </div>

                              <div class="bg-light rounded p-3">

                                 Sensor DHT11 digunakan untuk
                                 membaca suhu dan kelembaban udara.

                              </div>

                           </div>

                        </div>

                     </div>

                  </div>

                  <!-- RIGHT -->
                  <div class="col-lg-4">

                     <!-- SCORE -->
                     <div class="card border-0 shadow-sm mb-4">

                        <div class="card-header bg-white">

                           <h5 class="fw-bold mb-0">
                              🏆 Hasil Nilai
                           </h5>

                        </div>

                        <div class="card-body text-center">

                           <h1 class="fw-bold text-success">
                              93
                           </h1>

                           <div class="text-muted mb-3">
                              Nilai Akhir
                           </div>

                           <span class="badge bg-success">
                              Lulus
                           </span>

                        </div>

                     </div>

                     <!-- STATISTIK -->
                     <div class="card border-0 shadow-sm mb-4">

                        <div class="card-header bg-white">

                           <h5 class="fw-bold mb-0">
                              📊 Statistik
                           </h5>

                        </div>

                        <div class="card-body">

                           <div class="d-flex justify-content-between mb-3">

                              <span>Jumlah Soal</span>
                              <strong>30</strong>

                           </div>

                           <div class="d-flex justify-content-between mb-3">

                              <span>Jawaban Benar</span>
                              <strong class="text-success">
                                 28
                              </strong>

                           </div>

                           <div class="d-flex justify-content-between mb-3">

                              <span>Jawaban Salah</span>
                              <strong class="text-danger">
                                 2
                              </strong>

                           </div>

                           <div class="d-flex justify-content-between">

                              <span>Durasi</span>
                              <strong>
                                 78 Menit
                              </strong>

                           </div>

                        </div>

                     </div>

                     <!-- INFO CBT -->
                     <div class="card border-0 shadow-sm">

                        <div class="card-header bg-white">

                           <h5 class="fw-bold mb-0">
                              📌 Informasi CBT
                           </h5>

                        </div>

                        <div class="card-body">

                           <div class="mb-3">

                              <small class="text-muted">
                                 Nama CBT
                              </small>

                              <div class="fw-semibold">
                                 Ujian ESP32 Fundamental
                              </div>

                           </div>

                           <div class="mb-3">

                              <small class="text-muted">
                                 Tanggal
                              </small>

                              <div>
                                 15 Juli 2025
                              </div>

                           </div>

                           <div>

                              <small class="text-muted">
                                 Ranking
                              </small>

                              <div class="fw-bold text-primary">
                                 #1 dari 25 Peserta
                              </div>

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