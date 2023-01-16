<?php

$_GET['Nom'] = "Nemare";
$_GET["prenom"] = "Jean";

if(isset($_GET["Nom"], $_GET['prenom'])) {
    echo $_GET['Nom'] . $_GET['prenom'];
}