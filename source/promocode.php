<?php include "config.php" ?>
<!DOCTYPE html>
<html>
<?php include "head.php" ?>
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
  transition: 0.3s;
}

table:hover {
	box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2);
}

th {
	background-image: url(patternsidebar.png);
	color : white;
}

th, td {
  background-color : white;
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}
</style>
<body>

<?php include "sidebar.php" ?>

<div class="main">
  <?php include "news.php" ?>
  <?php include "data.php" ?>
  <div class="contactform">
	<br>
	<?php

		if ( isset($_GET['success']) && $_GET['success'] == '7IuMXPGC3yg1snG8' )
		{ ?>
			<div class="contactsucces">
		  <span style="color:green;">The promocode has been successfully activated!</span>
		</div>
		<br>
	<?php } ?>

	<?php

		if ( isset($_GET['error']) && $_GET['error'] == '1UK3gvxLRiQUqgCY' )
		{ ?>
			<div class="contactsucces">
		  <span style="color:red;">This promocode does not exist!</span>
		</div>
		<br>
	<?php } ?>

	<?php

		if ( isset($_GET['error']) && $_GET['error'] == 'Mjoh7RXxxC9lJ4MI' )
		{ ?>
			<div class="contactsucces">
		  <span style="color:red;">You have already entered a promo	code!</span>
		</div>
		<br>
	<?php } ?>




    <h2>Activate promocode</h2>
    <?php if(isset($_SESSION['status']) == true) { ?>
    <form action="/activatepromo.php" method="post">
    <label for="promocode">Promocode</label>
    <input type="text" id="promocode" name="promocode" placeholder="Your promocode.." required>
    <input type="submit" value="Activate promocode">
	<?php

	$sql = "SELECT promocode FROM accounts WHERE name='".$_SESSION['name']."'";
	$result = mysqli_query($mysqli, $sql);
	$data = mysqli_fetch_assoc($result);

	$sql2 = "SELECT diamonds FROM promocodes WHERE promocode='".$data['promocode']."'";
	$result2 = mysqli_query($mysqli, $sql2);
	$data2 = mysqli_fetch_assoc($result2);
	if($data['promocode'] != ''){ ?>
    <br>
    <h2>Activated promocode</h2>
    <table style="width: 455px">
		  <tr>
		    <th>Promocode name</th>
		    <th>Diamonds</th>
		  </tr>
		  <tr>
		    <td><?php echo $data['promocode']; ?></td>
		    <td><?php echo $data2['diamonds']; ?></td>
		  </tr>
	</table>
	<?php } ?>
  </form>
</div>
</div>
     
<div class="alertphone"><center><h2>Unfortunately, the size of your device does not correspond to the elements on our page! Come back later or try another device!</h2></center></div>
     
<?php } else { header("Location: index.php"); } ?>

</body>
</html> 
