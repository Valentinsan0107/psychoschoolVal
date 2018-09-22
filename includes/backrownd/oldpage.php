<?php

$nompage = "";
$url = $_SERVER['HTTP_REFERER'];
$pos = strpos($url, "?");
if ($pos === false) {
	$nompage = $url;
} else {
	$nbc = strlen($url);
	$enlev = $pos - $nbc;
	$nompage = substr($url, 0, $enlev);
}

