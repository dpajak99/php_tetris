<!-- Modal -->
<div class="modal fade" id="editProfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edycja profilu</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form enctype="multipart/form-data" action="db/editprofileSend.php" method="post">
          <div class="container" style="width: 100%;">
          <div class="row">
                <div class="col"> Imię:<br /></div>
                <div class="col"> Nazwisko:<br /></div>
            </div>
            <div class="row">
                <div class="col"><input class="form-control" style="width: 100%" type='text' id="edit_imie" name="edit_imie" value="<?php echo $_SESSION['imie']; ?>"  /><br /><br /></div>
                <div class="col"><input class="form-control" style="width: 100%" type='text' id="edit_nazwisko" name="edit_nazwisko" value="<?php echo $_SESSION['nazwisko']; ?>"  /><br /><br /></div>
            </div>
            <div class="row">
                <div class="col">Email:</div>
                 <div class="col"> <input class="form-control" type='text' id="edit_email" name="edit_email" value="<?php echo $_SESSION['email']; ?>" /> <br /><br /></div>
            </div>
            <div class="row">
                <div class="col">Stare hasło:</div>
                 <div class="col"> <input class="form-control" type='password' id="old_password" value="" placeholder="Stare hasło" /> </div>
            </div>
            <div class="row">
                <div class="col">Nowe hasło:</div>
                 <div class="col"> <input class="form-control" type='password' id="new_pass" value="" placeholder="Nowe hasło" /> </div>
            </div>
            <div class="row">
                <div class="col">Powtórz hasło:</div>
                 <div class="col"> <input class="form-control" type='password' id="new_pass2" name="new_password" value="" placeholder="Powtórz nowe hasło" /> <br /><br /></div>
            </div>
            <div class="row">
                <div class="col"><img src="avatars/av001.png" onclick="selectAvatar(this)" id="1" class="avatarmin"/><br /><br /></div>
                <div class="col"><img src="avatars/av002.png" onclick="selectAvatar(this)" id="2" class="avatarmin"/><br /><br /></div>
                <div class="col"><img src="avatars/av003.png" onclick="selectAvatar(this)" id="3" class="avatarmin"/><br /><br /></div>
                <div class="col"><img src="avatars/av004.png" onclick="selectAvatar(this)" id="4" class="avatarmin"/><br /><br /></div>
            </div>
            <div class="row">
                <div class="col"><img src="avatars/av005.png" onclick="selectAvatar(this)" id="5" class="avatarmin"/><br /><br /></div>
                <div class="col"><img src="avatars/av006.png" onclick="selectAvatar(this)" id="6" class="avatarmin"/><br /><br /></div>
                <div class="col"><img src="avatars/av007.png" onclick="selectAvatar(this)" id="7" class="avatarmin"/><br /><br /></div>
                <div class="col"><img src="avatars/av008.png" onclick="selectAvatar(this)" id="8" class="avatarmin"/><br /><br /></div>
            </div>
            <input type="text" name="idavatarsend" id="idavatarsend" style="display: none;"/>
            <div class="row">
                <div class="col"></div>
                <div class="col"><button type="submit" id="przycisk56" class="btn btn-primary"> Aktualizuj </button></div>
            </div>
        </div>
          </form>
          <script type="text/javascript">
          var stareHaslo = document.getElementById('old_password');
          var pass1 = document.getElementById('new_pass');
          var pass2 = document.getElementById('new_pass2');
          var edit_imie = document.getElementById('edit_imie');
          var edit_nazwisko = document.getElementById('edit_nazwisko') ;
          var edit_email = document.getElementById('edit_email');
          var przycisk56 = document.getElementById('przycisk56');
          var edytuj = document.getElementById('edytuj');
          var pf1=true;
          var pf2=true;
          var pf3=true;
          
          przycisk56.disabled=true;

            function checkNewPass() {
                stareHaslo = document.getElementById('old_password');
                <?php
                    $user="root";
                    $pass="";
                    $dsn="mysql:host=localhost;dbname=tetris";

                    try{
                        $pdo = new PDO($dsn, $user);

                        $zapytanie = $pdo->query("SELECT haslo FROM gracz WHERE id_gracza='".$_SESSION['id_user']."';");  
                        foreach($zapytanie as $wiersz){
                            $haslo = $wiersz['haslo'];
                        }
                        ?>
                            //alert('<?php echo $haslo; ?>');
                                if( stareHaslo.value != '<?php echo $haslo; ?>') {
                                    stareHaslo.style.backgroundColor = 'red';
                                    pf1 = true;
                                } else if(stareHaslo.value == '<?php echo $haslo; ?>') {
                                    stareHaslo.style.backgroundColor = 'lightgreen';
                                    pf1 = false;
                                }
                        <?php

                        $pdo = null;
                    }
                    catch(PDOException $e){
                        echo "Błąd połączenie:" . $e->getMessage();
                    }
                ?>
            }

            function sprawdzPoprawnosc() {
                pass1 = document.getElementById('new_pass');
                pass2 = document.getElementById('new_pass2');

                if( pass1.value != pass2.value) {
                    pass2.style.backgroundColor = 'red';
                    pf2 = true;
                } else if(pass1.value == pass2.value) {
                    pass2.style.backgroundColor = 'lightgreen';
                    pf2 = false;
               }
            }
            var stat = 0;
            var selectedAv;
            var selectedAvId;
            var idavatarsend = document.getElementById('idavatarsend');

            function selectAvatar(to) {
                
                if(to.style.backgroundColor == "") {
                    to.style.backgroundColor = "green";
                    if(stat == 1) {
                        selectedAv.style.backgroundColor = "";
                        selectedAv = to;
                        selectedAvId = to.id;
                        idavatarsend.value = selectedAvId;
                        stat = 1;
                    } else {
                        selectedAv = to;
                        selectedAvId = to.id;
                        idavatarsend.value = selectedAvId;
                        stat = 1;
                    }
                } else if(to.style.backgroundColor == "green") {
                    to.style.backgroundColor = "";
                    selectedAv = "";
                    selectedAvId = "";
                    idavatarsend.value = "1";
                    stat = 0;
                }
            }
                

        function checkAll(){
            if(stareHaslo.value == "" || pass1.value == "" || pass2.value == "" || edit_imie.value == "" || edit_nazwisko.value == "" || edit_email.value == ""){
                pf3 = true;
            }
            else{
                pf3 = false;
            }
        }
        
        function pf(){
            if(pf1 == false && pf2 == false && pf3 == false){
                przycisk56.disabled = false;
            } else {
                przycisk56.disabled = true;
            }
        }
            stareHaslo.addEventListener('keyup',checkAll);
            pass1.addEventListener('keyup',checkAll);
            pass2.addEventListener('keyup',checkAll);
            edit_imie.addEventListener('keyup',checkAll);
            edit_nazwisko.addEventListener('keyup',checkAll);
            edit_email.addEventListener('keyup',checkAll);
            stareHaslo.addEventListener('keyup', checkNewPass);
            pass1.addEventListener('keyup', sprawdzPoprawnosc);
            pass2.addEventListener('keyup', sprawdzPoprawnosc);
            document.addEventListener('keyup',pf);

          </script>
        </div>
      </div>
    </div>
  </div>
 