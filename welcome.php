<?php
if(!isset($_SESSION['active']) || $_SESSION['active'] != "true") {
?>
<div class="container tresc" >
Witamy na naszej stronie!<br />
Aby zagrać <b><a href="" data-toggle="modal" data-target="#exampleModal">Zaloguj się</a></b> lub <b><a href="index.php?page=rejestracja">Zarejestruj</a></b><br /><br /><br /><br /><br />
</div>
<?php
} else if(isset($_SESSION['active']) && $_SESSION['active'] == 'true') {
?>
<div class="container tresc">
Dziękujemy za zarejestrowanie się na naszej stronie!<br />
Życzymy miłej gry!<br /><br /><br /><br /><br />
</div>
<?php
}
?>