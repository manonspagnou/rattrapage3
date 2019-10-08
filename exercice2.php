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

	public function nombresPairsImpairsCompter()
	{
		$listeNombres = $this->getListeNombres();
		$nombresPairs = null;
		$nombesImpairs = null;
		$size = sizeof($listeNombres);

		for ($i = 0; $i < $size; $i++) {
			$nombreCourant = $listeNombres[$i];
			if ($nombreCourant %2 == 0) {
				$nombresPairs = $nombresPairs +1;
			}
			else ($nombreCourant %2 != 0) {
				$nombresImpairs = $nombresImpairs +1;
			}
		}
		return $nombresPairs;
		return $nombesImpairs;
	}

}

$listeNombres = array(12, 13, 14, 185, 170, 177, 178);
$manager = new ArrayManager($listeNombres);
echo $listeNombres->nombresPairsImpairsCompter();
