<!doctype html>
<html lang="en">

<head>
   <?php require 'partial-head.php' ?>
   <!-- Chart.js -->
   <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

   <style>
      .kpi-card {
         border-radius: 16px;
      }

      .kpi-icon {
         width: 42px;
         height: 42px;
         border-radius: 12px;
         display: flex;
         align-items: center;
         justify-content: center;
      }

      .device-dot {
         width: 10px;
         height: 10px;
         border-radius: 50%;
         display: inline-block;
         margin-right: 6px;
      }

      .online {
         background: #22c55e;
      }

      .offline {
         background: #ef4444;
      }

      .warn {
         background: #f59e0b;
      }

      .table thead th {
         white-space: nowrap;
      }
   </style>
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
                     <h4 class="fw-bold mb-1">📊 Monitoring Belajar IoT</h4>
                     <p class="text-muted mb-0">Pantau aktivitas siswa, device, dan progres praktikum secara real-time</p>
                  </div>


                  <button class="btn btn-light d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#modalTambah">
                     <i class="ti ti-search"></i>
                     Filter
                  </button>
               </div>
               <!-- KPI -->
               <div class="row mb-0">
                  <div class="col-md-3">
                     <div class="card kpi-card shadow-sm p-3">
                        <div class="d-flex justify-content-between align-items-center">
                           <div>
                              <small class="text-muted">Siswa Aktif</small>
                              <h4 class="mb-0">128</h4>
                           </div>
                           <div class="kpi-icon bg-primary text-white">👨‍🎓</div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="card kpi-card shadow-sm p-3">
                        <div class="d-flex justify-content-between align-items-center">
                           <div>
                              <small class="text-muted">Praktikum Berjalan</small>
                              <h4 class="mb-0">7</h4>
                           </div>
                           <div class="kpi-icon bg-success text-white">🧪</div>
                        </div>
                     </div>
                  </div>

                  <div class="col-md-3">
                     <div class="card kpi-card shadow-sm p-3">
                        <div class="d-flex justify-content-between align-items-center">
                           <div>
                              <small class="text-muted">Device Online</small>
                              <h4 class="mb-0">56</h4>
                           </div>
                           <div class="kpi-icon bg-info text-white">📡</div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="card kpi-card shadow-sm p-3">
                        <div class="d-flex justify-content-between align-items-center">
                           <div>
                              <small class="text-muted">Rata-rata Progress</small>
                              <h4 class="mb-0">72%</h4>
                           </div>
                           <div class="kpi-icon bg-warning text-white">📈</div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- CHART -->
               <div class="row mb-4">
                  <div class="col-md-8">
                     <div class="card shadow-sm">
                        <div class="card-body">
                           <h6 class="mb-3">📊 Aktivitas Belajar (Realtime)</h6>
                           <canvas id="activityChart" height="120"></canvas>
                        </div>
                     </div>
                  </div>

                  <div class="col-md-4">
                     <div class="card shadow-sm">
                        <div class="card-body">
                           <h6 class="mb-3">📡 Status Device</h6>

                           <p><span class="device-dot online"></span> Online : 56</p>
                           <p><span class="device-dot warn"></span> Idle : 12</p>
                           <p><span class="device-dot offline"></span> Offline : 8</p>

                        </div>
                     </div>
                  </div>
               </div>


               <!-- TABLE AKTIVITAS -->
               <div class="card shadow-sm">
                  <div class="card-body">

                     <div class="d-flex justify-content-between">
                        <h6>📋 Aktivitas Siswa</h6>
                        <input type="text" class="form-control w-25" placeholder="🔍 Cari siswa...">
                     </div>

                     <div class="table-responsive">
                        <table class="table table-hover align-middle">
                           <thead class="bg-light">
                              <tr>
                                 <th>Nama</th>
                                 <th>Kelas</th>
                                 <th>Praktikum</th>
                                 <th>Progress</th>
                                 <th>Device</th>
                                 <th>Status</th>
                              </tr>
                           </thead>
                           <tbody>

                              <tr>
                                 <td>Ahmad Rizki</td>
                                 <td>XII RPL</td>
                                 <td>Monitoring Suhu</td>
                                 <td>
                                    <div class="progress" style="height:8px;">
                                       <div class="progress-bar bg-success" style="width:80%"></div>
                                    </div>
                                    <small>80%</small>
                                 </td>
                                 <td>ESP32</td>
                                 <td><span class="badge bg-success">Aktif</span></td>
                              </tr>

                              <tr>
                                 <td>Siti Nurhaliza</td>
                                 <td>XI TKJ</td>
                                 <td>Kontrol Lampu</td>
                                 <td>
                                    <div class="progress" style="height:8px;">
                                       <div class="progress-bar bg-warning" style="width:50%"></div>
                                    </div>
                                    <small>50%</small>
                                 </td>
                                 <td>ESP8266</td>
                                 <td><span class="badge bg-warning text-dark">Proses</span></td>
                              </tr>

                              <tr>
                                 <td>Budi Santoso</td>
                                 <td>XII RPL</td>
                                 <td>Smart Door</td>
                                 <td>
                                    <div class="progress" style="height:8px;">
                                       <div class="progress-bar bg-primary" style="width:100%"></div>
                                    </div>
                                    <small>100%</small>
                                 </td>
                                 <td>ESP32 + RFID</td>
                                 <td><span class="badge bg-secondary">Selesai</span></td>
                              </tr>

                           </tbody>
                        </table>
                     </div>

                  </div>

               </div>
            </div>
         </div>
      </div>
      <?php require 'library.php'; ?>
      <!-- ================= MODAL TAMBAH DEVICE ================= -->
      <div class="modal fade" id="modalTambah" tabindex="-1">
         <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content border-0 shadow">

               <div class="modal-header">
                  <h5 class="modal-title">➕ Buat Praktikum</h5>
                  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
               </div>

               <form>
                  <div class="modal-body">
                     <div class="row">

                        <div class="col-md-6 mb-3">
                           <label>Judul</label>
                           <input type="text" class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                           <label>Kelas</label>
                           <select class="form-select">
                              <option>XII RPL</option>
                              <option>XI TKJ</option>
                           </select>
                        </div>

                        <div class="col-md-6 mb-3">
                           <label>Materi</label>
                           <select class="form-select">
                              <option>Sensor DHT22</option>
                              <option>Relay Control</option>
                           </select>
                        </div>

                        <div class="col-md-6 mb-3">
                           <label>Device</label>
                           <input type="text" class="form-control">
                        </div>

                        <div class="col-md-12 mb-3">
                           <label>Instruksi Praktikum</label>
                           <textarea class="form-control" rows="3"></textarea>
                        </div>

                     </div>
                  </div>

                  <div class="modal-footer">
                     <button class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                     <button class="btn btn-primary">💾 Simpan</button>
                  </div>
               </form>

            </div>
         </div>
      </div>
</body>

<script>
   // Chart dummy
   const ctx = document.getElementById('activityChart');

   new Chart(ctx, {
      type: 'line',
      data: {
         labels: ['08:00', '09:00', '10:00', '11:00', '12:00'],
         datasets: [{
            label: 'Aktivitas Siswa',
            data: [10, 25, 40, 60, 80],
            borderWidth: 2,
            tension: 0.4
         }]
      },
      options: {
         responsive: true,
         plugins: {
            legend: {
               display: false
            }
         }
      }
   });
</script>

</html>