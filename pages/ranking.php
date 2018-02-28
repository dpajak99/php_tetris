

 <br /><br />
<div class="container">
<?php
try{
    $pdo = new PDO('mysql:host=localhost;dbname=tetris','root');
    $sortuj = $pdo->query("select gracz.nick, sesja.punkty from gracz, sesja where gracz.id_gracza=sesja.id_gracza order by sesja.punkty desc");
    echo "<div class='container'><table class='table table-hover table-dark'>";
    echo "<thead class='thead-dark'> <tr> <th scope='col'>#</th> <th scope='col'>Nick</th> <th scope='col'>Punkty</th ></tr> </thead><tbody>";
    $i = 1;
    foreach($sortuj as $row){
        echo '<tr><td>'.($i++).'</td><td>'.$row['nick'].'</td><td>'.$row['punkty'].'</td></tr>';
    }
    echo "</tbody></table></div>";
    $pdo = null;
}
catch(PDOException $e){
	echo "Błąd połączenie:" . $e->getMessage();
}
?>