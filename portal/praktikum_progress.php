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
                     <h4 class="fw-bold mb-1">🏆 Progress</h4>
                     <p class="text-muted mb-0">Aktivitas Progress dan Certified</p>
                  </div>
               </div>

               <!-- CARD -->
               <div class="card shadow-sm border-0">
                  <div class="card-body">

                     <style>
                        /* 🔥 CARD SUMMARY */
                        .card-stat {
                           border: none;
                           border-radius: 16px;
                           color: #fff;
                           padding: 20px;
                        }

                        .bg-gradient-green {
                           background: linear-gradient(135deg, #16a34a, #22c55e);
                        }

                        .bg-gradient-blue {
                           background: linear-gradient(135deg, #2563eb, #3b82f6);
                        }

                        .bg-gradient-purple {
                           background: linear-gradient(135deg, #7c3aed, #a855f7);
                        }

                        /* 📊 TABLE */
                        .table-modern th {
                           font-size: 13px;
                           color: #6b7280;
                        }

                        .table-modern td {
                           font-size: 14px;
                        }

                        /* 🎯 PROGRESS */
                        .progress-modern {
                           height: 6px;
                           border-radius: 10px;
                        }

                        /* 🎓 CERTIFICATE */
                        .certificate-box {
                           border-radius: 16px;
                           background: linear-gradient(135deg, #f8fafc, #eef2ff);
                           padding: 20px;
                           box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
                        }

                        .cert-preview {
                           border-radius: 12px;
                           overflow: hidden;
                           transition: 0.3s;
                        }

                        .cert-preview:hover {
                           transform: scale(1.02);
                        }

                        .btn-download {
                           border-radius: 10px;
                           font-weight: 500;
                        }
                     </style>

                     <!-- 🔥 SUMMARY -->
                     <div class="row mb-4 g-3">

                        <div class="col-md-4">
                           <div class="card-stat bg-gradient-green">
                              <h6>Total Progress</h6>
                              <h2 class="fw-bold">78%</h2>
                              <div class="progress progress-modern bg-light">
                                 <div class="progress-bar bg-dark" style="width:78%"></div>
                              </div>
                           </div>
                        </div>

                        <div class="col-md-4">
                           <div class="card-stat bg-gradient-blue">
                              <h6>Tugas Selesai</h6>
                              <h2 class="fw-bold">8 / 10</h2>
                           </div>
                        </div>

                        <div class="col-md-4">
                           <div class="card-stat bg-gradient-purple">
                              <h6>Rata-rata Nilai</h6>
                              <h2 class="fw-bold">87</h2>
                           </div>
                        </div>

                     </div>

                     <!-- 📊 TABLE -->
                     <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body p-0">

                           <div class="table-responsive">
                              <table class="table table-modern align-middle mb-0">
                                 <thead class="bg-light">
                                    <tr>
                                       <th>No</th>
                                       <th>Praktikum</th>
                                       <th>Progress</th>
                                       <th>Nilai</th>
                                       <th>Status</th>
                                    </tr>
                                 </thead>

                                 <tbody>

                                    <tr>
                                       <td>1</td>
                                       <td>
                                          <strong>Monitoring Suhu IoT</strong><br>
                                          <small class="text-muted">DHT22 Sensor</small>
                                       </td>

                                       <td style="min-width:150px;">
                                          <div class="progress progress-modern">
                                             <div class="progress-bar bg-success" style="width:100%"></div>
                                          </div>
                                          <small>100%</small>
                                       </td>

                                       <td><strong class="text-success">85</strong></td>

                                       <td><span class="badge bg-success">Selesai</span></td>
                                    </tr>

                                    <tr>
                                       <td>2</td>
                                       <td>
                                          <strong>Kontrol Lampu IoT</strong>
                                       </td>

                                       <td>
                                          <div class="progress progress-modern">
                                             <div class="progress-bar bg-warning" style="width:80%"></div>
                                          </div>
                                          <small>80%</small>
                                       </td>

                                       <td>-</td>

                                       <td><span class="badge bg-warning text-dark">Proses</span></td>
                                    </tr>

                                 </tbody>
                              </table>
                           </div>

                        </div>
                     </div>

                     <!-- 🎓 CERTIFICATE -->
                     <div class="certificate-box">

                        <div class="d-flex justify-content-between align-items-center mb-3">
                           <h5 class="fw-bold mb-0">🎓 Sertifikat Kelulusan</h5>
                           <span class="badge bg-success">Eligible</span>
                        </div>

                        <div class="row align-items-center">

                           <!-- PREVIEW -->
                           <div class="col-md-6">
                              <div class="cert-preview shadow-sm">
                                 <img src="../assets/images/samplesertifikat.png"
                                    class="img-fluid w-100">
                              </div>

                              <div class="text-center mt-2">
                                 <small class="text-muted">
                                    ID: <strong>#CERT-2026-00123</strong>
                                 </small>
                              </div>
                           </div>

                           <!-- INFO -->
                           <div class="col-md-6">

                              <h6 class="text-muted">Nama Peserta</h6>
                              <h5 class="fw-bold mb-3">Zack Developer</h5>

                              <h6 class="text-muted">Program</h6>
                              <p class="mb-3">IoT Learning Basic</p>

                              <h6 class="text-muted">Tanggal Lulus</h6>
                              <p class="mb-4">30 April 2026</p>

                              <button class="btn btn-primary btn-download w-100" onclick="downloadCertificate()">
                                 ⬇️ Download Sertifikat
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

<script>
   function downloadCertificate() {
      const link = document.createElement('a');
      link.href = '../assets/images/samplesertifikat.png';
      link.download = 'sertifikat-iot.png';
      link.click();
   }
</script>

</html>