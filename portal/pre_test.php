<?php
require '../controller/profile/getProfile.php';
$checkPretest = mysqli_query(
   $conn,
   "SELECT *
   FROM pretest_results
   WHERE user_id='" . $_SESSION['user_id'] . "'
   LIMIT 1"
);

$pretestData = mysqli_fetch_assoc($checkPretest);

$alreadyDone =
   mysqli_num_rows($checkPretest) > 0;
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

               <?php if ($alreadyDone) { ?>

                  <div class="alert alert-success border-0 shadow-sm">

                     <h5 class="mb-3">
                        🎉 Anda Telah Menyelesaikan Pre Test
                     </h5>

                     <div class="row">

                        <div class="col-md-4">

                           <div class="card border-success">

                              <div class="card-body text-center">

                                 <h6>Nilai</h6>

                                 <h2 class="fw-bold text-success">
                                    <?= $pretestData['score'] ?>
                                 </h2>

                              </div>

                           </div>

                        </div>

                        <div class="col-md-4">

                           <div class="card border-primary">

                              <div class="card-body text-center">

                                 <h6>Kategori</h6>

                                 <h5 class="fw-bold text-primary">
                                    <?= $pretestData['category'] ?>
                                 </h5>

                              </div>

                           </div>

                        </div>

                        <div class="col-md-4">

                           <div class="card border-info">

                              <div class="card-body text-center">

                                 <h6>Tanggal</h6>

                                 <small>
                                    <?= date(
                                       'd M Y H:i',
                                       strtotime(
                                          $pretestData['created_at']
                                       )
                                    ) ?>
                                 </small>

                              </div>

                           </div>

                        </div>

                     </div>

                  </div>

               <?php } ?>

               <div class="card shadow-sm border-0">

                  <div class="card-header bg-light text-white">
                     <h5 class="mb-0">
                        📋 Pre Test Kesiapan Pembelajaran Digital
                     </h5>
                  </div>



                  <div class="card-body">

                     <div class="alert alert-info border-0">

                        <h6 class="fw-bold">
                           Informasi Pre Test
                        </h6>

                        <p class="mb-2">
                           Pre Test ini bertujuan untuk mengetahui tingkat pemahaman dan kesiapan peserta dalam mengikuti pelatihan pemanfaatan teknologi, Artificial Intelligence (AI), Internet of Things (IoT), dan pembelajaran digital.
                        </p>

                        <ul class="mb-0">
                           <li>Terdiri dari 10 soal pilihan ganda.</li>
                           <li>Setiap soal memiliki bobot 10 poin.</li>
                           <li>Nilai maksimal 100 poin.</li>
                           <li>Pilih jawaban yang paling tepat.</li>
                        </ul>

                     </div>

                     <form id="formPreTest" method="POST">

                        <!-- SOAL 1 -->
                        <div class="mb-4">
                           <h6>1. Apa yang dimaksud dengan internet?</h6>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q1" value="10">
                              <label class="form-check-label">
                                 Jaringan yang menghubungkan perangkat di seluruh dunia
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q1" value="0">
                              <label class="form-check-label">
                                 Program pengolah kata
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q1" value="0">
                              <label class="form-check-label">
                                 Perangkat penyimpanan data
                              </label>
                           </div>
                        </div>

                        <!-- SOAL 2 -->
                        <div class="mb-4">
                           <h6>2. Manfaat utama teknologi dalam pembelajaran adalah?</h6>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q2" value="10">
                              <label class="form-check-label">
                                 Membantu pembelajaran menjadi lebih interaktif
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q2" value="0">
                              <label class="form-check-label">
                                 Menggantikan peran guru
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q2" value="0">
                              <label class="form-check-label">
                                 Mengurangi jumlah siswa
                              </label>
                           </div>
                        </div>

                        <!-- SOAL 3 -->
                        <div class="mb-4">
                           <h6>3. Manakah yang termasuk perangkat digital?</h6>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q3" value="0">
                              <label class="form-check-label">
                                 Penggaris
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q3" value="10">
                              <label class="form-check-label">
                                 Laptop
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q3" value="0">
                              <label class="form-check-label">
                                 Buku Tulis
                              </label>
                           </div>
                        </div>

                        <!-- SOAL 4 -->
                        <div class="mb-4">
                           <h6>4. Apa fungsi utama email?</h6>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q4" value="10">
                              <label class="form-check-label">
                                 Mengirim dan menerima pesan elektronik
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q4" value="0">
                              <label class="form-check-label">
                                 Bermain game
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q4" value="0">
                              <label class="form-check-label">
                                 Menggambar
                              </label>
                           </div>
                        </div>

                        <!-- SOAL 5 -->
                        <div class="mb-4">
                           <h6>5. Apa yang dimaksud pembelajaran digital?</h6>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q5" value="10">
                              <label class="form-check-label">
                                 Pembelajaran yang memanfaatkan teknologi digital
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q5" value="0">
                              <label class="form-check-label">
                                 Pembelajaran tanpa guru
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q5" value="0">
                              <label class="form-check-label">
                                 Pembelajaran tanpa siswa
                              </label>
                           </div>
                        </div>

                        <!-- SOAL 6 -->
                        <div class="mb-4">
                           <h6>6. Jika menemukan informasi di internet, langkah yang tepat adalah?</h6>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q6" value="10">
                              <label class="form-check-label">
                                 Memastikan sumber informasi terpercaya
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q6" value="0">
                              <label class="form-check-label">
                                 Langsung menyebarkan
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q6" value="0">
                              <label class="form-check-label">
                                 Mengabaikannya
                              </label>
                           </div>
                        </div>

                        <!-- SOAL 7 -->
                        <div class="mb-4">
                           <h6>7. Aplikasi presentasi digunakan untuk?</h6>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q7" value="10">
                              <label class="form-check-label">
                                 Menyampaikan materi lebih menarik
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q7" value="0">
                              <label class="form-check-label">
                                 Menghapus data
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q7" value="0">
                              <label class="form-check-label">
                                 Memformat harddisk
                              </label>
                           </div>
                        </div>

                        <!-- SOAL 8 -->
                        <div class="mb-4">
                           <h6>8. Sikap yang baik dalam menggunakan teknologi adalah?</h6>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q8" value="10">
                              <label class="form-check-label">
                                 Menggunakan teknologi secara bijak dan bertanggung jawab
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q8" value="0">
                              <label class="form-check-label">
                                 Menyebarkan informasi tanpa verifikasi
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q8" value="0">
                              <label class="form-check-label">
                                 Membagikan password kepada orang lain
                              </label>
                           </div>
                        </div>

                        <!-- SOAL 9 -->
                        <div class="mb-4">
                           <h6>9. Mengapa guru perlu mengikuti pelatihan teknologi?</h6>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q9" value="10">
                              <label class="form-check-label">
                                 Meningkatkan kompetensi dan keterampilan mengajar
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q9" value="0">
                              <label class="form-check-label">
                                 Mengurangi jam belajar
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q9" value="0">
                              <label class="form-check-label">
                                 Menggantikan kurikulum
                              </label>
                           </div>
                        </div>

                        <!-- SOAL 10 -->
                        <div class="mb-4">
                           <h6>10. Mengapa guru perlu memahami perkembangan teknologi?</h6>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q10" value="10">
                              <label class="form-check-label">
                                 Agar pembelajaran sesuai dengan perkembangan zaman
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q10" value="0">
                              <label class="form-check-label">
                                 Agar tidak perlu mengajar
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q10" value="0">
                              <label class="form-check-label">
                                 Untuk mengganti peran siswa
                              </label>
                           </div>
                        </div>

                        <button
                           type="submit"
                           id="btnSubmit"
                           class="btn btn-success"
                           disabled>

                           💾 Simpan Jawaban

                        </button>

                     </form>

                     <div id="hasilTest" class="mt-4"></div>

                  </div>

               </div>







            </div>
         </div>
      </div>
   </div>
   <?php require 'library.php'; ?>

</body>
<script>
   function checkAllAnswered() {

      let totalAnswered = 0;

      for (let i = 1; i <= 10; i++) {

         if (
            $('input[name="q' + i + '"]:checked').length > 0
         ) {
            totalAnswered++;
         }

      }

      if (totalAnswered == 10) {

         $('#btnSubmit')
            .prop('disabled', false);

      } else {

         $('#btnSubmit')
            .prop('disabled', true);

      }

   }

   $(document).on(
      'change',
      'input[type="radio"]',
      function() {

         checkAllAnswered();

      }
   );
</script>

<script>
   $('#formPreTest').submit(function(e) {

      e.preventDefault();

      $.ajax({
         url: '../controller/pretest/storePretest.php',
         type: 'POST',
         data: $(this).serialize(),
         dataType: 'json',

         success: function(response) {

            if (response.status) {
               $('#hasilTest').html(`
         <div class="alert alert-success">

            <h5>
               🎉 Hasil Pre Test
            </h5>

            <p>
               Nilai :
               <strong>${response.score}</strong>
            </p>

            <p>
               Kategori :
               <strong>${response.category}</strong>
            </p>

         </div>
      `);

               $('#btnSubmit')
                  .prop('disabled', true)
                  .removeClass('btn-success')
                  .addClass('btn-secondary')
                  .html(
                     '✅ Pre Test Selesai'
                  );

               $('input[type="radio"]')
                  .prop('disabled', true);

            } else {

               alert(response.message);

            }

         }

      });

   });
</script>

</html>