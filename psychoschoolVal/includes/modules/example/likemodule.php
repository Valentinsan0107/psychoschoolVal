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

echo $resultChek;

$userlikechek = 0;

if($resultChek > 0 && isset($_SESSION['u_pseudo'])){
	while ($row = mysqli_fetch_assoc($result)) {
		if ($row['like_user'] == $_SESSION['u_pseudo']) {
			$userlikechek = 1;
		}
	}
}
if (isset($_SESSION['u_id'])) {
	if ($userlikechek == 0) {
		echo '<form method="POST" action="/psychoschoolVal/includes/backrownd/addlike.php">
				<input type="hidden" name="nomfile" value="'.$nomfile.'">
				<button type="submit" name="like">like</button>
			</form>';
	}elseif ($userlikechek == 1) {
		echo '<form method="POST" action="/psychoschoolVal/includes/backrownd/addlike.php">
				<input type="hidden" name="nomfile" value="'.$nomfile.'">
				<button type="submit" name="dislike">dislike</button>
			</form>';
	}
}


?>