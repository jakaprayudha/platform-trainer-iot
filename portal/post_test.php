<?php
require '../controller/profile/getProfile.php';
$checkPretest = mysqli_query(
   $conn,
   "SELECT *
   FROM posttest_results
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

                     <h4 class="fw-bold mb-1">
                        📁 Post Test
                     </h4>

                     <p class="text-muted mb-0">
                        Post Test merupakan evaluasi akhir yang dilakukan setelah peserta menyelesaikan seluruh rangkaian pelatihan dan pembelajaran. Tujuannya adalah untuk mengukur peningkatan pengetahuan, pemahaman, dan kompetensi peserta terhadap materi Internet of Things (IoT), Artificial Intelligence (AI), Elektronika Dasar, Pemrograman, serta implementasi teknologi dalam proses pembelajaran dan kehidupan sehari-hari.
                     </p>

                  </div>

               </div>

               <?php if ($alreadyDone) { ?>

                  <div class="alert alert-success border-0 shadow-sm">

                     <h5 class="mb-3">
                        🎉 Anda Telah Menyelesaikan Post Test
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

                     <hr>

                     <div class="text-center">


                        <?php if ($pretestData['score'] >= 75) { ?>

                           <div class="alert alert-primary border-0">

                              <h6 class="mb-2">
                                 🏆 Selamat!
                              </h6>

                              <p class="mb-3">
                                 Anda dinyatakan <strong>LULUS</strong> pelatihan Trainer Kit IoT dan berhak mendapatkan sertifikat pelatihan.
                              </p>

                              <a
                                 href="../controller/certificate/downloadCertificate.php"
                                 target="_blank"
                                 class="btn btn-success btn-lg">

                                 <i class="ti ti-download"></i>
                                 Download Sertifikat

                              </a>

                           </div>

                        <?php } else { ?>

                           <div class="alert alert-warning border-0">

                              <h6>
                                 📚 Belum Memenuhi Nilai Kelulusan
                              </h6>

                              <p class="mb-0">
                                 Nilai minimal kelulusan untuk mendapatkan sertifikat adalah <strong>75</strong>.
                              </p>

                           </div>

                        <?php } ?>


                     </div>

                  </div>

               <?php } ?>

               <div class="card shadow-sm border-0">

                  <div class="card-header bg-light text-white">
                     <h5 class="mb-0">
                        📋 Post Test Kesiapan Pembelajaran Digital
                     </h5>
                  </div>



                  <div class="card-body">

                     <div class="alert alert-success border-0 mb-4">

                        <h6 class="fw-bold">
                           📋 Informasi Post Test
                        </h6>

                        <p class="mb-2">
                           Post Test bertujuan untuk mengukur tingkat pemahaman peserta setelah mengikuti pelatihan Trainer Kit IoT dan Artificial Intelligence (AI). Materi yang diujikan mencakup mikrokontroler Arduino dan ESP32, sensor, aktuator, pemrograman dasar Arduino, komunikasi IoT, dashboard monitoring, serta platform Blynk.
                        </p>

                        <ul class="mb-0">
                           <li>Total soal : <strong>20 Soal Pilihan Ganda</strong></li>
                           <li>Bobot setiap soal : <strong>5 Poin</strong></li>
                           <li>Total nilai maksimal : <strong>100 Poin</strong></li>
                           <li>Waktu pengerjaan : <strong>30 Menit</strong></li>
                           <li>Post Test hanya dapat dikerjakan satu kali.</li>
                        </ul>

                     </div>

                     <form id="formPreTest" method="POST">

                        <!-- SOAL 1 -->
                        <div class="mb-4">
                           <h6>1. Apa yang dimaksud dengan Internet of Things (IoT)?</h6>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q1" value="5">
                              <label class="form-check-label">
                                 Konsep menghubungkan perangkat ke internet untuk bertukar data
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q1" value="0">
                              <label class="form-check-label">
                                 Sistem operasi komputer
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q1" value="0">
                              <label class="form-check-label">
                                 Aplikasi pengolah kata
                              </label>
                           </div>
                        </div>

                        <!-- SOAL 2 -->
                        <div class="mb-4">
                           <h6>2. Arduino digunakan sebagai?</h6>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q2" value="5">
                              <label class="form-check-label">
                                 Mikrokontroler untuk mengendalikan perangkat elektronik
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q2" value="0">
                              <label class="form-check-label">
                                 Browser Internet
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q2" value="0">
                              <label class="form-check-label">
                                 Sistem operasi
                              </label>
                           </div>
                        </div>

                        <!-- SOAL 3 -->
                        <div class="mb-4">
                           <h6>3. ESP32 memiliki keunggulan utama berupa?</h6>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q3" value="5">
                              <label class="form-check-label">
                                 WiFi dan Bluetooth bawaan
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q3" value="0">
                              <label class="form-check-label">
                                 Printer internal
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q3" value="0">
                              <label class="form-check-label">
                                 Harddisk internal
                              </label>
                           </div>
                        </div>

                        <!-- SOAL 4 -->
                        <div class="mb-4">
                           <h6>4. Fungsi sensor adalah?</h6>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q4" value="5">
                              <label class="form-check-label">
                                 Mengambil data dari lingkungan
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q4" value="0">
                              <label class="form-check-label">
                                 Menampilkan gambar
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q4" value="0">
                              <label class="form-check-label">
                                 Menyimpan file
                              </label>
                           </div>
                        </div>

                        <!-- SOAL 5 -->
                        <div class="mb-4">
                           <h6>5. Aktuator digunakan untuk?</h6>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q5" value="5">
                              <label class="form-check-label">
                                 Menjalankan aksi berdasarkan perintah
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q5" value="0">
                              <label class="form-check-label">
                                 Menyimpan data
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q5" value="0">
                              <label class="form-check-label">
                                 Menampilkan website
                              </label>
                           </div>
                        </div>

                        <!-- SOAL 6 -->
                        <div class="mb-4">
                           <h6>6. LED merupakan contoh?</h6>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q6" value="5">
                              <label class="form-check-label">
                                 Aktuator
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q6" value="0">
                              <label class="form-check-label">
                                 Sensor
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q6" value="0">
                              <label class="form-check-label">
                                 Database
                              </label>
                           </div>
                        </div>

                        <!-- SOAL 7 -->
                        <div class="mb-4">
                           <h6>7. Buzzer digunakan untuk menghasilkan?</h6>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q7" value="5">
                              <label class="form-check-label">
                                 Suara
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q7" value="0">
                              <label class="form-check-label">
                                 Cahaya
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q7" value="0">
                              <label class="form-check-label">
                                 Data
                              </label>
                           </div>
                        </div>

                        <!-- SOAL 8 -->
                        <div class="mb-4">
                           <h6>8. Sensor Ultrasonik digunakan untuk?</h6>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q8" value="5">
                              <label class="form-check-label">
                                 Mengukur jarak
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q8" value="0">
                              <label class="form-check-label">
                                 Mengukur suhu
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q8" value="0">
                              <label class="form-check-label">
                                 Mengukur kelembaban
                              </label>
                           </div>
                        </div>

                        <!-- SOAL 9 -->
                        <div class="mb-4">
                           <h6>9. Sensor LDR digunakan untuk mendeteksi?</h6>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q9" value="5">
                              <label class="form-check-label">
                                 Intensitas cahaya
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q9" value="0">
                              <label class="form-check-label">
                                 Jarak
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q9" value="0">
                              <label class="form-check-label">
                                 Suara
                              </label>
                           </div>
                        </div>

                        <!-- SOAL 10 -->
                        <div class="mb-4">
                           <h6>10. Sensor DHT11 digunakan untuk?</h6>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q10" value="5">
                              <label class="form-check-label">
                                 Mengukur suhu dan kelembaban
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q10" value="0">
                              <label class="form-check-label">
                                 Mengukur jarak
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q10" value="0">
                              <label class="form-check-label">
                                 Mengukur cahaya
                              </label>
                           </div>
                        </div>

                        <!-- SOAL 11 -->
                        <div class="mb-4">
                           <h6>11. Pin digital pada Arduino digunakan untuk?</h6>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q11" value="5">
                              <label class="form-check-label">
                                 Input dan output dengan nilai HIGH atau LOW
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q11" value="0">
                              <label class="form-check-label">
                                 Menyimpan program
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q11" value="0">
                              <label class="form-check-label">
                                 Menghubungkan internet
                              </label>
                           </div>
                        </div>

                        <!-- SOAL 12 -->
                        <div class="mb-4">
                           <h6>12. Pin analog pada Arduino digunakan untuk?</h6>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q12" value="5">
                              <label class="form-check-label">
                                 Membaca nilai sensor yang berubah-ubah
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q12" value="0">
                              <label class="form-check-label">
                                 Menyimpan file
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q12" value="0">
                              <label class="form-check-label">
                                 Menghubungkan WiFi
                              </label>
                           </div>
                        </div>

                        <!-- SOAL 13 -->
                        <div class="mb-4">
                           <h6>13. Fungsi Serial Monitor pada Arduino IDE adalah?</h6>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q13" value="5">
                              <label class="form-check-label">
                                 Menampilkan data hasil pembacaan program
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q13" value="0">
                              <label class="form-check-label">
                                 Membuat desain PCB
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q13" value="0">
                              <label class="form-check-label">
                                 Menjalankan browser
                              </label>
                           </div>
                        </div>

                        <!-- SOAL 14 -->
                        <div class="mb-4">
                           <h6>14. Fungsi setup() pada Arduino dijalankan?</h6>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q14" value="5">
                              <label class="form-check-label">
                                 Satu kali saat perangkat dinyalakan
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q14" value="0">
                              <label class="form-check-label">
                                 Terus menerus
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q14" value="0">
                              <label class="form-check-label">
                                 Saat internet aktif
                              </label>
                           </div>
                        </div>

                        <!-- SOAL 15 -->
                        <div class="mb-4">
                           <h6>15. Fungsi loop() pada Arduino dijalankan?</h6>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q15" value="5">
                              <label class="form-check-label">
                                 Berulang terus menerus selama perangkat aktif
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q15" value="0">
                              <label class="form-check-label">
                                 Satu kali saja
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q15" value="0">
                              <label class="form-check-label">
                                 Saat upload program
                              </label>
                           </div>
                        </div>

                        <!-- SOAL 16 -->
                        <div class="mb-4">
                           <h6>16. Perhatikan kode berikut:</h6>

                           <pre>
digitalWrite(2, HIGH);
</pre>

                           <p>Perintah tersebut digunakan untuk?</p>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q16" value="5">
                              <label class="form-check-label">
                                 Memberikan tegangan HIGH pada pin 2
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q16" value="0">
                              <label class="form-check-label">
                                 Membaca sensor
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q16" value="0">
                              <label class="form-check-label">
                                 Menghubungkan WiFi
                              </label>
                           </div>
                        </div>

                        <!-- SOAL 17 -->
                        <div class="mb-4">
                           <h6>17. Blynk digunakan untuk?</h6>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q17" value="5">
                              <label class="form-check-label">
                                 Monitoring dan kontrol perangkat IoT melalui smartphone
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q17" value="0">
                              <label class="form-check-label">
                                 Membuat game
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q17" value="0">
                              <label class="form-check-label">
                                 Membuat database
                              </label>
                           </div>
                        </div>

                        <!-- SOAL 18 -->
                        <div class="mb-4">
                           <h6>18. Pada Blynk, Virtual Pin digunakan untuk?</h6>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q18" value="5">
                              <label class="form-check-label">
                                 Mengirim dan menerima data antara perangkat dan aplikasi
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q18" value="0">
                              <label class="form-check-label">
                                 Menyimpan program Arduino
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q18" value="0">
                              <label class="form-check-label">
                                 Mengganti alamat IP
                              </label>
                           </div>
                        </div>

                        <!-- SOAL 19 -->
                        <div class="mb-4">
                           <h6>19. Salah satu manfaat dashboard monitoring IoT adalah?</h6>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q19" value="5">
                              <label class="form-check-label">
                                 Melihat data sensor secara realtime
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q19" value="0">
                              <label class="form-check-label">
                                 Menghapus program Arduino
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q19" value="0">
                              <label class="form-check-label">
                                 Mengganti sistem operasi
                              </label>
                           </div>
                        </div>

                        <!-- SOAL 20 -->
                        <div class="mb-4">
                           <h6>20. Pada proyek Smart Classroom, sensor suhu digunakan untuk?</h6>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q20" value="5">
                              <label class="form-check-label">
                                 Memantau kondisi suhu ruangan secara otomatis
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q20" value="0">
                              <label class="form-check-label">
                                 Mengukur kecepatan internet
                              </label>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="q20" value="0">
                              <label class="form-check-label">
                                 Mengontrol printer
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
      let totalQuestion = 20;

      for (let i = 1; i <= totalQuestion; i++) {

         if ($('input[name="q' + i + '"]:checked').length > 0) {
            totalAnswered++;
         }

      }

      $('#btnSubmit').prop(
         'disabled',
         totalAnswered !== totalQuestion
      );

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
         url: '../controller/posttest/storePosttest.php',
         type: 'POST',
         data: $(this).serialize(),
         dataType: 'json',

         beforeSend: function() {

            $('#btnSubmit')
               .prop('disabled', true)
               .html(
                  '<span class="spinner-border spinner-border-sm"></span> Menyimpan...'
               );

         },

         success: function(response) {

            if (response.status) {

               $('#hasilTest').html(`
               <div class="alert alert-success border-0 shadow-sm">

                  <h5 class="mb-3">
                     🎉 Hasil Post Test
                  </h5>

                  <p class="mb-2">
                     Nilai :
                     <strong>${response.score}</strong> / 100
                  </p>

                  <p class="mb-0">
                     Kategori :
                     <strong>${response.category}</strong>
                  </p>

               </div>
            `);

               $('#btnSubmit')
                  .prop('disabled', true)
                  .removeClass('btn-success')
                  .addClass('btn-secondary')
                  .html('✅ Post Test Selesai');

               $('input[type="radio"]')
                  .prop('disabled', true);

            } else {

               $('#btnSubmit')
                  .prop('disabled', false)
                  .html('💾 Simpan Jawaban');

               alert(response.message);

            }

         },

         error: function() {

            $('#btnSubmit')
               .prop('disabled', false)
               .html('💾 Simpan Jawaban');

            alert('Terjadi kesalahan pada server');

         }

      });

   });
</script>

</html>