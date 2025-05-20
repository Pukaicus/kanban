<?php

namespace Modele;

/**
 * Classe représentant une carte Kanban.
 */
class Carte {
    /**
     * Identifiant unique de la carte.
     * @var int
     */
    private int $id;

    /**
     * Titre de la carte.
     * @var string
     */
    private string $titre;

    /**
     * Description de la carte.
     * @var string
     */
    private string $description;

    /**
     * Identifiant de la colonne à laquelle appartient la carte.
     * @var int
     */
    private int $id_colonne;

    /**
     * Constructeur de la classe Carte.
     * 
     * @param int $id
     * @param string $titre
     * @param string $description
     * @param int $id_colonne
     */
    public function __construct(int $id, string $titre, string $description, int $id_colonne) {
        $this->id = $id;
        $this->titre = $titre;
        $this->description = $description;
        $this->id_colonne = $id_colonne;
    }

    /**
     * Récupère l'identifiant de la carte.
     * 
     * @return int
     */
    public function getId(): int {
        return $this->id;
    }

    /**
     * Récupère le titre de la carte.
     * 
     * @return string
     */
    public function getTitre(): string {
        return $this->titre;
    }

    /**
     * Récupère la description de la carte.
     * 
     * @return string
     */
    public function getDescription(): string {
        return $this->description;
    }

    /**
     * Récupère l'identifiant de la colonne associée.
     * 
     * @return int
     */
    public function getIdColonne(): int {
        return $this->id_colonne;
    }
}
