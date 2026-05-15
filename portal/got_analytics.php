<!doctype html>
<html lang="en">

<head>
   <?php require 'partial-head.php' ?>

   <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

   <style>
      .analytics-hero {
         background: linear-gradient(135deg, #0f172a, #1e293b);
         border-radius: 26px;
         overflow: hidden;
         position: relative;
      }

      .analytics-hero::before {
         content: "";
         position: absolute;
         width: 420px;
         height: 420px;
         border-radius: 50%;
         background: rgba(255, 255, 255, 0.04);
         top: -180px;
         right: -150px;
      }

      .analytics-hero::after {
         content: "";
         position: absolute;
         width: 300px;
         height: 300px;
         border-radius: 50%;
         background: rgba(255, 255, 255, 0.04);
         bottom: -140px;
         left: -120px;
      }

      .hero-content {
         position: relative;
         z-index: 2;
      }

      .analytics-card {
         border-radius: 22px;
         border: 0;
         transition: .3s;
      }

      .analytics-card:hover {
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

      .metric-blue {
         background: rgba(37, 99, 235, .1);
         color: #2563eb;
      }

      .metric-green {
         background: rgba(16, 185, 129, .1);
         color: #10b981;
      }

      .metric-orange {
         background: rgba(245, 158, 11, .1);
         color: #f59e0b;
      }

      .metric-red {
         background: rgba(239, 68, 68, .1);
         color: #ef4444;
      }

      .chart-card {
         border-radius: 24px;
         border: 0;
      }

      .top-school-item {
         padding: 14px;
         border-radius: 16px;
         transition: .3s;
      }

      .top-school-item:hover {
         background: #f8fafc;
      }

      .ranking-badge {
         width: 46px;
         height: 46px;
         border-radius: 50%;
         display: flex;
         align-items: center;
         justify-content: center;
         font-weight: bold;
         background: #eff6ff;
         color: #2563eb;
      }

      .activity-item {
         border-left: 4px solid #2563eb;
         padding-left: 16px;
         margin-bottom: 28px;
         position: relative;
      }

      .activity-item::before {
         content: "";
         width: 14px;
         height: 14px;
         border-radius: 50%;
         background: #2563eb;
         position: absolute;
         left: -9px;
         top: 4px;
      }

      .device-item {
         border-radius: 18px;
         transition: .3s;
      }

      .device-item:hover {
         transform: translateY(-3px);
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
                        📊 Analytics Platform IoT
                     </h4>

                     <p class="text-muted mb-0">
                        Analisa performa penggunaan platform pembelajaran dan aktivitas sekolah
                     </p>

                  </div>

                  <div class="d-flex gap-2">

                     <button class="btn btn-light">
                        <i class="ti ti-calendar"></i>
                        Mei 2026
                     </button>

                     <button class="btn btn-primary">
                        <i class="ti ti-download"></i>
                        Export Analytics
                     </button>

                  </div>

               </div>

               <!-- HERO -->
               <div class="card shadow-sm border-0 mb-4">

                  <div class="card-body analytics-hero p-5 text-white">

                     <div class="hero-content">

                        <div class="row align-items-center">

                           <div class="col-lg-8">

                              <div class="d-flex gap-2 mb-3">

                                 <span class="badge bg-success">
                                    Live Analytics
                                 </span>

                                 <span class="badge bg-light text-dark">
                                    Realtime Monitoring
                                 </span>

                              </div>

                              <h2 class="fw-bold mb-3 text-white">
                                 Analytics & Performance Dashboard
                              </h2>

                              <p class="mb-4" style="max-width:700px;">
                                 Monitoring statistik pembelajaran, penggunaan platform,
                                 aktivitas siswa, performa sekolah, dan pertumbuhan
                                 implementasi pembelajaran IoT secara realtime.
                              </p>

                              <div class="d-flex flex-wrap gap-5">

                                 <div>
                                    <small>Total Aktivitas</small>
                                    <h3 class="fw-bold mb-0 text-white">
                                       1.2M
                                    </h3>
                                 </div>

                                 <div>
                                    <small>Learning Hours</small>
                                    <h3 class="fw-bold mb-0 text-white">
                                       24.5K
                                    </h3>
                                 </div>

                                 <div>
                                    <small>Completion Rate</small>
                                    <h3 class="fw-bold mb-0 text-white">
                                       84%
                                    </h3>
                                 </div>

                                 <div>
                                    <small>Growth</small>
                                    <h3 class="fw-bold mb-0 text-white">
                                       +18%
                                    </h3>
                                 </div>

                              </div>

                           </div>

                           <div class="col-lg-4 text-center">

                              <i class="ti ti-chart-dots"
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

                     <div class="card analytics-card shadow-sm">

                        <div class="card-body">

                           <div class="d-flex justify-content-between align-items-start">

                              <div>

                                 <small class="text-muted">
                                    Active Users
                                 </small>

                                 <h2 class="fw-bold mt-2">
                                    12,540
                                 </h2>

                                 <span class="text-success fw-semibold">
                                    +12.5%
                                 </span>

                              </div>

                              <div class="metric-icon metric-blue">
                                 <i class="ti ti-users"></i>
                              </div>

                           </div>

                        </div>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="card analytics-card shadow-sm">

                        <div class="card-body">

                           <div class="d-flex justify-content-between align-items-start">

                              <div>

                                 <small class="text-muted">
                                    Total Training
                                 </small>

                                 <h2 class="fw-bold mt-2">
                                    5,824
                                 </h2>

                                 <span class="text-success fw-semibold">
                                    +18.2%
                                 </span>

                              </div>

                              <div class="metric-icon metric-green">
                                 <i class="ti ti-book"></i>
                              </div>

                           </div>

                        </div>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="card analytics-card shadow-sm">

                        <div class="card-body">

                           <div class="d-flex justify-content-between align-items-start">

                              <div>

                                 <small class="text-muted">
                                    Completion Rate
                                 </small>

                                 <h2 class="fw-bold mt-2">
                                    84%
                                 </h2>

                                 <span class="text-success fw-semibold">
                                    meningkat
                                 </span>

                              </div>

                              <div class="metric-icon metric-orange">
                                 <i class="ti ti-chart-bar"></i>
                              </div>

                           </div>

                        </div>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="card analytics-card shadow-sm">

                        <div class="card-body">

                           <div class="d-flex justify-content-between align-items-start">

                              <div>

                                 <small class="text-muted">
                                    Server Response
                                 </small>

                                 <h2 class="fw-bold mt-2">
                                    98ms
                                 </h2>

                                 <span class="text-primary fw-semibold">
                                    optimal
                                 </span>

                              </div>

                              <div class="metric-icon metric-red">
                                 <i class="ti ti-server"></i>
                              </div>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>

               <div class="row">

                  <!-- LEFT -->
                  <div class="col-lg-8">

                     <!-- MAIN CHART -->
                     <div class="card chart-card shadow-sm mb-4">

                        <div class="card-body">

                           <div class="d-flex justify-content-between align-items-center mb-4">

                              <div>

                                 <h5 class="fw-bold mb-1">
                                    📈 Platform Activity
                                 </h5>

                                 <small class="text-muted">
                                    Aktivitas pengguna dalam 30 hari terakhir
                                 </small>

                              </div>

                              <select class="form-select w-auto">
                                 <option>30 Hari</option>
                                 <option>7 Hari</option>
                                 <option>1 Tahun</option>
                              </select>

                           </div>

                           <div id="activityChart"></div>

                        </div>

                     </div>

                     <!-- HEATMAP -->
                     <div class="card chart-card shadow-sm mb-4">

                        <div class="card-body">

                           <div class="d-flex justify-content-between align-items-center mb-4">

                              <div>

                                 <h5 class="fw-bold mb-1">
                                    🧠 Materi Terpopuler
                                 </h5>

                                 <small class="text-muted">
                                    Statistik penggunaan materi pembelajaran
                                 </small>

                              </div>

                           </div>

                           <div id="materiChart"></div>

                        </div>

                     </div>

                     <!-- ACTIVITY -->
                     <div class="card chart-card shadow-sm">

                        <div class="card-body">

                           <div class="d-flex justify-content-between align-items-center mb-4">

                              <div>

                                 <h5 class="fw-bold mb-1">
                                    ⚡ Live Activity
                                 </h5>

                                 <small class="text-muted">
                                    Aktivitas terbaru platform
                                 </small>

                              </div>

                           </div>

                           <div class="activity-item">

                              <h6 class="fw-bold">
                                 SMKN 1 Medan menyelesaikan training ESP32
                              </h6>

                              <p class="text-muted mb-1">
                                 120 siswa berhasil menyelesaikan pembelajaran monitoring suhu realtime.
                              </p>

                              <small class="text-primary">
                                 2 menit lalu
                              </small>

                           </div>

                           <div class="activity-item">

                              <h6 class="fw-bold">
                                 Peningkatan traffic platform
                              </h6>

                              <p class="text-muted mb-1">
                                 Aktivitas pengguna meningkat 25% dibanding minggu lalu.
                              </p>

                              <small class="text-success">
                                 15 menit lalu
                              </small>

                           </div>

                           <div class="activity-item">

                              <h6 class="fw-bold">
                                 Upload modul baru Smart Farming
                              </h6>

                              <p class="text-muted mb-1">
                                 Dinas Pendidikan menambahkan materi IoT pertanian modern.
                              </p>

                              <small class="text-warning">
                                 30 menit lalu
                              </small>

                           </div>

                        </div>

                     </div>

                  </div>

                  <!-- RIGHT -->
                  <div class="col-lg-4">

                     <!-- DEVICE -->
                     <div class="card chart-card shadow-sm mb-4">

                        <div class="card-body">

                           <h5 class="fw-bold mb-4">
                              📱 Device Usage
                           </h5>

                           <div id="deviceChart"></div>

                           <div class="mt-4">

                              <div class="device-item p-3 bg-light mb-3">

                                 <div class="d-flex justify-content-between">

                                    <div>
                                       <div class="fw-semibold">
                                          Desktop
                                       </div>

                                       <small class="text-muted">
                                          65%
                                       </small>
                                    </div>

                                    <i class="ti ti-device-desktop fs-8 text-primary"></i>

                                 </div>

                              </div>

                              <div class="device-item p-3 bg-light mb-3">

                                 <div class="d-flex justify-content-between">

                                    <div>
                                       <div class="fw-semibold">
                                          Mobile
                                       </div>

                                       <small class="text-muted">
                                          28%
                                       </small>
                                    </div>

                                    <i class="ti ti-device-mobile fs-8 text-success"></i>

                                 </div>

                              </div>

                              <div class="device-item p-3 bg-light">

                                 <div class="d-flex justify-content-between">

                                    <div>
                                       <div class="fw-semibold">
                                          Tablet
                                       </div>

                                       <small class="text-muted">
                                          7%
                                       </small>
                                    </div>

                                    <i class="ti ti-device-ipad fs-8 text-warning"></i>

                                 </div>

                              </div>

                           </div>

                        </div>

                     </div>

                     <!-- TOP SCHOOL -->
                     <div class="card chart-card shadow-sm mb-4">

                        <div class="card-body">

                           <h5 class="fw-bold mb-4">
                              🏆 Top Performing School
                           </h5>

                           <div class="top-school-item d-flex justify-content-between align-items-center mb-3">

                              <div class="d-flex align-items-center gap-3">

                                 <div class="ranking-badge">
                                    1
                                 </div>

                                 <div>

                                    <div class="fw-semibold">
                                       SMKN 1 Medan
                                    </div>

                                    <small class="text-muted">
                                       95% completion
                                    </small>

                                 </div>

                              </div>

                              <span class="badge bg-success">
                                 Excellent
                              </span>

                           </div>

                           <div class="top-school-item d-flex justify-content-between align-items-center mb-3">

                              <div class="d-flex align-items-center gap-3">

                                 <div class="ranking-badge">
                                    2
                                 </div>

                                 <div>

                                    <div class="fw-semibold">
                                       SMKN 5 Binjai
                                    </div>

                                    <small class="text-muted">
                                       88% completion
                                    </small>

                                 </div>

                              </div>

                              <span class="badge bg-primary">
                                 Good
                              </span>

                           </div>

                           <div class="top-school-item d-flex justify-content-between align-items-center">

                              <div class="d-flex align-items-center gap-3">

                                 <div class="ranking-badge">
                                    3
                                 </div>

                                 <div>

                                    <div class="fw-semibold">
                                       SMKN 8 Medan
                                    </div>

                                    <small class="text-muted">
                                       80% completion
                                    </small>

                                 </div>

                              </div>

                              <span class="badge bg-warning text-dark">
                                 Stable
                              </span>

                           </div>

                        </div>

                     </div>

                     <!-- SERVER -->
                     <div class="card chart-card shadow-sm">

                        <div class="card-body">

                           <h5 class="fw-bold mb-4">
                              ⚙ Infrastructure
                           </h5>

                           <div id="serverChart"></div>

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
      // ACTIVITY
      var activityOptions = {
         series: [{
            name: 'Activity',
            data: [120, 180, 160, 220, 250, 310, 290, 350, 420, 390, 450, 500]
         }],
         chart: {
            type: 'area',
            height: 320,
            toolbar: {
               show: false
            }
         },
         stroke: {
            curve: 'smooth',
            width: 3
         },
         dataLabels: {
            enabled: false
         },
         xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
         }
      };

      new ApexCharts(document.querySelector("#activityChart"), activityOptions).render();

      // MATERI
      var materiOptions = {
         series: [{
            data: [95, 88, 80, 72, 65]
         }],
         chart: {
            type: 'bar',
            height: 300,
            toolbar: {
               show: false
            }
         },
         plotOptions: {
            bar: {
               borderRadius: 8,
               horizontal: true
            }
         },
         dataLabels: {
            enabled: false
         },
         xaxis: {
            categories: [
               'ESP32 Monitoring',
               'Smart Farming',
               'RFID Security',
               'IoT Dashboard',
               'MQTT Basic'
            ]
         }
      };

      new ApexCharts(document.querySelector("#materiChart"), materiOptions).render();

      // DEVICE
      var deviceOptions = {
         series: [65, 28, 7],
         chart: {
            type: 'donut',
            height: 280
         },
         labels: ['Desktop', 'Mobile', 'Tablet']
      };

      new ApexCharts(document.querySelector("#deviceChart"), deviceOptions).render();

      // SERVER
      var serverOptions = {
         series: [72],
         chart: {
            height: 280,
            type: 'radialBar'
         },
         plotOptions: {
            radialBar: {
               hollow: {
                  size: '65%'
               }
            }
         },
         labels: ['Server Health']
      };

      new ApexCharts(document.querySelector("#serverChart"), serverOptions).render();
   </script>

</body>

</html>