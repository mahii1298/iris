<nav class="navbar navbar-expand-lg navbar-iris sticky-top">
    <div class="container">
        <!-- Brand Logo -->
        <a class="navbar-brand d-flex align-items-center gap-2 text-decoration-none" href="index.php">
            <div style="width: 44px; height: 44px; border-radius: 8px; background: linear-gradient(135deg, var(--iris-blue) 0%, #1E40AF 100%); color: #FFFFFF; font-family: var(--font-display); font-weight: 800; font-size: 1.3rem; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 12px rgba(0, 82, 204, 0.25);">
                IR
            </div>
            <div class="d-flex flex-column">
                <span class="fw-bold fs-4 text-dark lh-1" style="font-family: var(--font-display); letter-spacing: -0.02em;">
                    IRIS<span style="color: var(--iris-blue);">.</span>
                </span>
                <span class="text-uppercase fw-semibold text-muted" style="font-size: 0.65rem; letter-spacing: 0.08em;">
                    ATC for ASNT 9712 (ISO 9712)
                </span>
            </div>
        </a>

        <!-- Mobile Toggle Button -->
        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#irisNav" aria-controls="irisNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Nav Links -->
        <div class="collapse navbar-collapse" id="irisNav">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-lg-1">
                <li class="nav-item">
                    <a class="nav-link nav-link-iris <?= ($activeNav ?? '') === 'home' ? 'active' : '' ?>" href="index.php?page=home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-iris <?= ($activeNav ?? '') === 'courses' ? 'active' : '' ?>" href="index.php?page=courses">ASNT 9712 Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-iris <?= ($activeNav ?? '') === 'schedule' ? 'active' : '' ?>" href="index.php?page=schedule">Batch Schedule</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-iris <?= ($activeNav ?? '') === 'services' ? 'active' : '' ?>" href="index.php?page=services">Inspection Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-iris <?= ($activeNav ?? '') === 'about' ? 'active' : '' ?>" href="index.php?page=about">About ATC</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-iris <?= ($activeNav ?? '') === 'contact' ? 'active' : '' ?>" href="index.php?page=contact">Contact</a>
                </li>
            </ul>

            <!-- Nav Actions -->
            <div class="d-flex align-items-center gap-2">
                <a href="https://wa.me/<?= CONTACT_PHONE_RAW ?>?text=Hello%20IRIS%20Trichy,%20I%20would%20like%20to%20enquire%20or%20register%20for%20the%20ASNT%209712%20course." target="_blank" class="btn btn-iris-primary btn-sm px-3 py-2">
                    <span>Enquire / Register</span>
                </a>
            </div>
        </div>
    </div>
</nav>
