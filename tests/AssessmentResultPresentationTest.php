<?php

require_once __DIR__ . '/../lib/assessment.php';

function assert_same($expected, $actual, string $message): void
{
    if ($expected !== $actual) {
        throw new RuntimeException($message . ' Expected ' . var_export($expected, true) . ', got ' . var_export($actual, true));
    }
}

assert_same(false, assessment_can_download_certificate('pretest', 100), 'Pre-test results must never unlock a certificate.');
assert_same(false, assessment_can_download_certificate('posttest', 74), 'A post-test score below 75 must not unlock a certificate.');
assert_same(true, assessment_can_download_certificate('posttest', 75), 'A passing post-test score must unlock a certificate.');
assert_same('Nilai Anda: 85', assessment_result_heading(85), 'The result heading must show the participant score.');

echo "Assessment result presentation tests passed\n";
