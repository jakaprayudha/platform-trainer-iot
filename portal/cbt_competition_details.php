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
                        🏆 Detail Kompetisi CBT
                     </h4>

                     <p class="text-muted mb-0">
                        Informasi lengkap kompetisi dan leaderboard peserta
                     </p>

                  </div>

                  <div>

                     <a href="cbt_competition">
                        <button class="btn btn-light">

                           <i class="ti ti-arrow-left"></i>
                           Kembali

                        </button>
                     </a>


                     <button class="btn btn-warning text-white">

                        <i class="ti ti-edit"></i>
                        Edit Kompetisi

                     </button>

                     <button class="btn btn-primary">

                        <i class="ti ti-users"></i>
                        Kelola Peserta

                     </button>

                  </div>

               </div>

               <!-- HERO -->
               <div class="card border-0 shadow-sm mb-4">

                  <div class="card-body p-5 text-center">

                     <span class="badge bg-danger mb-3">

                        KOMPETISI NASIONAL

                     </span>

                     <h2 class="fw-bold">

                        🏆 IoT National Challenge 2025

                     </h2>

                     <p class="text-muted mx-auto"
                        style="max-width:800px;">

                        Kompetisi CBT untuk menguji kemampuan peserta dalam bidang
                        Internet of Things, Embedded System, ESP32, Sensor, MQTT,
                        Cloud Computing dan Artificial Intelligence.

                     </p>

                     <div class="row mt-4">

                        <div class="col-md-3">

                           <h3 class="fw-bold text-primary">
                              250
                           </h3>

                           <small class="text-muted">
                              Peserta
                           </small>

                        </div>

                        <div class="col-md-3">

                           <h3 class="fw-bold text-success">
                              50
                           </h3>

                           <small class="text-muted">
                              Soal
                           </small>

                        </div>

                        <div class="col-md-3">

                           <h3 class="fw-bold text-warning">
                              120
                           </h3>

                           <small class="text-muted">
                              Menit
                           </small>

                        </div>

                        <div class="col-md-3">

                           <h3 class="fw-bold text-danger">
                              Rp 10 JT
                           </h3>

                           <small class="text-muted">
                              Prize Pool
                           </small>

                        </div>

                     </div>

                  </div>

               </div>

               <div class="row">

                  <!-- LEFT -->
                  <div class="col-lg-8">

                     <!-- INFORMASI -->
                     <div class="card border-0 shadow-sm mb-4">

                        <div class="card-header bg-white">

                           <h5 class="fw-bold mb-0">
                              📋 Informasi Kompetisi
                           </h5>

                        </div>

                        <div class="card-body">

                           <div class="row">

                              <div class="col-md-6 mb-3">

                                 <small class="text-muted">
                                    Tanggal Mulai
                                 </small>

                                 <div class="fw-semibold">
                                    01 Juli 2025
                                 </div>

                              </div>

                              <div class="col-md-6 mb-3">

                                 <small class="text-muted">
                                    Deadline
                                 </small>

                                 <div class="fw-semibold">
                                    31 Juli 2025
                                 </div>

                              </div>

                              <div class="col-md-6 mb-3">

                                 <small class="text-muted">
                                    Tingkat Kesulitan
                                 </small>

                                 <div>

                                    <span class="badge bg-danger">
                                       Advanced
                                    </span>

                                 </div>

                              </div>

                              <div class="col-md-6 mb-3">

                                 <small class="text-muted">
                                    Status
                                 </small>

                                 <div>

                                    <span class="badge bg-success">
                                       Sedang Berlangsung
                                    </span>

                                 </div>

                              </div>

                           </div>

                        </div>

                     </div>

                     <!-- RULES -->
                     <div class="card border-0 shadow-sm mb-4">

                        <div class="card-header bg-white">

                           <h5 class="fw-bold mb-0">
                              📜 Aturan Kompetisi
                           </h5>

                        </div>

                        <div class="card-body">

                           <ul class="mb-0">

                              <li>Peserta hanya dapat mengerjakan 1 kali.</li>
                              <li>Durasi ujian 120 menit.</li>
                              <li>Dilarang membuka sumber lain saat ujian.</li>
                              <li>Nilai tertinggi menjadi pemenang.</li>
                              <li>Jika nilai sama maka waktu tercepat menjadi pemenang.</li>

                           </ul>

                        </div>

                     </div>

                     <!-- LEADERBOARD -->
                     <div class="card border-0 shadow-sm">

                        <div class="card-header bg-white">

                           <h5 class="fw-bold mb-0">
                              🥇 Top 10 Leaderboard
                           </h5>

                        </div>

                        <div class="card-body p-0">

                           <div class="table-responsive">

                              <table class="table table-hover align-middle mb-0">

                                 <thead class="bg-light">

                                    <tr>

                                       <th>Rank</th>
                                       <th>Peserta</th>
                                       <th>Nilai</th>
                                       <th>Waktu</th>

                                    </tr>

                                 </thead>

                                 <tbody>

                                    <tr>

                                       <td>🥇 1</td>
                                       <td>Ahmad Fauzi</td>
                                       <td>98</td>
                                       <td>78 Menit</td>

                                    </tr>

                                    <tr>

                                       <td>🥈 2</td>
                                       <td>Siti Nurhaliza</td>
                                       <td>96</td>
                                       <td>82 Menit</td>

                                    </tr>

                                    <tr>

                                       <td>🥉 3</td>
                                       <td>Budi Santoso</td>
                                       <td>95</td>
                                       <td>85 Menit</td>

                                    </tr>

                                 </tbody>

                              </table>

                           </div>

                        </div>

                     </div>

                  </div>

                  <!-- RIGHT -->
                  <div class="col-lg-4">

                     <!-- COUNTDOWN -->
                     <div class="card border-0 shadow-sm mb-4">

                        <div class="card-header bg-white">

                           <h5 class="fw-bold mb-0">
                              ⏳ Countdown
                           </h5>

                        </div>

                        <div class="card-body text-center">

                           <h2 class="fw-bold text-danger">
                              15 Hari
                           </h2>

                           <small class="text-muted">
                              Menuju Penutupan Kompetisi
                           </small>

                        </div>

                     </div>

                     <!-- HADIAH -->
                     <div class="card border-0 shadow-sm mb-4">

                        <div class="card-header bg-white">

                           <h5 class="fw-bold mb-0">
                              🎁 Hadiah
                           </h5>

                        </div>

                        <div class="card-body">

                           <div class="mb-3">

                              🥇 Juara 1
                              <div class="fw-bold text-success">
                                 Rp 5.000.000
                              </div>

                           </div>

                           <div class="mb-3">

                              🥈 Juara 2
                              <div class="fw-bold text-primary">
                                 Rp 3.000.000
                              </div>

                           </div>

                           <div>

                              🥉 Juara 3
                              <div class="fw-bold text-warning">
                                 Rp 2.000.000
                              </div>

                           </div>

                        </div>

                     </div>

                     <!-- QUICK ACTION -->
                     <div class="card border-0 shadow-sm">

                        <div class="card-header bg-white">

                           <h5 class="fw-bold mb-0">
                              ⚡ Quick Action
                           </h5>

                        </div>

                        <div class="card-body">

                           <div class="d-grid gap-3">

                              <button class="btn btn-primary">

                                 <i class="ti ti-users"></i>
                                 Lihat Peserta

                              </button>

                              <button class="btn btn-success">

                                 <i class="ti ti-chart-bar"></i>
                                 Hasil Kompetisi

                              </button>

                              <button class="btn btn-warning text-white">

                                 <i class="ti ti-certificate"></i>
                                 Pemenang

                              </button>

                              <button class="btn btn-danger">

                                 <i class="ti ti-player-stop"></i>
                                 Tutup Kompetisi

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