<?php
require_once '../bdd/BddManage.php';
use bddmanager\BddManage;

$bdd = new BddManage();
$bdd->connect();
$pdo = $bdd->getPDO();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id_absence'];

    try {
        $stmt = $pdo->prepare("DELETE FROM absence WHERE id = :id");
        $stmt->execute([':id' => $id]);
        header('Location: ../login.php?success=suppression_absence');
        exit;
    } catch (PDOException $e) {
        die("Erreur : " . $e->getMessage());
    }
}
