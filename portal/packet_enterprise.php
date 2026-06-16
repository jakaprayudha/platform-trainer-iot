<!doctype html>
<html lang="en">

<head>
   <?php require 'partial-head.php' ?>
   <style>
      .pro-hero {
         background: linear-gradient(135deg,
               #111827,
               #1F2937);
         border-radius: 24px;
         overflow: hidden;
      }

      .pro-badge {
         background: rgba(251, 191, 36, .15);
         color: #FBBF24;
         padding: 8px 18px;
         border-radius: 30px;
         font-weight: 600;
         border: 1px solid rgba(251, 191, 36, .3);
         backdrop-filter: blur(10px);
      }

      .pro-feature {
         border-radius: 20px;
         border: none;
         transition: .3s;
      }

      .pro-feature:hover {
         transform: translateY(-8px);
         box-shadow: 0 15px 40px rgba(17, 24, 39, .15) !important;
      }

      .pro-icon {
         width: 80px;
         height: 80px;
         margin: auto;
         border-radius: 20px;
         background: rgba(251, 191, 36, .12);
         color: #F59E0B;
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
         background: linear-gradient(180deg,
               #ffffff,
               #fafafa);
      }

      .pricing-card::before {
         content: "";
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         height: 6px;
         background: #F59E0B;
      }

      .price-value {
         font-size: 60px;
         font-weight: 800;
         color: #111827;
         line-height: 1;
      }

      .glow-btn {
         background: #111827;
         border-color: #111827;
         box-shadow: 0 10px 25px rgba(17, 24, 39, .25);
      }

      .glow-btn:hover {
         background: #000;
         border-color: #000;
      }

      .feature-check {
         color: #F59E0B;
         margin-right: 10px;
         font-weight: 700;
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
                        🏢 LMS Trainer Kit IoT Enterprise
                     </h4>

                     <p class="text-muted mb-0">
                        Platform pembelajaran IoT tingkat institusi untuk SMK, Kampus, Balai Pelatihan dan Industri
                     </p>

                  </div>

                  <div>

                     <span class="badge bg-dark px-3 py-2">
                        Enterprise Edition
                     </span>

                  </div>

               </div>
               <!-- HERO -->
               <div class="card border-0 shadow-lg mb-5 pro-hero">

                  <div class="card-body p-5 text-center text-white">

                     <span class="pro-badge d-inline-block mb-3">
                        ENTERPRISE EDITION
                     </span>

                     <h1 class="fw-bold text-white mb-3">
                        Smart Learning Ecosystem for Enterprise
                     </h1>

                     <p class="mb-4 mx-auto"
                        style="max-width:850px;font-size:18px;opacity:.95;">

                        Dirancang untuk institusi pendidikan, universitas, pusat pelatihan,
                        perusahaan dan instansi pemerintah yang membutuhkan sistem LMS IoT
                        dengan dukungan multi pengguna, sertifikasi digital, analytics,
                        white label dan enterprise support.

                     </p>

                     <button class="btn btn-light btn-lg px-5">

                        <i class="ti ti-phone-call"></i>
                        Hubungi Tim Sales

                     </button>

                  </div>

               </div>

               <!-- FITUR -->
               <div class="row mb-4">

                  <div class="col-lg-4 mb-4">

                     <div class="card shadow-sm h-100 pro-feature">

                        <div class="card-body text-center p-4">

                           <div class="pro-icon">

                              <i class="ti ti-users"></i>

                           </div>

                           <h5 class="fw-bold">
                              Unlimited User Management
                           </h5>

                           <p class="text-muted mb-0">

                              Kelola ribuan siswa, guru, instruktur dan administrator
                              dalam satu platform yang terpusat.

                           </p>

                        </div>

                     </div>

                  </div>

                  <div class="col-lg-4 mb-4">

                     <div class="card shadow-sm h-100 pro-feature">

                        <div class="card-body text-center p-4">

                           <div class="pro-icon">

                              <i class="ti ti-building-community"></i>

                           </div>

                           <h5 class="fw-bold">
                              Multi Institution System
                           </h5>

                           <p class="text-muted mb-0">

                              Mendukung banyak sekolah, kampus, laboratorium
                              dan pusat pelatihan dalam satu ekosistem.

                           </p>

                        </div>

                     </div>

                  </div>

                  <div class="col-lg-4 mb-4">

                     <div class="card shadow-sm h-100 pro-feature">

                        <div class="card-body text-center p-4">

                           <div class="pro-icon">

                              <i class="ti ti-shield-lock"></i>

                           </div>

                           <h5 class="fw-bold">
                              Enterprise Security
                           </h5>

                           <p class="text-muted mb-0">

                              Sistem keamanan, backup data, role management
                              dan kontrol akses tingkat institusi.

                           </p>

                        </div>

                     </div>

                  </div>

               </div>
               <!-- FITUR ENTERPRISE -->
               <div class="card shadow-sm mb-5 package-card">

                  <div class="card-body p-5">

                     <h3 class="fw-bold text-center mb-5">
                        ⭐ Fitur Enterprise yang Anda Dapatkan
                     </h3>

                     <div class="row">

                        <div class="col-md-6">

                           <ul class="list-group list-group-flush">

                              <li class="list-group-item">
                                 <span class="feature-check">✓</span>
                                 Semua Fitur Paket Pro
                              </li>

                              <li class="list-group-item">
                                 <span class="feature-check">✓</span>
                                 Unlimited Guru & Instruktur
                              </li>

                              <li class="list-group-item">
                                 <span class="feature-check">✓</span>
                                 Unlimited Siswa & Peserta Pelatihan
                              </li>

                              <li class="list-group-item">
                                 <span class="feature-check">✓</span>
                                 Multi Sekolah, Kampus & Institusi
                              </li>

                              <li class="list-group-item">
                                 <span class="feature-check">✓</span>
                                 Multi Laboratorium & Multi Kelas
                              </li>

                              <li class="list-group-item">
                                 <span class="feature-check">✓</span>
                                 Dashboard Monitoring Enterprise
                              </li>

                           </ul>

                        </div>

                        <div class="col-md-6">

                           <ul class="list-group list-group-flush">

                              <li class="list-group-item">
                                 <span class="feature-check">✓</span>
                                 White Label Branding
                              </li>

                              <li class="list-group-item">
                                 <span class="feature-check">✓</span>
                                 Custom Domain Institusi
                              </li>

                              <li class="list-group-item">
                                 <span class="feature-check">✓</span>
                                 Sertifikat Digital Otomatis
                              </li>

                              <li class="list-group-item">
                                 <span class="feature-check">✓</span>
                                 Integrasi Sistem Akademik
                              </li>

                              <li class="list-group-item">
                                 <span class="feature-check">✓</span>
                                 Priority Support 24/7
                              </li>

                              <li class="list-group-item">
                                 <span class="feature-check">✓</span>
                                 Training & Pendampingan Implementasi
                              </li>

                           </ul>

                        </div>

                     </div>

                  </div>

               </div>
               <!-- PRICING -->
               <div class="card pricing-card shadow-lg">

                  <div class="card-body text-center p-5">

                     <span class="badge bg-warning text-dark mb-3">
                        ENTERPRISE SOLUTION
                     </span>

                     <h2 class="fw-bold text-primary mb-4">
                        LMS Trainer Kit IoT Enterprise
                     </h2>

                     <div class="price-value mb-4">

                        Rp 15.999.000

                     </div>

                     <p class="text-muted mb-4">

                        Solusi pembelajaran IoT tingkat institusi untuk
                        SMK, Universitas, Balai Pelatihan, Industri dan
                        Instansi Pemerintah dengan dukungan implementasi penuh.

                     </p>

                     <div class="row justify-content-center mb-4">

                        <div class="col-md-8">

                           <div class="d-flex flex-wrap justify-content-center gap-3">

                              <span class="badge bg-light text-dark px-3 py-2">
                                 Unlimited User
                              </span>

                              <span class="badge bg-light text-dark px-3 py-2">
                                 Multi Institution
                              </span>

                              <span class="badge bg-light text-dark px-3 py-2">
                                 White Label
                              </span>

                              <span class="badge bg-light text-dark px-3 py-2">
                                 Priority Support
                              </span>

                           </div>

                        </div>

                     </div>

                     <button class="btn btn-primary btn-lg px-5 glow-btn">

                        <i class="ti ti-phone-call"></i>
                        Hubungi Tim Sales

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