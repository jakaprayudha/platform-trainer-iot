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
                        🤖 AI Assistant Trainer Kit
                     </h4>

                     <p class="text-muted mb-0">
                        Tanyakan seputar IoT, ESP32, Sensor, Arduino dan praktikum
                     </p>

                  </div>

                  <span class="badge bg-success px-3 py-2">

                     ● AI Online

                  </span>

               </div>

               <!-- INFO -->
               <div class="alert alert-primary border-0 shadow-sm">

                  <div class="d-flex align-items-center">

                     <i class="ti ti-sparkles fs-6 me-3"></i>

                     <div>

                        <strong>AI Assistant Trainer Kit</strong><br>

                        Membantu menjawab pertanyaan seputar IoT, mikrokontroler,
                        pemrograman Arduino, ESP32, sensor, aktuator dan troubleshooting.

                     </div>

                  </div>

               </div>

               <!-- CHAT -->
               <div class="card border-0 shadow-sm">

                  <div class="card-body p-0 d-flex flex-column"
                     style="height:750px;">

                     <!-- HEADER -->
                     <div class="p-3 border-bottom bg-light">

                        <div class="d-flex align-items-center">

                           <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center me-3"
                              style="width:50px;height:50px;">

                              🤖

                           </div>

                           <div>

                              <div class="fw-bold">

                                 Trainer Kit AI

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

                        <!-- BOT -->
                        <div class="mb-4">

                           <div class="bg-white shadow-sm p-3 rounded d-inline-block">

                              👋 Halo! Saya AI Assistant Trainer Kit.
                              Silakan tanyakan apa saja seputar IoT,
                              ESP32, Arduino IDE, Sensor atau Praktikum.

                           </div>

                        </div>

                        <!-- USER -->
                        <div class="text-end mb-4">

                           <div class="bg-primary text-white p-3 rounded d-inline-block">

                              Apa fungsi sensor DHT11?

                           </div>

                        </div>

                        <!-- BOT -->
                        <div class="mb-4">

                           <div class="bg-white shadow-sm p-3 rounded d-inline-block">

                              Sensor DHT11 digunakan untuk mengukur suhu dan kelembaban udara.
                              Sensor ini banyak digunakan pada project monitoring lingkungan
                              berbasis Arduino dan ESP32.

                           </div>

                        </div>

                     </div>

                     <!-- QUICK PROMPT -->
                     <div class="px-3 pb-3">

                        <div class="d-flex flex-wrap gap-2">

                           <button class="btn btn-light btn-sm">

                              ESP32 Dasar

                           </button>

                           <button class="btn btn-light btn-sm">

                              Sensor DHT11

                           </button>

                           <button class="btn btn-light btn-sm">

                              MQTT

                           </button>

                           <button class="btn btn-light btn-sm">

                              Arduino IDE

                           </button>

                           <button class="btn btn-light btn-sm">

                              Troubleshooting

                           </button>

                        </div>

                     </div>

                     <!-- INPUT -->
                     <div class="border-top p-3">

                        <div class="input-group">

                           <button class="btn btn-light">

                              <i class="ti ti-paperclip"></i>

                           </button>

                           <input type="text"
                              class="form-control"
                              placeholder="Tanyakan sesuatu kepada AI Assistant...">

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

</html>