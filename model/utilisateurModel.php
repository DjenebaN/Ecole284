<?php

//CRUD

class Utilisateur 
{
    private $bdd; // Assurez-vous que la propriété est déclarée

    function __construct($bdd)
    {
        $this->bdd = $bdd; // Initialisation de la propriété
    }


	public function ajouterUtilisateur($nom, $prenom, $email)
	{
		$req = $this->bdd->prepare("INSERT INTO Utilisateurs (Nom, Prenom, Email) VALUES (:nom , :prenom, :email)");
		$req->bindParam(':nom', $nom);
		$req->bindParam(':prenom', $prenom);
		$req->bindParam(':email', $email);

		return $req->execute();
	}

	public function allUtilisateur()
	{
		$req = $this->bdd->prepare("SELECT * FROM Utilisateurs");
		$req->execute();
		return $req->fetchAll();
	}

	public function supprimerUtilisateur($id)
	{

		$req = $this->bdd->prepare("DELETE FROM Utilisateurs WHERE ID_Utilisateur = ?");
		return $req->execute([$id]);
	}

    public function updateUtilisateur($nom, $prenom, $email, $id)
    {
        $stmt = $this->bdd->prepare("UPDATE Utilisateurs SET Nom = :nom, Prenom = :prenom, Email = :email WHERE ID_Utilisateur = :id");
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }


    public function getUtilisateurById($id) {
        $stmt = $this->bdd->prepare('SELECT * FROM Utilisateurs WHERE ID_Utilisateur = ?');
        $stmt->execute([$id]);
        return $stmt->fetch();
    }


}


?>