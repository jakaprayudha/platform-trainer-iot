-- Run once against the application database before enabling scheduled assessments.

CREATE TABLE assessment_questions (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    question_text TEXT NOT NULL,
    option_a VARCHAR(1000) NOT NULL,
    option_b VARCHAR(1000) NOT NULL,
    option_c VARCHAR(1000) NOT NULL,
    option_d VARCHAR(1000) NOT NULL,
    correct_option ENUM('A', 'B', 'C', 'D') NOT NULL,
    is_active TINYINT(1) NOT NULL DEFAULT 1,
    created_by INT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX assessment_questions_active_index (is_active)
);

CREATE TABLE assessment_schedules (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    opens_at DATETIME NOT NULL,
    closes_at DATETIME NOT NULL,
    created_by INT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX assessment_schedules_window_index (opens_at, closes_at)
);

CREATE TABLE assessment_results (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    schedule_id INT UNSIGNED NOT NULL,
    user_id INT NOT NULL,
    test_type ENUM('pretest', 'posttest') NOT NULL,
    score TINYINT UNSIGNED NOT NULL,
    category VARCHAR(50) NOT NULL,
    total_question TINYINT UNSIGNED NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    UNIQUE KEY assessment_results_once_per_schedule (schedule_id, user_id, test_type),
    INDEX assessment_results_schedule_index (schedule_id),
    INDEX assessment_results_user_index (user_id),
    CONSTRAINT assessment_results_schedule_fk FOREIGN KEY (schedule_id) REFERENCES assessment_schedules(id) ON DELETE RESTRICT
);

CREATE TABLE assessment_answers (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    result_id INT UNSIGNED NOT NULL,
    question_id INT UNSIGNED NOT NULL,
    selected_option ENUM('A', 'B', 'C', 'D') NOT NULL,
    correct_option ENUM('A', 'B', 'C', 'D') NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    UNIQUE KEY assessment_answers_question_once (result_id, question_id),
    CONSTRAINT assessment_answers_result_fk FOREIGN KEY (result_id) REFERENCES assessment_results(id) ON DELETE CASCADE,
    CONSTRAINT assessment_answers_question_fk FOREIGN KEY (question_id) REFERENCES assessment_questions(id) ON DELETE RESTRICT
);
