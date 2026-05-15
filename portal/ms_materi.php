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
                     <h4 class="fw-bold mb-1">📚 Master Materi</h4>
                     <p class="text-muted mb-0">Kelola seluruh materi praktikum</p>
                  </div>
                  <button class="btn btn-primary d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#modalTambah">
                     <i class="ti ti-plus"></i>
                     Tambah Materi
                  </button>
               </div>

               <!-- CARD -->
               <div class="card shadow-sm border-0">
                  <div class="card-body">

                     <!-- FILTER -->
                     <div class="row mb-3">
                        <div class="col-md-3">
                           <input type="text" class="form-control" placeholder="🔍 Cari Materi..." id="searchInput">
                        </div>

                        <div class="col-md-3">
                           <select class="form-select">
                              <option value="">Semua Status</option>
                              <option>Online</option>
                              <option>Offline</option>
                           </select>
                        </div>
                     </div>

                     <div class="table-responsive">
                        <table id="materiTable" class="table table-hover align-middle">

                           <thead class="bg-light">
                              <tr>
                                 <th>No</th>
                                 <th>Nama Materi</th>
                                 <th>Kategori</th>
                                 <th>Level</th>
                                 <th>Durasi</th>
                                 <th>Ebook</th>
                                 <th>Video</th>
                                 <th>Status</th>
                                 <th class="text-center">Aksi</th>
                              </tr>
                           </thead>

                           <tbody>

                              <!-- ROW 1 -->
                              <tr>
                                 <td>1</td>
                                 <td>Monitoring Suhu & Kelembaban</td>

                                 <td><span class="badge bg-info">Sensor</span></td>
                                 <td><span class="badge bg-success">Basic</span></td>
                                 <td>2 Jam</td>

                                 <!-- EBOOK -->
                                 <td>
                                    <a href="#" target="_blank">
                                       <span class="badge bg-primary">📘 Ebook</span>
                                    </a>
                                 </td>

                                 <!-- VIDEO -->
                                 <td>
                                    <a href="#" target="_blank">
                                       <span class="badge bg-danger">🎥 Video</span>
                                    </a>
                                 </td>

                                 <td><span class="badge bg-success">Aktif</span></td>

                                 <td class="text-center">
                                    <a href="ms_materi_detail">
                                       <button class="btn btn-sm btn-light"><i class="ti ti-eye"></i></button>
                                    </a>
                                 </td>
                              </tr>

                              <!-- ROW 2 -->
                              <tr>
                                 <td>2</td>
                                 <td>Kontrol Lampu via Web</td>

                                 <td><span class="badge bg-warning text-dark">Control</span></td>
                                 <td><span class="badge bg-primary">Intermediate</span></td>
                                 <td>3 Jam</td>

                                 <!-- EBOOK -->
                                 <td>
                                    <a href="#" target="_blank">
                                       <span class="badge bg-primary">📘 Ebook</span>
                                    </a>
                                 </td>

                                 <!-- VIDEO -->
                                 <td>
                                    <a href="#" target="_blank">
                                       <span class="badge bg-danger">🎥 Video</span>
                                    </a>
                                 </td>

                                 <td><span class="badge bg-success">Aktif</span></td>

                                 <td class="text-center">
                                    <a href="">
                                       <button class="btn btn-sm btn-light"><i class="ti ti-eye"></i></button>
                                    </a>
                                 </td>
                              </tr>

                              <!-- ROW 3 -->
                              <tr>
                                 <td>3</td>
                                 <td>Smart Door Lock RFID</td>

                                 <td><span class="badge bg-dark">Security</span></td>
                                 <td><span class="badge bg-danger">Advanced</span></td>
                                 <td>4 Jam</td>

                                 <!-- EBOOK -->
                                 <td>
                                    <span class="badge bg-secondary">Tidak Ada</span>
                                 </td>

                                 <!-- VIDEO -->
                                 <td>
                                    <a href="#" target="_blank">
                                       <span class="badge bg-danger">🎥 Video</span>
                                    </a>
                                 </td>

                                 <td><span class="badge bg-secondary">Nonaktif</span></td>

                                 <td class="text-center">
                                    <a href="">
                                       <button class="btn btn-sm btn-light"><i class="ti ti-eye"></i></button>
                                    </a>
                                 </td>
                              </tr>

                           </tbody>

                        </table>
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