CREATE DATABASE takalo;

USE takalo;

CREATE TABLE utilisateurs (
    id_utilisateurs INT AUTO_INCREMENT PRIMARY KEY,
    nom_utilisateurs VARCHAR(255),
    email_utilisateurs VARCHAR(255),
    mdp_utilisateurs VARCHAR(255) NOT NULL
);

CREATE TABLE categories (
    id_categories INT AUTO_INCREMENT PRIMARY KEY,
    nom_categories VARCHAR(255),
    description_categories VARCHAR(255)
);

CREATE TABLE objets (
    id_objets INT AUTO_INCREMENT PRIMARY KEY,
    id_utilisateurs INT,
    id_categories VARCHAR(255),
    image_obj VARCHAR(255)
);

CREATE TABLE echanges (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_proproseur INT,
    obj_proproseur VARCHAR(255),
    id_receveur INT,
    obj_receveur VARCHAR(255)
);