<section class="blanc">
    <h3>Profil</h3>
    <form method="POST" action="api-json.php">
        <label>
            <p>Nom</p>
            <input type="text" name="nom" required placeholder="entrez votre nom">
        </label>
        <label>
            <p>Email</p>
            <input type="email" name="email" required placeholder="entrez votre email">
        </label>
        <label>
            <p>Téléphone</p>
            <input type="number" name="phone" required placeholder="entrez votre téléphone">
        </label>
        <label>
            <p>Mot de passe</p>
            <input type="password" name="password" required placeholder="entrez une mot de passe">
        </label>
<!--         <div id="montrer">
            <input id="montrer_password" type="checkbox"> 
            <p>Montrer mot de passe</p>
        </div>
        <label>
            <p>Confirmer mot de passe</p>
            <input type="password" name="password" required placeholder="confirmez une mot de passe">
        </label> -->
        <button type="submit">INSCRIPTION</button>
        <div class="confirmation">
            <!-- ICI ON AFFICHERA LE MESSAGE DE CONFIRMATION -->
        </div>
        <input type="hidden" name="idForm" value="inscription">
    </form>
</section>