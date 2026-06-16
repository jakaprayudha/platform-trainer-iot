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
               #22c55e,
               #3b82f6);
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
                        🌈 Uraian Komponen LED RGB
                     </h4>

                     <p class="text-muted mb-0">
                        Materi pembelajaran RGB LED Module dan kontrol warna
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
                                    RGB Lighting
                                 </span>

                                 <span class="badge bg-light text-dark">
                                    RGB LED Module
                                 </span>

                              </div>

                              <h2 class="fw-bold text-white mb-3">
                                 RGB LED Module
                              </h2>

                              <p class="mb-4"
                                 style="max-width:720px;">

                                 RGB LED merupakan modul LED yang terdiri dari
                                 tiga warna dasar yaitu Red (Merah), Green (Hijau),
                                 dan Blue (Biru). Dengan kombinasi ketiga warna
                                 tersebut, modul dapat menghasilkan berbagai warna
                                 untuk indikator, dekorasi, dan proyek IoT interaktif.

                              </p>

                              <div class="d-flex flex-wrap gap-5">

                                 <div>

                                    <small>Component Type</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       RGB LED
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Voltage</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       3.3V - 5V
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Control</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       PWM Signal
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Usage</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       Color Lighting
                                    </h3>

                                 </div>

                              </div>

                           </div>

                           <div class="col-lg-4">

                              <div class="component-preview">

                                 <i class="ti ti-palette"></i>

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

                        <div class="feature-icon soft-danger mx-auto mb-3">

                           <i class="ti ti-circle"></i>

                        </div>

                        <h5 class="fw-bold">
                           RGB Colors
                        </h5>

                        <small class="text-muted">
                           Kombinasi warna merah, hijau dan biru
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card feature-card p-4 text-center">

                        <div class="feature-icon soft-primary mx-auto mb-3">

                           <i class="ti ti-palette"></i>

                        </div>

                        <h5 class="fw-bold">
                           Color Mixing
                        </h5>

                        <small class="text-muted">
                           Menghasilkan berbagai warna
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card feature-card p-4 text-center">

                        <div class="feature-icon soft-warning mx-auto mb-3">

                           <i class="ti ti-brightness"></i>

                        </div>

                        <h5 class="fw-bold">
                           PWM Control
                        </h5>

                        <small class="text-muted">
                           Mengatur warna dan kecerahan LED
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card feature-card p-4 text-center">

                        <div class="feature-icon soft-success mx-auto mb-3">

                           <i class="ti ti-cpu"></i>

                        </div>

                        <h5 class="fw-bold">
                           Arduino Ready
                        </h5>

                        <small class="text-muted">
                           Mudah digunakan dengan Arduino
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
                           📖 Penjelasan RGB LED Module
                        </h5>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           RGB LED (Red Green Blue) merupakan komponen LED yang
                           menggabungkan tiga warna dasar yaitu merah (Red),
                           hijau (Green), dan biru (Blue) dalam satu modul.
                           Dengan mengatur intensitas masing-masing warna,
                           RGB LED dapat menghasilkan berbagai kombinasi warna.

                        </p>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           RGB LED banyak digunakan pada:
                        </p>

                        <ul class="text-muted"
                           style="line-height:2;">

                           <li>Indikator status sistem</li>
                           <li>Efek pencahayaan dekoratif</li>
                           <li>Smart Home Lighting</li>
                           <li>Robotika dan IoT Project</li>
                           <li>Visualisasi data dan notifikasi</li>

                        </ul>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           Modul RGB LED biasanya dikendalikan menggunakan
                           sinyal PWM (Pulse Width Modulation) sehingga warna
                           dan tingkat kecerahan dapat diatur secara fleksibel
                           melalui Arduino, ESP32 maupun mikrokontroler lainnya.

                        </p>

                     </div>
                     <!-- SPESIFIKASI -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           ⚙️ Spesifikasi RGB LED Module
                        </h5>

                        <div class="table-responsive">

                           <table class="table table-borderless table-spec">

                              <tbody>

                                 <tr>

                                    <td width="35%">
                                       <strong>Component Type</strong>
                                    </td>

                                    <td>
                                       RGB LED Module
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
                                       <strong>LED Colors</strong>
                                    </td>

                                    <td>
                                       Red, Green, Blue
                                    </td>

                                 </tr>

                                 <tr>

                                    <td>
                                       <strong>Control Method</strong>
                                    </td>

                                    <td>
                                       PWM (Pulse Width Modulation)
                                    </td>

                                 </tr>

                                 <tr>

                                    <td>
                                       <strong>Output Type</strong>
                                    </td>

                                    <td>
                                       Light Emission
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
                           🔧 Cara Menggunakan LED RGB
                        </h5>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              1. Hubungkan LED RGB
                           </div>

                           <small class="text-muted">
                              Hubungkan pin Red (R), Green (G), Blue (B) dan
                              Common Pin ke Arduino sesuai jenis Common Anode
                              atau Common Cathode yang digunakan.
                           </small>

                        </div>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              2. Hubungkan Pin PWM
                           </div>

                           <small class="text-muted">
                              Sambungkan pin R, G dan B ke pin PWM Arduino
                              agar warna dapat diatur menggunakan sinyal PWM.
                           </small>

                        </div>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              3. Upload Program
                           </div>

                           <small class="text-muted">
                              Upload program Arduino untuk mengontrol tingkat
                              kecerahan masing-masing warna RGB.
                           </small>

                        </div>

                        <div class="step-card mb-0">

                           <div class="fw-semibold mb-2">
                              4. Uji Perubahan Warna
                           </div>

                           <small class="text-muted">
                              Jalankan program dan amati perubahan warna LED
                              yang dihasilkan dari kombinasi warna merah,
                              hijau dan biru.
                           </small>

                        </div>

                     </div>
                     <!-- FUNGSI RGB LED -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           🌈 Fungsi RGB LED Module
                        </h5>

                        <div class="row">

                           <div class="col-md-6 mb-3">

                              <div class="detect-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="detect-icon">

                                       <i class="ti ti-palette"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Color Mixing
                                       </div>

                                       <small class="text-muted">
                                          Menghasilkan berbagai kombinasi warna
                                       </small>

                                    </div>

                                 </div>

                              </div>

                           </div>

                           <div class="col-md-6 mb-3">

                              <div class="detect-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="detect-icon">

                                       <i class="ti ti-bulb"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Visual Indicator
                                       </div>

                                       <small class="text-muted">
                                          Indikator status sistem dan notifikasi
                                       </small>

                                    </div>

                                 </div>

                              </div>

                           </div>

                           <div class="col-md-6 mb-3">

                              <div class="detect-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="detect-icon">

                                       <i class="ti ti-smart-home"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Smart Lighting
                                       </div>

                                       <small class="text-muted">
                                          Efek pencahayaan untuk smart home
                                       </small>

                                    </div>

                                 </div>

                              </div>

                           </div>

                           <div class="col-md-6 mb-3">

                              <div class="detect-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="detect-icon">

                                       <i class="ti ti-device-iot"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          IoT Project
                                       </div>

                                       <small class="text-muted">
                                          Output visual untuk proyek IoT
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
                                 💻 Contoh Program RGB LED
                              </h5>

                              <small class="text-muted">
                                 Mengontrol warna RGB LED menggunakan Arduino
                              </small>

                           </div>

                           <button class="btn btn-primary btn-sm">

                              <i class="ti ti-copy"></i>
                              Copy Code

                           </button>

                        </div>

                        <div class="code-box">

                           <div class="code-header">

                              rgb_led_example.ino

                           </div>

                           <div class="code-content">
                              <pre>
int redPin = 9;
int greenPin = 10;
int bluePin = 11;

void setup()
{
   pinMode(redPin, OUTPUT);
   pinMode(greenPin, OUTPUT);
   pinMode(bluePin, OUTPUT);
}

void loop()
{
   // Merah
   analogWrite(redPin, 255);
   analogWrite(greenPin, 0);
   analogWrite(bluePin, 0);
   delay(1000);

   // Hijau
   analogWrite(redPin, 0);
   analogWrite(greenPin, 255);
   analogWrite(bluePin, 0);
   delay(1000);

   // Biru
   analogWrite(redPin, 0);
   analogWrite(greenPin, 0);
   analogWrite(bluePin, 255);
   delay(1000);

   // Kuning
   analogWrite(redPin, 255);
   analogWrite(greenPin, 255);
   analogWrite(bluePin, 0);
   delay(1000);

   // Ungu
   analogWrite(redPin, 255);
   analogWrite(greenPin, 0);
   analogWrite(bluePin, 255);
   delay(1000);

   // Putih
   analogWrite(redPin, 255);
   analogWrite(greenPin, 255);
   analogWrite(bluePin, 255);
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
                           🔌 Pin RGB LED Module
                        </h5>

                        <!-- ITEM -->
                        <div class="pin-card p-3 mb-3">

                           <div class="d-flex align-items-center gap-3">

                              <div class="pin-icon">
                                 R
                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    Red LED
                                 </div>

                                 <small class="text-muted">
                                    Kontrol warna merah
                                 </small>

                              </div>

                           </div>

                        </div>

                        <!-- ITEM -->
                        <div class="pin-card p-3 mb-3">

                           <div class="d-flex align-items-center gap-3">

                              <div class="pin-icon">
                                 G
                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    Green LED
                                 </div>

                                 <small class="text-muted">
                                    Kontrol warna hijau
                                 </small>

                              </div>

                           </div>

                        </div>

                        <!-- ITEM -->
                        <div class="pin-card p-3 mb-3">

                           <div class="d-flex align-items-center gap-3">

                              <div class="pin-icon">
                                 B
                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    Blue LED
                                 </div>

                                 <small class="text-muted">
                                    Kontrol warna biru
                                 </small>

                              </div>

                           </div>

                        </div>

                        <!-- ITEM -->
                        <div class="pin-card p-3">

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

                     </div>

                     <!-- INFO -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           📌 Informasi Penting
                        </h5>

                        <div class="spec-box mb-3">

                           <div class="fw-semibold mb-2">
                              RGB Color Mixing
                           </div>

                           <small class="text-muted">
                              Kombinasi warna merah, hijau dan biru dapat
                              menghasilkan berbagai warna baru.
                           </small>

                        </div>

                        <div class="spec-box mb-3">

                           <div class="fw-semibold mb-2">
                              PWM Control
                           </div>

                           <small class="text-muted">
                              Intensitas setiap warna dapat diatur
                              menggunakan sinyal PWM.
                           </small>

                        </div>

                        <div class="spec-box">

                           <div class="fw-semibold mb-2">
                              Visual Indicator
                           </div>

                           <small class="text-muted">
                              Cocok digunakan sebagai indikator status,
                              notifikasi dan efek pencahayaan.
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