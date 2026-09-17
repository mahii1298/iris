<?php
namespace App\Controllers;

use App\Models\Course;
use App\Models\Schedule;

class CourseController {
    public function index() {
        $courses = Course::getAsnt9712Courses();
        $otherCourses = Course::getOtherCourses();
        $practicalMatrix = Course::getPracticalScopeMatrix();

        $pageTitle = 'ASNT 9712 Courses (ISO 9712) | Level II & III Training';
        $activeNav = 'courses';

        require_once __DIR__ . '/../../views/pages/courses.php';
    }

    public function schedule() {
        $schedules = Schedule::getTrainingSchedule();

        $pageTitle = 'ASNT 9712 Training & Examination Schedule 2024';
        $activeNav = 'schedule';

        require_once __DIR__ . '/../../views/pages/schedule.php';
    }
}
