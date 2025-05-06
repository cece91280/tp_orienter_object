<?php
require_once 'Personne.php';
class Etudiant extends Personne
{
    private string $ecole;
    public function __construct(string $nom, int $age, string $ecole)
    {
        parent::__construct($nom, $age);
        $this->ecole = $ecole;
    }
    public function afficherEcole(): string{
        return "Je suis étudiant à l'école {$this->ecole}";
    }
}