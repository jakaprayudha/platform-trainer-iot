<!doctype html>
<html lang="en">

<head>
   <?php require 'partial-head.php' ?>

   <style>
      body {
         background: #f8fafc;
      }

      .component-banner {
         background: linear-gradient(135deg, #0f172a, #7c3aed, #2563eb);
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
         background: rgba(255, 255, 255, .92);
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
      }

      .matrix-grid {
         display: grid;
         grid-template-columns: repeat(8, 22px);
         gap: 8px;
      }

      .matrix-dot {
         width: 22px;
         height: 22px;
         border-radius: 50%;
         background: rgba(255, 255, 255, .1);
         box-shadow: inset 0 0 8px rgba(0, 0, 0, .5);
      }

      .matrix-dot.active {
         background: #60a5fa;
         box-shadow: 0 0 18px #60a5fa;
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

      .soft-purple {
         background: rgba(124, 58, 237, .1);
         color: #7c3aed;
      }

      .pin-card {
         border-radius: 20px;
         border: 1px solid #eef2ff;
         transition: .3s;
      }

      .pin-card:hover {
         transform: translateY(-3px);
         border-color: #7c3aed;
      }

      .pin-icon {
         width: 56px;
         height: 56px;
         border-radius: 18px;
         background: linear-gradient(135deg, #7c3aed, #2563eb);
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

      .table-spec td {
         padding: 16px;
         vertical-align: middle;
      }

      .usage-card {
         border-radius: 18px;
         border: 1px solid #eef2ff;
         padding: 18px;
         transition: .3s;
      }

      .usage-card:hover {
         transform: translateY(-3px);
         border-color: #7c3aed;
      }

      .usage-icon {
         width: 50px;
         height: 50px;
         border-radius: 16px;
         background: linear-gradient(135deg, #7c3aed, #2563eb);
         color: #fff;
         display: flex;
         align-items: center;
         justify-content: center;
         font-size: 22px;
      }

      .step-card {
         border-left: 4px solid #7c3aed;
         padding-left: 18px;
         margin-bottom: 26px;
         position: relative;
      }

      .step-card::before {
         content: "";
         width: 14px;
         height: 14px;
         border-radius: 50%;
         background: #7c3aed;
         position: absolute;
         left: -9px;
         top: 6px;
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
                        💡 Uraian Komponen LED Matrix 8x8
                     </h4>

                     <p class="text-muted mb-0">
                        Materi pembelajaran display LED IoT & embedded system
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
                                    LED Display Module
                                 </span>

                                 <span class="badge bg-light text-dark">
                                    Smart Visual Display
                                 </span>

                              </div>

                              <h2 class="fw-bold text-white mb-3">
                                 LED Matrix 8x8 Module
                              </h2>

                              <p class="mb-4"
                                 style="max-width:720px;">

                                 LED Matrix 8x8 adalah modul display LED
                                 yang terdiri dari 64 LED kecil dalam bentuk grid
                                 untuk menampilkan teks, animasi dan simbol pada project IoT.

                              </p>

                              <div class="d-flex flex-wrap gap-5">

                                 <div>

                                    <small>Display Size</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       8x8 LED
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Total LED</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       64 LED
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Control IC</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       MAX7219
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Usage</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       Display Output
                                    </h3>

                                 </div>

                              </div>

                           </div>

                           <div class="col-lg-4">

                              <div class="component-preview">

                                 <div class="matrix-grid">

                                    <div class="matrix-dot active"></div>
                                    <div class="matrix-dot active"></div>
                                    <div class="matrix-dot active"></div>
                                    <div class="matrix-dot active"></div>
                                    <div class="matrix-dot active"></div>
                                    <div class="matrix-dot active"></div>
                                    <div class="matrix-dot active"></div>
                                    <div class="matrix-dot active"></div>

                                    <div class="matrix-dot active"></div>
                                    <div class="matrix-dot"></div>
                                    <div class="matrix-dot"></div>
                                    <div class="matrix-dot"></div>
                                    <div class="matrix-dot"></div>
                                    <div class="matrix-dot"></div>
                                    <div class="matrix-dot"></div>
                                    <div class="matrix-dot active"></div>

                                    <div class="matrix-dot active"></div>
                                    <div class="matrix-dot"></div>
                                    <div class="matrix-dot active"></div>
                                    <div class="matrix-dot active"></div>
                                    <div class="matrix-dot active"></div>
                                    <div class="matrix-dot active"></div>
                                    <div class="matrix-dot"></div>
                                    <div class="matrix-dot active"></div>

                                    <div class="matrix-dot active"></div>
                                    <div class="matrix-dot"></div>
                                    <div class="matrix-dot active"></div>
                                    <div class="matrix-dot"></div>
                                    <div class="matrix-dot"></div>
                                    <div class="matrix-dot active"></div>
                                    <div class="matrix-dot"></div>
                                    <div class="matrix-dot active"></div>

                                    <div class="matrix-dot active"></div>
                                    <div class="matrix-dot"></div>
                                    <div class="matrix-dot active"></div>
                                    <div class="matrix-dot"></div>
                                    <div class="matrix-dot"></div>
                                    <div class="matrix-dot active"></div>
                                    <div class="matrix-dot"></div>
                                    <div class="matrix-dot active"></div>

                                    <div class="matrix-dot active"></div>
                                    <div class="matrix-dot"></div>
                                    <div class="matrix-dot active"></div>
                                    <div class="matrix-dot active"></div>
                                    <div class="matrix-dot active"></div>
                                    <div class="matrix-dot active"></div>
                                    <div class="matrix-dot"></div>
                                    <div class="matrix-dot active"></div>

                                    <div class="matrix-dot active"></div>
                                    <div class="matrix-dot"></div>
                                    <div class="matrix-dot"></div>
                                    <div class="matrix-dot"></div>
                                    <div class="matrix-dot"></div>
                                    <div class="matrix-dot"></div>
                                    <div class="matrix-dot"></div>
                                    <div class="matrix-dot active"></div>

                                    <div class="matrix-dot active"></div>
                                    <div class="matrix-dot active"></div>
                                    <div class="matrix-dot active"></div>
                                    <div class="matrix-dot active"></div>
                                    <div class="matrix-dot active"></div>
                                    <div class="matrix-dot active"></div>
                                    <div class="matrix-dot active"></div>
                                    <div class="matrix-dot active"></div>

                                 </div>

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

                           <i class="ti ti-typography"></i>

                        </div>

                        <h5 class="fw-bold">
                           Text Display
                        </h5>

                        <small class="text-muted">
                           Menampilkan teks berjalan
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card feature-card p-4 text-center">

                        <div class="feature-icon soft-success mx-auto mb-3">

                           <i class="ti ti-player-play"></i>

                        </div>

                        <h5 class="fw-bold">
                           Animation
                        </h5>

                        <small class="text-muted">
                           Menampilkan animasi LED
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card feature-card p-4 text-center">

                        <div class="feature-icon soft-warning mx-auto mb-3">

                           <i class="ti ti-dashboard"></i>

                        </div>

                        <h5 class="fw-bold">
                           IoT Display
                        </h5>

                        <small class="text-muted">
                           Display informasi IoT
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card feature-card p-4 text-center">

                        <div class="feature-icon soft-purple mx-auto mb-3">

                           <i class="ti ti-bulb"></i>

                        </div>

                        <h5 class="fw-bold">
                           LED Visual
                        </h5>

                        <small class="text-muted">
                           Output visual interaktif
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
                           📖 Penjelasan LED Matrix 8x8
                        </h5>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           LED Matrix 8x8 adalah display elektronik yang terdiri
                           dari 64 LED tersusun dalam 8 baris dan 8 kolom.
                           Modul ini digunakan untuk menampilkan karakter,
                           simbol dan animasi digital.

                        </p>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           LED Matrix sering digunakan pada:
                        </p>

                        <ul class="text-muted"
                           style="line-height:2;">

                           <li>Running text display</li>
                           <li>Smart information board</li>
                           <li>Display notifikasi IoT</li>
                           <li>Animasi LED robotika</li>
                           <li>Visual monitoring system</li>

                        </ul>

                     </div>

                     <!-- SPESIFIKASI -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           ⚙️ Spesifikasi LED Matrix
                        </h5>

                        <div class="table-responsive">

                           <table class="table table-borderless table-spec">

                              <tbody>

                                 <tr>

                                    <td width="35%">
                                       <strong>Module Type</strong>
                                    </td>

                                    <td>
                                       LED Matrix 8x8
                                    </td>

                                 </tr>

                                 <tr>

                                    <td>
                                       <strong>Total LED</strong>
                                    </td>

                                    <td>
                                       64 LED
                                    </td>

                                 </tr>

                                 <tr>

                                    <td>
                                       <strong>Driver IC</strong>
                                    </td>

                                    <td>
                                       MAX7219
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
                                       <strong>Communication</strong>
                                    </td>

                                    <td>
                                       SPI Serial
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
                           🔧 Cara Menggunakan LED Matrix 8x8
                        </h5>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              1. Hubungkan Modul LED Matrix
                           </div>

                           <small class="text-muted">
                              Hubungkan pin VCC ke 5V dan GND ke Ground Arduino
                              atau ESP32.
                           </small>

                        </div>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              2. Hubungkan Pin Data
                           </div>

                           <small class="text-muted">
                              Hubungkan pin DIN, CS dan CLK ke pin digital
                              Arduino sesuai konfigurasi program.
                           </small>

                        </div>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              3. Upload Program
                           </div>

                           <small class="text-muted">
                              Upload program menggunakan library MAX7219
                              untuk mengontrol tampilan LED Matrix.
                           </small>

                        </div>

                        <div class="step-card mb-0">

                           <div class="fw-semibold mb-2">
                              4. Tampilkan Karakter atau Animasi
                           </div>

                           <small class="text-muted">
                              Jalankan program dan amati tampilan teks,
                              angka maupun animasi pada LED Matrix.
                           </small>

                        </div>

                     </div>

                     <!-- PENGGUNAAN -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           📍 Penggunaan LED Matrix
                        </h5>

                        <div class="row">

                           <div class="col-md-6 mb-3">

                              <div class="usage-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="usage-icon">

                                       <i class="ti ti-text-size"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Running Text
                                       </div>

                                       <small class="text-muted">
                                          Menampilkan teks berjalan
                                       </small>

                                    </div>

                                 </div>

                              </div>

                           </div>

                           <div class="col-md-6 mb-3">

                              <div class="usage-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="usage-icon">

                                       <i class="ti ti-bell"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Notification Display
                                       </div>

                                       <small class="text-muted">
                                          Tampilan notifikasi sistem
                                       </small>

                                    </div>

                                 </div>

                              </div>

                           </div>

                           <div class="col-md-6 mb-3">

                              <div class="usage-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="usage-icon">

                                       <i class="ti ti-player-play"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          LED Animation
                                       </div>

                                       <small class="text-muted">
                                          Animasi dan efek LED
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
                                          IoT Dashboard
                                       </div>

                                       <small class="text-muted">
                                          Display data IoT realtime
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
                                 💻 Contoh Program LED Matrix
                              </h5>

                              <small class="text-muted">
                                 Menampilkan karakter pada LED Matrix
                              </small>

                           </div>

                           <button class="btn btn-primary btn-sm">

                              <i class="ti ti-copy"></i>
                              Copy Code

                           </button>

                        </div>

                        <div class="code-box">

                           <div class="code-header">

                              led_matrix_example.ino

                           </div>

                           <div class="code-content">
                              #include "LedControl.h"

                              LedControl lc = LedControl(12,11,10,1);

                              byte smile[8] = {

                              B00111100,
                              B01000010,
                              B10100101,
                              B10000001,
                              B10100101,
                              B10011001,
                              B01000010,
                              B00111100

                              };

                              void setup() {

                              lc.shutdown(0,false);
                              lc.setIntensity(0,8);
                              lc.clearDisplay(0);

                              }

                              void loop() {

                              for(int i=0; i<8; i++){

                                 lc.setRow(0,i,smile[i]);

                                 }

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
                              🔌 Pin LED Matrix
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
                                    DIN
                                 </div>

                                 <div>

                                    <div class="fw-semibold">
                                       Data Input
                                    </div>

                                    <small class="text-muted">
                                       Input data serial
                                    </small>

                                 </div>

                              </div>

                           </div>

                           <!-- ITEM -->
                           <div class="pin-card p-3">

                              <div class="d-flex align-items-center gap-3">

                                 <div class="pin-icon">
                                    CLK
                                 </div>

                                 <div>

                                    <div class="fw-semibold">
                                       Clock Signal
                                    </div>

                                    <small class="text-muted">
                                       Sinkronisasi data
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
                                 MAX7219 Driver
                              </div>

                              <small class="text-muted">
                                 Modul menggunakan IC MAX7219 untuk kontrol LED.
                              </small>

                           </div>

                           <div class="spec-box mb-3">

                              <div class="fw-semibold mb-2">
                                 Serial Communication
                              </div>

                              <small class="text-muted">
                                 Menggunakan komunikasi serial SPI.
                              </small>

                           </div>

                           <div class="spec-box">

                              <div class="fw-semibold mb-2">
                                 Cascade Support
                              </div>

                              <small class="text-muted">
                                 Beberapa modul dapat digabung menjadi display panjang.
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