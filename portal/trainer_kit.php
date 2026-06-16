<!doctype html>
<html lang="en">

<head>
   <?php require 'partial-head.php' ?>
   <style>
      .preview-image {
         cursor: pointer;
         transition: .3s;
      }

      .preview-image:hover {
         transform: scale(1.01);
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
                        🖥️ Trainer Kit Layout Preview
                     </h4>

                     <p class="text-muted mb-0">
                        Visualisasi desain board dan tampilan 3D Trainer Kit IoT
                     </p>

                  </div>

               </div>
               <div class="card border-0 shadow-sm mb-4">

                  <div class="card-header bg-white">

                     <h5 class="fw-bold mb-0">
                        📐 Layout Board Trainer Kit
                     </h5>

                  </div>

                  <div class="card-body">

                     <img src="../assets/images/trainer/layout_trainer_kit.jpeg"
                        class="img-fluid rounded border preview-image"
                        data-bs-toggle="modal"
                        data-bs-target="#imageModal"
                        data-img="../assets/images/trainer/layout_trainer_kit.jpeg">


                  </div>

               </div>

               <div class="card border-0 shadow-sm mb-4">

                  <div class="card-header bg-white">

                     <h5 class="fw-bold mb-0">
                        🎨 Layout 3D Trainer Kit
                     </h5>

                  </div>

                  <div class="card-body">

                     <img src="../assets/images/trainer/layout_3D_trainer_kit.jpeg"
                        class="img-fluid rounded border preview-image"
                        data-bs-toggle="modal"
                        data-bs-target="#imageModal"
                        data-img="../assets/images/trainer/layout_3D_trainer_kit.jpeg">

                  </div>

               </div>
            </div>
         </div>
      </div>
   </div>
   <?php require 'library.php'; ?>
   <script src="https://unpkg.com/@panzoom/panzoom/dist/panzoom.min.js"></script>

   <!-- IMAGE VIEWER -->
   <div class="modal fade"
      id="imageModal"
      tabindex="-1">

      <div class="modal-dialog modal-fullscreen">

         <div class="modal-content bg-dark">

            <div class="modal-header border-0">

               <h5 class="text-white">
                  Layout Preview
               </h5>

               <button type="button"
                  class="btn-close btn-close-white"
                  data-bs-dismiss="modal"></button>

            </div>

            <div class="modal-body p-0">

               <div id="panzoom-container"
                  class="w-100 h-100 d-flex justify-content-center align-items-center overflow-hidden">

                  <img id="zoomImage"
                     src=""
                     style="max-width:100%; max-height:100%; cursor:grab;">

               </div>

            </div>

         </div>

      </div>

   </div>
</body>
<script>
   let panzoomInstance = null;

   document.querySelectorAll('.preview-image')
      .forEach(img => {

         img.addEventListener('click', function() {

            document.getElementById('zoomImage')
               .src = this.dataset.img;

            setTimeout(() => {

               if (panzoomInstance) {
                  panzoomInstance.destroy();
               }

               const elem =
                  document.getElementById('zoomImage');

               panzoomInstance =
                  Panzoom(elem, {
                     maxScale: 8,
                     minScale: 1,
                     contain: 'outside'
                  });

               elem.parentElement.addEventListener(
                  'wheel',
                  panzoomInstance.zoomWithWheel
               );

            }, 300);

         });

      });
</script>

</html>