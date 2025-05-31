<?php
require_once '../bddmanager/BddManage.php';
use bddmanager\BddManage;

$bdd = new BddManage();
$bdd->connect();
$pdo = $bdd->getPDO();

try {
    $stmt = $pdo->query("SELECT * FROM absence");
    $absences = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo "<h3>Liste des absences</h3>";
    // var_dump($absences);
    echo "<table border='1'><tr><th>ID Personnel</th><th>Début</th><th>Fin</th><th>Motif</th></tr>";
    foreach ($absences as $absence) {
        echo "<tr>
                <td>{$absence['idpersonnel']}</td>
                <td>{$absence['datedebut']}</td>
                <td>{$absence['datefin']}</td>
                <td>{$absence['idmotif']}</td>
              </tr>";
    }
    echo "</table>";
} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());
}
