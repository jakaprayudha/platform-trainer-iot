<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <title>IoT Trainer Platform</title>

   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
   <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon.png">
   <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
   <link rel="apple-touch-icon" href="assets/images/favicon.png">
   <style>
      /* ================= GLOBAL ================= */
      body {
         margin: 0;
         font-family: "Poppins", sans-serif;
         background: #0f172a;
         color: #fff;
         padding-top: 80px;
      }

      /* ================= HEADER ================= */
      .header {
         position: fixed;
         top: 0;
         width: 100%;
         z-index: 999;
         transition: 0.3s;
      }

      .header.scrolled {
         background: rgba(2, 6, 23, 0.8);
         backdrop-filter: blur(10px);
         box-shadow: 0 5px 20px rgba(0, 0, 0, 0.4);
      }

      /* NAV */
      .nav {
         display: flex;
         justify-content: space-between;
         align-items: center;
         padding: 20px;
         position: relative;
      }

      .nav a {
         color: #fff;
         text-decoration: none;
         position: relative;
      }

      /* underline animasi */
      .nav a::after {
         content: "";
         position: absolute;
         width: 0%;
         height: 2px;
         background: #00f5a0;
         bottom: -5px;
         left: 0;
         transition: 0.3s;
      }

      .nav a:hover::after {
         width: 100%;
      }

      /* DESKTOP MENU */
      #menu {
         display: flex;
         gap: 20px;
      }

      /* HAMBURGER */
      .menu-toggle {
         display: none;
         font-size: 28px;
         cursor: pointer;
      }

      /* ================= HERO ================= */
      .hero {
         display: flex;
         justify-content: space-between;
         align-items: center;
         padding: 80px;
      }

      .hero h1 {
         font-size: 48px;
      }

      .hero button {
         padding: 12px 25px;
         border: none;
         background: linear-gradient(45deg, #ff00cc, #3333ff);
         color: #fff;
         border-radius: 30px;
         cursor: pointer;
      }

      /* VISUAL */
      .hero-visual {
         position: relative;
      }

      .circle {
         width: 250px;
         height: 250px;
         background: linear-gradient(45deg, #ff00cc, #3333ff);
         border-radius: 50%;
         filter: blur(40px);
      }

      .card-floating {
         position: absolute;
         background: #fff;
         color: #000;
         padding: 10px;
         border-radius: 10px;
         animation: float 3s infinite;
      }

      .card-floating.delay {
         top: 120px;
         left: 120px;
      }

      @keyframes float {

         0%,
         100% {
            transform: translateY(0);
         }

         50% {
            transform: translateY(-10px);
         }
      }

      /* ================= SECTION ================= */
      .section {
         padding: 60px;
         text-align: center;
      }

      .grid {
         display: grid;
         grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
         gap: 20px;
      }

      /* CARD */
      .card {
         padding: 20px;
         border-radius: 15px;
         transition: 0.3s;
      }

      .card.neon {
         background: #111;
         box-shadow: 0 0 20px rgba(255, 0, 200, 0.5);
      }

      .card.neon:hover {
         transform: scale(1.05);
      }

      .card.glass {
         background: rgba(255, 255, 255, 0.1);
         backdrop-filter: blur(10px);
      }

      .dark {
         background: #020617;
      }

      /* ================= STATS ================= */
      .stats {
         display: flex;
         justify-content: center;
         gap: 40px;
      }

      .stat {
         font-size: 24px;
      }

      /* ================= CTA ================= */
      .cta {
         text-align: center;
         padding: 50px;
      }

      .cta button {
         padding: 12px 25px;
         background: linear-gradient(45deg, #00f5a0, #00d9f5);
         border: none;
         border-radius: 25px;
      }

      /* ================= WA ================= */
      .wa {
         position: fixed;
         bottom: 20px;
         right: 20px;
         width: 60px;
         height: 60px;
         background: #25d366;
         border-radius: 50%;
         display: flex;
         align-items: center;
         justify-content: center;
      }

      /* ================= PAGE TRANSITION ================= */
      .transition-overlay {
         position: fixed;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         background: #0f172a;
         z-index: 9999;
         opacity: 0;
         pointer-events: none;
         transition: 0.5s ease;
      }

      .transition-overlay.active {
         opacity: 1;
         pointer-events: all;
      }

      /* efek zoom */
      body.fade-out {
         transform: scale(0.95);
         opacity: 0.5;
         transition: 0.4s;
      }

      /* ================= MOBILE ================= */
      @media (max-width: 768px) {

         /* show hamburger */
         .menu-toggle {
            display: block;
         }

         /* hide menu */
         #menu {
            position: absolute;
            top: 70px;
            right: 20px;
            background: #020617;
            padding: 15px;
            border-radius: 10px;
            display: none;
            flex-direction: column;
            min-width: 150px;

            opacity: 0;
            transform: translateY(-10px);
            transition: 0.3s;
         }

         #menu.active {
            display: flex;
            opacity: 1;
            transform: translateY(0);
         }

         #menu a {
            margin: 10px 0;
         }

         /* HERO */
         .hero {
            flex-direction: column;
            text-align: center;
            padding: 40px 20px;
         }

         .hero h1 {
            font-size: 32px;
         }

         .circle {
            width: 180px;
            height: 180px;
         }

         .grid {
            grid-template-columns: 1fr;
         }

         .stats {
            flex-direction: column;
            gap: 20px;
         }

      }
   </style>
</head>

<body>

   <header class="header">
      <div class="nav">
         <h2>🚀 IoT Trainer</h2>

         <div class="menu-toggle" onclick="toggleMenu()">☰</div>

         <div id="menu">
            <a href="#features">Fitur</a>
            <a href="#roles">Pengguna</a>
            <a href="#stats">Statistik</a>
            <a href="#" onclick="goLogin()">Masuk</a>
         </div>
      </div>
   </header>

   <section class="hero">
      <div>
         <h1>Belajar IoT Jadi Seru 🎮</h1>
         <p>Eksperimen langsung dengan device IoT secara real-time</p>
         <button onclick="scrollToSection('features')">Mulai 🚀</button>
      </div>

      <div class="hero-visual">
         <div class="circle"></div>
         <div class="card-floating">🌡️ 28°C</div>
         <div class="card-floating delay">💡 ON</div>
      </div>
   </section>

   <section id="features" class="section">
      <h2>✨ Fitur Keren</h2>
      <div class="grid">
         <div class="card neon">📡 Real-time</div>
         <div class="card neon">🎮 Control</div>
         <div class="card neon">🧪 Praktikum</div>
         <div class="card neon">📊 Dashboard</div>
      </div>
   </section>

   <section id="stats" class="section dark">
      <h2>📊 Impact</h2>
      <div class="stats">
         <div class="stat">500+ Siswa</div>
         <div class="stat">20 Sekolah</div>
         <div class="stat">1000+ Device</div>
      </div>
   </section>

   <section id="roles" class="section">
      <h2>👥 Pengguna</h2>
      <div class="grid">
         <div class="card glass">👨‍🎓 Siswa</div>
         <div class="card glass">👨‍🏫 Guru</div>
         <div class="card glass">🏛️ Dinas</div>
      </div>
   </section>

   <section class="cta">
      <h2>Siap Mulai? 🚀</h2>
      <button onclick="goLogin()">Gabung</button>
   </section>

   <a href="https://wa.me/62" class="wa">💬</a>

   <script>
      function toggleMenu() {
         document.getElementById('menu').classList.toggle('active');
      }

      function scrollToSection(id) {
         document.getElementById(id).scrollIntoView({
            behavior: 'smooth'
         });
      }

      window.addEventListener('scroll', function() {
         const header = document.querySelector('.header');
         if (window.scrollY > 50) {
            header.classList.add('scrolled');
         } else {
            header.classList.remove('scrolled');
         }
      });

      /* auto close */
      document.querySelectorAll('#menu a').forEach(link => {
         link.addEventListener('click', () => {
            document.getElementById('menu').classList.remove('active');
         });
      });

      function goLogin() {
         const overlay = document.getElementById('transition');

         // aktifkan animasi
         overlay.classList.add('active');
         document.body.classList.add('fade-out');

         // delay lalu redirect
         setTimeout(() => {
            window.location.href = "login"; // ganti sesuai path kamu
         }, 500);
      }
   </script>

   <div class="transition-overlay" id="transition"></div>
</body>

</html>