<?php

session_start();
include_once('../dph.php');
include_once('../oldpage.php');

if(!isset($_POST['submit'])){
	header("Location: ../../../log-in.php?loginsignup=signuperror");
	exit();
}else{
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['password']);
	$sql = "SELECT * FROM users WHERE user_pseudo='$uid' OR user_email='$uid'";
	$result = mysqli_query($conn, $sql);
	$resultChek = mysqli_num_rows($result);
	if($resultChek < 1){
		header("Location: ../../../log-in.php?loginsignup=signuperror");
		exit();
	}else{
		if ($row = mysqli_fetch_assoc($result)) {
			$hasehdpasschek = password_verify($pwd, $row['user_password']);
			if ($hasehdpasschek == false) {
				header("Location: ../../../log-in.php?loginsignup=signuperror");
				exit();
			} else {
				if ($row['user_confirmed'] == 0) {
					header("Location: ../../../log-in.php?loginsignup=notconfirmed");
				}else{
					$_SESSION['u_id'] = $row['user_id'];
					$_SESSION['u_email'] = $row['user_email'];
					$_SESSION['u_pseudo'] = $row['user_pseudo'];
					$_SESSION['u_password'] = $row['user_password'];
					header("Location: ../../../index.php");
					exit();
				}
			}
		}
	}
}