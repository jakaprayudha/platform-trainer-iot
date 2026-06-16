<?php

$kode_garansi =
   "GRN-" .
   strtoupper(substr(md5(uniqid()), 0, 8));

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

                     <h4 class="fw-bold mb-1">
                        🛡️ Kartu Garansi
                     </h4>

                     <p class="text-muted mb-0">
                        Jaminan Garansi Trainer Kit V1
                     </p>

                  </div>



               </div>

               <div class="card border-0 shadow-sm mb-4">

                  <div class="card-body">

                     <div class="row">

                        <div class="col-md-6 mb-3">

                           <label>Nomor Garansi</label>

                           <input type="text"
                              class="form-control"
                              value="GRN-2025-0001"
                              readonly>

                        </div>

                        <div class="col-md-6 mb-3">

                           <label>Nomor Seri Produk</label>

                           <input type="text"
                              class="form-control"
                              value="TKIOT-ESP32-0001"
                              readonly>

                        </div>

                        <div class="col-md-6 mb-3">

                           <label>Nama Sekolah</label>

                           <input type="text"
                              class="form-control"
                              value="SMP Negeri 1 Bandar Khalipah"
                              readonly>

                        </div>

                        <div class="col-md-6 mb-3">

                           <label>Tanggal Penerimaan</label>

                           <input type="text"
                              class="form-control"
                              value="15 Juli 2025"
                              readonly>

                        </div>

                     </div>

                  </div>

               </div>

               <div class="card border-0 shadow-sm mb-4">

                  <div class="card-header bg-primary text-white">

                     Informasi Produk

                  </div>

                  <div class="card-body">

                     <div class="row">

                        <div class="col-md-4 text-center">

                           <img src="../assets/images/products/tr0.png"
                              class="img-fluid">

                        </div>

                        <div class="col-md-8">

                           <table class="table">

                              <tr>
                                 <td>Produk</td>
                                 <td>Trainer Kit IoT</td>
                              </tr>

                              <tr>
                                 <td>Mikrokontroler</td>
                                 <td>ESP32</td>
                              </tr>

                              <tr>
                                 <td>Tegangan</td>
                                 <td>5V DC</td>
                              </tr>

                              <tr>
                                 <td>Masa Garansi</td>
                                 <td>1 Bulan</td>
                              </tr>

                           </table>

                        </div>

                     </div>

                  </div>

               </div>

               <div class="card border-0 shadow-sm mb-4">

                  <div class="card-header bg-primary text-white">

                     Verifikasi Produk

                  </div>

                  <div class="card-body text-center">

                     <img
                        src="https://api.qrserver.com/v1/create-qr-code/?size=250x250&data=<?= urlencode($kode_garansi) ?>"
                        width="220">

                     <h5 class="mt-3 fw-bold">

                        <?= $kode_garansi ?>

                     </h5>

                     <p class="text-muted">

                        Scan QR Code untuk melihat data garansi,
                        modul pembelajaran dan layanan support.

                     </p>

                  </div>

               </div>

               <div class="card border-0 shadow-sm">

                  <div class="card-body">

                     <div class="row">

                        <div class="col-md-6 text-center">

                           <h6>
                              Penyedia
                           </h6>

                           <br><br><br>

                           <strong>
                              CV. KREATIF TECHNO SOLUSINDO
                           </strong>

                        </div>

                        <div class="col-md-6 text-center">

                           <h6>
                              Kepala Sekolah
                           </h6>

                           <br><br><br>

                           <strong>
                              Nama Tersebut
                           </strong>

                        </div>

                     </div>

                     <hr>

                     <div class="text-center">

                        <button class="btn btn-primary">

                           <i class="ti ti-printer"></i>
                           Cetak Kartu Garansi

                        </button>

                        <button class="btn btn-success">

                           <i class="ti ti-file-download"></i>
                           Download PDF

                        </button>

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