<?php
// ON RECUPERE LES INFOS DU FORMULAIRE
// ET ENSUITE ON VA LES STOCKER DANS LA TABLE SQL blog
$nom       = $_REQUEST["nom"] ?? "";
$email     = $_REQUEST["email"] ?? "";
$phone     = $_REQUEST["phone"] ?? "";
$adresse  = $_REQUEST["adresse"] ?? "";
$password  = $_REQUEST["password"] ?? "";
$message  = $_REQUEST["message"] ?? "";

// appeler ma fonction pour insérer une ligne dans la table SQL blog
// ON VA CHARGER LE CODE DES FONCTIONS
require "php/mes-fonctions.php";
// ensuite je peux appeler mes fonctions
insererLigneTable("inscription", [
    "nom"       => $nom,
    "email"   => $email,
    "phone"  => $phone,
    "adresse"  => $adresse,
    "password"  => $password,
    "message"  => $message
]);
// message de confirmation pour l'utilisateur
$confirmation = "inscription reussie ($nom)";
header('Location: index.php');
// en plus, on va fournir la liste des articles publiés
/* $tabBlog = lireTable("devoirs");
// je rajoute le tableau dans la réponse à envoyer au navigateur
$tabAssoJson["tabBlog"] = $tabBlog;  */