<?php

$adresse = $_POST['adresse'] ?? "";
require_once "php/mes-fonctions.php";
if($adresse != "") {
    header('Location: recherche.php');
}


?>



