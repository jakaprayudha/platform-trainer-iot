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
                        🖥️ Detail CBT Assessment
                     </h4>

                     <p class="text-muted mb-0">
                        Informasi lengkap pelaksanaan CBT dan assessment
                     </p>

                  </div>


                  <div>

                     <a href="cbt_assesment">
                        <button class="btn btn-light">

                           <i class="ti ti-arrow-left"></i>
                           Kembali

                        </button>
                     </a>

                     <button class="btn btn-warning text-white">

                        <i class="ti ti-edit"></i>
                        Edit CBT

                     </button>

                     <button class="btn btn-primary">

                        <i class="ti ti-player-play"></i>
                        Mulai CBT

                     </button>

                  </div>

               </div>

               <div class="row">

                  <!-- LEFT -->
                  <div class="col-lg-8">

                     <!-- INFO CBT -->
                     <div class="card border-0 shadow-sm mb-4">

                        <div class="card-header bg-white">

                           <h5 class="fw-bold mb-0">
                              📋 Informasi CBT
                           </h5>

                        </div>

                        <div class="card-body">

                           <h4 class="fw-bold">
                              Ujian ESP32 Fundamental
                           </h4>

                           <p class="text-muted">

                              Assessment untuk mengukur pemahaman siswa mengenai
                              ESP32, GPIO, WiFi, MQTT dan integrasi sensor IoT.

                           </p>

                           <div class="row">

                              <div class="col-md-4 mb-3">

                                 <small class="text-muted">
                                    Kelas
                                 </small>

                                 <div class="fw-semibold">
                                    XII RPL
                                 </div>

                              </div>

                              <div class="col-md-4 mb-3">

                                 <small class="text-muted">
                                    Jumlah Soal
                                 </small>

                                 <div class="fw-semibold">
                                    30 Soal
                                 </div>

                              </div>

                              <div class="col-md-4 mb-3">

                                 <small class="text-muted">
                                    Durasi
                                 </small>

                                 <div class="fw-semibold">
                                    90 Menit
                                 </div>

                              </div>

                           </div>

                        </div>

                     </div>

                     <!-- DAFTAR SOAL -->
                     <div class="card border-0 shadow-sm">

                        <div class="card-header bg-white">

                           <h5 class="fw-bold mb-0">
                              📚 Daftar Soal
                           </h5>

                        </div>

                        <div class="card-body p-0">

                           <div class="table-responsive">

                              <table class="table table-hover align-middle mb-0">

                                 <thead class="bg-light">

                                    <tr>

                                       <th>No</th>
                                       <th>Pertanyaan</th>
                                       <th>Kategori</th>
                                       <th>Poin</th>

                                    </tr>

                                 </thead>

                                 <tbody>

                                    <tr>

                                       <td>1</td>

                                       <td>
                                          Apa fungsi pin GPIO pada ESP32?
                                       </td>

                                       <td>

                                          <span class="badge bg-primary">
                                             ESP32
                                          </span>

                                       </td>

                                       <td>
                                          10
                                       </td>

                                    </tr>

                                    <tr>

                                       <td>2</td>

                                       <td>
                                          Jelaskan cara kerja sensor DHT11.
                                       </td>

                                       <td>

                                          <span class="badge bg-info">
                                             Sensor
                                          </span>

                                       </td>

                                       <td>
                                          20
                                       </td>

                                    </tr>

                                    <tr>

                                       <td>3</td>

                                       <td>
                                          Sebutkan protokol komunikasi IoT.
                                       </td>

                                       <td>

                                          <span class="badge bg-dark">
                                             IoT
                                          </span>

                                       </td>

                                       <td>
                                          30
                                       </td>

                                    </tr>

                                 </tbody>

                              </table>

                           </div>

                        </div>

                     </div>

                  </div>

                  <!-- RIGHT -->
                  <div class="col-lg-4">

                     <!-- STATUS -->
                     <div class="card border-0 shadow-sm mb-4">

                        <div class="card-header bg-white">

                           <h5 class="fw-bold mb-0">
                              🚦 Status CBT
                           </h5>

                        </div>

                        <div class="card-body">

                           <div class="mb-3">

                              <small class="text-muted">
                                 Status
                              </small>

                              <div>

                                 <span class="badge bg-success">
                                    Sedang Berjalan
                                 </span>

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
                                 Waktu
                              </small>

                              <div>
                                 08:00 - 09:30 WIB
                              </div>

                           </div>

                        </div>

                     </div>

                     <!-- STATISTIK -->
                     <div class="card border-0 shadow-sm mb-4">

                        <div class="card-header bg-white">

                           <h5 class="fw-bold mb-0">
                              📊 Statistik Peserta
                           </h5>

                        </div>

                        <div class="card-body">

                           <div class="d-flex justify-content-between mb-3">

                              <span>Total Peserta</span>

                              <strong>25</strong>

                           </div>

                           <div class="d-flex justify-content-between mb-3">

                              <span>Sudah Mengerjakan</span>

                              <strong class="text-success">
                                 18
                              </strong>

                           </div>

                           <div class="d-flex justify-content-between">

                              <span>Belum Mengerjakan</span>

                              <strong class="text-danger">
                                 7
                              </strong>

                           </div>

                        </div>

                     </div>

                     <!-- PENGATURAN -->
                     <div class="card border-0 shadow-sm mb-4">

                        <div class="card-header bg-white">

                           <h5 class="fw-bold mb-0">
                              ⚙️ Pengaturan CBT
                           </h5>

                        </div>

                        <div class="card-body">

                           <div class="mb-3">

                              ✅ Acak Soal

                           </div>

                           <div class="mb-3">

                              ✅ Acak Jawaban

                           </div>

                           <div class="mb-3">

                              ✅ Timer Aktif

                           </div>

                           <div>

                              ❌ Review Setelah Ujian

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

                                 <i class="ti ti-users"></i>
                                 Lihat Peserta

                              </button>

                              <button class="btn btn-success">

                                 <i class="ti ti-chart-bar"></i>
                                 Hasil CBT

                              </button>

                              <button class="btn btn-danger">

                                 <i class="ti ti-player-stop"></i>
                                 Akhiri CBT

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