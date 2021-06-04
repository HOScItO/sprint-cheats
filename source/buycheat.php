<?php 

	require "config.php";

	if(isset($_SESSION['status']) == true){

	$price = array();
	$link = array();
	$valabile = array();

	$sql = "SELECT * FROM clients";
	$result = mysqli_query($mysqli, $sql);

	while($row = mysqli_fetch_assoc($result)) {
		if ( isset($_GET['client']) && $_GET['client'] == $row['id'] ){
			$price = $row['price'];
			$link = $row['download'];
			$valabile = true;
		}
	}

	if($valabile != true){
		header("Location: /clients.php");
	}
	else {
		$currentdiamonds = $_SESSION['diamonds'];
		if($price <= $currentdiamonds){
			$_SESSION['diamonds'] = $_SESSION['diamonds'] - $price;
			$sqlupdate = "UPDATE accounts SET diamonds='".$_SESSION['diamonds']."' WHERE name='".$_SESSION['name']."'";
			$save = mysqli_query($mysqli, $sqlupdate);
			header("Location: ".$link);
		} else {
			header("Location: clients.php?error=dYvi6Re1EOxHjTTe");
		}
	}
}
else {
	header("Location: /index.php");
}
?>