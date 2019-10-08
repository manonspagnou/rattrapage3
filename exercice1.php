<?php

$listeNombres = array(12, 13, 14, 185, 170, 177, 178);

$nombresPairs = nombresPairsCompter($listeNombres);
	echo $nombresPairs;

function nombresPairsCompter($listeNombres)
{
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
