<!DOCTYPE html>
<html>
<head>
	<title>pute</title>
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
	if (file_exists("../psychoschoolVal/uploads/imageyoutubeur/".$id."-1.jpg")) {
		echo "image 1 exist";
		echo '<form action="includes/uploadimageytb.php" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="Aid" value="'.$id.'">
		<input type="hidden" name="NbI" value="1">
		<button type="submit" name="submitold">Effacer</button>
		</form><br>';
	}
	if (file_exists("../psychoschoolVal/uploads/imageyoutubeur/".$id."-2.jpg")) {
		echo "image 2 exist";
		echo '<form action="includes/uploadimageytb.php" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="Aid" value="'.$id.'">
		<input type="hidden" name="NbI" value="2">
		<button type="submit" name="submitold">Effacer</button>
		</form><br>';
	}
	if (file_exists("../psychoschoolVal/uploads/imageyoutubeur/".$id."-3.jpg")) {
		echo "image 3 exist";
		echo '<form action="includes/uploadimageytb.php" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="Aid" value="'.$id.'">
		<input type="hidden" name="NbI" value="3">
		<button type="submit" name="submitold">Effacer</button>
		</form><br>';
	}

	echo '<form action="includes/uploadimageytb.php" method="POST" enctype="multipart/form-data">
		Nouvelle image de youtubeur	:<input type="file" name="file" accept=".jpg" >
		<input type="hidden" name="Aid" value="'.$id.'"><br>
		<button type="submit" name="submitnew">Upload</button>
	</form>';

		
	echo '<br><form method="GET" action="modifier.php">
			<input type="hidden" name="idcoment" value="'.$id.'">
			<button type="submit" name="submit">Retour</button>
		</form>';
}

?>
</body>
</html>