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
        <section>
            <?php include($widgets."darkplanet.php") ?>
        </section>
        <h1>ini home</h1>
    </body>
</html>