<div class="center">
    <h1>Inscription</h1>
    <form action="controller/utilisateurController.php" method="POST">

        <div class="text_field">
            Nom : <input type="text" name="nom" required>
        </div>

        <div class="text_field">
            Prénom : <input type="text" name="prenom" required>
        </div>

        <div class="text_field">
            Email : <input type="email" name="email" required>
        </div>

        <div class="text_field">
            Salle : <input type="text" name="salle" required>
        </div>

        <div class="text_field">
            Matière : <input type="text" name="matiere" required>
        </div>
        
        <div class="check">
            <div>
                <input type="radio" name="type_utilisateur" value="eleve" id="eleve" required>
                <label for="eleve">Je suis élève</label>
            </div>

            <div>
                <input type="radio" name="type_utilisateur" value="prof" id="prof" required>
                <label for="prof">Je suis professeur</label>
            </div>
        </div>
        
        <input type="hidden" name="action" value="ajouter">
        <input type="submit" value="valider">
    </form>
</div>
