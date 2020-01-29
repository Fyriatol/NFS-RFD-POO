<?php

require_once './classes/Voiture.php';

$voiture1 = new Voiture(1000, 'rouge');
$voiture2 = new Voiture(3000, 'bleu');
$voiture1->vitesse = 30;

echo $voiture1->calculerEnergieCinetique();
echo "<br/>";
$voiture1->vitesse =10;
echo $voiture1->calculerEnergieCinetique();

$voiture1->masse = 1000;

$voiture1->afficherMessageDebile();


echo $voiture2->calculerEnergieCinetique();
echo "<br/>";
$voiture2->vitesse =50;
echo $voiture2->calculerEnergieCinetique();
var_dump($voiture1,$voiture2);
