<?php
// ICI ON VA TRAITER LES FORMULAIRES
// ET ON VA RENVOYER UNE REPONSE AU FORMAT JSON
$tabAssoJson = [];
// on ajoute des infos pour nous aider à développer
$tabAssoJson["date"]    = date("Y-m-d H:i:s");
$tabAssoJson["request"] = $_REQUEST;
// AJOUTER LE TRAITEMENT DES FORMULAIRES
// ON SE BASE SUR idFormulaire POUR DECLENCHER UN TRAITEMENT
$idForm = $_REQUEST["idForm"];
if ($idForm != "")
{
    if ($idForm == "contact")
    {
        // ON VA CHARGER LE FICHIER DE TRAITEMENT CORRESPONDANT
        require "php/controller/traitement-contact.php";
    }

    if ($idForm == "inscription")
    {
        // ON VA CHARGER LE FICHIER DE TRAITEMENT CORRESPONDANT
        require "php/controller/traitement-inscription.php";
    }

    if ($idForm == "login")
    {
        // ON VA CHARGER LE FICHIER DE TRAITEMENT CORRESPONDANT
        require "php/controller/traitement-login.php";
    }

    if ($idForm == "logout")
    {
        // ON VA CHARGER LE FICHIER DE TRAITEMENT CORRESPONDANT
        require "php/controller/traitement-logout.php";
    }

    if ($idForm == "recherche")
    {
        // ON VA CHARGER LE FICHIER DE TRAITEMENT CORRESPONDANT
        require "php/controller/traitement-recherche.php";
    }

    if ($idForm == "ajouter")
    {
        // ON VA CHARGER LE FICHIER DE TRAITEMENT CORRESPONDANT
        require "php/controller/traitement-ajouter.php";
    }
    if ($idForm == "supprimer")
    {
        // ON VA CHARGER LE FICHIER DE TRAITEMENT CORRESPONDANT
        require "php/controller/traitement-supprimer.php";
    }
    if ($idForm == "modifier")
    {
        // ON VA CHARGER LE FICHIER DE TRAITEMENT CORRESPONDANT
        require "php/controller/traitement-modifier.php";
    }
}
// on ajoute le message de confirmation
$tabAssoJson["confirmation"] = $confirmation ?? "";
// on convertit le tableau associatif PHP en texte JSON
// https://www.php.net/manual/fr/function.json-encode.php
$texteJson = json_encode($tabAssoJson, JSON_PRETTY_PRINT);
// affiche le texte JSON
echo $texteJson;

?>  