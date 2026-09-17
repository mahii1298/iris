<?php
namespace App\Controllers;

use App\Models\Course;
use App\Models\Schedule;
use App\Models\Service;
use App\Models\Client;

class HomeController {
    public function index() {
        $courses = Course::getAsnt9712Courses();
        $otherCourses = Course::getOtherCourses();
        $practicalMatrix = Course::getPracticalScopeMatrix();
        $schedules = Schedule::getTrainingSchedule();
        $services = Service::getAllServices();
        $clients = Client::getAllClients();

        $pageTitle = 'Home | ASNT 9712 Authorized Training Centre & TPI Inspection';
        $activeNav = 'home';

        require_once __DIR__ . '/../../views/pages/home.php';
    }
}
