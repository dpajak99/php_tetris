<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style type="text/css">
      td {
        padding: 10px;
      }
    </style>

    <title>Clean Blog - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <div id="komunikat">
          <!-- Modal -->
         
      </div>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=mainContent">Start</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=aboutContent">Kontakt</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=postContent">O grze</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">---</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?page=contactContent" data-toggle="modal" data-target="#myModal">Logowanie</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=rejestracja">Rejestracja</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
    
          <div class="item active">
            <img src="img/slider1.png" alt="Los Angeles" style="width:100%;">
            <div class="carousel-caption">
              <h3>Czerwony</h3>
              <p>Jest bardzo ciekawym kolorem! WOW!</p>
            </div>
          </div>
    
          <div class="item">
            <img src="img/slider2.png" alt="Chicago" style="width:100%;">
            <div class="carousel-caption">
              <h3>Zielony</h3>
              <p>Na trawie rosną kwiaty</p>
            </div>
          </div>
        
          <div class="item">
            <img src="img/slider3.png" alt="New York" style="width:100%;">
            <div class="carousel-caption">
              <h3>Niebieski</h3>
              <p>Prawie jak morze!</p>
            </div>
          </div>
      
        </div>
    
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>

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

    