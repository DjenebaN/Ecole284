/*cree une bdd*/
CREATE DATABASE ecole284;

/*utiliser la bdd creer*/
USE ecole284;

/*creation d'une table Utilisateur*/
CREATE TABLE Utilisateurs (

	ID_Utilisateur INT NOT NULL AUTO_INCREMENT,
	Nom VARCHAR(50) NOT NULL,
	Prenom VARCHAR(50) NOT NULL,
	Email VARCHAR(100) NOT NULL,
	PRIMARY KEY (ID_Utilisateur)
);