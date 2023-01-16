<?php
$_GET['batiment'] = "12";
$_GET["salle"] = "101";
$number2 = intval($_GET['salle']);
$number = intval($_GET["semaine"]);


if(isset($number) && isset($number2)) {
    echo $number . $number2;
}