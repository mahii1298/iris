<?php
require_once __DIR__ . '/../layouts/header.php';
require_once __DIR__ . '/../layouts/navbar.php';
?>

<main class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <span class="badge-atc mb-2">CONTACT US</span>
            <h1 class="fs-1 font-display" style="color: var(--iris-navy);">Enquiry or Register Now</h1>
            <p class="text-muted mx-auto" style="max-width: 650px;">
                Reach our team for ASNT 9712 batch admissions, corporate training proposals, or industrial Third-Party Inspection quotations.
            </p>
        </div>

        <div class="row g-5">
            <!-- Contact Info -->
            <div class="col-lg-5">
                <div class="card-iris p-4 p-md-5 h-100">
                    <div>
                        <h3 class="fs-4 font-display text-dark mb-4">Facility & Contact Details</h3>

                        <div class="d-flex align-items-start gap-3 mb-4">
                            <div class="icon-box-iris mb-0" style="width: 44px; height: 44px; flex-shrink: 0;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            </div>
                            <div>
                                <strong class="d-block text-dark">Address:</strong>
                                <span class="text-secondary"><?= COMPANY_ADDRESS ?></span>
                            </div>
                        </div>

                        <div class="d-flex align-items-start gap-3 mb-4">
                            <div class="icon-box-iris mb-0" style="width: 44px; height: 44px; flex-shrink: 0;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                            </div>
                            <div>
                                <strong class="d-block text-dark">Phone / WhatsApp:</strong>
                                <a href="tel:<?= CONTACT_PHONE ?>" class="text-primary fw-bold text-decoration-none fs-5"><?= CONTACT_PHONE ?></a>
                            </div>
                        </div>

                        <div class="d-flex align-items-start gap-3 mb-4">
                            <div class="icon-box-iris mb-0" style="width: 44px; height: 44px; flex-shrink: 0;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                            </div>
                            <div>
                                <strong class="d-block text-dark">Email:</strong>
                                <a href="mailto:<?= CONTACT_EMAIL ?>" class="text-secondary text-decoration-none"><?= CONTACT_EMAIL ?></a>
                            </div>
                        </div>

                        <div class="p-3 bg-light rounded-3 border">
                            <span class="badge bg-primary px-3 py-1 font-mono text-uppercase mb-2">OFFICIAL EXAMINATION VENUE</span>
                            <p class="mb-0 text-dark small">
                                <strong>ASNT India facility - Chennai</strong><br>
                                Official independent examinations under ASNT Certification for ISO 9712:2021.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Form -->
            <div class="col-lg-7">
                <div class="card-iris p-4 p-md-5">
                    <h3 class="fs-4 font-display text-dark mb-4">Send Enquiry / Register</h3>
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
                                <label class="form-label small fw-bold text-dark" for="enqType">Category *</label>
                                <select class="form-select" id="enqType">
                                    <option value="Student ASNT 9712 Course">Student ASNT 9712 Course</option>
                                    <option value="Corporate NDT Training">Corporate NDT Training</option>
                                    <option value="Third Party Inspection (TPI)">Third Party Inspection (TPI)</option>
                                    <option value="Welder Qualification (WQT)">Welder Qualification (WQT)</option>
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
                                <option value="Welding Inspection Course">Welding Inspection Course</option>
                                <option value="Painting Inspection Course">Painting Inspection Course</option>
                                <option value="Third Party Inspection (TPI)">Third Party Inspection (TPI)</option>
                                <option value="Welder Qualification Test (WQT)">Welder Qualification Test (WQT)</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="form-label small fw-bold text-dark" for="enqMessage">Requirements or Message</label>
                            <textarea class="form-control" id="enqMessage" rows="4" placeholder="Mention your batch preference or inspection specifications..."></textarea>
                        </div>

                        <button type="submit" class="btn btn-iris-primary w-100 py-3">
                            Submit & Connect via WhatsApp
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>
