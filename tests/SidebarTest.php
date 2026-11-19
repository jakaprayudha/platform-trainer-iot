<?php

function sidebar_for_role(string $role): string
{
    $_SESSION = ['role' => $role, 'fullname' => 'Test User'];
    ob_start();
    include __DIR__ . '/../portal/partial-sidebar.php';
    return ob_get_clean();
}

function sidebar_assert_contains(string $needle, string $haystack, string $message): void
{
    if (strpos($haystack, $needle) === false) {
        throw new RuntimeException($message);
    }
}

$studentSidebar = sidebar_for_role('siswa');
sidebar_assert_contains('Aktivitas Siswa', $studentSidebar, 'Student sidebar must render the student menu.');
sidebar_assert_contains('assessment?type=pretest', $studentSidebar, 'Student sidebar must contain the scheduled pre-test link.');

$adminSidebar = sidebar_for_role('admin');
sidebar_assert_contains('Monitoring Governance', $adminSidebar, 'Admin sidebar must render the governance menu.');
sidebar_assert_contains('assessment_schedules', $adminSidebar, 'Admin sidebar must contain the schedule link.');

echo "Sidebar tests passed\n";
