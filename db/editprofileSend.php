<?php 
session_start();
$user="root";
$pass="";
$dsn="mysql:host=localhost;dbname=tetris";

try{
    $pdo = new PDO($dsn, $user);
    $newImie = $_POST['edit_imie'];
    $newNazwisko = $_POST['edit_nazwisko'];
    $newEmail = $_POST['edit_email'];
    $newPassword = $_POST['new_password'];
    $newAvatarId = $_POST['idavatarsend'];
   
    $zapytanie = $pdo->prepare("update gracz set imie ='".$newImie."', nazwisko ='".$newNazwisko."', email ='".$newEmail."', haslo ='".$newPassword."', id_avatar = '".$newAvatarId."' where id_gracza = '".$_SESSION['id_user']."';");   

    $test = $zapytanie->execute();

            if ($test) {
              header("Location: ../index.php?page=profile&user=added");
            }else{
              header("Location: ../index.php?page=profile&user=error");
            }

  $pdo = null;
}
catch(PDOException $e){
  echo "Błąd połączenie:" . $e->getMessage();
}
?>
