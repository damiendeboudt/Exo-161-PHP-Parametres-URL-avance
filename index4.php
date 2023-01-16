<?php
$_GET['langage'] = "PHP";
$_GET["serveur"] = "LAMP";

if(isset($_GET["langage"], $_GET['serveur'])) {
    echo $_GET['language'] . $_GET['serveur'];
}