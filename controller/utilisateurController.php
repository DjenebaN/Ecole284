<?php
include('../model/utilisateurModel.php');
include('../model/utilisateurModelProf.php');
include('../bdd/bdd.php');

if(isset($_POST['action'])) {

    $utilisateurController = new UtilisateurController($bdd);

    switch ($_POST['action']) {

        case 'ajouter':
            $utilisateurController->create();
            break;

        case 'supprimer':
            $utilisateurController->delete();
            break;

        default:
            echo "Action non reconnue.";
            break;
    }
}

class UtilisateurController 
{
    private $utilisateur;
    private $professeur;

    function __construct($bdd)
    {
        $this->utilisateur = new Utilisateur($bdd);
        $this->professeur = new Professeur($bdd);
    }

    public function create()
    {
        if (isset($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['type_utilisateur'])) {
            $typeUtilisateur = $_POST['type_utilisateur'];

            // Vérifie si l'utilisateur est un élève ou un professeur
            if ($typeUtilisateur === 'eleve') {
                $this->utilisateur->ajouterUtilisateur($_POST['nom'], $_POST['prenom'], $_POST['email']);
            } elseif ($typeUtilisateur === 'prof') {
                $this->professeur->ajouterProfesseur($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['salle'], $_POST['matiere']);
            }

            // Redirection après ajout
            header('Location: http://127.0.0.1/ecole284/');
            exit();
        } else {
            echo "Tous les champs sont requis.";
        }
    }

    public function delete()
    {
        if (isset($_POST['idProf'])) {
            $this->professeur->supprimerProfesseur($_POST['idProf']);
        } elseif (isset($_POST['idEleve'])) {
            $this->utilisateur->supprimerUtilisateur($_POST['idEleve']);
        }

        // Redirection après suppression
        header('Location: http://127.0.0.1/ecole284/');
        exit();
    }
}
?>
