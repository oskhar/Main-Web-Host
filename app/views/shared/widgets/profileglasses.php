<?php

if (
    !isset($controller) ||
    empty($controller->foto_profile) ||
    empty($controller->isi_profile)
)
    die (" (profileglasses.php) requirement controller not complite");

?>
<div id="boxglasses">
    <img src="<?= $constructor->foto_profile ?> " alt="foto profile">
    <p><?= $boxglasses->isi_profile ?></p>
</div>