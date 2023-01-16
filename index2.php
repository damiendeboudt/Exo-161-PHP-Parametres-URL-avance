<?php

$_GET['Nom'] = "Nemare";
$_GET["prenom"] = "Jean";

if(isset( $_GET['age']) === false) {
    echo $_GET['age'];
} else {
    echo "oupsssss, il manque quelque chose";
}