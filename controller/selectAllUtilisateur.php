<?php

include('model/utilisateurModel.php');
include('bdd/bdd.php');


$utilisateur = new Utilisateur($bdd);
$allUtilisateurs = $utilisateur->allUtilisateur();

//var_dump($allUtilisateurs);
//die();



?>