<?php
namespace bddmanager;

require_once __DIR__ . '/../dal/Dal.php';

use PDO;
use PDOException;
use dal\Dal; // ✅ Import de la classe Dal

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
     * Instance de Dal pour obtenir le DSN.
     * @var Dal
     */
    private Dal $dal;

    /**
     * Constructeur : initialise l’objet Dal.
     */
    public function __construct() {
        $this->dal = new Dal(); // ✅ Création de l’objet Dal
    }

    /**
     * Établit la connexion à la base de données.
     * 
     * @return void
     */
    public function connect() {
        try {
            $dsn = $this->dal->getDsn(); // ✅ Récupère le DSN depuis Dal
            $this->pdo = new PDO($dsn, 'root', '');
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "✅ Connexion réussie";
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
