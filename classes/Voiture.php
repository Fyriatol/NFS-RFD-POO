<?php

class Voiture
{
  public $nbrRoues;
  private $nbrPlaces;
  public $masse;
  public $vitesse = 0;
  public $couleur;

  public function __construct(float $m, string $c)
  {
    $this->masse = abs($m);
    $this->couleur = $c;
  }

  public function getNbrPlaces()
  {
    return $this->nbrPlaces;
  }

  public function setNbrPlaces ($p)
  {
    $this->nbrPlaces = $p;
  }

public function calculerEnergieCinetique()
{
  return 0.5 * $this->masse * $this->vitesse ** 2;
}

  public function afficherMessageDebile()
  {
    echo "Je roule en caisse, azy viens bébé y'a de la place *tap tap sur le coussin* OOH OOH AH AH OOH OOH AH AH OOH OOH AH AH OOH OOH AH AH";
  }

}
