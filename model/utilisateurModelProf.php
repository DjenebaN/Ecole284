<?php

//CRUD

class Professeur 
{
    private $bdd; // Assurez-vous que la propriété est déclarée

    function __construct($bdd)
    {
        $this->bdd = $bdd; // Initialisation de la propriété
    }


	public function ajouterProfesseur($nom, $prenom, $email, $salle, $matiere)
	{
		$req = $this->bdd->prepare("INSERT INTO Professeur (Nom, Prenom, Email, Salle, Matiere) VALUES (:nom , :prenom, :email, :salle, :matiere)");
		$req->bindParam(':nom', $nom);
		$req->bindParam(':prenom', $prenom);
		$req->bindParam(':email', $email);
        $req->bindParam(':salle', $salle);
        $req->bindParam(':matiere', $matiere);

		return $req->execute();
	}

	public function allProfesseur()
	{
		$req = $this->bdd->prepare("SELECT * FROM Professeur");
		$req->execute();
		return $req->fetchAll();
	}

	public function supprimerProfesseur($id)
	{

		$req = $this->bdd->prepare("DELETE FROM Professeur WHERE ID_Prof = ?");
		return $req->execute([$id]);
	}

    public function updateProfesseur($nom, $prenom, $email, $id, $salle, $matiere)
    {
        $stmt = $this->bdd->prepare("UPDATE Professeur SET Nom = :nom, Prenom = :prenom, Email = :email, Salle = :salle, Matiere = :matiere WHERE ID_Prof = :id");
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':salle', $salle);
        $stmt->bindParam(':matiere', $matiere);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }


    public function getProfesseurById($id) {
        $stmt = $this->bdd->prepare('SELECT * FROM Professeur WHERE ID_Prof = ?');
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

}


?>