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
               </div>

               <!-- CARD -->
               <div class="card shadow-sm border-0">
                  <div class="card-body">

                     <!-- FILTER -->
                     <div class="row mb-3">
                        <div class="col-md-3">
                           <input type="text" class="form-control" placeholder="🔍 Cari Praktikum..." id="searchInput">
                        </div>

                        <div class="col-md-3">
                           <select class="form-select">
                              <option value="">Semua Status</option>
                              <option>Online</option>
                              <option>Offline</option>
                           </select>
                        </div>
                     </div>

                     <!-- TABLE -->
                     <div class="table-responsive">
                        <table id="deviceTable" class="table table-hover align-middle">
                           <thead class="bg-light">
                              <tr>
                                 <th>No</th>
                                 <th>Judul</th>
                                 <th>Kelas</th>
                                 <th>Materi</th>
                                 <th>Progress</th>
                                 <th>Device</th>
                                 <th>Status</th>
                                 <th class="text-center">Aksi</th>
                              </tr>
                           </thead>
                           <tbody>

                              <tr>
                                 <td>1</td>
                                 <td>Monitoring Suhu</td>
                                 <td>XII RPL</td>
                                 <td>Sensor DHT22</td>
                                 <td>
                                    <div class="progress" style="height:8px;">
                                       <div class="progress-bar bg-success" style="width:70%"></div>
                                    </div>
                                    <small>70%</small>
                                 </td>
                                 <td>ESP32</td>
                                 <td><span class="badge bg-success">Aktif</span></td>
                                 <td class="text-center">
                                    <a href="praktikum_detail">
                                       <button class="btn btn-sm btn-light"><i class="ti ti-eye"></i></button>
                                    </a>
                                 </td>
                              </tr>
                              <tr>
                                 <td>2</td>
                                 <td>Kontrol Lampu IoT</td>
                                 <td>XI TKJ</td>
                                 <td>Relay Control</td>
                                 <td>
                                    <div class="progress" style="height:8px;">
                                       <div class="progress-bar bg-primary" style="width:100%"></div>
                                    </div>
                                    <small>100%</small>
                                 </td>
                                 <td>ESP8266</td>
                                 <td><span class="badge bg-secondary">Selesai</span></td>
                                 <td class="text-center">
                                    <a href="praktikum_detail">
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