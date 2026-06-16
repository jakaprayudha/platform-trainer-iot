<!doctype html>
<html lang="en">

<head>
   <?php require 'partial-head.php' ?>

   <style>
      body {
         background: #f8fafc;
      }

      .component-banner {
         background: linear-gradient(135deg, #0f172a, #2563eb, #16a34a);
         border-radius: 28px;
         overflow: hidden;
         position: relative;
      }

      .component-banner::before {
         content: "";
         position: absolute;
         width: 420px;
         height: 420px;
         border-radius: 50%;
         background: rgba(255, 255, 255, .05);
         top: -180px;
         right: -160px;
      }

      .component-banner::after {
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
         background: rgba(255, 255, 255, .9);
         backdrop-filter: blur(18px);
         border-radius: 24px;
         border: 1px solid rgba(255, 255, 255, .8);
         transition: .3s;
      }

      .glass-card:hover {
         transform: translateY(-3px);
      }

      .component-preview {
         width: 100%;
         height: 320px;
         border-radius: 26px;
         background: linear-gradient(135deg, #111827, #1e293b);
         display: flex;
         align-items: center;
         justify-content: center;
         color: #4ade80;
         font-size: 90px;
      }

      .feature-card {
         border-radius: 22px;
         transition: .3s;
         border: 1px solid #eef2ff;
      }

      .feature-card:hover {
         transform: translateY(-4px);
      }

      .feature-icon {
         width: 64px;
         height: 64px;
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

      .pin-card {
         border-radius: 20px;
         border: 1px solid #eef2ff;
         transition: .3s;
      }

      .pin-card:hover {
         transform: translateY(-3px);
         border-color: #2563eb;
      }

      .pin-icon {
         width: 56px;
         height: 56px;
         border-radius: 18px;
         background: linear-gradient(135deg, #16a34a, #2563eb);
         color: #fff;
         display: flex;
         align-items: center;
         justify-content: center;
         font-weight: bold;
         font-size: 18px;
      }

      .code-box {
         background: #020617;
         border-radius: 24px;
         overflow: hidden;
      }

      .code-header {
         background: rgba(255, 255, 255, .05);
         padding: 14px 20px;
         color: #fff;
         border-bottom: 1px solid rgba(255, 255, 255, .08);
      }


      .usage-card {
         border-radius: 18px;
         border: 1px solid #eef2ff;
         padding: 18px;
         transition: .3s;
      }

      .usage-card:hover {
         transform: translateY(-3px);
         border-color: #06b6d4;
      }

      .usage-icon {
         width: 50px;
         height: 50px;
         border-radius: 16px;
         background: linear-gradient(135deg, #2563eb, #06b6d4);
         color: #fff;
         display: flex;
         align-items: center;
         justify-content: center;
         font-size: 22px;
      }

      .code-content {
         padding: 24px;
         color: #e2e8f0;
         font-family: monospace;
         line-height: 1.9;
         overflow-x: auto;
      }

      .spec-box {
         border-radius: 18px;
         background: #f8fafc;
         border: 1px solid #eef2ff;
         padding: 18px;
      }

      .step-card {
         border-left: 4px solid #16a34a;
         padding-left: 18px;
         margin-bottom: 26px;
         position: relative;
      }

      .step-card::before {
         content: "";
         width: 14px;
         height: 14px;
         border-radius: 50%;
         background: #16a34a;
         position: absolute;
         left: -9px;
         top: 6px;
      }

      .table-spec td {
         padding: 16px;
         vertical-align: middle;
      }

      .channel-card {
         border-radius: 18px;
         border: 1px solid #eef2ff;
         padding: 18px;
         transition: .3s;
      }

      .channel-card:hover {
         transform: translateY(-3px);
         border-color: #16a34a;
      }

      .channel-badge {
         width: 48px;
         height: 48px;
         border-radius: 16px;
         background: linear-gradient(135deg, #16a34a, #2563eb);
         color: #fff;
         display: flex;
         align-items: center;
         justify-content: center;
         font-weight: bold;
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
                        ⚡ Uraian Komponen Relay 4 Channel
                     </h4>

                     <p class="text-muted mb-0">
                        Materi pembelajaran trainer kit IoT & automation control
                     </p>

                  </div>

                  <div class="d-flex gap-2">

                     <button class="btn btn-light">

                        <i class="ti ti-download"></i>
                        Download PDF

                     </button>

                     <button class="btn btn-primary">

                        <i class="ti ti-player-play"></i>
                        Start Learning

                     </button>

                  </div>

               </div>

               <!-- HERO -->
               <div class="card border-0 shadow-sm mb-4">

                  <div class="card-body component-banner p-5 text-white">

                     <div class="banner-content">

                        <div class="row align-items-center">

                           <div class="col-lg-8">

                              <div class="d-flex gap-2 mb-3">

                                 <span class="badge bg-success">
                                    Automation Component
                                 </span>

                                 <span class="badge bg-light text-dark">
                                    IoT Control Module
                                 </span>

                              </div>

                              <h2 class="fw-bold text-white mb-3">
                                 Relay Module 4 Channel
                              </h2>

                              <p class="mb-4"
                                 style="max-width:720px;">

                                 Relay 4 channel adalah modul saklar elektronik
                                 yang digunakan untuk mengontrol perangkat AC/DC
                                 menggunakan sinyal digital dari Arduino, ESP32 dan sistem IoT.

                              </p>

                              <div class="d-flex flex-wrap gap-5">

                                 <div>

                                    <small>Relay Channel</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       4 Channel
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Voltage</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       5V DC
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Control</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       Digital Input
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Usage</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       Automation
                                    </h3>

                                 </div>

                              </div>

                           </div>

                           <div class="col-lg-4">

                              <div class="component-preview">

                                 <i class="ti ti-plug-connected"></i>

                              </div>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>

               <!-- FEATURE -->
               <div class="row mb-4">

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card feature-card p-4 text-center">

                        <div class="feature-icon soft-primary mx-auto mb-3">

                           <i class="ti ti-bolt"></i>

                        </div>

                        <h5 class="fw-bold">
                           AC/DC Control
                        </h5>

                        <small class="text-muted">
                           Mengontrol perangkat listrik
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card feature-card p-4 text-center">

                        <div class="feature-icon soft-success mx-auto mb-3">

                           <i class="ti ti-device-iot"></i>

                        </div>

                        <h5 class="fw-bold">
                           IoT Automation
                        </h5>

                        <small class="text-muted">
                           Cocok untuk smart automation
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card feature-card p-4 text-center">

                        <div class="feature-icon soft-warning mx-auto mb-3">

                           <i class="ti ti-cpu"></i>

                        </div>

                        <h5 class="fw-bold">
                           Arduino Ready
                        </h5>

                        <small class="text-muted">
                           Kontrol menggunakan mikrokontroler
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card feature-card p-4 text-center">

                        <div class="feature-icon soft-danger mx-auto mb-3">

                           <i class="ti ti-shield-lock"></i>

                        </div>

                        <h5 class="fw-bold">
                           Isolated Control
                        </h5>

                        <small class="text-muted">
                           Aman untuk sistem kontrol
                        </small>

                     </div>

                  </div>

               </div>

               <div class="row">

                  <!-- LEFT -->
                  <div class="col-lg-8">

                     <!-- PENJELASAN -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           📖 Penjelasan Relay 4 Channel
                        </h5>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           Relay adalah saklar elektronik yang bekerja menggunakan
                           elektromagnet untuk menghubungkan atau memutus arus listrik.
                           Modul relay 4 channel memiliki 4 relay independen
                           yang dapat dikontrol secara terpisah.

                        </p>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           Relay 4 channel sering digunakan pada:
                        </p>

                        <ul class="text-muted"
                           style="line-height:2;">

                           <li>Smart home automation</li>
                           <li>Kontrol lampu otomatis</li>
                           <li>Kontrol pompa air</li>
                           <li>IoT industrial automation</li>
                           <li>Monitoring dan switching listrik</li>

                        </ul>

                     </div>

                     <!-- SPESIFIKASI -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           ⚙️ Spesifikasi Relay Module
                        </h5>

                        <div class="table-responsive">

                           <table class="table table-borderless table-spec">

                              <tbody>

                                 <tr>

                                    <td width="35%">
                                       <strong>Module Type</strong>
                                    </td>

                                    <td>
                                       Relay 4 Channel
                                    </td>

                                 </tr>

                                 <tr>

                                    <td>
                                       <strong>Operating Voltage</strong>
                                    </td>

                                    <td>
                                       5V DC
                                    </td>

                                 </tr>

                                 <tr>

                                    <td>
                                       <strong>Relay Channel</strong>
                                    </td>

                                    <td>
                                       4 Channel
                                    </td>

                                 </tr>

                                 <tr>

                                    <td>
                                       <strong>Max Voltage</strong>
                                    </td>

                                    <td>
                                       250V AC / 30V DC
                                    </td>

                                 </tr>

                                 <tr>

                                    <td>
                                       <strong>Max Current</strong>
                                    </td>

                                    <td>
                                       10A
                                    </td>

                                 </tr>

                                 <tr>

                                    <td>
                                       <strong>Control Signal</strong>
                                    </td>

                                    <td>
                                       Digital LOW Trigger
                                    </td>

                                 </tr>

                              </tbody>

                           </table>

                        </div>

                     </div>

                     <!-- LANGKAH -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           🔧 Cara Menggunakan Relay 4 Channel
                        </h5>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              1. Hubungkan Supply Relay
                           </div>

                           <small class="text-muted">
                              Sambungkan pin VCC ke 5V dan GND ke Ground Arduino atau ESP32.
                           </small>

                        </div>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              2. Hubungkan Pin IN1 - IN4
                           </div>

                           <small class="text-muted">
                              Hubungkan pin IN1, IN2, IN3 dan IN4 ke pin digital mikrokontroler
                              untuk mengendalikan masing-masing relay.
                           </small>

                        </div>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              3. Sambungkan Beban
                           </div>

                           <small class="text-muted">
                              Hubungkan perangkat listrik ke terminal COM, NO atau NC
                              sesuai kebutuhan aplikasi.
                           </small>

                        </div>

                        <div class="step-card mb-0">

                           <div class="fw-semibold mb-2">
                              4. Upload Program
                           </div>

                           <small class="text-muted">
                              Upload program Arduino untuk mengaktifkan atau menonaktifkan
                              relay sesuai logika yang diinginkan.
                           </small>

                        </div>

                     </div>
                     <!-- FUNGSI -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           📍 Penggunaan Relay 4 Channel
                        </h5>

                        <div class="row">

                           <div class="col-md-6 mb-3">

                              <div class="usage-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="usage-icon">

                                       <i class="ti ti-bulb"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Smart Lighting
                                       </div>

                                       <small class="text-muted">
                                          Mengontrol lampu secara otomatis
                                       </small>

                                    </div>

                                 </div>

                              </div>

                           </div>

                           <div class="col-md-6 mb-3">

                              <div class="usage-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="usage-icon">

                                       <i class="ti ti-dashboard"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Fan Control
                                       </div>

                                       <small class="text-muted">
                                          Mengendalikan kipas dan motor listrik
                                       </small>

                                    </div>

                                 </div>

                              </div>

                           </div>

                           <div class="col-md-6 mb-3">

                              <div class="usage-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="usage-icon">

                                       <i class="ti ti-home"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Home Automation
                                       </div>

                                       <small class="text-muted">
                                          Sistem rumah pintar berbasis IoT
                                       </small>

                                    </div>

                                 </div>

                              </div>

                           </div>

                           <div class="col-md-6 mb-3">

                              <div class="usage-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="usage-icon">

                                       <i class="ti ti-plug-connected"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Electrical Switching
                                       </div>

                                       <small class="text-muted">
                                          Mengontrol perangkat AC dan DC
                                       </small>

                                    </div>

                                 </div>

                              </div>

                           </div>

                        </div>

                     </div>



                     <!-- CODE -->
                     <div class="glass-card p-4 shadow-sm">

                        <div class="d-flex justify-content-between align-items-center mb-4">

                           <div>

                              <h5 class="fw-bold mb-1">
                                 💻 Contoh Program Relay
                              </h5>

                              <small class="text-muted">
                                 Mengontrol relay menggunakan Arduino
                              </small>

                           </div>

                           <button class="btn btn-primary btn-sm">

                              <i class="ti ti-copy"></i>
                              Copy Code

                           </button>

                        </div>

                        <div class="code-box">

                           <div class="code-header">

                              relay_4_channel.ino

                           </div>

                           <div class="code-content">
                              int relay1 = 2;
                              int relay2 = 3;

                              void setup() {

                              pinMode(relay1, OUTPUT);
                              pinMode(relay2, OUTPUT);

                              }

                              void loop() {

                              digitalWrite(relay1, LOW);
                              delay(1000);

                              digitalWrite(relay1, HIGH);
                              delay(1000);

                              digitalWrite(relay2, LOW);
                              delay(1000);

                              digitalWrite(relay2, HIGH);
                              delay(1000);

                              }
                           </div>

                        </div>

                     </div>

                  </div>

                  <!-- RIGHT -->
                  <div class="col-lg-4">

                     <!-- PIN -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           🔌 Pin Relay Module
                        </h5>

                        <!-- ITEM -->
                        <div class="pin-card p-3 mb-3">

                           <div class="d-flex align-items-center gap-3">

                              <div class="pin-icon">
                                 VCC
                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    VCC
                                 </div>

                                 <small class="text-muted">
                                    Supply 5V DC
                                 </small>

                              </div>

                           </div>

                        </div>

                        <!-- ITEM -->
                        <div class="pin-card p-3 mb-3">

                           <div class="d-flex align-items-center gap-3">

                              <div class="pin-icon">
                                 GND
                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    Ground
                                 </div>

                                 <small class="text-muted">
                                    Ground sistem
                                 </small>

                              </div>

                           </div>

                        </div>

                        <!-- ITEM -->
                        <div class="pin-card p-3 mb-3">

                           <div class="d-flex align-items-center gap-3">

                              <div class="pin-icon">
                                 IN1
                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    Input 1
                                 </div>

                                 <small class="text-muted">
                                    Kontrol relay channel 1
                                 </small>

                              </div>

                           </div>

                        </div>

                        <!-- ITEM -->
                        <div class="pin-card p-3">

                           <div class="d-flex align-items-center gap-3">

                              <div class="pin-icon">
                                 COM
                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    COM / NO / NC
                                 </div>

                                 <small class="text-muted">
                                    Terminal output relay
                                 </small>

                              </div>

                           </div>

                        </div>

                     </div>

                     <!-- INFO -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           📌 Informasi Penting
                        </h5>

                        <div class="spec-box mb-3">

                           <div class="fw-semibold mb-2">
                              High Voltage
                           </div>

                           <small class="text-muted">
                              Hati-hati saat menggunakan listrik AC tegangan tinggi.
                           </small>

                        </div>

                        <div class="spec-box mb-3">

                           <div class="fw-semibold mb-2">
                              NO & NC
                           </div>

                           <small class="text-muted">
                              NO = Normally Open, NC = Normally Closed.
                           </small>

                        </div>

                        <div class="spec-box">

                           <div class="fw-semibold mb-2">
                              Isolated Control
                           </div>

                           <small class="text-muted">
                              Relay memisahkan sistem kontrol dan beban listrik.
                           </small>

                        </div>

                     </div>

                     <!-- QUICK ACTION -->
                     <div class="glass-card p-4 shadow-sm">

                        <h5 class="fw-bold mb-4">
                           🚀 Quick Action
                        </h5>

                        <div class="d-grid gap-3">

                           <button class="btn btn-primary">

                              <i class="ti ti-player-play"></i>
                              Start Simulation

                           </button>

                           <button class="btn btn-success">

                              <i class="ti ti-code"></i>
                              Open Sandbox

                           </button>

                           <button class="btn btn-warning text-white">

                              <i class="ti ti-download"></i>
                              Download Module

                           </button>

                           <button class="btn btn-danger">

                              <i class="ti ti-book"></i>
                              Quiz Component

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

</body>

</html>