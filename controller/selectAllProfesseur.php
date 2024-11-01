<?php

include('model/utilisateurModelProf.php');
include('bdd/bdd.php');

$professeur = new Professeur($bdd);
$allProfesseurs = $professeur->allProfesseur(); // Appelle la méthode pour récupérer tous les professeurs

?>
