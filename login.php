<!doctype html>

<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Login - IoT Trainer</title>

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
      .login-card {
         background: rgba(255, 255, 255, 0.05);
         backdrop-filter: blur(12px);
         padding: 40px;
         border-radius: 20px;
         width: 100%;
         max-width: 380px;
         box-shadow: 0 0 40px rgba(0, 0, 0, 0.5);
         animation: fadeIn .6s ease;
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
      }

      /* ================= INPUT ================= */
      .form-group {
         margin-bottom: 15px;
         position: relative;
      }

      .form-control {
         width: 100%;
         padding: 12px;
         border-radius: 10px;
         border: none;
         outline: none;
         background: #020617;
         color: #fff;
      }

      .form-control:focus {
         box-shadow: 0 0 12px #00f5a0;
      }

      /* ================= PASSWORD ICON ================= */
      .toggle-pass {
         position: absolute;
         right: 10px;
         top: 50%;
         transform: translateY(-50%);
         cursor: pointer;
      }

      /* ================= BUTTON ================= */
      .btn-login {
         width: 100%;
         padding: 12px;
         border: none;
         border-radius: 25px;
         background: linear-gradient(45deg, #ff00cc, #3333ff);
         color: #fff;
         cursor: pointer;
         transition: .3s;
      }

      .btn-login:hover {
         transform: scale(1.05);
      }

      /* ================= EXTRA ================= */
      .extra {
         display: flex;
         justify-content: space-between;
         font-size: 12px;
         margin-bottom: 15px;
      }

      /* ================= BACK LANDING 🔥 ================= */
      .back-landing {
         text-align: center;
         margin-top: 15px;
      }

      .back-landing a {
         font-size: 13px;
         color: #00f5a0;
         text-decoration: none;
         transition: .3s;
      }

      .back-landing a:hover {
         transform: translateX(-5px);
         display: inline-block;
      }

      /* ================= BG ================= */
      .bg-glow,
      .bg-glow2 {
         position: fixed;
         width: 300px;
         height: 300px;
         filter: blur(120px);
         z-index: -1;
         animation: moveGlow 10s infinite alternate;
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

      @keyframes moveGlow {
         from {
            transform: translate(0, 0);
         }

         to {
            transform: translate(60px, 60px);
         }
      }

      /* ================= MOBILE ================= */
      @media(max-width:768px) {

         body {
            padding: 20px;
            align-items: flex-start;
         }

         .login-card {
            padding: 25px;
            margin-top: 40px;
         }

      }

      #toast {
         position: fixed;
         top: 20px;
         right: 20px;
         min-width: 280px;
         max-width: 400px;
         padding: 14px 18px;
         border-radius: 12px;
         color: #fff;
         font-size: 14px;
         font-weight: 500;
         z-index: 99999;
         opacity: 0;
         transform: translateX(100%);
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

   <div class="login-card">

      <div class="title">🚀 IoT Trainer</div>

      <div class="subtitle">
         Platform pembelajaran IoT interaktif untuk siswa, guru,
         dan monitoring terpusat oleh institusi pendidikan.
      </div>

      <form onsubmit="login(event)">

         <input type="hidden" id="latitude">
         <input type="hidden" id="longitude">
         <form onsubmit="login(event)">

            <input type="hidden" id="latitude">
            <input type="hidden" id="longitude">

            <input type="hidden" id="browser">
            <input type="hidden" id="os">
            <input type="hidden" id="screen_width">
            <input type="hidden" id="screen_height">
            <input type="hidden" id="timezone">

            <div class="form-group">
               <input
                  type="text"
                  id="username"
                  name="username"
                  class="form-control"
                  placeholder="Username"
                  autocomplete="username"
                  required>
            </div>

            <div class="form-group">
               <input
                  type="password"
                  id="password"
                  name="password"
                  class="form-control"
                  placeholder="Password"
                  autocomplete="current-password"
                  required>

               <span
                  class="toggle-pass"
                  onclick="togglePassword()">
                  👁️
               </span>
            </div>

            <div class="extra">
               <label>
                  <input type="checkbox" id="remember">
                  Remember me
               </label>

               <a href="forgot-password">
                  Lupa Password?
               </a>
            </div>

            <button
               type="submit"
               class="btn-login"
               id="btnLogin">
               Masuk
            </button>

            <div class="back-landing">
               <a href="index" onclick="goLanding(event)">
                  ← Kembali Landing Page
               </a>
            </div>


         </form>


      </form>

   </div>


   <div id="toast"></div>
</body>
<script>
   document.addEventListener('DOMContentLoaded', () => {



      document.getElementById('browser').value =

         navigator.userAgent;



      document.getElementById('screen_width').value =

         window.screen.width;



      document.getElementById('screen_height').value =

         window.screen.height;



      document.getElementById('timezone').value =

         Intl.DateTimeFormat().resolvedOptions().timeZone;



      if (navigator.geolocation) {



         navigator.geolocation.getCurrentPosition(

            function(position) {



               document.getElementById('latitude').value =

                  position.coords.latitude;



               document.getElementById('longitude').value =

                  position.coords.longitude;



            },

            function() {

               console.log('Lokasi tidak diizinkan');

            }

         );



      }



   });



   function togglePassword() {



      const input =

         document.getElementById('password');



      input.type =

         input.type === 'password'

         ?
         'text'

         :
         'password';



   }



   function goLanding(e) {



      e.preventDefault();



      document.body.style.opacity = 0;



      setTimeout(() => {



         window.location.href = 'index';



      }, 400);



   }



   function showToast(message, type = 'error') {



      const toast =

         document.getElementById('toast');



      toast.className = '';



      toast.classList.add(

         type === 'success'

         ?
         'toast-success'

         :
         type === 'warning'

         ?
         'toast-warning'

         :
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



   async function login(e) {



      e.preventDefault();



      const btn =

         document.getElementById('btnLogin');



      const username =

         document.getElementById('username').value.trim();



      const password =

         document.getElementById('password').value.trim();



      if (username === '') {



         showToast(

            '❌ Username wajib diisi'

         );



         return;

      }



      if (password === '') {



         showToast(

            '❌ Password wajib diisi'

         );



         return;

      }



      btn.innerHTML = 'Loading...';

      btn.disabled = true;



      try {



         const formData = new FormData();



         formData.append(

            'username',

            username

         );



         formData.append(

            'password',

            password

         );



         formData.append(

            'latitude',

            document.getElementById('latitude').value

         );



         formData.append(

            'longitude',

            document.getElementById('longitude').value

         );



         formData.append(

            'browser',

            document.getElementById('browser').value

         );



         formData.append(

            'screen_width',

            document.getElementById('screen_width').value

         );



         formData.append(

            'screen_height',

            document.getElementById('screen_height').value

         );



         formData.append(

            'timezone',

            document.getElementById('timezone').value

         );



         const response =

            await fetch(

               'controller/auth/login.php',

               {

                  method: 'POST',

                  body: formData

               }

            );



         const result =

            await response.json();



         if (result.status) {



            showToast(

               '✅ Login berhasil',

               'success'

            );



            setTimeout(() => {



               window.location.href =

                  result.redirect;



            }, 1000);



         } else {



            showToast(

               '❌ ' + result.message,

               'error'

            );



            btn.innerHTML = 'Masuk';

            btn.disabled = false;



         }



      } catch (error) {



         console.error(error);



         showToast(

            '❌ Gagal terhubung ke server',

            'error'

         );



         btn.innerHTML = 'Masuk';

         btn.disabled = false;



      }



   }
</script>

</html>