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
		$listeNombres = $this->getListeNombres();
		$nombresImpairs = (sizeof($listeNombres) - $this->nombresPairsCompter());
		return $nombresImpairs;

		// Tous les chiffres qui ne sont pas pairs, donc le reste de la liste $listeNombres.
	}

}

$listeNombres = array(12, 13, 14, 185, 170, 177, 17, 56, 71);
$manager = new ArrayManager($listeNombres);
echo 'Nombres pairs : ' . $manager->nombresPairsCompter($listeNombres) . ' / ';
echo 'Nombres impairs : ' . $manager->nombresImpairsCompter($listeNombres);