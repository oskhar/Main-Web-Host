<?php

// Mengakses controller
include("app/core/controllers/". $nameFile ."_controller.php");

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include($widgets."header.php"); ?>
    </head>
    <body>
        <h1><?= $js ?></h1>
        <section>
            <?php include($widgets."darkplanet.php") ?>
        </section>
    </body>
</html>