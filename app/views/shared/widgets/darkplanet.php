<!-- Library -->
<link rel="stylesheet" href="<?= $css ?>darkplanet.css">
<script src="<?= $js ?>darkplanet.js"></script>

<!-- Component -->
<div id="darkplanet">
    <div id="planet"></div>
    <div id="inside"></div>
    <div id="sabuk_asteroid">
        <?php for ($i = 0; $i < 8; $i++): ?>
            <div id="asteroid<?= $i ?>"></div>
        <?php endfor; ?>
    </div>
    <div id="light"></div>
</div>