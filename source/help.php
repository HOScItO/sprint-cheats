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
    <h2>If you have a problem with your account, please contact us!</h2>

	<?php

		if ( isset($_GET['success']) && $_GET['success'] == 1 )
		{ ?>
			<div class="contactsucces">
  <span style="color:green;">Your message has been sent successfully!</span>
</div>
<br>
	<?php } ?>
    <form action="/sendhelp.php" method="post">
    <label for="email">Your email</label>
    <input type="email" id="email" name="email" placeholder="Your email.." required>
    <textarea id="problem" name="problem" placeholder="Write your problem.." style="height:200px" required></textarea>

    <input type="submit" value="Submit">
  </form>
</div>
</div>
     
<div class="alertphone"><center><h2>Unfortunately, the size of your device does not correspond to the elements on our page! Come back later or try another device!</h2></center></div>

</body>
</html> 
