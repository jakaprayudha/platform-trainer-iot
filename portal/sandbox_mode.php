<!doctype html>
<html lang="en">

<head>
   <?php require 'partial-head.php' ?>

   <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

   <style>
      body {
         background: #0f172a;
      }

      .sandbox-banner {
         background: linear-gradient(135deg, #111827, #1d4ed8, #7c3aed);
         border-radius: 28px;
         overflow: hidden;
         position: relative;
      }

      .sandbox-banner::before {
         content: "";
         position: absolute;
         width: 420px;
         height: 420px;
         border-radius: 50%;
         background: rgba(255, 255, 255, .05);
         top: -180px;
         right: -160px;
      }

      .sandbox-banner::after {
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

      .glass-dark {
         background: rgba(15, 23, 42, .82);
         backdrop-filter: blur(20px);
         border: 1px solid rgba(255, 255, 255, .06);
         border-radius: 24px;
         color: #fff;
      }

      .metric-card {
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
         background: rgba(37, 99, 235, .18);
         color: #60a5fa;
      }

      .soft-success {
         background: rgba(16, 185, 129, .18);
         color: #34d399;
      }

      .soft-warning {
         background: rgba(245, 158, 11, .18);
         color: #fbbf24;
      }

      .soft-danger {
         background: rgba(239, 68, 68, .18);
         color: #f87171;
      }

      .soft-purple {
         background: rgba(124, 58, 237, .18);
         color: #c084fc;
      }

      .editor-box {
         background: #020617;
         border-radius: 20px;
         overflow: hidden;
         border: 1px solid rgba(255, 255, 255, .05);
      }

      .editor-header {
         background: rgba(255, 255, 255, .04);
         border-bottom: 1px solid rgba(255, 255, 255, .06);
      }

      .terminal-box {
         background: #000;
         color: #22c55e;
         border-radius: 20px;
         min-height: 350px;
         font-family: monospace;
         padding: 24px;
         overflow-y: auto;
      }

      .code-editor {
         width: 100%;
         min-height: 420px;
         background: transparent;
         border: none;
         outline: none;
         color: #e2e8f0;
         font-family: monospace;
         font-size: 15px;
         line-height: 1.8;
         padding: 24px;
         resize: none;
      }

      .device-card {
         border-radius: 20px;
         transition: .3s;
         border: 1px solid rgba(255, 255, 255, .05);
      }

      .device-card:hover {
         transform: translateY(-4px);
      }

      .status-pill {
         padding: 7px 14px;
         border-radius: 30px;
         font-size: 12px;
         font-weight: 600;
      }

      .status-online {
         background: rgba(34, 197, 94, .15);
         color: #4ade80;
      }

      .status-warning {
         background: rgba(245, 158, 11, .15);
         color: #facc15;
      }

      .status-danger {
         background: rgba(239, 68, 68, .15);
         color: #f87171;
      }

      .log-item {
         border-left: 3px solid #2563eb;
         padding-left: 18px;
         margin-bottom: 28px;
         position: relative;
      }

      .log-item::before {
         content: "";
         width: 14px;
         height: 14px;
         border-radius: 50%;
         background: #2563eb;
         position: absolute;
         left: -8px;
         top: 5px;
      }

      .sandbox-btn {
         border-radius: 16px;
         padding: 12px 18px;
         font-weight: 600;
      }

      .fake-console {
         color: #22c55e;
         font-family: monospace;
         line-height: 1.8;
      }

      .dot {
         width: 12px;
         height: 12px;
         border-radius: 50%;
      }

      .dot-red {
         background: #ff5f57;
      }

      .dot-yellow {
         background: #febc2e;
      }

      .dot-green {
         background: #28c840;
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

                     <h4 class="fw-bold text-white mb-1">
                        🧪 Sandbox Mode
                     </h4>

                     <p class="text-light opacity-75 mb-0">
                        Testing IoT device, API, automation dan realtime simulation
                     </p>

                  </div>

                  <div class="d-flex gap-2">

                     <button class="btn btn-light sandbox-btn">

                        <i class="ti ti-refresh"></i>
                        Restart Sandbox

                     </button>

                     <button class="btn btn-primary sandbox-btn">

                        <i class="ti ti-player-play"></i>
                        Run Simulation

                     </button>

                  </div>

               </div>

               <!-- HERO -->
               <div class="card border-0 shadow-sm mb-4">

                  <div class="card-body sandbox-banner p-5 text-white">

                     <div class="banner-content">

                        <div class="row align-items-center">

                           <div class="col-lg-8">

                              <div class="d-flex gap-2 mb-3">

                                 <span class="badge bg-success">
                                    Sandbox Active
                                 </span>

                                 <span class="badge bg-light text-dark">
                                    Simulation Environment
                                 </span>

                              </div>

                              <h2 class="fw-bold text-white mb-3">
                                 IoT Sandbox & Realtime Testing Environment
                              </h2>

                              <p class="mb-4"
                                 style="max-width:720px;">

                                 Jalankan simulasi ESP32, MQTT Broker,
                                 automation workflow, API testing dan monitoring realtime
                                 tanpa mempengaruhi production environment.

                              </p>

                              <div class="d-flex flex-wrap gap-5">

                                 <div>

                                    <small>Active Device</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       245
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Simulation</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       84
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Realtime Event</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       12.4K
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Environment</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       Isolated
                                    </h3>

                                 </div>

                              </div>

                           </div>

                           <div class="col-lg-4 text-center">

                              <i class="ti ti-flask"
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

                     <div class="glass-dark metric-card p-4">

                        <div class="d-flex justify-content-between">

                           <div>

                              <small class="text-light opacity-75">
                                 Device Online
                              </small>

                              <h2 class="fw-bold mt-2 text-white">
                                 245
                              </h2>

                              <span class="status-pill status-online">
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

                     <div class="glass-dark metric-card p-4">

                        <div class="d-flex justify-content-between">

                           <div>

                              <small class="text-light opacity-75">
                                 MQTT Traffic
                              </small>

                              <h2 class="fw-bold mt-2 text-white">
                                 18K
                              </h2>

                              <span class="status-pill status-online">
                                 Running
                              </span>

                           </div>

                           <div class="metric-icon soft-primary">

                              <i class="ti ti-wifi"></i>

                           </div>

                        </div>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-dark metric-card p-4">

                        <div class="d-flex justify-content-between">

                           <div>

                              <small class="text-light opacity-75">
                                 Error Testing
                              </small>

                              <h2 class="fw-bold mt-2 text-white">
                                 8
                              </h2>

                              <span class="status-pill status-warning">
                                 Warning
                              </span>

                           </div>

                           <div class="metric-icon soft-warning">

                              <i class="ti ti-alert-circle"></i>

                           </div>

                        </div>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-dark metric-card p-4">

                        <div class="d-flex justify-content-between">

                           <div>

                              <small class="text-light opacity-75">
                                 AI Automation
                              </small>

                              <h2 class="fw-bold mt-2 text-white">
                                 98%
                              </h2>

                              <span class="status-pill status-online">
                                 Active
                              </span>

                           </div>

                           <div class="metric-icon soft-purple">

                              <i class="ti ti-brain"></i>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>

               <div class="row">

                  <!-- LEFT -->
                  <div class="col-lg-8">

                     <!-- EDITOR -->
                     <div class="glass-dark p-4 mb-4">

                        <div class="d-flex justify-content-between align-items-center mb-4">

                           <div>

                              <h5 class="fw-bold mb-1">
                                 💻 Realtime Code Sandbox
                              </h5>

                              <small class="text-light opacity-75">
                                 Testing automation & device simulation
                              </small>

                           </div>

                           <div class="d-flex gap-2">

                              <button class="btn btn-success sandbox-btn">

                                 <i class="ti ti-player-play"></i>
                                 Run

                              </button>

                              <button class="btn btn-warning text-white sandbox-btn">

                                 <i class="ti ti-device-floppy"></i>
                                 Save

                              </button>

                           </div>

                        </div>

                        <!-- EDITOR -->
                        <div class="editor-box">

                           <div class="editor-header p-3 d-flex align-items-center gap-2">

                              <div class="dot dot-red"></div>
                              <div class="dot dot-yellow"></div>
                              <div class="dot dot-green"></div>

                              <small class="text-light ms-3">
                                 sandbox_simulation.js
                              </small>

                           </div>

                           <textarea class="code-editor">
const mqtt = require('mqtt')

const client = mqtt.connect('mqtt://sandbox.goskyiot.id')

client.on('connect', () => {

   console.log('🚀 Sandbox Connected')

   client.publish('sandbox/device', JSON.stringify({
      device: 'ESP32-001',
      school: 'SMKN 1 Medan',
      temperature: 28,
      humidity: 80,
      status: 'online'
   }))

})

client.on('message', (topic, message) => {

   console.log('📡 Message:', message.toString())

})
                           </textarea>

                        </div>

                     </div>

                     <!-- TERMINAL -->
                     <div class="glass-dark p-4">

                        <div class="d-flex justify-content-between align-items-center mb-4">

                           <div>

                              <h5 class="fw-bold mb-1">
                                 🖥️ Sandbox Terminal
                              </h5>

                              <small class="text-light opacity-75">
                                 Live simulation output
                              </small>

                           </div>

                           <button class="btn btn-danger sandbox-btn">

                              <i class="ti ti-trash"></i>
                              Clear

                           </button>

                        </div>

                        <div class="terminal-box">

                           <div class="fake-console">

                              > Initializing sandbox environment...
                              <br>

                              > Connecting MQTT Broker...
                              <br>

                              > MQTT Connected Successfully 🚀
                              <br>

                              > Device ESP32-001 Online
                              <br>

                              > Temperature : 28°C
                              <br>

                              > Humidity : 80%
                              <br>

                              > Sending realtime analytics...
                              <br>

                              > AI automation triggered
                              <br>

                              > Webhook response 200 OK
                              <br>

                              > Simulation running...

                           </div>

                        </div>

                     </div>

                  </div>

                  <!-- RIGHT -->
                  <div class="col-lg-4">

                     <!-- DEVICES -->
                     <div class="glass-dark p-4 mb-4">

                        <h5 class="fw-bold mb-4">
                           📡 Sandbox Devices
                        </h5>

                        <!-- ITEM -->
                        <div class="device-card p-3 mb-3">

                           <div class="d-flex justify-content-between align-items-center mb-3">

                              <div>

                                 <div class="fw-semibold">
                                    ESP32-001
                                 </div>

                                 <small class="text-light opacity-75">
                                    SMKN 1 Medan
                                 </small>

                              </div>

                              <span class="status-pill status-online">
                                 Online
                              </span>

                           </div>

                           <small class="text-success">
                              MQTT Connected
                           </small>

                        </div>

                        <!-- ITEM -->
                        <div class="device-card p-3 mb-3">

                           <div class="d-flex justify-content-between align-items-center mb-3">

                              <div>

                                 <div class="fw-semibold">
                                    ESP32-002
                                 </div>

                                 <small class="text-light opacity-75">
                                    SMKN 5 Binjai
                                 </small>

                              </div>

                              <span class="status-pill status-warning">
                                 Delay
                              </span>

                           </div>

                           <small class="text-warning">
                              High latency
                           </small>

                        </div>

                        <!-- ITEM -->
                        <div class="device-card p-3">

                           <div class="d-flex justify-content-between align-items-center mb-3">

                              <div>

                                 <div class="fw-semibold">
                                    RFID-SECURITY
                                 </div>

                                 <small class="text-light opacity-75">
                                    Sandbox Security
                                 </small>

                              </div>

                              <span class="status-pill status-danger">
                                 Offline
                              </span>

                           </div>

                           <small class="text-danger">
                              Device disconnected
                           </small>

                        </div>

                     </div>

                     <!-- CHART -->
                     <div class="glass-dark p-4 mb-4">

                        <h5 class="fw-bold mb-4">
                           📈 Realtime Traffic
                        </h5>

                        <div id="sandboxChart"></div>

                     </div>

                     <!-- LOG -->
                     <div class="glass-dark p-4">

                        <h5 class="fw-bold mb-4">
                           ⚡ Sandbox Activity
                        </h5>

                        <div class="log-item">

                           <div class="fw-semibold">
                              MQTT Connected
                           </div>

                           <small class="text-light opacity-75 d-block">
                              Device synchronization success
                           </small>

                           <small class="text-success">
                              2 menit lalu
                           </small>

                        </div>

                        <div class="log-item">

                           <div class="fw-semibold">
                              AI Automation Triggered
                           </div>

                           <small class="text-light opacity-75 d-block">
                              Automation workflow executed
                           </small>

                           <small class="text-warning">
                              10 menit lalu
                           </small>

                        </div>

                        <div class="log-item mb-0">

                           <div class="fw-semibold">
                              Webhook Simulation
                           </div>

                           <small class="text-light opacity-75 d-block">
                              API response testing completed
                           </small>

                           <small class="text-primary">
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

   <?php require 'library.php'; ?>

   <script>
      var options = {

         series: [{
            name: 'MQTT Traffic',
            data: [120, 220, 180, 320, 280, 410, 520]
         }, {
            name: 'API Request',
            data: [90, 160, 150, 250, 240, 340, 420]
         }],

         chart: {
            type: 'area',
            height: 280,
            toolbar: {
               show: false
            },
            foreColor: '#94a3b8'
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
         },

         grid: {
            borderColor: 'rgba(255,255,255,.06)'
         }

      };

      new ApexCharts(document.querySelector("#sandboxChart"), options).render();
   </script>

</body>

</html>