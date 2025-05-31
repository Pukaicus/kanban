<?php
require_once '../bddmanager/BddManage.php';
use bddmanager\BddManage;

$bdd = new BddManage();
$bdd->connect();
$pdo = $bdd->getPDO();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $tel = $_POST['telephone'];
    $mail = $_POST['mail'];

    try {
        $stmt = $pdo->prepare("INSERT INTO personnel (nom, prenom, tel, mail) VALUES (:nom, :prenom, :tel, :mail)");
        $stmt->execute([
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':tel' => $tel,
            ':mail' => $mail
        ]);
        header('Location: ../vue/login.php?success=ajout_personnel');
        exit;
    } catch (PDOException $e) {
        die("Erreur : " . $e->getMessage());
    }
}
