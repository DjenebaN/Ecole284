<?php

$idProf = $_GET['idProf'];

include ('model/utilisateurModelProf.php');
include('bdd/bdd.php');

$professeur = new Professeur ($bdd);
$detailProfesseur = $professeur->getProfesseurById($idProf);


?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Email</th>
      <th scope="col">Salle</th>
      <th scope="col">Matiere</th>
      <th scope="col">Supprimer</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $detailProfesseur['ID_Prof'];?></th>
      <td><?php echo $detailProfesseur['Nom'];?></td>
      <td><?php echo $detailProfesseur['Prenom'];?></td>
      <td><?php echo $detailProfesseur['Email'];?></td>
      <td><?php echo $detailProfesseur['Salle']; ?></td>
      <td><?php echo $detailProfesseur['Matiere']; ?></td>
     <td>
     	<form action="controller/utilisateurController.php" method="POST">
     		<input type="hidden" name="action" value="supprimer">
     		<input type="hidden" name="idProf" value="<?php echo $detailProfesseur['ID_Prof'];?>">
     		<input type="submit" value="supprimer">
     	</form>
     </td>
    </tr>
  </tbody>
</table>