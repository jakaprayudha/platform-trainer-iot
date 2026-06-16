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
               #0f766e,
               #14b8a6,
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
                        🌡️ Uraian Komponen Sensor DHT11
                     </h4>

                     <p class="text-muted mb-0">
                        Materi pembelajaran sensor suhu dan kelembaban DHT11
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
                                    Environment Sensor
                                 </span>

                                 <span class="badge bg-light text-dark">
                                    DHT11 Module
                                 </span>

                              </div>

                              <h2 class="fw-bold text-white mb-3">
                                 DHT11 Temperature & Humidity Sensor
                              </h2>

                              <p class="mb-4"
                                 style="max-width:720px;">

                                 DHT11 merupakan sensor digital yang digunakan untuk
                                 mengukur suhu dan kelembaban udara secara realtime.
                                 Sensor ini banyak digunakan pada sistem monitoring
                                 lingkungan, smart home, weather station dan berbagai
                                 proyek IoT berbasis Arduino maupun ESP32.

                              </p>

                              <div class="d-flex flex-wrap gap-5">

                                 <div>

                                    <small>Sensor Type</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       Temperature & Humidity
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
                                       Environment Monitoring
                                    </h3>

                                 </div>

                              </div>

                           </div>

                           <div class="col-lg-4">

                              <div class="component-preview">

                                 <i class="ti ti-temperature"
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

                     <div class="glass-card feature-card p-4 text-center">

                        <div class="feature-icon soft-primary mx-auto mb-3">

                           <i class="ti ti-temperature"></i>

                        </div>

                        <h5 class="fw-bold">
                           Temperature Sensor
                        </h5>

                        <small class="text-muted">
                           Mengukur suhu lingkungan
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card feature-card p-4 text-center">

                        <div class="feature-icon soft-success mx-auto mb-3">

                           <i class="ti ti-droplet"></i>

                        </div>

                        <h5 class="fw-bold">
                           Humidity Sensor
                        </h5>

                        <small class="text-muted">
                           Mengukur kelembaban udara
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card feature-card p-4 text-center">

                        <div class="feature-icon soft-warning mx-auto mb-3">

                           <i class="ti ti-dashboard"></i>

                        </div>

                        <h5 class="fw-bold">
                           IoT Ready
                        </h5>

                        <small class="text-muted">
                           Cocok untuk proyek IoT
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card feature-card p-4 text-center">

                        <div class="feature-icon soft-danger mx-auto mb-3">

                           <i class="ti ti-home"></i>

                        </div>

                        <h5 class="fw-bold">
                           Smart Monitoring
                        </h5>

                        <small class="text-muted">
                           Monitoring lingkungan realtime
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
                           📖 Penjelasan Sensor DHT11
                        </h5>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           DHT11 merupakan sensor digital yang digunakan untuk
                           mengukur suhu dan kelembaban udara dalam satu modul.
                           Sensor ini banyak digunakan pada proyek elektronika,
                           IoT dan sistem monitoring lingkungan karena mudah
                           digunakan serta memiliki antarmuka digital.

                        </p>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           Sensor DHT11 mengintegrasikan sensor suhu dan sensor
                           kelembaban yang mampu mengirimkan data secara digital
                           ke mikrokontroler seperti Arduino dan ESP32 melalui
                           satu jalur komunikasi data.

                        </p>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           DHT11 sering digunakan pada sistem smart home,
                           weather station, greenhouse monitoring, monitoring
                           ruangan dan berbagai aplikasi IoT yang membutuhkan
                           pengukuran kondisi lingkungan secara realtime.

                        </p>

                     </div>
                     <!-- SPESIFIKASI -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           ⚙️ Spesifikasi Sensor DHT11
                        </h5>

                        <div class="table-responsive">

                           <table class="table table-spec">

                              <tbody>

                                 <tr>
                                    <td width="35%">
                                       <strong>Sensor Type</strong>
                                    </td>
                                    <td>
                                       Temperature & Humidity Sensor
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
                                       Digital Signal
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Temperature Range</strong>
                                    </td>
                                    <td>
                                       0°C - 50°C
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Humidity Range</strong>
                                    </td>
                                    <td>
                                       20% - 90% RH
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Temperature Accuracy</strong>
                                    </td>
                                    <td>
                                       ±2°C
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Humidity Accuracy</strong>
                                    </td>
                                    <td>
                                       ±5% RH
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Sampling Rate</strong>
                                    </td>
                                    <td>
                                       1 Hz (1 data/detik)
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

                     <!-- LANGKAH -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           🔧 Cara Menggunakan Sensor DHT11
                        </h5>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              1. Hubungkan Sensor
                           </div>

                           <small class="text-muted">
                              Hubungkan pin VCC ke 5V dan pin GND ke Ground
                              Arduino atau ESP32.
                           </small>

                        </div>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              2. Hubungkan Pin Data
                           </div>

                           <small class="text-muted">
                              Hubungkan pin DATA ke salah satu pin digital
                              mikrokontroler untuk komunikasi sensor.
                           </small>

                        </div>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              3. Install Library DHT
                           </div>

                           <small class="text-muted">
                              Install library DHT Sensor Library melalui
                              Library Manager pada Arduino IDE.
                           </small>

                        </div>

                        <div class="step-card mb-0">

                           <div class="fw-semibold mb-2">
                              4. Upload Program dan Monitoring Data
                           </div>

                           <small class="text-muted">
                              Upload program kemudian amati nilai suhu dan
                              kelembaban melalui Serial Monitor atau display.
                           </small>

                        </div>

                     </div>
                     <!-- PENGGUNAAN -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           📍 Penggunaan Sensor DHT11
                        </h5>

                        <div class="row">

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
                                          Monitoring suhu dan kelembaban ruangan
                                       </small>

                                    </div>

                                 </div>

                              </div>

                           </div>

                           <div class="col-md-6 mb-3">

                              <div class="usage-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="usage-icon">

                                       <i class="ti ti-cloud"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Weather Station
                                       </div>

                                       <small class="text-muted">
                                          Stasiun cuaca sederhana berbasis IoT
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
                                          IoT Monitoring
                                       </div>

                                       <small class="text-muted">
                                          Monitoring lingkungan secara realtime
                                       </small>

                                    </div>

                                 </div>

                              </div>

                           </div>

                           <div class="col-md-6 mb-3">

                              <div class="usage-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="usage-icon">

                                       <i class="ti ti-plant"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Greenhouse Monitoring
                                       </div>

                                       <small class="text-muted">
                                          Monitoring suhu dan kelembaban tanaman
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
                                 💻 Contoh Program Sensor DHT11
                              </h5>

                              <small class="text-muted">
                                 Membaca suhu dan kelembaban menggunakan Arduino
                              </small>

                           </div>

                           <button class="btn btn-primary btn-sm">

                              <i class="ti ti-copy"></i>
                              Copy Code

                           </button>

                        </div>

                        <div class="code-box">

                           <div class="code-header">

                              dht11_example.ino

                           </div>

                           <div class="code-content">
                              <pre>
#include &lt;DHT.h&gt;

#define DHTPIN 2
#define DHTTYPE DHT11

DHT dht(
   DHTPIN,
   DHTTYPE
);

void setup()
{
   Serial.begin(9600);

   dht.begin();
}

void loop()
{
   float humidity =
      dht.readHumidity();

   float temperature =
      dht.readTemperature();

   Serial.print(
      "Temperature : "
   );
   Serial.print(
      temperature
   );
   Serial.println(
      " °C"
   );

   Serial.print(
      "Humidity : "
   );
   Serial.print(
      humidity
   );
   Serial.println(
      " %"
   );

   Serial.println(
      "----------------"
   );

   delay(2000);
}
</pre>
                           </div>

                        </div>

                     </div>
                  </div>

                  <!-- RIGHT -->
                  <!-- RIGHT -->
                  <div class="col-lg-4">

                     <!-- PIN -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           🔌 Pin Sensor DHT11
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
                                 DATA
                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    Digital Output
                                 </div>

                                 <small class="text-muted">
                                    Data suhu dan kelembaban
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
                              Sensor 2-in-1
                           </div>

                           <small class="text-muted">
                              DHT11 mampu mengukur suhu dan kelembaban
                              udara dalam satu modul sensor.
                           </small>

                        </div>

                        <div class="spec-box mb-3">

                           <div class="fw-semibold mb-2">
                              Output Digital
                           </div>

                           <small class="text-muted">
                              Data dikirim secara digital sehingga mudah
                              dibaca menggunakan Arduino dan ESP32.
                           </small>

                        </div>

                        <div class="spec-box">

                           <div class="fw-semibold mb-2">
                              Monitoring Lingkungan
                           </div>

                           <small class="text-muted">
                              Cocok digunakan untuk weather station,
                              smart home dan sistem IoT monitoring.
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