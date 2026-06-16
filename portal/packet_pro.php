<!doctype html>
<html lang="en">

<head>
   <?php require 'partial-head.php' ?>
   <style>
      .pro-hero {
         background: linear-gradient(135deg, #5D87FF, #7C4DFF);
         border-radius: 24px;
         overflow: hidden;
      }

      .pro-badge {
         background: rgba(255, 255, 255, .2);
         color: #fff;
         padding: 8px 18px;
         border-radius: 30px;
         font-weight: 600;
         backdrop-filter: blur(10px);
      }

      .pro-feature {
         border-radius: 20px;
         border: none;
         transition: .3s;
      }

      .pro-feature:hover {
         transform: translateY(-8px);
         box-shadow: 0 15px 40px rgba(93, 135, 255, .15) !important;
      }

      .pro-icon {
         width: 80px;
         height: 80px;
         margin: auto;
         border-radius: 20px;
         background: rgba(93, 135, 255, .1);
         color: #5D87FF;
         display: flex;
         align-items: center;
         justify-content: center;
         font-size: 40px;
         margin-bottom: 20px;
      }

      .package-card {
         border-radius: 24px;
         border: none;
      }

      .package-card .list-group-item {
         border: none;
         padding: 14px 0;
      }

      .pricing-card {
         border-radius: 30px;
         border: none;
         overflow: hidden;
         position: relative;
         background: linear-gradient(180deg, #ffffff, #f8faff);
      }

      .pricing-card::before {
         content: "";
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         height: 6px;
         background: #5D87FF;
      }

      .price-value {
         font-size: 60px;
         font-weight: 800;
         color: #5D87FF;
         line-height: 1;
      }

      .glow-btn {
         box-shadow: 0 10px 25px rgba(93, 135, 255, .35);
      }

      .feature-check {
         color: #22c55e;
         margin-right: 10px;
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
                        🚀 LMS Trainer Kit IoT Pro
                     </h4>

                     <p class="text-muted mb-0">
                        Solusi pembelajaran IoT modern untuk sekolah, kampus dan lembaga pelatihan
                     </p>

                  </div>

               </div>

               <!-- HERO -->
               <div class="card border-0 shadow-lg mb-5 pro-hero">

                  <div class="card-body p-5 text-center text-white">

                     <span class="pro-badge d-inline-block mb-3">
                        PRO PACKAGE
                     </span>

                     <h1 class="fw-bold text-white mb-3">
                        Tingkatkan Pembelajaran IoT Menjadi Lebih Interaktif
                     </h1>

                     <p class="mb-4 mx-auto"
                        style="max-width:850px;font-size:18px;opacity:.95;">

                        LMS Trainer Kit IoT Pro menyediakan sistem pembelajaran lengkap mulai dari
                        modul praktikum, monitoring progres siswa, marketplace trainer kit,
                        manajemen kelas hingga sistem evaluasi pembelajaran dalam satu platform.

                     </p>

                     <button class="btn btn-light btn-lg px-5">

                        <i class="ti ti-rocket"></i>
                        Mulai Sekarang

                     </button>

                  </div>

               </div>

               <!-- FITUR -->
               <div class="row mb-4">

                  <div class="col-lg-4 mb-4">

                     <div class="card shadow-sm h-100 pro-feature">

                        <div class="card-body text-center p-4">

                           <div class="pro-icon">

                              <i class="ti ti-settings"></i>

                           </div>

                           <h5 class="fw-bold">
                              Modul IoT Lengkap
                           </h5>

                           <p class="text-muted mb-0">

                              Materi sensor, aktuator, mikrokontroler,
                              komunikasi data dan project IoT siap digunakan.

                           </p>

                        </div>

                     </div>

                  </div>

                  <div class="col-lg-4 mb-4">

                     <div class="card shadow-sm h-100 pro-feature">

                        <div class="card-body text-center p-4">

                           <div class="pro-icon">

                              <i class="ti ti-school"></i>

                           </div>

                           <h5 class="fw-bold">
                              Manajemen Kelas
                           </h5>

                           <p class="text-muted mb-0">

                              Kelola guru, siswa, kelas dan aktivitas
                              praktikum dalam satu dashboard.

                           </p>

                        </div>

                     </div>

                  </div>

                  <div class="col-lg-4 mb-4">

                     <div class="card shadow-sm h-100 pro-feature">

                        <div class="card-body text-center p-4">

                           <div class="pro-icon">

                              <i class="ti ti-chart-line"></i>

                           </div>

                           <h5 class="fw-bold">
                              Monitoring Progress
                           </h5>

                           <p class="text-muted mb-0">

                              Pantau perkembangan siswa dan hasil
                              pembelajaran secara realtime.

                           </p>

                        </div>

                     </div>

                  </div>

               </div>

               <!-- FITUR PRO -->
               <div class="card shadow-sm mb-5 package-card">

                  <div class="card-body p-5">

                     <h3 class="fw-bold text-center mb-5">
                        ⭐ Yang Anda Dapatkan
                     </h3>

                     <div class="row">

                        <div class="col-md-6">

                           <ul class="list-group list-group-flush">

                              <li class="list-group-item">
                                 <span class="feature-check">✓</span>
                                 Modul Praktikum IoT Lengkap
                              </li>

                              <li class="list-group-item">
                                 <span class="feature-check">✓</span>
                                 Dashboard Monitoring Siswa
                              </li>

                              <li class="list-group-item">
                                 <span class="feature-check">✓</span>
                                 Sistem Quiz & Assessment
                              </li>

                              <li class="list-group-item">
                                 <span class="feature-check">✓</span>
                                 Video Pembelajaran
                              </li>

                              <li class="list-group-item">
                                 <span class="feature-check">✓</span>
                                 Download PDF Materi
                              </li>

                           </ul>

                        </div>

                        <div class="col-md-6">

                           <ul class="list-group list-group-flush">

                              <li class="list-group-item">
                                 <span class="feature-check">✓</span>
                                 Marketplace Trainer Kit
                              </li>

                              <li class="list-group-item">
                                 <span class="feature-check">✓</span>
                                 Chat Bantuan Admin
                              </li>

                              <li class="list-group-item">
                                 <span class="feature-check">✓</span>
                                 Multi Kelas & Multi Guru
                              </li>

                              <li class="list-group-item">
                                 <span class="feature-check">✓</span>
                                 Sertifikat Pembelajaran
                              </li>

                              <li class="list-group-item">
                                 <span class="feature-check">✓</span>
                                 Update Materi Berkala
                              </li>

                           </ul>

                        </div>

                     </div>

                  </div>

               </div>

               <!-- PRICING -->
               <div class="card pricing-card shadow-lg">

                  <div class="card-body text-center p-5">

                     <span class="badge bg-success mb-3">
                        BEST VALUE
                     </span>

                     <h2 class="fw-bold text-primary mb-4">
                        LMS Trainer Kit IoT Pro
                     </h2>

                     <div class="price-value mb-4">

                        Rp 4.999.000

                     </div>

                     <p class="text-muted mb-4">

                        Lisensi lengkap untuk sekolah,
                        kampus dan lembaga pelatihan.

                     </p>

                     <button class="btn btn-primary btn-lg px-5 glow-btn">

                        <i class="ti ti-shopping-cart"></i>
                        Upgrade ke Pro

                     </button>

                  </div>

               </div>

            </div>
         </div>
      </div>
   </div>
   <?php require 'library.php'; ?>
</body>

</html>