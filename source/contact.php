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
    <h2>Contact</h2>
    <?php if(isset($_SESSION['status']) == true) { ?>

	<?php

		if ( isset($_GET['success']) && $_GET['success'] == 1 )
		{ ?>
			<div class="contactsucces">
  <span style="color:green;">Your message has been sent successfully!</span>
</div>
<br>
	<?php } ?>
    <form action="/contactsave.php" method="post">
    <!-- <label for="fname">Name</label>
    <input type="text" id="fname" name="name" placeholder="Your name.."> -->
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>
</div>
     
<div class="alertphone"><center><h2>Unfortunately, the size of your device does not correspond to the elements on our page! Come back later or try another device!</h2></center></div>
     
<?php } else { header("Location: index.php"); } ?>

</body>
</html> 
