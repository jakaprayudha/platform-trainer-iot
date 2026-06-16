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
                        🖥️ Pelaksanaan CBT
                     </h4>

                     <p class="text-muted mb-0">
                        Monitoring pelaksanaan ujian dan assessment berbasis komputer
                     </p>

                  </div>

                  <button class="btn btn-primary">

                     <i class="ti ti-plus"></i>
                     Buat CBT

                  </button>

               </div>

               <!-- SUMMARY -->
               <div class="row mb-0">

                  <div class="col-md-3">

                     <div class="card border-0 shadow-sm">

                        <div class="card-body">

                           <h3 class="fw-bold text-primary">
                              12
                           </h3>

                           <small class="text-muted">
                              Total CBT
                           </small>

                        </div>

                     </div>

                  </div>

                  <div class="col-md-3">

                     <div class="card border-0 shadow-sm">

                        <div class="card-body">

                           <h3 class="fw-bold text-success">
                              3
                           </h3>

                           <small class="text-muted">
                              Sedang Berjalan
                           </small>

                        </div>

                     </div>

                  </div>

                  <div class="col-md-3">

                     <div class="card border-0 shadow-sm">

                        <div class="card-body">

                           <h3 class="fw-bold text-warning">
                              5
                           </h3>

                           <small class="text-muted">
                              Terjadwal
                           </small>

                        </div>

                     </div>

                  </div>

                  <div class="col-md-3">

                     <div class="card border-0 shadow-sm">

                        <div class="card-body">

                           <h3 class="fw-bold text-danger">
                              4
                           </h3>

                           <small class="text-muted">
                              Selesai
                           </small>

                        </div>

                     </div>

                  </div>

               </div>

               <!-- CARD -->
               <div class="card shadow-sm border-0">

                  <div class="card-body">

                     <!-- FILTER -->
                     <div class="row mb-3">

                        <div class="col-md-4">

                           <input type="text"
                              class="form-control"
                              placeholder="🔍 Cari CBT...">

                        </div>

                        <div class="col-md-3">

                           <select class="form-select">

                              <option>Semua Status</option>
                              <option>Sedang Berjalan</option>
                              <option>Terjadwal</option>
                              <option>Selesai</option>

                           </select>

                        </div>

                        <div class="col-md-3">

                           <select class="form-select">

                              <option>Semua Kelas</option>
                              <option>X TKJ</option>
                              <option>XI TKJ</option>
                              <option>XII RPL</option>

                           </select>

                        </div>

                        <div class="col-md-2">

                           <button class="btn btn-primary w-100">

                              Cari

                           </button>

                        </div>

                     </div>

                     <!-- TABLE -->
                     <div class="table-responsive">

                        <table class="table table-hover align-middle">

                           <thead class="bg-light">

                              <tr>

                                 <th>No</th>
                                 <th>Nama CBT</th>
                                 <th>Kelas</th>
                                 <th>Jumlah Soal</th>
                                 <th>Peserta</th>
                                 <th>Waktu</th>
                                 <th>Status</th>
                                 <th class="text-center">Aksi</th>

                              </tr>

                           </thead>

                           <tbody>

                              <tr>

                                 <td>1</td>

                                 <td>
                                    Ujian ESP32 Fundamental
                                 </td>

                                 <td>
                                    XII RPL
                                 </td>

                                 <td>
                                    30 Soal
                                 </td>

                                 <td>
                                    25 Siswa
                                 </td>

                                 <td>
                                    90 Menit
                                 </td>

                                 <td>

                                    <span class="badge bg-success">
                                       Sedang Berjalan
                                    </span>

                                 </td>

                                 <td class="text-center">

                                    <a href='cbt_assesment_details'> <button class="btn btn-sm btn-light">

                                          <i class="ti ti-eye"></i>

                                       </button></a>

                                 </td>

                              </tr>

                              <tr>

                                 <td>2</td>

                                 <td>
                                    Quiz Sensor & Aktuator
                                 </td>

                                 <td>
                                    XI TKJ
                                 </td>

                                 <td>
                                    20 Soal
                                 </td>

                                 <td>
                                    30 Siswa
                                 </td>

                                 <td>
                                    60 Menit
                                 </td>

                                 <td>

                                    <span class="badge bg-warning text-dark">
                                       Terjadwal
                                    </span>

                                 </td>

                                 <td class="text-center">

                                    <a href='cbt_assesment_details'> <button class="btn btn-sm btn-light">

                                          <i class="ti ti-eye"></i>

                                       </button></a>

                                 </td>

                              </tr>

                              <tr>

                                 <td>3</td>

                                 <td>
                                    Sertifikasi IoT Basic
                                 </td>

                                 <td>
                                    Umum
                                 </td>

                                 <td>
                                    50 Soal
                                 </td>

                                 <td>
                                    100 Peserta
                                 </td>

                                 <td>
                                    120 Menit
                                 </td>

                                 <td>

                                    <span class="badge bg-secondary">
                                       Selesai
                                    </span>

                                 </td>

                                 <td class="text-center">

                                    <a href='cbt_assesment_details'> <button class="btn btn-sm btn-light">

                                          <i class="ti ti-eye"></i>

                                       </button></a>

                                 </td>

                              </tr>

                           </tbody>

                        </table>

                     </div>

                     <!-- PAGINATION -->
                     <nav>

                        <ul class="pagination justify-content-end mb-0">

                           <li class="page-item disabled">
                              <a class="page-link">
                                 Previous
                              </a>
                           </li>

                           <li class="page-item active">
                              <a class="page-link">
                                 1
                              </a>
                           </li>

                           <li class="page-item">
                              <a class="page-link">
                                 2
                              </a>
                           </li>

                           <li class="page-item">
                              <a class="page-link">
                                 3
                              </a>
                           </li>

                           <li class="page-item">
                              <a class="page-link">
                                 Next
                              </a>
                           </li>

                        </ul>

                     </nav>

                  </div>

               </div>

            </div>
         </div>
      </div>
   </div>
   <?php require 'library.php'; ?>
</body>

</html>