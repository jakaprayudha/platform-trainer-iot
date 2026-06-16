<!doctype html>
<html lang="en">

<head>
   <?php require 'partial-head.php' ?>

   <style>
      body {
         background: #f8fafc;
      }

      .component-banner {
         background: linear-gradient(135deg, #0f172a, #1d4ed8, #dc2626);
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
         color: #60a5fa;
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
         width: 54px;
         height: 54px;
         border-radius: 16px;
         display: flex;
         align-items: center;
         justify-content: center;
         font-weight: bold;
         font-size: 18px;
         color: #fff;
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

      .bg-brown {
         background: #78350f;
      }

      .bg-red {
         background: #dc2626;
      }

      .bg-orange {
         background: #f59e0b;
      }

      .code-box {
         background: #020617;
         border-radius: 24px;
         overflow: hidden;
      }

      .code-header {
         background: rgba(255, 255, 255, .05);
         border-bottom: 1px solid rgba(255, 255, 255, .08);
         padding: 14px 20px;
         color: #fff;
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
                        ⚙️ Uraian Komponen Motor Servo
                     </h4>

                     <p class="text-muted mb-0">
                        Materi pembelajaran trainer kit IoT & robotics
                     </p>

                  </div>

                  <div class="d-flex gap-2">

                     <button class="btn btn-light">

                        <i class="ti ti-download"></i>
                        Download Module

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
                                    Robotics Component
                                 </span>

                                 <span class="badge bg-light text-dark">
                                    IoT Learning Module
                                 </span>

                              </div>

                              <h2 class="fw-bold text-white mb-3">
                                 Servo Motor SG90
                              </h2>

                              <p class="mb-4"
                                 style="max-width:720px;">

                                 Servo motor adalah motor DC dengan sistem kontrol
                                 sudut presisi yang banyak digunakan pada project
                                 robotics, IoT automation, smart lock dan sistem mekanik otomatis.

                              </p>

                              <div class="d-flex flex-wrap gap-5">

                                 <div>

                                    <small>Operating Voltage</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       4.8V - 6V
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Rotation Angle</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       180°
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Control Signal</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       PWM
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Type</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       SG90 Servo
                                    </h3>

                                 </div>

                              </div>

                           </div>

                           <div class="col-lg-4">

                              <div class="component-preview">

                                 <i class="ti ti-settings"></i>

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

                           <i class="ti ti-rotate-clockwise"></i>

                        </div>

                        <h5 class="fw-bold">
                           Precision Rotation
                        </h5>

                        <small class="text-muted">
                           Rotasi sudut presisi
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card feature-card p-4 text-center">

                        <div class="feature-icon soft-success mx-auto mb-3">

                           <i class="ti ti-cpu"></i>

                        </div>

                        <h5 class="fw-bold">
                           PWM Control
                        </h5>

                        <small class="text-muted">
                           Kontrol menggunakan PWM
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

                           <i class="ti ti-robot"></i>

                        </div>

                        <h5 class="fw-bold">
                           Robotics Ready
                        </h5>

                        <small class="text-muted">
                           Cocok untuk robotika
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
                           📖 Penjelasan Motor Servo
                        </h5>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           Servo motor adalah aktuator yang digunakan untuk mengontrol
                           posisi sudut dengan presisi tinggi. Berbeda dengan motor DC biasa,
                           servo dapat diatur posisi sudutnya menggunakan sinyal PWM
                           (Pulse Width Modulation).

                        </p>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           Servo motor banyak digunakan pada project:
                        </p>

                        <ul class="text-muted"
                           style="line-height:2;">

                           <li>Robot lengan otomatis</li>
                           <li>Smart door lock</li>
                           <li>Kamera tracking</li>
                           <li>Robot line follower</li>
                           <li>Sistem otomatisasi IoT</li>

                        </ul>

                     </div>

                     <!-- SPESIFIKASI -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           ⚙️ Spesifikasi Servo Motor
                        </h5>

                        <div class="table-responsive">

                           <table class="table table-borderless table-spec">

                              <tbody>

                                 <tr>

                                    <td width="35%">
                                       <strong>Model</strong>
                                    </td>

                                    <td>
                                       SG90 Micro Servo
                                    </td>

                                 </tr>

                                 <tr>

                                    <td>
                                       <strong>Operating Voltage</strong>
                                    </td>

                                    <td>
                                       4.8V - 6V
                                    </td>

                                 </tr>

                                 <tr>

                                    <td>
                                       <strong>Rotation</strong>
                                    </td>

                                    <td>
                                       0° - 180°
                                    </td>

                                 </tr>

                                 <tr>

                                    <td>
                                       <strong>Control Signal</strong>
                                    </td>

                                    <td>
                                       PWM
                                    </td>

                                 </tr>

                                 <tr>

                                    <td>
                                       <strong>Torque</strong>
                                    </td>

                                    <td>
                                       1.8 kg/cm
                                    </td>

                                 </tr>

                                 <tr>

                                    <td>
                                       <strong>Weight</strong>
                                    </td>

                                    <td>
                                       9 Gram
                                    </td>

                                 </tr>

                              </tbody>

                           </table>

                        </div>

                     </div>

                     <!-- LANGKAH -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           🔧 Cara Kerja Servo Motor
                        </h5>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              1. Input PWM
                           </div>

                           <small class="text-muted">
                              Arduino mengirim sinyal PWM ke servo motor.
                           </small>

                        </div>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              2. Pemrosesan Sinyal
                           </div>

                           <small class="text-muted">
                              Servo membaca lebar pulsa untuk menentukan sudut.
                           </small>

                        </div>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              3. Motor Bergerak
                           </div>

                           <small class="text-muted">
                              Gear internal bergerak menuju posisi sudut yang ditentukan.
                           </small>

                        </div>

                        <div class="step-card mb-0">

                           <div class="fw-semibold mb-2">
                              4. Posisi Stabil
                           </div>

                           <small class="text-muted">
                              Servo mempertahankan posisi sudut dengan feedback internal.
                           </small>

                        </div>

                     </div>

                     <!-- FUNGSI -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           📍 Penggunaan Motor Servo
                        </h5>

                        <div class="row">

                           <div class="col-md-6 mb-3">

                              <div class="usage-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="usage-icon">

                                       <i class="ti ti-robot"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Robotics
                                       </div>

                                       <small class="text-muted">
                                          Penggerak lengan dan sendi robot
                                       </small>

                                    </div>

                                 </div>

                              </div>

                           </div>

                           <div class="col-md-6 mb-3">

                              <div class="usage-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="usage-icon">

                                       <i class="ti ti-home-cog"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Smart Automation
                                       </div>

                                       <small class="text-muted">
                                          Membuka dan menutup perangkat otomatis
                                       </small>

                                    </div>

                                 </div>

                              </div>

                           </div>

                           <div class="col-md-6 mb-3">

                              <div class="usage-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="usage-icon">

                                       <i class="ti ti-camera"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Camera Pan Tilt
                                       </div>

                                       <small class="text-muted">
                                          Menggerakkan kamera secara presisi
                                       </small>

                                    </div>

                                 </div>

                              </div>

                           </div>

                           <div class="col-md-6 mb-3">

                              <div class="usage-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="usage-icon">

                                       <i class="ti ti-settings"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          IoT Control
                                       </div>

                                       <small class="text-muted">
                                          Kendali posisi aktuator berbasis IoT
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
                                 Menggerakkan servo motor
                              </small>

                           </div>

                           <button class="btn btn-primary btn-sm">

                              <i class="ti ti-copy"></i>
                              Copy Code

                           </button>

                        </div>

                        <div class="code-box">

                           <div class="code-header">

                              servo_motor_example.ino

                           </div>

                           <div class="code-content">
                              #include &lt;Servo.h&gt;

                              Servo myservo;

                              void setup() {

                              myservo.attach(9);

                              }

                              void loop() {

                              myservo.write(0);
                              delay(1000);

                              myservo.write(90);
                              delay(1000);

                              myservo.write(180);
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
                           🔌 Kabel Servo Motor
                        </h5>

                        <!-- ITEM -->
                        <div class="pin-card p-3 mb-3">

                           <div class="d-flex align-items-center gap-3">

                              <div class="pin-icon bg-brown">
                                 G
                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    Brown Wire
                                 </div>

                                 <small class="text-muted">
                                    Ground (GND)
                                 </small>

                              </div>

                           </div>

                        </div>

                        <!-- ITEM -->
                        <div class="pin-card p-3 mb-3">

                           <div class="d-flex align-items-center gap-3">

                              <div class="pin-icon bg-red">
                                 V
                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    Red Wire
                                 </div>

                                 <small class="text-muted">
                                    VCC +5V
                                 </small>

                              </div>

                           </div>

                        </div>

                        <!-- ITEM -->
                        <div class="pin-card p-3">

                           <div class="d-flex align-items-center gap-3">

                              <div class="pin-icon bg-orange">
                                 S
                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    Orange Wire
                                 </div>

                                 <small class="text-muted">
                                    Signal PWM
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
                              Gunakan PWM
                           </div>

                           <small class="text-muted">
                              Servo hanya dapat dikontrol menggunakan sinyal PWM.
                           </small>

                        </div>

                        <div class="spec-box mb-3">

                           <div class="fw-semibold mb-2">
                              Jangan Over Voltage
                           </div>

                           <small class="text-muted">
                              Tegangan lebih dari 6V dapat merusak servo.
                           </small>

                        </div>

                        <div class="spec-box">

                           <div class="fw-semibold mb-2">
                              Power Supply Stabil
                           </div>

                           <small class="text-muted">
                              Gunakan supply stabil agar servo tidak bergetar.
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
                              Download PDF

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