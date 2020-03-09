<section class="gris">
    <h3>Connexion</h3>
    <form method="POST" action="api-json.php">
        <label>
            <p>Email</p>
            <input type="email" name="login_email" required placeholder="entrez votre email">
        </label>
        <label>
            <p>Mot de passe</p>
            <input type="password" name="login_password" required placeholder="entrez votre mot de passe">
            <a href="#">Mot de passe oublié?</a>
        </label>
        <button type="submit">CONNEXION</button>
        <input type="hidden" name="idForm" value="login">
    </form>
</section>