<link href="velox.css" rel="stylesheet" type="text/css" />
<?php

$mysqlyhteys = mysql_connect("localhost", "root", "ferro") or die("Yhdist�minen ei onnistunut!");
mysql_select_db("medipostit", $mysqlyhteys) or die("Tietokantaa ei l�ytynyt!");

$aloitus = mysql_real_escape_string(stripslashes($_GET['aloitus']));
$lopetus = mysql_real_escape_string(stripslashes($_GET['lopetus']));
$yritysid = mysql_real_escape_string(stripslashes($_GET['yritysid']));

//include ("ylatunniste.php");
include ("kuljetuspalvelut.php");
include ("varastopalvelut.php");
include ("ostotilaukset.php");
include ("varastointi.php");

//include ("alatunniste.php");
?>