<?php
$_GET['semaine'] = "12";
$number = intval($_GET["semaine"]);


if(isset($number)) {
    echo $number;
}