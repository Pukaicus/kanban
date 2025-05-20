CREATE DATABASE kanban;

USE kanban;

CREATE TABLE cartes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(255) NOT NULL,
    description TEXT,
    statut VARCHAR(50) DEFAULT 'À faire'
);
