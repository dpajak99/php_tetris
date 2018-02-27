    <?php
//Header
include_once("pages/header.php");

//treść
if (isset($_GET['page'])){
    
    //zbuduj sciezke
    $plikZTrescia = "pages/".$_GET['page'].".php";
    //zaimpoertuj plik wg sciezki
    if(file_exists($plikZTrescia)){
        include_once($plikZTrescia);
    } else {
        include_once('404.html');
    }
}else{
    include_once("pages/mainContent.php");
}

//footer
include_once("pages/footer.php");
?>
