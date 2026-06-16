<!doctype html>
<html lang="en">

<head>
   <?php require 'partial-head.php' ?>

   <style>
      body {
         background: #f8fafc;
      }

      .component-banner {
         background: linear-gradient(135deg, #0f172a, #1d4ed8, #0f766e);
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
         right: -150px;
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

      .component-image {
         width: 100%;
         border-radius: 24px;
         object-fit: cover;
         height: 320px;
         background: linear-gradient(135deg, #0f172a, #334155);
         display: flex;
         align-items: center;
         justify-content: center;
         color: #22c55e;
         font-size: 70px;
      }

      .info-badge {
         padding: 7px 14px;
         border-radius: 30px;
         font-size: 12px;
         font-weight: 600;
      }

      .badge-primary {
         background: rgba(37, 99, 235, .1);
         color: #2563eb;
      }

      .badge-success {
         background: rgba(16, 185, 129, .1);
         color: #10b981;
      }

      .badge-warning {
         background: rgba(245, 158, 11, .1);
         color: #f59e0b;
      }

      .spec-item {
         padding: 18px;
         border-radius: 18px;
         background: #f8fafc;
         border: 1px solid #eef2ff;
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

      .pin-number {
         width: 54px;
         height: 54px;
         border-radius: 16px;
         background: linear-gradient(135deg, #2563eb, #7c3aed);
         color: #fff;
         display: flex;
         align-items: center;
         justify-content: center;
         font-weight: bold;
         font-size: 20px;
      }

      .code-box {
         background: #020617;
         border-radius: 22px;
         overflow: hidden;
      }

      .code-header {
         background: rgba(255, 255, 255, .05);
         padding: 14px 20px;
         border-bottom: 1px solid rgba(255, 255, 255, .06);
      }

      .code-content {
         padding: 24px;
         color: #e2e8f0;
         font-family: monospace;
         line-height: 1.9;
         overflow-x: auto;
      }


      .step-card {
         border-left: 4px solid #06b6d4;
         padding-left: 18px;
         margin-bottom: 26px;
         position: relative;
      }

      .step-card::before {
         content: "";
         width: 14px;
         height: 14px;
         border-radius: 50%;
         background: #06b6d4;
         position: absolute;
         left: -9px;
         top: 6px;
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

      .feature-card {
         border-radius: 20px;
         transition: .3s;
         border: 1px solid #eef2ff;
      }

      .feature-card:hover {
         transform: translateY(-4px);
      }

      .feature-icon {
         width: 62px;
         height: 62px;
         border-radius: 18px;
         display: flex;
         align-items: center;
         justify-content: center;
         font-size: 26px;
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
                        📟 Uraian Komponen LCD 16x2
                     </h4>

                     <p class="text-muted mb-0">
                        Materi pembelajaran komponen trainer kit IoT
                     </p>

                  </div>

                  <div class="d-flex gap-2">

                     <button class="btn btn-light">

                        <i class="ti ti-download"></i>
                        Download PDF

                     </button>

                     <button class="btn btn-primary">

                        <i class="ti ti-book"></i>
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
                                    Electronic Component
                                 </span>

                                 <span class="badge bg-light text-dark">
                                    IoT Learning Module
                                 </span>

                              </div>

                              <h2 class="fw-bold text-white mb-3">
                                 LCD 16x2 Display Module
                              </h2>

                              <p class="mb-4"
                                 style="max-width:720px;">

                                 LCD 16x2 adalah modul display karakter yang digunakan
                                 untuk menampilkan teks, angka dan informasi sensor
                                 pada project Arduino, ESP32 dan sistem IoT.

                              </p>

                              <div class="d-flex flex-wrap gap-5">

                                 <div>

                                    <small>Type Display</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       16x2
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Voltage</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       5V
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Character</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       32
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Interface</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       Parallel / I2C
                                    </h3>

                                 </div>

                              </div>

                           </div>

                           <div class="col-lg-4">

                              <div class="component-image">

                                 <i class="ti ti-video"></i>

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

                           <i class="ti ti-writing"></i>

                        </div>

                        <h5 class="fw-bold">
                           Text Display
                        </h5>

                        <small class="text-muted">
                           Menampilkan karakter dan angka
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card feature-card p-4 text-center">

                        <div class="feature-icon soft-success mx-auto mb-3">

                           <i class="ti ti-cpu"></i>

                        </div>

                        <h5 class="fw-bold">
                           Arduino Ready
                        </h5>

                        <small class="text-muted">
                           Mudah digunakan dengan Arduino
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card feature-card p-4 text-center">

                        <div class="feature-icon soft-warning mx-auto mb-3">

                           <i class="ti ti-bolt"></i>

                        </div>

                        <h5 class="fw-bold">
                           Low Power
                        </h5>

                        <small class="text-muted">
                           Konsumsi daya rendah
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card feature-card p-4 text-center">

                        <div class="feature-icon soft-danger mx-auto mb-3">

                           <i class="ti ti-adjustments"></i>

                        </div>

                        <h5 class="fw-bold">
                           Adjustable Contrast
                        </h5>

                        <small class="text-muted">
                           Kontras layar dapat diatur
                        </small>

                     </div>

                  </div>

               </div>

               <div class="row">

                  <!-- LEFT -->
                  <div class="col-lg-8">

                     <!-- PENJELASAN -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <div class="d-flex justify-content-between align-items-center mb-4">

                           <div>

                              <h5 class="fw-bold mb-1">
                                 📖 Penjelasan Komponen
                              </h5>

                              <small class="text-muted">
                                 Deskripsi dan fungsi LCD 16x2
                              </small>

                           </div>

                        </div>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           LCD 16x2 merupakan modul display berbasis karakter
                           yang mampu menampilkan 16 karakter dalam 2 baris.
                           Modul ini sangat populer dalam project embedded system,
                           mikrokontroler, Arduino dan IoT karena mudah digunakan
                           dan memiliki konsumsi daya yang rendah.

                        </p>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           LCD ini biasanya digunakan untuk menampilkan:
                        </p>

                        <ul class="text-muted"
                           style="line-height:2;">

                           <li>Nilai sensor suhu dan kelembaban</li>
                           <li>Status koneksi IoT</li>
                           <li>Menu interaktif</li>
                           <li>Informasi realtime sistem</li>
                           <li>Data monitoring perangkat</li>

                        </ul>

                     </div>

                     <!-- SPESIFIKASI -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           ⚙️ Spesifikasi LCD 16x2
                        </h5>

                        <div class="table-responsive">

                           <table class="table table-borderless table-spec">

                              <tbody>

                                 <tr>

                                    <td width="35%">
                                       <strong>Type Display</strong>
                                    </td>

                                    <td>
                                       LCD Character 16x2
                                    </td>

                                 </tr>

                                 <tr>

                                    <td>
                                       <strong>Tegangan Operasi</strong>
                                    </td>

                                    <td>
                                       5 Volt DC
                                    </td>

                                 </tr>

                                 <tr>

                                    <td>
                                       <strong>Jumlah Karakter</strong>
                                    </td>

                                    <td>
                                       16 Karakter x 2 Baris
                                    </td>

                                 </tr>

                                 <tr>

                                    <td>
                                       <strong>Backlight</strong>
                                    </td>

                                    <td>
                                       LED Hijau / Biru
                                    </td>

                                 </tr>

                                 <tr>

                                    <td>
                                       <strong>Interface</strong>
                                    </td>

                                    <td>
                                       Parallel & I2C
                                    </td>

                                 </tr>

                                 <tr>

                                    <td>
                                       <strong>Controller</strong>
                                    </td>

                                    <td>
                                       HD44780 Compatible
                                    </td>

                                 </tr>

                              </tbody>

                           </table>

                        </div>

                     </div>

                     <!-- LANGKAH -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           🔧 Cara Menggunakan LCD 16x2 I2C
                        </h5>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              1. Hubungkan LCD
                           </div>

                           <small class="text-muted">
                              Hubungkan pin VCC ke 5V, GND ke Ground, SDA ke SDA dan
                              SCL ke SCL pada Arduino atau ESP32.
                           </small>

                        </div>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              2. Install Library LCD
                           </div>

                           <small class="text-muted">
                              Install library LiquidCrystal_I2C melalui Library Manager
                              pada Arduino IDE.
                           </small>

                        </div>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              3. Upload Program
                           </div>

                           <small class="text-muted">
                              Upload program untuk menginisialisasi LCD dan
                              menampilkan data pada layar.
                           </small>

                        </div>

                        <div class="step-card mb-0">

                           <div class="fw-semibold mb-2">
                              4. Tampilkan Informasi
                           </div>

                           <small class="text-muted">
                              Gunakan fungsi lcd.print() untuk menampilkan teks,
                              angka maupun data sensor secara realtime.
                           </small>

                        </div>

                     </div>

                     <!-- FUNGSI -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           📍 Penggunaan LCD 16x2 I2C
                        </h5>

                        <div class="row">

                           <div class="col-md-6 mb-3">

                              <div class="usage-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="usage-icon">

                                       <i class="ti ti-device-desktop"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Data Display
                                       </div>

                                       <small class="text-muted">
                                          Menampilkan data sensor realtime
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
                                          Smart Home
                                       </div>

                                       <small class="text-muted">
                                          Monitoring perangkat rumah pintar
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
                                          Menampilkan informasi sistem IoT
                                       </small>

                                    </div>

                                 </div>

                              </div>

                           </div>

                           <div class="col-md-6 mb-3">

                              <div class="usage-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="usage-icon">

                                       <i class="ti ti-report-analytics"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Monitoring System
                                       </div>

                                       <small class="text-muted">
                                          Menampilkan status dan hasil pembacaan
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
                                 💻 Contoh Program Arduino
                              </h5>

                              <small class="text-muted">
                                 Menampilkan teks pada LCD 16x2
                              </small>

                           </div>

                           <button class="btn btn-primary btn-sm">

                              <i class="ti ti-copy"></i>
                              Copy Code

                           </button>

                        </div>

                        <div class="code-box">

                           <div class="code-header text-white">

                              lcd16x2_example.ino

                           </div>

                           <div class="code-content">
                              #include &lt;LiquidCrystal.h&gt;

                              LiquidCrystal lcd(12, 11, 5, 4, 3, 2);

                              void setup() {

                              lcd.begin(16, 2);

                              lcd.print("Hello IoT");

                              }

                              void loop() {

                              lcd.setCursor(0,1);

                              lcd.print("LCD 16x2 Ready");

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
                           🔌 Pin LCD 16x2
                        </h5>

                        <!-- ITEM -->
                        <div class="pin-card p-3 mb-3">

                           <div class="d-flex align-items-center gap-3">

                              <div class="pin-number">
                                 1
                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    VSS
                                 </div>

                                 <small class="text-muted">
                                    Ground
                                 </small>

                              </div>

                           </div>

                        </div>

                        <!-- ITEM -->
                        <div class="pin-card p-3 mb-3">

                           <div class="d-flex align-items-center gap-3">

                              <div class="pin-number">
                                 2
                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    VCC
                                 </div>

                                 <small class="text-muted">
                                    +5V Power
                                 </small>

                              </div>

                           </div>

                        </div>

                        <!-- ITEM -->
                        <div class="pin-card p-3 mb-3">

                           <div class="d-flex align-items-center gap-3">

                              <div class="pin-number">
                                 3
                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    V0
                                 </div>

                                 <small class="text-muted">
                                    Contrast Control
                                 </small>

                              </div>

                           </div>

                        </div>

                        <!-- ITEM -->
                        <div class="pin-card p-3">

                           <div class="d-flex align-items-center gap-3">

                              <div class="pin-number">
                                 4
                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    RS
                                 </div>

                                 <small class="text-muted">
                                    Register Select
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

                        <div class="spec-item mb-3">

                           <div class="fw-semibold mb-2">
                              Tegangan
                           </div>

                           <small class="text-muted">
                              Gunakan tegangan 5V untuk hasil optimal.
                           </small>

                        </div>

                        <div class="spec-item mb-3">

                           <div class="fw-semibold mb-2">
                              Potensiometer
                           </div>

                           <small class="text-muted">
                              Digunakan untuk mengatur kontras layar LCD.
                           </small>

                        </div>

                        <div class="spec-item">

                           <div class="fw-semibold mb-2">
                              I2C Module
                           </div>

                           <small class="text-muted">
                              Mempermudah wiring hanya menggunakan SDA dan SCL.
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

                              <i class="ti ti-download"></i>
                              Download Module

                           </button>

                           <button class="btn btn-warning text-white">

                              <i class="ti ti-code"></i>
                              Open Sandbox

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