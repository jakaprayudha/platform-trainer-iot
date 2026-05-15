<!doctype html>
<html lang="en">

<head>
   <?php require 'partial-head.php' ?>

   <style>
      .automation-banner {
         background: linear-gradient(135deg, #0f172a, #2563eb);
         border-radius: 24px;
         overflow: hidden;
         position: relative;
      }

      .automation-banner::before {
         content: "";
         position: absolute;
         width: 380px;
         height: 380px;
         background: rgba(255, 255, 255, .05);
         border-radius: 50%;
         top: -150px;
         right: -150px;
      }

      .automation-banner::after {
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

      .automation-card {
         border-radius: 22px;
         border: 0;
         transition: .3s;
      }

      .automation-card:hover {
         transform: translateY(-4px);
      }

      .builder-box {
         border: 2px dashed #dbeafe;
         border-radius: 18px;
         padding: 25px;
         background: #f8fbff;
      }

      .step-card {
         border-radius: 18px;
         border: 1px solid #eef2ff;
         transition: .3s;
      }

      .step-card:hover {
         transform: translateY(-3px);
      }

      .step-icon {
         width: 55px;
         height: 55px;
         border-radius: 16px;
         display: flex;
         align-items: center;
         justify-content: center;
         font-size: 22px;
      }

      .bg-soft-primary {
         background: rgba(37, 99, 235, .1);
         color: #2563eb;
      }

      .bg-soft-success {
         background: rgba(16, 185, 129, .1);
         color: #10b981;
      }

      .bg-soft-warning {
         background: rgba(245, 158, 11, .1);
         color: #f59e0b;
      }

      .bg-soft-danger {
         background: rgba(239, 68, 68, .1);
         color: #ef4444;
      }

      .automation-flow {
         border-left: 3px dashed #2563eb;
         padding-left: 20px;
         margin-left: 22px;
      }

      .flow-item {
         position: relative;
         margin-bottom: 30px;
      }

      .flow-item::before {
         content: "";
         width: 16px;
         height: 16px;
         border-radius: 50%;
         background: #2563eb;
         position: absolute;
         left: -30px;
         top: 8px;
      }

      .template-card {
         border-radius: 18px;
         transition: .3s;
         cursor: pointer;
      }

      .template-card:hover {
         transform: translateY(-4px);
         border-color: #2563eb;
      }

      .status-badge {
         padding: 6px 14px;
         border-radius: 30px;
         font-size: 12px;
         font-weight: 600;
      }

      .status-active {
         background: #dcfce7;
         color: #166534;
      }

      .status-draft {
         background: #fef3c7;
         color: #92400e;
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
                        ⚙️ Automation Builder
                     </h4>

                     <p class="text-muted mb-0">
                        Kelola workflow otomatis platform training IoT
                     </p>

                  </div>

                  <div class="d-flex gap-2">

                     <button class="btn btn-light">

                        <i class="ti ti-player-play"></i>
                        Run Testing

                     </button>

                     <button class="btn btn-primary">

                        <i class="ti ti-device-floppy"></i>
                        Publish Automation

                     </button>

                  </div>

               </div>

               <!-- HERO -->
               <div class="card shadow-sm border-0 mb-4">

                  <div class="card-body automation-banner p-5 text-white">

                     <div class="banner-content">

                        <div class="row align-items-center">

                           <div class="col-lg-8">

                              <div class="d-flex gap-2 mb-3">

                                 <span class="badge bg-success">
                                    Automation Active
                                 </span>

                                 <span class="badge bg-light text-dark">
                                    IoT Workflow Engine
                                 </span>

                              </div>

                              <h2 class="fw-bold text-white mb-3">
                                 Smart Automation Workflow Builder
                              </h2>

                              <p class="mb-4"
                                 style="max-width:720px;">

                                 Bangun automation workflow untuk monitoring sekolah,
                                 trainer kit, notifikasi pembelajaran, absensi,
                                 evaluasi dan integrasi sistem IoT secara realtime.

                              </p>

                              <div class="d-flex flex-wrap gap-5">

                                 <div>

                                    <small>Total Workflow</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       48
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Automation Active</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       35
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Task Running</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       1.284
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Success Rate</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       98%
                                    </h3>

                                 </div>

                              </div>

                           </div>

                           <div class="col-lg-4 text-center">

                              <i class="ti ti-automation"
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

                     <!-- BUILDER -->
                     <div class="card shadow-sm border-0 automation-card mb-4">

                        <div class="card-body">

                           <div class="d-flex justify-content-between align-items-center mb-4">

                              <div>

                                 <h5 class="fw-bold mb-1">
                                    🧠 Workflow Builder
                                 </h5>

                                 <small class="text-muted">
                                    Rancang automation workflow platform
                                 </small>

                              </div>

                              <button class="btn btn-primary btn-sm">

                                 <i class="ti ti-plus"></i>
                                 Add Step

                              </button>

                           </div>

                           <div class="builder-box">

                              <div class="automation-flow">

                                 <!-- FLOW -->
                                 <div class="flow-item">

                                    <div class="step-card p-3">

                                       <div class="d-flex align-items-center gap-3">

                                          <div class="step-icon bg-soft-primary">

                                             <i class="ti ti-player-play"></i>

                                          </div>

                                          <div class="flex-grow-1">

                                             <div class="fw-semibold">
                                                Trigger Workflow
                                             </div>

                                             <small class="text-muted">
                                                Saat sekolah aktivasi trainer kit
                                             </small>

                                          </div>

                                          <span class="status-badge status-active">
                                             Trigger
                                          </span>

                                       </div>

                                    </div>

                                 </div>

                                 <!-- FLOW -->
                                 <div class="flow-item">

                                    <div class="step-card p-3">

                                       <div class="d-flex align-items-center gap-3">

                                          <div class="step-icon bg-soft-success">

                                             <i class="ti ti-mail"></i>

                                          </div>

                                          <div class="flex-grow-1">

                                             <div class="fw-semibold">
                                                Send Email Notification
                                             </div>

                                             <small class="text-muted">
                                                Kirim email onboarding sekolah
                                             </small>

                                          </div>

                                          <span class="status-badge status-active">
                                             Action
                                          </span>

                                       </div>

                                    </div>

                                 </div>

                                 <!-- FLOW -->
                                 <div class="flow-item">

                                    <div class="step-card p-3">

                                       <div class="d-flex align-items-center gap-3">

                                          <div class="step-icon bg-soft-warning">

                                             <i class="ti ti-device-mobile"></i>

                                          </div>

                                          <div class="flex-grow-1">

                                             <div class="fw-semibold">
                                                WhatsApp Reminder
                                             </div>

                                             <small class="text-muted">
                                                Reminder training instruktur
                                             </small>

                                          </div>

                                          <span class="status-badge status-draft">
                                             Waiting
                                          </span>

                                       </div>

                                    </div>

                                 </div>

                                 <!-- FLOW -->
                                 <div class="flow-item">

                                    <div class="step-card p-3">

                                       <div class="d-flex align-items-center gap-3">

                                          <div class="step-icon bg-soft-danger">

                                             <i class="ti ti-chart-bar"></i>

                                          </div>

                                          <div class="flex-grow-1">

                                             <div class="fw-semibold">
                                                Generate Analytics Report
                                             </div>

                                             <small class="text-muted">
                                                Generate laporan monitoring otomatis
                                             </small>

                                          </div>

                                          <span class="status-badge status-active">
                                             Process
                                          </span>

                                       </div>

                                    </div>

                                 </div>

                              </div>

                           </div>

                        </div>

                     </div>

                     <!-- ACTIVE AUTOMATION -->
                     <div class="card shadow-sm border-0 automation-card">

                        <div class="card-body">

                           <div class="d-flex justify-content-between align-items-center mb-4">

                              <div>

                                 <h5 class="fw-bold mb-1">
                                    🚀 Active Automation
                                 </h5>

                                 <small class="text-muted">
                                    Workflow automation yang sedang berjalan
                                 </small>

                              </div>

                           </div>

                           <div class="table-responsive">

                              <table class="table table-hover align-middle">

                                 <thead class="bg-light">

                                    <tr>

                                       <th>Workflow</th>
                                       <th>Trigger</th>
                                       <th>Status</th>
                                       <th>Execution</th>
                                       <th>Last Run</th>
                                       <th>Aksi</th>

                                    </tr>

                                 </thead>

                                 <tbody>

                                    <tr>

                                       <td>

                                          <div class="fw-semibold">
                                             School Onboarding
                                          </div>

                                          <small class="text-muted">
                                             Aktivasi sekolah baru
                                          </small>

                                       </td>

                                       <td>
                                          Trainer Kit Active
                                       </td>

                                       <td>

                                          <span class="badge bg-success">
                                             Running
                                          </span>

                                       </td>

                                       <td>
                                          245x
                                       </td>

                                       <td>
                                          2 menit lalu
                                       </td>

                                       <td>

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
                                             Reminder Training
                                          </div>

                                          <small class="text-muted">
                                             Reminder workshop sekolah
                                          </small>

                                       </td>

                                       <td>
                                          Schedule Event
                                       </td>

                                       <td>

                                          <span class="badge bg-warning text-dark">
                                             Pending
                                          </span>

                                       </td>

                                       <td>
                                          120x
                                       </td>

                                       <td>
                                          1 jam lalu
                                       </td>

                                       <td>

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

                  </div>

                  <!-- RIGHT -->
                  <div class="col-lg-4">

                     <!-- TEMPLATE -->
                     <div class="card shadow-sm border-0 automation-card mb-4">

                        <div class="card-body">

                           <h5 class="fw-bold mb-4">
                              📦 Automation Template
                           </h5>

                           <!-- ITEM -->
                           <div class="template-card border p-3 mb-3">

                              <div class="d-flex align-items-center gap-3">

                                 <div class="step-icon bg-soft-primary">

                                    <i class="ti ti-school"></i>

                                 </div>

                                 <div>

                                    <div class="fw-semibold">
                                       School Activation
                                    </div>

                                    <small class="text-muted">
                                       Workflow onboarding sekolah
                                    </small>

                                 </div>

                              </div>

                           </div>

                           <!-- ITEM -->
                           <div class="template-card border p-3 mb-3">

                              <div class="d-flex align-items-center gap-3">

                                 <div class="step-icon bg-soft-success">

                                    <i class="ti ti-mail"></i>

                                 </div>

                                 <div>

                                    <div class="fw-semibold">
                                       Email Notification
                                    </div>

                                    <small class="text-muted">
                                       Automation email system
                                    </small>

                                 </div>

                              </div>

                           </div>

                           <!-- ITEM -->
                           <div class="template-card border p-3">

                              <div class="d-flex align-items-center gap-3">

                                 <div class="step-icon bg-soft-warning">

                                    <i class="ti ti-brand-whatsapp"></i>

                                 </div>

                                 <div>

                                    <div class="fw-semibold">
                                       WhatsApp Reminder
                                    </div>

                                    <small class="text-muted">
                                       Reminder training sekolah
                                    </small>

                                 </div>

                              </div>

                           </div>

                        </div>

                     </div>

                     <!-- QUICK ACTION -->
                     <div class="card shadow-sm border-0 automation-card mb-4">

                        <div class="card-body">

                           <h5 class="fw-bold mb-4">
                              ⚡ Quick Action
                           </h5>

                           <div class="d-grid gap-3">

                              <button class="btn btn-primary">

                                 <i class="ti ti-plus"></i>
                                 Create Workflow

                              </button>

                              <button class="btn btn-success">

                                 <i class="ti ti-player-play"></i>
                                 Run Automation

                              </button>

                              <button class="btn btn-warning text-white">

                                 <i class="ti ti-refresh"></i>
                                 Sync Workflow

                              </button>

                              <button class="btn btn-danger">

                                 <i class="ti ti-power"></i>
                                 Disable Workflow

                              </button>

                           </div>

                        </div>

                     </div>

                     <!-- LOG -->
                     <div class="card shadow-sm border-0 automation-card">

                        <div class="card-body">

                           <h5 class="fw-bold mb-4">
                              🕒 Automation Log
                           </h5>

                           <div class="mb-4">

                              <div class="fw-semibold">
                                 Workflow Success
                              </div>

                              <small class="text-muted d-block">
                                 Email onboarding berhasil dikirim
                              </small>

                              <small class="text-success">
                                 2 menit lalu
                              </small>

                           </div>

                           <div class="mb-4">

                              <div class="fw-semibold">
                                 WhatsApp Reminder
                              </div>

                              <small class="text-muted d-block">
                                 Reminder workshop berhasil terkirim
                              </small>

                              <small class="text-primary">
                                 10 menit lalu
                              </small>

                           </div>

                           <div>

                              <div class="fw-semibold">
                                 Generate Report
                              </div>

                              <small class="text-muted d-block">
                                 Analytics report berhasil dibuat
                              </small>

                              <small class="text-warning">
                                 1 jam lalu
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

   <?php require 'library.php'; ?>

</body>

</html>