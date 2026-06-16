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
               #1e3a8a,
               #2563eb,
               #06b6d4);
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
                        📶 Uraian Komponen ESP8266 WiFi Module
                     </h4>

                     <p class="text-muted mb-0">
                        Materi pembelajaran ESP8266 untuk komunikasi WiFi, IoT dan konektivitas internet
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
                                    Wireless Module
                                 </span>

                                 <span class="badge bg-light text-dark">
                                    ESP8266 WiFi
                                 </span>

                              </div>

                              <h2 class="fw-bold text-white mb-3">
                                 ESP8266 WiFi Communication Module
                              </h2>

                              <p class="mb-4"
                                 style="max-width:720px;">

                                 ESP8266 adalah modul komunikasi WiFi yang memungkinkan
                                 mikrokontroler terhubung ke jaringan internet maupun
                                 jaringan lokal. Modul ini banyak digunakan dalam proyek
                                 Internet of Things (IoT), smart home, monitoring jarak jauh
                                 dan sistem otomatisasi berbasis cloud.

                              </p>

                              <div class="d-flex flex-wrap gap-5">

                                 <div>

                                    <small>Module Type</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       WiFi Module
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Voltage</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       3.3V
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Communication</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       WiFi 802.11 b/g/n
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Usage</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       IoT Connectivity
                                    </h3>

                                 </div>

                              </div>

                           </div>

                           <div class="col-lg-4">

                              <div class="component-preview">

                                 <i class="ti ti-wifi"
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

                           <i class="ti ti-wifi"></i>

                        </div>

                        <h5 class="fw-bold">
                           WiFi Connectivity
                        </h5>

                        <small class="text-muted">
                           Terhubung ke jaringan WiFi
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card feature-card p-4 text-center">

                        <div class="feature-icon soft-success mx-auto mb-3">

                           <i class="ti ti-cloud"></i>

                        </div>

                        <h5 class="fw-bold">
                           Cloud Integration
                        </h5>

                        <small class="text-muted">
                           Mendukung komunikasi cloud IoT
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card feature-card p-4 text-center">

                        <div class="feature-icon soft-warning mx-auto mb-3">

                           <i class="ti ti-dashboard"></i>

                        </div>

                        <h5 class="fw-bold">
                           IoT Ready
                        </h5>

                        <small class="text-muted">
                           Cocok untuk proyek Internet of Things
                        </small>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="glass-card feature-card p-4 text-center">

                        <div class="feature-icon soft-danger mx-auto mb-3">

                           <i class="ti ti-download"></i>

                        </div>

                        <h5 class="fw-bold">
                           Serial Communication
                        </h5>

                        <small class="text-muted">
                           Komunikasi data UART
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
                           📖 Penjelasan ESP8266 WiFi Module
                        </h5>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           ESP8266 adalah modul komunikasi nirkabel (WiFi)
                           yang memungkinkan perangkat mikrokontroler seperti
                           Arduino terhubung ke jaringan internet maupun jaringan
                           lokal. Modul ini menjadi salah satu komponen paling
                           populer dalam pengembangan Internet of Things (IoT)
                           karena memiliki ukuran kecil, biaya rendah dan fitur
                           yang lengkap.

                        </p>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           ESP8266 mendukung komunikasi WiFi IEEE 802.11 b/g/n
                           serta dapat digunakan sebagai Access Point (AP),
                           Station (Client) atau keduanya secara bersamaan.
                           Modul ini berkomunikasi dengan mikrokontroler melalui
                           antarmuka UART menggunakan perintah AT Command maupun
                           program khusus berbasis firmware.

                        </p>

                        <p class="text-muted"
                           style="line-height:1.9;">

                           ESP8266 banyak digunakan pada sistem smart home,
                           monitoring sensor berbasis cloud, kontrol perangkat
                           jarak jauh, data logger IoT, automation system dan
                           berbagai aplikasi yang membutuhkan konektivitas internet
                           secara realtime.

                        </p>

                     </div>
                     <!-- SPESIFIKASI -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           ⚙️ Spesifikasi ESP8266 WiFi Module
                        </h5>

                        <div class="table-responsive">

                           <table class="table table-spec">

                              <tbody>

                                 <tr>
                                    <td width="35%">
                                       <strong>Module Type</strong>
                                    </td>
                                    <td>
                                       ESP8266 WiFi Module
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Operating Voltage</strong>
                                    </td>
                                    <td>
                                       3.3V DC
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>WiFi Standard</strong>
                                    </td>
                                    <td>
                                       IEEE 802.11 b/g/n
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Communication Interface</strong>
                                    </td>
                                    <td>
                                       UART (Serial)
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Operating Frequency</strong>
                                    </td>
                                    <td>
                                       2.4 GHz
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Wireless Mode</strong>
                                    </td>
                                    <td>
                                       Station (STA), Access Point (AP)
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Data Transfer Rate</strong>
                                    </td>
                                    <td>
                                       Up to 150 Mbps
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Control Method</strong>
                                    </td>
                                    <td>
                                       AT Command / Firmware
                                    </td>
                                 </tr>

                                 <tr>
                                    <td>
                                       <strong>Compatible Board</strong>
                                    </td>
                                    <td>
                                       Arduino, ESP32, STM32
                                    </td>
                                 </tr>

                              </tbody>

                           </table>

                        </div>

                     </div>

                     <!-- LANGKAH -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           🔧 Cara Menggunakan ESP8266 WiFi Module
                        </h5>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              1. Hubungkan Modul ESP8266
                           </div>

                           <small class="text-muted">
                              Hubungkan pin VCC dan CH_PD ke 3.3V serta
                              pin GND ke Ground. Pastikan menggunakan
                              catu daya 3.3V yang stabil.
                           </small>

                        </div>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              2. Hubungkan Jalur Serial
                           </div>

                           <small class="text-muted">
                              Hubungkan pin TX ESP8266 ke RX Arduino dan
                              pin RX ESP8266 ke TX Arduino untuk komunikasi
                              data melalui UART.
                           </small>

                        </div>

                        <div class="step-card">

                           <div class="fw-semibold mb-2">
                              3. Konfigurasi Koneksi WiFi
                           </div>

                           <small class="text-muted">
                              Atur SSID dan password jaringan WiFi pada
                              program atau menggunakan AT Command sesuai
                              kebutuhan aplikasi.
                           </small>

                        </div>

                        <div class="step-card mb-0">

                           <div class="fw-semibold mb-2">
                              4. Upload Program dan Uji Koneksi
                           </div>

                           <small class="text-muted">
                              Upload program kemudian lakukan pengujian
                              koneksi WiFi dan kirim data ke server,
                              cloud atau aplikasi IoT.
                           </small>

                        </div>

                     </div>
                     <!-- PENGGUNAAN -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           📍 Penggunaan ESP8266 WiFi Module
                        </h5>

                        <div class="row">

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
                                          Kontrol perangkat rumah melalui internet
                                       </small>

                                    </div>

                                 </div>

                              </div>

                           </div>

                           <div class="col-md-6 mb-3">

                              <div class="usage-card">

                                 <div class="d-flex align-items-center gap-3">

                                    <div class="usage-icon">

                                       <i class="ti ti-cloud"></i>

                                    </div>

                                    <div>

                                       <div class="fw-semibold">
                                          Cloud IoT
                                       </div>

                                       <small class="text-muted">
                                          Mengirim data sensor ke server cloud
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
                                          IoT Monitoring
                                       </div>

                                       <small class="text-muted">
                                          Monitoring perangkat secara realtime
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
                                          Remote Control
                                       </div>

                                       <small class="text-muted">
                                          Mengendalikan perangkat dari jarak jauh
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
                                 💻 Contoh Program ESP8266 WiFi
                              </h5>

                              <small class="text-muted">
                                 Menghubungkan ESP8266 ke jaringan WiFi
                              </small>

                           </div>

                           <button class="btn btn-primary btn-sm">

                              <i class="ti ti-copy"></i>
                              Copy Code

                           </button>

                        </div>

                        <div class="code-box">

                           <div class="code-header">

                              esp8266_wifi_example.ino

                           </div>

                           <div class="code-content">
                              <pre>
#include &lt;ESP8266WiFi.h&gt;

const char* ssid =
   "NAMA_WIFI";

const char* password =
   "PASSWORD_WIFI";

void setup()
{
   Serial.begin(115200);

   WiFi.begin(
      ssid,
      password
   );

   Serial.print(
      "Connecting"
   );

   while(
      WiFi.status()
      != WL_CONNECTED
   )
   {
      delay(500);
      Serial.print(".");
   }

   Serial.println("");
   Serial.println(
      "WiFi Connected"
   );

   Serial.print(
      "IP Address : "
   );

   Serial.println(
      WiFi.localIP()
   );
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
                  <!-- RIGHT -->
                  <div class="col-lg-4">

                     <!-- PIN -->
                     <div class="glass-card p-4 shadow-sm mb-4">

                        <h5 class="fw-bold mb-4">
                           🔌 Pin ESP8266 WiFi Module
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
                                    Tegangan kerja 3.3V DC
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
                                 TX
                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    Transmit Data
                                 </div>

                                 <small class="text-muted">
                                    Mengirim data serial UART
                                 </small>

                              </div>

                           </div>

                        </div>

                        <div class="pin-card p-3 mb-3">

                           <div class="d-flex align-items-center gap-3">

                              <div class="pin-icon">
                                 RX
                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    Receive Data
                                 </div>

                                 <small class="text-muted">
                                    Menerima data serial UART
                                 </small>

                              </div>

                           </div>

                        </div>

                        <div class="pin-card p-3">

                           <div class="d-flex align-items-center gap-3">

                              <div class="pin-icon">
                                 CH
                              </div>

                              <div>

                                 <div class="fw-semibold">
                                    Chip Enable
                                 </div>

                                 <small class="text-muted">
                                    Harus terhubung ke 3.3V agar modul aktif
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
                              Tegangan 3.3V
                           </div>

                           <small class="text-muted">
                              ESP8266 bekerja pada tegangan 3.3V.
                              Tegangan 5V langsung dapat merusak modul.
                           </small>

                        </div>

                        <div class="spec-box mb-3">

                           <div class="fw-semibold mb-2">
                              Konektivitas WiFi
                           </div>

                           <small class="text-muted">
                              Mendukung komunikasi WiFi 2.4 GHz
                              untuk aplikasi Internet of Things.
                           </small>

                        </div>

                        <div class="spec-box">

                           <div class="fw-semibold mb-2">
                              Komunikasi UART
                           </div>

                           <small class="text-muted">
                              Berkomunikasi dengan Arduino melalui
                              jalur serial TX dan RX.
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