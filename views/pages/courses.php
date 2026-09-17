<?php
require_once __DIR__ . '/../layouts/header.php';
require_once __DIR__ . '/../layouts/navbar.php';
?>

<main class="py-5">
    <div class="container">
        <!-- Page Title & Header -->
        <div class="text-center mb-5">
            <span class="badge-atc verified mb-2">ASNT 9712 PROGRAM (ISO 9712)</span>
            <h1 class="fs-1 font-display" style="color: var(--iris-navy);">Certified by ASNT Certification</h1>
            <p class="text-muted mx-auto" style="max-width: 750px;">
                The ASNT 9712 Program certifies NDT personnel through examination following an independent, globally recognized body. Designed to meet the requirements of <strong>ISO Standard 9712:2021</strong>.
            </p>
            <div class="alert alert-primary d-inline-block py-2 px-4 rounded-pill border-0 shadow-sm small">
                <strong>IRIS - Authorized Training Centre (ATC):</strong> Training at Trichy facility | Examinations at ASNT India facility, Chennai.
            </div>
        </div>

        <!-- Filter Pills -->
        <div class="d-flex justify-content-center gap-2 flex-wrap mb-5">
            <button class="btn btn-course-filter active btn-iris-primary" data-filter="all">All Programs</button>
            <button class="btn btn-course-filter btn-iris-outline" data-filter="asnt9712">ASNT 9712 / ISO 9712</button>
            <button class="btn btn-course-filter btn-iris-outline" data-filter="qaqc">QA/QC & Other Courses</button>
        </div>

        <!-- ASNT 9712 Courses Grid -->
        <div class="row g-4 mb-5">
            <?php foreach ($courses as $c): ?>
                <div class="col-lg-4 col-md-6 course-filter-item" data-category="asnt9712">
                    <div class="card-iris">
                        <div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="badge bg-primary px-3 py-1 font-mono text-uppercase"><?= htmlspecialchars($c['code']) ?></span>
                                <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-2 py-1 font-mono small"><?= htmlspecialchars($c['level']) ?></span>
                            </div>
                            <h3 class="fs-5 font-display mb-2 text-dark"><?= htmlspecialchars($c['name']) ?></h3>
                            <div class="p-2 bg-light rounded border small mb-3">
                                <strong class="text-primary d-block">Training Requirement:</strong>
                                <span><?= htmlspecialchars($c['duration']) ?> (<?= htmlspecialchars($c['daily_hours']) ?>)</span>
                            </div>
                            <p class="text-secondary small mb-3"><?= htmlspecialchars($c['description']) ?></p>
                            <p class="text-muted small mb-3"><strong>Techniques:</strong> <?= htmlspecialchars($c['techniques']) ?></p>
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
                                View Full Syllabus
                            </button>
                            <a href="https://wa.me/<?= CONTACT_PHONE_RAW ?>?text=Hello%20IRIS,%20I%20want%20to%20register%20for%20<?= urlencode($c['name']) ?>." target="_blank" class="btn btn-sm btn-iris-primary">
                                Enquire
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <!-- Other Courses (Welding Inspection, Painting, Level III) -->
            <?php foreach ($otherCourses as $oc): ?>
                <div class="col-lg-4 col-md-6 course-filter-item" data-category="qaqc">
                    <div class="card-iris" style="border-top: 4px solid var(--iris-blue);">
                        <div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="badge bg-secondary-subtle text-secondary px-3 py-1 font-mono small"><?= htmlspecialchars($oc['badge']) ?></span>
                                <span class="badge bg-warning-subtle text-dark border px-2 py-1 small"><?= htmlspecialchars($oc['category']) ?></span>
                            </div>
                            <h3 class="fs-5 font-display mb-2 text-dark"><?= htmlspecialchars($oc['title']) ?></h3>
                            <p class="text-secondary small mb-4"><?= htmlspecialchars($oc['description']) ?></p>
                        </div>
                        <div class="pt-3 border-top">
                            <a href="https://wa.me/<?= CONTACT_PHONE_RAW ?>?text=Hello%20IRIS,%20I%20want%20more%20information%20about%20the%20<?= urlencode($oc['title']) ?>." target="_blank" class="btn btn-iris-outline w-100 text-center">
                                Enquire on WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Scope of Training & Practical Table -->
        <div class="my-5">
            <div class="text-center mb-4">
                <span class="badge-atc mb-2">Practical Competency Matrix</span>
                <h2 class="fs-3 font-display" style="color: var(--iris-navy);">Welding, Casting & Forging (In One Exam)</h2>
            </div>
            <?php require __DIR__ . '/../components/practical-table.php'; ?>
        </div>
    </div>
</main>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>
