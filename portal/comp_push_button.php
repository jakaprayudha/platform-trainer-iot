<!doctype html>
<html lang="en">

<head>
   <?php require 'partial-head.php' ?>

   <style>
      body {
         background: #f8fafc;
      }

      .component-banner {
         background: linear-gradient(135deg, #0f172a, #2563eb, #ea580c);
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
         background: rgba(255, 255, 255, .9);
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
         color: #f97316;
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
         border-color: #2563eb;
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

      .pin-icon {
         width: 56px;
         height: 56px;
         border-radius: 18px;
         background: linear-gradient(135deg, #2563eb, #7c3aed);
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
                        🔘 Uraian Komponen Push Button
                     </h4>

                     <p class="text-muted mb-0">
                        Materi pembelajaran trainer kit IoT & elektronika dasar
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
                                    Electronic Component
                                 </span>

                                 <span class="badge bg-light text-dark">
                                    Basic Input Module
                                 </span>

                              </div>

                              <h2 class="fw-bold text-white mb-3">
                                 Push Button Switch
                              </h2>

                              <p class="mb-4"
                                 style="max-width:720px;">

                                 Push button adalah komponen input elektronik
                                 yang digunakan untuk memberikan sinyal ON/OFF
                                 sementara pada sistem mikrokontroler dan IoT.

                              </p>

                              <div class="d-flex flex-wrap gap-5">

                                 <div>

                                    <small>Type</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       Tactile Switch
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Status</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       NO / NC
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Function</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       Digital Input
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Usage</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       Input Control
                                    </h3>

                                 </div>

                              </div>

                           </div>

                           <div class="col-lg-4">

                              <div class="component-preview">

                                 <i class="ti ti-hand-click"></i>

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

                           <i class="ti ti-click"></i>

                        </div>

                        <h5 class="fw-bold">
                           Easy Input
                        </h5>

                        <small class="text-muted">
                           Mudah digunakan sebagai input
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
                           Respon cepat saat ditekan
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card feature-card p-4 text-center">

                        <div class="feature-icon soft-warning mx-auto mb-3">

                           <i class="ti ti-cpu"></i>

                        </div>

                        <h5 class="fw-bold">
                           Arduino Ready
                        </h5>

                        <small class="text-muted">
                           Cocok untuk mikrokontroler
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card feature-card p-4 text-center">

                        <div class="feature-icon soft-danger mx-auto mb-3">

                           <i class="ti ti-settings"></i>

                        </div>

                        <h5 class="fw-bold">
                           IoT Control
                        </h5>

                        <small class="text-muted">
                           Digunakan pada sistem IoT
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
                           📖 Penjelasan Push Button
                        </h5>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           Push button adalah saklar elektronik yang bekerja
                           ketika ditekan oleh pengguna. Saat tombol ditekan,
                           arus listrik akan mengalir dan memberikan sinyal
                           digital HIGH atau LOW ke mikrokontroler.

                        </p>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           Push button banyak digunakan pada:
                        </p>

                        <ul class="text-muted"
                           style="line-height:2;">

                           <li>Kontrol menu sistem</li>
                           <li>Input user interface</li>
                           <li>Smart home switch</li>
                           <li>Start / Stop automation</li>
                           <li>Kontrol robotika dan IoT</li>

                        </ul>

                     </div>

                     <!-- SPESIFIKASI -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           ⚙️ Spesifikasi Push Button
                        </h5>

                        <div class="table-responsive">

                           <table class="table table-borderless table-spec">

                              <tbody>

                                 <tr>

                                    <td width="35%">
                                       <strong>Component Type</strong>
                                    </td>

                                    <td>
                                       Tactile Push Button
                                    </td>

                                 </tr>

                                 <tr>

                                    <td>
                                       <strong>Function</strong>
                                    </td>

                                    <td>
                                       Digital Input Switch
                                    </td>

                                 </tr>

                                 <tr>

                                    <td>
                                       <strong>Operation</strong>
                                    </td>

                                    <td>
                                       Momentary Switch
                                    </td>

                                 </tr>

                                 <tr>

                                    <td>
                                       <strong>Status</strong>
                                    </td>

                                    <td>
                                       Normally Open (NO)
                                    </td>

                                 </tr>

                                 <tr>

                                    <td>
                                       <strong>Voltage</strong>
                                    </td>

                                    <td>
                                       3.3V - 5V
                                    </td>

                                 </tr>

                                 <tr>

                                    <td>
                                       <strong>Pin</strong>
                                    </td>

                                    <td>
                                       4 Pin
                                    </td>

                                 </tr>

                              </tbody>

                           </table>

                        </div>

                     </div>

                     <!-- LANGKAH -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           🔧 Cara Kerja Push Button
                        </h5>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              1. Kondisi Normal
                           </div>

                           <small class="text-muted">
                              Saat tidak ditekan, rangkaian terbuka dan tidak ada arus.
                           </small>

                        </div>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              2. Tombol Ditekan
                           </div>

                           <small class="text-muted">
                              Kontak internal terhubung dan arus mengalir.
                           </small>

                        </div>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              3. Sinyal Dibaca
                           </div>

                           <small class="text-muted">
                              Arduino membaca sinyal HIGH atau LOW dari button.
                           </small>

                        </div>

                        <div class="step-card mb-0">

                           <div class="fw-semibold mb-2">
                              4. Tombol Dilepas
                           </div>

                           <small class="text-muted">
                              Kontak kembali terbuka dan arus berhenti.
                           </small>

                        </div>

                     </div>

                     <!-- FUNGSI -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           📍 Penggunaan Push Button
                        </h5>

                        <div class="row">

                           <div class="col-md-6 mb-3">

                              <div class="usage-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="usage-icon">

                                       <i class="ti ti-hand-click"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          User Input
                                       </div>

                                       <small class="text-muted">
                                          Input perintah dari pengguna
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
                                          Start & Stop Control
                                       </div>

                                       <small class="text-muted">
                                          Mengontrol proses mulai dan berhenti
                                       </small>

                                    </div>

                                 </div>

                              </div>

                           </div>

                           <div class="col-md-6 mb-3">

                              <div class="usage-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="usage-icon">

                                       <i class="ti ti-adjustments"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Menu Navigation
                                       </div>

                                       <small class="text-muted">
                                          Navigasi menu pada sistem embedded
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
                                          IoT Interaction
                                       </div>

                                       <small class="text-muted">
                                          Interaksi pengguna pada perangkat IoT
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
                                 💻 Contoh Program Push Button
                              </h5>

                              <small class="text-muted">
                                 Membaca status tombol menggunakan Arduino
                              </small>

                           </div>

                           <button class="btn btn-primary btn-sm">

                              <i class="ti ti-copy"></i>
                              Copy Code

                           </button>

                        </div>

                        <div class="code-box">

                           <div class="code-header">

                              push_button_example.ino

                           </div>

                           <div class="code-content">
                              int buttonPin = 2;
                              int ledPin = 13;

                              void setup() {

                              pinMode(buttonPin, INPUT);
                              pinMode(ledPin, OUTPUT);

                              }

                              void loop() {

                              int buttonState = digitalRead(buttonPin);

                              if(buttonState == HIGH){

                              digitalWrite(ledPin, HIGH);

                              } else {

                              digitalWrite(ledPin, LOW);

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
                           🔌 Struktur Push Button
                        </h5>

                        <!-- ITEM -->
                        <div class="pin-card p-3 mb-3">

                           <div class="d-flex align-items-center gap-3">

                              <div class="pin-icon">
                                 1
                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    Pin 1
                                 </div>

                                 <small class="text-muted">
                                    Input terminal
                                 </small>

                              </div>

                           </div>

                        </div>

                        <!-- ITEM -->
                        <div class="pin-card p-3 mb-3">

                           <div class="d-flex align-items-center gap-3">

                              <div class="pin-icon">
                                 2
                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    Pin 2
                                 </div>

                                 <small class="text-muted">
                                    Output terminal
                                 </small>

                              </div>

                           </div>

                        </div>

                        <!-- ITEM -->
                        <div class="pin-card p-3">

                           <div class="d-flex align-items-center gap-3">

                              <div class="pin-icon">
                                 SW
                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    Switch Contact
                                 </div>

                                 <small class="text-muted">
                                    Kontak internal tombol
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
                              Pull-Up Resistor
                           </div>

                           <small class="text-muted">
                              Gunakan resistor pull-up atau pull-down agar pembacaan stabil.
                           </small>

                        </div>

                        <div class="spec-box mb-3">

                           <div class="fw-semibold mb-2">
                              Debouncing
                           </div>

                           <small class="text-muted">
                              Push button dapat menghasilkan noise saat ditekan.
                           </small>

                        </div>

                        <div class="spec-box">

                           <div class="fw-semibold mb-2">
                              Input Digital
                           </div>

                           <small class="text-muted">
                              Cocok digunakan sebagai input digital mikrokontroler.
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