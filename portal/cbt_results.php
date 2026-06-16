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
                        🏆 Hasil CBT
                     </h4>

                     <p class="text-muted mb-0">
                        Rekapitulasi hasil ujian dan assessment peserta
                     </p>

                  </div>

                  <div>

                     <button class="btn btn-success">

                        <i class="ti ti-file-export"></i>
                        Export Excel

                     </button>

                  </div>

               </div>

               <!-- SUMMARY -->
               <div class="row mb-4">

                  <div class="col-md-3">

                     <div class="card border-0 shadow-sm">

                        <div class="card-body">

                           <h3 class="fw-bold text-primary">
                              25
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

                           <h3 class="fw-bold text-success">
                              20
                           </h3>

                           <small class="text-muted">
                              Lulus
                           </small>

                        </div>

                     </div>

                  </div>

                  <div class="col-md-3">

                     <div class="card border-0 shadow-sm">

                        <div class="card-body">

                           <h3 class="fw-bold text-danger">
                              5
                           </h3>

                           <small class="text-muted">
                              Tidak Lulus
                           </small>

                        </div>

                     </div>

                  </div>

                  <div class="col-md-3">

                     <div class="card border-0 shadow-sm">

                        <div class="card-body">

                           <h3 class="fw-bold text-warning">
                              82.5
                           </h3>

                           <small class="text-muted">
                              Rata-rata Nilai
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
                              placeholder="🔍 Cari Peserta...">

                        </div>

                        <div class="col-md-3">

                           <select class="form-select">

                              <option>Semua Status</option>
                              <option>Lulus</option>
                              <option>Tidak Lulus</option>

                           </select>

                        </div>

                        <div class="col-md-3">

                           <select class="form-select">

                              <option>Urutkan Nilai</option>
                              <option>Tertinggi</option>
                              <option>Terendah</option>

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

                                 <th>Rank</th>
                                 <th>Nama Peserta</th>
                                 <th>Kelas</th>
                                 <th>Benar</th>
                                 <th>Salah</th>
                                 <th>Nilai</th>
                                 <th>Status</th>
                                 <th class="text-center">
                                    Aksi
                                 </th>

                              </tr>

                           </thead>

                           <tbody>

                              <tr>

                                 <td>
                                    🥇 1
                                 </td>

                                 <td>
                                    Ahmad Fauzi
                                 </td>

                                 <td>
                                    XII RPL
                                 </td>

                                 <td>
                                    28
                                 </td>

                                 <td>
                                    2
                                 </td>

                                 <td>

                                    <span class="fw-bold text-success">
                                       93
                                    </span>

                                 </td>

                                 <td>

                                    <span class="badge bg-success">
                                       Lulus
                                    </span>

                                 </td>

                                 <td class="text-center">

                                    <a href='cbt_results_details'> <button class="btn btn-sm btn-light">

                                          <i class="ti ti-eye"></i>

                                       </button></a>

                                 </td>

                              </tr>

                              <tr>

                                 <td>
                                    🥈 2
                                 </td>

                                 <td>
                                    Siti Nurhaliza
                                 </td>

                                 <td>
                                    XII RPL
                                 </td>

                                 <td>
                                    27
                                 </td>

                                 <td>
                                    3
                                 </td>

                                 <td>

                                    <span class="fw-bold text-success">
                                       90
                                    </span>

                                 </td>

                                 <td>

                                    <span class="badge bg-success">
                                       Lulus
                                    </span>

                                 </td>

                                 <td class="text-center">

                                    <a href='cbt_results_details'> <button class="btn btn-sm btn-light">

                                          <i class="ti ti-eye"></i>

                                       </button></a>

                                 </td>

                              </tr>

                              <tr>

                                 <td>
                                    15
                                 </td>

                                 <td>
                                    Budi Santoso
                                 </td>

                                 <td>
                                    XII RPL
                                 </td>

                                 <td>
                                    18
                                 </td>

                                 <td>
                                    12
                                 </td>

                                 <td>

                                    <span class="fw-bold text-danger">
                                       60
                                    </span>

                                 </td>

                                 <td>

                                    <span class="badge bg-danger">
                                       Tidak Lulus
                                    </span>

                                 </td>

                                 <td class="text-center">

                                    <a href='cbt_results_details'> <button class="btn btn-sm btn-light">

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