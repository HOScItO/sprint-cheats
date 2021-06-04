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
<form action="/loginauth.php" method="post">
	<h2>Login</h2>

	<?php

		if ( isset($_GET['success']) && $_GET['success'] == '495ZmPEZRySvV2n2' )
		{ ?>
					<div class="contactsucces">
		  <span style="color:green;">Your account has been successfully registered!</span>
		</div>
		<br>
	<?php } ?>

	<?php

		if ( isset($_GET['error']) && $_GET['error'] == 'G2rUy9m4CUpkepu6' )
		{ ?>
					<div class="contactsucces">
		  <span style="color:red;">Email or password is incorect!</span>
		</div>
		<br>
	<?php } ?>

	<?php

		if ( isset($_GET['success']) && $_GET['success'] == 'KbXjvs9yXp5x22HB' )
		{ ?>
					<div class="contactsucces">
		  <span style="color:green;">You has been logged in ! Succesfuly :)</span>
		</div>
		<br>
	<?php } ?>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Your email.." required>

    <label for="password">Password</label>
    <input type="password" id="password" name="password" placeholder="Your password.." required>
    <input type="submit" value="Submit">
  </form>
  
  <div class="container signin">
    <p>Don't have an account yet? <a href="register.php">Sign up</a>.</p>
    <p>If you have an account issue, <a href="help.php">leave it here</a>.</p>
  </div>
</form>

</div>
</div>
     
<div class="alertphone"><center><h2>Unfortunately, the size of your device does not correspond to the elements on our page! Come back later or try another device!</h2></center></div>
     
</body>
</html> 
