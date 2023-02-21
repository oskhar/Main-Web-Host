<!-- Library -->
<link rel="stylesheet" href="<?= $css ?>darkplanet.css">
<script src="<?= $js ?>darkplanet.js"></script>

<!-- Component -->
<div id="area_darkplanet">
    <div id="darkplanet"></div>
    <div id="isiDarkplanet"></div>
    <div id="sabukAsteroid">
        <?php for ($i = 0; $i < 8; $i++): ?>
            <div id="asteroid<?= $i ?>"></div>
        <?php endfor; ?>
    </div>
</div>