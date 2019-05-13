<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "Logins1";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if (isset($_GET['submitajout'])) {
	$page = mysqli_real_escape_string($conn, $_GET['fichier']);
	$titre = mysqli_real_escape_string($conn, $_GET['titre']);
	$contenue = mysqli_real_escape_string($conn, $_GET['content']);
	$date = date("Y-m-d H/i/s");
	
	$sql = "INSERT INTO article (article_nom, article_titre, article_resumer, article_date) VALUES ('$page', '$titre', '$contenue', '$date');";
	$result = mysqli_query($conn, $sql);
			
	header("Location: ../index.php");

}elseif (isset($_GET['submitsupp'])) {
	$id = $_GET['idcoment'];

	$sql = "SELECT * FROM article WHERE  article_id='$id'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$nom = $row['article_nom'];
	$Aimage = $row['article_image'];
	$fileExt = explode(',', $Aimage);
	foreach ($fileExt as $key => $nomim) {
		unlink("../../psychoschoolVal/uploads/images/".$nomim);
	}

	$sql = "DELETE FROM article WHERE article_id='$id'";
	$result = mysqli_query($conn, $sql);


	$sql = "DELETE FROM likes WHERE like_page='$nom'";
	$result = mysqli_query($conn, $sql);

	$sql = "DELETE FROM comentaires WHERE coment_page='$nom'";
	$result = mysqli_query($conn, $sql);

	
	$pathsansex = "../../psychoschoolVal/uploads/html/".$id;
	$pathphp = $pathsansex.".php";
	$pathhtml = $pathsansex.".html";

	if(file_exists($pathhtml) || file_exists($pathphp)){
		if (!unlink($pathhtml)) {
			if (!unlink($pathphp)) {
				echo "error";
			}else{
				header("Location: ../index.php");
			}
		}else{
			header("Location: ../index.php");
		}
	}else{
		header("Location: ../index.php");
	}
}

?>