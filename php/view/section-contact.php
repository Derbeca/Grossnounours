<section class="blanc contact">
    <h3>Contact</h3>
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
            <p>Message</p>
            <textarea name="message" placeholder="entrez votre email"></textarea>
        </label>
        <button type="submit">ENVOYER</button>
        <div class="confirmation">
            <!-- ICI ON AFFICHERA LE MESSAGE DE CONFIRMATION -->
        </div>
        <input type="hidden" name="idForm" value="contact">
    </form>
</section>