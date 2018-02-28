  <!-- //////////////////////////////////          PHP          //////////////////////////////////  -->

  <?php
  $user="root";
  $pass="";
  $dsn="mysql:host=localhost;dbname=tetris";
  
  try{
      $pdo = new PDO($dsn, $user);
      $nick = $_POST['nick'];
      $imie = $_POST['imie'];
      $nazwisko =  $_POST['nazwisko'];
      $email = $_POST['email'];
      $haslo = $_POST['haslo'];
      $data = date("Y-m-d G:i");
     
      $zapytanie = $pdo->prepare("insert into gracz values( null,'$imie','$nazwisko','$nick','$haslo','$email','$data')");   

      $test = $zapytanie->execute();

              if ($test) {
                header("Location: ../index.php?page=rejestracja&user=added");
              }else{
                header("Location: ../index.php?page=rejestracja&user=error");
              }
 
    $pdo = null;
  }
  catch(PDOException $e){
    echo "Błąd połączenie:" . $e->getMessage();
  }
  ?>
  