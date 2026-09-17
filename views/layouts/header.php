<?php
require_once __DIR__ . '/../../config/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle ?? APP_NAME) ?></title>
    <meta name="description" content="IRIS - Authorized Training Centre (ATC) for ASNT 9712 (ISO 9712) in Trichy. ISO 9001:2015 certified NDT Level II and Level III training, examinations at ASNT India Chennai, Third Party Inspection (TPI), and Welder Qualification Testing.">
    
    <!-- Bootstrap 5.3.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Custom Theme Stylesheet (Index 3 Corporate Light Blue) -->
    <link rel="stylesheet" href="assets/css/custom.css">
    
    <!-- Favicon & Theme Color -->
    <meta name="theme-color" content="#0052CC">
</head>
<body>

    <!-- Institutional Accreditation Top Ribbon -->
    <div class="top-ribbon-bar">
        <div class="container d-flex flex-wrap justify-content-between align-items-center gap-2">
            <div class="d-flex align-items-center gap-3 flex-wrap">
                <span class="d-inline-flex align-items-center gap-1 fw-semibold text-white">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="#38BDF8"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    ASNT Approved Training Centre (ATC) since 2024
                </span>
                <span class="text-white-50">|</span>
                <span class="d-inline-flex align-items-center gap-1 text-white">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#4ADE80" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    ISO 9001:2015 Certified
                </span>
                <span class="text-white-50 d-none d-lg-inline">|</span>
                <span class="text-white-50 d-none d-lg-inline">
                    Exam Centre: <?= EXAM_CENTRE ?>
                </span>
            </div>
            <div class="d-flex align-items-center gap-3">
                <a href="tel:<?= CONTACT_PHONE ?>" class="d-inline-flex align-items-center gap-1">
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    <?= CONTACT_PHONE ?>
                </a>
                <a href="mailto:<?= CONTACT_EMAIL ?>" class="d-none d-md-inline-flex align-items-center gap-1">
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                    <?= CONTACT_EMAIL ?>
                </a>
            </div>
        </div>
    </div>
