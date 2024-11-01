<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Utilisateurs</title>
    <link rel="stylesheet" href="styles.css"> <!-- Lien vers le fichier CSS -->
</head>
<body>

<?php 
include('controller/selectAllUtilisateur.php');
?>

<div class="table-container"> <!-- Un conteneur pour la table -->
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($allUtilisateurs as $index => $value) {  ?>
            <tr>
                <th scope="row"><?php echo $index + 1; ?></th> <!-- Numéro dynamique -->
                <td><?php echo htmlspecialchars($value['Nom']); ?></td>
                <td><?php echo htmlspecialchars($value['Prenom']); ?></td>
                <td><?php echo htmlspecialchars($value['Email']); ?></td>
                <td><a href="index.php?page=detailEleve&idEleve=<?php echo $value['ID_Utilisateur']; ?>">Détails</a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

</body>
</html>
