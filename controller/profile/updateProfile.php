<?php

session_start();

require_once dirname(__DIR__, 2) . '/database/connect.php';

$id = $_SESSION['user_id'] ?? '';

if (!$id) {
   die('Session tidak ditemukan');
}

$fullname = mysqli_real_escape_string(
   $conn,
   $_POST['fullname']
);

$email = mysqli_real_escape_string(
   $conn,
   $_POST['email']
);

$school_name = mysqli_real_escape_string(
   $conn,
   $_POST['school_name']
);

$bio = mysqli_real_escape_string(
   $conn,
   $_POST['bio']
);

$query = mysqli_query(
   $conn,
   "UPDATE users SET
      fullname='$fullname',
      email='$email',
      school_name='$school_name',
      bio='$bio'
   WHERE id='$id'"
);

if ($query) {

   $_SESSION['success'] = "Profile berhasil diperbarui";
} else {

   $_SESSION['error'] = mysqli_error($conn);
}

header("Location: ../../portal/my_profile");
exit;
