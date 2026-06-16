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
               #6d28d9,
               #2563eb);
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
                        🔢 Uraian Komponen IC MAX7219
                     </h4>

                     <p class="text-muted mb-0">
                        Materi pembelajaran Driver LED Matrix MAX7219 untuk IoT & Embedded System
                     </p>

                  </div>

                  <div class="d-flex gap-2">

                     <button class="btn btn-primary">

                        <i class="ti ti-player-play"></i>
                        Start Learning

                     </button>

                  </div>

               </div>

               <!-- HERO -->
               <div class="card border-0 shadow-sm mb-4">

                  <div class="card-body component-banner p-5 text-white"
                     style="background:linear-gradient(135deg,#7c3aed,#2563eb);">

                     <div class="banner-content">

                        <div class="row align-items-center">

                           <div class="col-lg-8">

                              <div class="d-flex gap-2 mb-3">

                                 <span class="badge bg-success">
                                    Display Driver
                                 </span>

                                 <span class="badge bg-light text-dark">
                                    MAX7219 Controller
                                 </span>

                              </div>

                              <h2 class="fw-bold text-white mb-3">
                                 IC MAX7219 LED Matrix Driver
                              </h2>

                              <p class="mb-4"
                                 style="max-width:720px;">

                                 MAX7219 adalah IC driver yang digunakan untuk
                                 mengendalikan LED Matrix 8x8 maupun Seven Segment Display
                                 menggunakan komunikasi serial sehingga menghemat penggunaan
                                 pin mikrokontroler pada project IoT dan Embedded System.

                              </p>

                              <div class="d-flex flex-wrap gap-5">

                                 <div>

                                    <small>Type</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       Driver IC
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Display</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       LED Matrix
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Voltage</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       5V DC
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Usage</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       Running Text
                                    </h3>

                                 </div>

                              </div>

                           </div>

                           <div class="col-lg-4">

                              <div class="component-preview">

                                 <i class="ti ti-grid-dots"></i>

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

                           <i class="ti ti-grid-dots"></i>

                        </div>

                        <h5 class="fw-bold">
                           LED Matrix
                        </h5>

                        <small class="text-muted">
                           Mengendalikan LED Matrix
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card feature-card p-4 text-center">

                        <div class="feature-icon soft-success mx-auto mb-3">

                           <i class="ti ti-text-size"></i>

                        </div>

                        <h5 class="fw-bold">
                           Running
                        </h5>

                        <small class="text-muted">
                           Menampilkan teks berjalan
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card feature-card p-4 text-center">

                        <div class="feature-icon soft-warning mx-auto mb-3">

                           <i class="ti ti-device-desktop"></i>

                        </div>

                        <h5 class="fw-bold">
                           Serial
                        </h5>

                        <small class="text-muted">
                           Menggunakan 3 pin
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card feature-card p-4 text-center">

                        <div class="feature-icon soft-info mx-auto mb-3">

                           <i class="ti ti-link"></i>

                        </div>

                        <h5 class="fw-bold">
                           Daisy Chain
                        </h5>

                        <small class="text-muted">
                           Dapat disusun berantai
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
                           📖 Penjelasan IC MAX7219
                        </h5>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           MAX7219 merupakan integrated circuit (IC) yang dirancang
                           untuk mengontrol LED Matrix 8x8 dan Seven Segment Display.
                           IC ini mampu mengatur nyala LED secara efisien dengan hanya
                           menggunakan tiga jalur komunikasi serial.

                        </p>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           MAX7219 sangat populer pada project running text,
                           scoreboard digital, jam digital, display informasi
                           dan berbagai sistem visual berbasis mikrokontroler.

                        </p>

                     </div>

                     <!-- SPESIFIKASI -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           ⚙️ Spesifikasi MAX7219
                        </h5>

                        <div class="table-responsive">

                           <table class="table table-spec">

                              <tbody>

                                 <tr>

                                    <td width="35%">
                                       <strong>IC Driver</strong>
                                    </td>

                                    <td>
                                       MAX7219
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
                                       <strong>Communication</strong>
                                    </td>

                                    <td>
                                       SPI Like Serial
                                    </td>

                                 </tr>

                                 <tr>

                                    <td>
                                       <strong>Display Type</strong>
                                    </td>

                                    <td>
                                       LED Matrix 8x8
                                    </td>

                                 </tr>

                                 <tr>

                                    <td>
                                       <strong>Control Pin</strong>
                                    </td>

                                    <td>
                                       DIN, CS, CLK
                                    </td>

                                 </tr>

                                 <tr>

                                    <td>
                                       <strong>Daisy Chain</strong>
                                    </td>

                                    <td>
                                       Supported
                                    </td>

                                 </tr>

                              </tbody>

                           </table>

                        </div>

                     </div>

                     <!-- LANGKAH -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           🔧 Cara Menggunakan IC MAX7219
                        </h5>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              1. Hubungkan Modul MAX7219
                           </div>

                           <small class="text-muted">
                              Hubungkan pin VCC ke 5V dan GND ke Ground Arduino
                              atau ESP32.
                           </small>

                        </div>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              2. Hubungkan Pin Komunikasi
                           </div>

                           <small class="text-muted">
                              Hubungkan pin DIN, CS dan CLK ke pin digital
                              mikrokontroler untuk komunikasi data.
                           </small>

                        </div>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              3. Install Library MAX7219
                           </div>

                           <small class="text-muted">
                              Install library LedControl atau MD_MAX72XX
                              melalui Arduino IDE untuk mempermudah pengendalian
                              LED Matrix maupun 7 Segment.
                           </small>

                        </div>

                        <div class="step-card mb-0">

                           <div class="fw-semibold mb-2">
                              4. Upload Program dan Uji Tampilan
                           </div>

                           <small class="text-muted">
                              Upload program kemudian tampilkan angka,
                              karakter, animasi atau running text pada
                              modul yang dikendalikan oleh MAX7219.
                           </small>

                        </div>

                     </div>

                     <!-- FUNGSI -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           📍 Penggunaan IC MAX7219
                        </h5>

                        <div class="row">

                           <div class="col-md-6 mb-3">

                              <div class="usage-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="usage-icon">

                                       <i class="ti ti-layout-grid"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          LED Matrix Control
                                       </div>

                                       <small class="text-muted">
                                          Mengendalikan tampilan LED Matrix 8x8
                                       </small>

                                    </div>

                                 </div>

                              </div>

                           </div>

                           <div class="col-md-6 mb-3">

                              <div class="usage-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="usage-icon">

                                       <i class="ti ti-writing-sign"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Running Text
                                       </div>

                                       <small class="text-muted">
                                          Menampilkan teks berjalan
                                       </small>

                                    </div>

                                 </div>

                              </div>

                           </div>

                           <div class="col-md-6 mb-3">

                              <div class="usage-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="usage-icon">

                                       <i class="ti ti-clock"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Digital Clock
                                       </div>

                                       <small class="text-muted">
                                          Menampilkan jam digital
                                       </small>

                                    </div>

                                 </div>

                              </div>

                           </div>

                           <div class="col-md-6 mb-3">

                              <div class="usage-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="usage-icon">

                                       <i class="ti ti-numbers"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Numeric Display
                                       </div>

                                       <small class="text-muted">
                                          Menampilkan angka dan counter digital
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
                                 💻 Contoh Program IC MAX7219
                              </h5>

                              <small class="text-muted">
                                 Menampilkan karakter pada LED Matrix 8x8
                              </small>

                           </div>

                           <button class="btn btn-primary btn-sm">

                              <i class="ti ti-copy"></i>
                              Copy Code

                           </button>

                        </div>

                        <div class="code-box">

                           <div class="code-header">

                              max7219_matrix_example.ino

                           </div>

                           <div class="code-content">
                              <pre>
#include &lt;LedControl.h&gt;

LedControl lc = LedControl(
   12, // DIN
   11, // CLK
   10, // CS
   1
);

byte smile[8] = {
   B00111100,
   B01000010,
   B10100101,
   B10000001,
   B10100101,
   B10011001,
   B01000010,
   B00111100
};

void setup()
{
   lc.shutdown(0,false);
   lc.setIntensity(0,8);
   lc.clearDisplay(0);

   for(int i=0;i<8;i++)
   {
      lc.setRow(
         0,
         i,
         smile[i]
      );
   }
}

void loop()
{

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
                           🔌 Pin MAX7219
                        </h5>

                        <div class="pin-card p-3 mb-3">

                           <div class="d-flex align-items-center gap-3">

                              <div class="pin-icon">
                                 DIN
                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    Data Input
                                 </div>

                                 <small class="text-muted">
                                    Jalur data serial
                                 </small>

                              </div>

                           </div>

                        </div>

                        <div class="pin-card p-3 mb-3">

                           <div class="d-flex align-items-center gap-3">

                              <div class="pin-icon">
                                 CS
                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    Chip Select
                                 </div>

                                 <small class="text-muted">
                                    Pemilih perangkat
                                 </small>

                              </div>

                           </div>

                        </div>

                        <div class="pin-card p-3 mb-3">

                           <div class="d-flex align-items-center gap-3">

                              <div class="pin-icon">
                                 CLK
                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    Clock
                                 </div>

                                 <small class="text-muted">
                                    Sinyal clock serial
                                 </small>

                              </div>

                           </div>

                        </div>

                        <div class="pin-card p-3">

                           <div class="d-flex align-items-center gap-3">

                              <div class="pin-icon">
                                 VCC
                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    Power
                                 </div>

                                 <small class="text-muted">
                                    Supply 5V dan GND
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
                              Driver Display
                           </div>

                           <small class="text-muted">
                              MAX7219 digunakan untuk mengontrol LED Matrix dan Seven Segment.
                           </small>

                        </div>

                        <div class="spec-box mb-3">

                           <div class="fw-semibold mb-2">
                              Daisy Chain
                           </div>

                           <small class="text-muted">
                              Beberapa modul dapat dihubungkan secara berantai.
                           </small>

                        </div>

                        <div class="spec-box">

                           <div class="fw-semibold mb-2">
                              Running Text
                           </div>

                           <small class="text-muted">
                              Sangat populer untuk display tulisan berjalan.
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