<?php
if(isset($_GET['submit'])){
	$nom = $_GET['nomimg'];
	$id = $_GET['Aid'];

	$dbServername = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "Logins1";

	$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

	$sql = "SELECT * FROM article WHERE article_id='$id'";
	$result = mysqli_query($conn, $sql);
	$resultChek = mysqli_num_rows($result);
	if ($resultChek == 1) {
		$row = mysqli_fetch_assoc($result);
		$Aimg = $row['article_image'];
		$Aimgnv = str_replace(",".$nom, "", $Aimg);
		$sql = "UPDATE article SET article_image='$Aimgnv' WHERE article_id='$id'";
		$result = mysqli_query($conn, $sql);
		unlink("../../psychoschoolVal/uploads/images/".$nom);
	}
	
	header("Location: ".$_SERVER['HTTP_REFERER']);
}