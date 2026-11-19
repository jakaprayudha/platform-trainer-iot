<?php

require_once __DIR__ . '/../lib/assessment.php';

function assert_same($expected, $actual, string $message): void
{
    if ($expected !== $actual) {
        throw new RuntimeException($message . ' Expected ' . var_export($expected, true) . ', got ' . var_export($actual, true));
    }
}

// Break caught: arbitrary test-type values must not leak into the results query.
assert_same(
    ['schedule_id' => 24, 'test_type' => 'posttest', 'search' => 'Siti'],
    assessment_results_report_filters(['schedule_id' => '24', 'test_type' => 'posttest', 'search' => '  Siti  ']),
    'The results report must retain valid schedule and test filters while trimming the participant search.'
);

assert_same(
    ['schedule_id' => 0, 'test_type' => 'all', 'search' => ''],
    assessment_results_report_filters(['schedule_id' => '-1', 'test_type' => 'unknown', 'search' => '   ']),
    'The results report must fall back to all schedules and test types for invalid filters.'
);

echo "Assessment results report tests passed\n";
