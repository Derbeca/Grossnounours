<section class="blanc">
    <h3>Inscription</h3>
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
            <p>Adresse</p>
            <input type="number" name="adresse" required placeholder="entrez votre arrondissement">
        </label>
        <label>
            <p>Mot de passe</p>
            <input type="password" name="password" required placeholder="entrez une mot de passe">
        </label>
        <label>
            <p>Ápropos de moi <i>(facultatif)</i></p>
            <textarea placeholder="max 10 lines" name="message"></textarea>
        </label>

        <button type="submit">INSCRIPTION</button>
        <div class="confirmation">
            <!-- ICI ON AFFICHERA LE MESSAGE DE CONFIRMATION -->
        </div>
        <input type="hidden" name="idForm" value="inscription">
    </form>
</section>