<?php

$date1 = "2016/05/02";
$date2 = "2016/11/27";

$_GET['dateDebut'] = $date1;
$_GET["dateFin"] = $date2;

if(isset($_GET["dateDebut"], $_GET['dateFin'])) {
    echo $_GET['dateDebut'] . $_GET['dateFin'];
}