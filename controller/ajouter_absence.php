<?php
require_once '../bddmanager/BddManage.php';
use bddmanager\BddManage;

$bdd = new BddManage();
$bdd->connect();
$pdo = $bdd->getPDO();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_personnel = $_POST['idpersonnel'];
    $date_debut = $_POST['datedebut'];
    $date_fin = $_POST['datefin'];
    $motif = $_POST['idmotif'];

    try {
        $stmt = $pdo->prepare("INSERT INTO absence (idpersonnel, datedebut, datefin, idmotif) VALUES (:idp, :dd, :df, :motif)");
        $stmt->execute([
            ':idp' => $id_personnel,
            ':dd' => $date_debut,
            ':df' => $date_fin,
            ':motif' => $motif
        ]);
        header('Location: ../vue/login.php?success=ajout_absence');
        exit;
    } catch (PDOException $e) {
        die("Erreur : " . $e->getMessage());
    }
}
