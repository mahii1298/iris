<?php
// Practical Examination Scope Table Component (Page 4 of Client PDF)
?>
<div class="card border shadow-sm rounded-3 overflow-hidden mb-4">
    <div class="card-header bg-light py-3 px-4 d-flex justify-content-between align-items-center flex-wrap gap-2">
        <div>
            <span class="badge bg-primary px-3 py-1 font-mono text-uppercase mb-1">ASNT 9712 LEVEL –II</span>
            <h4 class="mb-0 fs-5 font-display" style="color: var(--iris-navy);">
                Practical Examination & Training Scope Across All Sectors
            </h4>
        </div>
        <span class="badge bg-warning-subtle text-dark border border-warning px-3 py-1 fw-semibold">
            Welding, Casting & Forging (In One Exam)
        </span>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered mb-0 align-middle">
            <thead style="background-color: var(--iris-navy); color: #FFFFFF;" class="text-center font-heading">
                <tr>
                    <th rowspan="2" class="align-middle px-3 py-3" style="width: 12%;">NDT Methods</th>
                    <th rowspan="2" class="align-middle px-3 py-3" style="width: 25%;">Techniques</th>
                    <th colspan="3" class="py-2">Scope of Training & Examination</th>
                </tr>
                <tr style="background-color: #1E293B; font-size: 0.8rem; letter-spacing: 0.05em;">
                    <th class="py-2 px-3" style="width: 21%;">WELDING</th>
                    <th class="py-2 px-3" style="width: 21%;">CASTING</th>
                    <th class="py-2 px-3" style="width: 21%;">FORGING</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($practicalMatrix as $p): ?>
                    <tr>
                        <td class="text-center fw-bold fs-5 px-3 py-3 text-primary font-mono" style="background-color: var(--iris-ice);">
                            <?= htmlspecialchars($p['method']) ?>
                        </td>
                        <td class="px-3 py-3 fw-medium">
                            <?= htmlspecialchars($p['techniques']) ?>
                        </td>
                        <td class="px-3 py-3 text-dark bg-white">
                            <span class="d-inline-flex align-items-center gap-1">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="var(--iris-blue)" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>
                                <?= htmlspecialchars($p['welding']) ?>
                            </span>
                        </td>
                        <td class="px-3 py-3 text-dark bg-white">
                            <span class="d-inline-flex align-items-center gap-1">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="var(--iris-blue)" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>
                                <?= htmlspecialchars($p['casting']) ?>
                            </span>
                        </td>
                        <td class="px-3 py-3 text-dark bg-white">
                            <span class="d-inline-flex align-items-center gap-1">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="var(--iris-blue)" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>
                                <?= htmlspecialchars($p['forging']) ?>
                            </span>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="card-footer bg-light px-4 py-3 small text-muted">
        <strong>Important Exam Criteria:</strong> Certification will not be issued until successful completion of the examination and the required training is achieved. Training in accordance with ASNT 9712 (ISO 9712) and ends with certification examination.
    </div>
</div>
