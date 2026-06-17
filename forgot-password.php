<!doctype html>

<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Reset Password - IoT Trainer</title>

   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

   <style>
      /* ================= GLOBAL ================= */
      body {
         margin: 0;
         font-family: "Poppins", sans-serif;
         background: #0f172a;
         color: #fff;
         display: flex;
         justify-content: center;
         align-items: center;
         min-height: 100vh;
         overflow: hidden;
      }

      /* ================= CARD ================= */
      .card {
         background: rgba(255, 255, 255, 0.05);
         backdrop-filter: blur(12px);
         padding: 40px;
         border-radius: 20px;
         width: 100%;
         max-width: 380px;
         box-shadow: 0 0 40px rgba(0, 0, 0, 0.5);
         animation: fadeIn 0.6s ease;
      }

      /* ================= ANIMATION ================= */
      @keyframes fadeIn {
         from {
            opacity: 0;
            transform: translateY(30px);
         }

         to {
            opacity: 1;
            transform: translateY(0);
         }
      }

      /* ================= TITLE ================= */
      .title {
         text-align: center;
         font-size: 22px;
         margin-bottom: 10px;
      }

      .subtitle {
         text-align: center;
         font-size: 12px;
         color: #94a3b8;
         margin-bottom: 25px;
         line-height: 1.5;
      }

      /* ================= INPUT ================= */
      .form-group {
         margin-bottom: 15px;
      }

      .form-control {
         width: 100%;
         padding: 12px;
         border-radius: 10px;
         border: none;
         outline: none;
         background: #020617;
         color: #fff;
         transition: 0.3s;
      }

      .form-control:focus {
         box-shadow: 0 0 12px #00f5a0;
      }

      /* ================= BUTTON ================= */
      .btn {
         width: 100%;
         padding: 12px;
         border: none;
         border-radius: 25px;
         background: linear-gradient(45deg, #00f5a0, #00d9f5);
         color: #000;
         cursor: pointer;
         transition: 0.3s;
         font-weight: bold;
      }

      .btn:hover {
         transform: scale(1.05);
      }

      /* ================= BACK LINK ================= */
      .back {
         text-align: center;
         margin-top: 15px;
         font-size: 12px;
      }

      .back a {
         color: #00f5a0;
         text-decoration: none;
      }

      /* ================= SUCCESS MESSAGE ================= */
      .success {
         display: none;
         text-align: center;
         font-size: 13px;
         margin-top: 15px;
         color: #00f5a0;
      }

      /* ================= BG ================= */
      .bg-glow,
      .bg-glow2 {
         position: fixed;
         width: 300px;
         height: 300px;
         filter: blur(120px);
         z-index: -1;
      }

      .bg-glow {
         background: linear-gradient(45deg, #ff00cc, #3333ff);
         top: -100px;
         left: -100px;
      }

      .bg-glow2 {
         background: linear-gradient(45deg, #00f5a0, #00d9f5);
         bottom: -100px;
         right: -100px;
      }

      /* ================= MOBILE ================= */
      @media(max-width:768px) {

         body {
            padding: 20px;
            align-items: flex-start;
         }

         .card {
            padding: 25px;
            margin-top: 40px;
         }

         .title {
            font-size: 18px;
         }

         .subtitle {
            font-size: 11px;
         }

      }

      #toast {
         position: fixed;
         top: 20px;
         right: 20px;
         min-width: 300px;
         max-width: 450px;
         padding: 15px 20px;
         border-radius: 12px;
         color: #fff;
         font-size: 14px;
         z-index: 99999;
         opacity: 0;
         transform: translateX(120%);
         transition: all .3s ease;
      }

      #toast.show {
         opacity: 1;
         transform: translateX(0);
      }

      .toast-success {
         background: #10b981;
      }

      .toast-error {
         background: #ef4444;
      }

      .toast-warning {
         background: #f59e0b;
      }
   </style>

</head>

<body>

   <div class="bg-glow"></div>
   <div class="bg-glow2"></div>

   <div class="card">

      <div class="title">🔐 Reset Password</div>

      <div class="subtitle">
         Masukkan email Anda yang terdaftar.
         Kami akan mengirimkan link untuk mengatur ulang password.
      </div>

      <form onsubmit="resetPassword(event)">


         <div class="form-group">
            <input type="email" id="email" class="form-control" placeholder="Email address" required>
         </div>

         <button class="btn" id="btnReset">Reset Password</button>


      </form>

      <div class="success" id="successMsg">
         ✅ Link reset password berhasil dikirim ke email Anda.
      </div>

      <div class="back">
         <a href="login">← Kembali ke Login</a>
      </div>

   </div>

   <div id="passwordModal" class="modal">

      <div class="modal-content">


         <h3>🔑 Password Baru</h3>

         <p>Password Anda berhasil direset.</p>

         <input
            type="text"
            id="newPassword"
            readonly>

         <button onclick="copyPassword()">
            📋 Copy Password
         </button>

         <button onclick="closeModal()">
            Tutup
         </button>


      </div>

   </div>

   <style>
      .modal {
         display: none;
         position: fixed;
         inset: 0;
         background: rgba(0, 0, 0, .8);
         z-index: 9999;
         justify-content: center;
         align-items: center;
      }

      .modal-content {
         background: #0f172a;
         padding: 25px;
         border-radius: 15px;
         width: 350px;
         text-align: center;
      }

      .modal-content input {
         width: 100%;
         padding: 10px;
         margin: 15px 0;
         border-radius: 10px;
         border: none;
         text-align: center;
         font-size: 16px;
      }

      .modal-content button {
         width: 100%;
         margin-top: 10px;
         padding: 10px;
         border: none;
         border-radius: 10px;
         cursor: pointer;
      }
   </style>
   <div id="toast"></div>

</body>

<script>
   function showToast(message, type = 'error') {
      const toast =
         document.getElementById('toast');

      toast.className = '';

      toast.classList.add(
         type === 'success' ?
         'toast-success' :
         type === 'warning' ?
         'toast-warning' :
         'toast-error'
      );

      toast.innerHTML = message;

      setTimeout(() => {
         toast.classList.add('show');
      }, 100);

      setTimeout(() => {
         toast.classList.remove('show');
      }, 3000);


   }

   async function resetPassword(e) {
      e.preventDefault();

      const email =
         document.getElementById('email').value;

      const btn =
         document.getElementById('btnReset');

      btn.innerHTML = 'Mengirim...';
      btn.disabled = true;

      const formData = new FormData();

      formData.append(
         'email',
         email
      );

      try {

         const response =
            await fetch(
               'controller/auth/reset-password.php', {
                  method: 'POST',
                  body: formData
               }
            );

         const result =
            await response.json();

         if (result.status) {

            showToast(
               '✅ Password berhasil direset',
               'success'
            );

            document.getElementById(
                  'newPassword'
               ).value =
               result.password;

            document.getElementById(
                  'passwordModal'
               ).style.display =
               'flex';

         } else {

            showToast(
               '❌ ' + result.message,
               'error'
            );

         }

      } catch (err) {

         showToast(
            '❌ Gagal terhubung ke server',
            'error'
         );

      }

      btn.innerHTML =
         'Reset Password';

      btn.disabled = false;


   }

   function copyPassword() {
      const password =
         document.getElementById(
            'newPassword'
         );


      password.select();

      navigator.clipboard.writeText(
         password.value
      );
      showToast(
         '✅ Password berhasil dicopy',
         'success'
      );


   }

   function closeModal() {
      document.getElementById(
            'passwordModal'
         ).style.display =
         'none';
   }
</script>



</html>