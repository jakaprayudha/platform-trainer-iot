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
               <div class="card border-0 shadow-sm mb-4">

                  <div class="card-header bg-white">

                     <h5 class="fw-bold mb-0">
                        📄 Informasi Berita Acara
                     </h5>

                  </div>

                  <div class="card-body">

                     <div class="row">

                        <div class="col-md-6 mb-3">

                           <label class="form-label">
                              Nomor Berita Acara
                           </label>

                           <input type="text"
                              class="form-control"
                              value="BA/TKIOT/2025/001">

                        </div>

                        <div class="col-md-6 mb-3">

                           <label class="form-label">
                              Tanggal Kegiatan
                           </label>

                           <input type="date"
                              class="form-control">

                        </div>

                        <div class="col-md-12">

                           <label class="form-label">
                              Lokasi Kegiatan
                           </label>

                           <input type="text"
                              class="form-control"
                              placeholder="Masukkan lokasi kegiatan">

                        </div>

                     </div>

                  </div>

               </div>
               <div class="card border-0 shadow-sm mb-4">

                  <div class="card-header bg-white">

                     <h5 class="fw-bold mb-0">
                        👤 PIHAK PERTAMA
                     </h5>

                  </div>

                  <div class="card-body">

                     <div class="row">

                        <div class="col-md-4">

                           <label class="form-label">
                              Nama
                           </label>

                           <input type="text"
                              class="form-control">

                        </div>

                        <div class="col-md-4">

                           <label class="form-label">
                              Jabatan
                           </label>

                           <input type="text"
                              class="form-control">

                        </div>

                        <div class="col-md-4">

                           <label class="form-label">
                              Instansi
                           </label>

                           <input type="text"
                              class="form-control">

                        </div>

                     </div>

                  </div>

               </div>
               <div class="card border-0 shadow-sm mb-4">

                  <div class="card-header bg-white">

                     <h5 class="fw-bold mb-0">
                        🏫 PIHAK KEDUA (Sekolah)
                     </h5>

                  </div>

                  <div class="card-body">

                     <div class="row">

                        <div class="col-md-4">

                           <label class="form-label">
                              Nama Kepala Sekolah
                           </label>

                           <input type="text"
                              class="form-control">

                        </div>

                        <div class="col-md-4">

                           <label class="form-label">
                              Jabatan
                           </label>

                           <input type="text"
                              class="form-control"
                              value="Kepala Sekolah">

                        </div>

                        <div class="col-md-4">

                           <label class="form-label">
                              Nama Sekolah
                           </label>

                           <select class="form-select">

                              <option>
                                 SMP Negeri 1 Bandar Khalipah
                              </option>

                              <option>
                                 SMP Negeri 2 Bandar Khalipah
                              </option>

                              <option>
                                 SMP Negeri 1 Tebing Syahbandar
                              </option>

                           </select>

                        </div>

                     </div>

                  </div>

               </div>

               <div class="card border-0 shadow-sm mb-4">

                  <div class="card-header bg-white">

                     <h5 class="fw-bold mb-0">
                        📦 Trainer Kit Yang Diterima
                     </h5>

                  </div>

                  <div class="card-body">

                     <table class="table table-bordered">

                        <thead>

                           <tr>

                              <th>No</th>
                              <th>Serial Number</th>
                              <th>Nama Trainer Kit</th>

                           </tr>

                        </thead>

                        <tbody>

                           <tr>

                              <td>1</td>

                              <td>

                                 TKIOT-2025-001

                              </td>

                              <td>

                                 Trainer Kit IoT V2

                              </td>

                           </tr>

                           <tr>

                              <td>2</td>

                              <td>

                                 TKIOT-2025-002

                              </td>

                              <td>

                                 Trainer Kit IoT V2

                              </td>

                           </tr>

                        </tbody>

                     </table>

                  </div>

               </div>
               <div class="card border-0 shadow-sm mb-4">

                  <div class="card-header bg-white">

                     <h5 class="fw-bold mb-0">
                        ✅ Pernyataan
                     </h5>

                  </div>

                  <div class="card-body">

                     <div class="form-check mb-3">

                        <input class="form-check-input"
                           type="checkbox">

                        <label class="form-check-label">

                           Telah mengikuti kegiatan pendampingan dan pelatihan.

                        </label>

                     </div>

                     <div class="form-check mb-3">

                        <input class="form-check-input"
                           type="checkbox">

                        <label class="form-check-label">

                           Telah menerima Trainer Kit IoT sesuai jumlah.

                        </label>

                     </div>

                     <div class="form-check mb-3">

                        <input class="form-check-input"
                           type="checkbox">

                        <label class="form-check-label">

                           Perangkat diterima dalam kondisi baik.

                        </label>

                     </div>

                     <div class="form-check">

                        <input class="form-check-input"
                           type="checkbox">

                        <label class="form-check-label">

                           Akan digunakan untuk kegiatan pembelajaran.

                        </label>

                     </div>

                  </div>

               </div>
               <div class="card border-0 shadow-sm mb-4">

                  <div class="card-header bg-white">

                     <h5 class="fw-bold mb-0">
                        ✍️ Validasi & Tanda Tangan Elektronik
                     </h5>

                  </div>

                  <div class="card-body">

                     <div class="row">

                        <!-- TTD -->
                        <div class="col-lg-6 mb-4">

                           <label class="form-label fw-semibold">
                              Tanda Tangan Kepala Sekolah
                           </label>

                           <div class="border rounded-3 p-4 text-center bg-light">

                              <div class="mb-3">

                                 <img id="signature-preview"
                                    src=""
                                    class="img-fluid rounded d-none"
                                    style="max-height:180px;">

                              </div>

                              <button
                                 class="btn btn-warning"
                                 data-bs-toggle="modal"
                                 data-bs-target="#signatureModal">

                                 <i class="ti ti-signature"></i>
                                 Buat Tanda Tangan

                              </button>

                           </div>

                           <input type="hidden"
                              id="signature-data"
                              name="signature_data">

                        </div>

                        <!-- STEMPEL -->
                        <div class="col-lg-6 mb-4">

                           <label class="form-label fw-semibold">
                              Stempel Sekolah
                           </label>

                           <div class="border rounded-3 p-4 bg-light">

                              <input type="file"
                                 class="form-control mb-3">

                              <small class="text-muted">

                                 Upload file PNG/JPG stempel sekolah.

                              </small>

                           </div>

                        </div>

                     </div>

                     <hr>

                     <!-- ACTION -->
                     <div class="d-flex justify-content-left gap-3 flex-wrap">

                        <button class="btn btn-primary px-4">

                           <i class="ti ti-device-floppy me-1"></i>
                           Simpan

                        </button>

                        <button class="btn btn-success px-4">

                           <i class="ti ti-file-download me-1"></i>
                           Generate PDF

                        </button>

                        <button class="btn btn-danger px-4">

                           <i class="ti ti-printer me-1"></i>
                           Cetak

                        </button>

                     </div>

                  </div>

               </div>

            </div>
         </div>
      </div>
   </div>
   <?php require 'library.php'; ?>
   <div class="modal fade"
      id="signatureModal"
      tabindex="-1">

      <div class="modal-dialog modal-lg">

         <div class="modal-content">

            <div class="modal-header">

               <h5 class="modal-title">

                  ✍️ Tanda Tangan Elektronik

               </h5>

               <button type="button"
                  class="btn-close"
                  data-bs-dismiss="modal"></button>

            </div>

            <div class="modal-body text-center">

               <canvas id="signature-pad"
                  width="700"
                  height="300"
                  style="
               border:2px dashed #dee2e6;
               border-radius:10px;
               max-width:100%;
               touch-action:none;
            ">
               </canvas>

            </div>

            <div class="modal-footer">

               <button type="button"
                  class="btn btn-secondary"
                  id="clear-signature">

                  Hapus

               </button>

               <button type="button"
                  class="btn btn-success"
                  id="save-signature">

                  Simpan Tanda Tangan

               </button>

            </div>

         </div>

      </div>

   </div>
</body>
<script>
   const canvas =
      document.getElementById("signature-pad");

   const ctx =
      canvas.getContext("2d");

   let drawing = false;

   function startDraw(e) {
      drawing = true;
      draw(e);
   }

   function endDraw() {
      drawing = false;
      ctx.beginPath();
   }

   function draw(e) {

      if (!drawing) return;

      const rect =
         canvas.getBoundingClientRect();

      const x =
         (e.clientX || e.touches[0].clientX) - rect.left;

      const y =
         (e.clientY || e.touches[0].clientY) - rect.top;

      ctx.lineWidth = 2;
      ctx.lineCap = "round";
      ctx.strokeStyle = "#000";

      ctx.lineTo(x, y);
      ctx.stroke();

      ctx.beginPath();
      ctx.moveTo(x, y);
   }

   canvas.addEventListener("mousedown", startDraw);
   canvas.addEventListener("mouseup", endDraw);
   canvas.addEventListener("mousemove", draw);

   canvas.addEventListener("touchstart", startDraw);
   canvas.addEventListener("touchend", endDraw);
   canvas.addEventListener("touchmove", draw);

   document
      .getElementById("clear-signature")
      .addEventListener("click", () => {

         ctx.clearRect(
            0,
            0,
            canvas.width,
            canvas.height
         );

      });

   document
      .getElementById("save-signature")
      .addEventListener("click", () => {

         const data =
            canvas.toDataURL("image/png");

         document
            .getElementById("signature-preview")
            .src = data;

         document
            .getElementById("signature-preview")
            .classList.remove("d-none");

         document
            .getElementById("signature-data")
            .value = data;

         bootstrap.Modal
            .getInstance(
               document.getElementById(
                  "signatureModal"
               )
            )
            .hide();

      });
</script>

</html>