<?php

$idEleve = $_GET['idEleve'];

include ('model/utilisateurModel.php');
include('bdd/bdd.php');

$utilisateur = new Utilisateur($bdd);
$detailUtilsateur = $utilisateur->getUtilisateurById($idEleve);


?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Email</th>
      <th scope="col">Supprimer</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $detailUtilsateur['ID_Utilisateur'];?></th>
      <td><?php echo $detailUtilsateur['Nom'];?></td>
      <td><?php echo $detailUtilsateur['Prenom'];?></td>
      <td><?php echo $detailUtilsateur['Email'];?></td>
     <td>
     	<form action="controller/utilisateurController.php" method="POST">
     		<input type="hidden" name="action" value="supprimer">
     		<input type="hidden" name="idEleve" value="<?php echo $detailUtilsateur['ID_Utilisateur'];?>">
     		<input type="submit" value="supprimer">
     	</form>
     </td>
    </tr>
  </tbody>
</table>