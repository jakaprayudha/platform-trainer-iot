<!doctype html>
<html lang="en">

<head>
   <?php require 'partial-head.php' ?>
</head>

<body>

   <div class="page-wrapper"
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin6"
      data-sidebartype="full"
      data-sidebar-position="fixed"
      data-header-position="fixed">

      <?php require 'partial-topstrip.php' ?>

      <aside class="left-sidebar">
         <?php require 'partial-sidebar.php' ?>
      </aside>

      <div class="body-wrapper">

         <?php require 'partial-header.php' ?>

         <div class="body-wrapper-inner">

            <div class="container-fluid">

               <!-- HEADER -->
               <div class="d-flex justify-content-between align-items-center mb-4">

                  <div>

                     <h4 class="fw-bold mb-1">
                        🎓 Management Sekolah Penerima Trainer Kit
                     </h4>

                     <p class="text-muted mb-0">
                        Kelola sekolah penerima trainer kit dan monitoring aktivasi platform
                     </p>

                  </div>

                  <button class="btn btn-primary d-flex align-items-center gap-2"
                     data-bs-toggle="modal"
                     data-bs-target="#modalTambah">

                     <i class="ti ti-plus"></i>
                     Tambah Sekolah

                  </button>

               </div>

               <!-- CARD -->
               <div class="card shadow-sm border-0">

                  <div class="card-body">

                     <!-- FILTER -->
                     <div class="row mb-3">

                        <div class="col-md-3">

                           <input type="text"
                              class="form-control"
                              placeholder="🔍 Cari Sekolah...">

                        </div>

                        <div class="col-md-3">

                           <select class="form-select">

                              <option value="">
                                 Semua Status
                              </option>

                              <option>
                                 Aktif
                              </option>

                              <option>
                                 Belum Aktif
                              </option>

                           </select>

                        </div>

                        <div class="col-md-3">

                           <select class="form-select">

                              <option value="">
                                 Semua Instruktur
                              </option>

                              <option>
                                 Budi Santoso
                              </option>

                              <option>
                                 Andi Rahman
                              </option>

                           </select>

                        </div>

                     </div>

                     <!-- TABLE -->
                     <div class="table-responsive">

                        <table class="table table-hover align-middle">

                           <thead class="bg-light">

                              <tr>

                                 <th>No</th>
                                 <th>Sekolah</th>
                                 <th>PIC</th>
                                 <th>Trainer Kit</th>
                                 <th>Instruktur</th>
                                 <th>Status</th>
                                 <th>Aktivasi</th>
                                 <th class="text-center">
                                    Aksi
                                 </th>

                              </tr>

                           </thead>

                           <tbody>

                              <!-- ROW -->
                              <tr>

                                 <td>1</td>

                                 <td>

                                    <div class="fw-semibold">
                                       SMKN 1 Medan
                                    </div>

                                    <small class="text-muted">
                                       Sumatera Utara
                                    </small>

                                 </td>

                                 <td>

                                    <div class="fw-semibold">
                                       Ahmad Fauzi
                                    </div>

                                    <small class="text-muted">
                                       08123456789
                                    </small>

                                 </td>

                                 <td>

                                    <span class="badge bg-primary">
                                       25 Unit
                                    </span>

                                 </td>

                                 <td>

                                    <div class="fw-semibold">
                                       Budi Santoso
                                    </div>

                                    <small class="text-muted">
                                       ESP32 Trainer
                                    </small>

                                 </td>

                                 <td>

                                    <span class="badge bg-success">
                                       Aktif
                                    </span>

                                 </td>

                                 <td>

                                    <span class="badge bg-info">
                                       Sudah Aktivasi
                                    </span>

                                 </td>

                                 <td class="text-center">

                                    <a href="ms_users_details">
                                       <button class="btn btn-sm btn-light">
                                          <i class="ti ti-eye"></i>
                                       </button>
                                    </a>

                                    <button class="btn btn-sm btn-warning text-white">
                                       <i class="ti ti-edit"></i>
                                    </button>

                                    <button class="btn btn-sm btn-danger">
                                       <i class="ti ti-trash"></i>
                                    </button>

                                 </td>

                              </tr>

                              <!-- ROW -->
                              <tr>

                                 <td>2</td>

                                 <td>

                                    <div class="fw-semibold">
                                       SMKN 5 Binjai
                                    </div>

                                    <small class="text-muted">
                                       Sumatera Utara
                                    </small>

                                 </td>

                                 <td>

                                    <div class="fw-semibold">
                                       Siti Rahma
                                    </div>

                                    <small class="text-muted">
                                       08234567890
                                    </small>

                                 </td>

                                 <td>

                                    <span class="badge bg-primary">
                                       15 Unit
                                    </span>

                                 </td>

                                 <td>

                                    <div class="fw-semibold">
                                       Andi Rahman
                                    </div>

                                    <small class="text-muted">
                                       Smart Farming
                                    </small>

                                 </td>

                                 <td>

                                    <span class="badge bg-warning text-dark">
                                       Monitoring
                                    </span>

                                 </td>

                                 <td>

                                    <span class="badge bg-secondary">
                                       Belum Aktivasi
                                    </span>

                                 </td>

                                 <td class="text-center">

                                    <button class="btn btn-sm btn-light">
                                       <i class="ti ti-eye"></i>
                                    </button>
                                    </a>


                                    <button class="btn btn-sm btn-warning text-white">
                                       <i class="ti ti-edit"></i>
                                    </button>

                                    <button class="btn btn-sm btn-danger">
                                       <i class="ti ti-trash"></i>
                                    </button>

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

   <!-- MODAL -->
   <div class="modal fade"
      id="modalTambah"
      tabindex="-1">

      <div class="modal-dialog modal-lg modal-dialog-centered">

         <div class="modal-content border-0 shadow">

            <!-- HEADER -->
            <div class="modal-header">

               <h5 class="modal-title">
                  ➕ Tambah Sekolah Penerima Trainer Kit
               </h5>

               <button type="button"
                  class="btn-close"
                  data-bs-dismiss="modal">
               </button>

            </div>

            <!-- FORM -->
            <form>

               <div class="modal-body">

                  <div class="row">

                     <div class="col-md-6 mb-3">

                        <label class="form-label">
                           Nama Sekolah
                        </label>

                        <input type="text"
                           class="form-control">

                     </div>

                     <div class="col-md-6 mb-3">

                        <label class="form-label">
                           NPSN
                        </label>

                        <input type="text"
                           class="form-control">

                     </div>

                     <div class="col-md-6 mb-3">

                        <label class="form-label">
                           PIC Sekolah
                        </label>

                        <input type="text"
                           class="form-control">

                     </div>

                     <div class="col-md-6 mb-3">

                        <label class="form-label">
                           No HP PIC
                        </label>

                        <input type="text"
                           class="form-control">

                     </div>

                     <div class="col-md-6 mb-3">

                        <label class="form-label">
                           Email Sekolah
                        </label>

                        <input type="email"
                           class="form-control">

                     </div>

                     <div class="col-md-6 mb-3">

                        <label class="form-label">
                           Jumlah Trainer Kit
                        </label>

                        <input type="number"
                           class="form-control">

                     </div>

                     <div class="col-md-6 mb-3">

                        <label class="form-label">
                           Instruktur Pendamping
                        </label>

                        <select class="form-select">

                           <option>
                              Pilih Instruktur
                           </option>

                           <option>
                              Budi Santoso
                           </option>

                           <option>
                              Andi Rahman
                           </option>

                        </select>

                     </div>

                     <div class="col-md-6 mb-3">

                        <label class="form-label">
                           Status
                        </label>

                        <select class="form-select">

                           <option>
                              Aktif
                           </option>

                           <option>
                              Monitoring
                           </option>

                           <option>
                              Nonaktif
                           </option>

                        </select>

                     </div>

                     <div class="col-md-12 mb-3">

                        <label class="form-label">
                           Alamat Sekolah
                        </label>

                        <textarea class="form-control"
                           rows="3"></textarea>

                     </div>

                  </div>

               </div>

               <!-- FOOTER -->
               <div class="modal-footer">

                  <button type="button"
                     class="btn btn-light"
                     data-bs-dismiss="modal">

                     Batal

                  </button>

                  <button type="submit"
                     class="btn btn-primary">

                     💾 Simpan Data

                  </button>

               </div>

            </form>

         </div>

      </div>

   </div>

</body>

</html>