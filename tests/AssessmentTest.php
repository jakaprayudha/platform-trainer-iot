<?php

require_once __DIR__ . '/../lib/assessment.php';

function assert_same($expected, $actual, string $message): void
{
    if ($expected !== $actual) {
        throw new RuntimeException($message . ' Expected ' . var_export($expected, true) . ', got ' . var_export($actual, true));
    }
}

assert_same(10, assessment_question_count('pretest'), 'Pre-test must contain ten questions.');
assert_same(20, assessment_question_count('posttest'), 'Post-test must contain twenty questions.');

$questions = [
    ['id' => 11, 'correct_option' => 'A'],
    ['id' => 12, 'correct_option' => 'B'],
    ['id' => 13, 'correct_option' => 'C'],
    ['id' => 14, 'correct_option' => 'D'],
];

assert_same(75, assessment_score([11 => 'A', 12 => 'B', 13 => 'C', 14 => 'A'], $questions), 'Score must be a percentage of correct answers.');
assert_same('Sangat Baik', assessment_category(90), 'A score of ninety is very good.');
assert_same('Baik', assessment_category(75), 'A score of seventy-five is good.');
assert_same('Cukup', assessment_category(60), 'A score of sixty is sufficient.');
assert_same('Perlu Pendampingan', assessment_category(59), 'A score below sixty needs assistance.');
assert_same(true, assessment_schedule_is_valid('2026-07-01 08:00:00', '2026-07-31 17:00:00'), 'A schedule must open before it closes.');
assert_same(false, assessment_schedule_is_valid('2026-07-31 17:00:00', '2026-07-01 08:00:00'), 'A reversed schedule window must be rejected.');
assert_same(true, assessment_can_create_schedule(20), 'Twenty active questions permit a schedule.');
assert_same(false, assessment_can_create_schedule(19), 'Fewer than twenty active questions must block a schedule.');
assert_same(true, assessment_can_take(false, true), 'A user with no result can take an open schedule.');
assert_same(false, assessment_can_take(true, true), 'A duplicate attempt in the same schedule must be blocked.');
assert_same(false, assessment_can_take(false, false), 'A closed schedule must be blocked.');
assert_same('Evaluasi Juli (01 Jul 2026 08:00 – 31 Jul 2026 17:00)', assessment_schedule_label('Evaluasi Juli', '2026-07-01 08:00:00', '2026-07-31 17:00:00'), 'Result labels must retain schedule context.');
assert_same(
    ['schedule_id' => 24, 'user_id' => 7, 'test_type' => 'posttest'],
    assessment_reset_target(['schedule_id' => '24', 'user_id' => '7', 'test_type' => 'posttest']),
    'A reset target must retain a valid schedule, participant, and test type.'
);
assert_same(
    null,
    assessment_reset_target(['schedule_id' => '0', 'user_id' => '7', 'test_type' => 'anything']),
    'A reset target must reject invalid identifiers and test types.'
);

echo "Assessment helper tests passed\n";
