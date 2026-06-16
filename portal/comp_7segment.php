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
               #0f172a,
               #1e293b,
               #334155);
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
                        🔢 Uraian Komponen 7 Segment Display
                     </h4>

                     <p class="text-muted mb-0">
                        Materi pembelajaran Seven Segment Display
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
                                    Display Module
                                 </span>

                                 <span class="badge bg-light text-dark">
                                    7 Segment Display
                                 </span>

                              </div>

                              <h2 class="fw-bold text-white mb-3">
                                 Seven Segment Display
                              </h2>

                              <p class="mb-4"
                                 style="max-width:720px;">

                                 Seven Segment Display merupakan komponen output
                                 elektronik yang digunakan untuk menampilkan angka
                                 dan karakter sederhana menggunakan kombinasi tujuh
                                 segmen LED. Komponen ini banyak digunakan pada jam
                                 digital, counter, timer, scoreboard dan berbagai
                                 sistem monitoring berbasis mikrokontroler.

                              </p>

                              <div class="d-flex flex-wrap gap-5">

                                 <div>

                                    <small>Component Type</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       Display Module
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Voltage</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       3.3V - 5V
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Display</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       Numeric LED
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Usage</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       Number Display
                                    </h3>

                                 </div>

                              </div>

                           </div>

                           <div class="col-lg-4">

                              <div class="component-preview">

                                 <i class="ti ti-calculator"
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

                           <i class="ti ti-calculator"></i>

                        </div>

                        <h5 class="fw-bold">
                           Number Display
                        </h5>

                        <small class="text-muted">
                           Menampilkan angka 0 sampai 9
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="gas-card feature-card p-4 text-center">

                        <div class="feature-icon soft-success mx-auto mb-3">

                           <i class="ti ti-clock"></i>

                        </div>

                        <h5 class="fw-bold">
                           Digital Counter
                        </h5>

                        <small class="text-muted">
                           Cocok untuk counter dan timer
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="gas-card feature-card p-4 text-center">

                        <div class="feature-icon soft-warning mx-auto mb-3">

                           <i class="ti ti-dashboard"></i>

                        </div>

                        <h5 class="fw-bold">
                           Display Output
                        </h5>

                        <small class="text-muted">
                           Menampilkan informasi visual
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="gas-card feature-card p-4 text-center">

                        <div class="feature-icon soft-danger mx-auto mb-3">

                           <i class="ti ti-cpu"></i>

                        </div>

                        <h5 class="fw-bold">
                           Arduino Ready
                        </h5>

                        <small class="text-muted">
                           Mudah dikontrol mikrokontroler
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
                           📖 Penjelasan 7 Segment Display
                        </h5>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           Seven Segment Display merupakan komponen output elektronik
                           yang digunakan untuk menampilkan angka dan karakter sederhana.
                           Display ini tersusun dari tujuh buah LED berbentuk segmen yang
                           dapat dinyalakan secara kombinasi untuk membentuk angka.

                        </p>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           Setiap segmen diberi label A sampai G. Dengan mengatur
                           kombinasi segmen yang menyala, display dapat menampilkan
                           angka 0 hingga 9 dan beberapa karakter alfabet sederhana.

                        </p>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           Seven Segment banyak digunakan pada jam digital, counter,
                           stopwatch, kalkulator, panel instrumen elektronik, sistem
                           monitoring serta berbagai proyek Arduino dan mikrokontroler
                           lainnya yang membutuhkan tampilan angka secara visual.

                        </p>

                     </div>

                     <!-- SPESIFIKASI -->
                     <div class="gas-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           ⚙️ Spesifikasi 7 Segment Display
                        </h5>

                        <div class="table-responsive">

                           <table class="table table-spec">

                              <tbody>

                                 <tr>
                                    <td width="35%">
                                       <strong>Component Type</strong>
                                    </td>
                                    <td>
                                       Seven Segment Display
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Display Type</strong>
                                    </td>
                                    <td>
                                       LED Numeric Display
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
                                       <strong>Display Digits</strong>
                                    </td>
                                    <td>
                                       0 - 9
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Segment Count</strong>
                                    </td>
                                    <td>
                                       7 Segment + Decimal Point
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Display Color</strong>
                                    </td>
                                    <td>
                                       Red LED
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Configuration</strong>
                                    </td>
                                    <td>
                                       Common Anode / Common Cathode
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
                           🔧 Cara Menggunakan 7 Segment Display
                        </h5>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              1. Hubungkan 7 Segment
                           </div>

                           <small class="text-muted">
                              Hubungkan pin Common Anode atau Common Cathode
                              serta pin segmen A sampai G ke Arduino sesuai
                              jenis display yang digunakan.
                           </small>

                        </div>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              2. Hubungkan Pin Segmen
                           </div>

                           <small class="text-muted">
                              Sambungkan pin segmen A, B, C, D, E, F dan G
                              ke pin digital Arduino untuk mengontrol tampilan angka.
                           </small>

                        </div>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              3. Upload Program
                           </div>

                           <small class="text-muted">
                              Upload program Arduino untuk mengatur kombinasi
                              segmen sehingga dapat menampilkan angka yang diinginkan.
                           </small>

                        </div>

                        <div class="step-card mb-0">

                           <div class="fw-semibold mb-2">
                              4. Tampilkan Angka
                           </div>

                           <small class="text-muted">
                              Jalankan program dan amati tampilan angka
                              pada 7 Segment Display sesuai logika program.
                           </small>

                        </div>

                     </div>

                     <!-- PENGGUNAAN -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           🔢 Aplikasi 7 Segment Display
                        </h5>

                        <div class="row">

                           <div class="col-md-6 mb-3">

                              <div class="gas-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="gas-icon">

                                       <i class="ti ti-calculator"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Digital Counter
                                       </div>

                                       <small class="text-muted">
                                          Menampilkan hasil perhitungan dan counter
                                       </small>

                                    </div>

                                 </div>

                              </div>

                           </div>

                           <div class="col-md-6 mb-3">

                              <div class="gas-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="gas-icon">

                                       <i class="ti ti-clock"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Digital Clock
                                       </div>

                                       <small class="text-muted">
                                          Menampilkan jam dan waktu digital
                                       </small>

                                    </div>

                                 </div>

                              </div>

                           </div>

                           <div class="col-md-6 mb-3">

                              <div class="gas-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="gas-icon">

                                       <i class="ti ti-mouse"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Timer & Stopwatch
                                       </div>

                                       <small class="text-muted">
                                          Menampilkan hitungan waktu secara realtime
                                       </small>

                                    </div>

                                 </div>

                              </div>

                           </div>

                           <div class="col-md-6 mb-3">

                              <div class="gas-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="gas-icon">

                                       <i class="ti ti-dashboard"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Instrument Display
                                       </div>

                                       <small class="text-muted">
                                          Menampilkan data pada panel instrumen
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
                                 💻 Contoh Program 7 Segment Display
                              </h5>

                              <small class="text-muted">
                                 Menampilkan angka 0 sampai 9 menggunakan Arduino
                              </small>

                           </div>

                           <button class="btn btn-primary btn-sm">

                              <i class="ti ti-copy"></i>
                              Copy Code

                           </button>

                        </div>

                        <div class="code-box">

                           <div class="code-header">

                              seven_segment_example.ino

                           </div>

                           <div class="code-content">
                              <pre>
int segA = 2;
int segB = 3;
int segC = 4;
int segD = 5;
int segE = 6;
int segF = 7;
int segG = 8;

byte digits[10][7] = {
   {1,1,1,1,1,1,0}, //0
   {0,1,1,0,0,0,0}, //1
   {1,1,0,1,1,0,1}, //2
   {1,1,1,1,0,0,1}, //3
   {0,1,1,0,0,1,1}, //4
   {1,0,1,1,0,1,1}, //5
   {1,0,1,1,1,1,1}, //6
   {1,1,1,0,0,0,0}, //7
   {1,1,1,1,1,1,1}, //8
   {1,1,1,1,0,1,1}  //9
};

void displayDigit(int num)
{
   digitalWrite(segA, digits[num][0]);
   digitalWrite(segB, digits[num][1]);
   digitalWrite(segC, digits[num][2]);
   digitalWrite(segD, digits[num][3]);
   digitalWrite(segE, digits[num][4]);
   digitalWrite(segF, digits[num][5]);
   digitalWrite(segG, digits[num][6]);
}

void setup()
{
   pinMode(segA, OUTPUT);
   pinMode(segB, OUTPUT);
   pinMode(segC, OUTPUT);
   pinMode(segD, OUTPUT);
   pinMode(segE, OUTPUT);
   pinMode(segF, OUTPUT);
   pinMode(segG, OUTPUT);
}

void loop()
{
   for(int i = 0; i <= 9; i++)
   {
      displayDigit(i);
      delay(1000);
   }
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
                           🔌 Pin 7 Segment Display
                        </h5>

                        <div class="pin-card p-3 mb-3">

                           <div class="d-flex align-items-center gap-3">

                              <div class="pin-icon">
                                 A-G
                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    Segment Pins
                                 </div>

                                 <small class="text-muted">
                                    Pin untuk mengontrol segmen A sampai G
                                 </small>

                              </div>

                           </div>

                        </div>

                        <div class="pin-card p-3 mb-3">

                           <div class="d-flex align-items-center gap-3">

                              <div class="pin-icon">
                                 DP
                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    Decimal Point
                                 </div>

                                 <small class="text-muted">
                                    Menampilkan titik desimal
                                 </small>

                              </div>

                           </div>

                        </div>

                        <div class="pin-card p-3">

                           <div class="d-flex align-items-center gap-3">

                              <div class="pin-icon">
                                 COM
                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    Common Pin
                                 </div>

                                 <small class="text-muted">
                                    Common Anode atau Common Cathode
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
                              Terdiri Dari 7 Segmen
                           </div>

                           <small class="text-muted">
                              Display menggunakan tujuh LED segmen
                              untuk membentuk angka 0 sampai 9.
                           </small>

                        </div>

                        <div class="spec-box mb-3">

                           <div class="fw-semibold mb-2">
                              Common Anode & Cathode
                           </div>

                           <small class="text-muted">
                              Tersedia dalam dua jenis yaitu Common
                              Anode dan Common Cathode.
                           </small>

                        </div>

                        <div class="spec-box">

                           <div class="fw-semibold mb-2">
                              Kontrol Segmen
                           </div>

                           <small class="text-muted">
                              Setiap segmen dapat dikendalikan secara
                              individual melalui mikrokontroler.
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