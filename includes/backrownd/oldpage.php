<?php

$url = $_SERVER['HTTP_REFERER'];

$nompage = $url;
$pos = strpos($url, "?");

if ($pos === false) {
	$nompageSansget = $url;
	$nompagesuite = $url."?";
} else {
	$nbc = strlen($url);
	$enlev = $pos - $nbc;
	$nompageSansget = substr($url, 0, $enlev);
	$nompagesuite = $url."&";
}

