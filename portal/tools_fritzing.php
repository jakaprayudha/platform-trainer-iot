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
               #ef4444,
               #f97316,
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
                        🔌 Fritzing Circuit Design Software
                     </h4>

                     <p class="text-muted mb-0">
                        Materi pembelajaran Fritzing untuk desain rangkaian elektronika dan dokumentasi proyek Arduino
                     </p>

                  </div>

                  <div class="d-flex gap-2">

                     <button class="btn btn-light">

                        <i class="ti ti-download"></i>
                        Download Tools

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
                                    Design Software
                                 </span>

                                 <span class="badge bg-light text-dark">
                                    Fritzing
                                 </span>

                              </div>

                              <h2 class="fw-bold text-white mb-3">
                                 Fritzing Circuit Design Software
                              </h2>

                              <p class="mb-4"
                                 style="max-width:720px;">

                                 Fritzing merupakan software desain elektronika
                                 yang digunakan untuk membuat wiring diagram,
                                 schematic diagram dan PCB layout secara visual.
                                 Software ini sangat populer dalam pembelajaran
                                 Arduino, IoT dan embedded system karena mudah
                                 digunakan untuk mendokumentasikan proyek
                                 elektronika secara profesional.

                              </p>

                              <div class="d-flex flex-wrap gap-5">

                                 <div>

                                    <small>Software Type</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       Circuit Designer
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Main Feature</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       Wiring Diagram
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Platform</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       Multi OS
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Usage</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       Circuit Documentation
                                    </h3>

                                 </div>

                              </div>

                           </div>

                           <div class="col-lg-4">

                              <div class="component-preview">

                                 <i class="ti ti-circuit-resistor"
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

                           <i class="ti ti-plug-connected"></i>

                        </div>

                        <h5 class="fw-bold">
                           Wiring Diagram
                        </h5>

                        <small class="text-muted">
                           Membuat diagram koneksi komponen
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card feature-card p-4 text-center">

                        <div class="feature-icon soft-success mx-auto mb-3">

                           <i class="ti ti-route"></i>

                        </div>

                        <h5 class="fw-bold">
                           Schematic Design
                        </h5>

                        <small class="text-muted">
                           Mendesain skema rangkaian elektronik
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card feature-card p-4 text-center">

                        <div class="feature-icon soft-warning mx-auto mb-3">

                           <i class="ti ti-circuit-resistor"></i>

                        </div>

                        <h5 class="fw-bold">
                           PCB Layout
                        </h5>

                        <small class="text-muted">
                           Merancang layout PCB secara visual
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card feature-card p-4 text-center">

                        <div class="feature-icon soft-danger mx-auto mb-3">

                           <i class="ti ti-file-description"></i>

                        </div>

                        <h5 class="fw-bold">
                           Project Documentation
                        </h5>

                        <small class="text-muted">
                           Dokumentasi proyek Arduino dan IoT
                        </small>

                     </div>

                  </div>

               </div>

               <div class="row">

                  <!-- LEFT -->
                  <div class="col-lg-8">
                     <!-- PENJELASAN -->
                     <!-- PENJELASAN -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           📖 Penjelasan Fritzing
                        </h5>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           Fritzing merupakan software open-source yang digunakan
                           untuk membantu perancangan dan dokumentasi rangkaian
                           elektronika. Software ini menyediakan antarmuka visual
                           yang memudahkan pengguna dalam membuat wiring diagram,
                           schematic diagram dan PCB layout tanpa harus memiliki
                           pengalaman desain elektronika yang mendalam.

                        </p>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           Fritzing sangat populer di kalangan pelajar, mahasiswa,
                           maker dan pengembang IoT karena menyediakan berbagai
                           komponen elektronik seperti Arduino, ESP32, sensor,
                           modul komunikasi dan perangkat lainnya yang dapat
                           langsung digunakan dalam proses perancangan rangkaian.

                        </p>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           Selain digunakan untuk membuat diagram rangkaian,
                           Fritzing juga dapat digunakan untuk menghasilkan
                           desain PCB sederhana dan dokumentasi proyek yang
                           profesional. Oleh karena itu software ini banyak
                           digunakan dalam pembelajaran elektronika, robotika,
                           Internet of Things (IoT) dan pengembangan prototype
                           perangkat keras.

                        </p>

                     </div>
                     <!-- SPESIFIKASI -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           ⚙️ Spesifikasi Fritzing
                        </h5>

                        <div class="table-responsive">

                           <table class="table table-spec">

                              <tbody>

                                 <tr>
                                    <td width="35%">
                                       <strong>Software Name</strong>
                                    </td>
                                    <td>
                                       Fritzing
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Software Type</strong>
                                    </td>
                                    <td>
                                       Electronic Design Automation (EDA)
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
                                       <strong>Main Features</strong>
                                    </td>
                                    <td>
                                       Wiring Diagram, Schematic, PCB Layout
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Component Library</strong>
                                    </td>
                                    <td>
                                       Arduino, ESP32, Sensor, Module, IC
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>PCB Design Support</strong>
                                    </td>
                                    <td>
                                       Single Layer & Double Layer PCB
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Export Format</strong>
                                    </td>
                                    <td>
                                       PNG, JPG, SVG, PDF
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Project File</strong>
                                    </td>
                                    <td>
                                       .fzz
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Primary Usage</strong>
                                    </td>
                                    <td>
                                       Circuit Design & Project Documentation
                                    </td>
                                 </tr>

                              </tbody>

                           </table>

                        </div>

                     </div>
                     <!-- LANGKAH -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           🔧 Cara Menggunakan Fritzing
                        </h5>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              1. Install Fritzing
                           </div>

                           <small class="text-muted">
                              Download dan install software Fritzing sesuai
                              dengan sistem operasi yang digunakan.
                           </small>

                        </div>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              2. Buat Project Baru
                           </div>

                           <small class="text-muted">
                              Buka Fritzing kemudian buat project baru untuk
                              mulai mendesain rangkaian elektronika.
                           </small>

                        </div>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              3. Tambahkan Komponen
                           </div>

                           <small class="text-muted">
                              Pilih komponen dari Parts Library seperti
                              Arduino, sensor, LED, relay atau modul lainnya.
                           </small>

                        </div>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              4. Hubungkan Komponen
                           </div>

                           <small class="text-muted">
                              Buat koneksi antar komponen pada Breadboard View
                              dengan menarik kabel sesuai kebutuhan rangkaian.
                           </small>

                        </div>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              5. Periksa Schematic Diagram
                           </div>

                           <small class="text-muted">
                              Pindah ke Schematic View untuk melihat diagram
                              skematik yang dibuat secara otomatis.
                           </small>

                        </div>

                        <div class="step-card mb-0">

                           <div class="fw-semibold mb-2">
                              6. Simpan dan Export Project
                           </div>

                           <small class="text-muted">
                              Simpan project dalam format .fzz atau export
                              diagram menjadi gambar dan PDF untuk dokumentasi.
                           </small>

                        </div>

                     </div>
                     <!-- PENGGUNAAN -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           📍 Penggunaan Fritzing
                        </h5>

                        <div class="row">

                           <div class="col-md-6 mb-3">

                              <div class="usage-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="usage-icon">

                                       <i class="ti ti-plug-connected"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Wiring Diagram
                                       </div>

                                       <small class="text-muted">
                                          Membuat diagram koneksi komponen elektronika
                                       </small>

                                    </div>

                                 </div>

                              </div>

                           </div>

                           <div class="col-md-6 mb-3">

                              <div class="usage-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="usage-icon">

                                       <i class="ti ti-route"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Schematic Design
                                       </div>

                                       <small class="text-muted">
                                          Mendesain diagram skematik rangkaian
                                       </small>

                                    </div>

                                 </div>

                              </div>

                           </div>

                           <div class="col-md-6 mb-3">

                              <div class="usage-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="usage-icon">

                                       <i class="ti ti-circuit-resistor"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          PCB Design
                                       </div>

                                       <small class="text-muted">
                                          Membuat layout PCB untuk produksi
                                       </small>

                                    </div>

                                 </div>

                              </div>

                           </div>

                           <div class="col-md-6 mb-3">

                              <div class="usage-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="usage-icon">

                                       <i class="ti ti-file-description"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Project Documentation
                                       </div>

                                       <small class="text-muted">
                                          Dokumentasi proyek Arduino dan IoT
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

                     <!-- TOOL INFO -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           🛠️ Tool Information
                        </h5>

                        <div class="pin-card p-3 mb-3">

                           <div class="d-flex align-items-center gap-3">

                              <div class="pin-icon">
                                 OS
                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    Platform Support
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
                                 PCB
                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    Design Support
                                 </div>

                                 <small class="text-muted">
                                    Wiring, Schematic dan PCB Layout
                                 </small>

                              </div>

                           </div>

                        </div>

                        <div class="pin-card p-3">

                           <div class="d-flex align-items-center gap-3">

                              <div class="pin-icon">
                                 FZZ
                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    Project Format
                                 </div>

                                 <small class="text-muted">
                                    Menyimpan project dalam format .fzz
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
                              Visual Circuit Design
                           </div>

                           <small class="text-muted">
                              Fritzing memudahkan pembuatan diagram
                              rangkaian menggunakan antarmuka visual.
                           </small>

                        </div>

                        <div class="spec-box mb-3">

                           <div class="fw-semibold mb-2">
                              Library Komponen Lengkap
                           </div>

                           <small class="text-muted">
                              Menyediakan berbagai komponen seperti
                              Arduino, ESP32, sensor dan modul IoT.
                           </small>

                        </div>

                        <div class="spec-box">

                           <div class="fw-semibold mb-2">
                              Dokumentasi Proyek
                           </div>

                           <small class="text-muted">
                              Cocok digunakan untuk membuat dokumentasi
                              praktikum dan proyek elektronika.
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

                              <i class="ti ti-download"></i>
                              Download Fritzing

                           </button>

                           <button class="btn btn-success">

                              <i class="ti ti-layout-board"></i>
                              Create Diagram

                           </button>

                           <button class="btn btn-warning text-white">

                              <i class="ti ti-book"></i>
                              User Guide

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