<?php
session_start();

require_once '../bddmanager/BddManage.php';
require_once '../dal/Dal.php';

use bddmanager\BddManage;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (!empty($username) && !empty($password)) {
        $bdd = new BddManage();
        $bdd->connect();
        $pdo = $bdd->getPDO();

        try {
            $stmt = $pdo->prepare("SELECT * FROM responsable WHERE login = :login AND pwd = SHA2(:pwd, 256)");
            $stmt->bindParam(':login', $username);
            $stmt->bindParam(':pwd', $password);
            $stmt->execute();

            $user = $stmt->fetch();

            if ($user) {
                $_SESSION['user'] = [
                    'id' => $user['id'],
                    'nom' => $user['nom']
                ];
                header('Location: ../vue/login.php'); // 🔁 Redirection après connexion
                exit;
            } else {
                // 🔁 Redirection avec message d’erreur
                header('Location: ../index.php?error=1');
                exit;
            }

        } catch (PDOException $e) {
            header('Location: ../index.php?error=sql');
            exit;
        }

    } else {
        header('Location: ../index.php?error=empty');
        exit;
    }
} else {
    header('Location: ../index.php');
    exit;
}
