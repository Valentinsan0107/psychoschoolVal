<!DOCTYPE html>
<html>
<head>
	<title>Modifer article</title>
</head>
<body>
<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "Logins1";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if (isset($_GET['idcoment'])) {
	$id = $_GET['idcoment'];

	$sql = "SELECT * FROM article WHERE article_id='$id'";
	$result = mysqli_query($conn, $sql);
	$resultChek = mysqli_num_rows($result);
	if ($resultChek == 1) {
		$row = mysqli_fetch_assoc($result);
		$ANom = $row['article_nom'];
		$ATitre = $row['article_titre'];
		$AResumer = $row['article_resumer'];
		$ATitrehaut = $row['article_titrehaut'];
		$ATag = $row['article_tag'];
		$Aprix = $row['article_prix'];
		$Alien = $row['article_lien'];
		$Anote = $row['article_note'];
		$Amotclef = $row['article_motclef'];
		$Adescription = $row['article_description'];

		echo '<form method="POST" action="includes/modifebacrownd.php" enctype="multipart/form-data">
			Nom:<input type="text" name="ANom" value="'.$ANom.'">
			Titre:<input type="text" name="ATitre" value="'.$ATitre.'">
			Resumer:<input type="text" name="AResumer" value="'.$AResumer.'">
			Titre qui apparait dans l url:<input type="text" name="ATitrehaut" value="'.$ATitrehaut.'">
			Prix:<input type="number" name="Aprix" value="'.$Aprix.'">
			Note:<input type="number" name="Anote" value="'.$Anote.'">
			Lien:<input type="text" name="ALien" value="'.$Alien.'">
			<br> Mot clef:<input type="text" name="Amotclef" value="'.$Amotclef.'">
			description:<input type="text" name="Adescription" value="'.$Adescription.'">
			<br>Tags:<textarea name="Atag">'.$ATag.'</textarea>
			<input type="hidden" name="Aid" value="'.$id.'">
			<button type="submit" name="submit">Modifier</button>
		</form><br>';



		echo '<form action="includes/upload.php" method="POST" enctype="multipart/form-data">
			Changer le fichier:<input type="file" name="file" accept=".html, .php">
			<input type="hidden" name="Aid" value="'.$id.'"><br>
			<button type="submit" name="submithtml">Upload</button>
		</form>';
		if (file_exists("../psychoschoolVal/uploads/html/".$id.".html") || file_exists("../psychoschoolVal/uploads/html/".$id.".php")) {
			echo "Un fichier existe<br>";
		}else{
			echo "Aucun fichier n'existe<br>";
		}
		echo '<br><form action="includes/upload.php" method="POST" enctype="multipart/form-data">
			Changer l image de couverture:<input type="file" name="file" accept=".png, .jpg">
			<input type="hidden" name="Aid" value="'.$id.'"><br>
			<button type="submit" name="submitjpg">Upload</button>
		</form>';
		echo '<br><br><form action="choiximage.php" method="GET" enctype="multipart/form-data">
			<input type="hidden" name="idcoment" value="'.$id.'"><br>
			<button type="submit" name="submit">Changer les image pr le site</button>
		</form>';
		echo '<form action="choiximageYtb.php" method="GET" enctype="multipart/form-data">
			<input type="hidden" name="idcoment" value="'.$id.'"><br>
			<button type="submit" name="submit">Changer les image de youtubeur</button>
		</form>';
	}
}
?>

<br><a href="index.php">Home</a>
</body>
</html>