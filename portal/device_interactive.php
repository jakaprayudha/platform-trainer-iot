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
                     <h4 class="fw-bold mb-1">🧪 Interaksi Perangkat</h4>
                     <p class="text-muted mb-0">Monitoring aktivitas praktikum siswa</p>
                  </div>
               </div>

               <!-- CARD -->
               <div class="card shadow-sm border-0">
                  <div class="card-body">
                     <div class="row">

                        <!-- 🔌 DEVICE LIST -->
                        <div class="col-md-4">
                           <h6 class="fw-bold mb-3">🔌 Daftar Perangkat</h6>

                           <div class="list-group" id="deviceList">
                              <button class="list-group-item list-group-item-action active" onclick="selectDevice('Sensor 1')">
                                 Sensor 1 <span class="badge bg-success float-end">Online</span>
                              </button>
                              <button class="list-group-item list-group-item-action" onclick="selectDevice('Sensor 2')">
                                 Sensor 2 <span class="badge bg-danger float-end">Offline</span>
                              </button>
                           </div>
                        </div>

                        <!-- 📊 DEVICE DETAIL -->
                        <div class="col-md-8">

                           <!-- INFO -->
                           <div class="mb-3">
                              <h5 id="deviceName">Sensor 1</h5>
                              <small class="text-muted">Last update: <span id="lastUpdate">-</span></small>
                           </div>

                           <!-- TELEMETRY -->
                           <div class="card mb-3">
                              <div class="card-body">
                                 <h6 class="fw-bold">📊 Data Sensor</h6>

                                 <div class="row text-center">
                                    <div class="col">
                                       <h3 id="temp">--</h3>
                                       <small>Suhu (°C)</small>
                                    </div>
                                    <div class="col">
                                       <h3 id="humidity">--</h3>
                                       <small>Kelembapan (%)</small>
                                    </div>
                                 </div>

                                 <canvas id="chart" height="100"></canvas>
                              </div>
                           </div>

                           <!-- CONTROL -->
                           <div class="card mb-3">
                              <div class="card-body">
                                 <h6 class="fw-bold">🎮 Kontrol Perangkat</h6>

                                 <div class="d-flex gap-2">
                                    <button class="btn btn-success" onclick="sendCommand('ON')">ON</button>
                                    <button class="btn btn-secondary" onclick="sendCommand('OFF')">OFF</button>
                                    <button class="btn btn-danger" onclick="sendCommand('RESET')">RESET</button>
                                 </div>
                              </div>
                           </div>

                           <!-- LOG -->
                           <div class="card">
                              <div class="card-body">
                                 <h6 class="fw-bold">📜 Log Aktivitas</h6>
                                 <ul id="logList" class="small text-muted mb-0"></ul>
                              </div>
                           </div>

                        </div>

                     </div>
                  </div>
               </div>

            </div>
         </div>
      </div>
   </div>
   <?php require 'library.php'; ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
   // =======================
   // 🔥 DUMMY DEVICE DATA
   // =======================
   const devices = [{
         id: 1,
         name: "Sensor Suhu Lab",
         status: "online",
         baseTemp: 26,
         baseHum: 65
      },
      {
         id: 2,
         name: "Greenhouse Monitor",
         status: "online",
         baseTemp: 30,
         baseHum: 80
      },
      {
         id: 3,
         name: "Warehouse Sensor",
         status: "offline",
         baseTemp: 28,
         baseHum: 70
      }
   ];

   let currentDevice = devices[0];

   // =======================
   // 🔌 RENDER DEVICE LIST
   // =======================
   function renderDeviceList() {
      const container = document.getElementById('deviceList');
      container.innerHTML = '';

      devices.forEach((d, i) => {
         const btn = document.createElement('button');
         btn.className = "list-group-item list-group-item-action " + (i === 0 ? 'active' : '');
         btn.innerHTML = `
         ${d.name}
         <span class="badge ${d.status === 'online' ? 'bg-success' : 'bg-danger'} float-end">
            ${d.status}
         </span>
      `;
         btn.onclick = () => selectDevice(d, btn);
         container.appendChild(btn);
      });
   }

   // =======================
   // 📊 CHART INIT
   // =======================
   let chartData = {
      labels: [],
      datasets: [{
         label: 'Suhu',
         data: [],
         tension: 0.3
      }]
   };

   const ctx = document.getElementById('chart').getContext('2d');
   const chart = new Chart(ctx, {
      type: 'line',
      data: chartData
   });

   // =======================
   // 🔄 SELECT DEVICE
   // =======================
   function selectDevice(device, element) {
      currentDevice = device;

      // update UI active
      document.querySelectorAll('#deviceList button').forEach(btn => btn.classList.remove('active'));
      element.classList.add('active');

      document.getElementById('deviceName').innerText = device.name;

      // reset chart
      chartData.labels = [];
      chartData.datasets[0].data = [];
      chart.update();

      addLog("Switch ke device: " + device.name);
   }

   // =======================
   // 🔁 SIMULASI REALTIME
   // =======================
   setInterval(() => {

      if (currentDevice.status === "offline") {
         document.getElementById('temp').innerText = "--";
         document.getElementById('humidity').innerText = "--";
         document.getElementById('lastUpdate').innerText = "Offline";
         return;
      }

      let temp = (currentDevice.baseTemp + Math.random() * 2).toFixed(1);
      let hum = (currentDevice.baseHum + Math.random() * 5).toFixed(1);

      document.getElementById('temp').innerText = temp;
      document.getElementById('humidity').innerText = hum;
      document.getElementById('lastUpdate').innerText = new Date().toLocaleTimeString();

      // chart update
      if (chartData.labels.length > 10) {
         chartData.labels.shift();
         chartData.datasets[0].data.shift();
      }

      chartData.labels.push('');
      chartData.datasets[0].data.push(temp);
      chart.update();

   }, 2000);

   // =======================
   // 🎮 COMMAND SIMULATION
   // =======================
   function sendCommand(cmd) {

      if (currentDevice.status === "offline") {
         addLog("❌ Device offline, command gagal");
         return;
      }

      addLog("➡️ Command " + cmd + " ke " + currentDevice.name);

      setTimeout(() => {
         addLog("✅ Response OK (" + cmd + ")");
      }, 800);
   }

   // =======================
   // 🧾 LOG SYSTEM
   // =======================
   function addLog(msg) {
      const log = document.getElementById('logList');
      const li = document.createElement('li');

      li.innerText = new Date().toLocaleTimeString() + " - " + msg;

      log.prepend(li);

      if (log.children.length > 12) {
         log.removeChild(log.lastChild);
      }
   }

   // =======================
   // 🚀 INIT
   // =======================
   renderDeviceList();
</script>

</html>