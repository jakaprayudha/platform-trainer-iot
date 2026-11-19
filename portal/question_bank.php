<?php
require '../controller/profile/getProfile.php';
if (!in_array($_SESSION['role'] ?? '', ['admin', 'superadmin'], true)) { header('Location: dashboard.php'); exit; }
$questions = mysqli_query($conn, 'SELECT * FROM assessment_questions ORDER BY created_at DESC');
?>
<!doctype html><html lang="id"><head><?php require 'partial-head.php'; ?></head><body>
<div class="page-wrapper" id="main-wrapper"><aside class="left-sidebar"><?php require 'partial-sidebar.php'; ?></aside><div class="body-wrapper"><div class="body-wrapper-inner"><div class="container-fluid py-4">
<h4 class="fw-bold">Bank Soal Asesmen</h4><p class="text-muted">Soal aktif digunakan bersama oleh seluruh jadwal tes.</p>
<?php if (isset($_GET['error'])): ?><div class="alert alert-danger"><?= htmlspecialchars($_GET['error']) ?></div><?php endif; ?><?php if (isset($_GET['success'])): ?><div class="alert alert-success"><?= htmlspecialchars($_GET['success']) ?></div><?php endif; ?>
<div class="card mb-4"><div class="card-body"><h5>Tambah Soal</h5><form method="post" action="../controller/assessment/storeQuestion.php" class="row g-3"><div class="col-12"><textarea required class="form-control" name="question_text" placeholder="Pertanyaan"></textarea></div><?php foreach (['a','b','c','d'] as $option): ?><div class="col-md-6"><input required class="form-control" name="option_<?= $option ?>" placeholder="Pilihan <?= strtoupper($option) ?>"></div><?php endforeach; ?><div class="col-md-4"><select required class="form-select" name="correct_option"><option value="">Jawaban benar</option><option>A</option><option>B</option><option>C</option><option>D</option></select></div><div class="col-md-4"><button class="btn btn-primary">Simpan Soal</button></div></form></div></div>
<div class="card"><div class="table-responsive"><table class="table mb-0"><thead><tr><th>Pertanyaan</th><th>Jawaban</th><th>Status</th></tr></thead><tbody><?php while ($question = mysqli_fetch_assoc($questions)): ?><tr><td><?= htmlspecialchars($question['question_text']) ?></td><td><?= htmlspecialchars($question['correct_option']) ?></td><td><?= $question['is_active'] ? 'Aktif' : 'Nonaktif' ?></td></tr><?php endwhile; ?></tbody></table></div></div>
</div></div></div></div><?php require 'library.php'; ?></body></html>
