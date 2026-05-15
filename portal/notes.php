<!doctype html>
<html lang="en">

<head>
   <?php require 'partial-head.php' ?>

   <style>
      body {
         background: #f5f5f7;
      }

      .notes-wrapper {
         height: calc(100vh - 110px);
      }

      .notes-sidebar {
         background: rgba(255, 255, 255, .72);
         backdrop-filter: blur(30px);
         border-radius: 26px 0 0 26px;
         border-right: 1px solid rgba(255, 255, 255, .6);
         overflow: hidden;
      }

      .notes-editor {
         background: rgba(255, 255, 255, .82);
         backdrop-filter: blur(30px);
         border-radius: 0 26px 26px 0;
         overflow: hidden;
         position: relative;
      }

      .notes-editor::before {
         content: "";
         position: absolute;
         inset: 0;
         background:
            radial-gradient(circle at top left,
               rgba(59, 130, 246, .05),
               transparent 30%),
            radial-gradient(circle at bottom right,
               rgba(168, 85, 247, .05),
               transparent 30%);
         pointer-events: none;
      }

      .sidebar-top {
         border-bottom: 1px solid rgba(226, 232, 240, .7);
      }

      .glass-search {
         background: rgba(255, 255, 255, .75);
         border: 1px solid rgba(226, 232, 240, .8);
         border-radius: 16px;
         backdrop-filter: blur(10px);
      }

      .note-item {
         padding: 16px 18px;
         border-radius: 18px;
         transition: .2s;
         cursor: pointer;
         margin-bottom: 8px;
      }

      .note-item:hover {
         background: rgba(255, 255, 255, .65);
      }

      .note-item.active {
         background: linear-gradient(135deg,
               rgba(59, 130, 246, .14),
               rgba(168, 85, 247, .14));
         border: 1px solid rgba(59, 130, 246, .12);
      }

      .note-tag {
         padding: 5px 12px;
         border-radius: 30px;
         font-size: 11px;
         font-weight: 600;
      }

      .tag-blue {
         background: rgba(59, 130, 246, .12);
         color: #2563eb;
      }

      .tag-green {
         background: rgba(16, 185, 129, .12);
         color: #059669;
      }

      .tag-orange {
         background: rgba(245, 158, 11, .12);
         color: #d97706;
      }

      .tag-purple {
         background: rgba(168, 85, 247, .12);
         color: #9333ea;
      }

      .toolbar {
         background: rgba(255, 255, 255, .7);
         border-bottom: 1px solid rgba(226, 232, 240, .7);
         backdrop-filter: blur(20px);
         position: relative;
         z-index: 2;
      }

      .toolbar-btn {
         width: 42px;
         height: 42px;
         border-radius: 14px;
         display: flex;
         align-items: center;
         justify-content: center;
         background: rgba(255, 255, 255, .7);
         transition: .2s;
         cursor: pointer;
      }

      .toolbar-btn:hover {
         background: #fff;
         transform: translateY(-2px);
      }

      .editor-content {
         position: relative;
         z-index: 2;
         padding: 50px;
         height: calc(100vh - 230px);
         overflow-y: auto;
      }

      .note-title {
         font-size: 42px;
         font-weight: 700;
         border: none;
         outline: none;
         width: 100%;
         background: transparent;
         color: #0f172a;
      }

      .note-textarea {
         width: 100%;
         border: none;
         outline: none;
         resize: none;
         background: transparent;
         min-height: 500px;
         font-size: 18px;
         line-height: 1.9;
         color: #334155;
      }

      .floating-btn {
         width: 62px;
         height: 62px;
         border-radius: 22px;
         background: linear-gradient(135deg, #2563eb, #7c3aed);
         color: #fff;
         display: flex;
         align-items: center;
         justify-content: center;
         font-size: 24px;
         position: absolute;
         bottom: 30px;
         right: 30px;
         box-shadow: 0 15px 40px rgba(37, 99, 235, .25);
         cursor: pointer;
         z-index: 5;
      }

      .folder-card {
         background: rgba(255, 255, 255, .65);
         border-radius: 18px;
         padding: 14px;
         transition: .2s;
         cursor: pointer;
      }

      .folder-card:hover {
         transform: translateY(-3px);
         background: #fff;
      }

      .apple-dot {
         width: 12px;
         height: 12px;
         border-radius: 50%;
      }

      .dot-red {
         background: #ff5f57;
      }

      .dot-yellow {
         background: #febc2e;
      }

      .dot-green {
         background: #28c840;
      }

      .meta-divider {
         width: 5px;
         height: 5px;
         border-radius: 50%;
         background: #cbd5e1;
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
                        📝 Smart Notes Workspace
                     </h4>

                     <p class="text-muted mb-0">
                        Catatan project, training dan dokumentasi platform IoT
                     </p>

                  </div>

                  <div class="d-flex align-items-center gap-2">

                     <div class="apple-dot dot-red"></div>
                     <div class="apple-dot dot-yellow"></div>
                     <div class="apple-dot dot-green"></div>

                  </div>

               </div>

               <!-- NOTES -->
               <div class="row g-0 notes-wrapper">

                  <!-- SIDEBAR -->
                  <div class="col-lg-4">

                     <div class="notes-sidebar h-100 shadow-sm">

                        <!-- TOP -->
                        <div class="sidebar-top p-4">

                           <div class="d-flex justify-content-between align-items-center mb-4">

                              <div>

                                 <h5 class="fw-bold mb-1">
                                    📚 My Notes
                                 </h5>

                                 <small class="text-muted">
                                    128 Notes
                                 </small>

                              </div>

                              <div class="toolbar-btn">

                                 <i class="ti ti-plus"></i>

                              </div>

                           </div>

                           <!-- SEARCH -->
                           <div class="glass-search px-3 py-2 d-flex align-items-center gap-2 mb-4">

                              <i class="ti ti-search text-muted"></i>

                              <input type="text"
                                 class="form-control border-0 bg-transparent p-0"
                                 placeholder="Search notes..."
                                 style="box-shadow:none;">

                           </div>

                           <!-- FOLDER -->
                           <div class="row">

                              <div class="col-6 mb-3">

                                 <div class="folder-card">

                                    <div class="mb-2">

                                       <i class="ti ti-folder text-primary fs-8"></i>

                                    </div>

                                    <div class="fw-semibold">
                                       IoT Project
                                    </div>

                                    <small class="text-muted">
                                       24 Notes
                                    </small>

                                 </div>

                              </div>

                              <div class="col-6 mb-3">

                                 <div class="folder-card">

                                    <div class="mb-2">

                                       <i class="ti ti-folder text-warning fs-8"></i>

                                    </div>

                                    <div class="fw-semibold">
                                       Training
                                    </div>

                                    <small class="text-muted">
                                       18 Notes
                                    </small>

                                 </div>

                              </div>

                           </div>

                        </div>

                        <!-- NOTE LIST -->
                        <div class="p-3">

                           <!-- NOTE -->
                           <div class="note-item active">

                              <div class="d-flex justify-content-between align-items-start mb-2">

                                 <div class="fw-semibold">
                                    Setup MQTT Broker
                                 </div>

                                 <small class="text-muted">
                                    09:24
                                 </small>

                              </div>

                              <p class="text-muted small mb-3">

                                 Konfigurasi broker MQTT untuk trainer kit sekolah dan dashboard realtime...

                              </p>

                              <div class="d-flex align-items-center gap-2">

                                 <span class="note-tag tag-blue">
                                    MQTT
                                 </span>

                                 <div class="meta-divider"></div>

                                 <small class="text-muted">
                                    Updated Today
                                 </small>

                              </div>

                           </div>

                           <!-- NOTE -->
                           <div class="note-item">

                              <div class="d-flex justify-content-between align-items-start mb-2">

                                 <div class="fw-semibold">
                                    Workshop ESP32
                                 </div>

                                 <small class="text-muted">
                                    Kemarin
                                 </small>

                              </div>

                              <p class="text-muted small mb-3">

                                 Persiapan training sekolah dan distribusi trainer kit batch kedua...

                              </p>

                              <div class="d-flex align-items-center gap-2">

                                 <span class="note-tag tag-green">
                                    Training
                                 </span>

                                 <div class="meta-divider"></div>

                                 <small class="text-muted">
                                    2 Attachments
                                 </small>

                              </div>

                           </div>

                           <!-- NOTE -->
                           <div class="note-item">

                              <div class="d-flex justify-content-between align-items-start mb-2">

                                 <div class="fw-semibold">
                                    Analytics Dashboard
                                 </div>

                                 <small class="text-muted">
                                    Monday
                                 </small>

                              </div>

                              <p class="text-muted small mb-3">

                                 Monitoring penggunaan platform dan statistik sekolah penerima...

                              </p>

                              <div class="d-flex align-items-center gap-2">

                                 <span class="note-tag tag-orange">
                                    Analytics
                                 </span>

                                 <div class="meta-divider"></div>

                                 <small class="text-muted">
                                    Shared
                                 </small>

                              </div>

                           </div>

                           <!-- NOTE -->
                           <div class="note-item">

                              <div class="d-flex justify-content-between align-items-start mb-2">

                                 <div class="fw-semibold">
                                    Automation Flow
                                 </div>

                                 <small class="text-muted">
                                    12 Mei
                                 </small>

                              </div>

                              <p class="text-muted small mb-3">

                                 Workflow otomatis onboarding sekolah dan reminder training...

                              </p>

                              <div class="d-flex align-items-center gap-2">

                                 <span class="note-tag tag-purple">
                                    Automation
                                 </span>

                                 <div class="meta-divider"></div>

                                 <small class="text-muted">
                                    Favorite
                                 </small>

                              </div>

                           </div>

                        </div>

                     </div>

                  </div>

                  <!-- EDITOR -->
                  <div class="col-lg-8">

                     <div class="notes-editor h-100 shadow-sm">

                        <!-- TOOLBAR -->
                        <div class="toolbar p-3">

                           <div class="d-flex justify-content-between align-items-center">

                              <div class="d-flex align-items-center gap-2">

                                 <div class="toolbar-btn">

                                    <i class="ti ti-arrow-back-up"></i>

                                 </div>

                                 <div class="toolbar-btn">

                                    <i class="ti ti-arrow-forward-up"></i>

                                 </div>

                                 <div class="toolbar-btn">

                                    <i class="ti ti-bold"></i>

                                 </div>

                                 <div class="toolbar-btn">

                                    <i class="ti ti-italic"></i>

                                 </div>

                                 <div class="toolbar-btn">

                                    <i class="ti ti-list"></i>

                                 </div>

                                 <div class="toolbar-btn">

                                    <i class="ti ti-photo"></i>

                                 </div>

                                 <div class="toolbar-btn">

                                    <i class="ti ti-link"></i>

                                 </div>

                              </div>

                              <div class="d-flex align-items-center gap-3">

                                 <small class="text-muted">
                                    Last edited 2 minutes ago
                                 </small>

                                 <button class="btn btn-primary rounded-4 px-4">

                                    <i class="ti ti-device-floppy"></i>
                                    Save

                                 </button>

                              </div>

                           </div>

                        </div>

                        <!-- CONTENT -->
                        <div class="editor-content">

                           <!-- TITLE -->
                           <input type="text"
                              class="note-title mb-4"
                              value="Setup MQTT Broker 🚀">

                           <!-- META -->
                           <div class="d-flex align-items-center gap-3 mb-5">

                              <span class="note-tag tag-blue">
                                 MQTT
                              </span>

                              <small class="text-muted">
                                 Created by Zack
                              </small>

                              <div class="meta-divider"></div>

                              <small class="text-muted">
                                 15 Mei 2026
                              </small>

                           </div>

                           <!-- CONTENT -->
                           <textarea class="note-textarea"># MQTT Broker Configuration

Persiapan setup MQTT broker untuk platform trainer kit sekolah.

## Requirement
- VPS Ubuntu 22
- Mosquitto Broker
- SSL Certificate
- Dashboard Monitoring

## Installation

sudo apt update
sudo apt install mosquitto

## Port Configuration
1883 -> MQTT
9001 -> Websocket

## Notes
Pastikan seluruh trainer kit ESP32 sudah menggunakan broker terbaru untuk monitoring realtime dashboard sekolah.

### Next Development
- Automation notification
- Analytics integration
- Live monitoring
- AI automation workflow</textarea>

                        </div>

                        <!-- FLOATING -->
                        <div class="floating-btn">

                           <i class="ti ti-plus"></i>

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