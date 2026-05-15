<!doctype html>
<html lang="en">

<head>
   <?php require 'partial-head.php' ?>

   <style>
      body {
         background: #f1f5f9;
      }

      .chat-wrapper {
         height: calc(100vh - 110px);
      }

      .chat-sidebar {
         background: #fff;
         border-radius: 22px 0 0 22px;
         border-right: 1px solid #eef2ff;
         overflow: hidden;
      }

      .chat-content {
         background: #efeae2;
         border-radius: 0 22px 22px 0;
         overflow: hidden;
         position: relative;
      }

      .chat-content::before {
         content: "";
         position: absolute;
         inset: 0;
         background-image:
            radial-gradient(rgba(0, 0, 0, .03) 1px, transparent 1px);
         background-size: 24px 24px;
         opacity: .6;
      }

      .chat-header {
         background: #fff;
         border-bottom: 1px solid #eef2ff;
         position: relative;
         z-index: 2;
      }

      .chat-search {
         background: #f8fafc;
         border-radius: 14px;
         border: 1px solid #eef2ff;
      }

      .chat-user {
         padding: 14px 18px;
         transition: .2s;
         cursor: pointer;
         border-bottom: 1px solid #f8fafc;
      }

      .chat-user:hover {
         background: #f8fafc;
      }

      .chat-user.active {
         background: #e0f2fe;
      }

      .avatar-chat {
         width: 52px;
         height: 52px;
         border-radius: 16px;
         background: #2563eb;
         color: #fff;
         display: flex;
         align-items: center;
         justify-content: center;
         font-weight: bold;
         font-size: 18px;
      }

      .chat-body {
         height: calc(100vh - 260px);
         overflow-y: auto;
         padding: 25px;
         position: relative;
         z-index: 2;
      }

      .message-row {
         margin-bottom: 18px;
         display: flex;
      }

      .message-row.me {
         justify-content: end;
      }

      .chat-bubble {
         max-width: 70%;
         padding: 12px 16px;
         border-radius: 18px;
         position: relative;
         box-shadow: 0 2px 10px rgba(0, 0, 0, .04);
      }

      .chat-bubble.sender {
         background: #fff;
         border-top-left-radius: 6px;
      }

      .chat-bubble.me {
         background: #d9fdd3;
         border-top-right-radius: 6px;
      }

      .chat-time {
         font-size: 11px;
         color: #64748b;
         margin-top: 4px;
         text-align: right;
      }

      .chat-footer {
         background: #fff;
         border-top: 1px solid #eef2ff;
         position: relative;
         z-index: 2;
      }

      .chat-input {
         background: #f8fafc;
         border: 1px solid #eef2ff;
         border-radius: 16px;
         padding: 12px 16px;
      }

      .online-dot {
         width: 12px;
         height: 12px;
         border-radius: 50%;
         background: #22c55e;
      }

      .message-file {
         background: rgba(255, 255, 255, .6);
         border-radius: 12px;
         padding: 10px;
         margin-top: 10px;
      }

      .quick-action {
         width: 44px;
         height: 44px;
         border-radius: 14px;
         display: flex;
         align-items: center;
         justify-content: center;
         background: #f8fafc;
         cursor: pointer;
         transition: .2s;
      }

      .quick-action:hover {
         background: #e2e8f0;
      }

      .sidebar-top {
         border-bottom: 1px solid #eef2ff;
      }

      .badge-unread {
         width: 24px;
         height: 24px;
         border-radius: 50%;
         background: #2563eb;
         color: #fff;
         display: flex;
         align-items: center;
         justify-content: center;
         font-size: 11px;
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
                        💬 Chat Collaboration
                     </h4>

                     <p class="text-muted mb-0">
                        Komunikasi sekolah, instruktur dan admin platform
                     </p>

                  </div>

                  <div class="d-flex gap-2">

                     <button class="btn btn-light">

                        <i class="ti ti-phone"></i>

                     </button>

                     <button class="btn btn-light">

                        <i class="ti ti-video"></i>

                     </button>

                     <button class="btn btn-primary">

                        <i class="ti ti-plus"></i>
                        New Chat

                     </button>

                  </div>

               </div>

               <!-- CHAT -->
               <div class="row g-0 chat-wrapper">

                  <!-- SIDEBAR -->
                  <div class="col-lg-4">

                     <div class="chat-sidebar h-100 shadow-sm">

                        <!-- TOP -->
                        <div class="sidebar-top p-3">

                           <div class="d-flex justify-content-between align-items-center mb-3">

                              <div class="d-flex align-items-center gap-3">

                                 <div class="avatar-chat">
                                    ZA
                                 </div>

                                 <div>

                                    <div class="fw-semibold">
                                       Zack Admin
                                    </div>

                                    <small class="text-success">
                                       Online
                                    </small>

                                 </div>

                              </div>

                              <div class="d-flex gap-2">

                                 <div class="quick-action">
                                    <i class="ti ti-settings"></i>
                                 </div>

                                 <div class="quick-action">
                                    <i class="ti ti-dots"></i>
                                 </div>

                              </div>

                           </div>

                           <!-- SEARCH -->
                           <div class="chat-search px-3 py-2 d-flex align-items-center gap-2">

                              <i class="ti ti-search text-muted"></i>

                              <input type="text"
                                 class="form-control border-0 bg-transparent p-0"
                                 placeholder="Cari chat..."
                                 style="box-shadow:none;">

                           </div>

                        </div>

                        <!-- USER LIST -->
                        <div class="chat-user active">

                           <div class="d-flex align-items-center gap-3">

                              <div class="avatar-chat">
                                 SM
                              </div>

                              <div class="flex-grow-1">

                                 <div class="d-flex justify-content-between">

                                    <div class="fw-semibold">
                                       SMKN 1 Medan
                                    </div>

                                    <small class="text-muted">
                                       09:25
                                    </small>

                                 </div>

                                 <div class="d-flex justify-content-between align-items-center">

                                    <small class="text-muted">
                                       Trainer kit sudah aktif...
                                    </small>

                                    <div class="badge-unread">
                                       2
                                    </div>

                                 </div>

                              </div>

                           </div>

                        </div>

                        <!-- USER -->
                        <div class="chat-user">

                           <div class="d-flex align-items-center gap-3">

                              <div class="avatar-chat"
                                 style="background:#10b981;">
                                 BS
                              </div>

                              <div class="flex-grow-1">

                                 <div class="d-flex justify-content-between">

                                    <div class="fw-semibold">
                                       Budi Santoso
                                    </div>

                                    <small class="text-muted">
                                       08:12
                                    </small>

                                 </div>

                                 <small class="text-muted">
                                    Workshop ESP32 besok...
                                 </small>

                              </div>

                           </div>

                        </div>

                        <!-- USER -->
                        <div class="chat-user">

                           <div class="d-flex align-items-center gap-3">

                              <div class="avatar-chat"
                                 style="background:#f59e0b;">
                                 AR
                              </div>

                              <div class="flex-grow-1">

                                 <div class="d-flex justify-content-between">

                                    <div class="fw-semibold">
                                       Andi Rahman
                                    </div>

                                    <small class="text-muted">
                                       Kemarin
                                    </small>

                                 </div>

                                 <small class="text-muted">
                                    Monitoring sekolah selesai
                                 </small>

                              </div>

                           </div>

                        </div>

                        <!-- USER -->
                        <div class="chat-user">

                           <div class="d-flex align-items-center gap-3">

                              <div class="avatar-chat"
                                 style="background:#ef4444;">
                                 DN
                              </div>

                              <div class="flex-grow-1">

                                 <div class="d-flex justify-content-between">

                                    <div class="fw-semibold">
                                       Dinas Pendidikan
                                    </div>

                                    <small class="text-muted">
                                       Senin
                                    </small>

                                 </div>

                                 <small class="text-muted">
                                    Laporan evaluasi platform
                                 </small>

                              </div>

                           </div>

                        </div>

                     </div>

                  </div>

                  <!-- CHAT CONTENT -->
                  <div class="col-lg-8">

                     <div class="chat-content h-100 shadow-sm">

                        <!-- HEADER -->
                        <div class="chat-header p-3">

                           <div class="d-flex justify-content-between align-items-center">

                              <div class="d-flex align-items-center gap-3">

                                 <div class="avatar-chat">
                                    SM
                                 </div>

                                 <div>

                                    <div class="fw-semibold">
                                       SMKN 1 Medan
                                    </div>

                                    <div class="d-flex align-items-center gap-2">

                                       <div class="online-dot"></div>

                                       <small class="text-success">
                                          Online
                                       </small>

                                    </div>

                                 </div>

                              </div>

                              <div class="d-flex gap-2">

                                 <div class="quick-action">
                                    <i class="ti ti-search"></i>
                                 </div>

                                 <div class="quick-action">
                                    <i class="ti ti-phone"></i>
                                 </div>

                                 <div class="quick-action">
                                    <i class="ti ti-video"></i>
                                 </div>

                                 <div class="quick-action">
                                    <i class="ti ti-dots-vertical"></i>
                                 </div>

                              </div>

                           </div>

                        </div>

                        <!-- BODY -->
                        <div class="chat-body">

                           <!-- MESSAGE -->
                           <div class="message-row">

                              <div class="chat-bubble sender">

                                 <div>
                                    Halo admin 👋 trainer kit kami sudah aktif.
                                 </div>

                                 <div class="chat-time">
                                    09:15
                                 </div>

                              </div>

                           </div>

                           <!-- MESSAGE -->
                           <div class="message-row me">

                              <div class="chat-bubble me">

                                 <div>
                                    Baik 👍 apakah seluruh ESP32 sudah berhasil terkoneksi ke dashboard?
                                 </div>

                                 <div class="chat-time">
                                    09:16 ✓✓
                                 </div>

                              </div>

                           </div>

                           <!-- MESSAGE -->
                           <div class="message-row">

                              <div class="chat-bubble sender">

                                 <div>
                                    Sudah berhasil, tinggal setup MQTT broker.
                                 </div>

                                 <div class="message-file">

                                    <div class="d-flex align-items-center gap-2">

                                       <i class="ti ti-file-text text-primary"></i>

                                       <div>

                                          <div class="fw-semibold">
                                             setup-mqtt.pdf
                                          </div>

                                          <small class="text-muted">
                                             2.4 MB
                                          </small>

                                       </div>

                                    </div>

                                 </div>

                                 <div class="chat-time">
                                    09:18
                                 </div>

                              </div>

                           </div>

                           <!-- MESSAGE -->
                           <div class="message-row me">

                              <div class="chat-bubble me">

                                 <div>
                                    Oke mantap 🚀 nanti instruktur Budi akan membantu remote setup broker.
                                 </div>

                                 <div class="chat-time">
                                    09:20 ✓✓
                                 </div>

                              </div>

                           </div>

                           <!-- MESSAGE -->
                           <div class="message-row">

                              <div class="chat-bubble sender">

                                 <div>
                                    Siap admin 👍
                                 </div>

                                 <div class="chat-time">
                                    09:22
                                 </div>

                              </div>

                           </div>

                        </div>

                        <!-- FOOTER -->
                        <div class="chat-footer p-3">

                           <div class="d-flex align-items-center gap-3">

                              <div class="quick-action">
                                 <i class="ti ti-plus"></i>
                              </div>

                              <div class="quick-action">
                                 <i class="ti ti-mood-smile"></i>
                              </div>

                              <div class="flex-grow-1">

                                 <input type="text"
                                    class="form-control chat-input"
                                    placeholder="Ketik pesan...">

                              </div>

                              <button class="btn btn-primary rounded-4 px-4">

                                 <i class="ti ti-send"></i>

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