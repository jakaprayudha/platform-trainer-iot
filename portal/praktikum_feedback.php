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
                     <h4 class="fw-bold mb-1">🧪 Tugas dan Evaluasi</h4>
                     <p class="text-muted mb-0">Monitoring aktivitas praktikum siswa</p>
                  </div>
               </div>

               <!-- CARD -->
               <div class="card shadow-sm border-0">
                  <div class="card-body">

                     <!-- FILTER -->
                     <div class="row mb-3">
                        <div class="col-md-3">
                           <input type="text" class="form-control" placeholder="🔍 Cari Tugas dan Evaluasi" id="searchInput">
                        </div>

                        <div class="col-md-3">
                           <select class="form-select">
                              <option value="">Semua Status</option>
                              <option>Belum Mulai</option>
                              <option>Proses</option>
                              <option>Selesai</option>
                              <option>Dinilai</option>
                           </select>
                        </div>
                     </div>

                     <!-- TABLE -->
                     <style>
                        .table-fixed {
                           min-width: 1100px;
                           /* paksa lebar biar scroll */
                        }

                        .table td,
                        .table th {
                           vertical-align: middle;
                           white-space: nowrap;
                        }

                        .table td.title-cell {
                           white-space: normal;
                           min-width: 200px;
                        }

                        .badge-device {
                           background: #e6f7fb;
                           color: #0dcaf0;
                           font-weight: 500;
                           padding: 6px 10px;
                           border-radius: 20px;
                        }

                        .progress-sm {
                           height: 6px;
                           border-radius: 10px;
                        }

                        .status-badge {
                           padding: 6px 12px;
                           border-radius: 20px;
                           font-size: 12px;
                        }
                     </style>

                     <div class="table-responsive" style="overflow-x:auto;">
                        <table class="table table-hover align-middle table-fixed">
                           <thead class="bg-light">
                              <tr>
                                 <th style="width:50px;">No</th>
                                 <th style="min-width:220px;">Praktikum</th>
                                 <th style="width:120px;">Kelas</th>
                                 <th style="width:140px;">Materi</th>
                                 <th style="min-width:160px;">Progress</th>
                                 <th style="width:120px;">Device</th>
                                 <th style="width:130px;">Nilai</th>
                                 <th style="min-width:220px;">Feedback</th>
                                 <th style="width:130px;">Status</th>
                                 <th style="width:120px;" class="text-center">Aksi</th>
                              </tr>
                           </thead>

                           <tbody>

                              <!-- ROW 1 -->
                              <tr>
                                 <td>1</td>

                                 <td class="title-cell">
                                    <strong>Monitoring Suhu IoT</strong><br>
                                    <small class="text-muted">Sensor DHT22</small>
                                 </td>

                                 <td>XII RPL</td>
                                 <td>IoT Sensor</td>

                                 <td>
                                    <div class="progress progress-sm">
                                       <div class="progress-bar bg-success" style="width:100%"></div>
                                    </div>
                                    <small class="text-muted">100%</small>
                                 </td>

                                 <td><span class="badge-device">ESP32</span></td>

                                 <td><strong class="text-success">85</strong></td>

                                 <td class="title-cell">
                                    <small class="text-muted">
                                       Data sensor sudah berjalan baik, namun perlu optimasi stabilitas koneksi WiFi.
                                    </small>
                                 </td>

                                 <td>
                                    <span class="status-badge bg-success text-white">Dinilai</span>
                                 </td>

                                 <td class="text-center">
                                    <button class="btn btn-sm btn-light"><i class="ti ti-eye"></i></button>
                                 </td>
                              </tr>

                              <!-- ROW 2 -->
                              <tr>
                                 <td>2</td>

                                 <td class="title-cell">
                                    <strong>Kontrol Lampu IoT</strong><br>
                                    <small class="text-muted">Relay Module</small>
                                 </td>

                                 <td>XI TKJ</td>
                                 <td>Automation</td>

                                 <td>
                                    <div class="progress progress-sm">
                                       <div class="progress-bar bg-warning" style="width:80%"></div>
                                    </div>
                                    <small class="text-muted">80%</small>
                                 </td>

                                 <td><span class="badge-device">ESP8266</span></td>

                                 <td>-</td>

                                 <td class="title-cell">
                                    <small class="text-muted">
                                       Menunggu pengumpulan laporan praktikum.
                                    </small>
                                 </td>

                                 <td>
                                    <span class="status-badge bg-warning text-dark">Proses</span>
                                 </td>

                                 <td class="text-center">
                                    <button class="btn btn-sm btn-primary"><i class="ti ti-arrow-right"></i></button>
                                 </td>
                              </tr>

                              <!-- ROW 3 -->
                              <tr>
                                 <td>3</td>

                                 <td class="title-cell">
                                    <strong>Smart Garden System</strong><br>
                                    <small class="text-muted">Soil Moisture + Pump</small>
                                 </td>

                                 <td>X RPL</td>
                                 <td>Automation</td>

                                 <td>
                                    <div class="progress progress-sm">
                                       <div class="progress-bar bg-secondary" style="width:20%"></div>
                                    </div>
                                    <small class="text-muted">20%</small>
                                 </td>

                                 <td><span class="badge-device">ESP32</span></td>

                                 <td>-</td>

                                 <td class="title-cell">
                                    <small class="text-muted">
                                       Belum ada aktivitas praktikum.
                                    </small>
                                 </td>

                                 <td>
                                    <span class="status-badge bg-secondary text-white">Belum Mulai</span>
                                 </td>

                                 <td class="text-center">
                                    <button class="btn btn-sm btn-success"><i class="ti ti-folder"></i></button>
                                 </td>
                              </tr>

                           </tbody>
                        </table>
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