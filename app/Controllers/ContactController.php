<?php
namespace App\Controllers;

use App\Models\Course;

class ContactController {
    public function index() {
        $courses = Course::getAsnt9712Courses();

        $pageTitle = 'Contact Us | Enquiry & Course Registration';
        $activeNav = 'contact';

        require_once __DIR__ . '/../../views/pages/contact.php';
    }

    public function about() {
        $pageTitle = 'About Us | Authorized Training Centre (ATC) Trichy';
        $activeNav = 'about';

        require_once __DIR__ . '/../../views/pages/about.php';
    }
}
