<?php
require_once __DIR__ . '/../layouts/header.php';
require_once __DIR__ . '/../layouts/navbar.php';
?>

<main class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <span class="badge-atc verified mb-2">TRAINING & EXAMINATION TIMETABLE</span>
            <h1 class="fs-1 font-display" style="color: var(--iris-navy);">ASNT 9712 Schedule 2024</h1>
            <p class="text-muted mx-auto" style="max-width: 700px;">
                Find upcoming batches for Magnetic Particle Testing (MT), Liquid Penetrant Testing (PT), and Ultrasonic Testing (UT). 
                Training sessions take place at the <strong>IRIS Trichy facility</strong>; certification exams are held at the <strong>ASNT India facility in Chennai</strong>.
            </p>
        </div>

        <div class="row justify-content-center mb-5">
            <div class="col-lg-10">
                <?php require __DIR__ . '/../components/schedule-table.php'; ?>
            </div>
        </div>

        <!-- Registration CTA Card -->
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="p-4 p-md-5 rounded-3 text-center text-white" style="background-color: var(--iris-navy);">
                    <h3 class="font-display fs-3 text-white mb-3">Reserve Your Batch Seat</h3>
                    <p class="text-white-50 mx-auto mb-4" style="max-width: 500px;">
                        Batches maintain strict student-to-instrument ratios for optimal practical defect evaluation. Book early to secure your examination slot.
                    </p>
                    <a href="https://wa.me/<?= CONTACT_PHONE_RAW ?>?text=Hello%20IRIS%20Trichy,%20I%20want%20to%20register%20for%20an%20ASNT%209712%20upcoming%20batch." target="_blank" class="btn btn-iris-primary btn-lg px-4 py-3">
                        Register Now via WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>
