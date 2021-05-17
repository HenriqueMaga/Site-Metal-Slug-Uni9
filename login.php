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
</head>

<body class="login">
  <?php
     session_start();
   
  ?>

  <!-- Navigation -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark static-top">
      <div class="container">
        <a class="mt-1" href="index.php">
          <p class="p-0 m-0 logo">Metal Slug Uni9</p>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
          aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">PÃ¡gina inicial</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="time_rank.html">Tempo</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="score_rank.html">Score</a>
            </li>

            <?php 
              if($_SESSION["id"] == null){
                echo '<li class="nav-item"> <a class="nav-link" href="login.php">Login</a> </li>';
              }
            ?>

            <?php

              if($_SESSION["id"] != null){
                echo '<li class="nav-item"><a class="nav-link">Bem vindo, '.$_SESSION["name"]. '</a></li>' ;
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
        <form action="./db/site_autenticar.php"  method="post" autocomplete="off">
          <h2 class="text-center">Login</h2>
          <div class="form-group pb-3">
            <label>UsuÃ¡rio</label>
            <input name="username" type="text" class="form-control" >
          </div>
          <div class="form-group pb-4">
            <label>Senha</label>
            <input name="password" type="password" class="form-control pass_style" placeholder="â€¢â€¢â€¢â€¢â€¢â€¢â€¢â€¢â€¢">
          </div>
          <button type="submit" id="sendlogin" class="btn btn-primary w-100">login</button>
          <p class="text-center pt-4">NÃ£o possui uma conta? <a href="#">Cadastre-se</a></p>
        </form>
      </div>
    </div>
  </div>
</body>
</html>	