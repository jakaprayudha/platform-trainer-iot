<!doctype html>
<html lang="en">

<head>
   <?php require 'partial-head.php' ?>
   <style>
      .product-card {
         transition: all .3s ease;
         cursor: pointer;
      }

      .product-card:hover {
         transform: translateY(-6px);
         box-shadow: 0 .75rem 1.5rem rgba(0, 0, 0, .12) !important;
      }

      .product-scroll {
         height: calc(100vh - 280px);
         overflow-y: auto;
         overflow-x: hidden;
         padding-right: 10px;
      }

      .product-scroll::-webkit-scrollbar {
         width: 8px;
      }

      .product-scroll::-webkit-scrollbar-track {
         background: #f1f5f9;
         border-radius: 20px;
      }

      .product-scroll::-webkit-scrollbar-thumb {
         background: #5D87FF;
         border-radius: 20px;
      }

      .product-scroll::-webkit-scrollbar-thumb:hover {
         background: #4c75f2;
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

                     <h4 class="fw-bold mb-1">
                        🛒 Marketplace Trainer Kit
                     </h4>

                     <p class="text-muted mb-0">
                        Katalog komponen, modul dan perangkat IoT untuk pembelajaran
                     </p>

                  </div>

                  <button class="btn btn-outline-primary">

                     <i class="ti ti-shopping-cart"></i>
                     Shop
                  </button>

               </div>
               <div class="card border-0 shadow-sm mb-4">

                  <div class="card-body">

                     <div class="row">

                        <div class="col-md-6">

                           <input type="text"
                              class="form-control"
                              placeholder="🔍 Cari produk...">

                        </div>

                        <div class="col-md-3">

                           <select class="form-select">

                              <option>Semua Kategori</option>
                              <option>Sensor</option>
                              <option>Aktuator</option>
                              <option>Display</option>
                              <option>Mikrokontroler</option>

                           </select>

                        </div>

                        <div class="col-md-3">

                           <button class="btn btn-primary w-100">

                              Cari Produk

                           </button>

                        </div>

                     </div>

                  </div>

               </div>
               <!-- PRODUCT LIST -->
               <div class="product-scroll">

                  <!-- PRODUCT LIST -->
                  <div class="row">

                     <!-- ITEM -->
                     <div class="col-lg-3 col-md-6 mb-4">

                        <div class="card border-0 shadow-sm h-100 product-card">

                           <img src="../assets/images/products/tr1.png"
                              class="card-img-top p-3"
                              style="height:220px;object-fit:contain;">

                           <div class="card-body">

                              <span class="badge bg-primary mb-2">
                                 Intermediate
                              </span>

                              <h6 class="fw-bold">
                                 Trainer Kit Smart Control
                              </h6>

                              <small class="text-muted d-block mb-3">
                                 Board Trainer Untuk Project Smart Control Dengan Memanfaatkan Sensor dan Remote IR
                              </small>

                              <h5 class="fw-bold text-primary mb-0">
                                 Rp 5.850.000
                              </h5>

                           </div>

                           <div class="card-footer bg-white border-0">

                              <button class="btn btn-primary w-100">

                                 <i class="ti ti-plus"></i>
                                 Tambah

                              </button>

                           </div>

                        </div>

                     </div>

                     <!-- ITEM -->
                     <div class="col-lg-3 col-md-6 mb-4">

                        <div class="card border-0 shadow-sm h-100 product-card">

                           <img src="../assets/images/products/tr2.png"
                              class="card-img-top p-3"
                              style="height:220px;object-fit:contain;">

                           <div class="card-body">

                              <span class="badge bg-primary mb-2">
                                 Beginer
                              </span>

                              <h6 class="fw-bold">
                                 Trainer Kit EWS River
                              </h6>

                              <small class="text-muted d-block mb-3">
                                 Board Trainer Untuk Small Project Dapat Membuat Alat Ukur Ketinggian Level Air (EWS River Station)
                              </small>

                              <h5 class="fw-bold text-primary mb-0">
                                 Rp 1.800.000
                              </h5>

                           </div>

                           <div class="card-footer bg-white border-0">

                              <button class="btn btn-primary w-100">

                                 <i class="ti ti-plus"></i>
                                 Tambah

                              </button>

                           </div>

                        </div>

                     </div>

                     <!-- ITEM -->
                     <div class="col-lg-3 col-md-6 mb-4">

                        <div class="card border-0 shadow-sm h-100 product-card">

                           <img src="../assets/images/products/tr3.png"
                              class="card-img-top p-3"
                              style="height:220px;object-fit:contain;">

                           <div class="card-body">

                              <span class="badge bg-primary text-white mb-2">
                                 Beginer
                              </span>

                              <h6 class="fw-bold">
                                 Trainer Kit Bell
                              </h6>

                              <small class="text-muted d-block mb-3">
                                 Board Trainer Untuk Small Project Membuat Bell Dan Panic Button Emergency Station
                              </small>

                              <h5 class="fw-bold text-primary mb-0">
                                 Rp 950.000
                              </h5>

                           </div>

                           <div class="card-footer bg-white border-0">

                              <button class="btn btn-primary text-white w-100">

                                 <i class="ti ti-plus"></i>
                                 Tambah

                              </button>

                           </div>

                        </div>

                     </div>

                     <!-- ITEM -->
                     <div class="col-lg-3 col-md-6 mb-4">

                        <div class="card border-0 shadow-sm h-100 product-card">

                           <img src="../assets/images/products/tr4.png"
                              class="card-img-top p-3"
                              style="height:220px;object-fit:contain;">

                           <div class="card-body">

                              <span class="badge bg-primary mb-2">
                                 Profesional
                              </span>

                              <h6 class="fw-bold">
                                 Trainer Kit Smart IOT V2
                              </h6>

                              <small class="text-muted d-block mb-3">
                                 Board Trainer Smart IOT Smart AI Project Seperti Weather Station and Industrial Control System
                              </small>

                              <h5 class="fw-bold text-primary mb-0">
                                 Rp 15.800.000
                              </h5>

                           </div>

                           <div class="card-footer bg-white border-0">

                              <button class="btn btn-primary text-white w-100">

                                 <i class="ti ti-plus"></i>
                                 Tambah

                              </button>

                           </div>

                        </div>

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