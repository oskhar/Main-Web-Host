<?php

// Get data config
$tmp = file_get_contents("conf/config.json");
$dataConfig = json_decode($tmp, true);
$databaseConfig = $dataConfig['DATABASE_CONNECT'];


$profile = $dataConfig['PROFILE'];
$widgets = "app/views/shared/widgets/";
$css = "app/utils/css/";
$js = "app/utils/js/";

// Alokasi ke halaman yang dituju
$nameFile = $_GET["page"];
if (empty($nameFile))
    $nameFile = "home";
$halaman = "app/views/pages/site/" . $nameFile . ".php";

include($halaman);

?>
