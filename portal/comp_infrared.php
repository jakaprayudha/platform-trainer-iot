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
               #991b1b,
               #dc2626,
               #f97316);
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

      .gas-card {
         background: rgba(255, 255, 255, .9);
         backdrop-filter: blur(18px);
         border-radius: 24px;
         border: 1px solid rgba(255, 255, 255, .8);
         transition: .3s;
      }

      .gas-card:hover {
         transform: translateY(-3px);
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
                        🔴 Uraian Komponen Sensor Infrared
                     </h4>

                     <p class="text-muted mb-0">
                        Materi pembelajaran Sensor Infrared Obstacle Detection
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
                                    Detection Sensor
                                 </span>

                                 <span class="badge bg-light text-dark">
                                    Infrared Module
                                 </span>

                              </div>

                              <h2 class="fw-bold text-white mb-3">
                                 Infrared Obstacle Sensor Module
                              </h2>

                              <p class="mb-4"
                                 style="max-width:720px;">

                                 Sensor Infrared digunakan untuk mendeteksi keberadaan objek
                                 menggunakan pantulan cahaya inframerah. Sensor ini banyak
                                 digunakan pada robot line follower, obstacle avoidance,
                                 sistem penghitung objek dan otomasi industri.

                              </p>

                              <div class="d-flex flex-wrap gap-5">

                                 <div>

                                    <small>Sensor Type</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       Infrared
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Voltage</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       3.3V - 5V
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Detection</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       2 - 30 cm
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Output</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       Digital
                                    </h3>

                                 </div>

                              </div>

                           </div>

                           <div class="col-lg-4">

                              <div class="component-preview">

                                 <i class="ti ti-scan"
                                    style="font-size:120px;"></i>

                              </div>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>

               <!-- FEATURE -->
               <div class="row mb-4">

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="gas-card feature-card p-4 text-center">

                        <div class="feature-icon soft-primary mx-auto mb-3">

                           <i class="ti ti-scan"></i>

                        </div>

                        <h5 class="fw-bold">
                           Object Detection
                        </h5>

                        <small class="text-muted">
                           Mendeteksi objek secara realtime
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="gas-card feature-card p-4 text-center">

                        <div class="feature-icon soft-success mx-auto mb-3">

                           <i class="ti ti-robot"></i>

                        </div>

                        <h5 class="fw-bold">
                           Robotics
                        </h5>

                        <small class="text-muted">
                           Cocok untuk robot pintar
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="gas-card feature-card p-4 text-center">

                        <div class="feature-icon soft-warning mx-auto mb-3">

                           <i class="ti ti-route"></i>

                        </div>

                        <h5 class="fw-bold">
                           Line Follower
                        </h5>

                        <small class="text-muted">
                           Robot pengikut garis
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="gas-card feature-card p-4 text-center">

                        <div class="feature-icon soft-info mx-auto mb-3">

                           <i class="ti ti-bolt"></i>

                        </div>

                        <h5 class="fw-bold">
                           Fast Response
                        </h5>

                        <small class="text-muted">
                           Respon cepat dan stabil
                        </small>

                     </div>

                  </div>

               </div>

               <div class="row">

                  <!-- LEFT -->
                  <div class="col-lg-8">

                     <!-- PENJELASAN -->
                     <div class="gas-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           📖 Penjelasan Sensor Infrared
                        </h5>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           Sensor Infrared bekerja dengan memancarkan cahaya
                           inframerah melalui IR LED dan menerima pantulannya
                           menggunakan photodiode atau phototransistor.

                        </p>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           Ketika terdapat objek di depan sensor, cahaya inframerah
                           akan dipantulkan kembali sehingga modul menghasilkan
                           sinyal digital yang dapat dibaca oleh Arduino maupun ESP32.

                        </p>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           Sensor ini sangat populer pada robot obstacle avoidance,
                           line follower, penghitung barang otomatis dan sistem
                           deteksi keberadaan objek.

                        </p>

                     </div>

                     <!-- SPESIFIKASI -->
                     <div class="gas-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           ⚙️ Spesifikasi Sensor Infrared
                        </h5>

                        <div class="table-responsive">

                           <table class="table table-spec">

                              <tbody>

                                 <tr>
                                    <td width="35%"><strong>Sensor Type</strong></td>
                                    <td>Infrared Obstacle Sensor</td>
                                 </tr>

                                 <tr>
                                    <td><strong>Operating Voltage</strong></td>
                                    <td>3.3V - 5V</td>
                                 </tr>

                                 <tr>
                                    <td><strong>Output Type</strong></td>
                                    <td>Digital</td>
                                 </tr>

                                 <tr>
                                    <td><strong>Detection Range</strong></td>
                                    <td>2cm - 30cm</td>
                                 </tr>

                                 <tr>
                                    <td><strong>Sensitivity</strong></td>
                                    <td>Adjustable</td>
                                 </tr>

                                 <tr>
                                    <td><strong>Interface</strong></td>
                                    <td>Arduino / ESP32</td>
                                 </tr>

                              </tbody>

                           </table>

                        </div>

                     </div>

                     <!-- PENGGUNAAN -->
                     <!-- LANGKAH -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           🔧 Cara Menggunakan Sensor Infrared
                        </h5>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              1. Hubungkan Sensor
                           </div>

                           <small class="text-muted">
                              Hubungkan pin VCC ke 5V dan GND ke Ground Arduino
                              atau ESP32.
                           </small>

                        </div>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              2. Hubungkan Pin Output
                           </div>

                           <small class="text-muted">
                              Hubungkan pin OUT sensor Infrared ke salah satu
                              pin digital pada mikrokontroler.
                           </small>

                        </div>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              3. Atur Sensitivitas Sensor
                           </div>

                           <small class="text-muted">
                              Gunakan potensiometer pada modul untuk mengatur
                              jarak dan sensitivitas deteksi objek.
                           </small>

                        </div>

                        <div class="step-card mb-0">

                           <div class="fw-semibold mb-2">
                              4. Upload Program dan Uji Sensor
                           </div>

                           <small class="text-muted">
                              Upload program Arduino kemudian arahkan objek
                              ke depan sensor untuk menguji proses deteksi.
                           </small>

                        </div>

                     </div>
                     <!-- APLIKASI SENSOR -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           🎯 Aplikasi Sensor Infrared
                        </h5>

                        <div class="row">

                           <div class="col-md-6 mb-3">

                              <div class="gas-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="gas-icon">

                                       <i class="ti ti-robot"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Obstacle Avoidance
                                       </div>

                                       <small class="text-muted">
                                          Robot penghindar rintangan
                                       </small>

                                    </div>

                                 </div>

                              </div>

                           </div>

                           <div class="col-md-6 mb-3">

                              <div class="gas-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="gas-icon">

                                       <i class="ti ti-route"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Line Follower
                                       </div>

                                       <small class="text-muted">
                                          Deteksi garis hitam putih
                                       </small>

                                    </div>

                                 </div>

                              </div>

                           </div>

                           <div class="col-md-6 mb-3">

                              <div class="gas-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="gas-icon">

                                       <i class="ti ti-box"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Object Counter
                                       </div>

                                       <small class="text-muted">
                                          Menghitung objek otomatis
                                       </small>

                                    </div>

                                 </div>

                              </div>

                           </div>

                           <div class="col-md-6 mb-3">

                              <div class="gas-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="gas-icon">

                                       <i class="ti ti-building-factory"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Industrial Automation
                                       </div>

                                       <small class="text-muted">
                                          Sensor deteksi pada conveyor
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
                                 💻 Contoh Program Sensor Infrared
                              </h5>

                              <small class="text-muted">
                                 Membaca deteksi objek menggunakan Arduino
                              </small>

                           </div>

                           <button class="btn btn-primary btn-sm">

                              <i class="ti ti-copy"></i>
                              Copy Code

                           </button>

                        </div>

                        <div class="code-box">

                           <div class="code-header">

                              infrared_sensor_example.ino

                           </div>

                           <div class="code-content">
                              <pre>
int infraredPin = 2;
int ledPin = 13;

void setup()
{
   pinMode(infraredPin, INPUT);
   pinMode(ledPin, OUTPUT);

   Serial.begin(9600);
}

void loop()
{
   int sensorState =
      digitalRead(infraredPin);

   if(sensorState == LOW)
   {
      Serial.println(
         "Object Detected");

      digitalWrite(
         ledPin,
         HIGH
      );
   }
   else
   {
      Serial.println(
         "No Object"
      );

      digitalWrite(
         ledPin,
         LOW
      );
   }

   delay(200);
}
</pre>
                           </div>

                        </div>

                     </div>

                  </div>

                  <!-- RIGHT -->
                  <div class="col-lg-4">

                     <!-- PIN -->
                     <div class="gas-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           🔌 Pin Sensor Infrared
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
                                    Tegangan 3.3V - 5V
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
                                 OUT
                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    Digital Output
                                 </div>

                                 <small class="text-muted">
                                    Output deteksi objek
                                 </small>

                              </div>

                           </div>

                        </div>

                     </div>

                     <!-- INFORMASI -->
                     <div class="gas-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           📌 Informasi Penting
                        </h5>

                        <div class="spec-box mb-3">

                           <div class="fw-semibold mb-2">
                              Prinsip Kerja
                           </div>

                           <small class="text-muted">
                              Menggunakan pantulan cahaya inframerah
                              untuk mendeteksi objek.
                           </small>

                        </div>

                        <div class="spec-box mb-3">

                           <div class="fw-semibold mb-2">
                              Potensiometer
                           </div>

                           <small class="text-muted">
                              Jarak deteksi dapat diatur menggunakan
                              potensiometer pada modul.
                           </small>

                        </div>

                        <div class="spec-box">

                           <div class="fw-semibold mb-2">
                              Cahaya Lingkungan
                           </div>

                           <small class="text-muted">
                              Cahaya matahari yang sangat terang dapat
                              mempengaruhi sensitivitas sensor.
                           </small>

                        </div>

                     </div>

                     <!-- QUICK ACTION -->
                     <div class="gas-card p-4 shadow-sm">

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