<?php
/**
 * HTML Header
 */
// deprécié
if (!defined('IN_SPYOGAME')) {
    die("Hacking attempt");
}
?>
<?php
/**
 * HTML Header
 */
// deprécié
if (!defined('IN_SPYOGAME')) {
    die("Hacking attempt");
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo($lang['HEAD_LANGUAGE']); ?>" lang="<?php echo($lang['HEAD_LANGUAGE']); ?>">
<head>
    <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=UTF-8"/>
    <meta name="language" content="<?php echo($lang['HEAD_LANGUAGE']); ?>"/>
    <title><?php echo $server_config["servername"] . " - OGSpy " . $server_config["version"]; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
    <link rel="icon" type="image/icon" href="favicon.ico"/>


    <!-- old skin-->
    <link rel="stylesheet" type="text/css" href="./skin/OGSpy_skin/formate.css"/>
    <!-- sera remplacer par !-->
    <link rel="stylesheet" type="text/css" href="./skin/src/default/ogspy.css"/>


    <!-- Ajout des scripts Graphique (highcharts), jquery et prototype-->
    <link rel="stylesheet" type="text/css" href="vendor/tooltipster/tooltipster/dist/css/tooltipster.bundle.min.css"/>
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/highcharts.js"></script>
    <script type="text/javascript" src="vendor/tooltipster/tooltipster/dist/js/tooltipster.bundle.min.js"></script>

</head>
<body>
<div class="main">
    <div class="ban"> <!--logo ogsteam !-->
        <!--<img src="./skin/OGSpy_skin/<?php echo  $banner_selected; ?>">-->
    </div>



