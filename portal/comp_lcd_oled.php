<?php
$page_title = "I2C OLED Display SSD1306";
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <?php require 'partial-head.php'; ?>
   <style>
      body {
         background: #f8fafc;
      }

      .component-banner {
         background: linear-gradient(135deg, #0f172a, #7c3aed, #2563eb);
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
                        📟 Uraian Komponen OLED Display
                     </h4>

                     <p class="text-muted mb-0">
                        Materi pembelajaran OLED Display untuk visualisasi data, IoT dan sistem monitoring
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
                                    OLED SSD1306
                                 </span>

                              </div>

                              <h2 class="fw-bold text-white mb-3">
                                 OLED Display SSD1306 128x64
                              </h2>

                              <p class="mb-4"
                                 style="max-width:720px;">

                                 OLED SSD1306 merupakan modul display beresolusi 128x64 pixel
                                 yang digunakan untuk menampilkan teks, angka, grafik dan data
                                 sensor secara realtime. Modul ini banyak digunakan pada proyek
                                 Arduino, ESP32, IoT, robotika dan sistem monitoring karena
                                 tampilannya tajam serta konsumsi daya yang rendah.

                              </p>

                              <div class="d-flex flex-wrap gap-5">

                                 <div>

                                    <small>Module Type</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       OLED Display
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Resolution</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       128 x 64
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Interface</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       I2C
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Usage</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       Data Display
                                    </h3>

                                 </div>

                              </div>

                           </div>

                           <div class="col-lg-4">

                              <div class="component-preview">

                                 <i class="ti ti-device-desktop"
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

                           <i class="ti ti-device-desktop"></i>

                        </div>

                        <h5 class="fw-bold">
                           Sharp Display
                        </h5>

                        <small class="text-muted">
                           Tampilan tajam 128x64 pixel
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card feature-card p-4 text-center">

                        <div class="feature-icon soft-success mx-auto mb-3">

                           <i class="ti ti-writing"></i>

                        </div>

                        <h5 class="fw-bold">
                           Text & Graphics
                        </h5>

                        <small class="text-muted">
                           Menampilkan teks, ikon dan grafik
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card feature-card p-4 text-center">

                        <div class="feature-icon soft-warning mx-auto mb-3">

                           <i class="ti ti-bolt"></i>

                        </div>

                        <h5 class="fw-bold">
                           Low Power
                        </h5>

                        <small class="text-muted">
                           Konsumsi daya sangat rendah
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card feature-card p-4 text-center">

                        <div class="feature-icon soft-danger mx-auto mb-3">

                           <i class="ti ti-dashboard"></i>

                        </div>

                        <h5 class="fw-bold">
                           IoT Ready
                        </h5>

                        <small class="text-muted">
                           Cocok untuk dashboard IoT
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
                           📖 Penjelasan OLED Display
                        </h5>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           OLED (Organic Light Emitting Diode) adalah modul display
                           yang menggunakan teknologi dioda organik pemancar cahaya
                           sehingga setiap pixel dapat menghasilkan cahaya sendiri
                           tanpa memerlukan backlight seperti LCD biasa.

                        </p>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           OLED SSD1306 128x64 mampu menampilkan teks, angka,
                           simbol, grafik hingga animasi sederhana dengan kualitas
                           tampilan yang tajam dan kontras tinggi. Modul ini juga
                           memiliki konsumsi daya yang rendah sehingga cocok untuk
                           berbagai proyek elektronika dan IoT.

                        </p>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           OLED banyak digunakan pada sistem monitoring sensor,
                           dashboard IoT, perangkat wearable, robotika, alat ukur
                           digital serta berbagai aplikasi embedded system yang
                           membutuhkan tampilan informasi secara realtime.

                        </p>

                     </div>

                     <!-- SPESIFIKASI -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           ⚙️ Spesifikasi OLED SSD1306
                        </h5>

                        <div class="table-responsive">

                           <table class="table table-spec">

                              <tbody>

                                 <tr>
                                    <td width="35%">
                                       <strong>Module Type</strong>
                                    </td>
                                    <td>
                                       OLED Display SSD1306
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Display Resolution</strong>
                                    </td>
                                    <td>
                                       128 x 64 Pixels
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Display Color</strong>
                                    </td>
                                    <td>
                                       White / Blue OLED
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
                                       <strong>Communication</strong>
                                    </td>
                                    <td>
                                       I2C Interface
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>I2C Address</strong>
                                    </td>
                                    <td>
                                       0x3C / 0x3D
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Viewing Angle</strong>
                                    </td>
                                    <td>
                                       Up to 160°
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
                           🔧 Cara Menggunakan OLED SSD1306
                        </h5>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              1. Hubungkan Modul OLED
                           </div>

                           <small class="text-muted">
                              Hubungkan pin VCC ke 3.3V atau 5V dan GND ke Ground
                              Arduino atau ESP32.
                           </small>

                        </div>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              2. Hubungkan Jalur I2C
                           </div>

                           <small class="text-muted">
                              Hubungkan pin SDA dan SCL OLED ke pin SDA dan SCL
                              pada mikrokontroler sesuai konfigurasi board yang digunakan.
                           </small>

                        </div>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              3. Install Library OLED
                           </div>

                           <small class="text-muted">
                              Install library Adafruit SSD1306 dan Adafruit GFX
                              melalui Library Manager pada Arduino IDE.
                           </small>

                        </div>

                        <div class="step-card mb-0">

                           <div class="fw-semibold mb-2">
                              4. Upload Program dan Tampilkan Data
                           </div>

                           <small class="text-muted">
                              Upload program ke Arduino kemudian tampilkan teks,
                              angka atau data sensor pada layar OLED secara realtime.
                           </small>

                        </div>

                     </div>
                     <!-- FUNGSI -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           📍 Penggunaan OLED Display
                        </h5>

                        <div class="row">

                           <div class="col-md-6 mb-3">

                              <div class="usage-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="usage-icon">

                                       <i class="ti ti-device-desktop"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Data Display
                                       </div>

                                       <small class="text-muted">
                                          Menampilkan data sensor secara realtime
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
                                          IoT Dashboard
                                       </div>

                                       <small class="text-muted">
                                          Menampilkan informasi sistem IoT
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
                                          Monitoring System
                                       </div>

                                       <small class="text-muted">
                                          Menampilkan hasil monitoring perangkat
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
                                          Robotics Display
                                       </div>

                                       <small class="text-muted">
                                          Menampilkan status dan informasi robot
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
                                 💻 Contoh Program OLED SSD1306
                              </h5>

                              <small class="text-muted">
                                 Menampilkan teks pada OLED menggunakan Arduino
                              </small>

                           </div>

                           <button class="btn btn-primary btn-sm">

                              <i class="ti ti-copy"></i>
                              Copy Code

                           </button>

                        </div>

                        <div class="code-box">

                           <div class="code-header">

                              oled_ssd1306_example.ino

                           </div>

                           <div class="code-content">
                              <pre>
#include &lt;Wire.h&gt;
#include &lt;Adafruit_GFX.h&gt;
#include &lt;Adafruit_SSD1306.h&gt;

#define SCREEN_WIDTH 128
#define SCREEN_HEIGHT 64

Adafruit_SSD1306 display(
   SCREEN_WIDTH,
   SCREEN_HEIGHT,
   &Wire,
   -1
);

void setup()
{
   Serial.begin(115200);

   if(!display.begin(
      SSD1306_SWITCHCAPVCC,
      0x3C))
   {
      Serial.println(
         "OLED Not Found"
      );

      while(true);
   }

   display.clearDisplay();

   display.setTextSize(2);
   display.setTextColor(
      SSD1306_WHITE
   );

   display.setCursor(0,10);
   display.println("HELLO");

   display.setTextSize(1);
   display.setCursor(0,40);
   display.println(
      "OLED SSD1306"
   );

   display.display();
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
                           🔌 Pin OLED SSD1306
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

                        <div class="pin-card p-3 mb-3">

                           <div class="d-flex align-items-center gap-3">

                              <div class="pin-icon">
                                 SDA
                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    Serial Data
                                 </div>

                                 <small class="text-muted">
                                    Jalur data komunikasi I2C
                                 </small>

                              </div>

                           </div>

                        </div>

                        <div class="pin-card p-3">

                           <div class="d-flex align-items-center gap-3">

                              <div class="pin-icon">
                                 SCL
                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    Serial Clock
                                 </div>

                                 <small class="text-muted">
                                    Jalur clock komunikasi I2C
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
                              Resolusi Display
                           </div>

                           <small class="text-muted">
                              OLED SSD1306 memiliki resolusi
                              128 x 64 pixel dengan tampilan tajam.
                           </small>

                        </div>

                        <div class="spec-box mb-3">

                           <div class="fw-semibold mb-2">
                              Komunikasi I2C
                           </div>

                           <small class="text-muted">
                              Hanya membutuhkan 2 jalur data
                              yaitu SDA dan SCL.
                           </small>

                        </div>

                        <div class="spec-box">

                           <div class="fw-semibold mb-2">
                              Konsumsi Daya Rendah
                           </div>

                           <small class="text-muted">
                              Cocok digunakan pada perangkat
                              IoT dan sistem embedded.
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