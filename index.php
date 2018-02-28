<?php
session_start();
//Nav

if(isset($_SESSION['active']) && $_SESSION['active'] == true) {
    include_once("navLog.php");
} else {
    include_once("nav.php");
}

    if(isset($_GET['page'])){
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
    $plikZTrescia = "welcome.php";
    include_once($plikZTrescia);
    include_once("alert.php");
}

//Footer
include_once("footer.php");
?>