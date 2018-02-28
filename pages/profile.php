<div class="container" style="width: 60%;">
  <div class="row">
    <div class="col" style="text-align: center;">
      <br />  <img src="img/avatar.png" /><br /><br />
    </div>
    <div class="col">
      <b>#000<?php echo $_SESSION['id_user']; ?></b><br /><br />
      <h3><?php echo $_SESSION['nick']."<br />";?></h3>
      <h6><?php echo $_SESSION['imie'] ." ". $_SESSION['nazwisko'] ;?></h6><br />

      <h6><?php echo $_SESSION['email']."<br />";?></h6>
    </div>
  </div>
  <div class="row">
    <div class="col profileTable">
      <font size="3">Dołączył dnia: <?php echo $_SESSION['data_dolaczenia']; ?></font>
    </div>
    <div class="col">
      Najwyższy wynik: <br />
      Ostatni wynik: 
    </div>
  </div>
</div>