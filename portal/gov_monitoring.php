<!doctype html>
<html lang="en">

<head>
   <?php require 'partial-head.php' ?>

   <style>
      .hero-card {
         background: linear-gradient(135deg, #1e3a8a, #2563eb);
         border-radius: 24px;
         overflow: hidden;
         position: relative;
      }

      .hero-card::before {
         content: "";
         position: absolute;
         width: 350px;
         height: 350px;
         background: rgba(255, 255, 255, 0.06);
         border-radius: 50%;
         top: -120px;
         right: -120px;
      }

      .hero-card::after {
         content: "";
         position: absolute;
         width: 250px;
         height: 250px;
         background: rgba(255, 255, 255, 0.06);
         border-radius: 50%;
         bottom: -100px;
         left: -100px;
      }

      .hero-content {
         position: relative;
         z-index: 2;
      }

      .stat-card {
         border-radius: 20px;
         border: 0;
         transition: .3s;
      }

      .stat-card:hover {
         transform: translateY(-5px);
      }

      .activity-item {
         border-left: 4px solid #2563eb;
         padding-left: 18px;
         position: relative;
         margin-bottom: 25px;
      }

      .activity-item::before {
         content: "";
         width: 14px;
         height: 14px;
         border-radius: 50%;
         background: #2563eb;
         position: absolute;
         left: -9px;
         top: 5px;
      }

      .school-card {
         border-radius: 18px;
         transition: .3s;
         border: 1px solid #eef2ff;
      }

      .school-card:hover {
         transform: translateY(-4px);
      }

      .progress {
         height: 10px;
         border-radius: 30px;
      }

      .ranking-number {
         width: 42px;
         height: 42px;
         border-radius: 50%;
         background: #eff6ff;
         display: flex;
         align-items: center;
         justify-content: center;
         font-weight: bold;
         color: #2563eb;
      }

      .table-monitoring tbody tr:hover {
         background: #f8fafc;
      }

      .badge-soft-primary {
         background: #dbeafe;
         color: #1d4ed8;
      }

      .badge-soft-success {
         background: #dcfce7;
         color: #166534;
      }

      .badge-soft-warning {
         background: #fef3c7;
         color: #92400e;
      }

      .badge-soft-danger {
         background: #fee2e2;
         color: #b91c1c;
      }
   </style>

</head>

<body>

   <div class="page-wrapper" id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin6"
      data-sidebartype="full"
      data-sidebar-position="fixed"
      data-header-position="fixed">

      <?php require 'partial-topstrip.php' ?>

      <aside class="left-sidebar">
         <?php require 'partial-sidebar.php' ?>
      </aside>

      <div class="body-wrapper">

         <?php require 'partial-header.php' ?>

         <div class="body-wrapper-inner">
            <div class="container-fluid">

               <!-- HEADER -->
               <div class="d-flex justify-content-between align-items-center mb-4">

                  <div>
                     <h4 class="fw-bold mb-1">
                        🏛 Monitoring Platform Pendidikan IoT
                     </h4>

                     <p class="text-muted mb-0">
                        Monitoring aktivitas penggunaan platform training IoT seluruh sekolah
                     </p>
                  </div>

                  <div class="d-flex gap-2">

                     <button class="btn btn-light">
                        <i class="ti ti-download"></i>
                        Export PDF
                     </button>

                     <button class="btn btn-primary">
                        <i class="ti ti-refresh"></i>
                        Refresh Data
                     </button>

                  </div>

               </div>

               <!-- HERO -->
               <div class="card border-0 shadow-sm mb-4">

                  <div class="card-body hero-card p-5 text-white">

                     <div class="hero-content">

                        <div class="row align-items-center">

                           <div class="col-lg-8">

                              <div class="d-flex gap-2 mb-3">

                                 <span class="badge bg-light text-dark">
                                    Monitoring Realtime
                                 </span>

                                 <span class="badge bg-success">
                                    Platform Aktif
                                 </span>

                              </div>

                              <h2 class="fw-bold text-white mb-3">
                                 fw-bold mb-0 text-white text-white
                              </h2>

                              <p class="mb-4" style="max-width:700px;">
                                 Monitoring penggunaan platform pembelajaran IoT,
                                 progres sekolah, aktivitas siswa, materi populer,
                                 dan performa pembelajaran secara realtime.
                              </p>

                              <div class="d-flex flex-wrap gap-5">

                                 <div>
                                    <small>Total Sekolah</small>
                                    <h3 class="fw-bold mb-0 text-white">124</h3>
                                 </div>

                                 <div>
                                    <small>Total Siswa</small>
                                    <h3 class="fw-bold mb-0 text-white">12.540</h3>
                                 </div>

                                 <div>
                                    <small>Materi Aktif</small>
                                    <h3 class="fw-bold mb-0 text-white">245</h3>
                                 </div>

                                 <div>
                                    <small>Training Hari Ini</small>
                                    <h3 class="fw-bold mb-0 text-white">1.284</h3>
                                 </div>

                              </div>

                           </div>

                           <div class="col-lg-4 text-center">

                              <i class="ti ti-device-desktop-analytics"
                                 style="font-size:180px; opacity:.15;">
                              </i>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>

               <!-- STAT -->
               <div class="row mb-4">

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="card stat-card shadow-sm">

                        <div class="card-body">

                           <div class="d-flex justify-content-between">

                              <div>

                                 <small class="text-muted">
                                    Sekolah Aktif
                                 </small>

                                 <h3 class="fw-bold mt-2">
                                    118
                                 </h3>

                                 <span class="badge badge-soft-success">
                                    +12%
                                 </span>

                              </div>

                              <div class="text-primary">
                                 <i class="ti ti-building-school fs-12"></i>
                              </div>

                           </div>

                        </div>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="card stat-card shadow-sm">

                        <div class="card-body">

                           <div class="d-flex justify-content-between">

                              <div>

                                 <small class="text-muted">
                                    User Online
                                 </small>

                                 <h3 class="fw-bold mt-2">
                                    2.145
                                 </h3>

                                 <span class="badge badge-soft-primary">
                                    realtime
                                 </span>

                              </div>

                              <div class="text-success">
                                 <i class="ti ti-users fs-12"></i>
                              </div>

                           </div>

                        </div>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="card stat-card shadow-sm">

                        <div class="card-body">

                           <div class="d-flex justify-content-between">

                              <div>

                                 <small class="text-muted">
                                    Penyelesaian Materi
                                 </small>

                                 <h3 class="fw-bold mt-2">
                                    84%
                                 </h3>

                                 <span class="badge badge-soft-success">
                                    meningkat
                                 </span>

                              </div>

                              <div class="text-warning">
                                 <i class="ti ti-chart-bar fs-12"></i>
                              </div>

                           </div>

                        </div>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="card stat-card shadow-sm">

                        <div class="card-body">

                           <div class="d-flex justify-content-between">

                              <div>

                                 <small class="text-muted">
                                    Sistem Offline
                                 </small>

                                 <h3 class="fw-bold mt-2">
                                    6
                                 </h3>

                                 <span class="badge badge-soft-danger">
                                    perlu pengecekan
                                 </span>

                              </div>

                              <div class="text-danger">
                                 <i class="ti ti-alert-triangle fs-12"></i>
                              </div>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>

               <div class="row">

                  <!-- LEFT -->
                  <div class="col-lg-8">

                     <!-- TABLE -->
                     <div class="card shadow-sm border-0 mb-4">

                        <div class="card-body">

                           <div class="d-flex justify-content-between align-items-center mb-4">

                              <div>

                                 <h5 class="fw-bold mb-1">
                                    📊 Monitoring Sekolah
                                 </h5>

                                 <small class="text-muted">
                                    Aktivitas penggunaan platform tiap sekolah
                                 </small>

                              </div>

                              <div class="d-flex gap-2">

                                 <input type="text"
                                    class="form-control"
                                    placeholder="Cari sekolah...">

                                 <select class="form-select">
                                    <option>Semua Status</option>
                                    <option>Aktif</option>
                                    <option>Offline</option>
                                 </select>

                              </div>

                           </div>

                           <div class="table-responsive">

                              <table class="table table-hover align-middle table-monitoring">

                                 <thead class="bg-light">

                                    <tr>
                                       <th>Sekolah</th>
                                       <th>User Aktif</th>
                                       <th>Materi</th>
                                       <th>Progress</th>
                                       <th>Status</th>
                                       <th>Aksi</th>
                                    </tr>

                                 </thead>

                                 <tbody>

                                    <tr>

                                       <td>
                                          <div class="fw-semibold">
                                             SMKN 1 Medan
                                          </div>

                                          <small class="text-muted">
                                             Sumatera Utara
                                          </small>
                                       </td>

                                       <td>245 User</td>

                                       <td>54 Materi</td>

                                       <td width="220">

                                          <div class="d-flex justify-content-between mb-1">

                                             <small>85%</small>

                                             <small class="text-success">
                                                Sangat Baik
                                             </small>

                                          </div>

                                          <div class="progress">
                                             <div class="progress-bar"
                                                style="width:85%">
                                             </div>
                                          </div>

                                       </td>

                                       <td>
                                          <span class="badge bg-success">
                                             Aktif
                                          </span>
                                       </td>

                                       <td>
                                          <button class="btn btn-light btn-sm">
                                             <i class="ti ti-eye"></i>
                                          </button>
                                       </td>

                                    </tr>

                                    <tr>

                                       <td>
                                          <div class="fw-semibold">
                                             SMKN 5 Binjai
                                          </div>

                                          <small class="text-muted">
                                             Sumatera Utara
                                          </small>
                                       </td>

                                       <td>180 User</td>

                                       <td>40 Materi</td>

                                       <td width="220">

                                          <div class="d-flex justify-content-between mb-1">

                                             <small>67%</small>

                                             <small class="text-warning">
                                                Cukup
                                             </small>

                                          </div>

                                          <div class="progress">
                                             <div class="progress-bar bg-warning"
                                                style="width:67%">
                                             </div>
                                          </div>

                                       </td>

                                       <td>
                                          <span class="badge bg-warning text-dark">
                                             Monitoring
                                          </span>
                                       </td>

                                       <td>
                                          <button class="btn btn-light btn-sm">
                                             <i class="ti ti-eye"></i>
                                          </button>
                                       </td>

                                    </tr>

                                    <tr>

                                       <td>
                                          <div class="fw-semibold">
                                             SMKN 2 Tebing Tinggi
                                          </div>

                                          <small class="text-muted">
                                             Sumatera Utara
                                          </small>
                                       </td>

                                       <td>24 User</td>

                                       <td>10 Materi</td>

                                       <td width="220">

                                          <div class="d-flex justify-content-between mb-1">

                                             <small>28%</small>

                                             <small class="text-danger">
                                                Rendah
                                             </small>

                                          </div>

                                          <div class="progress">
                                             <div class="progress-bar bg-danger"
                                                style="width:28%">
                                             </div>
                                          </div>

                                       </td>

                                       <td>
                                          <span class="badge bg-danger">
                                             Offline
                                          </span>
                                       </td>

                                       <td>
                                          <button class="btn btn-light btn-sm">
                                             <i class="ti ti-eye"></i>
                                          </button>
                                       </td>

                                    </tr>

                                 </tbody>

                              </table>

                           </div>

                        </div>

                     </div>

                     <!-- ACTIVITY -->
                     <div class="card shadow-sm border-0">

                        <div class="card-body">

                           <div class="d-flex justify-content-between align-items-center mb-4">

                              <div>

                                 <h5 class="fw-bold mb-1">
                                    🕒 Aktivitas Terbaru
                                 </h5>

                                 <small class="text-muted">
                                    Aktivitas platform realtime
                                 </small>

                              </div>

                           </div>

                           <div class="activity-item">

                              <h6 class="fw-bold">
                                 SMKN 1 Medan menyelesaikan modul ESP32
                              </h6>

                              <p class="text-muted mb-1">
                                 120 siswa berhasil menyelesaikan praktikum monitoring suhu.
                              </p>

                              <small class="text-primary">
                                 5 menit lalu
                              </small>

                           </div>

                           <div class="activity-item">

                              <h6 class="fw-bold">
                                 Upload materi baru
                              </h6>

                              <p class="text-muted mb-1">
                                 Modul Smart Farming berhasil ditambahkan ke platform.
                              </p>

                              <small class="text-primary">
                                 15 menit lalu
                              </small>

                           </div>

                           <div class="activity-item">

                              <h6 class="fw-bold">
                                 Sistem mendeteksi sekolah offline
                              </h6>

                              <p class="text-muted mb-1">
                                 SMKN 2 Tebing Tinggi tidak aktif selama 3 hari.
                              </p>

                              <small class="text-danger">
                                 30 menit lalu
                              </small>

                           </div>

                        </div>

                     </div>

                  </div>

                  <!-- RIGHT -->
                  <div class="col-lg-4">

                     <!-- TOP SCHOOL -->
                     <div class="card shadow-sm border-0 mb-4">

                        <div class="card-body">

                           <div class="d-flex justify-content-between align-items-center mb-4">

                              <div>

                                 <h5 class="fw-bold mb-1">
                                    🏆 Top Sekolah
                                 </h5>

                                 <small class="text-muted">
                                    Ranking penggunaan platform
                                 </small>

                              </div>

                           </div>

                           <!-- ITEM -->
                           <div class="d-flex align-items-center justify-content-between mb-4">

                              <div class="d-flex align-items-center gap-3">

                                 <div class="ranking-number">
                                    1
                                 </div>

                                 <div>

                                    <div class="fw-semibold">
                                       SMKN 1 Medan
                                    </div>

                                    <small class="text-muted">
                                       245 siswa aktif
                                    </small>

                                 </div>

                              </div>

                              <span class="badge bg-success">
                                 95%
                              </span>

                           </div>

                           <div class="d-flex align-items-center justify-content-between mb-4">

                              <div class="d-flex align-items-center gap-3">

                                 <div class="ranking-number">
                                    2
                                 </div>

                                 <div>

                                    <div class="fw-semibold">
                                       SMKN 5 Binjai
                                    </div>

                                    <small class="text-muted">
                                       180 siswa aktif
                                    </small>

                                 </div>

                              </div>

                              <span class="badge bg-primary">
                                 87%
                              </span>

                           </div>

                           <div class="d-flex align-items-center justify-content-between">

                              <div class="d-flex align-items-center gap-3">

                                 <div class="ranking-number">
                                    3
                                 </div>

                                 <div>

                                    <div class="fw-semibold">
                                       SMKN 8 Medan
                                    </div>

                                    <small class="text-muted">
                                       140 siswa aktif
                                    </small>

                                 </div>

                              </div>

                              <span class="badge bg-warning text-dark">
                                 78%
                              </span>

                           </div>

                        </div>

                     </div>

                     <!-- SERVER -->
                     <div class="card shadow-sm border-0 mb-4">

                        <div class="card-body">

                           <h5 class="fw-bold mb-4">
                              ⚙ Status Sistem
                           </h5>

                           <div class="mb-4">

                              <div class="d-flex justify-content-between mb-2">

                                 <small>CPU Server</small>

                                 <small>62%</small>

                              </div>

                              <div class="progress">
                                 <div class="progress-bar"
                                    style="width:62%">
                                 </div>
                              </div>

                           </div>

                           <div class="mb-4">

                              <div class="d-flex justify-content-between mb-2">

                                 <small>Database</small>

                                 <small>74%</small>

                              </div>

                              <div class="progress">
                                 <div class="progress-bar bg-success"
                                    style="width:74%">
                                 </div>
                              </div>

                           </div>

                           <div>

                              <div class="d-flex justify-content-between mb-2">

                                 <small>Storage</small>

                                 <small>48%</small>

                              </div>

                              <div class="progress">
                                 <div class="progress-bar bg-warning"
                                    style="width:48%">
                                 </div>
                              </div>

                           </div>

                        </div>

                     </div>

                     <!-- MATERI POPULER -->
                     <div class="card shadow-sm border-0">

                        <div class="card-body">

                           <h5 class="fw-bold mb-4">
                              📚 Materi Populer
                           </h5>

                           <div class="school-card p-3 mb-3">

                              <div class="fw-semibold mb-1">
                                 Monitoring Suhu ESP32
                              </div>

                              <small class="text-muted">
                                 1.240 peserta aktif
                              </small>

                           </div>

                           <div class="school-card p-3 mb-3">

                              <div class="fw-semibold mb-1">
                                 Smart Farming IoT
                              </div>

                              <small class="text-muted">
                                 920 peserta aktif
                              </small>

                           </div>

                           <div class="school-card p-3">

                              <div class="fw-semibold mb-1">
                                 RFID Smart Door
                              </div>

                              <small class="text-muted">
                                 650 peserta aktif
                              </small>

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