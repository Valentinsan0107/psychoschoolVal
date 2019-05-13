<!DOCTYPE html>
<html>
<head>
	<title>Gestion psycoschool</title>
</head>
<body>

<?php
session_start();

if (isset($_SESSION["adminco"])){
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "Logins1";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

$sql = "SELECT * FROM article";
$result = mysqli_query($conn, $sql);
$resultChek = mysqli_num_rows($result);

if ($resultChek > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		echo "nom fichier:".$row['article_nom']."  titre:".$row['article_titre'];
		if ($row['article_thechnique'] ==	 1) {
			echo '<form action="includes/changevaleur.php" method="GET">
				<input name="idarticle" type="hidden" value="'.$row['article_id'].'">
				<input name="nvvaleur" type="hidden" value="0">
				<button type="submit" name="submitthec">Afficher dans Technique</button>
			</form>';
		}else{
			echo '<form action="includes/changevaleur.php" method="GET">
				<input name="idarticle" type="hidden" value="'.$row['article_id'].'">
				<input name="nvvaleur" type="hidden" value="1">
				<button type="submit" name="submitthec">Affichet dans materiel</button>
			</form>';			
		}
		if ($row['article_priorite'] == 1) {
			echo '<form action="includes/changevaleur.php" method="GET">
				<input name="idarticle" type="hidden" value="'.$row['article_id'].'">
				<input name="nvvaleur" type="hidden" value="0">
				<button type="submit" name="submitprio">Priorite</button>
			</form>';			
		}else{
			echo '<form action="includes/changevaleur.php" method="GET">
				<input name="idarticle" type="hidden" value="'.$row['article_id'].'">
				<input name="nvvaleur" type="hidden" value="1">
				<button type="submit" name="submitprio">Pas priorite</button>
			</form>';			
		}

		echo '<form method="GET" action="modifier.php">
			<input type="hidden" name="idcoment" value="'.$row['article_id'].'">
			<button type="submit" name="submit">Modifier</button>
		</form>';

		echo '<form method="GET" action="includes/ficher.php">
			<input type="hidden" name="idcoment" value="'.$row['article_id'].'">
			<button type="submit" name="submitsupp">supp</button>
		</form>';
	}
}
echo "<br>";



echo'<form action="includes/ficher.php" method="GET">
	<input type="text" name="fichier" placeholder="fichier">
	<input type="text" name="titre" placeholder="titre">
	<textarea name="content" placeholder="resumer"></textarea>
	<button  type="submit" name="submitajout">Publier</button>
</form><br>

<h2>Tags tech</h2>';

$sql = "SELECT * FROM Tags_Liste WHERE Nom='Tech'";
$result = mysqli_query($conn, $sql);
$resultChek = mysqli_num_rows($result);
$infotag = "";
if ($resultChek == 1) {
	$row = mysqli_fetch_assoc($result);
	$infotag = $row['Tags'];
}
echo '<form method="GET" action="includes/tagchange.php">
	<textarea name="tags">'.$infotag.'</textarea>
	<button type="submit" name="submittech">Go</button>
</form>';

}else{
	echo '<form action="conection_gestion.php" method="POST">
	<input type="text" name="code">
	<button  type="submit" name="Submit">Conection</button>
</form>';
}
?>

</body>
</html>