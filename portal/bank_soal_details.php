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

                     <h4 class="fw-bold mb-1">
                        📖 Detail Soal
                     </h4>

                     <p class="text-muted mb-0">
                        Informasi lengkap soal dan pembahasan
                     </p>

                  </div>

                  <div>

                     <a href="bank_soal">
                        <button class="btn btn-light">

                           <i class="ti ti-arrow-left"></i>
                           Kembali

                        </button>
                     </a>

                     <button class="btn btn-warning text-white">

                        <i class="ti ti-edit"></i>
                        Edit Soal

                     </button>

                  </div>

               </div>

               <div class="row">

                  <!-- LEFT -->
                  <div class="col-lg-8">

                     <!-- SOAL -->
                     <div class="card border-0 shadow-sm mb-4">

                        <div class="card-header bg-white">

                           <h5 class="fw-bold mb-0">
                              📝 Pertanyaan
                           </h5>

                        </div>

                        <div class="card-body">

                           <h5 class="fw-bold mb-4">

                              Apa fungsi utama pin GPIO pada ESP32?

                           </h5>

                           <div class="list-group">

                              <div class="list-group-item">

                                 A. Menyimpan program

                              </div>

                              <div class="list-group-item list-group-item-success">

                                 ✅ B. Input dan Output Digital

                              </div>

                              <div class="list-group-item">

                                 C. Menyimpan data sensor

                              </div>

                              <div class="list-group-item">

                                 D. Menghubungkan WiFi

                              </div>

                           </div>

                        </div>

                     </div>

                     <!-- PEMBAHASAN -->
                     <div class="card border-0 shadow-sm">

                        <div class="card-header bg-white">

                           <h5 class="fw-bold mb-0">
                              💡 Pembahasan
                           </h5>

                        </div>

                        <div class="card-body">

                           <p class="mb-0">

                              GPIO (General Purpose Input Output) adalah pin serbaguna
                              yang dapat digunakan sebagai input maupun output digital.
                              GPIO pada ESP32 digunakan untuk membaca sensor, mengendalikan
                              LED, relay, buzzer dan berbagai perangkat elektronik lainnya.

                           </p>

                        </div>

                     </div>

                  </div>

                  <!-- RIGHT -->
                  <div class="col-lg-4">

                     <!-- INFO -->
                     <div class="card border-0 shadow-sm mb-4">

                        <div class="card-header bg-white">

                           <h5 class="fw-bold mb-0">
                              📌 Informasi Soal
                           </h5>

                        </div>

                        <div class="card-body">

                           <div class="mb-3">

                              <small class="text-muted">
                                 Kategori
                              </small>

                              <div>

                                 <span class="badge bg-primary">
                                    ESP32
                                 </span>

                              </div>

                           </div>

                           <div class="mb-3">

                              <small class="text-muted">
                                 Level
                              </small>

                              <div>

                                 <span class="badge bg-success">
                                    Beginner
                                 </span>

                              </div>

                           </div>

                           <div class="mb-3">

                              <small class="text-muted">
                                 Tipe Soal
                              </small>

                              <div>
                                 Pilihan Ganda
                              </div>

                           </div>

                           <div class="mb-3">

                              <small class="text-muted">
                                 Poin
                              </small>

                              <div>
                                 10 Poin
                              </div>

                           </div>

                           <div>

                              <small class="text-muted">
                                 Status
                              </small>

                              <div>

                                 <span class="badge bg-success">
                                    Aktif
                                 </span>

                              </div>

                           </div>

                        </div>

                     </div>

                     <!-- STATISTIK -->
                     <div class="card border-0 shadow-sm mb-4">

                        <div class="card-header bg-white">

                           <h5 class="fw-bold mb-0">
                              📊 Statistik
                           </h5>

                        </div>

                        <div class="card-body">

                           <div class="mb-3">

                              <div class="fw-semibold">
                                 Digunakan Pada Quiz
                              </div>

                              <div class="text-primary">
                                 12 Quiz
                              </div>

                           </div>

                           <div class="mb-3">

                              <div class="fw-semibold">
                                 Jumlah Jawaban
                              </div>

                              <div>
                                 356 Siswa
                              </div>

                           </div>

                           <div>

                              <div class="fw-semibold">
                                 Tingkat Benar
                              </div>

                              <div class="text-success">
                                 87%
                              </div>

                           </div>

                        </div>

                     </div>

                     <!-- ACTION -->
                     <div class="card border-0 shadow-sm">

                        <div class="card-header bg-white">

                           <h5 class="fw-bold mb-0">
                              ⚡ Quick Action
                           </h5>

                        </div>

                        <div class="card-body">

                           <div class="d-grid gap-3">

                              <button class="btn btn-primary">

                                 <i class="ti ti-copy"></i>
                                 Duplikat Soal

                              </button>

                              <button class="btn btn-success">

                                 <i class="ti ti-list-check"></i>
                                 Tambah ke Quiz

                              </button>

                              <button class="btn btn-danger">

                                 <i class="ti ti-trash"></i>
                                 Hapus Soal

                              </button>

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