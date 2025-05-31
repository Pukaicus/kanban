<?php

namespace dal;

/**
 * Classe permettant d'accéder à la base de données via un DSN.
 */
class Dal {
    /**
     * Chaîne de connexion DSN à la base de données.
     * @var string
     */
    private string $dsn;

    /**
     * Constructeur : initialise la chaîne de connexion.
     */
    public function __construct() {
        $this->dsn = 'mysql:host=localhost;dbname=mediatek86;charset=utf8';
    }

    /**
     * Récupère la chaîne DSN.
     * 
     * @return string
     */
    public function getDsn(): string {
        return $this->dsn;
    }
}
