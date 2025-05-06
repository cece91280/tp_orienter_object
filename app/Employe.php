<?php
require_once 'Personne.php';

class Employe extends Personne
{
    private string $poste;
    public function __construct(string $nom, int $age, string $poste)
    {
        parent::__construct($nom, $age);
        $this->poste = $poste;
    }
    public function afficherPoste(): string{
        return "Je travaille comme {$this->poste}";
    }
}