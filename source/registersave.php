<?php

	include "config.php";

		$errors = array();
                
                if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		    $ip = $_SERVER['HTTP_CLIENT_IP'];
		} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		} else {
		    $ip = $_SERVER['REMOTE_ADDR'];
		}

		$sql = "SELECT * FROM accounts";
		$result = mysqli_query($mysqli, $sql);
		$data = mysqli_fetch_assoc($result);

		while($data = mysqli_fetch_assoc($result)) {
			if($_POST['email'] == $data['email'])
			{
				$errors[] = 'yYehMhrg2nMFVkvz';
			}
			if($_POST['name'] == $data['name'])
			{
				$errors[] = 'EhF3rmZPZI7IJ2xX';
			}
            if($ip == $data['ip'])
            {
                $errors[] = 'tgBqu8G3DYvciEHR';
            }
		}


		if( trim($_POST['email']) == '')
		{
			$errors[] = 'cKoNkJ0G8WjJMr9t';
		}
		if( trim($_POST['name']) == '')
		{
			$errors[] = 'V35fRWDbQjKSka62';
		}
		if( $_POST['password'] == '')
		{
			$errors[] = 'y2s6G4EVnm14Qm4P';
		}
		if( strlen($_POST['password']) < 6)
		{
			$errors[] = 'Wt6rMT8dWxE2PUgj';
		}
		if( strlen($_POST['password']) > 30)
		{
			$errors[] = 'TbNNLttsmrmMWVUS';
		}
                
		if( empty($errors) )
		{

			$pass = md5($_POST['password']."2v3ojijv46f");

			$sql = "INSERT INTO accounts (email, name, password, ip) VALUES ('".$_POST['email']."','".$_POST['name']."','".$pass."','".$ip."')";

			if (mysqli_query($mysqli, $sql)) {
			  header("Location: index.php?success=495ZmPEZRySvV2n2");
			} else {
			  echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
			}

		} else 
		{
			header("Location: register.php?error=".array_shift($errors));
		}

?>