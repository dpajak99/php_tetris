<?php
session_start();
$user="root";
$pass="";
$dsn="mysql:host=localhost;dbname=tetris";

try{
    $pdo = new PDO($dsn, $user);
    $email = $_POST['email'];
    $haslo = $_POST['password'];


    $CurrPage = $_POST['CurrPage'];

    $check = $pdo->query("SELECT email FROM gracz WHERE email = '".$email."';");  
    $row_count = $check->rowCount();  

    if ($row_count == 1) {
        echo "Email istnieje <br />";
        $check = $pdo->query("SELECT id_gracza FROM gracz WHERE email = '".$email."' AND haslo = '".$haslo."';");  
        $row_count = $check->rowCount(); 
        if ($row_count == 1) {
            echo "Hasło prawidłowe!<br />Pomyślnie zalogowano!<br /><br />";
            $zapytanie = $pdo->query("SELECT id_gracza, imie, nazwisko, nick, email, data_dolaczenia, id_avatar FROM gracz WHERE email = '".$email."' AND haslo = '".$haslo."';");  
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
            
           header('Location: ../index.php');
        } else {
            echo "Hasło niepoprawne!";
            header('Location: ../index.php?page='.$CurrPage.'&error=wrongpass&status=c');
        }

    } else {
        echo "Użytkownik nie istnieje";
        header('Location: ../index.php?page='.$CurrPage.'&error=usernotfound&status=c');
    }
	$pdo = null;
}
catch(PDOException $e){
	echo "Błąd połączenie:" . $e->getMessage();
}
?>