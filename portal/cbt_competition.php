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
                        🏆 CBT Kompetisi
                     </h4>

                     <p class="text-muted mb-0">
                        Kompetisi, challenge dan olimpiade IoT berbasis CBT
                     </p>

                  </div>

                  <button class="btn btn-primary">

                     <i class="ti ti-plus"></i>
                     Buat Kompetisi

                  </button>

               </div>

               <!-- STATISTIC -->
               <div class="row mb-4">

                  <div class="col-md-3">

                     <div class="card border-0 shadow-sm">

                        <div class="card-body">

                           <h3 class="fw-bold text-primary">
                              12
                           </h3>

                           <small class="text-muted">
                              Total Kompetisi
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
                              Sedang Berlangsung
                           </small>

                        </div>

                     </div>

                  </div>

                  <div class="col-md-3">

                     <div class="card border-0 shadow-sm">

                        <div class="card-body">

                           <h3 class="fw-bold text-warning">
                              520
                           </h3>

                           <small class="text-muted">
                              Total Peserta
                           </small>

                        </div>

                     </div>

                  </div>

                  <div class="col-md-3">

                     <div class="card border-0 shadow-sm">

                        <div class="card-body">

                           <h3 class="fw-bold text-danger">
                              Rp 15 JT
                           </h3>

                           <small class="text-muted">
                              Total Prize Pool
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
                              placeholder="🔍 Cari Kompetisi...">

                        </div>

                        <div class="col-md-3">

                           <select class="form-select">

                              <option>Semua Status</option>
                              <option>Aktif</option>
                              <option>Akan Datang</option>
                              <option>Selesai</option>

                           </select>

                        </div>

                        <div class="col-md-3">

                           <select class="form-select">

                              <option>Semua Level</option>
                              <option>Beginner</option>
                              <option>Intermediate</option>
                              <option>Advanced</option>

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
                                 <th>Nama Kompetisi</th>
                                 <th>Peserta</th>
                                 <th>Level</th>
                                 <th>Hadiah</th>
                                 <th>Deadline</th>
                                 <th>Status</th>
                                 <th class="text-center">Aksi</th>

                              </tr>

                           </thead>

                           <tbody>

                              <tr>

                                 <td>1</td>

                                 <td>

                                    🏆 IoT National Challenge 2025

                                 </td>

                                 <td>

                                    250 Peserta

                                 </td>

                                 <td>

                                    <span class="badge bg-danger">

                                       Advanced

                                    </span>

                                 </td>

                                 <td>

                                    Rp 10.000.000

                                 </td>

                                 <td>

                                    31 Jul 2025

                                 </td>

                                 <td>

                                    <span class="badge bg-success">

                                       Aktif

                                    </span>

                                 </td>

                                 <td class="text-center">

                                    <a href='cbt_competition_details'> <button class="btn btn-sm btn-light">

                                          <i class="ti ti-eye"></i>

                                       </button></a>

                                 </td>

                              </tr>

                              <tr>

                                 <td>2</td>

                                 <td>

                                    🚀 ESP32 Coding Battle

                                 </td>

                                 <td>

                                    120 Peserta

                                 </td>

                                 <td>

                                    <span class="badge bg-warning text-dark">

                                       Intermediate

                                    </span>

                                 </td>

                                 <td>

                                    Rp 3.000.000

                                 </td>

                                 <td>

                                    15 Agu 2025

                                 </td>

                                 <td>

                                    <span class="badge bg-primary">

                                       Akan Datang

                                    </span>

                                 </td>

                                 <td class="text-center">

                                    <a href='cbt_competition_details'> <button class="btn btn-sm btn-light">

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
                              <a class="page-link">Previous</a>
                           </li>

                           <li class="page-item active">
                              <a class="page-link">1</a>
                           </li>

                           <li class="page-item">
                              <a class="page-link">2</a>
                           </li>

                           <li class="page-item">
                              <a class="page-link">Next</a>
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