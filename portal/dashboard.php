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
            <?php
            if ($role == "guru" or $role = "superadmin") {
               require 'dashboard-guru.php';
            } else if ($role == "siswa" or $role = "superadmin") {
               require 'dashboard-siswa.php';
            } else if ($role == "admin" or $role = "superadmin") {
                require 'dashboard-governance.php';
            }
            ?>
         </div>
      </div>
   </div>
   <?php require 'library.php'; ?>
</body>

</html>