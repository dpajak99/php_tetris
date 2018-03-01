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
				$_SESSION = array();
				session_destroy();
				session_start();
				$zapytanie = $pdo->query("SELECT id_gracza, imie, nazwisko, nick, email, data_dolaczenia, id_avatar FROM gracz WHERE email = '".$newEmail."' AND haslo = '".$newPassword."';");  
				foreach($zapytanie as $wiersz){
					$_SESSION['id_user'] = $wiersz['id_gracza'];
					$_SESSION['imie'] = $wiersz['imie'];
					$_SESSION['nazwisko'] = $wiersz['nazwisko'];
					$_SESSION['nick'] = $wiersz['nick'];
					$_SESSION['email'] = $wiersz['email'];
					$_SESSION['data_dolaczenia'] = $wiersz['data_dolaczenia'];
					$_SESSION['id_avatar'] = $wiersz['id_avatar'];
				}
					$_SESSION['active'] = true;
            
				header("Location: ../index.php?page=profile");
            }else{
              header("Location: ../index.php?page=profile&user=error");
            }

  $pdo = null;
}
catch(PDOException $e){
  echo "Błąd połączenie:" . $e->getMessage();
}
?>
