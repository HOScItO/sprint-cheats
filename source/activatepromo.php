<?php

	require "config.php";
	$promocodes_valabile = array();
	$errors = array();

	$sql_promo = "SELECT * FROM promocodes";
	$all_promo = mysqli_query($mysqli, $sql_promo);

	while($current_promo = mysqli_fetch_assoc($all_promo)) {

		array_push($promocodes_valabile, $current_promo['promocode']);

	}

	// echo json_encode($promocodes_valabile);    <--- echo array of promocodes

	if (!in_array($_POST['promocode'], $promocodes_valabile)) {
		$errors = '1UK3gvxLRiQUqgCY'; // This promocode does not exist
	}

	$sql_current_user = "SELECT promocode FROM accounts WHERE name='".$_SESSION['name']."'";
	$query_current_user = mysqli_query($mysqli, $sql_current_user);
	$current_user_promocode = mysqli_fetch_assoc($query_current_user);

	if(!empty($current_user_promocode['promocode'])){
		$errors = 'Mjoh7RXxxC9lJ4MI'; // Another promo code has been introduced
	}

	$sql_current_promocode_diamonds = "SELECT diamonds FROM promocodes WHERE promocode='".$_POST['promocode']."'";
	$query_current_promocode_diamonds = mysqli_query($mysqli, $sql_current_promocode_diamonds);
	$current_promocode_diamonds = mysqli_fetch_assoc($query_current_promocode_diamonds);

	if(empty($errors)){
		$sql_insert_promo = "UPDATE accounts SET promocode='".$_POST['promocode']."' WHERE name='".$_SESSION['name']."'";
		$query_insert_promo = mysqli_query($mysqli, $sql_insert_promo);
		$_SESSION['diamonds'] = $_SESSION['diamonds'] + $current_promocode_diamonds['diamonds'];
		$sqlupdate = "UPDATE accounts SET diamonds='".$_SESSION['diamonds']."' WHERE name='".$_SESSION['name']."'";
		$save = mysqli_query($mysqli, $sqlupdate);
		header("Location: promocode.php?success=7IuMXPGC3yg1snG8");
	}
	else {
		header("Location: promocode.php?error=".$errors);
	}

?>