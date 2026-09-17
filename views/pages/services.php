<?php
require_once __DIR__ . '/../layouts/header.php';
require_once __DIR__ . '/../layouts/navbar.php';
?>

<main class="py-5">
    <div class="container">
        <!-- Page Title -->
        <div class="text-center mb-5">
            <span class="badge-atc mb-2">COMMERCIAL INSPECTION & TESTING</span>
            <h1 class="fs-1 font-display" style="color: var(--iris-navy);">Third Party Inspection & Engineering Services</h1>
            <p class="text-muted mx-auto" style="max-width: 720px;">
                Providing adaptable, ISO 9001:2015 certified Non-Destructive Testing and Quality Surveillance across power plants, refineries, pipelines, sugar mills, and heavy engineering sectors.
            </p>
        </div>

        <!-- Services Grid -->
        <div class="row g-4 mb-5">
            <?php foreach ($services as $s): ?>
                <div class="col-lg-6">
                    <div class="card-iris p-4 p-md-5">
                        <div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-3 py-1 font-mono small fw-bold">
                                    <?= htmlspecialchars($s['badge']) ?>
                                </span>
                            </div>
                            <h2 class="fs-4 font-display mb-3 text-dark"><?= htmlspecialchars($s['title']) ?></h2>
                            <p class="text-secondary mb-4" style="line-height: 1.7;"><?= htmlspecialchars($s['description']) ?></p>
                            
                            <h5 class="fs-6 fw-bold text-dark mb-2">Scope of Services:</h5>
                            <ul class="list-unstyled d-flex flex-column gap-2 mb-4 text-dark small">
                                <?php foreach ($s['features'] as $f): ?>
                                    <li class="d-flex align-items-center gap-2">
                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--iris-blue)" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg>
                                        <span><?= htmlspecialchars($f) ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="pt-3 border-top">
                            <a href="https://wa.me/<?= CONTACT_PHONE_RAW ?>?text=Hello%20IRIS,%20we%20require%20inspection%20services%20for%20<?= urlencode($s['title']) ?>." target="_blank" class="btn btn-iris-primary w-100 text-center">
                                Request Immediate Quotation (RFQ)
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Client Roster Showcase -->
        <div class="my-5 p-4 p-md-5 bg-white rounded-3 border shadow-sm">
            <div class="text-center mb-4">
                <span class="badge-atc verified mb-2">CLIENT ACCREDITATIONS</span>
                <h2 class="fs-2 font-display" style="color: var(--iris-navy);">Industrial Clients & Projects</h2>
                <p class="text-muted mx-auto" style="max-width: 600px;">
                    Our certified inspection and testing solutions are trusted by leading public and private enterprises:
                </p>
            </div>

            <div class="row g-3">
                <?php foreach ($clients as $cl): ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="p-3 bg-light rounded-3 border d-flex align-items-center gap-3 h-100">
                            <div style="width: 36px; height: 36px; border-radius: 50%; background: var(--iris-ice); display: flex; align-items: center; justify-content: center; color: var(--iris-blue); flex-shrink: 0;">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>
                            </div>
                            <div>
                                <strong class="d-block text-dark small"><?= htmlspecialchars($cl['name']) ?></strong>
                                <span class="text-muted" style="font-size: 0.75rem;"><?= htmlspecialchars($cl['location']) ?> &bull; <?= htmlspecialchars($cl['category']) ?></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</main>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>
