<?php
// JE VAIS RANGER LES FONCTIONS QUE JE CREE
// CONSEIL: UTILISER UN VERBE DANS LE NOM DES FONCTIONS
// (UNE FONCTION PERMET DE REALISER UNE ACTION => VERBE)
function creerConnexionBDD()
{
    // TODO: IL FAUDRAIT ISOLER CE CODE 
    // POUR NE PAS AVOIR A MODIFIER LE FICHIER mes-fonctions.php
    // INFOS A CHANGER POUR CHAQUE PROJET
    // ATTENTION SUR MAC: AVEC MAMP LE MOT DE PASSE root
    $database   = "grosnounours";   // NE PAS OUBLIER DE LE CHANGER
    $user       = "root";
    $password   = "";
    // Data Source Name
    $dsn = "mysql:dbname=$database;host=localhost;charset=utf8mb4";
    // créer la connexion avec MySQL
    $dbh = new PDO($dsn, $user, $password);
    return $dbh;
}
// JE CREE UNE FONCTION POUR ENVOYER UNE REQUETE SQL
function envoyerRequeteSQL ($requeteSQLPreparee, $tabAssoColonneValeur)
{
    // ON APPELLE LA FONCTION 
    // POUR ACTIVER LE CODE DE CONNEXION A LA BDD
    $dbh = creerConnexionBDD();
    // LA REQUETE SE FAIT EN 2 TEMPS
    // ETAPE prepare
    $pdoStatement = $dbh->prepare($requeteSQLPreparee);
    // ETAPE execute
    $pdoStatement->execute($tabAssoColonneValeur);

    // DEBUG
    // $pdoStatement->debugDumpParams();
    // RENVOYER $pdoStatement POUR LA LECTURE
    return $pdoStatement;
}

// EN PHP: VERSION AVEC UN TABLEAU ASSOCIATIF
function concatenerTexteAsso ($nomTable, $tabAssoColonneValeur)
{
    // AJOUTER LE CODE MANQUANT
    $texteFinal = "";
    $texteToken = "";
    $indice     = 0;
    foreach($tabAssoColonneValeur as $cle => $valeur)
    {
        if ($indice > 0)
        {
            // ON AJOUTE LA VIRGULE AU TEXTE FINAL
            $texteFinal = "$texteFinal,$cle";
            $texteToken = "$texteToken,:$cle";
        }
        else
        {
            // ON N(AJOUTE PAS LA VIRGULE) AU TEXTE FINAL
            $texteFinal = "$texteFinal$cle";
            $texteToken = "$texteToken:$cle";
        }
        // J'INCREMENTE MOI MEME L'INDICE
        $indice++;
    }
    // JE COMPLETE LE TEXTE FINAL
    $texteFinal = "INSERT INTO $nomTable ( $texteFinal ) VALUES ($texteToken)";
    return $texteFinal;
}
// INSERER UNE LIGNE DANS N'IMPORTE QUELLE TABLE
function insererLigneTable($nomTable, $tabAssoColonneValeur)
{
    // ETAPE1: CREER UNE REQUETE SQL PREPAREE
    $requeteSQLPreparee = concatenerTexteAsso($nomTable, $tabAssoColonneValeur);
    // ETAPE2: ENVOYER LA REQUETE
    $pdoStatement = envoyerRequeteSQL($requeteSQLPreparee, $tabAssoColonneValeur);
    // renvoyer $pdoStatement
    return $pdoStatement;
}




?>