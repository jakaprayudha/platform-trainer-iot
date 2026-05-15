<!doctype html>
<html lang="en">

<head>
   <?php require 'partial-head.php' ?>

   <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

   <style>
      body {
         background: #f8fafc;
      }

      .cloud-banner {
         background: linear-gradient(135deg, #0f172a, #2563eb, #7c3aed);
         border-radius: 28px;
         overflow: hidden;
         position: relative;
      }

      .cloud-banner::before {
         content: "";
         position: absolute;
         width: 420px;
         height: 420px;
         background: rgba(255, 255, 255, .05);
         border-radius: 50%;
         top: -180px;
         right: -160px;
      }

      .cloud-banner::after {
         content: "";
         position: absolute;
         width: 260px;
         height: 260px;
         background: rgba(255, 255, 255, .05);
         border-radius: 50%;
         bottom: -120px;
         left: -100px;
      }

      .banner-content {
         position: relative;
         z-index: 2;
      }

      .glass-card {
         background: rgba(255, 255, 255, .85);
         backdrop-filter: blur(20px);
         border-radius: 24px;
         border: 1px solid rgba(255, 255, 255, .8);
         transition: .3s;
      }

      .glass-card:hover {
         transform: translateY(-4px);
      }

      .integration-card {
         border-radius: 22px;
         transition: .3s;
         border: 1px solid #eef2ff;
         cursor: pointer;
      }

      .integration-card:hover {
         transform: translateY(-5px);
         border-color: #2563eb;
      }

      .integration-icon {
         width: 72px;
         height: 72px;
         border-radius: 22px;
         display: flex;
         align-items: center;
         justify-content: center;
         font-size: 30px;
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

      .status-pill {
         padding: 7px 14px;
         border-radius: 30px;
         font-size: 12px;
         font-weight: 600;
      }

      .status-online {
         background: #dcfce7;
         color: #166534;
      }

      .status-warning {
         background: #fef3c7;
         color: #92400e;
      }

      .api-box {
         background: #0f172a;
         border-radius: 18px;
         padding: 20px;
         color: #e2e8f0;
         font-family: monospace;
         overflow-x: auto;
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

      .service-dot {
         width: 12px;
         height: 12px;
         border-radius: 50%;
      }

      .dot-green {
         background: #22c55e;
      }

      .dot-yellow {
         background: #f59e0b;
      }

      .dot-red {
         background: #ef4444;
      }

      .server-box {
         border-radius: 18px;
         border: 1px solid #eef2ff;
         transition: .3s;
      }

      .server-box:hover {
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
                        ☁️ Cloud Integration
                     </h4>

                     <p class="text-muted mb-0">
                        Integrasi cloud server, API, MQTT broker dan IoT platform
                     </p>

                  </div>

                  <div class="d-flex gap-2">

                     <button class="btn btn-light">

                        <i class="ti ti-refresh"></i>
                        Sync Cloud

                     </button>

                     <button class="btn btn-primary"
                        data-bs-toggle="modal"
                        data-bs-target="#modalIntegration">

                        <i class="ti ti-plus"></i>
                        Add Integration

                     </button>

                  </div>

               </div>

               <!-- HERO -->
               <div class="card shadow-sm border-0 mb-4">

                  <div class="card-body cloud-banner p-5 text-white">

                     <div class="banner-content">

                        <div class="row align-items-center">

                           <div class="col-lg-8">

                              <div class="d-flex gap-2 mb-3">

                                 <span class="badge bg-success">
                                    Cloud Connected
                                 </span>

                                 <span class="badge bg-light text-dark">
                                    IoT Infrastructure
                                 </span>

                              </div>

                              <h2 class="fw-bold text-white mb-3">
                                 Smart Cloud Integration Platform
                              </h2>

                              <p class="mb-4"
                                 style="max-width:720px;">

                                 Kelola integrasi cloud MQTT, REST API,
                                 webhook automation, analytics server,
                                 dan monitoring trainer kit sekolah secara realtime.

                              </p>

                              <div class="d-flex flex-wrap gap-5">

                                 <div>

                                    <small>Cloud Service</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       12
                                    </h3>

                                 </div>

                                 <div>

                                    <small>API Running</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       48
                                    </h3>

                                 </div>

                                 <div>

                                    <small>MQTT Device</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       1.284
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Uptime</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       99.9%
                                    </h3>

                                 </div>

                              </div>

                           </div>

                           <div class="col-lg-4 text-center">

                              <i class="ti ti-cloud-computing"
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

                     <div class="glass-card p-4">

                        <div class="d-flex justify-content-between">

                           <div>

                              <small class="text-muted">
                                 Active Server
                              </small>

                              <h2 class="fw-bold mt-2">
                                 24
                              </h2>

                              <span class="status-pill status-online">
                                 Running
                              </span>

                           </div>

                           <div class="integration-icon soft-primary">

                              <i class="ti ti-server"></i>

                           </div>

                        </div>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card p-4">

                        <div class="d-flex justify-content-between">

                           <div>

                              <small class="text-muted">
                                 MQTT Broker
                              </small>

                              <h2 class="fw-bold mt-2">
                                 8
                              </h2>

                              <span class="status-pill status-online">
                                 Connected
                              </span>

                           </div>

                           <div class="integration-icon soft-success">

                              <i class="ti ti-wifi"></i>

                           </div>

                        </div>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card p-4">

                        <div class="d-flex justify-content-between">

                           <div>

                              <small class="text-muted">
                                 API Gateway
                              </small>

                              <h2 class="fw-bold mt-2">
                                 48
                              </h2>

                              <span class="status-pill status-online">
                                 Active
                              </span>

                           </div>

                           <div class="integration-icon soft-warning">

                              <i class="ti ti-api"></i>

                           </div>

                        </div>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card p-4">

                        <div class="d-flex justify-content-between">

                           <div>

                              <small class="text-muted">
                                 Error Log
                              </small>

                              <h2 class="fw-bold mt-2">
                                 3
                              </h2>

                              <span class="status-pill status-warning">
                                 Warning
                              </span>

                           </div>

                           <div class="integration-icon soft-danger">

                              <i class="ti ti-alert-triangle"></i>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>

               <div class="row">

                  <!-- LEFT -->
                  <div class="col-lg-8">

                     <!-- INTEGRATION -->
                     <div class="card border-0 shadow-sm glass-card mb-4">

                        <div class="card-body">

                           <div class="d-flex justify-content-between align-items-center mb-4">

                              <div>

                                 <h5 class="fw-bold mb-1">
                                    🔗 Cloud Services Integration
                                 </h5>

                                 <small class="text-muted">
                                    Connected services dan external platform
                                 </small>

                              </div>

                           </div>

                           <div class="row">

                              <!-- ITEM -->
                              <div class="col-md-6 mb-4">

                                 <div class="integration-card p-4 h-100">

                                    <div class="d-flex justify-content-between mb-4">

                                       <div class="integration-icon soft-primary">

                                          <i class="ti ti-brand-google"></i>

                                       </div>

                                       <span class="status-pill status-online">
                                          Connected
                                       </span>

                                    </div>

                                    <h5 class="fw-bold">
                                       Google Cloud
                                    </h5>

                                    <p class="text-muted mb-4">

                                       Storage analytics dashboard dan IoT monitoring data.

                                    </p>

                                    <div class="d-flex align-items-center gap-2">

                                       <div class="service-dot dot-green"></div>

                                       <small class="text-success">
                                          Healthy Connection
                                       </small>

                                    </div>

                                 </div>

                              </div>

                              <!-- ITEM -->
                              <div class="col-md-6 mb-4">

                                 <div class="integration-card p-4 h-100">

                                    <div class="d-flex justify-content-between mb-4">

                                       <div class="integration-icon soft-success">

                                          <i class="ti ti-brand-aws"></i>

                                       </div>

                                       <span class="status-pill status-online">
                                          Running
                                       </span>

                                    </div>

                                    <h5 class="fw-bold">
                                       AWS IoT Core
                                    </h5>

                                    <p class="text-muted mb-4">

                                       Device management trainer kit dan MQTT integration.

                                    </p>

                                    <div class="d-flex align-items-center gap-2">

                                       <div class="service-dot dot-green"></div>

                                       <small class="text-success">
                                          Stable
                                       </small>

                                    </div>

                                 </div>

                              </div>

                              <!-- ITEM -->
                              <div class="col-md-6 mb-4">

                                 <div class="integration-card p-4 h-100">

                                    <div class="d-flex justify-content-between mb-4">

                                       <div class="integration-icon soft-warning">

                                          <i class="ti ti-database"></i>

                                       </div>

                                       <span class="status-pill status-warning">
                                          Maintenance
                                       </span>

                                    </div>

                                    <h5 class="fw-bold">
                                       Firebase
                                    </h5>

                                    <p class="text-muted mb-4">

                                       Authentication dan realtime database platform.

                                    </p>

                                    <div class="d-flex align-items-center gap-2">

                                       <div class="service-dot dot-yellow"></div>

                                       <small class="text-warning">
                                          Delayed Response
                                       </small>

                                    </div>

                                 </div>

                              </div>

                              <!-- ITEM -->
                              <div class="col-md-6 mb-4">

                                 <div class="integration-card p-4 h-100">

                                    <div class="d-flex justify-content-between mb-4">

                                       <div class="integration-icon soft-purple">

                                          <i class="ti ti-brand-whatsapp"></i>

                                       </div>

                                       <span class="status-pill status-online">
                                          Active
                                       </span>

                                    </div>

                                    <h5 class="fw-bold">
                                       WhatsApp Gateway
                                    </h5>

                                    <p class="text-muted mb-4">

                                       Automation reminder dan notification sekolah.

                                    </p>

                                    <div class="d-flex align-items-center gap-2">

                                       <div class="service-dot dot-green"></div>

                                       <small class="text-success">
                                          Queue Running
                                       </small>

                                    </div>

                                 </div>

                              </div>

                           </div>

                        </div>

                     </div>

                     <!-- API -->
                     <div class="card border-0 shadow-sm glass-card mb-4">

                        <div class="card-body">

                           <div class="d-flex justify-content-between align-items-center mb-4">

                              <div>

                                 <h5 class="fw-bold mb-1">
                                    🧩 API Endpoint
                                 </h5>

                                 <small class="text-muted">
                                    Integration endpoint dan webhook configuration
                                 </small>

                              </div>

                           </div>

                           <div class="api-box mb-4">
                              POST /api/v1/device/sync

                              {
                              "device_id": "ESP32-001",
                              "school": "SMKN 1 Medan",
                              "status": "online",
                              "temperature": 28.5
                              }
                           </div>

                           <div class="row">

                              <div class="col-md-4 mb-3">

                                 <div class="server-box p-3">

                                    <small class="text-muted">
                                       Request Today
                                    </small>

                                    <h4 class="fw-bold mt-2">
                                       18.245
                                    </h4>

                                 </div>

                              </div>

                              <div class="col-md-4 mb-3">

                                 <div class="server-box p-3">

                                    <small class="text-muted">
                                       Avg Response
                                    </small>

                                    <h4 class="fw-bold mt-2">
                                       120ms
                                    </h4>

                                 </div>

                              </div>

                              <div class="col-md-4 mb-3">

                                 <div class="server-box p-3">

                                    <small class="text-muted">
                                       Success Rate
                                    </small>

                                    <h4 class="fw-bold mt-2">
                                       99.2%
                                    </h4>

                                 </div>

                              </div>

                           </div>

                        </div>

                     </div>

                     <!-- CHART -->
                     <div class="card border-0 shadow-sm glass-card">

                        <div class="card-body">

                           <div class="d-flex justify-content-between align-items-center mb-4">

                              <div>

                                 <h5 class="fw-bold mb-1">
                                    📈 Cloud Traffic Analytics
                                 </h5>

                                 <small class="text-muted">
                                    Monitoring API dan MQTT traffic
                                 </small>

                              </div>

                           </div>

                           <div id="trafficChart"></div>

                        </div>

                     </div>

                  </div>

                  <!-- RIGHT -->
                  <div class="col-lg-4">

                     <!-- STATUS -->
                     <div class="card border-0 shadow-sm glass-card mb-4">

                        <div class="card-body">

                           <h5 class="fw-bold mb-4">
                              🌐 Server Status
                           </h5>

                           <div class="activity-item">

                              <div class="fw-semibold">
                                 MQTT Broker Online
                              </div>

                              <small class="text-muted d-block mb-1">
                                 mqtt.goskyiot.id
                              </small>

                              <small class="text-success">
                                 Running normally
                              </small>

                           </div>

                           <div class="activity-item">

                              <div class="fw-semibold">
                                 Analytics Server
                              </div>

                              <small class="text-muted d-block mb-1">
                                 analytics.goskyiot.id
                              </small>

                              <small class="text-warning">
                                 High CPU usage
                              </small>

                           </div>

                           <div class="activity-item mb-0">

                              <div class="fw-semibold">
                                 Notification Gateway
                              </div>

                              <small class="text-muted d-block mb-1">
                                 notify.goskyiot.id
                              </small>

                              <small class="text-success">
                                 Queue processing active
                              </small>

                           </div>

                        </div>

                     </div>

                     <!-- QUICK ACTION -->
                     <div class="card border-0 shadow-sm glass-card mb-4">

                        <div class="card-body">

                           <h5 class="fw-bold mb-4">
                              ⚡ Quick Action
                           </h5>

                           <div class="d-grid gap-3">

                              <button class="btn btn-primary">

                                 <i class="ti ti-cloud-upload"></i>
                                 Deploy Integration

                              </button>

                              <button class="btn btn-success">

                                 <i class="ti ti-refresh"></i>
                                 Sync MQTT

                              </button>

                              <button class="btn btn-warning text-white">

                                 <i class="ti ti-api"></i>
                                 Generate API Key

                              </button>

                              <button class="btn btn-danger">

                                 <i class="ti ti-power"></i>
                                 Restart Service

                              </button>

                           </div>

                        </div>

                     </div>

                     <!-- LOG -->
                     <div class="card border-0 shadow-sm glass-card">

                        <div class="card-body">

                           <h5 class="fw-bold mb-4">
                              🕒 Integration Log
                           </h5>

                           <div class="mb-4">

                              <div class="fw-semibold">
                                 API Connected
                              </div>

                              <small class="text-muted d-block">
                                 Google Cloud integration success
                              </small>

                              <small class="text-success">
                                 2 menit lalu
                              </small>

                           </div>

                           <div class="mb-4">

                              <div class="fw-semibold">
                                 MQTT Sync
                              </div>

                              <small class="text-muted d-block">
                                 245 devices synchronized
                              </small>

                              <small class="text-primary">
                                 10 menit lalu
                              </small>

                           </div>

                           <div>

                              <div class="fw-semibold">
                                 Webhook Trigger
                              </div>

                              <small class="text-muted d-block">
                                 Automation workflow executed
                              </small>

                              <small class="text-warning">
                                 1 jam lalu
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

   <!-- MODAL -->
   <div class="modal fade"
      id="modalIntegration"
      tabindex="-1">

      <div class="modal-dialog modal-lg modal-dialog-centered">

         <div class="modal-content border-0 shadow">

            <div class="modal-header">

               <h5 class="modal-title">
                  ➕ Add Cloud Integration
               </h5>

               <button type="button"
                  class="btn-close"
                  data-bs-dismiss="modal">
               </button>

            </div>

            <form>

               <div class="modal-body">

                  <div class="row">

                     <div class="col-md-6 mb-3">

                        <label class="form-label">
                           Integration Name
                        </label>

                        <input type="text"
                           class="form-control">

                     </div>

                     <div class="col-md-6 mb-3">

                        <label class="form-label">
                           Service Type
                        </label>

                        <select class="form-select">

                           <option>AWS IoT</option>
                           <option>Google Cloud</option>
                           <option>Firebase</option>
                           <option>MQTT Broker</option>

                        </select>

                     </div>

                     <div class="col-md-12 mb-3">

                        <label class="form-label">
                           API Endpoint
                        </label>

                        <input type="text"
                           class="form-control">

                     </div>

                     <div class="col-md-6 mb-3">

                        <label class="form-label">
                           API Key
                        </label>

                        <input type="password"
                           class="form-control">

                     </div>

                     <div class="col-md-6 mb-3">

                        <label class="form-label">
                           Secret Key
                        </label>

                        <input type="password"
                           class="form-control">

                     </div>

                     <div class="col-md-12 mb-3">

                        <label class="form-label">
                           Description
                        </label>

                        <textarea class="form-control"
                           rows="4"></textarea>

                     </div>

                  </div>

               </div>

               <div class="modal-footer">

                  <button type="button"
                     class="btn btn-light"
                     data-bs-dismiss="modal">

                     Cancel

                  </button>

                  <button type="submit"
                     class="btn btn-primary">

                     ☁️ Connect Service

                  </button>

               </div>

            </form>

         </div>

      </div>

   </div>

   <?php require 'library.php'; ?>

   <script>
      var options = {

         series: [{
            name: 'API Request',
            data: [1200, 1800, 1400, 2200, 2600, 3200, 4200]
         }, {
            name: 'MQTT Traffic',
            data: [800, 1200, 1000, 1800, 2100, 2800, 3500]
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
            categories: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
         }

      };

      new ApexCharts(document.querySelector("#trafficChart"), options).render();
   </script>

</body>

</html>