<?php require "config.php" ?>
<!DOCTYPE html>
<html>
<?php include "head.php" ?>
<body>

<?php include "sidebar.php" ?>

<div class="main">
<div class="container">
<?php include "news.php" ?><br>
<?php include "data.php" ?>


<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> All Hacked Clients</button>
  <button class="btn" onclick="filterSelection('minecraft')"> Minecraft</button>
  <button class="btn" onclick="filterSelection('gtasa')"> GTA San Andreas</button>
  <button class="btn" onclick="filterSelection('roblox')"> Roblox</button>
  <button class="btn" onclick="filterSelection('cs16')"> Counter-Strike 1.6</button>
</div>

<div class="container">
  <?php

    if ( isset($_GET['error']) && $_GET['error'] == 'dYvi6Re1EOxHjTTe' )
    { ?>
          <div class="contactsucces" style="max-width: 435px">
      <span style="color:red;">You don't have enough diamonds to pay for this hacked client !</span>
    </div>
    <br>
  <?php } ?>
  <?php 

      $sql = "SELECT * FROM clients ORDER BY id DESC";
      $result = mysqli_query($mysqli, $sql);

        while($row = mysqli_fetch_assoc($result)) {
          ?>

      <div class="filterDiv <?php echo $row['filter'] ?>">
        <img id="myImg" src="<?php echo $row['img'] ?>" alt="Image not found" style="width:100%;max-width:300px;min-height: 169px;">
        <button class="name" style="width:100%; background-image: url(btndownload.jpg);"><i class="fa fa-check-square-o" style="color:orange"></i> <?php echo $row['name'] ?> <i class="fa fa-info-circle" style="color:yellow"></i> <?php echo $row['version'] ?></button>
        <?php if(isset($_SESSION['status']) == true){ ?>
        <button class="btn-download" onclick="window.location.href = '/buycheat.php?client=<?php echo $row['id']; ?>'" style="width:100%"><i class="fa fa-download" style="color:#7FFF00"></i> Download <i class="fa fa-diamond" style="color:aqua"></i> <?php if($row['price'] == 0){ echo 'FREE'; } else { echo $row['price']; } ?></button>
        <?php } else { ?>
        <button class="btn-download" onclick="window.location.href = '/login.php'" style="width:100%"><i class="fa fa-exclamation-triangle" style="color:red"></i> Sign in <i class="fa fa-diamond" style="color:aqua"></i> <?php if($row['price'] == 0){ echo 'FREE'; } else { echo $row['price']; } ?></button>
        <?php } ?>
  
      </div>

    <?php } ?>

</div>

<div class="alert">
  Unfortunately, the size of your device does not correspond to the elements on our page! Come back later or try another device!
</div>

</div>
</div>
     
<div class="alertphone"><center><h2>Unfortunately, the size of your device does not correspond to the elements on our page! Come back later or try another device!</h2></center></div>

</body>

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}

</script>
</html> 
