<?php
    function checkAvatar() {
      $useravatarid = $_SESSION['id_avatar'];

      echo "<img src='avatars/av00".$useravatarid.".png' style='width: 250px; height: 250px;'/>";
    }
        
?>