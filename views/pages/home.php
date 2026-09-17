<?php
require_once __DIR__ . '/../layouts/header.php';
require_once __DIR__ . '/../layouts/navbar.php';
?>

<main>
    <!-- Hero Section -->
    <section class="hero-iris-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-7">
                    <div class="d-flex flex-wrap gap-2 mb-3">
                        <span class="badge-atc verified">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                            ASNT Authorized Training Centre (ATC)
                        </span>
                        <span class="badge-atc">
                            ISO 9712:2021 Standard
                        </span>
                        <span class="badge-atc">
                            ISO 9001:2015 Certified
                        </span>
                    </div>

                    <h1 class="hero-iris-title">
                        ASNT 9712 Program (ISO 9712)<br>
                        <span style="color: var(--iris-blue);">Certified by ASNT Certification.</span>
                    </h1>

                    <p class="hero-iris-desc">
                        The ASNT 9712 Program certifies NDT personnel through examination following an independent, globally recognized body. 
                        <strong>IRIS - an Authorized Training Centre (ATC)</strong> provides premier training for <strong>ASNT 9712 Level –II and Level –III</strong> at its Trichy facility, with examinations held at the <strong>ASNT India facility in Chennai</strong>.
                    </p>

                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <a href="index.php?page=schedule" class="btn btn-iris-primary">
                            <span>View 2024 Batch Schedule</span>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </a>
                        <a href="index.php?page=courses" class="btn btn-iris-outline">
                            <span>Explore Courses & Syllabi</span>
                        </a>
                    </div>

                    <!-- Sector Coverage Tagline -->
                    <div class="p-3 bg-white rounded-3 border shadow-sm d-flex align-items-center gap-3">
                        <div style="width: 40px; height: 40px; border-radius: 50%; background: var(--iris-ice); display: flex; align-items: center; justify-content: center; color: var(--iris-blue); flex-shrink: 0;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                        </div>
                        <div class="small">
                            <strong class="text-dark d-block">Get Certified in all Techniques & Sectors:</strong>
                            <span class="text-muted">WELDING, CASTING, FORGING — IN ONE EXAM</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="hero-iris-frame">
                        <img src="assets/images/hero-ndt.jpg" alt="IRIS NDT Inspection and Training Facility">
                        <div class="hero-iris-badge-overlay">
                            <div>
                                <strong class="d-block text-dark font-display fs-6">Trichy ATC Facility</strong>
                                <span class="small text-muted">ASNT 9712 Level II & III</span>
                            </div>
                            <span class="badge bg-primary px-3 py-2 text-uppercase font-mono">Exam: Chennai</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Institutional Metrics Strip -->
    <div class="container">
        <div class="metrics-strip">
            <div class="row g-0">
                <div class="col-lg-3 col-6 metric-col">
                    <div class="metric-val">
                        <span class="metric-val-num" data-count="8">0</span><span>+</span>
                    </div>
                    <span class="metric-txt">Years of Dedicated Training</span>
                </div>
                <div class="col-lg-3 col-6 metric-col">
                    <div class="metric-val">
                        <span class="metric-val-num" data-count="900">0</span><span>+</span>
                    </div>
                    <span class="metric-txt">NDT & Welding Students Trained</span>
                </div>
                <div class="col-lg-3 col-6 metric-col">
                    <div class="metric-val">
                        <span class="metric-val-num" data-count="2024">0</span>
                    </div>
                    <span class="metric-txt">ASNT Approved Training Centre (ATC)</span>
                </div>
                <div class="col-lg-3 col-6 metric-col">
                    <div class="metric-val">
                        <span class="metric-val-num" data-count="100">0</span><span>%</span>
                    </div>
                    <span class="metric-txt">ISO 9712:2021 Compliance</span>
                </div>
            </div>
        </div>
    </div>

    <!-- For Student & For Industries Dual Showcase (Page 1 of Document) -->
    <section class="py-5 my-4">
        <div class="container">
            <div class="row g-4">
                <!-- For Student -->
                <div class="col-lg-6">
                    <div class="card-iris p-4 p-md-5">
                        <div>
                            <span class="badge-atc mb-3">Academic Excellence</span>
                            <h2 class="fs-3 font-display mb-3" style="color: var(--iris-navy);">For Student</h2>
                            <p class="text-secondary mb-4" style="line-height: 1.8;">
                                We specialise in developing and delivering <strong>NDT and WELDING training programmes for more than 8 years</strong>, and have trained over <strong>900+ students</strong> in NDT and WELDING inspection fields since 2016. Our training is well recognized in Indian industries and overseas. We have a dedicated team of highly qualified and experienced faculties.
                            </p>
                            <ul class="list-unstyled d-flex flex-column gap-2 mb-4 text-dark small">
                                <li class="d-flex align-items-center gap-2">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--iris-blue)" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg>
                                    <span>Practical hands-on training on real industrial defect samples</span>
                                </li>
                                <li class="d-flex align-items-center gap-2">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--iris-blue)" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg>
                                    <span>Authorized ATC preparation for ASNT 9712 Level II & III</span>
                                </li>
                                <li class="d-flex align-items-center gap-2">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--iris-blue)" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg>
                                    <span>Official examinations conducted at ASNT India facility, Chennai</span>
                                </li>
                            </ul>
                        </div>
                        <a href="index.php?page=courses" class="btn btn-iris-primary w-100 text-center">
                            Explore Student Programs & Syllabi
                        </a>
                    </div>
                </div>

                <!-- For Industries -->
                <div class="col-lg-6">
                    <div class="card-iris p-4 p-md-5">
                        <div>
                            <span class="badge-atc mb-3" style="background: #FEF3C7; border-color: #FDE68A; color: #B45309;">Plant Reliability</span>
                            <h2 class="fs-3 font-display mb-3" style="color: var(--iris-navy);">For Industries</h2>
                            <p class="text-secondary mb-4" style="line-height: 1.8;">
                                Non-Destructive Testing is the branch of engineering concerned with all methods of detecting and evaluating flaws in materials. Flaws affecting the serviceability of the material or structure, so NDT is important in guaranteeing safe operation as well as in quality control and assessing plant life. The flaws may be cracks or inclusions in welds and castings or variations in structure properties that can lead to loss of strength or failure in service. <strong>The essential feature of NDT is that the test process itself produces no deleterious effect on the materials or structure under stress.</strong>
                            </p>
                            <ul class="list-unstyled d-flex flex-column gap-2 mb-4 text-dark small">
                                <li class="d-flex align-items-center gap-2">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--iris-blue)" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg>
                                    <span>Third Party Inspection (TPI) for Boilers & Pressure Vessels</span>
                                </li>
                                <li class="d-flex align-items-center gap-2">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--iris-blue)" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg>
                                    <span>Welder Qualification Tests (WQT) up to 50mm thickness</span>
                                </li>
                                <li class="d-flex align-items-center gap-2">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--iris-blue)" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg>
                                    <span>Minimizing downtime with fast, consistent & reliable inspection</span>
                                </li>
                            </ul>
                        </div>
                        <a href="index.php?page=services" class="btn btn-iris-outline w-100 text-center">
                            Request Industrial Inspection (TPI)
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ASNT 9712 Core Courses Section (Page 3 & 5 of Document) -->
    <section class="py-5 bg-white border-top border-bottom">
        <div class="container">
            <div class="text-center mb-5">
                <span class="badge-atc mb-2">Curriculum Standards</span>
                <h2 class="fs-2 font-display" style="color: var(--iris-navy);">ASNT 9712 / ISO 9712 NDT Courses</h2>
                <p class="text-muted mx-auto" style="max-width: 650px;">
                    Minimum required duration of training which includes both theoretical and practical coursework at our Trichy laboratory.
                </p>
            </div>

            <div class="row g-4 mb-5">
                <?php foreach ($courses as $c): ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="card-iris">
                            <div>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="badge bg-primary-subtle text-primary px-3 py-1 font-mono small fw-bold">
                                        <?= htmlspecialchars($c['level']) ?>
                                    </span>
                                    <span class="badge bg-light text-dark border px-2 py-1 font-mono small">
                                        <?= htmlspecialchars($c['duration']) ?>
                                    </span>
                                </div>
                                <h3 class="fs-5 font-display mb-2 text-dark">
                                    <?= htmlspecialchars($c['name']) ?>
                                </h3>
                                <p class="text-muted small mb-3">
                                    <strong>Training Requirement:</strong> <?= htmlspecialchars($c['duration']) ?> (<?= htmlspecialchars($c['daily_hours']) ?>) theoretical & practical.
                                </p>
                                <p class="text-secondary small mb-4">
                                    <?= htmlspecialchars($c['description']) ?>
                                </p>
                            </div>
                            <div class="pt-3 border-top d-flex justify-content-between align-items-center">
                                <button type="button" 
                                        class="btn btn-sm btn-iris-outline" 
                                        onclick="openCourseModal(
                                            '<?= addslashes($c['name']) ?>', 
                                            '<?= addslashes($c['level']) ?>', 
                                            '<?= addslashes($c['duration']) ?>', 
                                            '<?= addslashes($c['daily_hours']) ?>', 
                                            '<?= addslashes($c['exam_centre']) ?>', 
                                            '<?= addslashes($c['description']) ?>', 
                                            '<?= addslashes($c['techniques']) ?>', 
                                            '<?= addslashes($c['sectors']) ?>'
                                        )">
                                    View Syllabus
                                </button>
                                <a href="https://wa.me/<?= CONTACT_PHONE_RAW ?>?text=Hello%20IRIS,%20I%20am%20interested%20in%20<?= urlencode($c['name']) ?>." target="_blank" class="btn btn-sm btn-iris-primary">
                                    Enquire
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Examination Inclusions Breakdown (Page 3 & 4 of Document) -->
            <div class="row g-4 align-items-stretch">
                <div class="col-lg-6">
                    <div class="p-4 bg-light rounded-3 border h-100">
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <span class="badge bg-primary px-3 py-1 font-mono">EXAMINATION SCOPE</span>
                            <h4 class="mb-0 fs-5 font-display text-dark">ASNT 9712 Level –II Examinations Include</h4>
                        </div>
                        <ul class="list-unstyled d-flex flex-column gap-3 text-secondary small mb-0">
                            <li class="d-flex align-items-start gap-2">
                                <span class="badge bg-primary rounded-circle p-1 mt-1"></span>
                                <div><strong>General Written Examination:</strong> Covers fundamentals, principles, and theory of the test method.</div>
                            </li>
                            <li class="d-flex align-items-start gap-2">
                                <span class="badge bg-primary rounded-circle p-1 mt-1"></span>
                                <div><strong>Specific Written Examination:</strong> Covers specific applications in accordance with codes and standards used in applicable industry sectors.</div>
                            </li>
                            <li class="d-flex align-items-start gap-2">
                                <span class="badge bg-primary rounded-circle p-1 mt-1"></span>
                                <div><strong>Practical Examination:</strong> Applicants must demonstrate ability to perform test method and technique on specimens containing known defects.</div>
                            </li>
                            <li class="d-flex align-items-start gap-2">
                                <span class="badge bg-primary rounded-circle p-1 mt-1"></span>
                                <div><strong>Instruction Preparation:</strong> Applicants must prepare written inspection instructions for the test method.</div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="p-4 bg-light rounded-3 border h-100">
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <span class="badge bg-dark px-3 py-1 font-mono">LEVEL –III SCOPE</span>
                            <h4 class="mb-0 fs-5 font-display text-dark">ASNT 9712 Level –III Examinations Include</h4>
                        </div>
                        <ul class="list-unstyled d-flex flex-column gap-3 text-secondary small mb-0">
                            <li class="d-flex align-items-start gap-2">
                                <span class="badge bg-dark rounded-circle p-1 mt-1"></span>
                                <div><strong>Basic Examination:</strong> Covers certification processes, materials and processes, and general knowledge of other NDT test methods.</div>
                            </li>
                            <li class="d-flex align-items-start gap-2">
                                <span class="badge bg-dark rounded-circle p-1 mt-1"></span>
                                <div><strong>Basic Supplemental Examination:</strong> Additional knowledge of examination requirements per ISO 9712:2021 for RT, UT, MT, PT.</div>
                            </li>
                            <li class="d-flex align-items-start gap-2">
                                <span class="badge bg-dark rounded-circle p-1 mt-1"></span>
                                <div><strong>Method Examination:</strong> Covers specific advanced knowledge of the test method.</div>
                            </li>
                            <li class="d-flex align-items-start gap-2">
                                <span class="badge bg-dark rounded-circle p-1 mt-1"></span>
                                <div><strong>Procedure Preparation Examination:</strong> Applicants are required to write an NDT procedure based on a supplied NDT standard.</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Practical Examination Matrix Section (Page 4 of Document) -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-4">
                <span class="badge-atc mb-2">Practical Competence</span>
                <h2 class="fs-2 font-display" style="color: var(--iris-navy);">Multi-Sector Practical Training Scope</h2>
                <p class="text-muted mx-auto" style="max-width: 600px;">
                    Pre and in-service inspection covering Welds, Castings, and Forgings.
                </p>
            </div>

            <?php require __DIR__ . '/../components/practical-table.php'; ?>
        </div>
    </section>

    <!-- Training & Examination Schedule (Page 2 of Document) -->
    <section class="py-5 bg-white border-top border-bottom" id="schedule">
        <div class="container">
            <div class="text-center mb-4">
                <span class="badge-atc mb-2">Schedule 2024</span>
                <h2 class="fs-2 font-display" style="color: var(--iris-navy);">ASNT 9712 Training & Examination Schedule</h2>
                <p class="text-muted mx-auto" style="max-width: 650px;">
                    Classes conducted at IRIS Trichy Facility. Examination held at ASNT India facility in Chennai.
                </p>
            </div>

            <?php require __DIR__ . '/../components/schedule-table.php'; ?>
        </div>
    </section>

    <!-- Industrial Inspection Services Overview (Page 6 of Document) -->
    <section class="py-5" id="services">
        <div class="container">
            <div class="text-center mb-5">
                <span class="badge-atc mb-2">Inspection Division</span>
                <h2 class="fs-2 font-display" style="color: var(--iris-navy);">Third Party Inspection & Testing Services</h2>
                <p class="text-muted mx-auto" style="max-width: 600px;">
                    Maximizing plant uptime by minimizing downtime through fast, consistent, and reliable inspection techniques.
                </p>
            </div>

            <div class="row g-4">
                <?php foreach ($services as $srv): ?>
                    <div class="col-lg-6">
                        <div class="card-iris p-4">
                            <div>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="badge bg-primary-subtle text-primary px-3 py-1 font-mono small fw-bold">
                                        <?= htmlspecialchars($srv['badge']) ?>
                                    </span>
                                </div>
                                <h3 class="fs-5 font-display mb-2 text-dark">
                                    <?= htmlspecialchars($srv['title']) ?>
                                </h3>
                                <p class="text-secondary small mb-3">
                                    <?= htmlspecialchars($srv['description']) ?>
                                </p>
                                <ul class="list-unstyled d-flex flex-column gap-2 mb-4 text-dark small">
                                    <?php foreach ($srv['features'] as $feat): ?>
                                        <li class="d-flex align-items-center gap-2">
                                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--iris-blue)" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg>
                                            <span><?= htmlspecialchars($feat) ?></span>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <a href="https://wa.me/<?= CONTACT_PHONE_RAW ?>?text=Hello%20IRIS,%20I%20would%20like%20a%20quotation%20for%20<?= urlencode($srv['title']) ?>." target="_blank" class="btn btn-iris-outline w-100 text-center">
                                Request Service Quotation (WhatsApp)
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Client Roster Showcase (Page 7 of Document) -->
    <section class="py-5 bg-white border-top border-bottom" id="clients">
        <div class="container text-center mb-3">
            <span class="badge-atc mb-2">Corporate Partners</span>
            <h2 class="fs-3 font-display" style="color: var(--iris-navy);">Trusted By Over 20+ Industrial Leaders</h2>
            <p class="text-muted small">Delivering certified inspection and training across heavy engineering, automotive, power, and sugar industries.</p>
        </div>

        <?php require __DIR__ . '/../components/client-marquee.php'; ?>
    </section>

    <!-- Registration / Inquiry Form (Page 8 of Document) -->
    <section class="py-5" id="enquiry">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5">
                    <span class="badge-atc mb-2">Official Communications</span>
                    <h2 class="fs-2 font-display mb-3" style="color: var(--iris-navy);">Enquiry or Register Now</h2>
                    <p class="text-secondary mb-4" style="line-height: 1.7;">
                        Connect directly with our training coordinators and inspection team to secure batch seats for ASNT 9712 Level II/III or request an industrial TPI inspection.
                    </p>

                    <div class="d-flex flex-column gap-3 mb-4">
                        <div class="d-flex align-items-start gap-3">
                            <div class="icon-box-iris mb-0" style="width: 44px; height: 44px;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            </div>
                            <div>
                                <strong class="d-block text-dark">Trichy Training Facility:</strong>
                                <span class="text-muted small"><?= COMPANY_ADDRESS ?></span>
                            </div>
                        </div>

                        <div class="d-flex align-items-start gap-3">
                            <div class="icon-box-iris mb-0" style="width: 44px; height: 44px;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                            </div>
                            <div>
                                <strong class="d-block text-dark">Phone & WhatsApp Hotline:</strong>
                                <a href="tel:<?= CONTACT_PHONE ?>" class="text-primary fw-bold text-decoration-none"><?= CONTACT_PHONE ?></a>
                            </div>
                        </div>

                        <div class="d-flex align-items-start gap-3">
                            <div class="icon-box-iris mb-0" style="width: 44px; height: 44px;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                            </div>
                            <div>
                                <strong class="d-block text-dark">Official Email:</strong>
                                <a href="mailto:<?= CONTACT_EMAIL ?>" class="text-secondary text-decoration-none"><?= CONTACT_EMAIL ?></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="card-iris p-4 p-md-5">
                        <h3 class="fs-4 font-display mb-4 text-dark">Quick Registration / Consultation</h3>
                        <form id="irisEnquiryForm">
                            <div class="row g-3 mb-3">
                                <div class="col-md-6">
                                    <label class="form-label small fw-bold text-dark" for="enqName">Full Name *</label>
                                    <input type="text" class="form-control" id="enqName" placeholder="Rajesh Kumar" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small fw-bold text-dark" for="enqPhone">WhatsApp Mobile *</label>
                                    <input type="tel" class="form-control" id="enqPhone" placeholder="+91 99446 74608" required>
                                </div>
                            </div>

                            <div class="row g-3 mb-3">
                                <div class="col-md-6">
                                    <label class="form-label small fw-bold text-dark" for="enqEmail">Email Address</label>
                                    <input type="email" class="form-control" id="enqEmail" placeholder="rajesh@company.com">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small fw-bold text-dark" for="enqType">Enquiry Type *</label>
                                    <select class="form-select" id="enqType">
                                        <option value="Student ASNT 9712 Course">Student: ASNT 9712 Certification</option>
                                        <option value="Corporate / Industry Training">Corporate / Industry Batch</option>
                                        <option value="Third Party Inspection (TPI)">Industrial Inspection (TPI)</option>
                                        <option value="Welder Qualification Test (WQT)">Welder Qualification (WQT)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label small fw-bold text-dark" for="enqCourse">Select Course / Service *</label>
                                <select class="form-select" id="enqCourse">
                                    <option value="Ultrasonic Testing (UT) - Level II (18 Days)">Ultrasonic Testing (UT) - Level II (18 Days)</option>
                                    <option value="Radiography Testing (RT with RTFI) - Level II (15 Days)">Radiography Testing (RT with RTFI) - Level II (15 Days)</option>
                                    <option value="Magnetic Particle Testing (MT) - Level II (5 Days)">Magnetic Particle Testing (MT) - Level II (5 Days)</option>
                                    <option value="Liquid Penetrant Testing (PT) - Level II (5 Days)">Liquid Penetrant Testing (PT) - Level II (5 Days)</option>
                                    <option value="Visual Inspection Testing (VT) - Level II (5 Days)">Visual Inspection Testing (VT) - Level II (5 Days)</option>
                                    <option value="ASNT Level III Preparatory Masterclass">ASNT Level III Preparatory Masterclass</option>
                                    <option value="Welding Inspection Course">Welding Inspection QA/QC Course</option>
                                    <option value="Painting Inspection Course">Painting Inspection QA/QC Course</option>
                                    <option value="Third Party Inspection (TPI)">Third Party Inspection (TPI)</option>
                                    <option value="Welder Qualification Test (WQT)">Welder Qualification Test (WQT)</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label class="form-label small fw-bold text-dark" for="enqMessage">Specific Questions or Requirements</label>
                                <textarea class="form-control" id="enqMessage" rows="3" placeholder="Tell us about your batch preference, educational background, or inspection scope..."></textarea>
                            </div>

                            <button type="submit" class="btn btn-iris-primary w-100 py-3">
                                <span>Submit & Connect on WhatsApp</span>
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" class="ms-2">
                                    <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>
