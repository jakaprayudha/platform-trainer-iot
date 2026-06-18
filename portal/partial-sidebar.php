<?php

$fullname = $_SESSION['fullname'] ?? '';
$role     = $_SESSION['role'] ?? '';
?>
<div>
   <!-- <div class="brand-logo d-flex align-items-center justify-content-between">
      <a href="./index.html" class="text-nowrap logo-img">
         <img src="../assets/images/logos/logo_platform_iot.png" width="100" alt="" />
      </a>
      <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
         <i class="ti ti-x fs-8"></i>
      </div>
   </div> -->
   <!-- Sidebar navigation-->
   <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
      <ul id="sidebarnav">
         <?php
         if ($role == "guru" or $role = "superadmin") {
            require 'menu-guru.php';
         } else if ($role == "siswa" or $role = "superadmin") {
            require 'menu-siswa.php';
         } else if ($role == "admin" or $role = "superadmin") {
            require 'menu-governance.php';
         }
         ?>
         <li class="nav-small-cap">
            <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
            <span class="hide-menu">Trainer Kit</span>
         </li>
         <li class="sidebar-item">
            <a class="sidebar-link justify-content-between"
               href="trainer_kit_v1"
               aria-expanded="false">
               <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                     <iconify-icon icon="solar:settings-line-duotone" class=""></iconify-icon>
                  </span>
                  <span class="hide-menu">Trainer Kit V1</span>
               </div>
               <span class="hide-menu badge bg-success-subtle text-success fs-1 py-1">Used</span>
            </a>
         </li>
         <li class="sidebar-item">
            <a class="sidebar-link justify-content-between"
               href="kartu_garansi"
               aria-expanded="false">
               <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                     <iconify-icon icon="solar:folder-line-duotone" class=""></iconify-icon>
                  </span>
                  <span class="hide-menu">Kartu Garansi</span>
               </div>
            </a>
         </li>
         <li class="sidebar-item">
            <a class="sidebar-link justify-content-between"
               href="berita_acara"
               aria-expanded="false">
               <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                     <iconify-icon icon="solar:file-line-duotone" class=""></iconify-icon>
                  </span>
                  <span class="hide-menu">Berita Acara</span>
               </div>
            </a>
         </li>
         <li class="sidebar-item">
            <a class="sidebar-link justify-content-between has-arrow" href="javascript:void(0)" aria-expanded="false">
               <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                     <iconify-icon icon="solar:cardholder-line-duotone"></iconify-icon>
                  </span>
                  <span class="hide-menu">Component</span>
               </div>

            </a>
            <ul aria-expanded="false" class="collapse first-level">
               <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"
                     href="comp_arduino_nano">
                     <div class="d-flex align-items-center gap-3">
                        <span class="d-flex">
                           <span class="icon-small"></span>
                        </span>
                        <span class="hide-menu">Arduino Nano</span>
                     </div>
                     <!-- <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span> -->
                  </a>
               </li>
               <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"
                     href="comp_esp8266">
                     <div class="d-flex align-items-center gap-3">
                        <span class="d-flex">
                           <span class="icon-small"></span>
                        </span>
                        <span class="hide-menu">ESP8266</span>
                     </div>
                     <!-- <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span> -->
                  </a>
               </li>
               <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"
                     href="comp_lcd">
                     <div class="d-flex align-items-center gap-3">
                        <span class="d-flex">
                           <span class="icon-small"></span>
                        </span>
                        <span class="hide-menu">LCD Display</span>
                     </div>
                     <!-- <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span> -->
                  </a>
               </li>
               <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"
                     href="comp_servo">
                     <div class="d-flex align-items-center gap-3">
                        <span class="d-flex">
                           <span class="icon-small"></span>
                        </span>
                        <span class="hide-menu">Motor Servo</span>
                     </div>
                     <!-- <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span> -->
                  </a>
               </li>
               <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"
                     href="comp_push_button">
                     <div class="d-flex align-items-center gap-3">
                        <span class="d-flex">
                           <span class="icon-small"></span>
                        </span>
                        <span class="hide-menu">Push Button</span>
                     </div>
                     <!-- <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span> -->
                  </a>
               </li>
               <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"
                     href="comp_relay_4channel">
                     <div class="d-flex align-items-center gap-3">
                        <span class="d-flex">
                           <span class="icon-small"></span>
                        </span>
                        <span class="hide-menu">Relay 4 Channel</span>
                     </div>
                     <!-- <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span> -->
                  </a>
               </li>
               <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"
                     href="comp_mq_5">
                     <div class="d-flex align-items-center gap-3">
                        <span class="d-flex">
                           <span class="icon-small"></span>
                        </span>
                        <span class="hide-menu">Sensor MQ-5</span>
                     </div>
                     <!-- <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span> -->
                  </a>
               </li>
               <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"
                     href="comp_fire">
                     <div class="d-flex align-items-center gap-3">
                        <span class="d-flex">
                           <span class="icon-small"></span>
                        </span>
                        <span class="hide-menu">Sensor Api</span>
                     </div>
                     <!-- <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span> -->
                  </a>
               </li>
               <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"
                     href="comp_ultrasonic">
                     <div class="d-flex align-items-center gap-3">
                        <span class="d-flex">
                           <span class="icon-small"></span>
                        </span>
                        <span class="hide-menu">Sensor Ultrasonik</span>
                     </div>
                     <!-- <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span> -->
                  </a>
               </li>
               <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"
                     href="comp_infrared">
                     <div class="d-flex align-items-center gap-3">
                        <span class="d-flex">
                           <span class="icon-small"></span>
                        </span>
                        <span class="hide-menu">Sensor Infrared</span>
                     </div>
                     <!-- <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span> -->
                  </a>
               </li>
               <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"
                     href="comp_ldr">
                     <div class="d-flex align-items-center gap-3">
                        <span class="d-flex">
                           <span class="icon-small"></span>
                        </span>
                        <span class="hide-menu">Sensor LDR</span>
                     </div>
                     <!-- <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span> -->
                  </a>
               </li>
               <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"
                     href="comp_sw40">
                     <div class="d-flex align-items-center gap-3">
                        <span class="d-flex">
                           <span class="icon-small"></span>
                        </span>
                        <span class="hide-menu">Sensor Getar SW-420</span>
                     </div>
                     <!-- <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span> -->
                  </a>
               </li>
               <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"
                     href="comp_dht11">
                     <div class="d-flex align-items-center gap-3">
                        <span class="d-flex">
                           <span class="icon-small"></span>
                        </span>
                        <span class="hide-menu">Sensor DHT 11</span>
                     </div>
                     <!-- <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span> -->
                  </a>
               </li>
               <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"
                     href="comp_led5mm">
                     <div class="d-flex align-items-center gap-3">
                        <span class="d-flex">
                           <span class="icon-small"></span>
                        </span>
                        <span class="hide-menu">LED 5mm</span>
                     </div>
                     <!-- <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span> -->
                  </a>
               </li>
               <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"
                     href="comp_ledrgb">
                     <div class="d-flex align-items-center gap-3">
                        <span class="d-flex">
                           <span class="icon-small"></span>
                        </span>
                        <span class="hide-menu">LED RGB</span>
                     </div>
                     <!-- <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span> -->
                  </a>
               </li>
               <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"
                     href="comp_led_matrix_8">
                     <div class="d-flex align-items-center gap-3">
                        <span class="d-flex">
                           <span class="icon-small"></span>
                        </span>
                        <span class="hide-menu">Led Matrix 8x8</span>
                     </div>
                     <!-- <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span> -->
                  </a>
               </li>
               <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"
                     href="comp_lcd_oled">
                     <div class="d-flex align-items-center gap-3">
                        <span class="d-flex">
                           <span class="icon-small"></span>
                        </span>
                        <span class="hide-menu">LCD Display OLED</span>
                     </div>
                     <!-- <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span> -->
                  </a>
               </li>
               <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"
                     href="comp_7segment">
                     <div class="d-flex align-items-center gap-3">
                        <span class="d-flex">
                           <span class="icon-small"></span>
                        </span>
                        <span class="hide-menu">7 Segment</span>
                     </div>
                     <!-- <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span> -->
                  </a>
               </li>
               <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"
                     href="comp_icmax7219">
                     <div class="d-flex align-items-center gap-3">
                        <span class="d-flex">
                           <span class="icon-small"></span>
                        </span>
                        <span class="hide-menu">IC MAX7219</span>
                     </div>
                     <!-- <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span> -->
                  </a>
               </li>
               <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"
                     href="comp_buzzer">
                     <div class="d-flex align-items-center gap-3">
                        <span class="d-flex">
                           <span class="icon-small"></span>
                        </span>
                        <span class="hide-menu">Buzzer</span>
                     </div>
                     <!-- <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span> -->
                  </a>
               </li>

            </ul>
         </li>
         <li class="sidebar-item">
            <a class="sidebar-link justify-content-between has-arrow" href="javascript:void(0)" aria-expanded="false">
               <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                     <iconify-icon icon="solar:cloud-file-line-duotone"></iconify-icon>
                  </span>
                  <span class="hide-menu">Tools & Library</span>
               </div>

            </a>
            <ul aria-expanded="false" class="collapse first-level">
               <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"
                     href="tools_arduino_ide"
                     aria-expanded="false">
                     <div class="d-flex align-items-center gap-3">
                        <span class="d-flex">
                           <span class="icon-small"></span>
                        </span>
                        <span class="hide-menu">Arduino IDE</span>
                     </div>
                     <!-- <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span> -->
                  </a>
               </li>
               <li class="sidebar-item">
                  <a class="sidebar-link justify-content-between"
                     href="tools_fritzing"
                     aria-expanded="false">
                     <div class="d-flex align-items-center gap-3">
                        <span class="d-flex">
                           <span class="icon-small"></span>
                        </span>
                        <span class="hide-menu">Fritzing</span>
                     </div>
                     <!-- <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span> -->
                  </a>
               </li>
            </ul>
         </li>
         <li>
            <span class="sidebar-divider lg"></span>
         </li>
         <li class="nav-small-cap">
            <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
            <span class="hide-menu">CBT</span>
         </li>
         <li class="sidebar-item">
            <a class="sidebar-link justify-content-between"
               href="bank_soal"
               aria-expanded="false">
               <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                     <iconify-icon icon="solar:chart-square-line-duotone" class=""></iconify-icon>
                  </span>
                  <span class="hide-menu">Bank Soal</span>
               </div>
               <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
            </a>
         </li>
         <li class="sidebar-item">
            <a class="sidebar-link justify-content-between"
               href="cbt_assesment"
               aria-expanded="false">
               <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                     <iconify-icon icon="solar:pie-chart-3-line-duotone" class=""></iconify-icon>
                  </span>
                  <span class="hide-menu">Pelaksanaan CBT</span>
               </div>
               <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
            </a>
         </li>
         <li class="sidebar-item">
            <a class="sidebar-link justify-content-between"
               href="cbt_results"
               aria-expanded="false">
               <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                     <iconify-icon icon="solar:chart-2-line-duotone" class=""></iconify-icon>
                  </span>
                  <span class="hide-menu">Hasil</span>
               </div>
               <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
            </a>
         </li>
         <li class="sidebar-item">
            <a class="sidebar-link justify-content-between"
               href="cbt_competition"
               aria-expanded="false">
               <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                     <iconify-icon icon="solar:round-graph-line-duotone" class=""></iconify-icon>
                  </span>
                  <span class="hide-menu">Kompetisi</span>
               </div>
               <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
            </a>
         </li>
         <li>
            <span class="sidebar-divider lg"></span>
         </li>
         <li class="nav-small-cap">
            <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
            <span class="hide-menu">Bantuan</span>
         </li>
         <li class="sidebar-item">
            <a class="sidebar-link justify-content-between"
               href="chat_bot" aria-expanded="false">
               <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                     <iconify-icon icon="solar:sticker-smile-circle-2-line-duotone" class=""></iconify-icon>
                  </span>
                  <span class="hide-menu">AI Solution</span>
               </div>
               <span class="hide-menu badge bg-secondary-subtle text-secondary fs-1 py-1">Pro</span>
            </a>
         </li>
         <li class="sidebar-item">
            <a class="sidebar-link" href="help_desk" aria-expanded="false">
               <iconify-icon icon="solar:sticker-smile-circle-2-line-duotone"></iconify-icon>
               <span class="hide-menu">Admin Trainer Kit</span>
            </a>
         </li>
         <li class="sidebar-item">
            <a class="sidebar-link" href="https://wa.me/6281234567890"
               target="_blank" aria-expanded="false">
               <iconify-icon icon="solar:planet-3-line-duotone"></iconify-icon>
               <span class="hide-menu">Admin Dinas Pendidikan</span>
            </a>
         </li>
      </ul>
      <div
         class="unlimited-access d-flex align-items-center hide-menu bg-secondary-subtle position-relative mb-7 mt-4 p-3 rounded-3">
         <div class="flex-shrink-0">
            <h6 class="fw-semibold fs-4 mb-6 text-dark w-75 lh-sm">Check Pro Version</h6>
            <a href="packet_pro"
               class="btn btn-secondary fs-2 fw-semibold lh-sm">Check</a>
         </div>
         <div class="unlimited-access-img">
            <img src="../assets/images/backgrounds/rupee.png" alt="" class="img-fluid">
         </div>
      </div>
   </nav>
   <!-- End Sidebar navigation -->
</div>