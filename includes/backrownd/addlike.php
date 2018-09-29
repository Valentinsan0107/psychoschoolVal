<?php
session_start();
include_once('dph.php');
include_once('oldpage.php');

if (isset($_SESSION['u_id'])) {
	$user = $_SESSION['u_pseudo'];
	$pagelike = $_GET['nomfile'];

	if (isset($_GET['like'])) {
		$sql = "INSERT INTO likes (like_page, like_user) VALUES ('$pagelike', '$user');";
		$result = mysqli_query($conn, $sql);

		header("Location: ".$nompage);
	}elseif (isset($_GET['dislike'])) {
		$sql = "DELETE FROM likes WHERE like_user='$user' and like_page='$pagelike'";
		$result = mysqli_query($conn, $sql);
		header("Location: ".$nompage);
	}else{
		header("Location: ".$nompage."?like=error");
	}
}else{
	header("Location: ".$nompage."?addlike=notconected");
}