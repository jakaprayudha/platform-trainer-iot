<!doctype html>
<html lang="en">

<head>
   <?php require 'partial-head.php' ?>
   <style>
      #chatArea {
         height: 550px;
         overflow-y: auto;
         overflow-x: hidden;
         scroll-behavior: smooth;
      }

      #chatArea::-webkit-scrollbar {
         width: 8px;
      }

      #chatArea::-webkit-scrollbar-thumb {
         background: #cbd5e1;
         border-radius: 20px;
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
                        💬 Bantuan Admin Trainer Kit
                     </h4>

                     <p class="text-muted mb-0">
                        Komunikasi bantuan dengan admin
                     </p>

                  </div>

               </div>
               <div class="alert alert-primary border-0 shadow-sm">

                  <div class="d-flex align-items-center">

                     <i class="ti ti-info-circle fs-6 me-3"></i>

                     <div>

                        <strong>Butuh bantuan?</strong><br>

                        Admin Trainer Kit siap membantu terkait
                        hardware, software, praktikum, dan troubleshooting.

                     </div>

                  </div>

               </div>
               <div class="card border-0 shadow-sm">

                  <div class="card-body p-0 d-flex flex-column"
                     style="height:700px;">

                     <!-- HEADER CHAT -->
                     <div class="p-3 border-bottom flex-shrink-0">

                        <div class="d-flex align-items-center">

                           <img src="../assets/images/profile/user-1.jpg"
                              class="rounded-circle me-3"
                              width="50">

                           <div>

                              <div class="fw-bold">
                                 Admin Trainer Kit
                              </div>

                              <small class="text-success">
                                 ● Online
                              </small>

                           </div>

                        </div>

                     </div>

                     <!-- CHAT AREA -->
                     <div id="chatArea"
                        class="flex-grow-1 p-4"
                        style="
                        overflow-y:auto;
                        background:#f8f9fa;
                     ">

                        <!-- ADMIN -->
                        <div class="mb-3">

                           <div class="bg-white shadow-sm p-3 rounded d-inline-block">

                              Halo 👋 ada yang bisa kami bantu terkait
                              Trainer Kit IoT?

                           </div>

                        </div>

                        <!-- USER -->
                        <div class="text-end mb-3">

                           <div class="bg-primary text-white p-3 rounded d-inline-block">

                              Saya mengalami kendala saat upload program
                              ke ESP32.

                           </div>

                        </div>

                        <!-- ADMIN -->
                        <div class="mb-3">

                           <div class="bg-white shadow-sm p-3 rounded d-inline-block">

                              Silakan kirim screenshot error yang muncul
                              pada Arduino IDE.

                           </div>

                        </div>

                     </div>

                     <!-- INPUT -->
                     <div class="border-top p-3 flex-shrink-0">

                        <div class="input-group">

                           <button class="btn btn-light">

                              <i class="ti ti-paperclip"></i>

                           </button>

                           <input type="text"
                              class="form-control"
                              placeholder="Ketik pesan bantuan...">

                           <button class="btn btn-primary">

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
   <?php require 'library.php'; ?>
</body>

<script>
   window.onload = function() {
      const chatArea =
         document.getElementById("chatArea");

      chatArea.scrollTop =
         chatArea.scrollHeight;
   }
</script>

</html>