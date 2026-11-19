# Scheduled Assessments Implementation Plan

> **For agentic workers:** REQUIRED SUB-SKILL: Use superpowers:subagent-driven-development (recommended) or superpowers:executing-plans to implement this plan task-by-task. Steps use checkbox (`- [ ]`) syntax for tracking.

**Goal:** Let admins create date-bounded assessment schedules that provide each participant one 10-question pre-test and one 20-question post-test from a shared question bank.

**Architecture:** Add schedule, question, result, and answer tables without modifying legacy result storage. Extract pure assessment helpers for eligibility, selection, and score calculation; pages and submission controllers use those helpers with prepared SQL statements.

**Tech Stack:** PHP 8, MySQL/MariaDB, Bootstrap, browser Fetch API.

**Spec:** `docs/superpowers/specs/2026-11-19-scheduled-assessments-design.md`

## Global Constraints

- Pre-tests select exactly 10 active bank questions; post-tests select exactly 20.
- A schedule requires at least 20 active questions and an opening datetime before its closing datetime.
- Only admin/superadmin users can manage schedules and questions.
- Submission eligibility must be checked server-side.

## Review Focus

- A forged schedule ID must not permit submission to a closed or nonexistent schedule.
- A duplicate browser submission must result in one stored result only.
- A question bank with fewer than 20 active questions must prevent schedule creation.
- Selected question IDs must be persisted with the submission, not inferred from current bank order.
- User-supplied question text and schedule title must be escaped when rendered.

---

### Task 1: Assessment domain helpers and schema

**Files:**
- Create: `database/migrations/2026-11-19_scheduled_assessments.sql`
- Create: `lib/assessment.php`
- Test: `tests/AssessmentTest.php`

**Interfaces:**
- Produces: `assessment_question_count(string $type): int`, `assessment_score(array $answers, array $questions): int`, `assessment_category(int $score): string`.

- [ ] **Step 1: Write failing tests** for pre-test/post-test counts, percentage score normalization, and score category boundaries.
- [ ] **Step 2: Run** `php tests/AssessmentTest.php`; expected result: assertions fail because helpers are absent.
- [ ] **Step 3: Implement** the pure helpers and the tables for schedules, questions, scheduled results, and scheduled answers.
- [ ] **Step 4: Run** `php tests/AssessmentTest.php`; expected result: all assertions pass.

### Task 2: Admin question bank and schedule management

**Files:**
- Create: `portal/assessment_schedules.php`
- Create: `portal/question_bank.php`
- Create: `controller/assessment/storeSchedule.php`
- Create: `controller/assessment/storeQuestion.php`
- Modify: `portal/partial-sidebar.php`
- Test: `tests/AssessmentTest.php`

**Interfaces:**
- Consumes: Task 1 helper count interface.
- Produces: admin pages and POST endpoints accepting validated schedule and question input.

- [ ] **Step 1: Write failing tests** for 20-question minimum and invalid date range validation.
- [ ] **Step 2: Run** `php tests/AssessmentTest.php`; expected result: validation assertions fail.
- [ ] **Step 3: Implement** role checks, prepared inserts, validation, and Bootstrap forms/listings.
- [ ] **Step 4: Run** `php tests/AssessmentTest.php`; expected result: all assertions pass.

### Task 3: Participant test rendering and result persistence

**Files:**
- Create: `portal/assessment.php`
- Create: `controller/assessment/storeAssessment.php`
- Modify: `portal/pre_test.php`
- Modify: `portal/post_test.php`
- Test: `tests/AssessmentTest.php`

**Interfaces:**
- Consumes: schedules and question-bank tables, Task 1 scoring helpers.
- Produces: schedule-aware tests and persisted schedule-aware answers/results.

- [ ] **Step 1: Write failing tests** for closed-schedule, duplicate-attempt, and score behavior.
- [ ] **Step 2: Run** `php tests/AssessmentTest.php`; expected result: eligibility assertions fail.
- [ ] **Step 3: Implement** active-schedule lookup, random selection, question IDs in the form, a transaction-backed submission, and a unique `(schedule_id, user_id, test_type)` constraint.
- [ ] **Step 4: Run** `php tests/AssessmentTest.php`; expected result: all assertions pass.

### Task 4: Schedule-aware result reporting and verification

**Files:**
- Modify: `portal/exam_results.php`
- Test: `tests/AssessmentTest.php`

**Interfaces:**
- Consumes: scheduled results tables from Task 1.
- Produces: schedule-labelled result listing.

- [ ] **Step 1: Write failing test** for a schedule-labelled result row formatter.
- [ ] **Step 2: Run** `php tests/AssessmentTest.php`; expected result: formatter assertion fails.
- [ ] **Step 3: Implement** schedule filtering/labels while retaining the legacy results fallback.
- [ ] **Step 4: Run** `php tests/AssessmentTest.php` and `find portal controller lib -name '*.php' -print0 | xargs -0 -n1 php -l`; expected result: tests and syntax checks pass.
