<?php
require_once '../bdd/BddManage.php';
use bddmanager\BddManage;

$bdd = new BddManage();
$bdd->connect();
$pdo = $bdd->getPDO();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_personnel = $_POST['id_personnel'];
    $date_debut = $_POST['date_debut'];
    $date_fin = $_POST['date_fin'];
    $motif = $_POST['motif'];

    try {
        $stmt = $pdo->prepare("INSERT INTO absence (id_personnel, date_debut, date_fin, motif) VALUES (:idp, :dd, :df, :motif)");
        $stmt->execute([
            ':idp' => $id_personnel,
            ':dd' => $date_debut,
            ':df' => $date_fin,
            ':motif' => $motif
        ]);
        header('Location: ../login.php?success=ajout_absence');
        exit;
    } catch (PDOException $e) {
        die("Erreur : " . $e->getMessage());
    }
}
