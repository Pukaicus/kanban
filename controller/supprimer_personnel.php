<?php
require_once '../bddmanager/BddManage.php';
use bddmanager\BddManage;

$bdd = new BddManage();
$bdd->connect();
$pdo = $bdd->getPDO();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    try {
        $stmt = $pdo->prepare("DELETE FROM personnel WHERE id = :id");
        $stmt->execute([':id' => $id]);
        header('Location: ../login.php?success=suppression_personnel');
        exit;
    } catch (PDOException $e) {
        die("Erreur : " . $e->getMessage());
    }
}
