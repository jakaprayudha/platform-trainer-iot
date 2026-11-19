# Scheduled Assessments Design

## Intent

Enable administrators to run repeatable pre-test/post-test assessment cycles. A participant gets one pre-test and one post-test per schedule, instead of one attempt for their entire account lifetime.

## Goals

- Administrators can maintain a shared multiple-choice question bank.
- Administrators can create a named schedule with an opening and closing datetime.
- A currently-open schedule makes one pre-test and one post-test available to each participant.
- Each pre-test has 10 random questions and each post-test has 20 random questions from the shared bank.
- Results and answers are retained by schedule for reporting.

## Rules

- Schedules can only be created when the question bank has at least 20 active questions.
- A participant can submit each test type only once for a given schedule.
- The server enforces both the schedule window and duplicate-submission rule.
- A later schedule is a new assessment cycle and therefore enables new pre-test and post-test attempts.
- The question selection is recorded with each answer so later edits to a question do not make the result ambiguous.

## User Interface

- Admins get a schedule list/create screen and a question bank screen.
- Participants see the active schedule and a clear unavailable/completed state.
- Existing result pages gain schedule context where result data exists.

## Non-goals

- Retaking a test inside the same schedule.
- Changing the shared question bank through a participant-facing interface.
- Migrating or deleting historical legacy results.

## Implementation decisions

- Use MySQL tables and a checked-in SQL migration because this project has no migration framework.
- Keep old result tables untouched; new schedule-aware result and answer tables hold the new flow.
- Use prepared statements for all new request input and database writes.
