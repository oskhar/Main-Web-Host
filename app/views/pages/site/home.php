<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include($widgets."header.php"); ?>
    </head>
    <body>
        <main>
            <nav>
                <?php include($widgets."navbar.php") ?>
            </nav>
            <section>
                <?php include($widgets."darkplanet.php") ?>
            </section>
            <section>
                <?php include($widgets."kontrolpesawat.php") ?>
            </section>
        </main>
    </body>
    <script src="<?= $js ?><?= $nameFile ?>.js"></script>
</html>