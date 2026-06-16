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
               #eab308,
               #f59e0b,
               #facc15);
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
         color: #fb923c;
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
         background: linear-gradient(135deg, #dc2626, #f59e0b);
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

      .detect-card {
         border-radius: 18px;
         border: 1px solid #eef2ff;
         padding: 18px;
         transition: .3s;
      }

      .detect-card:hover {
         transform: translateY(-3px);
         border-color: #dc2626;
      }

      .detect-icon {
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
                        ☀️ Uraian Komponen Sensor LDR
                     </h4>

                     <p class="text-muted mb-0">
                        Materi pembelajaran Light Dependent Resistor (LDR)
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
                                    Light Sensor
                                 </span>

                                 <span class="badge bg-light text-dark">
                                    LDR Module
                                 </span>

                              </div>

                              <h2 class="fw-bold text-white mb-3">
                                 Light Dependent Resistor (LDR)
                              </h2>

                              <p class="mb-4"
                                 style="max-width:720px;">

                                 Sensor LDR (Light Dependent Resistor) merupakan sensor
                                 yang digunakan untuk mendeteksi intensitas cahaya di
                                 lingkungan sekitar. Nilai resistansi LDR akan berubah
                                 sesuai dengan tingkat terang atau gelap yang diterima.

                              </p>

                              <div class="d-flex flex-wrap gap-5">

                                 <div>

                                    <small>Sensor Type</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       Light Sensor
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
                                       Analog
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Usage</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       Light Detection
                                    </h3>

                                 </div>

                              </div>

                           </div>

                           <div class="col-lg-4">

                              <div class="component-preview">

                                 <i class="ti ti-sun"
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

                     <div class="usage-card feature-card p-4 text-center">

                        <div class="feature-icon soft-primary mx-auto mb-3">

                           <i class="ti ti-sun"></i>

                        </div>

                        <h5 class="fw-bold">
                           Light Detection
                        </h5>

                        <small class="text-muted">
                           Mendeteksi intensitas cahaya
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="usage-card feature-card p-4 text-center">

                        <div class="feature-icon soft-success mx-auto mb-3">

                           <i class="ti ti-bulb"></i>

                        </div>

                        <h5 class="fw-bold">
                           Smart Lighting
                        </h5>

                        <small class="text-muted">
                           Kontrol lampu otomatis
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="usage-card feature-card p-4 text-center">

                        <div class="feature-icon soft-warning mx-auto mb-3">

                           <i class="ti ti-home"></i>

                        </div>

                        <h5 class="fw-bold">
                           Smart Home
                        </h5>

                        <small class="text-muted">
                           Monitoring pencahayaan ruangan
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="usage-card feature-card p-4 text-center">

                        <div class="feature-icon soft-danger mx-auto mb-3">

                           <i class="ti ti-chart-line"></i>

                        </div>

                        <h5 class="fw-bold">
                           Analog Reading
                        </h5>

                        <small class="text-muted">
                           Menghasilkan nilai analog cahaya
                        </small>

                     </div>

                  </div>

               </div>

               <div class="row">

                  <!-- LEFT -->
                  <div class="col-lg-8">

                     <!-- SPESIFIKASI -->
                     <!-- PENJELASAN -->
                     <div class="usage-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           📖 Penjelasan Sensor LDR
                        </h5>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           LDR (Light Dependent Resistor) merupakan sensor cahaya
                           yang memiliki nilai resistansi berubah sesuai dengan
                           intensitas cahaya yang diterima.

                        </p>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           Ketika cahaya yang diterima semakin terang maka nilai
                           resistansi LDR akan semakin kecil. Sebaliknya pada
                           kondisi gelap nilai resistansi akan meningkat.

                        </p>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           Sensor LDR banyak digunakan pada lampu otomatis,
                           smart home, monitoring lingkungan, solar tracker
                           dan berbagai sistem IoT berbasis cahaya.

                        </p>

                     </div>

                     <!-- SPESIFIKASI -->
                     <div class="usage-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           ⚙️ Spesifikasi Sensor LDR
                        </h5>

                        <div class="table-responsive">

                           <table class="table table-spec">

                              <tbody>

                                 <tr>
                                    <td width="35%">
                                       <strong>Sensor Type</strong>
                                    </td>
                                    <td>
                                       Light Dependent Resistor
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Operating Voltage</strong>
                                    </td>
                                    <td>
                                       3.3V - 5V
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Output Type</strong>
                                    </td>
                                    <td>
                                       Analog
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Sensing Parameter</strong>
                                    </td>
                                    <td>
                                       Light Intensity
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
                           🔧 Cara Menggunakan Sensor LDR
                        </h5>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              1. Hubungkan Sensor
                           </div>

                           <small class="text-muted">
                              Hubungkan pin VCC ke 3.3V atau 5V dan GND ke Ground
                              Arduino atau ESP32.
                           </small>

                        </div>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              2. Hubungkan Pin Output
                           </div>

                           <small class="text-muted">
                              Hubungkan pin AO (Analog Output) ke pin analog
                              Arduino untuk membaca intensitas cahaya.
                           </small>

                        </div>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              3. Upload Program
                           </div>

                           <small class="text-muted">
                              Upload program Arduino untuk membaca nilai analog
                              yang dihasilkan oleh sensor LDR.
                           </small>

                        </div>

                        <div class="step-card mb-0">

                           <div class="fw-semibold mb-2">
                              4. Uji Intensitas Cahaya
                           </div>

                           <small class="text-muted">
                              Arahkan sensor ke kondisi terang dan gelap kemudian
                              amati perubahan nilai pada Serial Monitor.
                           </small>

                        </div>

                     </div>

                     <!-- PENGGUNAAN -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           📍 Penggunaan Sensor LDR
                        </h5>

                        <div class="row">

                           <div class="col-md-6 mb-3">

                              <div class="usage-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="usage-icon">

                                       <i class="ti ti-bulb"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Automatic Lighting
                                       </div>

                                       <small class="text-muted">
                                          Lampu otomatis berdasarkan kondisi terang dan gelap
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
                                          Monitoring pencahayaan pada rumah pintar
                                       </small>

                                    </div>

                                 </div>

                              </div>

                           </div>

                           <div class="col-md-6 mb-3">

                              <div class="usage-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="usage-icon">

                                       <i class="ti ti-chart-line"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Light Monitoring
                                       </div>

                                       <small class="text-muted">
                                          Mengukur intensitas cahaya lingkungan
                                       </small>

                                    </div>

                                 </div>

                              </div>

                           </div>

                           <div class="col-md-6 mb-3">

                              <div class="usage-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="usage-icon">

                                       <i class="ti ti-sun"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Solar Tracker
                                       </div>

                                       <small class="text-muted">
                                          Mengikuti arah datangnya cahaya matahari
                                       </small>

                                    </div>

                                 </div>

                              </div>

                           </div>

                        </div>

                     </div>
                     <!-- PROGRAM -->
                     <div class="usage-card p-4 shadow-sm">

                        <div class="mb-4">

                           <h5 class="fw-bold mb-1">
                              💻 Contoh Program Sensor LDR
                           </h5>

                           <small class="text-muted">
                              Membaca intensitas cahaya menggunakan Arduino
                           </small>

                        </div>

                        <div class="code-box">

                           <div class="code-header">

                              ldr_sensor.ino

                           </div>

                           <div class="code-content">
                              <pre>
int ldrPin = A0;

void setup()
{
   Serial.begin(115200);
}

void loop()
{
   int lightValue =
      analogRead(ldrPin);

   Serial.print("Nilai Cahaya : ");
   Serial.println(lightValue);

   if(lightValue < 300)
   {
      Serial.println("Kondisi Gelap");
   }
   else if(lightValue < 700)
   {
      Serial.println("Kondisi Normal");
   }
   else
   {
      Serial.println("Kondisi Terang");
   }

   delay(500);
}
</pre>
                           </div>

                        </div>

                     </div>

                  </div>

                  <!-- RIGHT -->
                  <div class="col-lg-4">

                     <!-- PIN -->
                     <div class="usage-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           🔌 Pin Sensor LDR
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
                                 AO
                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    Analog Output
                                 </div>

                                 <small class="text-muted">
                                    Nilai intensitas cahaya
                                 </small>

                              </div>

                           </div>

                        </div>

                     </div>

                     <!-- INFORMASI -->
                     <div class="usage-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           📌 Informasi Penting
                        </h5>

                        <div class="spec-box mb-3">

                           <div class="fw-semibold mb-2">
                              Prinsip Kerja
                           </div>

                           <small class="text-muted">
                              Nilai resistansi berubah sesuai intensitas
                              cahaya yang diterima sensor.
                           </small>

                        </div>

                        <div class="spec-box mb-3">

                           <div class="fw-semibold mb-2">
                              Kondisi Terang
                           </div>

                           <small class="text-muted">
                              Semakin terang cahaya, resistansi LDR
                              semakin kecil dan nilai ADC meningkat.
                           </small>

                        </div>

                        <div class="spec-box">

                           <div class="fw-semibold mb-2">
                              Kondisi Gelap
                           </div>

                           <small class="text-muted">
                              Semakin gelap lingkungan, resistansi
                              meningkat dan nilai pembacaan berubah.
                           </small>

                        </div>

                     </div>

                     <!-- QUICK ACTION -->
                     <div class="usage-card p-4 shadow-sm">

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