<?php

namespace Modele;

/**
 * Classe représentant une colonne dans le tableau Kanban.
 */
class Colonne {
    /**
     * Identifiant unique de la colonne.
     * @var int
     */
    private int $id;

    /**
     * Nom de la colonne.
     * @var string
     */
    private string $nom;

    /**
     * Constructeur de la classe Colonne.
     * 
     * @param int $id
     * @param string $nom
     */
    public function __construct(int $id, string $nom) {
        $this->id = $id;
        $this->nom = $nom;
    }

    /**
     * Retourne l'identifiant de la colonne.
     * 
     * @return int
     */
    public function getId(): int {
        return $this->id;
    }

    /**
     * Retourne le nom de la colonne.
     * 
     * @return string
     */
    public function getNom(): string {
        return $this->nom;
    }
}
