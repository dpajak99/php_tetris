  <!-- //////////////////////////////////          PHP          //////////////////////////////////  -->

  <?php
  session_start();
  $user="root";
  $pass="";
  $dsn="mysql:host=localhost;dbname=tetris";
 
  
  try{
      $pdo = new PDO($dsn, $user);
      $id_gracza = $_SESSION['id_user'];
      $punkty =  $_POST['punkty'];
      $data = date("Y-m-d G:i:s");
     
      $zapytanie = $pdo->prepare("insert into sesja values( null,'$id_gracza','$data','$punkty')");   

      $test = $zapytanie->execute();

              if ($test) {
                header("Location: ../gra.php");
              }
			  
    $pdo = null;
  }
  catch(PDOException $e){
    echo "Błąd połączenie:" . $e->getMessage();
  }
  ?>
  