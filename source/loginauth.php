<?php

	include "config.php";

	$errors = array();
	$email = $_POST['email'];
	$pass = md5($_POST['password']."2v3ojijv46f");

	$sql = "SELECT * FROM accounts WHERE email='$email' AND password='$pass'";
	$result = mysqli_query($mysqli, $sql);

	$data = mysqli_fetch_assoc($result);

	if($data == 0){
		$errors[] = 'G2rUy9m4CUpkepu6';
		header("Location: login.php?error=".array_shift($errors));
	}else {
		$_SESSION['status'] = true;
		$_SESSION['name'] = $data['name'];
		$_SESSION['diamonds'] = $data['diamonds'];
		$_SESSION['rank'] = $data['rank'];
		if($data['rank'] == 'Admin'){
			$_SESSION['admin'] = true;
		}
		header("Location: index.php");
	}

?>