<?php
require '../controller/profile/getProfile.php';
?>
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
                     <h4 class="fw-bold mb-1">📁 Pre Test</h4>
                     <p class="text-muted mb-0">
                        Pre Test merupakan evaluasi awal yang dilakukan sebelum pembelajaran dimulai untuk mengetahui tingkat pengetahuan dan kesiapan peserta terhadap materi Internet of Things (IoT), Elektronika, dan Pemrograman yang akan dipelajari.
                     </p>
                  </div>
               </div>

               <div class="alert alert-primary border-0 shadow-sm mb-4">

                  <div class="d-flex align-items-start">

                     <div class="me-3 fs-3">
                        📋
                     </div>

                     <div>

                        <h6 class="fw-bold mb-2">
                           Informasi Pre Test
                        </h6>

                        <ul class="mb-0">
                           <li>Total soal : <strong>10 Soal Pilihan Ganda</strong></li>
                           <li>Setiap soal memiliki bobot nilai yang berbeda.</li>
                           <li>Total nilai maksimal : <strong>100 Poin</strong></li>
                           <li>Waktu pengerjaan : <strong>30 Menit</strong></li>
                           <li>Peserta hanya dapat mengerjakan satu kali.</li>
                           <li>Pastikan koneksi internet stabil sebelum memulai.</li>
                        </ul>

                     </div>

                  </div>

               </div>

               <div class="card shadow-sm border-0">

                  <div class="card-header bg-primary text-white">
                     <h5 class="mb-0">📋 Pre Test Trainer Kit IoT</h5>
                  </div>

                  <div class="card-body">

                     <form id="formPreTest">

                        <!-- SOAL 1 -->
                        <div class="mb-4">
                           <h6>1. Apa kepanjangan dari IoT? <small>(Bobot 5)</small></h6>

                           <div><input type="radio" name="q1" value="0"> Internet of Technology</div>
                           <div><input type="radio" name="q1" value="5"> Internet of Things</div>
                           <div><input type="radio" name="q1" value="0"> Integration of Technology</div>
                           <div><input type="radio" name="q1" value="0"> Interface of Things</div>
                        </div>

                        <!-- SOAL 2 -->
                        <div class="mb-4">
                           <h6>2. ESP32 termasuk perangkat? <small>(Bobot 5)</small></h6>

                           <div><input type="radio" name="q2" value="0"> Sensor</div>
                           <div><input type="radio" name="q2" value="5"> Mikrokontroler</div>
                           <div><input type="radio" name="q2" value="0"> Aktuator</div>
                           <div><input type="radio" name="q2" value="0"> Server</div>
                        </div>

                        <!-- SOAL 3 -->
                        <div class="mb-4">
                           <h6>3. Fungsi sensor adalah? <small>(Bobot 5)</small></h6>

                           <div><input type="radio" name="q3" value="5"> Mengambil data lingkungan</div>
                           <div><input type="radio" name="q3" value="0"> Menampilkan data</div>
                           <div><input type="radio" name="q3" value="0"> Menyimpan data</div>
                           <div><input type="radio" name="q3" value="0"> Menghapus data</div>
                        </div>

                        <!-- SOAL 4 -->
                        <div class="mb-4">
                           <h6>4. IDE yang umum digunakan untuk Arduino adalah? <small>(Bobot 10)</small></h6>

                           <div><input type="radio" name="q4" value="0"> Photoshop</div>
                           <div><input type="radio" name="q4" value="10"> Arduino IDE</div>
                           <div><input type="radio" name="q4" value="0"> Corel Draw</div>
                           <div><input type="radio" name="q4" value="0"> Blender</div>
                        </div>

                        <!-- SOAL 5 -->
                        <div class="mb-4">
                           <h6>5. LDR digunakan untuk mendeteksi? <small>(Bobot 10)</small></h6>

                           <div><input type="radio" name="q5" value="10"> Cahaya</div>
                           <div><input type="radio" name="q5" value="0"> Suara</div>
                           <div><input type="radio" name="q5" value="0"> Jarak</div>
                           <div><input type="radio" name="q5" value="0"> Getaran</div>
                        </div>

                        <!-- SOAL 6 -->
                        <div class="mb-4">
                           <h6>6. Sensor Ultrasonik digunakan untuk? <small>(Bobot 10)</small></h6>

                           <div><input type="radio" name="q6" value="0"> Suhu</div>
                           <div><input type="radio" name="q6" value="10"> Mengukur jarak</div>
                           <div><input type="radio" name="q6" value="0"> Cahaya</div>
                           <div><input type="radio" name="q6" value="0"> Kelembaban</div>
                        </div>

                        <!-- SOAL 7 -->
                        <div class="mb-4">
                           <h6>7. WiFi digunakan untuk? <small>(Bobot 10)</small></h6>

                           <div><input type="radio" name="q7" value="0"> Menambah RAM</div>
                           <div><input type="radio" name="q7" value="10"> Koneksi jaringan</div>
                           <div><input type="radio" name="q7" value="0"> Menambah storage</div>
                           <div><input type="radio" name="q7" value="0"> Pendingin</div>
                        </div>

                        <!-- SOAL 8 -->
                        <div class="mb-4">
                           <h6>8. MQTT digunakan untuk? <small>(Bobot 15)</small></h6>

                           <div><input type="radio" name="q8" value="15"> Komunikasi IoT</div>
                           <div><input type="radio" name="q8" value="0"> Desain Grafis</div>
                           <div><input type="radio" name="q8" value="0"> Editing Video</div>
                           <div><input type="radio" name="q8" value="0"> Office</div>
                        </div>

                        <!-- SOAL 9 -->
                        <div class="mb-4">
                           <h6>9. Dashboard IoT digunakan untuk? <small>(Bobot 15)</small></h6>

                           <div><input type="radio" name="q9" value="15"> Monitoring data</div>
                           <div><input type="radio" name="q9" value="0"> Install driver</div>
                           <div><input type="radio" name="q9" value="0"> Format komputer</div>
                           <div><input type="radio" name="q9" value="0"> Print dokumen</div>
                        </div>

                        <!-- SOAL 10 -->
                        <div class="mb-4">
                           <h6>10. Tujuan utama IoT adalah? <small>(Bobot 15)</small></h6>

                           <div><input type="radio" name="q10" value="15"> Menghubungkan perangkat dan data</div>
                           <div><input type="radio" name="q10" value="0"> Bermain game</div>
                           <div><input type="radio" name="q10" value="0"> Menonton film</div>
                           <div><input type="radio" name="q10" value="0"> Mengetik dokumen</div>
                        </div>

                        <button type="submit" class="btn btn-success">
                           💾 Simpan Jawaban
                        </button>

                     </form>

                     <div id="hasilTest" class="mt-4"></div>

                  </div>

               </div>

               <script>
                  $('#formPreTest').submit(function(e) {

                     e.preventDefault();

                     let total = 0;

                     for (let i = 1; i <= 10; i++) {

                        let nilai = parseInt(
                           $('input[name="q' + i + '"]:checked').val()
                        ) || 0;

                        total += nilai;
                     }

                     let kategori = '';

                     if (total >= 85) {
                        kategori = 'Sangat Baik';
                     } else if (total >= 70) {
                        kategori = 'Baik';
                     } else if (total >= 50) {
                        kategori = 'Cukup';
                     } else {
                        kategori = 'Perlu Pendampingan';
                     }

                     $('#hasilTest').html(`
      <div class="alert alert-success">

         <h5 class="mb-2">
            🎉 Hasil Pre Test
         </h5>

         <p class="mb-1">
            Nilai : <strong>${total}</strong>
         </p>

         <p class="mb-0">
            Kategori : <strong>${kategori}</strong>
         </p>

      </div>
   `);

                  });
               </script>





            </div>
         </div>
      </div>
   </div>
   <?php require 'library.php'; ?>

</body>




</html>