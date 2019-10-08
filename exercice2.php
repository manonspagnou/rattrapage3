<?php

class ArrayManager {

	private $listeNombres;
	private $nombresPairs;
	private $nombresImpairs;

	public function __construct($listeNombres)
	{
		$this->setListeNombres($listeNombres);
	}

	public function getListeNombres()
	{
		return $this->listeNombres;
	}

	public function setListeNombres($listeNombres)
	{
		$this->listeNombres = $listeNombres;
	}

	public function nombresPairsCompter()
	{
		$listeNombres = $this->getListeNombres();
		$nombresPairs = null;
		$size = sizeof($listeNombres);

		for ($i = 0; $i < $size; $i++) {
			$nombreCourant = $listeNombres[$i];
			if ($nombreCourant %2 == 0) {
				$nombresPairs = $nombresPairs +1;
			}
		}
		return $nombresPairs;
	}

	public function nombresImpairsCompter()
	{
		$nombresImpairs = (sizeof($this->listeNombres) - $this->nombresPairsCompter());
		return $nombresImpairs;
	}

	// Nombres impairs = tous les autres chiffres de la liste qui ne sont pas pairs. 
	// (taille de la liste - nombres pairs)

}

$listeNombres = array(12, 13, 14, 185, 170, 177, 17);
$manager = new ArrayManager($listeNombres);
echo 'Nombres pairs : ' . $manager->nombresPairsCompter() . ' / ';
echo 'Nombres impairs : ' . $manager->nombresImpairsCompter();