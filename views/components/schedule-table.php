<?php
// Schedule Table Component
?>
<div class="schedule-table-wrapper">
    <?php foreach ($schedules as $idx => $batch): ?>
        <div class="card border mb-4 shadow-sm rounded-3 overflow-hidden">
            <div class="card-header bg-primary text-white py-3 px-4 d-flex justify-content-between align-items-center flex-wrap gap-2" style="background-color: var(--iris-navy) !important;">
                <div class="d-flex align-items-center gap-2">
                    <span class="badge bg-primary px-3 py-2 text-uppercase fw-bold font-mono">ASNT 9712</span>
                    <h5 class="mb-0 text-white font-display fs-5"><?= htmlspecialchars($batch['batch_name']) ?></h5>
                </div>
                <span class="badge bg-success-subtle text-success border border-success-subtle px-3 py-1 fw-semibold">
                    Registration Open
                </span>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-striped mb-0 align-middle">
                    <thead class="table-light">
                        <tr class="text-uppercase font-heading" style="font-size: 0.8rem; letter-spacing: 0.05em; color: var(--iris-navy);">
                            <th class="py-3 px-4">NDT Method</th>
                            <th class="py-3 px-4">Training Dates (Trichy)</th>
                            <th class="py-3 px-4">Examination Date (Chennai)</th>
                            <th class="py-3 px-4 text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($batch['schedules'] as $s): ?>
                            <tr>
                                <td class="py-3 px-4 fw-bold" style="color: var(--iris-navy);">
                                    <div class="d-flex align-items-center gap-2">
                                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--iris-blue)" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                                        <span><?= htmlspecialchars($s['method']) ?></span>
                                    </div>
                                </td>
                                <td class="py-3 px-4">
                                    <span class="badge bg-primary-subtle text-primary px-3 py-2 rounded-pill font-mono fs-6 fw-semibold">
                                        <?= htmlspecialchars($s['training_dates']) ?>
                                    </span>
                                </td>
                                <td class="py-3 px-4">
                                    <span class="badge bg-danger-subtle text-danger px-3 py-2 rounded-pill font-mono fs-6 fw-semibold">
                                        <?= htmlspecialchars($s['exam_date']) ?>
                                    </span>
                                </td>
                                <td class="py-3 px-4 text-end">
                                    <a href="https://wa.me/<?= CONTACT_PHONE_RAW ?>?text=Hello%20IRIS,%20I%20want%20to%20register%20for%20<?= urlencode($s['method'] . ' - ' . $batch['batch_name']) ?>." 
                                       target="_blank" 
                                       class="btn btn-sm btn-iris-primary px-3 py-1 text-nowrap">
                                        Register Now
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="card-footer bg-light py-2 px-4 text-muted small d-flex justify-content-between flex-wrap gap-2">
                <span><strong>Training Centre:</strong> <?= TRAINING_CENTRE ?></span>
                <span class="text-primary"><strong>Examination Centre:</strong> <?= EXAM_CENTRE ?></span>
            </div>
        </div>
    <?php endforeach; ?>
</div>
