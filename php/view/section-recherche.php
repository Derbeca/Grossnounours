<section class="blanc">
    <h3>Chercher une assistante maternelle</h3>
    <form method="POST" action="">
        <label>
            <input type="text" name="adresse" required placeholder="entrez l'arrondissement">
        </label>
        <button type="submit" name="recherche" value="search">CHERCHER</button>
        <input type="hidden" name="idForm" value="recherche">
    </form>
</section>
<section class="section-liste afficher">

            <div class="listeResultats"><!--container pour Flexbox -->
            <?php
// ON VA AFFICHER LA LISTE DES ARTICLES
// etape1: il faut charger mes fonctions
$adresse = $_POST['adresse'] ?? "";
require_once "php/mes-fonctions.php";

// etape2: on appelle la fonction
// je ne veux que les lignes dans la catégorie blog
// parametre1: "blog" est le nom de la table SQL
// parametre2: "categorie" est le nom de la colonne SQL dans la table blog
// parametre3: "blog" est la valeur de sélection de la colonne "catégorie"
$tabArticle = lireTable("inscription", "adresse", $adresse);

// SSR Server Side Rendering
// On crée le code HTML avec PHP
// => le navbigateur reçoit directement le code HTML
// => google référence mieux ce contenu
// on fait une boucle pour parcourir la liste des articles
foreach($tabArticle as $ligneAsso) {
$nom      = $ligneAsso["nom"];
$email    = $ligneAsso["email"];
$phone    = $ligneAsso["phone"];
$adresse  = $ligneAsso["adresse"];
$password = $ligneAsso["password"];
$message  = $ligneAsso["message"];
$id       = $ligneAsso["id"];


    echo
<<<CODEHTML
    <div class="">
        <h3>$nom</h3>
        <h4>$phone</h4>
        <p>$message</p>
        <p>$email</p>
        <p>$adresse</p>
        <div class="boutons">
            <button class="delete" data-id="$id" id="delete-$id">SUPPRIMER</button>
            <button class="update" data-id="$id" id="update-$id">MODIFIER</button>
            <input type="hidden" name="filtre" value="toto">
        </div>
        <div class="confirmation"></div>
    </div>
CODEHTML;
}
?>
            </div>
        </section>