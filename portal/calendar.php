<!doctype html>
<html lang="en">

<head>
   <?php require 'partial-head.php' ?>

   <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.css" rel="stylesheet">

   <style>
      .event-banner {
         background: linear-gradient(135deg, #1e293b, #2563eb);
         border-radius: 24px;
         overflow: hidden;
         position: relative;
      }

      .event-banner::before {
         content: "";
         position: absolute;
         width: 380px;
         height: 380px;
         background: rgba(255, 255, 255, .05);
         border-radius: 50%;
         top: -150px;
         right: -150px;
      }

      .event-banner::after {
         content: "";
         position: absolute;
         width: 260px;
         height: 260px;
         background: rgba(255, 255, 255, .05);
         border-radius: 50%;
         bottom: -100px;
         left: -100px;
      }

      .banner-content {
         position: relative;
         z-index: 2;
      }

      .dashboard-card {
         border-radius: 22px;
         border: 0;
         transition: .3s;
      }

      .dashboard-card:hover {
         transform: translateY(-4px);
      }

      .metric-icon {
         width: 60px;
         height: 60px;
         border-radius: 18px;
         display: flex;
         align-items: center;
         justify-content: center;
         font-size: 24px;
      }

      .soft-primary {
         background: rgba(37, 99, 235, .1);
         color: #2563eb;
      }

      .soft-success {
         background: rgba(16, 185, 129, .1);
         color: #10b981;
      }

      .soft-warning {
         background: rgba(245, 158, 11, .1);
         color: #f59e0b;
      }

      .soft-danger {
         background: rgba(239, 68, 68, .1);
         color: #ef4444;
      }

      .calendar-card {
         border-radius: 24px;
         border: 0;
      }

      .event-item {
         border-radius: 18px;
         transition: .3s;
      }

      .event-item:hover {
         transform: translateY(-3px);
      }

      .event-dot {
         width: 14px;
         height: 14px;
         border-radius: 50%;
      }

      .fc .fc-toolbar-title {
         font-size: 22px;
         font-weight: 700;
      }

      .fc .fc-button {
         background: #2563eb !important;
         border: none !important;
         box-shadow: none !important;
      }

      .fc .fc-daygrid-event {
         border: none;
         border-radius: 10px;
         padding: 4px 8px;
      }

      .fc-theme-standard td,
      .fc-theme-standard th {
         border-color: #eef2ff;
      }

      #calendar {
         min-height: 750px;
      }
   </style>

</head>

<body>

   <div class="page-wrapper"
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin6"
      data-sidebartype="full"
      data-sidebar-position="fixed"
      data-header-position="fixed">

      <?php require 'partial-topstrip.php' ?>

      <aside class="left-sidebar">
         <?php require 'partial-sidebar.php' ?>
      </aside>

      <div class="body-wrapper">

         <?php require 'partial-header.php' ?>

         <div class="body-wrapper-inner">

            <div class="container-fluid">

               <!-- HEADER -->
               <div class="d-flex justify-content-between align-items-center mb-4">

                  <div>

                     <h4 class="fw-bold mb-1">
                        📅 Calendar Event Platform IoT
                     </h4>

                     <p class="text-muted mb-0">
                        Jadwal training, workshop, monitoring sekolah dan event platform
                     </p>

                  </div>

                  <div class="d-flex gap-2">

                     <button class="btn btn-light">

                        <i class="ti ti-download"></i>
                        Export Event

                     </button>

                     <button class="btn btn-primary"
                        data-bs-toggle="modal"
                        data-bs-target="#modalTambahEvent">

                        <i class="ti ti-plus"></i>
                        Tambah Event

                     </button>

                  </div>

               </div>

               <!-- BANNER -->
               <div class="card shadow-sm border-0 mb-4">

                  <div class="card-body event-banner p-5 text-white">

                     <div class="banner-content">

                        <div class="row align-items-center">

                           <div class="col-lg-8">

                              <div class="d-flex gap-2 mb-3">

                                 <span class="badge bg-success">
                                    Live Schedule
                                 </span>

                                 <span class="badge bg-light text-dark">
                                    Training Management
                                 </span>

                              </div>

                              <h2 class="fw-bold text-white mb-3">
                                 Event & Training Calendar System
                              </h2>

                              <p class="mb-4"
                                 style="max-width:720px;">

                                 Monitoring jadwal training, workshop IoT,
                                 kunjungan sekolah, webinar instruktur,
                                 dan aktivitas implementasi trainer kit.

                              </p>

                              <div class="d-flex flex-wrap gap-5">

                                 <div>

                                    <small>Total Event</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       124
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Workshop</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       42
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Sekolah Aktif</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       118
                                    </h3>

                                 </div>

                                 <div>

                                    <small>Instruktur</small>

                                    <h3 class="fw-bold mb-0 text-white">
                                       48
                                    </h3>

                                 </div>

                              </div>

                           </div>

                           <div class="col-lg-4 text-center">

                              <i class="ti ti-calendar-event"
                                 style="font-size:180px; opacity:.12;">
                              </i>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>

               <!-- METRIC -->
               <div class="row mb-4">

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="card dashboard-card shadow-sm">

                        <div class="card-body">

                           <div class="d-flex justify-content-between">

                              <div>

                                 <small class="text-muted">
                                    Event Hari Ini
                                 </small>

                                 <h2 class="fw-bold mt-2">
                                    12
                                 </h2>

                                 <span class="text-success fw-semibold">
                                    Active
                                 </span>

                              </div>

                              <div class="metric-icon soft-primary">
                                 <i class="ti ti-calendar"></i>
                              </div>

                           </div>

                        </div>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="card dashboard-card shadow-sm">

                        <div class="card-body">

                           <div class="d-flex justify-content-between">

                              <div>

                                 <small class="text-muted">
                                    Workshop
                                 </small>

                                 <h2 class="fw-bold mt-2">
                                    42
                                 </h2>

                                 <span class="text-primary fw-semibold">
                                    Training
                                 </span>

                              </div>

                              <div class="metric-icon soft-success">
                                 <i class="ti ti-school"></i>
                              </div>

                           </div>

                        </div>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="card dashboard-card shadow-sm">

                        <div class="card-body">

                           <div class="d-flex justify-content-between">

                              <div>

                                 <small class="text-muted">
                                    Webinar
                                 </small>

                                 <h2 class="fw-bold mt-2">
                                    18
                                 </h2>

                                 <span class="text-warning fw-semibold">
                                    Online
                                 </span>

                              </div>

                              <div class="metric-icon soft-warning">
                                 <i class="ti ti-video"></i>
                              </div>

                           </div>

                        </div>

                     </div>

                  </div>

                  <div class="col-lg-3 col-md-6 mb-3">

                     <div class="card dashboard-card shadow-sm">

                        <div class="card-body">

                           <div class="d-flex justify-content-between">

                              <div>

                                 <small class="text-muted">
                                    Monitoring
                                 </small>

                                 <h2 class="fw-bold mt-2">
                                    8
                                 </h2>

                                 <span class="text-danger fw-semibold">
                                    Need Review
                                 </span>

                              </div>

                              <div class="metric-icon soft-danger">
                                 <i class="ti ti-alert-circle"></i>
                              </div>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>

               <div class="row">

                  <!-- CALENDAR -->
                  <div class="col-lg-8">

                     <div class="card shadow-sm border-0 calendar-card">

                        <div class="card-body">

                           <div id="calendar"></div>

                        </div>

                     </div>

                  </div>

                  <!-- RIGHT -->
                  <div class="col-lg-4">

                     <!-- UPCOMING -->
                     <div class="card shadow-sm border-0 mb-4">

                        <div class="card-body">

                           <div class="d-flex justify-content-between align-items-center mb-4">

                              <div>

                                 <h5 class="fw-bold mb-1">
                                    🚀 Upcoming Event
                                 </h5>

                                 <small class="text-muted">
                                    Event terdekat platform
                                 </small>

                              </div>

                           </div>

                           <!-- ITEM -->
                           <div class="event-item bg-light p-3 mb-3">

                              <div class="d-flex justify-content-between mb-3">

                                 <div class="d-flex align-items-center gap-2">

                                    <div class="event-dot bg-primary"></div>

                                    <span class="fw-semibold">
                                       Workshop ESP32
                                    </span>

                                 </div>

                                 <span class="badge bg-primary">
                                    Workshop
                                 </span>

                              </div>

                              <small class="text-muted d-block mb-2">
                                 SMKN 1 Medan
                              </small>

                              <small class="text-primary">
                                 20 Mei 2026 • 09:00 WIB
                              </small>

                           </div>

                           <!-- ITEM -->
                           <div class="event-item bg-light p-3 mb-3">

                              <div class="d-flex justify-content-between mb-3">

                                 <div class="d-flex align-items-center gap-2">

                                    <div class="event-dot bg-success"></div>

                                    <span class="fw-semibold">
                                       Webinar MQTT
                                    </span>

                                 </div>

                                 <span class="badge bg-success">
                                    Webinar
                                 </span>

                              </div>

                              <small class="text-muted d-block mb-2">
                                 Online Meeting
                              </small>

                              <small class="text-success">
                                 22 Mei 2026 • 13:00 WIB
                              </small>

                           </div>

                           <!-- ITEM -->
                           <div class="event-item bg-light p-3">

                              <div class="d-flex justify-content-between mb-3">

                                 <div class="d-flex align-items-center gap-2">

                                    <div class="event-dot bg-warning"></div>

                                    <span class="fw-semibold">
                                       Monitoring Sekolah
                                    </span>

                                 </div>

                                 <span class="badge bg-warning text-dark">
                                    Monitoring
                                 </span>

                              </div>

                              <small class="text-muted d-block mb-2">
                                 SMKN 5 Binjai
                              </small>

                              <small class="text-warning">
                                 25 Mei 2026 • 10:00 WIB
                              </small>

                           </div>

                        </div>

                     </div>

                     <!-- LEGEND -->
                     <div class="card shadow-sm border-0 mb-4">

                        <div class="card-body">

                           <h5 class="fw-bold mb-4">
                              🎨 Kategori Event
                           </h5>

                           <div class="d-flex align-items-center gap-3 mb-3">

                              <div class="event-dot bg-primary"></div>

                              <div>

                                 <div class="fw-semibold">
                                    Workshop
                                 </div>

                                 <small class="text-muted">
                                    Training offline sekolah
                                 </small>

                              </div>

                           </div>

                           <div class="d-flex align-items-center gap-3 mb-3">

                              <div class="event-dot bg-success"></div>

                              <div>

                                 <div class="fw-semibold">
                                    Webinar
                                 </div>

                                 <small class="text-muted">
                                    Training online
                                 </small>

                              </div>

                           </div>

                           <div class="d-flex align-items-center gap-3 mb-3">

                              <div class="event-dot bg-warning"></div>

                              <div>

                                 <div class="fw-semibold">
                                    Monitoring
                                 </div>

                                 <small class="text-muted">
                                    Kunjungan sekolah
                                 </small>

                              </div>

                           </div>

                           <div class="d-flex align-items-center gap-3">

                              <div class="event-dot bg-danger"></div>

                              <div>

                                 <div class="fw-semibold">
                                    Maintenance
                                 </div>

                                 <small class="text-muted">
                                    Maintenance platform
                                 </small>

                              </div>

                           </div>

                        </div>

                     </div>

                     <!-- QUICK INFO -->
                     <div class="card shadow-sm border-0">

                        <div class="card-body">

                           <h5 class="fw-bold mb-4">
                              📌 Quick Information
                           </h5>

                           <div class="alert alert-primary border-0">

                              <div class="fw-semibold mb-1">
                                 Event Terbanyak
                              </div>

                              <small>
                                 Workshop ESP32 mendominasi training bulan ini.
                              </small>

                           </div>

                           <div class="alert alert-success border-0">

                              <div class="fw-semibold mb-1">
                                 Instruktur Aktif
                              </div>

                              <small>
                                 48 instruktur aktif dalam jadwal training.
                              </small>

                           </div>

                           <div class="alert alert-warning border-0 mb-0">

                              <div class="fw-semibold mb-1">
                                 Reminder Event
                              </div>

                              <small>
                                 Pastikan trainer kit siap sebelum workshop dimulai.
                              </small>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>

            </div>

         </div>

      </div>

   </div>

   <!-- MODAL -->
   <div class="modal fade"
      id="modalTambahEvent"
      tabindex="-1">

      <div class="modal-dialog modal-lg modal-dialog-centered">

         <div class="modal-content border-0 shadow">

            <div class="modal-header">

               <h5 class="modal-title">
                  ➕ Tambah Event
               </h5>

               <button type="button"
                  class="btn-close"
                  data-bs-dismiss="modal">
               </button>

            </div>

            <form>

               <div class="modal-body">

                  <div class="row">

                     <div class="col-md-6 mb-3">

                        <label class="form-label">
                           Nama Event
                        </label>

                        <input type="text"
                           class="form-control">

                     </div>

                     <div class="col-md-6 mb-3">

                        <label class="form-label">
                           Kategori Event
                        </label>

                        <select class="form-select">

                           <option>
                              Workshop
                           </option>

                           <option>
                              Webinar
                           </option>

                           <option>
                              Monitoring
                           </option>

                           <option>
                              Maintenance
                           </option>

                        </select>

                     </div>

                     <div class="col-md-6 mb-3">

                        <label class="form-label">
                           Tanggal Event
                        </label>

                        <input type="date"
                           class="form-control">

                     </div>

                     <div class="col-md-6 mb-3">

                        <label class="form-label">
                           Jam Event
                        </label>

                        <input type="time"
                           class="form-control">

                     </div>

                     <div class="col-md-6 mb-3">

                        <label class="form-label">
                           Sekolah / Lokasi
                        </label>

                        <input type="text"
                           class="form-control">

                     </div>

                     <div class="col-md-6 mb-3">

                        <label class="form-label">
                           Instruktur
                        </label>

                        <select class="form-select">

                           <option>
                              Budi Santoso
                           </option>

                           <option>
                              Andi Rahman
                           </option>

                        </select>

                     </div>

                     <div class="col-md-12 mb-3">

                        <label class="form-label">
                           Deskripsi Event
                        </label>

                        <textarea class="form-control"
                           rows="4"></textarea>

                     </div>

                  </div>

               </div>

               <div class="modal-footer">

                  <button type="button"
                     class="btn btn-light"
                     data-bs-dismiss="modal">

                     Batal

                  </button>

                  <button type="submit"
                     class="btn btn-primary">

                     💾 Simpan Event

                  </button>

               </div>

            </form>

         </div>

      </div>

   </div>

   <?php require 'library.php'; ?>

   <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js"></script>

   <script>
      document.addEventListener('DOMContentLoaded', function() {

         var calendarEl = document.getElementById('calendar');

         var calendar = new FullCalendar.Calendar(calendarEl, {

            initialView: 'dayGridMonth',

            height: 'auto',

            headerToolbar: {
               left: 'prev,next today',
               center: 'title',
               right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },

            events: [

               {
                  title: 'Workshop ESP32',
                  start: '2026-05-20',
                  color: '#2563eb'
               },

               {
                  title: 'Webinar MQTT',
                  start: '2026-05-22',
                  color: '#10b981'
               },

               {
                  title: 'Monitoring Sekolah',
                  start: '2026-05-25',
                  color: '#f59e0b'
               },

               {
                  title: 'Maintenance Server',
                  start: '2026-05-28',
                  color: '#ef4444'
               }

            ]

         });

         calendar.render();

      });
   </script>

</body>

</html>