<?php

namespace Modele;

/**
 * Classe représentant un utilisateur de l'application.
 */
class Utilisateur {
    /**
     * Identifiant de l'utilisateur.
     * @var int
     */
    private int $id;

    /**
     * Nom d'utilisateur.
     * @var string
     */
    private string $login;

    /**
     * Mot de passe haché de l'utilisateur.
     * @var string
     */
    private string $mdp;

    /**
     * Constructeur de la classe Utilisateur.
     * 
     * @param int $id ID de l'utilisateur
     * @param string $login Nom d'utilisateur
     * @param string $mdp Mot de passe haché
     */
    public function __construct(int $id, string $login, string $mdp) {
        $this->id = $id;
        $this->login = $login;
        $this->mdp = $mdp;
    }

    /**
     * Retourne l'identifiant de l'utilisateur.
     * 
     * @return int
     */
    public function getId(): int {
        return $this->id;
    }

    /**
     * Retourne le login de l'utilisateur.
     * 
     * @return string
     */
    public function getLogin(): string {
        return $this->login;
    }

    /**
     * Retourne le mot de passe haché.
     * 
     * @return string
     */
    public function getMdp(): string {
        return $this->mdp;
    }
}
