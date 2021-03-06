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
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</head>

<body>
    <?php
    session_start();

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
          <p class="p-0 m-0 logo">Metal Slug Uni9</p>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
          aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">P??gina inicial
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="download.php">Download</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="time_rank.php">Tempo</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="score_rank.php">Score</a>
            </li>
            
            <?php 
              if($_SESSION["id"] == null){
                echo '<li class="nav-item"> <a class="nav-link" href="login.php">Login</a> </li>';
              }
            ?>
            
            <?php

              if($_SESSION["id"] != null){
                echo '<li class="nav-item"><a class="nav-link" href="restrita.php">Bem vindo, '.$_SESSION["name"]. '</a></li>' ;
                echo '<li class="nav-item"><a class="nav-link" href="index.php?sair=true" >Sair</a></li>' ;
              }
            ?>
         
          </ul>
        </div>
      </div>
    </nav>
  </header>



  <section class="score score-rank">
    <div class="container">
      <div class="row py-5">
        <div class="col-md-8">
          <h6>Baixe agora mesmo!</h6>
          <p>Desafie seus amigos, obtenha os melhores rankings! Divirta-se nessa releitura simplificada do cl??ssico Metal Slug.</p>
        </div>
      </div>
      <!--
      <div class="row">
        <div class="col-md">
          <table class="table table-hover">
            <thead>
              <tr>
                <th  width="85%" scope="col" class="table-radius-left">Usu??rio</th>
                <th scope="col" class="table-radius-right">Score</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td scope="row" class="table-radius-left">Mark</td>
                <td class="table-radius-right">2.574.541.859</td>
              </tr>
              <tr>
                <td scope="row" class="table-radius-left">Jacob</td>
                <td class="table-radius-right">1.235.448.955</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      -->
      <?php 
        if($_SESSION["id"] == null){
          echo '<div class="col-md-8"><p>Para baixar voc?? deve estar logado. Crie um usu??rio ou entre agora mesmo</p></div> ';
        }
      ?>
      
      <?php

        if($_SESSION["id"] != null){
          echo ' <div class="col-md-8"><h6>Vers??o para macOS</h6></div>' ;
          echo '<a href="https://drive.google.com/file/d/1f7dGOQt5KPFWyag9q1wPRF-cYdMnEPG8/view?usp=sharing" target="_blank"><button type="submit" id="sendlogin" class="btn btn-primary w-100">Download</button></a>' ;
          echo '<p></p><br><br> <div class="col-md-8"><h6>Vers??o para Windows</h6></div>' ;
          echo '<a href="https://drive.google.com/file/d/1FyH9nYD828gk_G8SjH846RsQqm3oziUm/view?usp=sharing" target="_blank"><button type="submit" id="sendlogin" class="btn btn-primary w-100">Download</button></a>' ;
        }
      ?>
      <br>
      <section class="sobre-nos">
        <div class="container">
          <div class="row py-5">
            <div class="col-md-6">
              <p>Acesse o codigo-fonte do Jogo:</p>
              <p><a class="github-button" href="https://github.com/HenriqueMaga/Metal-Slug-Uni9" data-color-scheme="no-preference: light; light: light; dark: dark_dimmed;" data-size="large" aria-label="Abrir projeto do Jogo">Abrir projeto no Github</a></p>
            </div>
            <div class="col-md-6 align-self-center">
              <p>Acesse o codigo-fonte do Site:</p>
              <p><a class="github-button" href="https://github.com/HenriqueMaga/Site-Metal-Slug-Uni9" data-color-scheme="no-preference: light; light: light; dark: dark_dimmed;" data-size="large" aria-label="Abrir projeto do Site">Abrir projeto no Github</a></p>
            </div>
          </div>
        </div>
      </section>
      
      <section class="sobre-nos">
        <div class="container">
          <div class="row py-5">
            <div class="col-md-6">
              <h2>Detalhes sobre o jogo</h2>
              <p>
                O jogo possui uma premissa simples: Sobreviva o m??ximo que puder contra os cl??ssicos inimigos de Metal Slug!
              </p>
              <p>
                Conforme o tempo passa, a quantidade de inimigos surgindo aumenta, mas voc?? contar?? com a espor??dica ajuda da sua Laser Gun para limpar grandes ordas de inimigos!
              </p>
            </div>
            <div class="col-md-6 align-self-center">
              <img src="./imgs/derrotando-inimigos.png" class="img-fluid" alt="">
            </div>
          </div>
        </div>
      </section>
      <section class="sobre-nos">
        <div class="container">
          <div class="row py-5">
            <div class="col-md-6 align-self-center">
              <img src="./imgs/tela-game-over.png" class="img-fluid" alt="">
            </div>
            <div class="col-md-6">
              <h2>Como jogar?</h2>
              <p>Basta criar uma conta, baixar o arquivo de acordo com o sistema operacional e executar!</p>
              <p>Voc?? comanda usando as setas direcionais, pula com a barra de espa??o e atira com a tecla Z.</p>
            </div>
          </div>
        </div>
      </section>

    </div>
  </section>

  <footer class="page-footer font-small unique-color-dark">
    <div>
      <div class="container">
        <div class="row py-4 d-flex align-items-center">
          <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0 reservados">
            Metal Slug 2021 - <i class="far fa-copyright align-self-center pd-l-10 pd-r-10" aria-hidden="true"></i>
            Feito com amor em SP!
          </div>
          <div class="col-md-6 col-lg-7 text-center text-md-right icons"><a href="https://pt-br.facebook.com/uninoveoficial/"
              class="fb-ic" rel="noopener noreferrer" target="_blank"><i class="fab fa-facebook-f white-text mr-4"
                aria-hidden="true"></i></a><a href="https://twitter.com/uninoveoficial?lang=en" class="tw-ic" target="_blank" rel="noopener noreferrer"><i
                class="fab fa-twitter white-text mr-4" aria-hidden="true"> </i></a><a
              href="https://www.linkedin.com/school/uninove/" target="_blank" rel="noopener noreferrer"
              class="li-ic"><i class="fab fa-linkedin-in white-text mr-4" aria-hidden="true"> </i></a><a
              href="https://www.instagram.com/uninoveoficial/?hl=en" target="_blank" rel="noopener noreferrer" class="ins-ic"><i
                class="fab fa-instagram white-text" aria-hidden="true"> </i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>