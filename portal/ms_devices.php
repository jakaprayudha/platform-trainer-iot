<?php
require '../controller/profile/getProfile.php';
?>
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

                  <button class="btn btn-primary d-flex align-items-center gap-2" data-bs-toggle="modal" id="btnTambah" data-bs-target="#modalTambah">
                     <i class="ti ti-plus"></i>
                     Tambah Perangkat
                  </button>
               </div>

               <!-- CARD -->
               <div class="card shadow-sm border-0">
                  <div class="card-body">
                     <!-- FILTER -->
                     <!-- <div class="row mb-3">
                        <div class="col-md-3">
                           <select class="form-select">
                              <option value="">Semua Status</option>
                              <option>Online</option>
                              <option>Offline</option>
                           </select>
                        </div>
                     </div> -->

                     <!-- TABLE -->
                     <div class="table-responsive">
                        <table id="tblDevice" class="table table-hover align-middle">
                           <thead class="bg-light">
                              <tr>
                                 <th>No</th>
                                 <th>Device</th>
                                 <th>Sekolah</th>
                                 <th>Status</th>
                                 <th>Terakhir Update</th>
                                 <th class="text-center">Aksi</th>
                              </tr>
                           </thead>
                           <tbody id="deviceBody">
                              <tr>
                                 <td colspan="6" class="text-center">
                                    Loading...
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
               <h5 class="modal-title" id="modalTitle">
                  ➕ Tambah Perangkat IoT
               </h5>
               <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <!-- BODY -->
            <form id="formDevice">
               <input type="hidden" name="id" id="id">
               <div class="modal-body">
                  <input type="hidden" name="school" id="school" value="<?= $dataProfile['school_id'] ?>">


                  <div class="row">

                     <div class="col-md-6 mb-3">
                        <label class="form-label">Kode Device</label>
                        <input type="text" class="form-control" name="device_name" placeholder="Scan QR Code Di Trainer Masukkan Kode 00XX">
                     </div>

                     <div class="col-md-6 mb-3">
                        <label class="form-label">Tipe Device</label>
                        <select class="form-select" name="device_type">
                           <option>Trainer Kit V1</option>
                           <option>Trainer Kit V2</option>
                           <option>Trainer Kit V3</option>
                        </select>
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
   <div class="toast-container position-fixed top-0 end-0 p-3">

      <div id="liveToast" class="toast border-0 shadow" role="alert">

         <div class="toast-header">
            <strong class="me-auto" id="toastTitle">Informasi</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
         </div>

         <div class="toast-body" id="toastMessage">
            Pesan
         </div>

      </div>

   </div>
</body>


<script>
   function showToast(title, message, type = 'success') {

      const toastEl = document.getElementById('liveToast');

      toastEl.classList.remove(
         'text-bg-success',
         'text-bg-danger',
         'text-bg-warning',
         'text-bg-info'
      );

      if (type === 'success') {
         toastEl.classList.add('text-bg-success');
      } else if (type === 'error') {
         toastEl.classList.add('text-bg-danger');
      } else if (type === 'warning') {
         toastEl.classList.add('text-bg-warning');
      } else {
         toastEl.classList.add('text-bg-info');
      }

      $('#toastTitle').text(title);
      $('#toastMessage').text(message);

      const toast = new bootstrap.Toast(toastEl, {
         delay: 3000
      });

      toast.show();
   }
</script>
<script>
   $('#formDevice').submit(function(e) {


      e.preventDefault();

      $.ajax({
         url: '../controller/device/storeDevice.php',
         type: 'POST',
         data: $(this).serialize(),
         dataType: 'json',

         beforeSend: function() {

            $('button[type="submit"]')
               .prop('disabled', true)
               .html(
                  '<span class="spinner-border spinner-border-sm"></span> Menyimpan...'
               );

         },

         success: function(response) {

            if (response.status) {

               $('#modalTambah').modal('hide');

               showToast(
                  'Berhasil',
                  response.message,
                  'success'
               );
               loadDevice(); // reload data

               $('#formDevice')[0].reset();

               $('#id').val('');


            } else {

               showToast(
                  'Gagal',
                  response.message,
                  'error'
               );

            }

         },

         error: function(xhr) {

            showToast(
               'Error',
               'Terjadi kesalahan pada server',
               'error'
            );

            console.log(xhr.responseText);

         },

         complete: function() {

            $('button[type="submit"]')
               .prop('disabled', false)
               .html('💾 Simpan');

         }

      });

   });
</script>

<script>
   $(document).ready(function() {
      loadDevice();
   });

   function loadDevice() {

      $.ajax({
         url: '../controller/device/getDevice.php?school_id=<?= $dataProfile['school_id'] ?>',
         type: 'GET',
         dataType: 'json',

         success: function(response) {

            console.log(response);

            let html = '';

            if (!response.data || response.data.length == 0) {

               html = `
               <tr>
                  <td colspan="6" class="text-center">
                     Belum ada data device
                  </td>
               </tr>
            `;

            } else {

               $.each(response.data, function(index, row) {

                  let badgeStatus =
                     row.status == 'Online' ?
                     'bg-success' :
                     'bg-danger';

                  html += `
                  <tr>
                     <td>${index+1}</td>
                     <td>${row.device_name}</td>
                     <td>${row.school_name ?? '-'}</td>
                     <td>
                        <span class="badge ${badgeStatus}">
                           ${row.status}
                        </span>
                     </td>
                     <td>${row.created_at}</td>
                     <td>
                       <button
                           class="btn btn-sm btn-warning btnEdit"
                           data-id="${row.id}">
                           <i class="ti ti-edit"></i>
                        </button>
                       <button
                           class="btn btn-sm btn-danger btnDelete"
                           data-id="${row.id}">
                           <i class="ti ti-trash"></i>
                        </button>
                     </td>
                  </tr>
               `;
               });

            }

            $('#deviceBody').html(html);

            if (response.data && response.data.length > 0) {

               if ($.fn.DataTable.isDataTable('#tblDevice')) {
                  $('#tblDevice').DataTable().destroy();
               }

               $('#tblDevice').DataTable({
                  responsive: true,
                  pageLength: 10
               });

            }

         },

         error: function(xhr) {

            console.log(xhr.responseText);

         }

      });

   }

   $(document).on('click', '.btnEdit', function() {

      let id = $(this).data('id');

      $.ajax({
         url: '../controller/device/getDeviceById.php',
         type: 'GET',
         data: {
            id: id
         },
         dataType: 'json',

         success: function(response) {

            console.log(response);

            if (!response.status) {
               showToast(
                  'Gagal',
                  response.message,
                  'error'
               );
               return;
            }

            let row = response.data;

            $('#modalTitle').html(
               '✏️ Edit Perangkat IoT'
            );

            $('#id').val(row.id);

            $('[name="device_name"]').val(
               row.device_name
            );

            $('[name="device_type"]').val(
               row.device_type
            );

            $('[name="status"]').val(
               row.status
            );

            $('#modalTambah').modal('show');

         }

      });

   });

   $('#btnTambah').click(function() {

      $('#modalTitle').html(
         '➕ Tambah Perangkat IoT'
      );

      $('#formDevice')[0].reset();

      $('#id').val('');

   });

   $(document).on('click', '.btnDelete', function() {

      let id = $(this).data('id');

      Swal.fire({
         title: 'Hapus Device?',
         text: 'Data tidak dapat dikembalikan',
         icon: 'warning',
         showCancelButton: true,
         confirmButtonText: 'Ya, Hapus'
      }).then((result) => {

         if (result.isConfirmed) {

            $.ajax({
               url: '../controller/device/deleteDevice.php',
               type: 'POST',
               data: {
                  id: id
               },
               dataType: 'json',

               success: function(response) {

                  if (response.status) {

                     showToast(
                        'Berhasil',
                        'Device berhasil dihapus',
                        'success'
                     );

                     loadDevice();

                  }

               }

            });

         }

      });

   });
</script>

</html>