<!doctype html>
<html lang="en">

<head>
   <?php require 'partial-head.php' ?>

   <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

   <style>
      body {
         background: #f8fafc;
      }

      .ai-banner {
         background: linear-gradient(135deg, #0f172a, #2563eb, #7c3aed);
         border-radius: 28px;
         overflow: hidden;
         position: relative;
      }

      .ai-banner::before {
         content: "";
         position: absolute;
         width: 420px;
         height: 420px;
         border-radius: 50%;
         background: rgba(255, 255, 255, .05);
         top: -180px;
         right: -150px;
      }

      .ai-banner::after {
         content: "";
         position: absolute;
         width: 260px;
         height: 260px;
         border-radius: 50%;
         background: rgba(255, 255, 255, .05);
         bottom: -120px;
         left: -100px;
      }

      .banner-content {
         position: relative;
         z-index: 2;
      }

      .glass-card {
         background: rgba(255, 255, 255, .88);
         backdrop-filter: blur(20px);
         border-radius: 24px;
         border: 1px solid rgba(255, 255, 255, .8);
         transition: .3s;
      }

      .glass-card:hover {
         transform: translateY(-3px);
      }

      .metric-card {
         border-radius: 22px;
         transition: .3s;
      }

      .metric-card:hover {
         transform: translateY(-4px);
      }

      .metric-icon {
         width: 68px;
         height: 68px;
         border-radius: 20px;
         display: flex;
         align-items: center;
         justify-content: center;
         font-size: 28px;
      }

      .soft-primary {
         background: rgba(37, 99, 235, .1);
         color: #2563eb;
      }

      .soft-success {
         background: rgba(16, 185, 129, .1);
         color: #10b981;
      }

      .soft-warning {
         background: rgba(245, 158, 11, .1);
         color: #f59e0b;
      }

      .soft-danger {
         background: rgba(239, 68, 68, .1);
         color: #ef4444;
      }

      .soft-purple {
         background: rgba(124, 58, 237, .1);
         color: #7c3aed;
      }

      .insight-card {
         border-radius: 22px;
         transition: .3s;
         border: 1px solid #eef2ff;
      }

      .insight-card:hover {
         transform: translateY(-4px);
      }

      .ai-chat-wrapper {
         height: 700px;
         display: flex;
         flex-direction: column;
      }

      .chat-body {
         flex: 1;
         overflow-y: auto;
         padding: 25px;
         background:
            radial-gradient(circle at top left,
               rgba(37, 99, 235, .05),
               transparent 20%),
            radial-gradient(circle at bottom right,
               rgba(124, 58, 237, .05),
               transparent 20%);
      }

      .message-row {
         display: flex;
         margin-bottom: 20px;
      }

      .message-row.user {
         justify-content: end;
      }

      .chat-bubble {
         max-width: 78%;
         padding: 16px 18px;
         border-radius: 22px;
         line-height: 1.7;
         position: relative;
      }

      .chat-bubble.ai {
         background: #fff;
         border-top-left-radius: 8px;
         box-shadow: 0 4px 20px rgba(0, 0, 0, .05);
      }

      .chat-bubble.user {
         background: linear-gradient(135deg, #2563eb, #7c3aed);
         color: #fff;
         border-top-right-radius: 8px;
      }

      .chat-footer {
         padding: 18px;
         border-top: 1px solid #eef2ff;
         background: rgba(255, 255, 255, .7);
         backdrop-filter: blur(20px);
      }

      .chat-input {
         border-radius: 18px;
         border: 1px solid #e2e8f0;
         padding: 14px 18px;
         background: #fff;
      }

      .quick-prompt {
         padding: 12px 16px;
         border-radius: 16px;
         background: #f8fafc;
         border: 1px solid #eef2ff;
         cursor: pointer;
         transition: .2s;
      }

      .quick-prompt:hover {
         background: #eff6ff;
         border-color: #2563eb;
      }

      .activity-item {
         border-left: 3px solid #2563eb;
         padding-left: 18px;
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
         left: -8px;
         top: 5px;
      }

      .status-pill {
         padding: 6px 14px;
         border-radius: 30px;
         font-size: 12px;
         font-weight: 600;
      }

      .status-good {
         background: #dcfce7;
         color: #166534;
      }

      .status-warning {
         background: #fef3c7;
         color: #92400e;
      }

      .status-danger {
         background: #fee2e2;
         color: #991b1b;
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
                        🤖 AI Insight Assistant
                     </h4>

                     <p class="text-muted mb-0">
                        Analisa data platform dan tanya AI realtime
                     </p>

                  </div>

                  <div class="d-flex gap-2">

                     <button class="btn btn-light">

                        <i class="ti ti-refresh"></i>
                        Refresh AI

                     </button>

                     <button class="btn btn-primary">

                        <i class="ti ti-sparkles"></i>
                        Generate Insight

                     </button>

                  </div>

               </div>

               <!-- HERO -->
               <div class="card border-0 shadow-sm mb-4">

                  <div class="card-body ai-banner p-5 text-white">

                     <div class="banner-content">

                        <div class="row align-items-center">

                           <div class="col-lg-8">

                              <div class="d-flex gap-2 mb-3">

                                 <span class="badge bg-success">
                                    AI Active
                                 </span>

                                 <span class="badge bg-light text-dark">
                                    Smart Analytics Engine
                                 </span>

                              </div>

                              <h2 class="fw-bold text-white mb-3">
                                 AI Insight & Smart Recommendation
                              </h2>

                              <p class="mb-4"
                                 style="max-width:720px;">

                                 AI membantu menganalisa performa sekolah,
                                 penggunaan trainer kit, aktivitas pembelajaran,
                                 monitoring instruktur dan memberikan rekomendasi otomatis.

                              </p>

                              <div class="d-flex flex-wrap gap-5">

                                 <div>

                                    <small>AI Request</small>

                                    <h3 class="fw-bold mb-0 text-white text-white">
                                       12.5K
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Insight Generated</small>

                                    <h3 class="fw-bold mb-0 text-white text-white">
                                       1.284
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Prediction Accuracy</small>

                                    <h3 class="fw-bold mb-0 text-white text-white">
                                       97%
                                    </h3>

                                 </div>

                                 <div>

                                    <small>AI Status</small>

                                    <h3 class="fw-bold mb-0 text-white text-white">
                                       Online
                                    </h3>

                                 </div>

                              </div>

                           </div>

                           <div class="col-lg-4 text-center">

                              <i class="ti ti-brain"
                                 style="font-size:180px; opacity:.12;">
                              </i>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>

               <!-- STATS -->
               <div class="row mb-4">

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card metric-card p-4">

                        <div class="d-flex justify-content-between">

                           <div>

                              <small class="text-muted">
                                 School Performance
                              </small>

                              <h2 class="fw-bold mt-2">
                                 92%
                              </h2>

                              <span class="status-pill status-good">
                                 Excellent
                              </span>

                           </div>

                           <div class="metric-icon soft-primary">

                              <i class="ti ti-chart-line"></i>

                           </div>

                        </div>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card metric-card p-4">

                        <div class="d-flex justify-content-between">

                           <div>

                              <small class="text-muted">
                                 Device Active
                              </small>

                              <h2 class="fw-bold mt-2">
                                 1.248
                              </h2>

                              <span class="status-pill status-good">
                                 Stable
                              </span>

                           </div>

                           <div class="metric-icon soft-success">

                              <i class="ti ti-device-iot"></i>

                           </div>

                        </div>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card metric-card p-4">

                        <div class="d-flex justify-content-between">

                           <div>

                              <small class="text-muted">
                                 Risk Alert
                              </small>

                              <h2 class="fw-bold mt-2">
                                 8
                              </h2>

                              <span class="status-pill status-warning">
                                 Warning
                              </span>

                           </div>

                           <div class="metric-icon soft-warning">

                              <i class="ti ti-alert-triangle"></i>

                           </div>

                        </div>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card metric-card p-4">

                        <div class="d-flex justify-content-between">

                           <div>

                              <small class="text-muted">
                                 AI Prediction
                              </small>

                              <h2 class="fw-bold mt-2">
                                 97%
                              </h2>

                              <span class="status-pill status-good">
                                 Accurate
                              </span>

                           </div>

                           <div class="metric-icon soft-purple">

                              <i class="ti ti-sparkles"></i>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>

               <div class="row">

                  <!-- LEFT -->
                  <div class="col-lg-8">

                     <!-- CHAT -->
                     <div class="glass-card shadow-sm ai-chat-wrapper mb-4">

                        <!-- TOP -->
                        <div class="p-4 border-bottom">

                           <div class="d-flex justify-content-between align-items-center">

                              <div class="d-flex align-items-center gap-3">

                                 <div class="metric-icon soft-primary">

                                    <i class="ti ti-brain"></i>

                                 </div>

                                 <div>

                                    <h5 class="fw-bold mb-1">
                                       AI Assistant
                                    </h5>

                                    <small class="text-success">
                                       Online & Ready
                                    </small>

                                 </div>

                              </div>

                              <button class="btn btn-light">

                                 <i class="ti ti-trash"></i>

                              </button>

                           </div>

                        </div>

                        <!-- BODY -->
                        <div class="chat-body">

                           <!-- AI -->
                           <div class="message-row">

                              <div class="chat-bubble ai">

                                 👋 Halo Zack, saya siap membantu menganalisa platform IoT Anda.

                                 <br><br>

                                 Saya dapat membantu:
                                 <ul class="mb-0 mt-2">
                                    <li>Analisa performa sekolah</li>
                                    <li>Prediksi penggunaan trainer kit</li>
                                    <li>Monitoring aktivitas user</li>
                                    <li>Insight pembelajaran</li>
                                    <li>Rekomendasi optimasi sistem</li>
                                 </ul>

                              </div>

                           </div>

                           <!-- USER -->
                           <div class="message-row user">

                              <div class="chat-bubble user">

                                 Sekolah mana yang performanya paling rendah minggu ini?

                              </div>

                           </div>

                           <!-- AI -->
                           <div class="message-row">

                              <div class="chat-bubble ai">

                                 📊 Berdasarkan analisa AI:

                                 <br><br>

                                 <b>SMKN 5 Binjai</b> mengalami penurunan performa sebesar <b>18%</b> minggu ini.

                                 <br><br>

                                 Faktor utama:
                                 <ul>
                                    <li>Aktivitas trainer kit menurun</li>
                                    <li>Partisipasi siswa rendah</li>
                                    <li>2 instruktur belum aktif</li>
                                 </ul>

                                 💡 Rekomendasi:
                                 <ul class="mb-0">
                                    <li>Kirim reminder automation</li>
                                    <li>Jadwalkan workshop tambahan</li>
                                    <li>Monitoring instruktur lebih aktif</li>
                                 </ul>

                              </div>

                           </div>

                        </div>

                        <!-- FOOTER -->
                        <div class="chat-footer">

                           <!-- QUICK -->
                           <div class="d-flex flex-wrap gap-2 mb-3">

                              <div class="quick-prompt">
                                 📈 Analisa sekolah terbaik
                              </div>

                              <div class="quick-prompt">
                                 ⚠️ Device offline
                              </div>

                              <div class="quick-prompt">
                                 🤖 Generate recommendation
                              </div>

                              <div class="quick-prompt">
                                 📚 Insight pembelajaran
                              </div>

                           </div>

                           <!-- INPUT -->
                           <div class="d-flex align-items-center gap-3">

                              <input type="text"
                                 class="form-control chat-input"
                                 placeholder="Tanya AI tentang platform...">

                              <button class="btn btn-primary rounded-4 px-4">

                                 <i class="ti ti-send"></i>

                              </button>

                           </div>

                        </div>

                     </div>

                     <!-- CHART -->
                     <div class="glass-card shadow-sm p-4">

                        <div class="d-flex justify-content-between align-items-center mb-4">

                           <div>

                              <h5 class="fw-bold mb-1">
                                 📈 AI Predictive Analytics
                              </h5>

                              <small class="text-muted">
                                 Prediksi penggunaan platform & trainer kit
                              </small>

                           </div>

                        </div>

                        <div id="predictionChart"></div>

                     </div>

                  </div>

                  <!-- RIGHT -->
                  <div class="col-lg-4">

                     <!-- INSIGHT -->
                     <div class="glass-card shadow-sm p-4 mb-4">

                        <h5 class="fw-bold mb-4">
                           🧠 AI Insight
                        </h5>

                        <div class="insight-card p-3 mb-3">

                           <div class="d-flex align-items-center gap-3 mb-3">

                              <div class="metric-icon soft-success"
                                 style="width:55px;height:55px;">

                                 <i class="ti ti-trending-up"></i>

                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    Peningkatan Aktivitas
                                 </div>

                                 <small class="text-muted">
                                    +24% minggu ini
                                 </small>

                              </div>

                           </div>

                           <small class="text-muted">
                              Penggunaan trainer kit meningkat signifikan pada sekolah wilayah Medan.
                           </small>

                        </div>

                        <div class="insight-card p-3 mb-3">

                           <div class="d-flex align-items-center gap-3 mb-3">

                              <div class="metric-icon soft-warning"
                                 style="width:55px;height:55px;">

                                 <i class="ti ti-alert-circle"></i>

                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    Potensi Risiko
                                 </div>

                                 <small class="text-muted">
                                    8 sekolah terdeteksi
                                 </small>

                              </div>

                           </div>

                           <small class="text-muted">
                              AI mendeteksi penurunan aktivitas belajar di beberapa sekolah.
                           </small>

                        </div>

                        <div class="insight-card p-3">

                           <div class="d-flex align-items-center gap-3 mb-3">

                              <div class="metric-icon soft-primary"
                                 style="width:55px;height:55px;">

                                 <i class="ti ti-bulb"></i>

                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    AI Recommendation
                                 </div>

                                 <small class="text-muted">
                                    Automation workflow
                                 </small>

                              </div>

                           </div>

                           <small class="text-muted">
                              Disarankan menambahkan reminder otomatis untuk sekolah offline.
                           </small>

                        </div>

                     </div>

                     <!-- ACTIVITY -->
                     <div class="glass-card shadow-sm p-4 mb-4">

                        <h5 class="fw-bold mb-4">
                           ⚡ AI Activity
                        </h5>

                        <div class="activity-item">

                           <div class="fw-semibold">
                              AI Generated Report
                           </div>

                           <small class="text-muted d-block">
                              Analytics mingguan berhasil dibuat
                           </small>

                           <small class="text-success">
                              2 menit lalu
                           </small>

                        </div>

                        <div class="activity-item">

                           <div class="fw-semibold">
                              Device Prediction
                           </div>

                           <small class="text-muted d-block">
                              Prediksi 24 device offline
                           </small>

                           <small class="text-warning">
                              10 menit lalu
                           </small>

                        </div>

                        <div class="activity-item mb-0">

                           <div class="fw-semibold">
                              AI Recommendation
                           </div>

                           <small class="text-muted d-block">
                              Automation baru direkomendasikan
                           </small>

                           <small class="text-primary">
                              1 jam lalu
                           </small>

                        </div>

                     </div>

                     <!-- QUICK ACTION -->
                     <div class="glass-card shadow-sm p-4">

                        <h5 class="fw-bold mb-4">
                           🚀 Quick AI Action
                        </h5>

                        <div class="d-grid gap-3">

                           <button class="btn btn-primary">

                              <i class="ti ti-sparkles"></i>
                              Generate Insight

                           </button>

                           <button class="btn btn-success">

                              <i class="ti ti-chart-bar"></i>
                              AI Analytics

                           </button>

                           <button class="btn btn-warning text-white">

                              <i class="ti ti-alert-circle"></i>
                              Predict Risk

                           </button>

                           <button class="btn btn-danger">

                              <i class="ti ti-device-desktop-analytics"></i>
                              AI Monitoring

                           </button>

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
      var options = {

         series: [{
            name: 'Prediction',
            data: [20, 35, 28, 42, 55, 68, 82]
         }, {
            name: 'Actual',
            data: [18, 32, 25, 39, 51, 64, 78]
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
            width: 4
         },

         dataLabels: {
            enabled: false
         },

         xaxis: {
            categories: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
         }

      };

      new ApexCharts(document.querySelector("#predictionChart"), options).render();
   </script>

</body>

</html>