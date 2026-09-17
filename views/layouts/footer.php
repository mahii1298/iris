    <!-- Institutional Footer -->
    <footer class="footer-iris">
        <div class="container">
            <div class="row g-4">
                <!-- Col 1: About ATC -->
                <div class="col-lg-4 col-md-6">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <div style="width: 36px; height: 36px; border-radius: 6px; background: #0052CC; color: #FFFFFF; font-family: var(--font-display); font-weight: 800; font-size: 1.1rem; display: flex; align-items: center; justify-content: center;">
                            IR
                        </div>
                        <h3 class="text-white fs-4 mb-0 font-display">IRIS<span>.</span></h3>
                    </div>
                    <p style="font-size: 0.875rem; line-height: 1.7; color: #CBD5E1;">
                        <strong>Introducing Integrity Reliability Inspection Service</strong>. An Authorized Training Centre (ATC) for ASNT 9712 (ISO 9712) since 2024, standardized with ISO 9001:2015 certifications. Providing world-class NDT training & third-party inspection services.
                    </p>
                    <div class="mt-3">
                        <span class="badge bg-success-subtle text-success border border-success-subtle px-3 py-2 rounded-pill fw-semibold" style="font-size: 0.75rem;">
                            ASNT ATC Accredited // ISO 9712:2021
                        </span>
                    </div>
                </div>

                <!-- Col 2: ASNT 9712 Courses -->
                <div class="col-lg-2 col-md-6 col-6">
                    <h4>ASNT 9712</h4>
                    <ul>
                        <li><a href="index.php?page=courses">Ultrasonic Testing (UT)</a></li>
                        <li><a href="index.php?page=courses">Radiography Testing (RT)</a></li>
                        <li><a href="index.php?page=courses">Magnetic Particle (MT)</a></li>
                        <li><a href="index.php?page=courses">Liquid Penetrant (PT)</a></li>
                        <li><a href="index.php?page=courses">Visual Testing (VT)</a></li>
                        <li><a href="index.php?page=courses">ASNT Level III</a></li>
                    </ul>
                </div>

                <!-- Col 3: Services -->
                <div class="col-lg-3 col-md-6 col-6">
                    <h4>Inspection Services</h4>
                    <ul>
                        <li><a href="index.php?page=services">Third Party Inspection (TPI)</a></li>
                        <li><a href="index.php?page=services">Welder Qualification Test (WQT)</a></li>
                        <li><a href="index.php?page=services">Welding & Painting Inspection</a></li>
                        <li><a href="index.php?page=services">Boilers & Pressure Vessels</a></li>
                        <li><a href="index.php?page=services">In-Service Pipeline Testing</a></li>
                        <li><a href="index.php?page=schedule">2024 Exam Schedules</a></li>
                    </ul>
                </div>

                <!-- Col 4: Facility & Exam Locations -->
                <div class="col-lg-3 col-md-6">
                    <h4>Training & Exam Centres</h4>
                    <div class="mb-3" style="font-size: 0.85rem; color: #CBD5E1;">
                        <strong class="d-block text-white mb-1">Trichy Training Facility:</strong>
                        <span><?= COMPANY_ADDRESS ?></span>
                    </div>
                    <div class="mb-3" style="font-size: 0.85rem; color: #CBD5E1;">
                        <strong class="d-block text-white mb-1">Examination Venue:</strong>
                        <span class="text-info"><?= EXAM_CENTRE ?></span>
                    </div>
                    <div style="font-size: 0.85rem; color: #CBD5E1;">
                        <strong class="d-block text-white mb-1">Direct Contact:</strong>
                        <a href="tel:<?= CONTACT_PHONE ?>" class="d-block text-white fw-semibold"><?= CONTACT_PHONE ?></a>
                        <a href="mailto:<?= CONTACT_EMAIL ?>" class="d-block text-white-50"><?= CONTACT_EMAIL ?></a>
                    </div>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom-iris d-flex flex-wrap justify-content-between align-items-center gap-2">
                <div>
                    &copy; <?= date('Y') ?> IRIS - Integrity Reliability Inspection Service. All rights reserved.
                </div>
                <div class="text-white-50">
                    ISO 9001:2015 Certified | ASNT 9712 Authorized Training Centre
                </div>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp Action Button -->
    <a href="https://wa.me/<?= CONTACT_PHONE_RAW ?>?text=Hello%20IRIS%20Trichy,%20I%20am%20enquiring%20about%20your%20ASNT%209712%20training%20and%20inspection%20services." 
       target="_blank" 
       class="floating-wa-btn" 
       title="Chat with IRIS on WhatsApp" 
       aria-label="WhatsApp Contact">
        <svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor">
            <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/>
        </svg>
    </a>

    <!-- Course Detail Reusable Modal -->
    <?php require_once __DIR__ . '/../components/enquiry-modal.php'; ?>

    <!-- Bootstrap 5.3.3 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <!-- Application JS -->
    <script src="assets/js/app.js"></script>
</body>
</html>
