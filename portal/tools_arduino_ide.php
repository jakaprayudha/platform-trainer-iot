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
               #006b75,
               #0097a7,
               #00bcd4);
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
                        💻 Arduino IDE Development Software
                     </h4>

                     <p class="text-muted mb-0">
                        Materi pembelajaran software Arduino IDE untuk pemrograman mikrokontroler
                     </p>

                  </div>

                  <div class="d-flex gap-2">
                     <a href="https://www.arduino.cc/en/software/" target='_blank'>
                        <button class="btn btn-light">

                           <i class="ti ti-download"></i>
                           Download Tools

                        </button>
                     </a>


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
                                    Development Software
                                 </span>

                                 <span class="badge bg-light text-dark">
                                    Arduino IDE
                                 </span>

                              </div>

                              <h2 class="fw-bold text-white mb-3">
                                 Arduino Integrated Development Environment
                              </h2>

                              <p class="mb-4"
                                 style="max-width:720px;">

                                 Arduino IDE adalah software resmi yang digunakan
                                 untuk menulis, mengompilasi dan mengunggah program
                                 ke berbagai board mikrokontroler seperti Arduino,
                                 ESP32 dan ESP8266. Software ini menjadi platform
                                 utama dalam pembelajaran elektronika, robotika
                                 dan Internet of Things (IoT).

                              </p>

                              <div class="d-flex flex-wrap gap-5">

                                 <div>

                                    <small>Software Type</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       IDE
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Language</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       C/C++
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Platform</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       Windows / Linux / macOS
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Usage</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       Embedded Programming
                                    </h3>

                                 </div>

                              </div>

                           </div>

                           <div class="col-lg-4">

                              <div class="component-preview">

                                 <i class="ti ti-code"
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

                           <i class="ti ti-code"></i>

                        </div>

                        <h5 class="fw-bold">
                           Code Editor
                        </h5>

                        <small class="text-muted">
                           Menulis dan mengedit program Arduino
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card feature-card p-4 text-center">

                        <div class="feature-icon soft-success mx-auto mb-3">

                           <i class="ti ti-upload"></i>

                        </div>

                        <h5 class="fw-bold">
                           Program Upload
                        </h5>

                        <small class="text-muted">
                           Upload sketch ke board mikrokontroler
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card feature-card p-4 text-center">

                        <div class="feature-icon soft-warning mx-auto mb-3">

                           <i class="ti ti-terminal-2"></i>

                        </div>

                        <h5 class="fw-bold">
                           Serial Monitor
                        </h5>

                        <small class="text-muted">
                           Monitoring data dan debugging realtime
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card feature-card p-4 text-center">

                        <div class="feature-icon soft-danger mx-auto mb-3">

                           <i class="ti ti-cpu"></i>

                        </div>

                        <h5 class="fw-bold">
                           Multi Board Support
                        </h5>

                        <small class="text-muted">
                           Mendukung Arduino, ESP32 dan ESP8266
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
                           📖 Penjelasan Arduino IDE
                        </h5>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           Arduino IDE (Integrated Development Environment)
                           merupakan software resmi yang digunakan untuk
                           menulis, mengedit, mengompilasi dan mengunggah
                           program ke berbagai board mikrokontroler seperti
                           Arduino Uno, Arduino Nano, ESP32 dan ESP8266.

                        </p>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           Arduino IDE menyediakan editor kode yang sederhana
                           namun powerful, sehingga memudahkan pengguna dalam
                           mengembangkan berbagai proyek elektronika, robotika,
                           Internet of Things (IoT) dan sistem embedded.
                           Bahasa pemrograman yang digunakan berbasis C/C++
                           dengan struktur program yang mudah dipelajari.

                        </p>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           Selain untuk menulis program, Arduino IDE juga
                           dilengkapi fitur Serial Monitor, Library Manager
                           dan Board Manager yang membantu proses debugging,
                           instalasi library serta konfigurasi berbagai jenis
                           board mikrokontroler secara praktis.

                        </p>

                     </div>
                     <!-- SPESIFIKASI -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           ⚙️ Spesifikasi Arduino IDE
                        </h5>

                        <div class="table-responsive">

                           <table class="table table-spec">

                              <tbody>

                                 <tr>
                                    <td width="35%">
                                       <strong>Software Name</strong>
                                    </td>
                                    <td>
                                       Arduino IDE
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Software Type</strong>
                                    </td>
                                    <td>
                                       Integrated Development Environment (IDE)
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Programming Language</strong>
                                    </td>
                                    <td>
                                       C / C++
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>License</strong>
                                    </td>
                                    <td>
                                       Open Source
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Supported Platform</strong>
                                    </td>
                                    <td>
                                       Windows, Linux, macOS
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Supported Boards</strong>
                                    </td>
                                    <td>
                                       Arduino, ESP32, ESP8266, STM32
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Main Features</strong>
                                    </td>
                                    <td>
                                       Code Editor, Compiler, Uploader
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Communication Tools</strong>
                                    </td>
                                    <td>
                                       Serial Monitor & Serial Plotter
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Library Support</strong>
                                    </td>
                                    <td>
                                       Library Manager
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Board Management</strong>
                                    </td>
                                    <td>
                                       Board Manager
                                    </td>
                                 </tr>

                              </tbody>

                           </table>

                        </div>

                     </div>
                     <!-- LANGKAH -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           🔧 Cara Menggunakan Arduino IDE
                        </h5>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              1. Install Arduino IDE
                           </div>

                           <small class="text-muted">
                              Download dan install Arduino IDE sesuai
                              dengan sistem operasi yang digunakan
                              (Windows, Linux atau macOS).
                           </small>

                        </div>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              2. Hubungkan Board ke Komputer
                           </div>

                           <small class="text-muted">
                              Sambungkan board Arduino atau ESP menggunakan
                              kabel USB agar dapat dikenali oleh Arduino IDE.
                           </small>

                        </div>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              3. Pilih Board dan Port
                           </div>

                           <small class="text-muted">
                              Buka menu Tools kemudian pilih jenis board
                              dan port komunikasi (COM Port) yang sesuai.
                           </small>

                        </div>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              4. Tulis atau Buka Program
                           </div>

                           <small class="text-muted">
                              Buat sketch baru atau buka contoh program
                              yang tersedia pada menu Examples.
                           </small>

                        </div>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              5. Verify Program
                           </div>

                           <small class="text-muted">
                              Klik tombol Verify untuk memeriksa apakah
                              program berhasil dikompilasi tanpa error.
                           </small>

                        </div>

                        <div class="step-card mb-0">

                           <div class="fw-semibold mb-2">
                              6. Upload Program ke Board
                           </div>

                           <small class="text-muted">
                              Klik tombol Upload untuk mengirim program
                              ke board dan jalankan hasilnya pada perangkat.
                           </small>

                        </div>

                     </div>
                     <!-- PENGGUNAAN -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           📍 Penggunaan Arduino IDE
                        </h5>

                        <div class="row">

                           <div class="col-md-6 mb-3">

                              <div class="usage-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="usage-icon">

                                       <i class="ti ti-code"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Programming Arduino
                                       </div>

                                       <small class="text-muted">
                                          Membuat dan mengedit program Arduino
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
                                          IoT Development
                                       </div>

                                       <small class="text-muted">
                                          Pengembangan proyek Internet of Things
                                       </small>

                                    </div>

                                 </div>

                              </div>

                           </div>

                           <div class="col-md-6 mb-3">

                              <div class="usage-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="usage-icon">

                                       <i class="ti ti-bug"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Debugging System
                                       </div>

                                       <small class="text-muted">
                                          Monitoring dan analisis data serial
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
                                          Embedded System
                                       </div>

                                       <small class="text-muted">
                                          Pemrograman mikrokontroler dan perangkat embedded
                                       </small>

                                    </div>

                                 </div>

                              </div>

                           </div>

                        </div>

                     </div>
                  </div>
                  <!-- RIGHT -->
                  <div class="col-lg-4">

                     <!-- REQUIREMENT -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           💻 System Requirements
                        </h5>

                        <div class="pin-card p-3 mb-3">

                           <div class="d-flex align-items-center gap-3">

                              <div class="pin-icon">
                                 OS
                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    Operating System
                                 </div>

                                 <small class="text-muted">
                                    Windows, Linux dan macOS
                                 </small>

                              </div>

                           </div>

                        </div>

                        <div class="pin-card p-3 mb-3">

                           <div class="d-flex align-items-center gap-3">

                              <div class="pin-icon">
                                 RAM
                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    Memory
                                 </div>

                                 <small class="text-muted">
                                    Minimal 4 GB RAM
                                 </small>

                              </div>

                           </div>

                        </div>

                        <div class="pin-card p-3">

                           <div class="d-flex align-items-center gap-3">

                              <div class="pin-icon">
                                 USB
                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    USB Connection
                                 </div>

                                 <small class="text-muted">
                                    Untuk upload program ke board
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
                              Open Source
                           </div>

                           <small class="text-muted">
                              Arduino IDE dapat digunakan secara gratis
                              dan didukung oleh komunitas global.
                           </small>

                        </div>

                        <div class="spec-box mb-3">

                           <div class="fw-semibold mb-2">
                              Multi Platform
                           </div>

                           <small class="text-muted">
                              Mendukung berbagai sistem operasi seperti
                              Windows, Linux dan macOS.
                           </small>

                        </div>

                        <div class="spec-box">

                           <div class="fw-semibold mb-2">
                              Multi Board Support
                           </div>

                           <small class="text-muted">
                              Dapat digunakan untuk Arduino, ESP32,
                              ESP8266 dan berbagai board lainnya.
                           </small>

                        </div>

                     </div>

                     <!-- QUICK ACTION -->
                     <div class="glass-card p-4 shadow-sm">

                        <h5 class="fw-bold mb-4">
                           🚀 Quick Action
                        </h5>

                        <div class="d-grid gap-3">
                           <a href="https://www.arduino.cc/en/software/" target='_blank'>
                              <button class="btn btn-primary">

                                 <i class="ti ti-download"></i>
                                 Download Arduino IDE

                              </button>
                           </a>


                           <button class="btn btn-success">

                              <i class="ti ti-code"></i>
                              Open Example Sketch

                           </button>

                           <button class="btn btn-warning text-white">

                              <i class="ti ti-book"></i>
                              Installation Guide

                           </button>

                           <button class="btn btn-danger">

                              <i class="ti ti-help-circle"></i>
                              Quiz Software

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