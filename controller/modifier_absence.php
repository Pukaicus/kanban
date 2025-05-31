<?php
require_once '../bddmanager/BddManage.php';
use bddmanager\BddManage;

$bdd = new BddManage();
$bdd->connect();
$pdo = $bdd->getPDO();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone']; // ✅ ajout du champ téléphone

    try {
        $stmt = $pdo->prepare("UPDATE personnel SET nom = :nom, prenom = :prenom, email = :email, telephone = :telephone WHERE id = :id");
        $stmt->execute([
            ':id' => $id,
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':email' => $email,
            ':telephone' => $telephone // ✅ liaison du paramètre
        ]);
        header('Location: ../login.php?success=modif_personnel');
        exit;
    } catch (PDOException $e) {
        die("Erreur : " . $e->getMessage());
    }
}
