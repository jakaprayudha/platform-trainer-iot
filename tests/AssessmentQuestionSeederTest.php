<?php

$seeder = __DIR__ . '/../database/seeders/2026-11-19_iot_assessment_questions.sql';

if (!is_file($seeder)) {
    throw new RuntimeException('The IoT assessment question seeder must exist.');
}

$contents = file_get_contents($seeder);
preg_match_all('/INSERT INTO assessment_questions/i', $contents, $matches);

if (count($matches[0]) !== 20) {
    throw new RuntimeException('The IoT assessment question seeder must provide exactly twenty questions.');
}

foreach (['Internet of Things', 'Arduino', 'ESP8266', 'Wi-Fi', 'Sensor LDR', 'LED', 'Buzzer'] as $topic) {
    if (stripos($contents, $topic) === false) {
        throw new RuntimeException("Seeder must cover {$topic}.");
    }
}

echo "Assessment question seeder tests passed\n";
