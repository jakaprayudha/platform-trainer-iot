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
                     <h4 class="fw-bold mb-1">📡 Master Data Perangkat IoT</h4>
                     <p class="text-muted mb-0">Kelola seluruh device IoT sekolah</p>
                  </div>

                  <button class="btn btn-primary d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#modalTambah">
                     <i class="ti ti-plus"></i>
                     Tambah Perangkat
                  </button>
               </div>

               <!-- CARD -->
               <div class="card shadow-sm border-0">
                  <div class="card-body">

                     <!-- FILTER -->
                     <div class="row mb-3">
                        <div class="col-md-3">
                           <input type="text" class="form-control" placeholder="🔍 Cari perangkat..." id="searchInput">
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
                                 <th>Device</th>
                                 <th>Sekolah</th>
                                 <th>Lokasi</th>
                                 <th>Status</th>
                                 <th>Terakhir Update</th>
                                 <th class="text-center">Aksi</th>
                              </tr>
                           </thead>
                           <tbody>

                              <tr>
                                 <td>1</td>
                                 <td>
                                    <div class="d-flex align-items-center gap-2">
                                       <span class="badge bg-primary">ESP32</span>
                                       Sensor Suhu
                                    </div>
                                 </td>
                                 <td>SMK 1 Medan</td>
                                 <td>Lab IoT</td>
                                 <td><span class="badge bg-success">Online</span></td>
                                 <td>2 menit lalu</td>
                                 <td class="text-center">
                                    <button class="btn btn-sm btn-light"><i class="ti ti-eye"></i></button>
                                    <button class="btn btn-sm btn-warning"><i class="ti ti-edit"></i></button>
                                    <button class="btn btn-sm btn-danger"><i class="ti ti-trash"></i></button>
                                 </td>
                              </tr>

                              <tr>
                                 <td>2</td>
                                 <td>
                                    <div class="d-flex align-items-center gap-2">
                                       <span class="badge bg-secondary">Arduino</span>
                                       Lampu Smart
                                    </div>
                                 </td>
                                 <td>SMK 2 Jakarta</td>
                                 <td>Ruang Praktikum</td>
                                 <td><span class="badge bg-danger">Offline</span></td>
                                 <td>1 jam lalu</td>
                                 <td class="text-center">
                                    <button class="btn btn-sm btn-light"><i class="ti ti-eye"></i></button>
                                    <button class="btn btn-sm btn-warning"><i class="ti ti-edit"></i></button>
                                    <button class="btn btn-sm btn-danger"><i class="ti ti-trash"></i></button>
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
   <!-- ================= MODAL TAMBAH DEVICE ================= -->
   <div class="modal fade" id="modalTambah" tabindex="-1">
      <div class="modal-dialog modal-lg modal-dialog-centered">
         <div class="modal-content border-0 shadow">

            <!-- HEADER -->
            <div class="modal-header">
               <h5 class="modal-title">➕ Tambah Perangkat IoT</h5>
               <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <!-- BODY -->
            <form id="formDevice">
               <div class="modal-body">

                  <div class="row">

                     <div class="col-md-6 mb-3">
                        <label class="form-label">Nama Device</label>
                        <input type="text" class="form-control" name="device_name" placeholder="Sensor Suhu">
                     </div>

                     <div class="col-md-6 mb-3">
                        <label class="form-label">Tipe Device</label>
                        <select class="form-select" name="device_type">
                           <option value="">Pilih</option>
                           <option>ESP32</option>
                           <option>Arduino</option>
                           <option>Raspberry Pi</option>
                        </select>
                     </div>

                     <div class="col-md-6 mb-3">
                        <label class="form-label">Sekolah</label>
                        <select class="form-select" name="school">
                           <option value="">Pilih Sekolah</option>
                           <option>SMK 1 Medan</option>
                           <option>SMK 2 Jakarta</option>
                        </select>
                     </div>

                     <div class="col-md-6 mb-3">
                        <label class="form-label">Lokasi</label>
                        <input type="text" class="form-control" name="location" placeholder="Lab IoT">
                     </div>

                     <div class="col-md-6 mb-3">
                        <label class="form-label">Status</label>
                        <select class="form-select" name="status">
                           <option value="Online">Online</option>
                           <option value="Offline">Offline</option>
                        </select>
                     </div>

                  </div>

               </div>

               <!-- FOOTER -->
               <div class="modal-footer">
                  <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-primary">💾 Simpan</button>
               </div>

            </form>

         </div>
      </div>
   </div>
</body>

<script>
   $(document).ready(function() {
      var table = $('#deviceTable').DataTable({
         responsive: true,
         pageLength: 10,
         language: {
            search: "",
            searchPlaceholder: "Cari data..."
         }
      });

      // custom search input
      $('#searchInput').on('keyup', function() {
         table.search(this.value).draw();
      });
   });
</script>

</html>