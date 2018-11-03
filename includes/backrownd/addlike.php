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

		$sql = "SELECT * FROM article where article_nom = '$pagelike'";
		$result = mysqli_query($conn, $sql);
		$resultChek = mysqli_num_rows($result);
		
		$nblike = 0;
		if ($resultChek == 1) {
			$row = mysqli_fetch_assoc($result);
			$nblike	= $row['article_like']+1;
		}

		

		$sql = "UPDATE article SET article_like = '$nblike' WHERE article_nom = '$pagelike'";
		$result = mysqli_query($conn, $sql);
		header("Location: ".$nompage."&y=".$nblike);

	}elseif (isset($_GET['dislike'])) {
		$sql = "DELETE FROM likes WHERE like_user='$user' and like_page='$pagelike'";
		$result = mysqli_query($conn, $sql);

		$sql = "SELECT * FROM article where article_nom = '$pagelike'";
		$result = mysqli_query($conn, $sql);
		$resultChek = mysqli_num_rows($result);
		
		$nblike = 0;
		if ($resultChek == 1) {
			$row = mysqli_fetch_assoc($result);
			$nblike	= $row['article_like']-1;
		}
		$sql = "UPDATE article SET article_like = '$nblike' WHERE article_nom = '$pagelike'";
		$result = mysqli_query($conn, $sql);

		header("Location: ".$nompage);
	}else{
		header("Location: ".$nompagesuite."like=error");
	}
}else{
	header("Location: ".$nompagesuite."addlike=notconected");
}