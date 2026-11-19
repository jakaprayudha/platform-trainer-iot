<?php
require '../controller/profile/getProfile.php';
if (!in_array($_SESSION['role'] ?? '', ['admin', 'superadmin'], true)) { header('Location: dashboard.php'); exit; }
$schedules = mysqli_query($conn, 'SELECT s.*, COUNT(r.id) AS attempts FROM assessment_schedules s LEFT JOIN assessment_results r ON r.schedule_id = s.id GROUP BY s.id ORDER BY s.opens_at DESC');
$questionCount = (int) (mysqli_fetch_assoc(mysqli_query($conn, 'SELECT COUNT(*) AS total FROM assessment_questions WHERE is_active = 1'))['total'] ?? 0);
?>
<!doctype html><html lang="id"><head><?php require 'partial-head.php'; ?></head><body>
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
<?php require 'partial-topstrip.php'; ?>
<aside class="left-sidebar"><?php require 'partial-sidebar.php'; ?></aside>
<div class="body-wrapper"><?php require 'partial-header.php'; ?><div class="body-wrapper-inner"><div class="container-fluid py-4">
<h4 class="fw-bold">Jadwal Pre-Test &amp; Post-Test</h4><p class="text-muted">Setiap jadwal membuka satu pre-test (10 soal) dan satu post-test (20 soal) per peserta.</p>
<?php if (isset($_GET['error'])): ?><div class="alert alert-danger"><?= htmlspecialchars($_GET['error']) ?></div><?php endif; ?><?php if (isset($_GET['success'])): ?><div class="alert alert-success"><?= htmlspecialchars($_GET['success']) ?></div><?php endif; ?>
<div class="alert <?= $questionCount >= 20 ? 'alert-info' : 'alert-warning' ?>">Soal aktif: <strong><?= $questionCount ?></strong>/20. Jadwal hanya dapat dibuat jika tersedia minimal 20 soal aktif.</div>
<div class="card mb-4"><div class="card-body"><h5>Buat Jadwal</h5><form method="post" action="../controller/assessment/storeSchedule.php" class="row g-3"><div class="col-md-4"><input required name="title" class="form-control" placeholder="Contoh: Evaluasi Juli 2026"></div><div class="col-md-3"><label class="form-label">Mulai</label><input required type="datetime-local" name="opens_at" class="form-control"></div><div class="col-md-3"><label class="form-label">Berakhir</label><input required type="datetime-local" name="closes_at" class="form-control"></div><div class="col-md-2 d-flex align-items-end"><button class="btn btn-primary w-100">Buat Jadwal</button></div></form></div></div>
<div class="card"><div class="table-responsive"><table class="table mb-0"><thead><tr><th>Jadwal</th><th>Periode</th><th>Total Selesai</th></tr></thead><tbody><?php while ($schedule = mysqli_fetch_assoc($schedules)): ?><tr><td><?= htmlspecialchars($schedule['title']) ?></td><td><?= htmlspecialchars($schedule['opens_at']) ?> – <?= htmlspecialchars($schedule['closes_at']) ?></td><td><?= $schedule['attempts'] ?></td></tr><?php endwhile; ?></tbody></table></div></div>
</div></div></div></div><?php require 'library.php'; ?></body></html>
