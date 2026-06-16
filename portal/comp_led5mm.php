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
               #f59e0b,
               #f97316,
               #ef4444);
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
                        💡 Uraian Komponen LED 5mm
                     </h4>

                     <p class="text-muted mb-0">
                        Materi pembelajaran LED 5mm sebagai indikator cahaya pada sistem elektronika dan mikrokontroler
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
                                    Output Component
                                 </span>

                                 <span class="badge bg-light text-dark">
                                    LED 5mm
                                 </span>

                              </div>

                              <h2 class="fw-bold text-white mb-3">
                                 LED 5mm Indicator Light
                              </h2>

                              <p class="mb-4"
                                 style="max-width:720px;">

                                 LED (Light Emitting Diode) 5mm merupakan komponen
                                 elektronika yang digunakan untuk menghasilkan cahaya
                                 sebagai indikator visual. LED banyak digunakan pada
                                 rangkaian elektronika, sistem mikrokontroler, IoT,
                                 robotika dan berbagai proyek pembelajaran sebagai
                                 penanda status atau output digital.

                              </p>

                              <div class="d-flex flex-wrap gap-5">

                                 <div>

                                    <small>Component Type</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       Light Indicator
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Voltage</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       2V - 3.3V
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Output</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       Visible Light
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Usage</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       Status Indicator
                                    </h3>

                                 </div>

                              </div>

                           </div>

                           <div class="col-lg-4">

                              <div class="component-preview">

                                 <i class="ti ti-bulb"
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

                        <div class="feature-icon soft-warning mx-auto mb-3">

                           <i class="ti ti-bulb"></i>

                        </div>

                        <h5 class="fw-bold">
                           Light Indicator
                        </h5>

                        <small class="text-muted">
                           Indikator visual berbasis cahaya
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card feature-card p-4 text-center">

                        <div class="feature-icon soft-success mx-auto mb-3">

                           <i class="ti ti-bolt"></i>

                        </div>

                        <h5 class="fw-bold">
                           Fast Response
                        </h5>

                        <small class="text-muted">
                           Menyala dan mati dengan cepat
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card feature-card p-4 text-center">

                        <div class="feature-icon soft-primary mx-auto mb-3">

                           <i class="ti ti-cpu"></i>

                        </div>

                        <h5 class="fw-bold">
                           Arduino Ready
                        </h5>

                        <small class="text-muted">
                           Mudah dikendalikan mikrokontroler
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card feature-card p-4 text-center">

                        <div class="feature-icon soft-danger mx-auto mb-3">

                           <i class="ti ti-eye"></i>

                        </div>

                        <h5 class="fw-bold">
                           Visual Output
                        </h5>

                        <small class="text-muted">
                           Menampilkan status sistem secara visual
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
                           📖 Penjelasan LED 5mm
                        </h5>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           LED (Light Emitting Diode) 5mm merupakan komponen
                           elektronika yang dapat menghasilkan cahaya ketika
                           dialiri arus listrik. LED termasuk salah satu
                           komponen output yang paling banyak digunakan dalam
                           rangkaian elektronika maupun sistem mikrokontroler.

                        </p>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           LED memiliki dua kaki yaitu Anoda (+) dan Katoda (-).
                           Saat diberikan tegangan yang sesuai, LED akan memancarkan
                           cahaya dengan konsumsi daya yang rendah, umur pakai yang
                           panjang dan respon yang sangat cepat dibandingkan lampu
                           konvensional.

                        </p>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           LED 5mm banyak digunakan sebagai indikator status,
                           lampu notifikasi, output visual pada proyek Arduino,
                           robotika, IoT, sistem kontrol otomatis dan berbagai
                           aplikasi elektronika lainnya yang membutuhkan
                           indikator cahaya sederhana namun efektif.

                        </p>

                     </div>
                     <!-- SPESIFIKASI -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           ⚙️ Spesifikasi LED 5mm
                        </h5>

                        <div class="table-responsive">

                           <table class="table table-spec">

                              <tbody>

                                 <tr>
                                    <td width="35%">
                                       <strong>Component Type</strong>
                                    </td>
                                    <td>
                                       Light Emitting Diode (LED)
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>LED Diameter</strong>
                                    </td>
                                    <td>
                                       5 mm
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Operating Voltage</strong>
                                    </td>
                                    <td>
                                       2V - 3.3V DC
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Operating Current</strong>
                                    </td>
                                    <td>
                                       10 - 20 mA
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Light Color</strong>
                                    </td>
                                    <td>
                                       Red / Green / Blue / Yellow / White
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Response Time</strong>
                                    </td>
                                    <td>
                                       Very Fast
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Polarity</strong>
                                    </td>
                                    <td>
                                       Anode (+) dan Cathode (-)
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Power Consumption</strong>
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
                                       Arduino, ESP32, ESP8266, STM32
                                    </td>
                                 </tr>

                              </tbody>

                           </table>

                        </div>

                     </div>
                     <!-- LANGKAH -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           🔧 Cara Menggunakan LED 5mm
                        </h5>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              1. Kenali Polaritas LED
                           </div>

                           <small class="text-muted">
                              Pastikan kaki Anoda (+) dan Katoda (-) LED
                              dikenali dengan benar. Kaki yang lebih panjang
                              biasanya merupakan Anoda.
                           </small>

                        </div>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              2. Pasang Resistor Pembatas Arus
                           </div>

                           <small class="text-muted">
                              Hubungkan resistor 220Ω hingga 330Ω secara seri
                              dengan LED untuk melindungi LED dari arus berlebih.
                           </small>

                        </div>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              3. Hubungkan ke Arduino
                           </div>

                           <small class="text-muted">
                              Sambungkan Anoda LED ke pin digital Arduino
                              melalui resistor dan Katoda ke Ground (GND).
                           </small>

                        </div>

                        <div class="step-card mb-0">

                           <div class="fw-semibold mb-2">
                              4. Upload Program dan Uji LED
                           </div>

                           <small class="text-muted">
                              Upload program Arduino kemudian amati LED
                              menyala, mati atau berkedip sesuai instruksi program.
                           </small>

                        </div>

                     </div>
                     <!-- PENGGUNAAN -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           📍 Penggunaan LED 5mm
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
                                          Status Indicator
                                       </div>

                                       <small class="text-muted">
                                          Menunjukkan status perangkat atau sistem
                                       </small>

                                    </div>

                                 </div>

                              </div>

                           </div>

                           <div class="col-md-6 mb-3">

                              <div class="usage-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="usage-icon">

                                       <i class="ti ti-alert-circle"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Warning Indicator
                                       </div>

                                       <small class="text-muted">
                                          Indikator peringatan atau alarm visual
                                       </small>

                                    </div>

                                 </div>

                              </div>

                           </div>

                           <div class="col-md-6 mb-3">

                              <div class="usage-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="usage-icon">

                                       <i class="ti ti-traffic-lights"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Traffic Light System
                                       </div>

                                       <small class="text-muted">
                                          Simulasi lampu lalu lintas otomatis
                                       </small>

                                    </div>

                                 </div>

                              </div>

                           </div>

                           <div class="col-md-6 mb-3">

                              <div class="usage-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="usage-icon">

                                       <i class="ti ti-cpu"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Arduino Projects
                                       </div>

                                       <small class="text-muted">
                                          Output visual pada proyek mikrokontroler
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
                                 💻 Contoh Program LED 5mm
                              </h5>

                              <small class="text-muted">
                                 Mengontrol LED 5mm menggunakan Arduino
                              </small>

                           </div>

                           <button class="btn btn-primary btn-sm">

                              <i class="ti ti-copy"></i>
                              Copy Code

                           </button>

                        </div>

                        <div class="code-box">

                           <div class="code-header">

                              led_5mm_example.ino

                           </div>

                           <div class="code-content">
                              <pre>
                                    int ledPin = 8;

                                    void setup()
                                    {
                                       pinMode(
                                          ledPin,
                                          OUTPUT
                                       );
                                    }

                                    void loop()
                                    {
                                       digitalWrite(
                                          ledPin,
                                          HIGH
                                       );

                                       delay(1000);

                                       digitalWrite(
                                          ledPin,
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
                           🔌 Kaki LED 5mm
                        </h5>

                        <div class="pin-card p-3 mb-3">

                           <div class="d-flex align-items-center gap-3">

                              <div class="pin-icon">
                                 +
                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    Anoda (+)
                                 </div>

                                 <small class="text-muted">
                                    Kaki positif LED (lebih panjang)
                                 </small>

                              </div>

                           </div>

                        </div>

                        <div class="pin-card p-3">

                           <div class="d-flex align-items-center gap-3">

                              <div class="pin-icon">
                                 -
                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    Katoda (-)
                                 </div>

                                 <small class="text-muted">
                                    Kaki negatif LED (lebih pendek)
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
                              Gunakan Resistor
                           </div>

                           <small class="text-muted">
                              LED harus menggunakan resistor 220Ω hingga
                              330Ω untuk membatasi arus dan mencegah kerusakan.
                           </small>

                        </div>

                        <div class="spec-box mb-3">

                           <div class="fw-semibold mb-2">
                              Perhatikan Polaritas
                           </div>

                           <small class="text-muted">
                              Pemasangan terbalik antara Anoda dan Katoda
                              menyebabkan LED tidak dapat menyala.
                           </small>

                        </div>

                        <div class="spec-box">

                           <div class="fw-semibold mb-2">
                              Konsumsi Daya Rendah
                           </div>

                           <small class="text-muted">
                              LED memiliki konsumsi daya yang kecil dan
                              cocok digunakan sebagai indikator visual.
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