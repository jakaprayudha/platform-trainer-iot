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
                        📚 Bank Soal
                     </h4>

                     <p class="text-muted mb-0">
                        Kumpulan soal pembelajaran, quiz dan sertifikasi IoT
                     </p>

                  </div>

                  <button class="btn btn-primary">

                     <i class="ti ti-plus"></i>
                     Tambah Soal

                  </button>

               </div>

               <!-- SUMMARY -->
               <div class="row mb-0">

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="card border-0 shadow-sm">

                        <div class="card-body">

                           <h3 class="fw-bold text-primary">
                              250
                           </h3>

                           <small class="text-muted">
                              Total Soal
                           </small>

                        </div>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="card border-0 shadow-sm">

                        <div class="card-body">

                           <h3 class="fw-bold text-success">
                              18
                           </h3>

                           <small class="text-muted">
                              Kategori
                           </small>

                        </div>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="card border-0 shadow-sm">

                        <div class="card-body">

                           <h3 class="fw-bold text-warning">
                              42
                           </h3>

                           <small class="text-muted">
                              Quiz Aktif
                           </small>

                        </div>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="card border-0 shadow-sm">

                        <div class="card-body">

                           <h3 class="fw-bold text-danger">
                              5
                           </h3>

                           <small class="text-muted">
                              Sertifikasi
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

                        <div class="col-md-3">

                           <input type="text"
                              class="form-control"
                              placeholder="🔍 Cari Soal..."
                              id="searchInput">

                        </div>

                        <div class="col-md-3">

                           <select class="form-select">

                              <option value="">
                                 Semua Kategori
                              </option>

                              <option>
                                 ESP32
                              </option>

                              <option>
                                 ESP8266
                              </option>

                              <option>
                                 Sensor
                              </option>

                              <option>
                                 IoT
                              </option>

                           </select>

                        </div>

                     </div>

                     <!-- TABLE -->
                     <div class="table-responsive">

                        <table id="bankSoalTable"
                           class="table table-hover align-middle">

                           <thead class="bg-light">

                              <tr>

                                 <th>No</th>
                                 <th>Pertanyaan</th>
                                 <th>Kategori</th>
                                 <th>Level</th>
                                 <th>Tipe</th>
                                 <th>Poin</th>
                                 <th>Status</th>
                                 <th class="text-center">
                                    Aksi
                                 </th>

                              </tr>

                           </thead>

                           <tbody>

                              <tr>

                                 <td>1</td>

                                 <td>
                                    Apa fungsi pin GPIO pada ESP32?
                                 </td>

                                 <td>
                                    <span class="badge bg-primary">
                                       ESP32
                                    </span>
                                 </td>

                                 <td>
                                    <span class="badge bg-success">
                                       Beginner
                                    </span>
                                 </td>

                                 <td>
                                    Pilihan Ganda
                                 </td>

                                 <td>
                                    10
                                 </td>

                                 <td>
                                    <span class="badge bg-success">
                                       Aktif
                                    </span>
                                 </td>

                                 <td class="text-center">

                                    <button class="btn btn-sm btn-light">
                                       <i class="ti ti-eye"></i>
                                    </button>

                                 </td>

                              </tr>

                              <tr>

                                 <td>2</td>

                                 <td>
                                    Jelaskan cara kerja sensor DHT11!
                                 </td>

                                 <td>
                                    <span class="badge bg-info">
                                       Sensor
                                    </span>
                                 </td>

                                 <td>
                                    <span class="badge bg-warning text-dark">
                                       Intermediate
                                    </span>
                                 </td>

                                 <td>
                                    Essay
                                 </td>

                                 <td>
                                    20
                                 </td>

                                 <td>
                                    <span class="badge bg-success">
                                       Aktif
                                    </span>
                                 </td>

                                 <td class="text-center">

                                    <button class="btn btn-sm btn-light">
                                       <i class="ti ti-eye"></i>
                                    </button>

                                 </td>

                              </tr>

                              <tr>

                                 <td>3</td>

                                 <td>
                                    Sebutkan protokol komunikasi IoT yang umum digunakan.
                                 </td>

                                 <td>
                                    <span class="badge bg-dark">
                                       IoT
                                    </span>
                                 </td>

                                 <td>
                                    <span class="badge bg-danger">
                                       Advanced
                                    </span>
                                 </td>

                                 <td>
                                    Essay
                                 </td>

                                 <td>
                                    30
                                 </td>

                                 <td>
                                    <span class="badge bg-secondary">
                                       Draft
                                    </span>
                                 </td>

                                 <td class="text-center">

                                    <button class="btn btn-sm btn-light">
                                       <i class="ti ti-eye"></i>
                                    </button>

                                 </td>

                              </tr>

                              <tr>

                                 <td>4</td>

                                 <td>
                                    Berapa tegangan kerja modul ESP8266?
                                 </td>

                                 <td>
                                    <span class="badge bg-primary">
                                       ESP8266
                                    </span>
                                 </td>

                                 <td>
                                    <span class="badge bg-success">
                                       Beginner
                                    </span>
                                 </td>

                                 <td>
                                    Pilihan Ganda
                                 </td>

                                 <td>
                                    10
                                 </td>

                                 <td>
                                    <span class="badge bg-success">
                                       Aktif
                                    </span>
                                 </td>

                                 <td class="text-center">

                                    <button class="btn btn-sm btn-light">
                                       <i class="ti ti-eye"></i>
                                    </button>

                                 </td>

                              </tr>

                              <tr>

                                 <td>5</td>

                                 <td>
                                    Jelaskan perbedaan MQTT dan HTTP pada sistem IoT.
                                 </td>

                                 <td>
                                    <span class="badge bg-dark">
                                       IoT
                                    </span>
                                 </td>

                                 <td>
                                    <span class="badge bg-danger">
                                       Advanced
                                    </span>
                                 </td>

                                 <td>
                                    Essay
                                 </td>

                                 <td>
                                    25
                                 </td>

                                 <td>
                                    <span class="badge bg-success">
                                       Aktif
                                    </span>
                                 </td>

                                 <td class="text-center">

                                    <button class="btn btn-sm btn-light">
                                       <i class="ti ti-eye"></i>
                                    </button>

                                 </td>

                              </tr>

                           </tbody>

                        </table>

                     </div>

                     <!-- PAGINATION -->
                     <nav class="mt-4">

                        <ul class="pagination justify-content-end">

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
                              <a class="page-link">3</a>
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