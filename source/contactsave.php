<?php

	include "config.php";

	$name = $_SESSION['name'];

	$sql = "INSERT INTO contact (name, text) VALUES ('".$name."','".$_POST['subject']."')";


	if (mysqli_query($mysqli, $sql)) {
	  header("Location: contact.php?success=1");
	} else {
	  echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
	}

?>