<?php
require_once '../bdd/BddManage.php';
use bddmanager\BddManage;

$bdd = new BddManage();
$bdd->connect();
$pdo = $bdd->getPDO();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id_absence'];
    $date_debut = $_POST['date_debut'];
    $date_fin = $_POST['date_fin'];
    $motif = $_POST['motif'];

    try {
        $stmt = $pdo->prepare("UPDATE absence SET date_debut = :dd, date_fin = :df, motif = :motif WHERE id = :id");
        $stmt->execute([
            ':id' => $id,
            ':dd' => $date_debut,
            ':df' => $date_fin,
            ':motif' => $motif
        ]);
        header('Location: ../login.php?success=modif_absence');
        exit;
    } catch (PDOException $e) {
        die("Erreur : " . $e->getMessage());
    }
}
