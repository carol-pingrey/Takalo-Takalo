CREATE DATABASE takalo;

USE takalo;

CREATE TABLE proprietaire (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255),
    mdp VARCHAR(255) NOT NULL
);

CREATE TABLE objets (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_prop INT,
    nom_obj VARCHAR(255),
    image_obj VARCHAR(255)
);