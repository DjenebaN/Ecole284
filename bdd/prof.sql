CREATE TABLE Professeur (

	ID_Prof INT NOT NULL AUTO_INCREMENT,
	Nom VARCHAR(50) NOT NULL,
	Prenom VARCHAR(50) NOT NULL,
	Email VARCHAR(100) NOT NULL,
	Salle VARCHAR(50) NOT NULL,
	Matiere VARCHAR(50) NOT NULL,
	PRIMARY KEY (ID_Prof)
);