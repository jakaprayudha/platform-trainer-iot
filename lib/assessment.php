<?php

declare(strict_types=1);

function assessment_question_count(string $testType): int
{
    return $testType === 'pretest' ? 10 : 20;
}

function assessment_score(array $answers, array $questions): int
{
    $totalQuestions = count($questions);
    if ($totalQuestions === 0) {
        return 0;
    }

    $correct = 0;
    foreach ($questions as $question) {
        $questionId = (int) $question['id'];
        if (isset($answers[$questionId]) && $answers[$questionId] === $question['correct_option']) {
            $correct++;
        }
    }

    return (int) round(($correct / $totalQuestions) * 100);
}

function assessment_category(int $score): string
{
    if ($score >= 90) {
        return 'Sangat Baik';
    }

    if ($score >= 75) {
        return 'Baik';
    }

    if ($score >= 60) {
        return 'Cukup';
    }

    return 'Perlu Pendampingan';
}

function assessment_can_download_certificate(string $testType, int $score): bool
{
    return $testType === 'posttest' && $score >= 10;
}

function assessment_result_heading(int $score): string
{
    return 'Nilai Anda: ' . $score;
}

function assessment_schedule_is_valid(string $opensAt, string $closesAt): bool
{
    $openTime = strtotime($opensAt);
    $closeTime = strtotime($closesAt);

    return $openTime !== false && $closeTime !== false && $openTime < $closeTime;
}

function assessment_can_create_schedule(int $activeQuestionCount): bool
{
    return $activeQuestionCount >= assessment_question_count('posttest');
}

function assessment_can_take(bool $alreadyCompleted, bool $scheduleIsOpen): bool
{
    return !$alreadyCompleted && $scheduleIsOpen;
}

function assessment_schedule_is_open(string $opensAt, string $closesAt, ?int $now = null): bool
{
    $currentTime = $now ?? time();
    $openTime = strtotime($opensAt);
    $closeTime = strtotime($closesAt);

    return $openTime !== false && $closeTime !== false && $openTime <= $currentTime && $currentTime <= $closeTime;
}

function assessment_schedule_label(string $title, string $opensAt, string $closesAt): string
{
    return sprintf('%s (%s – %s)', $title, date('d M Y H:i', strtotime($opensAt)), date('d M Y H:i', strtotime($closesAt)));
}

function assessment_results_report_filters(array $input): array
{
    $scheduleId = filter_var($input['schedule_id'] ?? 0, FILTER_VALIDATE_INT, ['options' => ['min_range' => 1]]) ?: 0;
    $testType = $input['test_type'] ?? 'all';
    if (!in_array($testType, ['all', 'pretest', 'posttest'], true)) {
        $testType = 'all';
    }

    return [
        'schedule_id' => $scheduleId,
        'test_type' => $testType,
        'search' => trim((string) ($input['search'] ?? '')),
    ];
}

function assessment_reset_target(array $input): ?array
{
    $scheduleId = filter_var($input['schedule_id'] ?? null, FILTER_VALIDATE_INT, ['options' => ['min_range' => 1]]);
    $userId = filter_var($input['user_id'] ?? null, FILTER_VALIDATE_INT, ['options' => ['min_range' => 1]]);
    $testType = $input['test_type'] ?? '';

    if (!$scheduleId || !$userId || !in_array($testType, ['pretest', 'posttest'], true)) {
        return null;
    }

    return [
        'schedule_id' => $scheduleId,
        'user_id' => $userId,
        'test_type' => $testType,
    ];
}
