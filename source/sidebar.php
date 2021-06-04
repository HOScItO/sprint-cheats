<div class="sidebar">
  <a id="mainlogo" href="#"><i class="fa fa-fw fa-check-square" style="color:orange"></i> Sprint Cheats</a>
  <a href="index.php"><i class="fa fa-fw fa-home" style="color:#246BCE"></i> Home / News</a>
  <a href="clients.php"><i class="fa fa-fw fa-download" style="color:#00563F"></i> Clients / Hacks</a>
  <?php if(isset($_SESSION['status']) == false){ ?>
  <a href="login.php"><i class="fa fa-fw fa-user-circle" style="color:aqua"></i> Sign in</a>
  <?php } ?>
  <?php if(isset($_SESSION['status']) == true){ ?>
  <?php if(isset($_SESSION['admin']) == false){ ?>
  <a href="buyrank.php"><i class="fa fa-fw fa-shopping-cart" style="color:green"></i> Buy Rank</a>
  <a href="contact.php"><i class="fa fa-fw fa-envelope" style="color:#FFB200"></i> Contact</a>
  <?php } else {?>
  <a href="admin.php"><i class="fa fa-fw fa-cog" style="color:green"></i> Admin Panel</a>
  <?php } ?>
  <br>
  <a id="mainlogo"><i class="fa fa-fw fa-diamond" style="color:aqua"></i> Diamonds : <?php echo $_SESSION['diamonds'] ?></a>
  <a id="mainlogo"><i class="fa fa-fw fa-fire" style="color:red"></i> Rank : <?php echo $_SESSION['rank'] ?></a><br>
  <a href="promocode.php"><i class="fa fa-fw fa-gift" style="color:pink"></i> Promo Code</a>
  <a href="logout.php"><i class="fa fa-fw fa-sign-out" style="color:purple"></i> Sign out</a>
  <?php } ?>
</div>

<!-- <a href="#services"><i class="fa fa-fw fa-wrench"></i> Installation</a> -->