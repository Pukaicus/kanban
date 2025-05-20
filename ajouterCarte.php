<?php
/**
 * Script pour ajouter une nouvelle carte dans la base de données.
 * - inclut le gestionnaire de base de données,
 * - crée une connexion PDO,
 * - récupère les données du formulaire POST (titre et description),
 * - insère une nouvelle carte dans la table `cartes`,
 * - puis redirige vers la page d'accueil `index.html`.
 */

require_once "bddmanager/BddManage.php";

use bddmanager\BddManage;

// Création de l'objet BddManage et connexion à la base de données
$bdd = new BddManage();
$bdd->connect();

// Récupération de l'objet PDO pour les requêtes SQL
$pdo = $bdd->getPDO();

// Vérifie si le champ 'titre' est présent dans le formulaire POST
if (!empty($_POST['titre'])) {
    // Récupère le titre et la description (vide si non définie)
    $titre = $_POST['titre'];
    $description = $_POST['description'] ?? '';

    // Prépare et exécute la requête d'insertion dans la table 'cartes'
    $stmt = $pdo->prepare("INSERT INTO cartes (titre, description) VALUES (?, ?)");
    $stmt->execute([$titre, $description]);

    // Redirige vers la page index.html après insertion
    header("Location: index.html");
    exit;
}
