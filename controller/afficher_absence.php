<?php
require_once '../bdd/BddManage.php';
use bddmanager\BddManage;

$bdd = new BddManage();
$bdd->connect();
$pdo = $bdd->getPDO();

try {
    $stmt = $pdo->query("SELECT * FROM absence");
    $absences = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo "<h3>Liste des absences</h3>";
    echo "<table border='1'><tr><th>ID</th><th>ID Personnel</th><th>Début</th><th>Fin</th><th>Motif</th></tr>";
    foreach ($absences as $absence) {
        echo "<tr>
                <td>{$absence['id']}</td>
                <td>{$absence['id_personnel']}</td>
                <td>{$absence['date_debut']}</td>
                <td>{$absence['date_fin']}</td>
                <td>{$absence['motif']}</td>
              </tr>";
    }
    echo "</table>";
} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());
}
