<!doctype html>
<html lang="en">

<head>
   <?php require 'partial-head.php' ?>

   <style>
      body {
         background: #f8fafc;
      }

      .component-banner {
         background: linear-gradient(135deg, #0f172a, #2563eb, #dc2626);
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
         color: #f87171;
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
         border-color: #dc2626;
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


      .pin-icon {
         width: 56px;
         height: 56px;
         border-radius: 18px;
         background: linear-gradient(135deg, #dc2626, #2563eb);
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
         border-left: 4px solid #dc2626;
         padding-left: 18px;
         margin-bottom: 26px;
         position: relative;
      }

      .step-card::before {
         content: "";
         width: 14px;
         height: 14px;
         border-radius: 50%;
         background: #dc2626;
         position: absolute;
         left: -9px;
         top: 6px;
      }

      .table-spec td {
         padding: 16px;
         vertical-align: middle;
      }

      .gas-card {
         border-radius: 18px;
         border: 1px solid #eef2ff;
         padding: 18px;
         transition: .3s;
      }

      .gas-card:hover {
         transform: translateY(-3px);
         border-color: #dc2626;
      }

      .gas-icon {
         width: 50px;
         height: 50px;
         border-radius: 16px;
         background: linear-gradient(135deg, #dc2626, #f97316);
         color: #fff;
         display: flex;
         align-items: center;
         justify-content: center;
         font-size: 22px;
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
                        🧪 Uraian Komponen MQ-5 Gas Sensor
                     </h4>

                     <p class="text-muted mb-0">
                        Materi pembelajaran sensor gas IoT & smart monitoring
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
                                    Gas Sensor Module
                                 </span>

                                 <span class="badge bg-light text-dark">
                                    Smart Safety IoT
                                 </span>

                              </div>

                              <h2 class="fw-bold text-white mb-3">
                                 MQ-5 Gas Sensor
                              </h2>

                              <p class="mb-4"
                                 style="max-width:720px;">

                                 MQ-5 adalah sensor gas yang digunakan untuk mendeteksi
                                 kebocoran gas LPG, methane, hydrogen dan gas mudah terbakar
                                 lainnya pada sistem keamanan dan IoT monitoring.

                              </p>

                              <div class="d-flex flex-wrap gap-5">

                                 <div>

                                    <small>Sensor Type</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       Gas Sensor
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Voltage</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       5V DC
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Output</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       Analog & Digital
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Usage</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       Gas Detection
                                    </h3>

                                 </div>

                              </div>

                           </div>

                           <div class="col-lg-4">

                              <div class="component-preview">

                                 <i class="ti ti-flame"></i>

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

                        <div class="feature-icon soft-danger mx-auto mb-3">

                           <i class="ti ti-alert-triangle"></i>

                        </div>

                        <h5 class="fw-bold">
                           Gas Detection
                        </h5>

                        <small class="text-muted">
                           Deteksi kebocoran gas
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card feature-card p-4 text-center">

                        <div class="feature-icon soft-primary mx-auto mb-3">

                           <i class="ti ti-device-iot"></i>

                        </div>

                        <h5 class="fw-bold">
                           IoT Ready
                        </h5>

                        <small class="text-muted">
                           Monitoring realtime IoT
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card feature-card p-4 text-center">

                        <div class="feature-icon soft-warning mx-auto mb-3">

                           <i class="ti ti-bell-ringing"></i>

                        </div>

                        <h5 class="fw-bold">
                           Alarm System
                        </h5>

                        <small class="text-muted">
                           Trigger alarm otomatis
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card feature-card p-4 text-center">

                        <div class="feature-icon soft-success mx-auto mb-3">

                           <i class="ti ti-cpu"></i>

                        </div>

                        <h5 class="fw-bold">
                           Arduino Compatible
                        </h5>

                        <small class="text-muted">
                           Mudah digunakan Arduino
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
                           📖 Penjelasan MQ-5 Sensor
                        </h5>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           MQ-5 adalah sensor gas berbasis material semikonduktor
                           yang sensitif terhadap gas LPG, methane, hydrogen
                           dan gas mudah terbakar lainnya.

                        </p>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           Sensor MQ-5 sering digunakan pada:
                        </p>

                        <ul class="text-muted"
                           style="line-height:2;">

                           <li>Sistem deteksi kebocoran gas</li>
                           <li>Smart kitchen monitoring</li>
                           <li>IoT safety monitoring</li>
                           <li>Industrial gas detection</li>
                           <li>Smart home automation</li>

                        </ul>

                     </div>

                     <!-- SPESIFIKASI -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           ⚙️ Spesifikasi MQ-5 Sensor
                        </h5>

                        <div class="table-responsive">

                           <table class="table table-borderless table-spec">

                              <tbody>

                                 <tr>

                                    <td width="35%">
                                       <strong>Sensor Type</strong>
                                    </td>

                                    <td>
                                       MQ-5 Gas Sensor
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
                                       <strong>Output Signal</strong>
                                    </td>

                                    <td>
                                       Analog & Digital
                                    </td>

                                 </tr>

                                 <tr>

                                    <td>
                                       <strong>Detection Gas</strong>
                                    </td>

                                    <td>
                                       LPG, Methane, Hydrogen
                                    </td>

                                 </tr>

                                 <tr>

                                    <td>
                                       <strong>Sensitivity</strong>
                                    </td>

                                    <td>
                                       Adjustable Potentiometer
                                    </td>

                                 </tr>

                                 <tr>

                                    <td>
                                       <strong>Interface</strong>
                                    </td>

                                    <td>
                                       Arduino / ESP32
                                    </td>

                                 </tr>

                              </tbody>

                           </table>

                        </div>

                     </div>

                     <!-- LANGKAH -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           🔧 Cara Menggunakan Sensor MQ-5
                        </h5>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              1. Hubungkan Sensor
                           </div>

                           <small class="text-muted">
                              Hubungkan pin VCC ke 5V dan GND ke Ground Arduino atau ESP32.
                           </small>

                        </div>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              2. Hubungkan Output Sensor
                           </div>

                           <small class="text-muted">
                              Hubungkan pin AO ke pin analog Arduino untuk membaca kadar gas
                              atau pin DO ke pin digital untuk deteksi ambang batas.
                           </small>

                        </div>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              3. Lakukan Pemanasan Sensor
                           </div>

                           <small class="text-muted">
                              Nyalakan sensor beberapa menit agar elemen pemanas internal
                              mencapai kondisi kerja yang stabil.
                           </small>

                        </div>

                        <div class="step-card mb-0">

                           <div class="fw-semibold mb-2">
                              4. Upload Program dan Monitoring
                           </div>

                           <small class="text-muted">
                              Upload program Arduino kemudian amati nilai pembacaan gas
                              melalui Serial Monitor.
                           </small>

                        </div>

                     </div>
                     <!-- FUNGSI -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           📍 Penggunaan Sensor MQ-5
                        </h5>

                        <div class="row">

                           <div class="col-md-6 mb-3">

                              <div class="usage-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="usage-icon">

                                       <i class="ti ti-flame"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          LPG Detection
                                       </div>

                                       <small class="text-muted">
                                          Mendeteksi kebocoran gas LPG
                                       </small>

                                    </div>

                                 </div>

                              </div>

                           </div>

                           <div class="col-md-6 mb-3">

                              <div class="usage-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="usage-icon">

                                       <i class="ti ti-alert-triangle"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Gas Leak Alarm
                                       </div>

                                       <small class="text-muted">
                                          Sistem peringatan kebocoran gas
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
                                          Smart Home Safety
                                       </div>

                                       <small class="text-muted">
                                          Monitoring keamanan rumah
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
                                          IoT Gas Monitoring
                                       </div>

                                       <small class="text-muted">
                                          Monitoring kadar gas secara realtime
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
                                 💻 Contoh Program MQ-5
                              </h5>

                              <small class="text-muted">
                                 Membaca sensor gas menggunakan Arduino
                              </small>

                           </div>

                           <button class="btn btn-primary btn-sm">

                              <i class="ti ti-copy"></i>
                              Copy Code

                           </button>

                        </div>

                        <div class="code-box">

                           <div class="code-header">

                              mq5_sensor_example.ino

                           </div>

                           <div class="code-content">
                              int mq5Pin = A0;

                              void setup() {

                              Serial.begin(9600);

                              }

                              void loop() {

                              int gasValue = analogRead(mq5Pin);

                              Serial.print("Gas Value : ");
                              Serial.println(gasValue);

                              if(gasValue > 400){

                              Serial.println("⚠️ Gas Detected!");

                              }

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
                           🔌 Pin MQ-5 Sensor
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
                                 A0
                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    Analog Output
                                 </div>

                                 <small class="text-muted">
                                    Output nilai analog gas
                                 </small>

                              </div>

                           </div>

                        </div>

                        <!-- ITEM -->
                        <div class="pin-card p-3">

                           <div class="d-flex align-items-center gap-3">

                              <div class="pin-icon">
                                 D0
                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    Digital Output
                                 </div>

                                 <small class="text-muted">
                                    Output HIGH / LOW
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
                              Preheating
                           </div>

                           <small class="text-muted">
                              Sensor membutuhkan waktu pemanasan sebelum stabil.
                           </small>

                        </div>

                        <div class="spec-box mb-3">

                           <div class="fw-semibold mb-2">
                              Adjustable Sensitivity
                           </div>

                           <small class="text-muted">
                              Sensitivitas dapat diatur menggunakan potensiometer.
                           </small>

                        </div>

                        <div class="spec-box">

                           <div class="fw-semibold mb-2">
                              Safety Device
                           </div>

                           <small class="text-muted">
                              Cocok digunakan untuk sistem keamanan gas.
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