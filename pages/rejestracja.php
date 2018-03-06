<div class="container" style="width: 60%">
</br></br>
<?php
  if(isset($_GET['user']) && $_GET['user'] == 'added') {
    echo "<div class='alert alert-success' role='alert'>";
    echo "Konto zostało pomyślnie dodane!";
    echo "</div>";
  }
  if(isset($_GET['user']) && $_GET['user'] == 'error') {
    echo "<div class='alert alert-danger' role='alert'>";
    echo "Podany nick lub e-mail już istnieje!";
    echo "</div>";
  }
?>
            <div class="modal-body">
                    <form enctype="multipart/form-data" action="db/zarejestruj.php" method="post">
                            <div class="row">
                              <div class="col">
                              <label for="Imie">Imię</label>
                              </div>
                              <div class="col">
                              <label for="Nazwisko">Nazwisko</label>
                              </div>
                             </div>
                            <div class="row">
                            <div class="col">
                            <input type="text" class="form-control" id="Imie" name="imie" value="" aria-describedby="emailHelp" placeholder="Imię">
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" id="Nazwisko" name="nazwisko" value="" aria-describedby="emailHelp" placeholder="Nazwisko">
                            <br /> </div>
                             </div>
                            <div class="row">
                            <div class="col">
                             <label for="Nick">Nick</label>
                            </div>
                            <div class="col-8">
                              <label for="Email">Email</label>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col">
                            <input type="text" class="form-control" id="Nick" name="nick" value="" aria-describedby="emailHelp" placeholder="Nick">
                            </div>
                            <div class="col-8">
                            <input type="email" class="form-control" id="Email" name="email" value="" aria-describedby="emailHelp" placeholder="Email">
                            </div>
                            </div>
                             
                            <div class="form-group">
                              </div>
                            <div class="form-group">
                             <label for="Password">Hasło</label>
                             <input type="password" class="form-control" id="Password" value="" placeholder="Hasło">
                            </div>
                            <div class="form-group">
                             <label for="Password">Potwierdź hasło</label>
                             <input type="password" class="form-control" id="Password1" name="haslo" value="" placeholder="Hasło">
                            </div>
                            <div class="modal-footer">
                              <input type="submit" class="btn btn-primary" id="przycisk" value="Zapisz się" />&nbsp;&nbsp;
                              <input type="reset" class="btn btn-primary" id="wyczysc" value="Wyczyść" name="zeruj">
                            </div>
                    </form>
             </div>
             <br /> <br /> <br /> <br /> <br /> <br />
           </div>
         </div>
        </div>
  <!-- ////////////////////////////////////////////////////////////////////          skrypt          ////////////////////////////////////////////////////////////////////  -->
  <script>
    var imie = document.getElementById('Imie');
    var nazwisko = document.getElementById('Nazwisko');
    var nick = document.getElementById('Nick');
    var email = document.getElementById('Email');
    var Password = document.getElementById('Password');
    var Password1 = document.getElementById('Password1');
    var wyslij = document.getElementById('przycisk');
    var wyczysc = document.getElementById('wyczysc');
    
    wyczysc.addEventListener('click', zamianaNaNiewidoczne);
    function zamianaNaNiewidoczne(){
      wyslij.disabled=true;
    }
    
    
    wyslij.disabled=true;
    
    function SprawdzCzyPusta (){
      if (nick.value == "" || imie.value == "" || nazwisko.value == "" || email.value == "" || Password.value == "" || Password1.value == "" ){
        wyslij.disabled=true;
      }else{
        wyslij.disabled= false;
      }

    }

    function checkMail(to) {
        if(Password.value != Password1.value) {
          Password1.style.backgroundColor = "pink";
          wyslij.disabled=true;
        } else if(Password.value == Password1.value) {
          Password1.style.backgroundColor = "lightgreen";
          SprawdzCzyPusta ();
        }
      }

      Password.addEventListener('keyup', checkMail);
      Password1.addEventListener('keyup', checkMail);
      imie.addEventListener('keyup', SprawdzCzyPusta);
      nazwisko.addEventListener('keyup', SprawdzCzyPusta);
      nick.addEventListener('keyup', SprawdzCzyPusta);
      email.addEventListener('keyup', SprawdzCzyPusta);

    
  </script>

 <!-- ////////////////////////////////////////////////////////////////////          PHP          ////////////////////////////////////////////////////////////////////  -->
<?php



?>
