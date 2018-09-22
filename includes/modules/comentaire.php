<div class="section-comentaire">

<?php
/*permet d include dph.php*/
$pref = __FILE__;
$pos = strpos($pref, "psychoschoolVal");
$longeur = strlen($pref);
$aefface = $pos+15-$longeur;
$pref = substr($pref, 0, $aefface);
include_once($pref."/includes/backrownd/dph.php");


$currentPage= $_SERVER["SCRIPT_NAME"];
$nomfile = substr($currentPage, 1);

/*partit qui affiche le com*/
$sql = "SELECT * FROM comentaires WHERE coment_page='$nomfile'";
$result = mysqli_query($conn, $sql);
$resultChek = mysqli_num_rows($result);

if ($resultChek > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		$idcom = $row['coment_id'];
		$pseudo = $row['coment_createur'];
		$date = $row['coment_date'];
		$date = substr($date, 0, -9);
		$content = $row['coment_contenue'];

		echo '<div class="div-commentaire">
				<p class="pseudo-date">'.$pseudo.' - '.$date.'</p>
				<p class="p-commentaire">'.$content.'</p>
			</div>';

		if (isset($_SESSION['u_pseudo']) && $pseudo == $_SESSION['u_pseudo']) {
			echo '<form class="input-commentaire" action="/psychoschoolVal/includes/backrownd/addcoment.php" method="POST">
					<input type="hidden" name="idcoment" value="'.$idcom.'">
					<button class="input-commentaire" type="submit" name="submitsupp">&times;</button>
				</form>';
		}
	}
}

/*formulaire pr le comentaire*/
if (!isset($_SESSION['u_id'])) {
	echo "<p>Conecter vous pour poster un comentaire</p>";
} else {
	echo '<form class="form-formulaire-comment" action="/psychoschoolVal/includes/backrownd/addcoment.php" method="POST">
		<textarea class="textarea-formulaire-comment" name="coment" placeholder="Ecris ton commentaire..."></textarea>
		<input type="hidden" name="nomfile" value="'.$nomfile.'">
		<button class="button-formulaire-comment" type="submit" name="submitsolo">Publier</button>
	</form>';
}

?>
</div>