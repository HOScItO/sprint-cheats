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
<?php include "data.php" ?>

<div class="main">
	  <div class="contactsucces cfon">
	  Black Lives Matter. Support <a href="https://support.eji.org/give/153413/#!/donation/checkout">the Equal Justice Initiative</a> and <a href="https://www.gofundme.com/f/georgefloyd">the George Floyd Memorial Fund.</a>
	  </div>
	  <h3 align="right">Version 3.1</h3>
	  <h2>What is <i class="fa fa-fw fa-check-square"></i>Sprint Cheats ?</h2>
	  <p>Sprint Cheats is a hack client distribution platform.<br>We give hacks for different popular games and we are not responsible for their use!<br> There are many distribution platforms of these hacks, only that our differs in ease and accessibility.</p>
	  <h2>How can I download these hacks ?</h2>
	  <p>Just go to the "Clients / Hacks" page and from there you will continue the adventure..</p>
	  <h2>Are these hacks dangerous and have viruses?</h2>
	  <p>Not because we check these hacks and test their functionality! But for even better verification, you can test them separately on <a href="https://www.virustotal.com/gui/home/upload">virustotal</a> !</p>
	  <h2>Top 5 the richest users !</h2>
	  <table style="width: 500px">
		  <tr>
		    <th>Name</th>
		    <th>Diamonds</th>
		    <th>Rank</th>
		  </tr>
	  <?php 
	  	$sql = "SELECT * FROM accounts ORDER BY diamonds DESC LIMIT 5";
		$result = mysqli_query($mysqli, $sql);
		while($row = mysqli_fetch_assoc($result)) {
	  ?>
		  <tr>
		    <td><?php echo $row['name'] ?></td>
		    <td><?php echo $row['diamonds'] ?></td>
		    <td><?php echo $row['rank'] ?></td>
		  </tr>
		 <?php } ?>
	</table>
</div>
     
<div class="alertphone"><center><h2>Unfortunately, the size of your device does not correspond to the elements on our page! Come back later or try another device!</h2></center></div>
     
</body>
</html> 
