<?php
namespace App\Controllers;

use App\Models\Service;
use App\Models\Client;

class ServiceController {
    public function index() {
        $services = Service::getAllServices();
        $clients = Client::getAllClients();

        $pageTitle = 'Industrial Inspection Services | TPI, WQT & NDT';
        $activeNav = 'services';

        require_once __DIR__ . '/../../views/pages/services.php';
    }
}
