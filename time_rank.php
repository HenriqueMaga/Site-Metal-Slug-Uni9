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

<body>
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
              <a class="nav-link" href="index.php">Página inicial
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="time_rank.php">Tempo</a>
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
                echo '<li class="nav-item"><a class="nav-link">Bem vindo, '.$_SESSION["name"]. '</a></li>' ;
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
          <h6>TIME RANKING</h6>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore
            et dolore magna aliquyam erat.</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md">
          <table class="table table-hover">
            <thead>
              <tr>
                <th width="85%" scope="col" class="table-radius-left">Usuário</th>
                <th scope="col" class="table-radius-right">Tempo</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td scope="row" class="table-radius-left">Mark</td>
                <td class="table-radius-right">01h 23m 33s</td>
              </tr>
              <tr>
                <td scope="row" class="table-radius-left">Jacob</td>
                <td class="table-radius-right">01h 23m 33s</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="row py-5">
        <div class="col-md-8">
          <h2>Como funciona o score?</h2>
          <p>
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
            dolore magna aliquyam erat, sed diam voluptua.
          </p>
          <p>
            Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
            tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo
            duo dolores et ea rebum.
          </p>
        </div>
      </div>
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
          <div class="col-md-6 col-lg-7 text-center text-md-right icons"><a href="https://www.facebook.com/astrocodebr/"
              class="fb-ic" rel="noopener noreferrer" target="_blank"><i class="fab fa-facebook-f white-text mr-4"
                aria-hidden="true"></i></a><a href="/" class="tw-ic" target="_blank" rel="noopener noreferrer"><i
                class="fab fa-twitter white-text mr-4" aria-hidden="true"> </i></a><a
              href="https://www.linkedin.com/company/astrocode" target="_blank" rel="noopener noreferrer"
              class="li-ic"><i class="fab fa-linkedin-in white-text mr-4" aria-hidden="true"> </i></a><a
              href="https://www.instagram.com/astrocodebr/" target="_blank" rel="noopener noreferrer" class="ins-ic"><i
                class="fab fa-instagram white-text" aria-hidden="true"> </i></a></div>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>