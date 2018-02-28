<!DOCTYPE html>
<html lang="pl">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Moja strona</title>

  <style type="text/css">
    body {
      overflow-y: scroll;
    }
  </style>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">

  <!-- Custom fonts for this template -->
  <link href='css/nasze.css' rel='stylesheet' type='text/css'>
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
    rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/clean-blog.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>

<body style="background-color:#777;">

  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="index.php">Tetris <sub>zrobiony przez... nas :)</sub></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Strona główna</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?page=klienci">O grze</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">---</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?page=rejestracja">Rejestracja</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#exampleModal">Zaloguj się</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Modal -->
  <?php 
    if(isset($_GET['status']) && $_GET['status'] == 'c') {
      echo "
            <script>
              $(document).ready(function(){
                 $('#exampleModal').modal();
               });
            </script>
          ";
    }
  ?>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Logowanie</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form enctype="multipart/form-data" action="db/logowanie.php" method="post">
            <div class="form-group">
              <?php
                     if(isset($_GET['error'])) {
                       echo '<div class="alert alert-danger alert-dismissible">';
                        if($_GET['error'] == "usernotfound") {
                          echo "Nie znaleziono użytkownika!";
                        } else if($_GET['error'] == "wrongpass") {
                          echo "Błędne hasło!";
                        }
                        echo '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></div>';
                      }
                      ?>


                <label for="exampleInputEmail">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail" name="email" value="" aria-describedby="emailHelp" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword">Hasło</label>
              <input type="password" class="form-control" id="exampleInputPassword" name="password" value="" placeholder="Hasło">
            </div>
            <?php
                      function check() {
                        if(isset($_GET['page'])) {
                          return $_GET['page'];
                        } else {
                          return '';
                        }
                      }
                     ?>
              <input type="text" name="CurrPage" value="<?php echo check(); ?>" style="display: none;" />
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Zaloguj się</button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>