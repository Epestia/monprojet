CREATE DATABASE IF NOT EXISTS projet(
USE projet;
CREATE TABLE IF NOT EXISTS user( 
Login VARCHAR(255) PRIMARY KEY,
Password VARCHAR(255),
Role boolean,
adresse VARCHAR(255),
Nom VARCHAR (255),
Prenom VARCHAR (255)
)ENGINE=INNODB;

CREATE TABLE IF NOT EXISTS Articles( 
idArticle INT PRIMARY KEY auto_increment,
Titre VARCHAR(255),
Auteur VARCHAR(255),
Maison_edition VARCHAR (255),
Description VARCHAR(255),
Stock INT,
Price FLOAT
)ENGINE=INNODB;

CREATE TABLE IF NOT EXISTS Commandes( 
idCommande INT PRIMARY KEY auto_increment,
NomUtilisateur VARCHAR(255),
idArticle INT,
Statuts VARCHAR (255),
PriceTOTAL FLOAT
)ENGINE=INNODB;
