<!doctype html>
<html lang="en">

<head>
   <?php require 'partial-head.php' ?>
   <style>
      .table-wrapper {
         width: 100%;
         overflow-x: auto;
      }

      .table-fixed {
         min-width: 1200px;
         /* paksa lebar */
      }

      .table th {
         font-size: 13px;
         color: #6b7280;
         white-space: nowrap;
      }

      .table td {
         font-size: 14px;
         vertical-align: middle;
      }

      .cell-wrap {
         white-space: normal;
         min-width: 200px;
      }

      .badge-trainer {
         padding: 6px 12px;
         border-radius: 20px;
         font-weight: 500;
      }

      .search-box {
         max-width: 300px;
      }
   </style>
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
                     <h4 class="fw-bold mb-1">🏫 Data Sekolah & Trainer IoT</h4>
                     <p class="text-muted mb-0">Monitoring distribusi trainer di wilayah Serdang Bedagai</p>
                  </div>

                  <button class="btn btn-primary d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#modalTambah">
                     <i class="ti ti-plus"></i>
                     Tambah Sekolah
                  </button>
               </div>


               <!-- CARD -->
               <div class="card shadow-sm border-0">
                  <div class="card-body">
                     <div class="d-flex justify-content-between mb-3">

                        <!-- SEARCH -->
                        <input type="text" id="searchInput"
                           class="form-control search-box"
                           placeholder="🔍 Cari sekolah / alamat / kontak...">

                        <!-- INFO -->
                        <small class="text-muted align-self-center">
                           Total: 3 Sekolah
                        </small>

                     </div>

                     <!-- TABLE -->
                     <div class="table-wrapper">
                        <table id="tableSekolah" class="table table-hover table-fixed align-middle">

                           <thead class="bg-light">
                              <tr>
                                 <th style="width:50px;">No</th>
                                 <th style="min-width:220px;">Sekolah</th>
                                 <th style="min-width:260px;">Alamat</th>
                                 <th style="min-width:200px;">Penanggung Jawab</th>
                                 <th style="min-width:200px;">Kontak</th>
                                 <th style="width:140px;">Trainer</th>
                                 <th style="width:160px;">Koordinat</th>
                                 <th style="width:120px;" class="text-center">Aksi</th>
                              </tr>
                           </thead>

                           <tbody>

                              <tr>
                                 <td>1</td>

                                 <td class="cell-wrap">
                                    <strong>SMK Negeri 1 Sei Rampah</strong><br>
                                    <small class="text-muted">Serdang Bedagai</small>
                                 </td>

                                 <td class="cell-wrap">
                                    Jl. Negara No.12, Sei Rampah, Serdang Bedagai
                                 </td>

                                 <td>
                                    <strong>Bpk. Hendra Saputra</strong><br>
                                    <small class="text-muted">Koordinator IoT</small>
                                 </td>

                                 <td>
                                    <small>
                                       📞 0812-3456-7890<br>
                                       ✉️ smkn1seirampah@mail.com
                                    </small>
                                 </td>

                                 <td>
                                    <span class="badge bg-success badge-trainer">5 Trainer</span>
                                 </td>

                                 <td>
                                    <small>-3.5642, 98.9598</small>
                                 </td>

                                 <td class="text-center">
                                    <a href="ms_school_device">
                                       <button class="btn btn-sm btn-light"><i class="ti ti-eye"></i></button>
                                    </a>
                                 </td>
                              </tr>

                              <!-- ROW 2 -->
                              <tr>
                                 <td>2</td>

                                 <td class="cell-wrap">
                                    <strong>SMK Negeri 2 Perbaungan</strong><br>
                                    <small class="text-muted">Serdang Bedagai</small>
                                 </td>

                                 <td class="cell-wrap">
                                    Jl. Pendidikan No.5, Perbaungan
                                 </td>

                                 <td>
                                    <strong>Ibu Dewi Lestari</strong><br>
                                    <small class="text-muted">Penanggung Jawab</small>
                                 </td>

                                 <td>
                                    <small>
                                       📞 0813-9876-5432<br>
                                       ✉️ smkn2perbaungan@mail.com
                                    </small>
                                 </td>

                                 <td>
                                    <span class="badge bg-primary badge-trainer">3 Trainer</span>
                                 </td>

                                 <td>
                                    <small>-3.5521, 99.0283</small>
                                 </td>

                                 <td class="text-center">
                                    <a href="ms_school_device">
                                       <button class="btn btn-sm btn-light"><i class="ti ti-eye"></i></button>
                                    </a>
                                 </td>
                              </tr>

                              <!-- ROW 3 -->
                              <tr>
                                 <td>3</td>

                                 <td class="cell-wrap">
                                    <strong>SMK Swasta Teluk Mengkudu</strong><br>
                                    <small class="text-muted">Serdang Bedagai</small>
                                 </td>

                                 <td class="cell-wrap">
                                    Jl. Raya Teluk Mengkudu, Serdang Bedagai
                                 </td>

                                 <td>
                                    <strong>Bpk. Ahmad Fauzi</strong><br>
                                    <small class="text-muted">Koordinator Lapangan</small>
                                 </td>

                                 <td>
                                    <small>
                                       📞 0821-1122-3344<br>
                                       ✉️ smkteluk@mail.com
                                    </small>
                                 </td>

                                 <td>
                                    <span class="badge bg-warning text-dark badge-trainer">2 Trainer</span>
                                 </td>

                                 <td>
                                    <small>-3.6215, 99.1234</small>
                                 </td>

                                 <td class="text-center">
                                    <a href="ms_school_device">
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
   <!-- ================= MODAL TAMBAH DEVICE ================= -->
   <div class="modal fade" id="modalTambah" tabindex="-1">
      <div class="modal-dialog modal-xl modal-dialog-centered">
         <div class="modal-content border-0 shadow-lg rounded-4">

            <!-- HEADER -->
            <div class="modal-header text-dark rounded-top-4">
               <h5 class="modal-title">🏫 Tambah Data Sekolah & Trainer</h5>
               <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <!-- BODY -->
            <form id="formSekolah">
               <div class="modal-body">

                  <div class="row g-3">

                     <!-- NAMA SEKOLAH -->
                     <div class="col-md-6">
                        <label class="form-label fw-semibold">Nama Sekolah</label>
                        <input type="text" class="form-control" name="nama_sekolah" required>
                     </div>

                     <!-- KOTA -->
                     <div class="col-md-6">
                        <label class="form-label fw-semibold">Kota / Kabupaten</label>
                        <input type="text" class="form-control" name="kota" required>
                     </div>

                     <!-- ALAMAT -->
                     <div class="col-md-12">
                        <label class="form-label fw-semibold">Alamat Lengkap</label>
                        <textarea class="form-control" name="alamat" rows="2" required></textarea>
                     </div>

                     <!-- PENANGGUNG JAWAB -->
                     <div class="col-md-6">
                        <label class="form-label fw-semibold">Penanggung Jawab</label>
                        <input type="text" class="form-control" name="penanggung_jawab" required>
                     </div>

                     <!-- JABATAN -->
                     <div class="col-md-6">
                        <label class="form-label fw-semibold">Jabatan</label>
                        <input type="text" class="form-control" name="jabatan">
                     </div>

                     <!-- NO HP -->
                     <div class="col-md-6">
                        <label class="form-label fw-semibold">Nomor HP</label>
                        <input type="text" class="form-control" name="no_hp" required>
                     </div>

                     <!-- EMAIL -->
                     <div class="col-md-6">
                        <label class="form-label fw-semibold">Email</label>
                        <input type="email" class="form-control" name="email">
                     </div>

                     <!-- TOTAL TRAINER -->
                     <div class="col-md-6">
                        <label class="form-label fw-semibold">Total Trainer</label>
                        <input type="number" class="form-control" name="total_trainer" min="0">
                     </div>

                     <!-- STATUS -->
                     <div class="col-md-6">
                        <label class="form-label fw-semibold">Status</label>
                        <select class="form-select" name="status">
                           <option value="Aktif">Aktif</option>
                           <option value="Pending">Pending</option>
                           <option value="Nonaktif">Nonaktif</option>
                        </select>
                     </div>

                     <!-- KOORDINAT -->
                     <div class="col-md-6">
                        <label class="form-label fw-semibold">Latitude</label>
                        <input type="text" class="form-control" name="latitude" placeholder="-3.5642">
                     </div>

                     <div class="col-md-6">
                        <label class="form-label fw-semibold">Longitude</label>
                        <input type="text" class="form-control" name="longitude" placeholder="98.9598">
                     </div>

                  </div>

               </div>

               <!-- FOOTER -->
               <div class="modal-footer border-0">
                  <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                     ❌ Batal
                  </button>

                  <button type="submit" class="btn btn-primary px-4">
                     💾 Simpan Data
                  </button>
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