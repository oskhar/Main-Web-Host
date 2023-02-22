<?php

try {
    $listBorder = [
        "border: 3px solid white; border-top: 3px solid transparent; border-bottom: 3px solid transparent; border-right: 3px solid transparent;",
        "border: 3px solid white; border-bottom: 3px solid transparent; border-right: 3px solid transparent;",
        "border: 3px solid white; border-left: 3px solid transparent;",
        "border: 3px solid white; border-top: 3px solid transparent;",
        "border: 3px solid white; border-bottom: 3px solid transparent;",
        "border: 3px solid white; border-left: 3px solid transparent;"
    ];
    $listOpacity = [0.8,0.7,0.6,0.5];
    $listDuration = [];
    for ($i=13; $i <= 24; $i++)
        array_push($listDuration, $i);
    
    shuffle($listDuration);
    shuffle($listOpacity);

} catch (\Throwable $er) {
    echo (" (darkplanet.php) persiapan data error: " . $er);

}

?>

<!-- Library -->
<link rel="stylesheet" href="<?= $css ?>darkplanet.css">
<script src="<?= $js ?>darkplanet.js"></script>

<!-- Component -->
<div id="darkplanet">
    <div id="planet"></div>
    <div id="inside"></div>
    <div id="sabuk_asteroid">
        <?php for ($i = 0; $i < 10; $i++): ?>
            <?php shuffle($listBorder); ?>
            <div id="asteroid<?= $i ?>" style="
                <?= $listBorder[0]; ?>opacity: <?= $listOpacity[0] ?>;
                left: <?php if ($i <= 6) {	echo -7*$i;}else{	echo -9*$i;}?>px;
                top: <?php if ($i <= 6) {	echo -7*$i;}else{	echo -9*$i;}?>px;
                width: <?php if ($i <= 6) {	echo 300+(14*$i);}else{	echo 300+(18*$i);}?>px;
                height: <?php if ($i <= 6) {	echo 300+(14*$i);}else{	echo 300+(18*$i);}?>px;
                animation: darkplanet_asteroid <?=($listDuration[0]) ?>s linear infinite;">
            </div>
        <?php endfor; ?>
    </div>
    <div id="light"></div>
</div>