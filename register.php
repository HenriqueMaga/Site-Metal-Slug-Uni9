<!DOCTYPE php>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Metal Slug</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" />
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body class="login">
   <?php
     session_start();

     if ($_SESSION["id"] != null) {
      header("location: ./index.php");
    }

     function finalizarSessao() {
       session_destroy();
       header("location: ./login.php");
     }

     if (isset($_GET['sair'])) {
       finalizarSessao();
     }
  ?>

  <!-- Navigation -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark static-top">
      <div class="container">
        <a class="mt-1" href="index.php">
          <div class="p-0 m-0 logo">Metal Slug Uni9</div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
          aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Página inicial</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="download.php">Download</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="time_rank.html">Tempo</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="score_rank.html">Score</a>
            </li>

            <?php 
              if($_SESSION["id"] == null){
                echo '<li class="nav-item"> <a class="nav-link active" href="login.php">Login</a> </li>';
              }
            ?>

            <?php

              if($_SESSION["id"] != null){
                echo '<li class="nav-item"><a class="nav-link">Bem vindo, '.$_SESSION["name"]. '</a></li>' ;
                echo '<li class="nav-item"><a class="nav-link" href="index.php?sair=true" >Sair</a></li>' ;
              }
            ?>
        
          </ul>
        </div>
      </div>
    </nav>
  </header>


  <div class="container">
    <!-- o style height 100vh define uma altura para a tela, assim o align-items-center funciona e centraliza na vertical -->
    <div class="row justify-content-center align-items-center" style="height:90vh">
      <div class="col-4">
        <form action="./db/site_novo_user.php"  method="post" autocomplete="off">
          <h2 class="text-center">Crie seu usuário!</h2>
          <div class="form-group pb-3">
            <label>Digite seu nome</label>
            <input name="nome" type="text" class="form-control" >
          </div>
          <div class="form-group pb-3">
            <label>Crie um Username</label>
            <input name="usuario" type="text" class="form-control" >
          </div>
          <div class="form-group pb-4">
            <label>Crie sua senha</label>
            <input name="senha" type="password" class="form-control pass_style" placeholder="*********">
          </div>
          <button type="submit" id="sendlogin" class="btn btn-primary w-100">Criar Usuário</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>	