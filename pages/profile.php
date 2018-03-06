<div class="container tresc">
  <div class="row">
    <?php
    if(!isset($_SESSION['active']) || $_SESSION['active'] != 'true') {
      header('Location: index.php?access=denied');
    } else {

    
    ?>
    <div class="col" style="text-align: center;">
      <?php
        include('phpscripts/checkAvatar.php');
        checkAvatar();
      ?>
      <br /><br /><br /><br />
    </div>
    <div class="col">
      <b>#000<?php echo $_SESSION['id_user']; ?></b><br /><br />
      <h3><?php echo $_SESSION['nick']."<br />";?></h3>
      <h6><?php echo $_SESSION['imie'] ." ". $_SESSION['nazwisko'] ;?></h6><br />

      <h6><?php echo $_SESSION['email']."<br />";?></h6>
      
    </div>
  </div>
  <div class="row">
    <div class="col">
      <font size="3">Dołączył dnia: <?php echo $_SESSION['data_dolaczenia']; ?></font><br />
      <b class="editProfileButton" data-toggle="modal" data-target="#editProfile">Edytuj profil</b>
      <?php
        include('phpscripts/editprofile.php');
      ?>
    </div>
    <div class="col">
    <br /><br /><br />
      <h6>Maksymalny wynik gracza: <b><?php echo $_SESSION['max_punkty'];?></b></h6>
      <h6><a href="index.php?page=historia">Historia gier</a></h6>
    </div>
    </div>
    </div>
    <?php
    }
    ?>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
</div>