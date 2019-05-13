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
	$sql = "SELECT * FROM article WHERE article_id='$id'";
	$result = mysqli_query($conn, $sql);
	$resultChek = mysqli_num_rows($result);
	if ($resultChek == 1) {
		$row = mysqli_fetch_assoc($result);
		$Aimg = $row['article_image'];
		$fileExt = explode(',', $Aimg);
		foreach ($fileExt as $nb => $nom) {
			if ($nb!=0) {
				echo $nom;
				echo '<form action="includes/suppimg.php" method="GET">
					<input type="hidden" name="nomimg" value="'.$nom.'">
					<input type="hidden" name="Aid" value="'.$id.'">
					<button type="submit" name="submit">suprrimer</button>
				</form>';
			}
		}
	}

	echo '<form action="includes/choiximageback.php" method="POST" enctype="multipart/form-data">
		Changer image de couvertures:<input type="file" name="files[]" accept=".png, .jpg" multiple>
		<input type="hidden" name="Aid" value="'.$id.'"><br>
		<button type="submit" name="submitjpg">Upload</button>
	</form>';

		
	echo '<br><form method="GET" action="modifier.php">
			<input type="hidden" name="idcoment" value="'.$id.'">
			<button type="submit" name="submit">Retour</button>
		</form>';
}

?>
</body>
</html>