<?php
function datetotext($datebase){
	$dates = explode("-", $datebase);
	$anne = $dates[0];
	$moisnum = $dates[1];
	$jour = $dates[2];
	
	$infomois = array("01" => "Janvier", "02" => "Février", "03" => "Mars", "04" => "Avril", "05" => "Mai", "06" => "Juin", "07" => "Juillet", "08" => "Août", "09" => "Septembre", "10" => "Octobre", "11" => "Novembre", "12" => "Décembre");
	$datefinal = $jour." ".$infomois[$moisnum]." ".$anne;
	return $datefinal;
	
}
?>