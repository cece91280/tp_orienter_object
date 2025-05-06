<?php
require_once 'Etudiant.php';
require_once 'Employe.php';

$etudiant = new etudiant('Cédric', 36, 'EEDN');
$employe = new employe('da silva', 36, 'développeur');

echo '<p>'.$etudiant->sePresenter().'</p>';
echo '<p>'.$etudiant->afficherEcole().'<p/>';

echo '<p>'.$employe->sePresenter().'<p/>';
echo '<p>'.$employe->afficherPoste().'<p/>';