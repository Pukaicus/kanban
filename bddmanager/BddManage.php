<?php
namespace bddmanager;

use PDO;
use PDOException;

/**
 * Classe de gestion de la connexion à la base de données Kanban.
 */
class BddManage {
    /**
     * Instance PDO pour la connexion à la base de données.
     * @var PDO|null
     */
    private $pdo;

    /**
     * Établit la connexion à la base de données.
     * Initialise l'objet PDO avec la chaîne de connexion, 
     * configure le mode d'erreur et gère les exceptions.
     * 
     * @return void
     */
    public function connect() {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=mediatek86;charset=utf8', 'root', '');
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "✅ Connexion réussie";
        } catch (PDOException $e) {
            die("❌ Erreur de connexion : " . $e->getMessage());
        }
    }

    /**
     * Retourne l'objet PDO pour effectuer des requêtes SQL.
     * 
     * @return PDO|null
     */
    public function getPDO() {
        return $this->pdo;
    }
}

