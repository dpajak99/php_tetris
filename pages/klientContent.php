<div class="container">
  <div class="row">
      <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">&nbsp;&nbsp;&nbsp;&nbsp;Zakup licencje</h4>
              </div>
              <div class="modal-body">
                <div id="registerPart">
                <table style="width:80%; margin: 0 auto; text-align: center;">
                  <tr>
                   <td>Podaj swoje imię:</td>
                   <td>Podaj swoje nazwisko:</td>
                  </tr>
                  <tr>
                    <td><input type="text" class="form-control" name="name" /></td>                    
                    <td><input type="text" class="form-control" name="secondname" /></td>
                  </tr>
                  <tr>
                    <td colspan="2" style="padding-top:20px;">Wpisz swój nick:</td>
                  </tr>
                  <tr>
                   <td colspan="2" style="padding-bottom: 20px;"><input type="text" class="form-control" name="nick"/></td>
                  </tr>
                  <tr>
                    <td>Wpisz swój email:</td>
                    <td>Powtórz swój email:</td>
                  </tr>
                  <tr>
                   <td><input type="email" class="form-control" name="email" id="email1"/></td>
                   <td><input type="email" class="form-control" name="email" id="email2" /></td>
                  </tr>
                  <tr>
                    <td style="padding-top: 20px;">Podaj hasło</td>
                    <td rowspan="5" id="checkPass"> </td>
                  </tr>
                  <tr>
                      <td><input type="password" class="form-control" name="password" id="pass1"></td>
                  </tr>
                  <tr>
                    <td>Powtórz hasło</td>
                  </tr>
                  <tr>
                      <td><input type="password" class="form-control" name="password" id="pass2"></td>
                  </tr>
                  <tr>
                    <td colspan="2" align="right">
                      <table>
                      <tr>
                        <td>Ilość licencji:</td><td><input type="text" style="width: 50px" maxlength="3" id="ilosc"/></td>
                      </tr>
                      <tr>
                        <td>Koszt licencji:</td><td><div id="koszt"</td>
                      </tr>
                      <tr>
                        <td colspan="2" align="right"><button class="btn btn-success" id="register">Zarejestruj się</button></td>
                      </tr>
                    </table></td>
                  </tr>
                </table>
              </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
              </div>
            </div>
          </div>
      </div>
    <div class="cointainer" style="width: 100%; margin-top: 30px;">
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"style="margin-left: 80px;">Zarejestruj się</button>
  
    <table class="table table-hover" style="text-align: center; margin-top: 50px;">
      <tr>
        <th scope="col">Numer klienta</th>
        <th scope="col">Imię</th>
        <th scope="col">Nazwisko</th>
        <th scope="col">Nick</th>
        <th scope="col">Email</th>
      </tr>
      <tr>
        <th>1</th>
        <td>Jan</td>
        <td>Mondry</td>
        <td>janeczko321</td>
        <td>aaa@aaa.aa</td>
      </tr>
      <tr>
        <th>2</th>
        <td>Karolina</td>
        <td>Wilk</td>
        <td>hauhał</td>
        <td>aaa@aaa.aa</td>
      </tr>
      <tr>
        <th>3</th>
        <td>Paweł</td>
        <td>Pies</td>
        <td>hauhał2</td>
        <td>aaa@aaa.aa</td>
      </tr>
      <tr>
        <th>4</th>
        <td>Magdalena</td>
        <td>Ciążadło</td>+
        <td>jakiśCzłowiekBezNazwy</td>
        <td>aaa@aaa.aa</td>
      </tr>
    </table>
    
  </div>
</div>
</div>