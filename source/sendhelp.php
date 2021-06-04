<?php

	include "config.php";

	$sql = "INSERT INTO help (email,problem) VALUES ('".$_POST['email']."','".$_POST['problem']."')";

	if (mysqli_query($mysqli, $sql)) {
	  header("Location: help.php?success=1");
	} else {
	  echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
	}

?>