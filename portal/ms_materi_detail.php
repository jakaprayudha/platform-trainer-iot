<!doctype html>
<html lang="en">

<head>
   <?php require 'partial-head.php' ?>

   <style>
      .cover-materi {
         height: 260px;
         border-radius: 18px;
         background: linear-gradient(135deg, #4f46e5, #06b6d4);
         position: relative;
         overflow: hidden;
      }

      .cover-overlay {
         position: absolute;
         inset: 0;
         background: rgba(0, 0, 0, 0.35);
      }

      .cover-content {
         position: relative;
         z-index: 2;
      }

      .icon-box {
         width: 46px;
         height: 46px;
         border-radius: 12px;
         display: flex;
         align-items: center;
         justify-content: center;
         background: rgba(255, 255, 255, 0.15);
         color: #fff;
         font-size: 20px;
      }

      .info-card {
         border: 0;
         border-radius: 18px;
         box-shadow: 0 2px 14px rgba(0, 0, 0, 0.05);
      }

      .step-item {
         border-left: 3px solid #4f46e5;
         padding-left: 18px;
         margin-bottom: 25px;
         position: relative;
      }

      .step-item::before {
         content: '';
         width: 14px;
         height: 14px;
         border-radius: 50%;
         background: #4f46e5;
         position: absolute;
         left: -9px;
         top: 5px;
      }

      .code-area {
         background: #0f172a;
         color: #e2e8f0;
         border-radius: 14px;
         padding: 18px;
         overflow-x: auto;
         font-size: 13px;
      }

      .resource-box {
         border: 1px dashed #dbeafe;
         border-radius: 14px;
         padding: 18px;
         transition: .3s;
      }

      .resource-box:hover {
         background: #f8fafc;
      }

      .component-item {
         border-radius: 12px;
         background: #f8fafc;
         padding: 14px;
      }

      .nav-pills .nav-link.active {
         background: #4f46e5;
      }

      .badge-soft {
         background: rgba(79, 70, 229, 0.1);
         color: #4f46e5;
      }
   </style>
</head>

<body>

   <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6"
      data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">

      <?php require 'partial-topstrip.php' ?>

      <aside class="left-sidebar">
         <?php require 'partial-sidebar.php' ?>
      </aside>

      <div class="body-wrapper">

         <?php require 'partial-header.php' ?>

         <div class="body-wrapper-inner">

            <div class="container-fluid">

               <!-- BREADCRUMB -->
               <div class="mb-4">
                  <a href="ms_materi" class="text-decoration-none text-muted">
                     ← Kembali ke Master Materi
                  </a>
               </div>

               <!-- COVER -->
               <div class="cover-materi mb-4 shadow">

                  <div class="cover-overlay"></div>

                  <div class="cover-content h-100 d-flex flex-column justify-content-between p-4 text-white">

                     <div class="d-flex justify-content-between">

                        <div>
                           <span class="badge bg-light text-dark mb-3">
                              IoT Sensor
                           </span>

                           <h2 class="fw-bold mb-2">
                              Monitoring Suhu & Kelembaban
                           </h2>

                           <p class="mb-0 text-white-50">
                              Pelajari implementasi sensor DHT11 menggunakan ESP32 dan dashboard monitoring realtime.
                           </p>
                        </div>

                        <div class="text-end">
                           <button class="btn btn-light">
                              <i class="ti ti-pencil"></i>
                              Edit Materi
                           </button>
                        </div>

                     </div>

                     <div class="d-flex flex-wrap gap-3">

                        <div class="d-flex align-items-center gap-2">
                           <div class="icon-box">
                              <i class="ti ti-clock"></i>
                           </div>

                           <div>
                              <small class="text-white-50">Durasi</small>
                              <div class="fw-semibold">2 Jam</div>
                           </div>
                        </div>

                        <div class="d-flex align-items-center gap-2">
                           <div class="icon-box">
                              <i class="ti ti-signal-3"></i>
                           </div>

                           <div>
                              <small class="text-white-50">Level</small>
                              <div class="fw-semibold">Basic</div>
                           </div>
                        </div>

                        <div class="d-flex align-items-center gap-2">
                           <div class="icon-box">
                              <i class="ti ti-users"></i>
                           </div>

                           <div>
                              <small class="text-white-50">Peserta</small>
                              <div class="fw-semibold">120 Orang</div>
                           </div>
                        </div>

                        <div class="d-flex align-items-center gap-2">
                           <div class="icon-box">
                              <i class="ti ti-circle-check"></i>
                           </div>

                           <div>
                              <small class="text-white-50">Status</small>
                              <div class="fw-semibold text-success">
                                 Aktif
                              </div>
                           </div>
                        </div>

                     </div>

                  </div>

               </div>

               <div class="row">

                  <!-- LEFT -->
                  <div class="col-lg-4">

                     <!-- INFO -->
                     <div class="card info-card mb-4">
                        <div class="card-body">

                           <h5 class="fw-bold mb-4">
                              Informasi Materi
                           </h5>

                           <div class="mb-3">
                              <label class="form-label">Nama Materi</label>
                              <input type="text" class="form-control"
                                 value="Monitoring Suhu & Kelembaban">
                           </div>

                           <div class="mb-3">
                              <label class="form-label">Kategori</label>
                              <select class="form-select">
                                 <option>Sensor</option>
                                 <option>Automation</option>
                              </select>
                           </div>

                           <div class="mb-3">
                              <label class="form-label">Level</label>
                              <select class="form-select">
                                 <option>Basic</option>
                                 <option>Intermediate</option>
                                 <option>Advanced</option>
                              </select>
                           </div>

                           <div class="mb-3">
                              <label class="form-label">Durasi</label>
                              <input type="text" class="form-control" value="2 Jam">
                           </div>

                           <div class="mb-3">
                              <label class="form-label">Thumbnail</label>
                              <input type="file" class="form-control">
                           </div>

                           <div class="form-check form-switch mb-4">
                              <input class="form-check-input" type="checkbox" checked>
                              <label class="form-check-label">
                                 Materi Aktif
                              </label>
                           </div>

                           <button class="btn btn-primary w-100">
                              <i class="ti ti-device-floppy"></i>
                              Simpan Perubahan
                           </button>

                        </div>
                     </div>

                     <!-- COMPONENT -->
                     <div class="card info-card">
                        <div class="card-body">

                           <div class="d-flex justify-content-between align-items-center mb-4">
                              <h5 class="fw-bold mb-0">
                                 Komponen
                              </h5>

                              <button class="btn btn-sm btn-primary">
                                 <i class="ti ti-plus"></i>
                              </button>
                           </div>

                           <div class="component-item mb-3">
                              <div class="fw-semibold">
                                 ESP32 DevKit
                              </div>

                              <small class="text-muted">
                                 Qty : 1
                              </small>
                           </div>

                           <div class="component-item mb-3">
                              <div class="fw-semibold">
                                 Sensor DHT11
                              </div>

                              <small class="text-muted">
                                 Qty : 1
                              </small>
                           </div>

                           <div class="component-item">
                              <div class="fw-semibold">
                                 Breadboard
                              </div>

                              <small class="text-muted">
                                 Qty : 1
                              </small>
                           </div>

                        </div>
                     </div>

                  </div>

                  <!-- RIGHT -->
                  <div class="col-lg-8">

                     <div class="card info-card">
                        <div class="card-body">

                           <!-- TABS -->
                           <ul class="nav nav-pills mb-4" role="tablist">

                              <li class="nav-item me-2">
                                 <button class="nav-link active"
                                    data-bs-toggle="pill"
                                    data-bs-target="#overview">
                                    Overview
                                 </button>
                              </li>

                              <li class="nav-item me-2">
                                 <button class="nav-link"
                                    data-bs-toggle="pill"
                                    data-bs-target="#modul">
                                    Modul
                                 </button>
                              </li>

                              <li class="nav-item me-2">
                                 <button class="nav-link"
                                    data-bs-toggle="pill"
                                    data-bs-target="#resource">
                                    Resource
                                 </button>
                              </li>

                              <li class="nav-item me-2">
                                 <button class="nav-link"
                                    data-bs-toggle="pill"
                                    data-bs-target="#sourcecode">
                                    Source Code
                                 </button>
                              </li>

                           </ul>

                           <div class="tab-content">

                              <!-- OVERVIEW -->
                              <div class="tab-pane fade show active" id="overview">

                                 <h5 class="fw-bold mb-3">
                                    Deskripsi Materi
                                 </h5>

                                 <textarea class="form-control mb-4" rows="6">Materi ini membahas implementasi IoT menggunakan sensor DHT11 dan ESP32 untuk monitoring suhu dan kelembaban secara realtime.</textarea>

                                 <div class="row">

                                    <div class="col-md-6 mb-3">
                                       <div class="resource-box">

                                          <div class="d-flex align-items-center gap-3">

                                             <div class="fs-5">
                                                📘
                                             </div>

                                             <div>
                                                <div class="fw-semibold">
                                                   Ebook Praktikum
                                                </div>

                                                <small class="text-muted">
                                                   PDF Modul
                                                </small>
                                             </div>

                                          </div>

                                       </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                       <div class="resource-box">

                                          <div class="d-flex align-items-center gap-3">

                                             <div class="fs-5">
                                                🎥
                                             </div>

                                             <div>
                                                <div class="fw-semibold">
                                                   Video Tutorial
                                                </div>

                                                <small class="text-muted">
                                                   Youtube Embed
                                                </small>
                                             </div>

                                          </div>

                                       </div>
                                    </div>

                                 </div>

                                 <!-- VIDEO -->
                                 <div class="mt-4">
                                    <div class="ratio ratio-16x9 rounded overflow-hidden">
                                       <iframe
                                          src="https://www.youtube.com/embed/dQw4w9WgXcQ"
                                          allowfullscreen>
                                       </iframe>
                                    </div>
                                 </div>

                              </div>

                              <!-- MODUL -->
                              <div class="tab-pane fade" id="modul">

                                 <div class="d-flex justify-content-between align-items-center mb-4">

                                    <h5 class="fw-bold mb-0">
                                       Learning Step
                                    </h5>

                                    <button class="btn btn-primary">
                                       <i class="ti ti-plus"></i>
                                       Tambah Step
                                    </button>

                                 </div>

                                 <div class="step-item">

                                    <h6 class="fw-bold">
                                       Pengenalan Sensor DHT11
                                    </h6>

                                    <p class="text-muted mb-2">
                                       Memahami fungsi sensor suhu dan kelembaban.
                                    </p>

                                    <span class="badge badge-soft">
                                       Step 1
                                    </span>

                                 </div>

                                 <div class="step-item">

                                    <h6 class="fw-bold">
                                       Wiring ESP32
                                    </h6>

                                    <p class="text-muted mb-2">
                                       Penyambungan pin sensor ke ESP32.
                                    </p>

                                    <span class="badge badge-soft">
                                       Step 2
                                    </span>

                                 </div>

                                 <div class="step-item">

                                    <h6 class="fw-bold">
                                       Upload Program
                                    </h6>

                                    <p class="text-muted mb-2">
                                       Upload source code monitoring realtime.
                                    </p>

                                    <span class="badge badge-soft">
                                       Step 3
                                    </span>

                                 </div>

                              </div>

                              <!-- RESOURCE -->
                              <div class="tab-pane fade" id="resource">

                                 <div class="row">

                                    <div class="col-md-6">

                                       <div class="card border">

                                          <div class="card-body">

                                             <h6 class="fw-bold mb-3">
                                                Upload Ebook
                                             </h6>

                                             <input type="file"
                                                class="form-control mb-3">

                                             <button class="btn btn-primary w-100">
                                                Upload Ebook
                                             </button>

                                          </div>

                                       </div>

                                    </div>

                                    <div class="col-md-6">

                                       <div class="card border">

                                          <div class="card-body">

                                             <h6 class="fw-bold mb-3">
                                                Upload Wiring Diagram
                                             </h6>

                                             <input type="file"
                                                class="form-control mb-3">

                                             <button class="btn btn-primary w-100">
                                                Upload Diagram
                                             </button>

                                          </div>

                                       </div>

                                    </div>

                                 </div>

                              </div>

                              <!-- SOURCE CODE -->
                              <div class="tab-pane fade" id="sourcecode">

                                 <div class="d-flex justify-content-between align-items-center mb-4">

                                    <h5 class="fw-bold mb-0">
                                       Source Code ESP32
                                    </h5>

                                    <button class="btn btn-primary">
                                       <i class="ti ti-device-floppy"></i>
                                       Simpan
                                    </button>

                                 </div>

                                 <div class="code-area">

                                    <pre>
#include &lt;DHT.h&gt;

#define DHTPIN 4
#define DHTTYPE DHT11

DHT dht(DHTPIN, DHTTYPE);

void setup() {
   Serial.begin(115200);
   dht.begin();
}

void loop() {

   float t = dht.readTemperature();
   float h = dht.readHumidity();

   Serial.print("Temp: ");
   Serial.println(t);

   Serial.print("Humidity: ");
   Serial.println(h);

   delay(2000);
}
</pre>

                                 </div>

                              </div>

                           </div>

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