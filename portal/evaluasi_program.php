<!doctype html>
<html lang="en">

<head>
   <?php require 'partial-head.php' ?>

   <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

   <style>
      .hero-evaluasi {
         background: linear-gradient(135deg, #0f172a, #1e40af);
         border-radius: 26px;
         overflow: hidden;
         position: relative;
      }

      .hero-evaluasi::before {
         content: "";
         position: absolute;
         width: 400px;
         height: 400px;
         border-radius: 50%;
         background: rgba(255, 255, 255, 0.05);
         top: -150px;
         right: -150px;
      }

      .hero-evaluasi::after {
         content: "";
         position: absolute;
         width: 260px;
         height: 260px;
         border-radius: 50%;
         background: rgba(255, 255, 255, 0.05);
         bottom: -100px;
         left: -100px;
      }

      .hero-content {
         position: relative;
         z-index: 2;
      }

      .eval-card {
         border-radius: 22px;
         border: 0;
         transition: .3s;
      }

      .eval-card:hover {
         transform: translateY(-4px);
      }

      .metric-icon {
         width: 60px;
         height: 60px;
         border-radius: 18px;
         display: flex;
         align-items: center;
         justify-content: center;
         font-size: 24px;
      }

      .bg-soft-primary {
         background: rgba(37, 99, 235, .1);
         color: #2563eb;
      }

      .bg-soft-success {
         background: rgba(16, 185, 129, .1);
         color: #10b981;
      }

      .bg-soft-warning {
         background: rgba(245, 158, 11, .1);
         color: #f59e0b;
      }

      .bg-soft-danger {
         background: rgba(239, 68, 68, .1);
         color: #ef4444;
      }

      .program-card {
         border-radius: 18px;
         transition: .3s;
         border: 1px solid #eef2ff;
      }

      .program-card:hover {
         transform: translateY(-3px);
      }

      .progress {
         height: 10px;
         border-radius: 30px;
      }

      .table-evaluasi tbody tr:hover {
         background: #f8fafc;
      }

      .timeline-item {
         border-left: 4px solid #2563eb;
         padding-left: 18px;
         margin-bottom: 28px;
         position: relative;
      }

      .timeline-item::before {
         content: "";
         width: 14px;
         height: 14px;
         border-radius: 50%;
         background: #2563eb;
         position: absolute;
         left: -9px;
         top: 4px;
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

      .badge-soft-primary {
         background: #dbeafe;
         color: #1d4ed8;
      }

      .chart-card {
         border-radius: 24px;
         border: 0;
      }
   </style>

</head>

<body>

   <div class="page-wrapper"
      id="main-wrapper"
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
                        📝 Evaluasi Program IoT
                     </h4>

                     <p class="text-muted mb-0">
                        Monitoring efektivitas program pembelajaran dan implementasi IoT sekolah
                     </p>

                  </div>

                  <div class="d-flex gap-2">

                     <button class="btn btn-light">
                        <i class="ti ti-filter"></i>
                        Filter Data
                     </button>

                     <button class="btn btn-primary">
                        <i class="ti ti-download"></i>
                        Export Evaluasi
                     </button>

                  </div>

               </div>

               <!-- HERO -->
               <div class="card shadow-sm border-0 mb-4">

                  <div class="card-body hero-evaluasi p-5 text-white">

                     <div class="hero-content">

                        <div class="row align-items-center">

                           <div class="col-lg-8">

                              <div class="d-flex gap-2 mb-3">

                                 <span class="badge bg-success">
                                    Program Aktif
                                 </span>

                                 <span class="badge bg-light text-dark">
                                    Evaluasi Semester
                                 </span>

                              </div>

                              <h2 class="fw-bold text-white mb-3">
                                 Dashboard Evaluasi Program Pembelajaran IoT
                              </h2>

                              <p class="mb-4" style="max-width:720px;">
                                 Evaluasi capaian pembelajaran, efektivitas penggunaan platform,
                                 tingkat penyelesaian materi, kualitas implementasi praktikum,
                                 dan keberhasilan program digitalisasi pembelajaran IoT.
                              </p>

                              <div class="d-flex flex-wrap gap-5">

                                 <div>
                                    <small>Total Program</small>
                                    <h3 class="fw-bold mb-0 text-white">
                                       24
                                    </h3>
                                 </div>

                                 <div>
                                    <small>Sekolah Terlibat</small>
                                    <h3 class="fw-bold mb-0 text-white">
                                       124
                                    </h3>
                                 </div>

                                 <div>
                                    <small>Tingkat Keberhasilan</small>
                                    <h3 class="fw-bold mb-0 text-white">
                                       87%
                                    </h3>
                                 </div>

                                 <div>
                                    <small>Kepuasan Pengguna</small>
                                    <h3 class="fw-bold mb-0 text-white">
                                       4.8/5
                                    </h3>
                                 </div>

                              </div>

                           </div>

                           <div class="col-lg-4 text-center">

                              <i class="ti ti-report-analytics"
                                 style="font-size:180px; opacity:.12;">
                              </i>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>

               <!-- METRIC -->
               <div class="row mb-4">

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="card eval-card shadow-sm">

                        <div class="card-body">

                           <div class="d-flex justify-content-between">

                              <div>

                                 <small class="text-muted">
                                    Program Sukses
                                 </small>

                                 <h2 class="fw-bold mt-2">
                                    18
                                 </h2>

                                 <span class="badge badge-soft-success">
                                    Sangat Baik
                                 </span>

                              </div>

                              <div class="metric-icon bg-soft-success">
                                 <i class="ti ti-circle-check"></i>
                              </div>

                           </div>

                        </div>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="card eval-card shadow-sm">

                        <div class="card-body">

                           <div class="d-flex justify-content-between">

                              <div>

                                 <small class="text-muted">
                                    Perlu Monitoring
                                 </small>

                                 <h2 class="fw-bold mt-2">
                                    4
                                 </h2>

                                 <span class="badge badge-soft-warning">
                                    Evaluasi
                                 </span>

                              </div>

                              <div class="metric-icon bg-soft-warning">
                                 <i class="ti ti-alert-circle"></i>
                              </div>

                           </div>

                        </div>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="card eval-card shadow-sm">

                        <div class="card-body">

                           <div class="d-flex justify-content-between">

                              <div>

                                 <small class="text-muted">
                                    Partisipasi
                                 </small>

                                 <h2 class="fw-bold mt-2">
                                    92%
                                 </h2>

                                 <span class="badge badge-soft-primary">
                                    Tinggi
                                 </span>

                              </div>

                              <div class="metric-icon bg-soft-primary">
                                 <i class="ti ti-users-group"></i>
                              </div>

                           </div>

                        </div>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="card eval-card shadow-sm">

                        <div class="card-body">

                           <div class="d-flex justify-content-between">

                              <div>

                                 <small class="text-muted">
                                    Program Gagal
                                 </small>

                                 <h2 class="fw-bold mt-2">
                                    2
                                 </h2>

                                 <span class="badge badge-soft-danger">
                                    Perbaikan
                                 </span>

                              </div>

                              <div class="metric-icon bg-soft-danger">
                                 <i class="ti ti-x"></i>
                              </div>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>

               <div class="row">

                  <!-- LEFT -->
                  <div class="col-lg-8">

                     <!-- CHART -->
                     <div class="card chart-card shadow-sm mb-4">

                        <div class="card-body">

                           <div class="d-flex justify-content-between align-items-center mb-4">

                              <div>

                                 <h5 class="fw-bold mb-1">
                                    📈 Grafik Evaluasi Program
                                 </h5>

                                 <small class="text-muted">
                                    Statistik performa program pembelajaran
                                 </small>

                              </div>

                              <select class="form-select w-auto">
                                 <option>Semester 1</option>
                                 <option>Semester 2</option>
                              </select>

                           </div>

                           <div id="evaluasiChart"></div>

                        </div>

                     </div>

                     <!-- TABLE -->
                     <div class="card chart-card shadow-sm mb-4">

                        <div class="card-body">

                           <div class="d-flex justify-content-between align-items-center mb-4">

                              <div>

                                 <h5 class="fw-bold mb-1">
                                    📋 Evaluasi Program Sekolah
                                 </h5>

                                 <small class="text-muted">
                                    Detail evaluasi implementasi pembelajaran
                                 </small>

                              </div>

                           </div>

                           <div class="table-responsive">

                              <table class="table table-hover align-middle table-evaluasi">

                                 <thead class="bg-light">

                                    <tr>
                                       <th>Program</th>
                                       <th>Sekolah</th>
                                       <th>Partisipasi</th>
                                       <th>Progress</th>
                                       <th>Nilai</th>
                                       <th>Status</th>
                                    </tr>

                                 </thead>

                                 <tbody>

                                    <tr>

                                       <td>

                                          <div class="fw-semibold">
                                             ESP32 Monitoring
                                          </div>

                                          <small class="text-muted">
                                             IoT Basic Training
                                          </small>

                                       </td>

                                       <td>SMKN 1 Medan</td>

                                       <td>245 Siswa</td>

                                       <td width="220">

                                          <div class="d-flex justify-content-between mb-1">

                                             <small>92%</small>

                                             <small class="text-success">
                                                Excellent
                                             </small>

                                          </div>

                                          <div class="progress">
                                             <div class="progress-bar bg-success"
                                                style="width:92%">
                                             </div>
                                          </div>

                                       </td>

                                       <td>
                                          <span class="fw-bold">
                                             95
                                          </span>
                                       </td>

                                       <td>
                                          <span class="badge bg-success">
                                             Berhasil
                                          </span>
                                       </td>

                                    </tr>

                                    <tr>

                                       <td>

                                          <div class="fw-semibold">
                                             Smart Farming
                                          </div>

                                          <small class="text-muted">
                                             Agriculture IoT
                                          </small>

                                       </td>

                                       <td>SMKN 5 Binjai</td>

                                       <td>180 Siswa</td>

                                       <td width="220">

                                          <div class="d-flex justify-content-between mb-1">

                                             <small>74%</small>

                                             <small class="text-warning">
                                                Monitoring
                                             </small>

                                          </div>

                                          <div class="progress">
                                             <div class="progress-bar bg-warning"
                                                style="width:74%">
                                             </div>
                                          </div>

                                       </td>

                                       <td>
                                          <span class="fw-bold">
                                             78
                                          </span>
                                       </td>

                                       <td>
                                          <span class="badge bg-warning text-dark">
                                             Evaluasi
                                          </span>
                                       </td>

                                    </tr>

                                    <tr>

                                       <td>

                                          <div class="fw-semibold">
                                             RFID Security
                                          </div>

                                          <small class="text-muted">
                                             Smart Door System
                                          </small>

                                       </td>

                                       <td>SMKN 2 Tebing</td>

                                       <td>42 Siswa</td>

                                       <td width="220">

                                          <div class="d-flex justify-content-between mb-1">

                                             <small>32%</small>

                                             <small class="text-danger">
                                                Rendah
                                             </small>

                                          </div>

                                          <div class="progress">
                                             <div class="progress-bar bg-danger"
                                                style="width:32%">
                                             </div>
                                          </div>

                                       </td>

                                       <td>
                                          <span class="fw-bold">
                                             55
                                          </span>
                                       </td>

                                       <td>
                                          <span class="badge bg-danger">
                                             Perbaikan
                                          </span>
                                       </td>

                                    </tr>

                                 </tbody>

                              </table>

                           </div>

                        </div>

                     </div>

                     <!-- TIMELINE -->
                     <div class="card chart-card shadow-sm">

                        <div class="card-body">

                           <div class="d-flex justify-content-between align-items-center mb-4">

                              <div>

                                 <h5 class="fw-bold mb-1">
                                    🕒 Timeline Evaluasi
                                 </h5>

                                 <small class="text-muted">
                                    Aktivitas evaluasi terbaru
                                 </small>

                              </div>

                           </div>

                           <div class="timeline-item">

                              <h6 class="fw-bold">
                                 Evaluasi semester selesai
                              </h6>

                              <p class="text-muted mb-1">
                                 SMKN 1 Medan mendapatkan nilai implementasi tertinggi.
                              </p>

                              <small class="text-primary">
                                 2 jam lalu
                              </small>

                           </div>

                           <div class="timeline-item">

                              <h6 class="fw-bold">
                                 Monitoring program Smart Farming
                              </h6>

                              <p class="text-muted mb-1">
                                 Program membutuhkan peningkatan partisipasi siswa.
                              </p>

                              <small class="text-warning">
                                 5 jam lalu
                              </small>

                           </div>

                           <div class="timeline-item">

                              <h6 class="fw-bold">
                                 Penambahan modul evaluasi baru
                              </h6>

                              <p class="text-muted mb-1">
                                 Sistem evaluasi otomatis berhasil diimplementasikan.
                              </p>

                              <small class="text-success">
                                 1 hari lalu
                              </small>

                           </div>

                        </div>

                     </div>

                  </div>

                  <!-- RIGHT -->
                  <div class="col-lg-4">

                     <!-- PIE -->
                     <div class="card chart-card shadow-sm mb-4">

                        <div class="card-body">

                           <h5 class="fw-bold mb-4">
                              📊 Status Program
                           </h5>

                           <div id="statusChart"></div>

                        </div>

                     </div>

                     <!-- TOP -->
                     <div class="card chart-card shadow-sm mb-4">

                        <div class="card-body">

                           <h5 class="fw-bold mb-4">
                              🏆 Top Program
                           </h5>

                           <div class="program-card p-3 mb-3">

                              <div class="d-flex justify-content-between mb-2">

                                 <div>

                                    <div class="fw-semibold">
                                       ESP32 Monitoring
                                    </div>

                                    <small class="text-muted">
                                       95% keberhasilan
                                    </small>

                                 </div>

                                 <span class="badge bg-success">
                                    Best
                                 </span>

                              </div>

                           </div>

                           <div class="program-card p-3 mb-3">

                              <div class="d-flex justify-content-between mb-2">

                                 <div>

                                    <div class="fw-semibold">
                                       Smart Farming
                                    </div>

                                    <small class="text-muted">
                                       88% keberhasilan
                                    </small>

                                 </div>

                                 <span class="badge bg-primary">
                                    Good
                                 </span>

                              </div>

                           </div>

                           <div class="program-card p-3">

                              <div class="d-flex justify-content-between mb-2">

                                 <div>

                                    <div class="fw-semibold">
                                       MQTT Basic
                                    </div>

                                    <small class="text-muted">
                                       80% keberhasilan
                                    </small>

                                 </div>

                                 <span class="badge bg-warning text-dark">
                                    Stable
                                 </span>

                              </div>

                           </div>

                        </div>

                     </div>

                     <!-- RECOMMENDATION -->
                     <div class="card chart-card shadow-sm">

                        <div class="card-body">

                           <h5 class="fw-bold mb-4">
                              💡 Rekomendasi Evaluasi
                           </h5>

                           <div class="alert alert-success border-0">

                              <div class="fw-semibold mb-1">
                                 Tingkatkan Praktikum
                              </div>

                              <small>
                                 Tambahkan simulasi praktikum realtime untuk meningkatkan partisipasi siswa.
                              </small>

                           </div>

                           <div class="alert alert-warning border-0">

                              <div class="fw-semibold mb-1">
                                 Monitoring Sekolah
                              </div>

                              <small>
                                 Beberapa sekolah memerlukan pendampingan implementasi.
                              </small>

                           </div>

                           <div class="alert alert-primary border-0 mb-0">

                              <div class="fw-semibold mb-1">
                                 Upgrade Materi
                              </div>

                              <small>
                                 Update materi berbasis AI & IoT modern untuk kurikulum terbaru.
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

   <script>
      var evaluasiOptions = {
         series: [{
            name: 'Keberhasilan',
            data: [72, 80, 84, 88, 92, 95]
         }, {
            name: 'Partisipasi',
            data: [60, 70, 78, 82, 88, 91]
         }],
         chart: {
            type: 'line',
            height: 320,
            toolbar: {
               show: false
            }
         },
         stroke: {
            curve: 'smooth',
            width: 4
         },
         dataLabels: {
            enabled: false
         },
         xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun']
         }
      };

      new ApexCharts(document.querySelector("#evaluasiChart"), evaluasiOptions).render();

      var statusOptions = {
         series: [18, 4, 2],
         chart: {
            type: 'donut',
            height: 300
         },
         labels: ['Berhasil', 'Evaluasi', 'Perbaikan']
      };

      new ApexCharts(document.querySelector("#statusChart"), statusOptions).render();
   </script>

</body>

</html>