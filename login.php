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


         <div class="form-group">
            <input type="text" class="form-control" placeholder="Username" required>
         </div>

         <div class="form-group">
            <input type="password" id="password" class="form-control" placeholder="Password" required>
            <span class="toggle-pass" onclick="togglePassword()">👁️</span>
         </div>

         <div class="extra">
            <label><input type="checkbox"> Remember me</label>
            <a href="forgot-password">Lupa Password?</a>
         </div>

         <button class="btn-login" id="btnLogin">Masuk</button>

         <!-- 🔥 INI YANG KAMU MAU -->
         <div class="back-landing">
            <a href="index" onclick="goLanding(event)">← Kembali Landing Page</a>
         </div>


      </form>

   </div>

   <script>
      function togglePassword() {
         const input = document.getElementById('password');
         input.type = input.type === 'password' ? 'text' : 'password';
      }

      function login(e) {
         e.preventDefault();

         const btn = document.getElementById('btnLogin');
         btn.innerText = "Loading...";
         btn.disabled = true;

         setTimeout(() => {
            window.location.href = "portal/dashboard";
         }, 1000);
      }

      /* 🔥 ANIMASI PINDAH HALAMAN */
      function goLanding(e) {
         e.preventDefault();
         document.body.style.opacity = 0;

         setTimeout(() => {
            window.location.href = "index";
         }, 400);
      }
   </script>

</body>

</html>