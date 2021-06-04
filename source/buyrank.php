<?php require "config.php" ?>
<!DOCTYPE html>
<html>
<?php include "head.php" ?>
<style>
* {
  box-sizing: border-box;
}

.columns {
  float: left;
  width: 33.3%;
  padding: 8px;
}

.price {
  list-style-type: none;
  border: 1px solid #eee;
  margin: 0;
  padding: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}

.price:hover {
  box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2);
}

.price .header {
  background-image: none;
  background-color: #111;
  color: white;
  font-size: 25px;
}

.price li {
  background-image: url(ripples.png);
  padding: 20px;
  text-align: center;
}

.price .grey {
  background-image: none;
  background-color: #eee;
  font-size: 20px;
}

.button {
  background-color: #151519;
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  font-size: 18px;
}

.button:hover {
  background-color: #111;
  color: white;
}

@media only screen and (max-width: 600px) {
  .columns {
    width: 100%;
  }
}
</style>
<body>

<?php include "sidebar.php" ?>
<?php include "data.php" ?>

<?php if(isset($_SESSION['status']) == true){ ?>

<div class="main">
	  <?php include "news.php" ?>
	  <br>
	  <h2 style="text-align:center">Buy rank and become stronger</h2>
	<div class="columns">
	  <ul class="price">
	    <li class="header" style="background: rgb(0,0,0);background: linear-gradient(344deg, rgba(0,0,0,1) 0%, rgba(22,22,22,1) 58%);"><i class="fa fa-fw fa-gift" style="color:pink"></i> Member</li>
	    <li class="grey"><i class="fa fa-fw fa-diamond" style="color:blue"></i> FREE</li>
	    <li class="white">Simple level hacks</li>
	    <li>Download with advertisement</li>
	    <li>Without X+ Diamonds</li>
	    <li>Without Dark theme</li>
	    <li><a href="#" class="button">Bought</a></li>
	  </ul>
	</div>

	<div class="columns">
	  <ul class="price">
	    <li class="header" style="background: rgb(0,35,255); background: linear-gradient(344deg, rgba(0,35,255,1) 0%, rgba(141,0,255,1) 58%);"><i class="fa fa-fw fa-bolt" style="color:blue"></i> Premium</li>
	    <li class="grey"><i class="fa fa-fw fa-diamond" style="color:blue"></i> 10.000</li>
	    <li>Premium level hacks</li>
	    <li>Download without advertisement</li>
	    <li>X2 Diamonds</li>
	    <li>Dark theme</li>
	    <li><a href="#" class="button">SOON</a></li>
	  </ul>
	</div>

	<div class="columns">
	  <ul class="price">
	    <li class="header" style="background: rgb(255,0,0);background: linear-gradient(344deg, rgba(255,0,0,1) 0%, rgba(255,145,0,1) 58%);"><i class="fa fa-fw fa-star" style="color:yellow"></i> King</li>
	    <li class="grey"><i class="fa fa-fw fa-diamond" style="color:blue"></i> 1.000.000</li>
	    <li>Premium level hacks</li>
	    <li>Download without advertisement</li>
	    <li>X5 Diamonds</li>
	    <li>Dark theme</li>
	    <li><a href="#" class="button">SOON</a></li>
	  </ul>
	</div>
</div>
     
<div class="alertphone"><center><h2>Unfortunately, the size of your device does not correspond to the elements on our page! Come back later or try another device!</h2></center></div>
     
<?php } else { header("Location: index.php"); } ?>

</body>
</html> 
