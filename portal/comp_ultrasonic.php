<!doctype html>
<html lang="en">

<head>
   <?php require 'partial-head.php' ?>

   <style>
      body {
         background: #f8fafc;
      }

      .component-banner {
         background: linear-gradient(135deg, #0f172a, #2563eb, #06b6d4);
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
         color: #38bdf8;
         font-size: 92px;
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

      .soft-info {
         background: rgba(6, 182, 212, .1);
         color: #0891b2;
      }

      .pin-card {
         border-radius: 20px;
         border: 1px solid #eef2ff;
         transition: .3s;
      }

      .pin-card:hover {
         transform: translateY(-3px);
         border-color: #06b6d4;
      }

      .pin-icon {
         width: 56px;
         height: 56px;
         border-radius: 18px;
         background: linear-gradient(135deg, #2563eb, #06b6d4);
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
                        📡 Uraian Komponen Sensor Ultrasonik
                     </h4>

                     <p class="text-muted mb-0">
                        Materi pembelajaran HC-SR04 sensor IoT & robotics
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
                                    Distance Sensor
                                 </span>

                                 <span class="badge bg-light text-dark">
                                    Smart Detection Module
                                 </span>

                              </div>

                              <h2 class="fw-bold text-white mb-3">
                                 HC-SR04 Ultrasonic Sensor
                              </h2>

                              <p class="mb-4"
                                 style="max-width:720px;">

                                 Sensor ultrasonik HC-SR04 adalah sensor jarak
                                 yang menggunakan gelombang ultrasonik untuk
                                 mengukur jarak objek secara realtime pada sistem IoT dan robotika.

                              </p>

                              <div class="d-flex flex-wrap gap-5">

                                 <div>

                                    <small>Sensor Type</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       Ultrasonic
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Voltage</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       5V DC
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Range</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       2cm - 400cm
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Usage</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       Distance Detection
                                    </h3>

                                 </div>

                              </div>

                           </div>

                           <div class="col-lg-4">

                              <div class="component-preview">

                                 <i class="ti ti-radar-2"></i>

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

                           <i class="ti ti-ruler-measure"></i>

                        </div>

                        <h5 class="fw-bold">
                           Distance Measure
                        </h5>

                        <small class="text-muted">
                           Mengukur jarak objek
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card feature-card p-4 text-center">

                        <div class="feature-icon soft-success mx-auto mb-3">

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

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card feature-card p-4 text-center">

                        <div class="feature-icon soft-warning mx-auto mb-3">

                           <i class="ti ti-device-iot"></i>

                        </div>

                        <h5 class="fw-bold">
                           IoT Monitoring
                        </h5>

                        <small class="text-muted">
                           Monitoring realtime
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card feature-card p-4 text-center">

                        <div class="feature-icon soft-info mx-auto mb-3">

                           <i class="ti ti-wave-sine"></i>

                        </div>

                        <h5 class="fw-bold">
                           Ultrasonic Wave
                        </h5>

                        <small class="text-muted">
                           Menggunakan gelombang suara
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
                           📖 Penjelasan Sensor Ultrasonik
                        </h5>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           Sensor ultrasonik HC-SR04 bekerja dengan cara
                           memancarkan gelombang ultrasonik kemudian menerima
                           pantulan gelombang dari objek di depannya.

                        </p>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           Sensor ultrasonik sering digunakan pada:
                        </p>

                        <ul class="text-muted"
                           style="line-height:2;">

                           <li>Robot obstacle avoidance</li>
                           <li>Smart parking system</li>
                           <li>Pengukur level air</li>
                           <li>Smart trash monitoring</li>
                           <li>IoT distance monitoring</li>

                        </ul>

                     </div>

                     <!-- SPESIFIKASI -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           ⚙️ Spesifikasi HC-SR04
                        </h5>

                        <div class="table-responsive">

                           <table class="table table-borderless table-spec">

                              <tbody>

                                 <tr>

                                    <td width="35%">
                                       <strong>Sensor Type</strong>
                                    </td>

                                    <td>
                                       HC-SR04 Ultrasonic Sensor
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
                                       <strong>Detection Range</strong>
                                    </td>

                                    <td>
                                       2cm - 400cm
                                    </td>

                                 </tr>

                                 <tr>

                                    <td>
                                       <strong>Accuracy</strong>
                                    </td>

                                    <td>
                                       ±3mm
                                    </td>

                                 </tr>

                                 <tr>

                                    <td>
                                       <strong>Frequency</strong>
                                    </td>

                                    <td>
                                       40KHz
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
                           🔧 Cara Menggunakan Sensor Ultrasonik HC-SR04
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
                              2. Hubungkan Pin Trigger dan Echo
                           </div>

                           <small class="text-muted">
                              Hubungkan pin TRIG dan ECHO ke pin digital
                              mikrokontroler untuk proses pengukuran jarak.
                           </small>

                        </div>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              3. Upload Program
                           </div>

                           <small class="text-muted">
                              Upload program Arduino untuk mengirim gelombang
                              ultrasonik dan membaca waktu pantulannya.
                           </small>

                        </div>

                        <div class="step-card mb-0">

                           <div class="fw-semibold mb-2">
                              4. Uji Pengukuran Jarak
                           </div>

                           <small class="text-muted">
                              Arahkan sensor ke suatu objek dan amati hasil
                              pengukuran jarak melalui Serial Monitor.
                           </small>

                        </div>

                     </div>

                     <!-- FUNGSI -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           📍 Penggunaan Sensor Ultrasonik
                        </h5>

                        <div class="row">

                           <div class="col-md-6 mb-3">

                              <div class="usage-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="usage-icon">

                                       <i class="ti ti-car"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Smart Parking
                                       </div>

                                       <small class="text-muted">
                                          Sistem parkir otomatis
                                       </small>

                                    </div>

                                 </div>

                              </div>

                           </div>

                           <div class="col-md-6 mb-3">

                              <div class="usage-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="usage-icon">

                                       <i class="ti ti-robot"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Robot Avoidance
                                       </div>

                                       <small class="text-muted">
                                          Deteksi halangan robot
                                       </small>

                                    </div>

                                 </div>

                              </div>

                           </div>

                           <div class="col-md-6 mb-3">

                              <div class="usage-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="usage-icon">

                                       <i class="ti ti-droplet"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Water Level
                                       </div>

                                       <small class="text-muted">
                                          Monitoring level air
                                       </small>

                                    </div>

                                 </div>

                              </div>

                           </div>

                           <div class="col-md-6 mb-3">

                              <div class="usage-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="usage-icon">

                                       <i class="ti ti-trash"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Smart Trash
                                       </div>

                                       <small class="text-muted">
                                          Monitoring tempat sampah
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
                                 💻 Contoh Program Ultrasonik
                              </h5>

                              <small class="text-muted">
                                 Membaca jarak menggunakan HC-SR04
                              </small>

                           </div>

                           <button class="btn btn-primary btn-sm">

                              <i class="ti ti-copy"></i>
                              Copy Code

                           </button>

                        </div>

                        <div class="code-box">

                           <div class="code-header">

                              ultrasonic_example.ino

                           </div>

                           <div class="code-content">
                              int trigPin = 9;
                              int echoPin = 10;

                              long duration;
                              int distance;

                              void setup() {

                              pinMode(trigPin, OUTPUT);
                              pinMode(echoPin, INPUT);

                              Serial.begin(9600);

                              }

                              void loop() {

                              digitalWrite(trigPin, LOW);
                              delayMicroseconds(2);

                              digitalWrite(trigPin, HIGH);
                              delayMicroseconds(10);

                              digitalWrite(trigPin, LOW);

                              duration = pulseIn(echoPin, HIGH);

                              distance = duration * 0.034 / 2;

                              Serial.print("Distance: ");
                              Serial.print(distance);
                              Serial.println(" cm");

                              delay(500);

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
                           🔌 Pin HC-SR04
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
                                 TRIG
                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    Trigger Pin
                                 </div>

                                 <small class="text-muted">
                                    Mengirim sinyal ultrasonik
                                 </small>

                              </div>

                           </div>

                        </div>

                        <!-- ITEM -->
                        <div class="pin-card p-3">

                           <div class="d-flex align-items-center gap-3">

                              <div class="pin-icon">
                                 ECHO
                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    Echo Pin
                                 </div>

                                 <small class="text-muted">
                                    Menerima pantulan sinyal
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
                              Gelombang Ultrasonik
                           </div>

                           <small class="text-muted">
                              Sensor menggunakan gelombang suara frekuensi tinggi.
                           </small>

                        </div>

                        <div class="spec-box mb-3">

                           <div class="fw-semibold mb-2">
                              Pantulan Objek
                           </div>

                           <small class="text-muted">
                              Jarak dihitung berdasarkan waktu pantulan gelombang.
                           </small>

                        </div>

                        <div class="spec-box">

                           <div class="fw-semibold mb-2">
                              Hindari Permukaan Lunak
                           </div>

                           <small class="text-muted">
                              Permukaan lunak dapat menyerap gelombang ultrasonik.
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