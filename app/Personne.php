<?php
// Créez une classe Personne avec les propriétés nom et age.
//Modifiez la classe Personne pour que les propriétés nom et age soient inaccessibles.
class Personne
{
    private string $nom;
    private int $age;
    // Ajoutez un constructeur pour initialiser ces propriétés.
    public function __construct(string $nom, int $age)
    {
        $this->nom = $nom;
        $this->age = $age;
    }
    //Ajoutez une méthode sePresenter qui affiche une présentation de la personne.
    public function sePresenter(): string
    {
        $message = "Je m'appelle {$this->nom} et j'ai {$this->age} ans.";
        return $message;
    }
    //Ajoutez des accesseurs pour ces propriétés.
    public function getNom(): string
    {
        return $this->nom;
    }
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }
    public function getAge(): int
    {
        return $this->age;
    }
    //Ajoutez une validation dans le setter pour age afin de s'assurer que l'âge est un nombre positif.
    public function setAge(int $age): void
    {
        if ($age > 0) {
            $this->age = $age;
        } else {
            throw new Exception("L'age doit etre superieur à 0");
        }
    }
}