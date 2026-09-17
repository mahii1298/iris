<?php
/**
 * IRIS - Integrity Reliability Inspection Service
 * Front Controller & Router
 */

require_once __DIR__ . '/config/config.php';

// PSR-4 Autoloader for App namespace
spl_autoload_register(function ($class) {
    $prefix = 'App\\';
    $base_dir = __DIR__ . '/app/';

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
});

use App\Controllers\HomeController;
use App\Controllers\CourseController;
use App\Controllers\ServiceController;
use App\Controllers\ContactController;

// Simple clean query router
$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'courses':
        (new CourseController())->index();
        break;

    case 'schedule':
        (new CourseController())->schedule();
        break;

    case 'services':
        (new ServiceController())->index();
        break;

    case 'about':
        (new ContactController())->about();
        break;

    case 'contact':
        (new ContactController())->index();
        break;

    case 'home':
    default:
        (new HomeController())->index();
        break;
}
