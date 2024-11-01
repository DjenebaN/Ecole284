<?php 

include('controller/selectAllProfesseur.php'); // Vérifie que ce chemin est correct

?>

<div class="table-container"> <!-- Un conteneur pour la table -->
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Email</th>
                <th scope="col">Salle</th>
                <th scope="col">Matiere</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($allProfesseurs as $index => $value) {  ?>
            <tr>
                <th scope="row"><?php echo $index + 1; ?></th> <!-- Numéro dynamique -->
                <td><?php echo htmlspecialchars($value['Nom']); ?></td>
                <td><?php echo htmlspecialchars($value['Prenom']); ?></td>
                <td><?php echo htmlspecialchars($value['Email']); ?></td>
                <td><?php echo htmlspecialchars($value['Salle']); ?></td>
                <td><?php echo htmlspecialchars($value['Matiere']); ?></td>
                <td><a href="index.php?page=detailProf&idProf=<?php echo htmlspecialchars($value['ID_Prof']); ?>">Détails</a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
