<div class="container">
<?php
    if(!isset($_SESSION['active']) || $_SESSION['active'] != 'true') {
        header('Location: index.php?access=denied');
    } else {

    
    ?>
<?php
echo "<a href='index.php?page=profile' class='previous round'>&#8249; Powrót do profilu</a>";
try{
    $pdo = new PDO('mysql:host=localhost;dbname=tetris','root');
    $sortuj = $pdo->query("select gracz.id_avatar, gracz.nick, sesja.punkty, sesja.data_sesji from gracz, sesja where gracz.id_gracza=sesja.id_gracza and gracz.id_gracza=".$_SESSION['id_user']." order by sesja.punkty desc");
    echo "<div class='container'><table class='table table-hover table-dark'>";
    echo "<thead class='thead-dark'> <tr> <th scope='col'>#</th><th scope='col'>Avatar</th> <th scope='col'>Nick</th> <th scope='col'>Punkty</th > <th scope='col'>Data i godzina</th > </tr> </thead><tbody>";
    $i = 1;
    foreach($sortuj as $row){
        if($i > 10) {
            break;
        } else {
         echo '<tr><td>'.($i++).'</td><td><img src="avatars/av00'.$row['id_avatar'].'.png" class="avRanking" /></td><td>'.$row['nick'].'</td><td>'.$row['punkty'].'</td><td>'.$row['data_sesji'].'</td></tr>';
        }
    }
    echo "</tbody></table></div></div><br /><br /><br /><br />";
    $pdo = null;
}
catch(PDOException $e){
	echo "Błąd połączenie:" . $e->getMessage();
}
?>
<?php
    }
    ?>