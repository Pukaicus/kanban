<?php
/**
 * Ce script récupère toutes les cartes dans la base de données
 * et les affiche sous forme de blocs HTML.
 */

require_once "bddmanager/BddManage.php";

use bddmanager\BddManage;

// Création de l'objet BddManage et connexion à la base
$bdd = new BddManage();
$bdd->connect();
$pdo = $bdd->getPDO(); // ✅ Correction ici

try {
    // Préparation et exécution de la requête pour récupérer toutes les cartes
    $stmt = $pdo->query("SELECT id, titre, description FROM cartes ORDER BY id DESC");

    // Parcours des résultats et affichage des cartes
    while ($carte = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<div class="carte">';
        echo '<h3>' . htmlspecialchars($carte['titre']) . '</h3>';
        echo '<p>' . nl2br(htmlspecialchars($carte['description'])) . '</p>';
        echo '</div>';
    }
} catch (PDOException $e) {
    // Gestion simple d'erreur en cas de problème avec la requête
    echo "Erreur lors de la récupération des cartes : " . $e->getMessage();
}

