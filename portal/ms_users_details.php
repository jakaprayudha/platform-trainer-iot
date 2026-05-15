<!doctype html>
<html lang="en">

<head>
   <?php require 'partial-head.php' ?>

   <style>
      .school-banner {
         background: linear-gradient(135deg, #1e3a8a, #2563eb);
         border-radius: 24px;
         overflow: hidden;
         position: relative;
      }

      .school-banner::before {
         content: "";
         position: absolute;
         width: 350px;
         height: 350px;
         background: rgba(255, 255, 255, .05);
         border-radius: 50%;
         top: -150px;
         right: -150px;
      }

      .school-banner::after {
         content: "";
         position: absolute;
         width: 240px;
         height: 240px;
         background: rgba(255, 255, 255, .05);
         border-radius: 50%;
         bottom: -100px;
         left: -100px;
      }

      .banner-content {
         position: relative;
         z-index: 2;
      }

      .info-card {
         border-radius: 20px;
         border: 0;
         transition: .3s;
      }

      .info-card:hover {
         transform: translateY(-3px);
      }

      .instruktur-card {
         border-radius: 18px;
         transition: .3s;
         border: 1px solid #eef2ff;
      }

      .instruktur-card:hover {
         transform: translateY(-4px);
      }

      .avatar-user {
         width: 60px;
         height: 60px;
         border-radius: 18px;
         background: #dbeafe;
         color: #2563eb;
         display: flex;
         align-items: center;
         justify-content: center;
         font-weight: bold;
         font-size: 20px;
      }

      .progress {
         height: 10px;
         border-radius: 30px;
      }

      .activity-item {
         border-left: 4px solid #2563eb;
         padding-left: 18px;
         margin-bottom: 28px;
         position: relative;
      }

      .activity-item::before {
         content: "";
         width: 14px;
         height: 14px;
         border-radius: 50%;
         background: #2563eb;
         position: absolute;
         left: -9px;
         top: 5px;
      }

      .table-user tbody tr:hover {
         background: #f8fafc;
      }
   </style>

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
                        🏫 Detail Sekolah Penerima Trainer Kit
                     </h4>

                     <p class="text-muted mb-0">
                        Monitoring sekolah, trainer kit dan instruktur pendamping
                     </p>

                  </div>

                  <div class="d-flex gap-2">

                     <button class="btn btn-light">

                        <i class="ti ti-arrow-left"></i>
                        Kembali

                     </button>

                     <button class="btn btn-primary"
                        data-bs-toggle="modal"
                        data-bs-target="#modalTambahInstruktur">

                        <i class="ti ti-plus"></i>
                        Tambah Instruktur

                     </button>

                  </div>

               </div>

               <!-- BANNER -->
               <div class="card shadow-sm border-0 mb-4">

                  <div class="card-body school-banner p-5 text-white">

                     <div class="banner-content">

                        <div class="row align-items-center">

                           <div class="col-lg-8">

                              <div class="d-flex gap-2 mb-3">

                                 <span class="badge bg-success">
                                    Sekolah Aktif
                                 </span>

                                 <span class="badge bg-light text-dark">
                                    Trainer Kit Active
                                 </span>

                              </div>

                              <h2 class="fw-bold mb-3 text-white">
                                 SMKN 1 Medan
                              </h2>

                              <p class="mb-4"
                                 style="max-width:720px;">

                                 Sekolah penerima trainer kit pembelajaran IoT
                                 dengan implementasi ESP32, Smart Farming,
                                 Dashboard Monitoring dan MQTT Learning System.

                              </p>

                              <div class="d-flex flex-wrap gap-5">

                                 <div>

                                    <small>Total User</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       245
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Trainer Kit</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       25 Unit
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Instruktur</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       4 Orang
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Progress</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       85%
                                    </h3>

                                 </div>

                              </div>

                           </div>

                           <div class="col-lg-4 text-center">

                              <i class="ti ti-building-school"
                                 style="font-size:180px; opacity:.12;">
                              </i>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>

               <div class="row">

                  <!-- LEFT -->
                  <div class="col-lg-8">

                     <!-- INSTRUKTUR -->
                     <div class="card shadow-sm border-0 mb-4">

                        <div class="card-body">

                           <div class="d-flex justify-content-between align-items-center mb-4">

                              <div>

                                 <h5 class="fw-bold mb-1">
                                    👨‍🏫 User Instruktur Sekolah
                                 </h5>

                                 <small class="text-muted">
                                    Data instruktur pendamping sekolah
                                 </small>

                              </div>

                           </div>

                           <div class="row">

                              <!-- CARD -->
                              <div class="col-md-6 mb-4">

                                 <div class="instruktur-card p-3 h-100">

                                    <div class="d-flex align-items-center gap-3 mb-3">

                                       <div class="avatar-user">
                                          BS
                                       </div>

                                       <div>

                                          <div class="fw-semibold">
                                             Budi Santoso
                                          </div>

                                          <small class="text-muted">
                                             ESP32 Instructor
                                          </small>

                                       </div>

                                    </div>

                                    <div class="mb-2">

                                       <small class="text-muted">
                                          Email
                                       </small>

                                       <div class="fw-semibold">
                                          budi@goskyiot.id
                                       </div>

                                    </div>

                                    <div class="mb-3">

                                       <small class="text-muted">
                                          No HP
                                       </small>

                                       <div class="fw-semibold">
                                          08123456789
                                       </div>

                                    </div>

                                    <div class="d-flex justify-content-between align-items-center">

                                       <span class="badge bg-success">
                                          Aktif
                                       </span>

                                       <div class="d-flex gap-1">

                                          <button class="btn btn-sm btn-light">
                                             <i class="ti ti-eye"></i>
                                          </button>

                                          <button class="btn btn-sm btn-warning text-white">
                                             <i class="ti ti-edit"></i>
                                          </button>

                                          <button class="btn btn-sm btn-danger">
                                             <i class="ti ti-trash"></i>
                                          </button>

                                       </div>

                                    </div>

                                 </div>

                              </div>

                              <!-- CARD -->
                              <div class="col-md-6 mb-4">

                                 <div class="instruktur-card p-3 h-100">

                                    <div class="d-flex align-items-center gap-3 mb-3">

                                       <div class="avatar-user">
                                          AR
                                       </div>

                                       <div>

                                          <div class="fw-semibold">
                                             Andi Rahman
                                          </div>

                                          <small class="text-muted">
                                             Smart Farming
                                          </small>

                                       </div>

                                    </div>

                                    <div class="mb-2">

                                       <small class="text-muted">
                                          Email
                                       </small>

                                       <div class="fw-semibold">
                                          andi@goskyiot.id
                                       </div>

                                    </div>

                                    <div class="mb-3">

                                       <small class="text-muted">
                                          No HP
                                       </small>

                                       <div class="fw-semibold">
                                          08234567890
                                       </div>

                                    </div>

                                    <div class="d-flex justify-content-between align-items-center">

                                       <span class="badge bg-warning text-dark">
                                          Monitoring
                                       </span>

                                       <div class="d-flex gap-1">

                                          <button class="btn btn-sm btn-light">
                                             <i class="ti ti-eye"></i>
                                          </button>

                                          <button class="btn btn-sm btn-warning text-white">
                                             <i class="ti ti-edit"></i>
                                          </button>

                                          <button class="btn btn-sm btn-danger">
                                             <i class="ti ti-trash"></i>
                                          </button>

                                       </div>

                                    </div>

                                 </div>

                              </div>

                           </div>

                        </div>

                     </div>

                     <!-- USER SEKOLAH -->
                     <div class="card shadow-sm border-0 mb-4">

                        <div class="card-body">

                           <div class="d-flex justify-content-between align-items-center mb-4">

                              <div>

                                 <h5 class="fw-bold mb-1">
                                    👥 User Sekolah
                                 </h5>

                                 <small class="text-muted">
                                    User platform sekolah
                                 </small>

                              </div>

                           </div>

                           <div class="table-responsive">

                              <table class="table table-hover align-middle table-user">

                                 <thead class="bg-light">

                                    <tr>

                                       <th>Nama</th>
                                       <th>Email</th>
                                       <th>Role</th>
                                       <th>Status</th>
                                       <th>Last Login</th>
                                       <th class="text-center">
                                          Aksi
                                       </th>

                                    </tr>

                                 </thead>

                                 <tbody>

                                    <tr>

                                       <td>

                                          <div class="fw-semibold">
                                             Ahmad Fauzi
                                          </div>

                                       </td>

                                       <td>
                                          ahmad@mail.com
                                       </td>

                                       <td>

                                          <span class="badge bg-primary">
                                             PIC Sekolah
                                          </span>

                                       </td>

                                       <td>

                                          <span class="badge bg-success">
                                             Online
                                          </span>

                                       </td>

                                       <td>
                                          5 menit lalu
                                       </td>

                                       <td class="text-center">

                                          <button class="btn btn-sm btn-light">
                                             <i class="ti ti-eye"></i>
                                          </button>

                                          <button class="btn btn-sm btn-warning text-white">
                                             <i class="ti ti-edit"></i>
                                          </button>

                                       </td>

                                    </tr>

                                    <tr>

                                       <td>

                                          <div class="fw-semibold">
                                             Siti Rahma
                                          </div>

                                       </td>

                                       <td>
                                          siti@mail.com
                                       </td>

                                       <td>

                                          <span class="badge bg-info">
                                             Operator
                                          </span>

                                       </td>

                                       <td>

                                          <span class="badge bg-secondary">
                                             Offline
                                          </span>

                                       </td>

                                       <td>
                                          1 hari lalu
                                       </td>

                                       <td class="text-center">

                                          <button class="btn btn-sm btn-light">
                                             <i class="ti ti-eye"></i>
                                          </button>

                                          <button class="btn btn-sm btn-warning text-white">
                                             <i class="ti ti-edit"></i>
                                          </button>

                                       </td>

                                    </tr>

                                 </tbody>

                              </table>

                           </div>

                        </div>

                     </div>

                     <!-- ACTIVITY -->
                     <div class="card shadow-sm border-0">

                        <div class="card-body">

                           <div class="d-flex justify-content-between align-items-center mb-4">

                              <div>

                                 <h5 class="fw-bold mb-1">
                                    🕒 Aktivitas Sekolah
                                 </h5>

                                 <small class="text-muted">
                                    Monitoring aktivitas trainer kit & platform
                                 </small>

                              </div>

                           </div>

                           <div class="activity-item">

                              <h6 class="fw-bold">
                                 Instruktur berhasil ditambahkan
                              </h6>

                              <p class="text-muted mb-1">
                                 User instruktur ESP32 berhasil ditambahkan ke sekolah.
                              </p>

                              <small class="text-primary">
                                 10 menit lalu
                              </small>

                           </div>

                           <div class="activity-item">

                              <h6 class="fw-bold">
                                 Aktivasi trainer kit berhasil
                              </h6>

                              <p class="text-muted mb-1">
                                 25 trainer kit berhasil terkoneksi ke platform.
                              </p>

                              <small class="text-success">
                                 2 jam lalu
                              </small>

                           </div>

                           <div class="activity-item">

                              <h6 class="fw-bold">
                                 User sekolah login
                              </h6>

                              <p class="text-muted mb-1">
                                 Operator sekolah berhasil login ke dashboard monitoring.
                              </p>

                              <small class="text-warning">
                                 5 jam lalu
                              </small>

                           </div>

                        </div>

                     </div>

                  </div>

                  <!-- RIGHT -->
                  <div class="col-lg-4">

                     <!-- INFO -->
                     <div class="card shadow-sm border-0 mb-4">

                        <div class="card-body">

                           <h5 class="fw-bold mb-4">
                              📌 Informasi Sekolah
                           </h5>

                           <div class="mb-3">

                              <small class="text-muted">
                                 Nama Sekolah
                              </small>

                              <div class="fw-semibold">
                                 SMKN 1 Medan
                              </div>

                           </div>

                           <div class="mb-3">

                              <small class="text-muted">
                                 NPSN
                              </small>

                              <div class="fw-semibold">
                                 12345678
                              </div>

                           </div>

                           <div class="mb-3">

                              <small class="text-muted">
                                 PIC Sekolah
                              </small>

                              <div class="fw-semibold">
                                 Ahmad Fauzi
                              </div>

                           </div>

                           <div class="mb-3">

                              <small class="text-muted">
                                 Instruktur Aktif
                              </small>

                              <div class="fw-semibold">
                                 4 Orang
                              </div>

                           </div>

                           <div>

                              <small class="text-muted">
                                 Status
                              </small>

                              <div>
                                 <span class="badge bg-success">
                                    Aktif
                                 </span>
                              </div>

                           </div>

                        </div>

                     </div>

                     <!-- PROGRESS -->
                     <div class="card shadow-sm border-0 mb-4">

                        <div class="card-body">

                           <h5 class="fw-bold mb-4">
                              📈 Progress Implementasi
                           </h5>

                           <div class="mb-4">

                              <div class="d-flex justify-content-between mb-2">

                                 <small>
                                    Aktivasi Platform
                                 </small>

                                 <small>
                                    95%
                                 </small>

                              </div>

                              <div class="progress">
                                 <div class="progress-bar"
                                    style="width:95%">
                                 </div>
                              </div>

                           </div>

                           <div class="mb-4">

                              <div class="d-flex justify-content-between mb-2">

                                 <small>
                                    Penggunaan Trainer Kit
                                 </small>

                                 <small>
                                    82%
                                 </small>

                              </div>

                              <div class="progress">
                                 <div class="progress-bar bg-success"
                                    style="width:82%">
                                 </div>
                              </div>

                           </div>

                           <div>

                              <div class="d-flex justify-content-between mb-2">

                                 <small>
                                    Penyelesaian Materi
                                 </small>

                                 <small>
                                    76%
                                 </small>

                              </div>

                              <div class="progress">
                                 <div class="progress-bar bg-warning"
                                    style="width:76%">
                                 </div>
                              </div>

                           </div>

                        </div>

                     </div>

                     <!-- TRAINER KIT -->
                     <div class="card shadow-sm border-0">

                        <div class="card-body">

                           <h5 class="fw-bold mb-4">
                              📦 Trainer Kit
                           </h5>

                           <div class="alert alert-primary border-0">

                              <div class="fw-semibold mb-1">
                                 ESP32 Kit
                              </div>

                              <small>
                                 15 Unit Aktif
                              </small>

                           </div>

                           <div class="alert alert-success border-0">

                              <div class="fw-semibold mb-1">
                                 Smart Farming Kit
                              </div>

                              <small>
                                 5 Unit Aktif
                              </small>

                           </div>

                           <div class="alert alert-warning border-0 mb-0">

                              <div class="fw-semibold mb-1">
                                 RFID Security Kit
                              </div>

                              <small>
                                 5 Unit Monitoring
                              </small>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>

            </div>

         </div>

      </div>

   </div>

   <!-- MODAL -->
   <div class="modal fade"
      id="modalTambahInstruktur"
      tabindex="-1">

      <div class="modal-dialog modal-lg modal-dialog-centered">

         <div class="modal-content border-0 shadow">

            <div class="modal-header">

               <h5 class="modal-title">
                  ➕ Tambah User Instruktur
               </h5>

               <button type="button"
                  class="btn-close"
                  data-bs-dismiss="modal">
               </button>

            </div>

            <form>

               <div class="modal-body">

                  <div class="row">

                     <div class="col-md-6 mb-3">

                        <label class="form-label">
                           Nama Instruktur
                        </label>

                        <input type="text"
                           class="form-control">

                     </div>

                     <div class="col-md-6 mb-3">

                        <label class="form-label">
                           Email
                        </label>

                        <input type="email"
                           class="form-control">

                     </div>

                     <div class="col-md-6 mb-3">

                        <label class="form-label">
                           No HP
                        </label>

                        <input type="text"
                           class="form-control">

                     </div>

                     <div class="col-md-6 mb-3">

                        <label class="form-label">
                           Spesialisasi
                        </label>

                        <select class="form-select">

                           <option>
                              ESP32
                           </option>

                           <option>
                              Smart Farming
                           </option>

                           <option>
                              MQTT
                           </option>

                        </select>

                     </div>

                     <div class="col-md-6 mb-3">

                        <label class="form-label">
                           Username
                        </label>

                        <input type="text"
                           class="form-control">

                     </div>

                     <div class="col-md-6 mb-3">

                        <label class="form-label">
                           Password
                        </label>

                        <input type="password"
                           class="form-control">

                     </div>

                     <div class="col-md-12 mb-3">

                        <label class="form-label">
                           Catatan
                        </label>

                        <textarea class="form-control"
                           rows="3"></textarea>

                     </div>

                  </div>

               </div>

               <div class="modal-footer">

                  <button type="button"
                     class="btn btn-light"
                     data-bs-dismiss="modal">

                     Batal

                  </button>

                  <button type="submit"
                     class="btn btn-primary">

                     💾 Simpan Instruktur

                  </button>

               </div>

            </form>

         </div>

      </div>

   </div>

   <?php require 'library.php'; ?>

</body>

</html>