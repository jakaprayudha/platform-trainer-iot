<!doctype html>
<html lang="en">

<head>
   <?php require 'partial-head.php' ?>

   <style>
      body {
         background: #f8fafc;
      }

      .component-banner {
         background: linear-gradient(135deg, #0f172a, #2563eb, #14b8a6);
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
         background: rgba(255, 255, 255, .88);
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
         color: #22c55e;
         font-size: 80px;
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
         background: linear-gradient(135deg, #2563eb, #7c3aed);
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
         border-left: 4px solid #2563eb;
         padding-left: 18px;
         margin-bottom: 26px;
         position: relative;
      }

      .step-card::before {
         content: "";
         width: 14px;
         height: 14px;
         border-radius: 50%;
         background: #2563eb;
         position: absolute;
         left: -9px;
         top: 6px;
      }

      .table-spec td {
         padding: 16px;
         vertical-align: middle;
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
                        🔧 Uraian Komponen Arduino Nano
                     </h4>

                     <p class="text-muted mb-0">
                        Materi pembelajaran mikrokontroler trainer kit IoT
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
                                    Microcontroller Board
                                 </span>

                                 <span class="badge bg-light text-dark">
                                    IoT Learning Module
                                 </span>

                              </div>

                              <h2 class="fw-bold text-white mb-3">
                                 Arduino Nano ATmega328P
                              </h2>

                              <p class="mb-4"
                                 style="max-width:720px;">

                                 Arduino Nano adalah board mikrokontroler kecil
                                 berbasis ATmega328P yang digunakan untuk project
                                 embedded system, IoT, robotics dan automation.

                              </p>

                              <div class="d-flex flex-wrap gap-5">

                                 <div>

                                    <small>Microcontroller</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       ATmega328P
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Clock Speed</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       16 MHz
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Digital I/O</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       14 Pin
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Analog Input</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       8 Pin
                                    </h3>

                                 </div>

                              </div>

                           </div>

                           <div class="col-lg-4">

                              <div class="component-preview">

                                 <i class="ti ti-cpu-2"></i>

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

                           <i class="ti ti-microchip"></i>

                        </div>

                        <h5 class="fw-bold">
                           Compact Size
                        </h5>

                        <small class="text-muted">
                           Ukuran kecil dan praktis
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card feature-card p-4 text-center">

                        <div class="feature-icon soft-success mx-auto mb-3">

                           <i class="ti ti-bolt"></i>

                        </div>

                        <h5 class="fw-bold">
                           USB Powered
                        </h5>

                        <small class="text-muted">
                           Supply langsung dari USB
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card feature-card p-4 text-center">

                        <div class="feature-icon soft-warning mx-auto mb-3">

                           <i class="ti ti-device-iot"></i>

                        </div>

                        <h5 class="fw-bold">
                           IoT Ready
                        </h5>

                        <small class="text-muted">
                           Cocok untuk project IoT
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card feature-card p-4 text-center">

                        <div class="feature-icon soft-danger mx-auto mb-3">

                           <i class="ti ti-code"></i>

                        </div>

                        <h5 class="fw-bold">
                           Easy Programming
                        </h5>

                        <small class="text-muted">
                           Mudah diprogram Arduino IDE
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
                           📖 Penjelasan Arduino Nano
                        </h5>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           Arduino Nano adalah board mikrokontroler berbasis
                           ATmega328P yang memiliki ukuran kecil namun tetap
                           powerful untuk berbagai project elektronika dan IoT.

                        </p>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           Arduino Nano sering digunakan pada:
                        </p>

                        <ul class="text-muted"
                           style="line-height:2;">

                           <li>Project Internet of Things (IoT)</li>
                           <li>Robotika dan automation</li>
                           <li>Smart home system</li>
                           <li>Monitoring sensor</li>
                           <li>Trainer kit pembelajaran</li>

                        </ul>

                     </div>

                     <!-- SPESIFIKASI -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           ⚙️ Spesifikasi Arduino Nano
                        </h5>

                        <div class="table-responsive">

                           <table class="table table-borderless table-spec">

                              <tbody>

                                 <tr>

                                    <td width="35%">
                                       <strong>Microcontroller</strong>
                                    </td>

                                    <td>
                                       ATmega328P
                                    </td>

                                 </tr>

                                 <tr>

                                    <td>
                                       <strong>Operating Voltage</strong>
                                    </td>

                                    <td>
                                       5V
                                    </td>

                                 </tr>

                                 <tr>

                                    <td>
                                       <strong>Input Voltage</strong>
                                    </td>

                                    <td>
                                       7V - 12V
                                    </td>

                                 </tr>

                                 <tr>

                                    <td>
                                       <strong>Digital I/O Pins</strong>
                                    </td>

                                    <td>
                                       14 Pins
                                    </td>

                                 </tr>

                                 <tr>

                                    <td>
                                       <strong>Analog Input Pins</strong>
                                    </td>

                                    <td>
                                       8 Pins
                                    </td>

                                 </tr>

                                 <tr>

                                    <td>
                                       <strong>Flash Memory</strong>
                                    </td>

                                    <td>
                                       32 KB
                                    </td>

                                 </tr>

                                 <tr>

                                    <td>
                                       <strong>Clock Speed</strong>
                                    </td>

                                    <td>
                                       16 MHz
                                    </td>

                                 </tr>

                              </tbody>

                           </table>

                        </div>

                     </div>

                     <!-- LANGKAH -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           🔧 Cara Menggunakan Arduino Nano
                        </h5>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              1. Install Arduino IDE
                           </div>

                           <small class="text-muted">
                              Download dan install Arduino IDE pada komputer.
                           </small>

                        </div>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              2. Hubungkan USB
                           </div>

                           <small class="text-muted">
                              Sambungkan Arduino Nano menggunakan kabel USB Mini.
                           </small>

                        </div>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              3. Pilih Board
                           </div>

                           <small class="text-muted">
                              Pilih board Arduino Nano pada menu Arduino IDE.
                           </small>

                        </div>

                        <div class="step-card mb-0">

                           <div class="fw-semibold mb-2">
                              4. Upload Program
                           </div>

                           <small class="text-muted">
                              Upload sketch program ke board Arduino Nano.
                           </small>

                        </div>

                     </div>

                     <!-- CODE -->
                     <div class="glass-card p-4 shadow-sm">

                        <div class="d-flex justify-content-between align-items-center mb-4">

                           <div>

                              <h5 class="fw-bold mb-1">
                                 💻 Contoh Program Blink LED
                              </h5>

                              <small class="text-muted">
                                 Program dasar Arduino Nano
                              </small>

                           </div>

                           <button class="btn btn-primary btn-sm">

                              <i class="ti ti-copy"></i>
                              Copy Code

                           </button>

                        </div>

                        <div class="code-box">

                           <div class="code-header">

                              blink_led.ino

                           </div>

                           <div class="code-content">
                              void setup() {

                              pinMode(13, OUTPUT);

                              }

                              void loop() {

                              digitalWrite(13, HIGH);
                              delay(1000);

                              digitalWrite(13, LOW);
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
                           🔌 Pin Penting Arduino Nano
                        </h5>

                        <!-- ITEM -->
                        <div class="pin-card p-3 mb-3">

                           <div class="d-flex align-items-center gap-3">

                              <div class="pin-icon">
                                 5V
                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    5V Pin
                                 </div>

                                 <small class="text-muted">
                                    Tegangan output 5 Volt
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
                                    Ground Pin
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
                                    Analog Input
                                 </div>

                                 <small class="text-muted">
                                    Membaca sensor analog
                                 </small>

                              </div>

                           </div>

                        </div>

                        <!-- ITEM -->
                        <div class="pin-card p-3">

                           <div class="d-flex align-items-center gap-3">

                              <div class="pin-icon">
                                 D13
                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    Digital Pin
                                 </div>

                                 <small class="text-muted">
                                    Kontrol LED & device digital
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
                              USB Mini
                           </div>

                           <small class="text-muted">
                              Arduino Nano menggunakan konektor USB Mini.
                           </small>

                        </div>

                        <div class="spec-box mb-3">

                           <div class="fw-semibold mb-2">
                              Driver CH340
                           </div>

                           <small class="text-muted">
                              Clone Arduino Nano membutuhkan driver CH340.
                           </small>

                        </div>

                        <div class="spec-box">

                           <div class="fw-semibold mb-2">
                              Compact Design
                           </div>

                           <small class="text-muted">
                              Cocok untuk project kecil dan portable.
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