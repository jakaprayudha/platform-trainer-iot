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
                        📄 Dokumen Pendukung Trainer Kit
                     </h4>

                     <p class="text-muted mb-0">
                        Trainer Kit IoT digunakan sebagai media pembelajaran praktikum
                     </p>

                  </div>

               </div>

               <!-- DOCUMENT -->
               <div class="card border-0 shadow-sm">

                  <div class="card-body p-0">

                     <iframe
                        src="https://docs.google.com/document/d/1MolxI-WhkOer1cQvxGryYpXl5wl8ht8HPi1W9n1SI4Q/edit?usp=sharing"
                        width="100%"
                        height="900"
                        style="border:none;">
                     </iframe>

                  </div>

               </div>

            </div>
         </div>
      </div>
   </div>
   <?php require 'library.php'; ?>
</body>

</html>