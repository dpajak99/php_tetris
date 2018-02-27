      var whichPass = document.getElementById("checkPass");
      var pass1 = document.getElementById("pass1");
      var pass2 = document.getElementById("pass2");

      var email1 = document.getElementById("email1");
      var email2 = document.getElementById("email2");

      var register = document.getElementById("register");
      var registerPart = document.getElementById("registerPart");

      function checkPasswd() {
        if( pass1.value != pass2.value) {
          whichPass.innerHTML = "<font color='darkred'>Podane hasła nie zgadzają się!</font>";
        } else if( pass1.value == pass2.value) {
          whichPass.innerHTML = "<font color='green'>Podane hasła są poprawne!</font>";
        }
      }

      function checkMail(to) {
        if(email1.value != email2.value) {
          email2.style.backgroundColor = "#FFC0CB";
        } else if(email1.value == email2.value) {
          email2.style.backgroundColor = "#9FFB88";
        }
      }


      var ilosc = document.getElementById("ilosc");
      var koszt = document.getElementById("koszt");
      var cena = 50;
      

      function obliczCene() {
          if(ilosc.value == "") {
              koszt.innerHTML = "0 zł";
          } else {
              koszt.innerHTML = parseInt(ilosc.value) * cena + " zł";
          }
      }

      ilosc.addEventListener("keyup", obliczCene);



      
      email2.addEventListener('keyup', checkMail);
      email1.addEventListener('keyup', checkMail);
      pass2.addEventListener('keyup', checkPasswd);
      pass1.addEventListener('keyup', checkPasswd);
