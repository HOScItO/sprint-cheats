<?php require "config.php" ?>
<!DOCTYPE html>
<html>
<?php include "head.php" ?>
<body>

<?php include "sidebar.php" ?>
<?php include "data.php" ?>

<?php if(isset($_SESSION['status']) == true && isset($_SESSION['admin']) == true) { ?>

<div class="main">
  <?php include "news.php" ?>
  <br>
  <div class="contactform">
    <form action="/addclient.php" method="post">
    <!-- <label for="fname">Name</label>
    <input type="text" id="fname" name="name" placeholder="Your name.."> -->
    <label for="img">Image client</label>
    <input type="text" id="ing" name="img" placeholder="Enter client img..">
    <label for="name">Client name</label>
    <input type="text" id="name" name="name" placeholder="Enter client name..">
    <label for="filter">Client filter</label>
    <input type="text" id="filter" name="filter" placeholder="Enter client filter..">
    <label for="version">Client version</label>
    <input type="text" id="version" name="version" placeholder="Enter client version..">
    <label for="price">Client price</label>
    <input type="text" id="price" name="price" placeholder="Enter client price..">
    <label for="link">Client download link</label>
    <input type="text" id="link" name="link" placeholder="Enter client link..">
    <br><br>
    <input type="submit" value="Add client">
  </form></div>
</div>
     
<div class="alertphone"><center><h2>Unfortunately, the size of your device does not correspond to the elements on our page! Come back later or try another device!</h2></center></div>
     
<?php } else { header("Location: index.php"); } ?>

</body>
</html> 
