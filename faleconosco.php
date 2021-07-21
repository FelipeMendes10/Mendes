<?php
session_start();
include_once("conexao.php");

        if(isset($_SESSION['cadastro'])){
            echo $_SESSION['cadastro'];
            unset($_SESSION['cadastro']);
          }
?>


<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!--Font Awesome-->

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


    <title>Mendes calçados</title>
    <link rel="icon" href="Img/Mendes.Calçados.jpeg">
    <link rel="stylesheet" type="text/css" href="CSS3.0/mystyle3.css">
    <link rel="icon" href="Img/Mendes.Calçados.jpeg">
  </head>
  <body class="home">
    <header>
    <nav id="navegação" class="navbar navbar-expand-md navbar-light bg-dark">
    <div class="container">

      <a href="#" class="navbar-brand"> <img src="Img/Mendes.Calçados.jpeg" width="180px"> </a>

        <button style="background-color: white;" class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
          <span class="navbar-toggler-icon"></span>
        </button>    

          <div class="collapse navbar-collapse" id="nav-principal"> 
          <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="home2.php" class="nav-link">Home</a></li>
              <li class="nav-item"><a href="produtos.php" class="nav-link">Produtos</a></li>
              <li class="nav-item"><a href="faleconosco.php" class="nav-link">Fale Conosco</a></li>
              <li class="nav-item"><a href="referencias.php" class="nav-link">Referências</a></li>
          </ul>      
          </div>         
      </div>  
      </nav>  
    </header>
    
    <section> <!--Formulário-->
      <div class="container">
        <div class="row">
          <div class="col-md-6">
        <form method="POST" action="faleconosco1.php">
            <div class="form-group mb-3 mt-5">
              <label for="exampleFormControlInput1">Digite seu Nome completo</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" name="nome" placeholder="Nome Completo" maxlength="60">
                <?php
                    if(isset($_SESSION['vazio_nome'])){
                    echo "<p  style='color:#f00;'>".$_SESSION['vazio_nome']."</p>";
                    unset($_SESSION['vazio_nome']);
                }
                ?>
            </div>
            <div class="form-group mb-3 mt-5">
              <label for="exampleFormControlInput1">Digite seu email</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email" maxlength="25">
                    <?php
                        if(isset($_SESSION['vazio_email'])){
                        echo "<p  style='color:#f00;'>".$_SESSION['vazio_email']."</p>";
                        unset($_SESSION['vazio_email']);
                    }
                    ?>
            </div>
            <div class="form-group mb-3 mt-5">
              <label for="exampleFormControlTextarea1" class="form-label">Envie uma sugestão ou reclamação</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" maxlength="300" name="texto"></textarea>
                    <?php
                        if(isset($_SESSION['vazio_assunto'])){
                        echo "<p  style='color:#f00;'>".$_SESSION['vazio_assunto']."</p>";
                        unset($_SESSION['vazio_assunto']);
                    }
                    ?>
            </div>
            <div>
                <!-- Botão-->
                <input class="btn btn-success btn-lg m-2" type="submit" value="Enviar">
            </div>
        </form>
          </div>
          <div class="col-md-6">

          </div>
        </div>
      </div>
    </section>

  <footer class="mt-5 bg-dark" >
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-light" style="text-align:center;"> <h5>&copy; Copyright Mendes Calçados</h5></div>
        <div class="col-md-6 d-flex justify-content-end">
          <h3 class="text-light mr-3">Redes Sociais</h3>
          <a href="https://www.facebook.com/Mendes-Cal%C3%A7ados-653660021912743" class="btn btn-outline-light ml-3"><i class="fab fa-facebook fa-lg"></i></a>
          <a href="https://www.instagram.com/femendes.calcados/" class="btn btn-outline-light ml-3"><i class="fab fa-instagram fa-lg"></i></a>
          <a href="https://www.youtube.com/watch?v=u5BGx7C2Xgo&feature=youtu.be" class="btn btn-outline-light ml-3"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
    </div>
  </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>