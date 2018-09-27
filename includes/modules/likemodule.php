<?php  
$pref = __FILE__;
$pos = strpos($pref, "psychoschoolVal");
$longeur = strlen($pref);
$aefface = $pos+15-$longeur;
$pref = substr($pref, 0, $aefface);
include_once($pref."/includes/backrownd/dph.php");

$currentPage= $_SERVER["SCRIPT_NAME"];
$nomfile = substr($currentPage, 1);

/*partit qui affiche les like*/
$sql = "SELECT * FROM likes WHERE like_page='$nomfile'";
$result = mysqli_query($conn, $sql);
$resultChek = mysqli_num_rows($result);

if($resultChek = 1){
	while ($row = mysqli_fetch_assoc($result)) {
		$nblike = $row['like_number'];
	}
	print($nblike);
}else{
	print "like error";
}
?>