<!doctype html>
<html lang="en">

<head>
   <?php require 'partial-head.php' ?>

   <style>
      body {
         background: #f8fafc;
      }


      .component-banner {
         background: linear-gradient(135deg,
               #7c2d12,
               #ea580c,
               #f59e0b);
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
                        🔔 Uraian Komponen Buzzer
                     </h4>

                     <p class="text-muted mb-0">
                        Materi pembelajaran buzzer sebagai indikator suara, alarm dan sistem notifikasi
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
                                    Output Module
                                 </span>

                                 <span class="badge bg-light text-dark">
                                    Buzzer Module
                                 </span>

                              </div>

                              <h2 class="fw-bold text-white mb-3">
                                 Active Buzzer Module
                              </h2>

                              <p class="mb-4"
                                 style="max-width:720px;">

                                 Buzzer merupakan komponen output elektronik yang digunakan
                                 untuk menghasilkan suara atau alarm sebagai indikator suatu
                                 kondisi. Buzzer banyak digunakan pada sistem keamanan,
                                 notifikasi, alarm, IoT dan berbagai proyek mikrokontroler.

                              </p>

                              <div class="d-flex flex-wrap gap-5">

                                 <div>

                                    <small>Module Type</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       Audio Output
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Voltage</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       3.3V - 5V
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Output</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       Sound Alert
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Usage</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       Alarm System
                                    </h3>

                                 </div>

                              </div>

                           </div>

                           <div class="col-lg-4">

                              <div class="component-preview">

                                 <i class="ti ti-volume"
                                    style="font-size:120px;"></i>

                              </div>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>

               <!-- FEATURE -->
               <!-- FEATURE -->
               <div class="row mb-4">

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card feature-card p-4 text-center">

                        <div class="feature-icon soft-primary mx-auto mb-3">

                           <i class="ti ti-volume"></i>

                        </div>

                        <h5 class="fw-bold">
                           Sound Alert
                        </h5>

                        <small class="text-muted">
                           Menghasilkan suara peringatan
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card feature-card p-4 text-center">

                        <div class="feature-icon soft-success mx-auto mb-3">

                           <i class="ti ti-bell-ringing"></i>

                        </div>

                        <h5 class="fw-bold">
                           Alarm System
                        </h5>

                        <small class="text-muted">
                           Digunakan pada sistem alarm
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card feature-card p-4 text-center">

                        <div class="feature-icon soft-warning mx-auto mb-3">

                           <i class="ti ti-dashboard"></i>

                        </div>

                        <h5 class="fw-bold">
                           IoT Notification
                        </h5>

                        <small class="text-muted">
                           Notifikasi suara pada sistem IoT
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card feature-card p-4 text-center">

                        <div class="feature-icon soft-danger mx-auto mb-3">

                           <i class="ti ti-bolt"></i>

                        </div>

                        <h5 class="fw-bold">
                           Fast Response
                        </h5>

                        <small class="text-muted">
                           Respon cepat saat diaktifkan
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
                           📖 Penjelasan Buzzer
                        </h5>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           Buzzer merupakan komponen elektronika yang berfungsi
                           sebagai perangkat output suara. Ketika buzzer diberikan
                           sinyal listrik, komponen ini akan menghasilkan bunyi
                           yang dapat digunakan sebagai indikator, notifikasi
                           maupun alarm.

                        </p>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           Buzzer banyak digunakan pada berbagai sistem berbasis
                           mikrokontroler seperti Arduino dan ESP32 untuk memberikan
                           peringatan suara ketika suatu kondisi tertentu terjadi,
                           misalnya deteksi gas, kebakaran, gerakan, atau kesalahan
                           pada sistem.

                        </p>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           Komponen ini memiliki konsumsi daya yang rendah,
                           respon cepat dan mudah diintegrasikan dengan berbagai
                           sensor sehingga sangat cocok digunakan pada proyek IoT,
                           robotika, sistem keamanan dan otomasi.

                        </p>

                     </div>

                     <!-- SPESIFIKASI -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           ⚙️ Spesifikasi Buzzer Module
                        </h5>

                        <div class="table-responsive">

                           <table class="table table-spec">

                              <tbody>

                                 <tr>
                                    <td width="35%">
                                       <strong>Module Type</strong>
                                    </td>
                                    <td>
                                       Active Buzzer Module
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Operating Voltage</strong>
                                    </td>
                                    <td>
                                       3.3V - 5V DC
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Output Type</strong>
                                    </td>
                                    <td>
                                       Sound / Audio Alert
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Control Signal</strong>
                                    </td>
                                    <td>
                                       Digital Signal
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Response Time</strong>
                                    </td>
                                    <td>
                                       Fast
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Sound Frequency</strong>
                                    </td>
                                    <td>
                                       Approximately 2KHz - 4KHz
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Current Consumption</strong>
                                    </td>
                                    <td>
                                       Low Power
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Compatible Board</strong>
                                    </td>
                                    <td>
                                       Arduino, ESP32, ESP8266
                                    </td>
                                 </tr>

                              </tbody>

                           </table>

                        </div>

                     </div>
                     <!-- PENGGUNAAN -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           📍 Penggunaan Buzzer
                        </h5>

                        <div class="row">

                           <div class="col-md-6 mb-3">

                              <div class="usage-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="usage-icon">

                                       <i class="ti ti-bell-ringing"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Alarm System
                                       </div>

                                       <small class="text-muted">
                                          Sebagai alarm peringatan otomatis
                                       </small>

                                    </div>

                                 </div>

                              </div>

                           </div>

                           <div class="col-md-6 mb-3">

                              <div class="usage-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="usage-icon">

                                       <i class="ti ti-device-iot"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          IoT Notification
                                       </div>

                                       <small class="text-muted">
                                          Notifikasi suara pada sistem IoT
                                       </small>

                                    </div>

                                 </div>

                              </div>

                           </div>

                           <div class="col-md-6 mb-3">

                              <div class="usage-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="usage-icon">

                                       <i class="ti ti-shield-lock"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Security System
                                       </div>

                                       <small class="text-muted">
                                          Sistem keamanan rumah dan gedung
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
                                          Warning Indicator
                                       </div>

                                       <small class="text-muted">
                                          Indikator kondisi bahaya atau error
                                       </small>

                                    </div>

                                 </div>

                              </div>

                           </div>

                        </div>

                     </div>

                     <!-- LANGKAH -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           🔧 Cara Menggunakan Buzzer
                        </h5>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              1. Hubungkan Buzzer
                           </div>

                           <small class="text-muted">
                              Hubungkan pin VCC ke 5V dan pin GND ke Ground
                              Arduino atau ESP32.
                           </small>

                        </div>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              2. Hubungkan Pin Signal
                           </div>

                           <small class="text-muted">
                              Hubungkan pin Signal (S) ke salah satu pin digital
                              mikrokontroler untuk mengontrol suara buzzer.
                           </small>

                        </div>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              3. Upload Program
                           </div>

                           <small class="text-muted">
                              Upload program Arduino untuk mengaktifkan dan
                              menonaktifkan buzzer sesuai kebutuhan aplikasi.
                           </small>

                        </div>

                        <div class="step-card mb-0">

                           <div class="fw-semibold mb-2">
                              4. Uji Suara Buzzer
                           </div>

                           <small class="text-muted">
                              Jalankan program dan amati bunyi buzzer sebagai
                              indikator notifikasi atau alarm.
                           </small>

                        </div>

                     </div>
                     <!-- CODE -->
                     <div class="glass-card p-4 shadow-sm">

                        <div class="d-flex justify-content-between align-items-center mb-4">

                           <div>

                              <h5 class="fw-bold mb-1">
                                 💻 Contoh Program Buzzer
                              </h5>

                              <small class="text-muted">
                                 Mengaktifkan dan menonaktifkan buzzer menggunakan Arduino
                              </small>

                           </div>

                           <button class="btn btn-primary btn-sm">

                              <i class="ti ti-copy"></i>
                              Copy Code

                           </button>

                        </div>

                        <div class="code-box">

                           <div class="code-header">

                              buzzer_example.ino

                           </div>

                           <div class="code-content">
                              <pre>
int buzzerPin = 8;

void setup()
{
   pinMode(
      buzzerPin,
      OUTPUT
   );
}

void loop()
{
   digitalWrite(
      buzzerPin,
      HIGH
   );

   delay(1000);

   digitalWrite(
      buzzerPin,
      LOW
   );

   delay(1000);
}
</pre>
                           </div>

                        </div>

                     </div>

                  </div>
                  <!-- RIGHT -->
                  <div class="col-lg-4">

                     <!-- PIN -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           🔌 Pin Buzzer Module
                        </h5>

                        <div class="pin-card p-3 mb-3">

                           <div class="d-flex align-items-center gap-3">

                              <div class="pin-icon">
                                 VCC
                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    Power Supply
                                 </div>

                                 <small class="text-muted">
                                    Tegangan kerja 3.3V - 5V
                                 </small>

                              </div>

                           </div>

                        </div>

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

                        <div class="pin-card p-3">

                           <div class="d-flex align-items-center gap-3">

                              <div class="pin-icon">
                                 SIG
                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    Signal Input
                                 </div>

                                 <small class="text-muted">
                                    Pin kontrol dari Arduino
                                 </small>

                              </div>

                           </div>

                        </div>

                     </div>

                     <!-- INFORMASI -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           📌 Informasi Penting
                        </h5>

                        <div class="spec-box mb-3">

                           <div class="fw-semibold mb-2">
                              Active Buzzer
                           </div>

                           <small class="text-muted">
                              Dapat langsung menghasilkan suara hanya dengan
                              memberikan sinyal HIGH pada pin kontrol.
                           </small>

                        </div>

                        <div class="spec-box mb-3">

                           <div class="fw-semibold mb-2">
                              Respon Cepat
                           </div>

                           <small class="text-muted">
                              Cocok digunakan sebagai alarm dan indikator
                              peringatan pada berbagai sistem elektronik.
                           </small>

                        </div>

                        <div class="spec-box">

                           <div class="fw-semibold mb-2">
                              Konsumsi Daya Rendah
                           </div>

                           <small class="text-muted">
                              Membutuhkan daya kecil sehingga ideal untuk
                              proyek IoT dan embedded system.
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

                              <i class="ti ti-book"></i>
                              Component Guide

                           </button>

                           <button class="btn btn-danger">

                              <i class="ti ti-help-circle"></i>
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