<!doctype html>
<html lang="en">

<head>
   <?php require 'partial-head.php' ?>
</head>

<body>
   <!--  Body Wrapper -->
   <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
      data-sidebar-position="fixed" data-header-position="fixed">

      <!--  App Topstrip -->
      <?php require 'partial-topstrip.php' ?>
      <!-- Sidebar Start -->
      <aside class="left-sidebar">
         <!-- Sidebar scroll-->
         <?php require 'partial-sidebar.php' ?>
         <!-- End Sidebar scroll-->
      </aside>
      <!--  Sidebar End -->
      <!--  Main wrapper -->
      <div class="body-wrapper">
         <!--  Header Start -->
         <?php require 'partial-header.php' ?>
         <!--  Header End -->
         <div class="body-wrapper-inner">
            <div class="container-fluid">

               <!-- HEADER -->
               <div class="d-flex justify-content-between align-items-center mb-4">
                  <div>
                     <h4 class="fw-bold mb-1">🧪 Praktikum & Progress Belajar</h4>
                     <p class="text-muted mb-0">Monitoring aktivitas praktikum siswa</p>
                  </div>

                  <button class="btn btn-light d-flex align-items-center gap-2"
                     onclick="window.history.back()">
                     <i class="ti ti-arrow-left"></i>
                     Kembali
                  </button>
               </div>
               <!-- INFO PRAKTIKUM -->
               <div class="card mb-4 shadow-sm">
                  <div class="card-body">

                     <div class="row">
                        <div class="col-md-4">
                           <p><b>Judul:</b> Monitoring Suhu</p>
                           <p><b>Kelas:</b> XII RPL</p>
                        </div>
                        <div class="col-md-4">
                           <p><b>Materi:</b> Sensor DHT22</p>
                           <p><b>Device:</b> ESP32</p>
                        </div>
                        <div class="col-md-4">
                           <p><b>Status:</b> <span class="badge bg-success">Aktif</span></p>
                           <p><b>Tanggal:</b> 20 Mei 2026</p>
                        </div>
                     </div>

                  </div>
               </div>
               <!-- ================= AKSI PRAKTIKUM ================= -->
               <!-- ================= AKSI PRAKTIKUM ================= -->
               <div class="row mb-4">

                  <!-- MATERI -->
                  <div class="col-md-4 d-flex">
                     <div class="card card-iot w-100 h-100 p-4 d-flex flex-column justify-content-between text-center">

                        <div>
                           <div class="icon-lg mb-3">📘</div>
                           <h5 class="fw-bold">Materi Praktikum</h5>
                           <p class="text-muted mb-2">Panduan lengkap IoT</p>

                           <small class="text-info">📄 PDF • 2.4 MB</small>
                        </div>

                        <div>
                           <a href="#" class="btn btn-primary w-100 mb-2">
                              📥 Download
                           </a>
                           <a href="#" class="btn btn-outline-primary w-100">
                              👀 Preview
                           </a>
                        </div>

                     </div>
                  </div>

                  <!-- VIDEO -->
                  <div class="col-md-4 d-flex">
                     <div class="card card-iot w-100 h-100 p-4 d-flex flex-column justify-content-between text-center">

                        <div>
                           <div class="icon-lg mb-3">🎥</div>
                           <h5 class="fw-bold">Video Tutorial</h5>
                           <p class="text-muted mb-2">Belajar step-by-step</p>

                           <small class="text-warning">HD • 1080p</small>
                        </div>

                        <div>
                           <button class="btn btn-danger w-100 mb-2"
                              data-bs-toggle="modal" data-bs-target="#videoModal">
                              ▶️ Play Video
                           </button>

                           <div class="badge bg-dark w-100 py-2">
                              ⏱️ 10 Menit
                           </div>
                        </div>

                     </div>
                  </div>

                  <!-- STATUS -->
                  <div class="col-md-4 d-flex">
                     <div class="card card-iot w-100 h-100 p-4 d-flex flex-column justify-content-between text-center">

                        <div>
                           <div class="icon-lg mb-3">📊</div>
                           <h5 class="fw-bold">Progress Kamu</h5>
                           <p class="text-muted mb-2">Status pengerjaan</p>

                           <small class="text-success">Level: Intermediate</small>
                        </div>

                        <div>
                           <div class="progress mb-2" style="height:12px;">
                              <div class="progress-bar bg-success progress-animated" style="width:70%">
                                 70%
                              </div>
                           </div>

                           <div class="badge bg-success w-100 py-2">
                              🚀 Hampir Selesai
                           </div>
                        </div>

                     </div>
                  </div>

               </div>
               <!-- ================= FORM SUBMIT ================= -->
               <!-- ================= FORM SUBMIT CLEAN ================= -->
               <div class="card shadow-sm border-0">
                  <div class="card-body px-4 py-4">

                     <h5 class="mb-4">📤 Submit Praktikum</h5>

                     <form>

                        <!-- CODE -->
                        <div class="mb-4">
                           <label class="form-label fw-semibold">💻 Upload Code</label>
                           <input type="file" class="form-control mt-2">
                        </div>

                        <!-- HASIL -->
                        <div class="mb-4">
                           <label class="form-label fw-semibold">📷 Upload Hasil</label>
                           <input type="file" class="form-control mt-2">
                        </div>

                        <!-- FEEDBACK -->
                        <div class="mb-4">
                           <label class="form-label fw-semibold">📝 Feedback</label>
                           <textarea class="form-control mt-2" rows="3"
                              placeholder="Tulis pengalaman / kendala..."></textarea>
                        </div>

                        <!-- BUTTON -->
                        <div class="text-end mt-3">
                           <button class="btn btn-success px-4">
                              🚀 Submit
                           </button>
                        </div>

                     </form>

                  </div>
               </div>
               <!-- ================= MODAL VIDEO ================= -->
               <div class="modal fade" id="videoModal">
                  <div class="modal-dialog modal-lg modal-dialog-centered">
                     <div class="modal-content">

                        <div class="modal-header">
                           <h5 class="modal-title">🎥 Video Tutorial</h5>
                           <button class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <div class="modal-body">
                           <div class="ratio ratio-16x9">
                              <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
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