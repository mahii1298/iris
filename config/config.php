<?php
/**
 * IRIS Application Configuration
 */

define('APP_NAME', 'IRIS - Integrity Reliability Inspection Service');
define('APP_TAGLINE', 'Authorized Training Centre (ATC) for ASNT 9712 (ISO 9712)');
define('COMPANY_ADDRESS', 'No.5/8C, THIRUVENGADA NAGAR, THIRUVERUMBUR, TRICHY 620013');
define('CONTACT_PHONE', '+91 99446 74608');
define('CONTACT_PHONE_RAW', '919944674608');
define('CONTACT_EMAIL', 'iris.ndte@gmail.com');
define('EXAM_CENTRE', 'ASNT India facility - Chennai');
define('TRAINING_CENTRE', 'IRIS Trichy Facility (Thiruverumbur)');

// Base URL helper
function base_url($path = '') {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
    $script = dirname($_SERVER['SCRIPT_NAME']);
    $base = rtrim($protocol . '://' . $host . $script, '/\\');
    return $base . '/' . ltrim($path, '/');
}
