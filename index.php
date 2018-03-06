<?php
session_start();
//Nav

if(isset($_SESSION['active']) && $_SESSION['active'] == true) {
    include_once("pages/navLog.php");
} else {
    include_once("pages/nav.php");
}

    if(isset($_GET['page']) && $_GET['page'] != ''){
        include_once('pages/header1.php');
    } else if(!isset($_GET['page']) || $_GET['page'] == '') {
        include_once("pages/header2.php");
    }

//treść
if (isset($_GET['page']) && $_GET['page'] != ''){
      $plikZTrescia = "pages/".$_GET['page'].".php";
     include_once($plikZTrescia);
}   

if(!isset($_GET['page']) || $_GET['page'] == ''){ //|| $_GET['page'] == ''
    $plikZTrescia = "pages/welcome.php";
    include_once($plikZTrescia);
    if(isset($_GET['access']) && $_GET['access'] == 'denied') {
        echo '<div class="alert alert-danger">Error: 404! Strony nie znaleziono</div>'; 
    }
    echo '</div>';
}

//Footer
include_once("pages/footer.php");
?>