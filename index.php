<?php
session_start();
include_once("conexao.php");


?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mendes Calçados</title>
    <link rel="icon" href="Img/Mendes.Calçados.jpeg">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        body{
            background-color:#343A40;
        }
    </style>    
    <title>Login-Mendes-Atacado</title>
  </head>
  <body>
        <?php
          if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
          }
          
          if(isset($_SESSION['cadastro'])){
            echo $_SESSION['cadastro'];
            unset($_SESSION['cadastro']);
          }
          
          if(isset($_SESSION['erro-cadastro1'])){
            echo $_SESSION['erro-cadastro1'];
            unset($_SESSION['erro-cadastro1']);
          }
          
          

        ?>
    <div class="container">
        <div class="rol-md-12">
            <div class="form-group">
             <img src="Img/Mendes.Calçados.jpeg" width="250px" alt="Mendes-Calçados"
             class="img-thumbnail img-responsive mb-3"  >
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="rol-md-12">
                <h2 class=" text-center text-light mb-5">Mendes-Atacado</h2>
                <form method="POST" action="valida.php">
			    <label class="text-light">Email</label>
			    <input type="text" class="form-control" name="usuario" placeholder="Digite o seu Email"><br><br>
			
			    <label class="text-light">Senha</label>
			    <input  type="password" class="form-control" name="senha" placeholder="Digite a sua senha"><br><br>
			
			    <input class="btn btn-success btn-lg mb-5" type="submit" name="btnLogin" value="Logar">
			    </br> 
			    <a href="cadastrar.php" class="btn btn-info btn-lg mb-5 mt-5 mr-5">Cadastre Grátis</a>
			    </div>
		</div>	        
	</div>
		</form>
		
		<p class="text-center text-danger">
            <?php if(isset ($_SESSION['LoginErro'])){
	        echo $_SESSION['LoginErro'];
	        unset ($_SESSION['LoginErro']);
            }?>
            </p>

    <footer class="mt-5" >
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-light" style="text-align:center;"> <h5>&copy; Copyright Mendes Atacado</h5>
        </div>
                   
        </div>
    </div>
    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>
