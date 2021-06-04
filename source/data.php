<?php

	if(isset($_SESSION['status']) == true){

		$sql = "SELECT * FROM accounts WHERE name='".$_SESSION['name']."'";
		$result = mysqli_query($mysqli, $sql);
		$data = mysqli_fetch_assoc($result);
		$_SESSION['diamonds'] = $data['diamonds'];
		$_SESSION['rank'] = $data['rank'];
		if($data['rank'] == 'Admin'){
			$_SESSION['admin'] = true;
		}
		$_SESSION['status'] = true;

	}

?>