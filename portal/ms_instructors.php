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
                     <h4 class="fw-bold mb-1">📡 Master Instruktur</h4>
                     <p class="text-muted mb-0">Kelola seluruh instruktur sekolah</p>
                  </div>

                  <button class="btn btn-primary d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#modalTambah">
                     <i class="ti ti-plus"></i>
                     Tambah Instruktur
                  </button>
               </div>

               <!-- CARD -->
               <div class="card shadow-sm border-0">
                  <div class="card-body">

                     <!-- FILTER -->
                     <div class="row mb-3">
                        <div class="col-md-3">
                           <input type="text" class="form-control" placeholder="🔍 Cari Instruktur..." id="searchInput">
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
                                 <th>Nama</th>
                                 <th>Email</th>
                                 <th>Keahlian</th>
                                 <th>No HP</th>
                                 <th>Status</th>
                                 <th class="text-center">Aksi</th>
                              </tr>
                           </thead>
                           <tbody>

                              <tr>
                                 <td>1</td>
                                 <td>Andi Saputra</td>
                                 <td>andi@mail.com</td>
                                 <td><span class="badge bg-primary">IoT Dasar</span></td>
                                 <td>08123456789</td>
                                 <td><span class="badge bg-success">Aktif</span></td>
                                 <td class="text-center">
                                    <button class="btn btn-sm btn-light"><i class="ti ti-eye"></i></button>
                                    <button class="btn btn-sm btn-warning"><i class="ti ti-edit"></i></button>
                                    <button class="btn btn-sm btn-danger"><i class="ti ti-trash"></i></button>
                                 </td>
                              </tr>
                              <tr>
                                 <td>1</td>
                                 <td>Andi Saputra</td>
                                 <td>andi@mail.com</td>
                                 <td><span class="badge bg-primary">IoT Dasar</span></td>
                                 <td>08123456789</td>
                                 <td><span class="badge bg-success">Aktif</span></td>
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
               <h5 class="modal-title">➕ Tambah Instruktur IoT</h5>
               <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <!-- BODY -->
            <form id="formDevice">
               <div class="modal-body">

                  <div class="row">

                     <div class="col-md-6 mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama">
                     </div>

                     <div class="col-md-6 mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email">
                     </div>

                     <div class="col-md-6 mb-3">
                        <label class="form-label">No HP</label>
                        <input type="text" class="form-control" name="phone">
                     </div>

                     <div class="col-md-6 mb-3">
                        <label class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="address">
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


</html>