<?php
// Client Ticker Component
$allClients = \App\Models\Client::getAllClients();
?>
<div class="client-marquee-container py-3">
    <div class="client-marquee-track">
        <?php foreach ($allClients as $client): ?>
            <div class="client-chip shadow-sm">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="var(--iris-blue)"><circle cx="12" cy="12" r="10"/></svg>
                <div>
                    <strong><?= htmlspecialchars($client['name']) ?></strong>
                    <span class="d-block"><?= htmlspecialchars($client['location']) ?></span>
                </div>
            </div>
        <?php endforeach; ?>
        <!-- Duplicate loop for seamless continuous animation -->
        <?php foreach ($allClients as $client): ?>
            <div class="client-chip shadow-sm">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="var(--iris-blue)"><circle cx="12" cy="12" r="10"/></svg>
                <div>
                    <strong><?= htmlspecialchars($client['name']) ?></strong>
                    <span class="d-block"><?= htmlspecialchars($client['location']) ?></span>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
