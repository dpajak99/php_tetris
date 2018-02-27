<br /><br /><br />
<table style="width:60%; margin: 0 auto; text-align: center;">
  <tr>
    <td>Podaj swoje imię:</td>
    <td>Podaj swoje nazwisko:</td>
  </tr>
  <tr>
    <td style="width:50%">
      <input type="text" class="form-control" name="name" />
    </td>
    <td style="width:50%">
      <input type="text" class="form-control" name="secondname" />
    </td>
  </tr>
  <tr>
    <td colspan="2" style="padding-top:20px;">Wpisz swój nick:</td>
  </tr>
  <tr>
    <td colspan="2" style="padding-bottom: 20px;">
      <input type="text" class="form-control" name="nick" />
    </td>
  </tr>
  <tr>
    <td>Wpisz swój email:</td>
    <td>Powtórz swój email:</td>
  </tr>
  <tr>
    <td style="width:50%">
      <input type="email" class="form-control" name="email" id="email1" />
    </td>
    <td style="width:50%">
      <input type="email" class="form-control" name="email" id="email2" />
    </td>
  </tr>
  <tr>
    <td style="padding-top: 20px;">Podaj hasło</td>
    <td rowspan="5" id="checkPass"> </td>
  </tr>
  <tr>
    <td>
      <input type="password" class="form-control" name="password" id="pass1">
    </td>
  </tr>
  <tr>
    <td>Powtórz hasło</td>
  </tr>
  <tr>
    <td>
      <input type="password" class="form-control" name="password" id="pass2">
    </td>
  </tr>
  <tr>
    <td colspan="2" align="right">
      <table>
        <tr>
          <td>Ilość licencji:</td>
          <td>
            <input type="text" style="width: 50px" maxlength="3" id="ilosc" />
          </td>
        </tr>
        <tr>
          <td>Koszt licencji:</td>
          <td>
            <div id="koszt" </td>
        </tr>
        <tr>
          <td colspan="2" align="right">
            <button class="btn btn-success" id="register">Zarejestruj się</button>
          </td>
        </tr>
      </table>
      </td>
  </tr>
</table>