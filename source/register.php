<?php include "config.php" ?>
<!DOCTYPE html>
<html>
<?php include "head.php" ?>
<body>

<?php include "sidebar.php" ?>

<div class="main">
<?php include "news.php" ?>
<?php include "data.php" ?>

<div class="contactform">

<form action="/registersave.php" method="post">
	<h2>Registration</h2>

	<?php

		if ( isset($_GET['error']) && $_GET['error'] == 'cKoNkJ0G8WjJMr9t' )
		{ ?>
					<div class="contactsucces">
		  Please enter your email address !
		</div>
		<br>
	<?php } ?>

	<?php

		if ( isset($_GET['error']) && $_GET['error'] == 'tgBqu8G3DYvciEHR' )
		{ ?>
					<div class="contactsucces">
		  <span style="color:red;">You can't make more than one account !</span>
		</div>
		<br>
	<?php } ?>

	<?php

		if ( isset($_GET['error']) && $_GET['error'] == 'V35fRWDbQjKSka62' )
		{ ?>
					<div class="contactsucces">
		  <span style="color:red;">Please enter your name !</span>
		</div>
		<br>
	<?php } ?>

	<?php

		if ( isset($_GET['error']) && $_GET['error'] == 'y2s6G4EVnm14Qm4P' )
		{ ?>
					<div class="contactsucces">
		  <span style="color:red;">Please enter your password !</span>
		</div>
		<br>
	<?php } ?>

	<?php

		if ( isset($_GET['error']) && $_GET['error'] == 'Wt6rMT8dWxE2PUgj' )
		{ ?>
					<div class="contactsucces">
		  <span style="color:red;">Your password is too short!</span>
		</div>
		<br>
	<?php } ?>

	<?php

		if ( isset($_GET['error']) && $_GET['error'] == 'TbNNLttsmrmMWVUS' )
		{ ?>
					<div class="contactsucces">
		  <span style="color:red;">Your password is too long!</span>
		</div>
		<br>
	<?php } ?>

	<?php

		if ( isset($_GET['error']) && $_GET['error'] == 'yYehMhrg2nMFVkvz' )
		{ ?>
					<div class="contactsucces">
		  <span style="color:red;">The email you entered is already registered!</span>
		</div>
		<br>
	<?php } ?>

	<?php

		if ( isset($_GET['error']) && $_GET['error'] == 'EhF3rmZPZI7IJ2xX' )
		{ ?>
					<div class="contactsucces">
		  <span style="color:red;">The name you entered is already registered!</span>
		</div>
		<br>
	<?php } ?>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Your email.."	 required>

    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Your name.." required>

    <label for="password">Password</label>
    <input type="password" id="password" name="password" placeholder="Your password.." required>

    <input type="submit" value="Submit">
  </form>
  
  <div class="container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
    <p>If you have an account issue, <a href="help.php">leave it here</a>.</p>
  </div>
</form>

</div>
</div>
     
<div class="alertphone"><center><h2>Unfortunately, the size of your device does not correspond to the elements on our page! Come back later or try another device!</h2></center></div>
     
</body>
</html> 
