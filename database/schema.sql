CREATE DATABASE IF NOT EXISTS tp_admin CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE tp_admin;

CREATE TABLE IF NOT EXISTS users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(100) NOT NULL,
  prenom VARCHAR(100) NOT NULL,
  email VARCHAR(150) NOT NULL UNIQUE,
  password_hash VARCHAR(255) NOT NULL,
  telephone VARCHAR(20) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS messagerie (
  id_user1 INT, 
  id_user2 INT,
  messages VARCHAR(100),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO users (nom, prenom, email, password_hash, telephone) 
VALUES ('Dupont', 'Jean', 'jean.dupont@email.com', '$2y$10$eImiTXuWVxfM37uY4JANjQ==', '0123456789');

INSERT INTO users (nom, prenom, email, password_hash, telephone) 
VALUES ('Martin', 'Alice', 'alice.martin@email.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '0612345678');