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
               #1e3a8a,
               #2563eb,
               #06b6d4);
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
               <!-- HEADER -->
               <div class="d-flex justify-content-between align-items-center mb-4">

                  <div>

                     <h4 class="fw-bold mb-1">
                        📳 Uraian Komponen Sensor Getar SW-420
                     </h4>

                     <p class="text-muted mb-0">
                        Materi pembelajaran Vibration Sensor SW-420
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
                                    Vibration Sensor
                                 </span>

                                 <span class="badge bg-light text-dark">
                                    SW-420 Module
                                 </span>

                              </div>

                              <h2 class="fw-bold text-white mb-3">
                                 Sensor Getar SW-420
                              </h2>

                              <p class="mb-4"
                                 style="max-width:720px;">

                                 Sensor Getar SW-420 merupakan sensor yang digunakan
                                 untuk mendeteksi getaran, benturan, guncangan atau
                                 pergerakan pada suatu objek. Sensor ini banyak
                                 digunakan pada sistem keamanan, monitoring mesin,
                                 alarm anti maling dan pendeteksi gempa sederhana.

                              </p>

                              <div class="d-flex flex-wrap gap-5">

                                 <div>

                                    <small>Sensor Type</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       Vibration Sensor
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
                                       Digital
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Usage</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       Vibration Detection
                                    </h3>

                                 </div>

                              </div>

                           </div>

                           <div class="col-lg-4">

                              <div class="component-preview">

                                 <i class="ti ti-vibrate"
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

                           <i class="ti ti-vibrate"></i>

                        </div>

                        <h5 class="fw-bold">
                           Vibration Detection
                        </h5>

                        <small class="text-muted">
                           Mendeteksi getaran secara realtime
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="gas-card feature-card p-4 text-center">

                        <div class="feature-icon soft-success mx-auto mb-3">

                           <i class="ti ti-bolt"></i>

                        </div>

                        <h5 class="fw-bold">
                           Shock Detection
                        </h5>

                        <small class="text-muted">
                           Mendeteksi benturan dan guncangan
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="gas-card feature-card p-4 text-center">

                        <div class="feature-icon soft-warning mx-auto mb-3">

                           <i class="ti ti-adjustments"></i>

                        </div>

                        <h5 class="fw-bold">
                           Adjustable Sensitivity
                        </h5>

                        <small class="text-muted">
                           Sensitivitas dapat diatur
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="gas-card feature-card p-4 text-center">

                        <div class="feature-icon soft-danger mx-auto mb-3">

                           <i class="ti ti-zap"></i>

                        </div>

                        <h5 class="fw-bold">
                           Fast Response
                        </h5>

                        <small class="text-muted">
                           Respon cepat terhadap getaran
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
                           📖 Penjelasan Sensor Getar SW-420
                        </h5>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           Sensor Getar SW-420 merupakan sensor yang digunakan untuk
                           mendeteksi getaran, benturan, guncangan atau pergerakan pada
                           suatu objek. Sensor ini banyak digunakan dalam sistem keamanan
                           dan monitoring kondisi lingkungan.

                        </p>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           Modul SW-420 bekerja menggunakan saklar getar internal yang akan
                           berubah kondisi ketika menerima getaran. Modul ini dilengkapi IC
                           komparator LM393 sehingga dapat menghasilkan sinyal digital yang
                           mudah dibaca oleh Arduino maupun ESP32.

                        </p>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           Sensor ini banyak diterapkan pada alarm anti maling, monitoring
                           getaran mesin, pendeteksi gempa sederhana, sistem keamanan pintu,
                           serta berbagai proyek IoT yang membutuhkan deteksi getaran secara
                           realtime.

                        </p>

                     </div>
                     <!-- SPESIFIKASI -->
                     <div class="gas-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           ⚙️ Spesifikasi Sensor Getar SW-420
                        </h5>

                        <div class="table-responsive">

                           <table class="table table-spec">

                              <tbody>

                                 <tr>
                                    <td width="35%">
                                       <strong>Sensor Type</strong>
                                    </td>
                                    <td>
                                       SW-420 Vibration Sensor
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
                                       Digital Output (DO)
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Sensing Parameter</strong>
                                    </td>
                                    <td>
                                       Vibration & Shock Detection
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Sensitivity</strong>
                                    </td>
                                    <td>
                                       Adjustable via Potentiometer
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Comparator IC</strong>
                                    </td>
                                    <td>
                                       LM393
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Response Time</strong>
                                    </td>
                                    <td>
                                       Fast Response
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Interface</strong>
                                    </td>
                                    <td>
                                       Arduino / ESP32 / STM32
                                    </td>
                                 </tr>

                              </tbody>

                           </table>

                        </div>

                     </div>
                     <!-- LANGKAH -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           🔧 Cara Menggunakan Sensor Getar SW-420
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
                              Hubungkan pin DO (Digital Output) ke salah satu
                              pin digital pada mikrokontroler.
                           </small>

                        </div>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              3. Atur Sensitivitas Sensor
                           </div>

                           <small class="text-muted">
                              Putar potensiometer pada modul SW-420 untuk
                              menyesuaikan tingkat sensitivitas getaran.
                           </small>

                        </div>

                        <div class="step-card mb-0">

                           <div class="fw-semibold mb-2">
                              4. Uji Deteksi Getaran
                           </div>

                           <small class="text-muted">
                              Upload program Arduino kemudian berikan getaran
                              atau sentuhan pada sensor untuk menguji proses
                              deteksi getaran.
                           </small>

                        </div>

                     </div>


                     <!-- PENGGUNAAN -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           📳 Aplikasi Sensor Getar SW-420
                        </h5>

                        <div class="row">

                           <div class="col-md-6 mb-3">

                              <div class="gas-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="gas-icon">

                                       <i class="ti ti-shield-lock"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Anti Theft System
                                       </div>

                                       <small class="text-muted">
                                          Alarm keamanan kendaraan dan barang
                                       </small>

                                    </div>

                                 </div>

                              </div>

                           </div>

                           <div class="col-md-6 mb-3">

                              <div class="gas-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="gas-icon">

                                       <i class="ti ti-building-community"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Earthquake Detection
                                       </div>

                                       <small class="text-muted">
                                          Deteksi getaran dan gempa sederhana
                                       </small>

                                    </div>

                                 </div>

                              </div>

                           </div>

                           <div class="col-md-6 mb-3">

                              <div class="gas-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="gas-icon">

                                       <i class="ti ti-settings"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Machine Monitoring
                                       </div>

                                       <small class="text-muted">
                                          Monitoring getaran mesin industri
                                       </small>

                                    </div>

                                 </div>

                              </div>

                           </div>

                           <div class="col-md-6 mb-3">

                              <div class="gas-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="gas-icon">

                                       <i class="ti ti-bell-ringing"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Security Alarm
                                       </div>

                                       <small class="text-muted">
                                          Alarm saat terjadi benturan atau getaran
                                       </small>

                                    </div>

                                 </div>

                              </div>

                           </div>

                        </div>

                     </div>

                     <!-- PROGRAM -->
                     <div class="gas-card p-4 shadow-sm">

                        <div class="mb-4">

                           <h5 class="fw-bold mb-1">
                              💻 Contoh Program Sensor Getar SW-420
                           </h5>

                           <small class="text-muted">
                              Membaca status getaran menggunakan Arduino
                           </small>

                        </div>

                        <div class="code-box">

                           <div class="code-header">

                              sw420_vibration_sensor.ino

                           </div>

                           <div class="code-content">
                              <pre>
int vibrationPin = 2;

void setup()
{
   pinMode(vibrationPin, INPUT);

   Serial.begin(115200);
}

void loop()
{
   int vibrationState =
      digitalRead(vibrationPin);

   if(vibrationState == HIGH)
   {
      Serial.println(
         "Vibration Detected!");
   }
   else
   {
      Serial.println(
         "No Vibration");
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
                           🔌 Pin Sensor Getar SW-420
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
                                 DO
                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    Digital Output
                                 </div>

                                 <small class="text-muted">
                                    Output deteksi getaran
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
                              Sensor SW-420 akan berubah kondisi ketika
                              menerima getaran atau benturan pada modul.
                           </small>

                        </div>

                        <div class="spec-box mb-3">

                           <div class="fw-semibold mb-2">
                              Sensitivitas
                           </div>

                           <small class="text-muted">
                              Tingkat sensitivitas dapat diatur menggunakan
                              potensiometer bawaan modul.
                           </small>

                        </div>

                        <div class="spec-box">

                           <div class="fw-semibold mb-2">
                              Respon Cepat
                           </div>

                           <small class="text-muted">
                              Mampu mendeteksi getaran dan guncangan
                              dalam waktu yang sangat singkat.
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