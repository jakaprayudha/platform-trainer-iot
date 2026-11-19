<?php
require '../controller/profile/getProfile.php';
require_once '../lib/assessment.php';

if (!in_array($_SESSION['role'] ?? '', ['admin', 'superadmin'], true)) {
    header('Location: dashboard.php');
    exit;
}

$filters = assessment_results_report_filters($_GET);
$scheduleId = $filters['schedule_id'];
$testType = $filters['test_type'];
$search = $filters['search'];

$schedules = mysqli_query($conn, 'SELECT id, title, opens_at, closes_at FROM assessment_schedules ORDER BY opens_at DESC');
$statement = mysqli_prepare($conn, "
    SELECT ar.id, ar.schedule_id, ar.user_id, ar.test_type, ar.score, ar.category, ar.total_question, ar.created_at,
           s.title AS schedule_title, s.opens_at, s.closes_at, u.fullname, u.email
    FROM assessment_results ar
    INNER JOIN assessment_schedules s ON s.id = ar.schedule_id
    INNER JOIN users u ON u.id = ar.user_id
    WHERE (? = 0 OR ar.schedule_id = ?)
      AND (? = 'all' OR ar.test_type = ?)
      AND (? = '' OR u.fullname LIKE CONCAT('%', ?, '%') OR u.email LIKE CONCAT('%', ?, '%'))
    ORDER BY s.opens_at DESC, ar.created_at DESC
");
mysqli_stmt_bind_param($statement, 'iisssss', $scheduleId, $scheduleId, $testType, $testType, $search, $search, $search);
mysqli_stmt_execute($statement);
$results = mysqli_fetch_all(mysqli_stmt_get_result($statement), MYSQLI_ASSOC);

$participants = [];
$pretestCount = 0;
$posttestCount = 0;
foreach ($results as $result) {
    $participants[(int) $result['user_id']] = true;
    $result['test_type'] === 'pretest' ? $pretestCount++ : $posttestCount++;
}
?>
<!doctype html>
<html lang="id">
<head><?php require 'partial-head.php'; ?></head>
<body>
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <?php require 'partial-topstrip.php'; ?>
    <aside class="left-sidebar"><?php require 'partial-sidebar.php'; ?></aside>
    <div class="body-wrapper"><?php require 'partial-header.php'; ?><div class="body-wrapper-inner"><div class="container-fluid py-4">
        <div class="d-flex justify-content-between align-items-center mb-4"><div><h4 class="fw-bold mb-1">Hasil CBT</h4><p class="text-muted mb-0">Rekapitulasi hasil pre-test dan post-test semua peserta berdasarkan jadwal.</p></div></div>

        <div class="card shadow-sm border-0 mb-4"><div class="card-body"><form method="get" class="row g-3">
            <div class="col-md-4"><label class="form-label" for="schedule_id">Jadwal</label><select class="form-select" id="schedule_id" name="schedule_id"><option value="0">Semua jadwal</option><?php while ($schedule = mysqli_fetch_assoc($schedules)): ?><option value="<?= (int) $schedule['id'] ?>" <?= $scheduleId === (int) $schedule['id'] ? 'selected' : '' ?>><?= htmlspecialchars(assessment_schedule_label($schedule['title'], $schedule['opens_at'], $schedule['closes_at'])) ?></option><?php endwhile; ?></select></div>
            <div class="col-md-3"><label class="form-label" for="test_type">Tipe Tes</label><select class="form-select" id="test_type" name="test_type"><option value="all" <?= $testType === 'all' ? 'selected' : '' ?>>Pre-Test dan Post-Test</option><option value="pretest" <?= $testType === 'pretest' ? 'selected' : '' ?>>Pre-Test</option><option value="posttest" <?= $testType === 'posttest' ? 'selected' : '' ?>>Post-Test</option></select></div>
            <div class="col-md-3"><label class="form-label" for="search">Cari Peserta</label><input class="form-control" id="search" name="search" value="<?= htmlspecialchars($search) ?>" placeholder="Nama atau email"></div>
            <div class="col-md-2 d-flex align-items-end gap-2"><button class="btn btn-primary flex-grow-1" type="submit">Filter</button><a class="btn btn-secondary" href="cbt_results.php">Reset</a></div>
        </form></div></div>

        <div class="row mb-4">
            <div class="col-md-3"><div class="card border-0 shadow-sm"><div class="card-body"><h3 class="fw-bold text-primary"><?= count($results) ?></h3><small class="text-muted">Total Hasil</small></div></div></div>
            <div class="col-md-3"><div class="card border-0 shadow-sm"><div class="card-body"><h3 class="fw-bold text-info"><?= count($participants) ?></h3><small class="text-muted">Peserta</small></div></div></div>
            <div class="col-md-3"><div class="card border-0 shadow-sm"><div class="card-body"><h3 class="fw-bold text-success"><?= $pretestCount ?></h3><small class="text-muted">Pre-Test Selesai</small></div></div></div>
            <div class="col-md-3"><div class="card border-0 shadow-sm"><div class="card-body"><h3 class="fw-bold text-warning"><?= $posttestCount ?></h3><small class="text-muted">Post-Test Selesai</small></div></div></div>
        </div>

        <div class="card shadow-sm border-0"><div class="card-header bg-light"><h5 class="mb-0">Daftar Hasil Peserta</h5></div><div class="table-responsive"><table class="table table-hover align-middle mb-0"><thead class="table-light"><tr><th>No.</th><th>Jadwal</th><th>Peserta</th><th>Tipe Tes</th><th>Nilai</th><th>Kategori</th><th>Jumlah Soal</th><th>Diselesaikan</th></tr></thead><tbody>
        <?php if (!$results): ?><tr><td colspan="8" class="text-center text-muted py-4">Belum ada hasil yang sesuai dengan filter.</td></tr>
        <?php else: foreach ($results as $index => $result): ?><tr>
            <td><?= $index + 1 ?></td>
            <td><strong><?= htmlspecialchars($result['schedule_title']) ?></strong><br><small class="text-muted"><?= htmlspecialchars($result['opens_at']) ?> – <?= htmlspecialchars($result['closes_at']) ?></small></td>
            <td><?= htmlspecialchars($result['fullname']) ?><br><small class="text-muted"><?= htmlspecialchars($result['email']) ?></small></td>
            <td><span class="badge <?= $result['test_type'] === 'pretest' ? 'bg-primary' : 'bg-success' ?>"><?= $result['test_type'] === 'pretest' ? 'Pre-Test' : 'Post-Test' ?></span></td>
            <td class="fw-bold"><?= (int) $result['score'] ?></td><td><?= htmlspecialchars($result['category']) ?></td><td><?= (int) $result['total_question'] ?></td><td><?= htmlspecialchars(date('d M Y H:i', strtotime($result['created_at']))) ?></td>
        </tr><?php endforeach; endif; ?>
        </tbody></table></div></div>
    </div></div></div>
</div>
<?php require 'library.php'; ?>
</body>
</html>
