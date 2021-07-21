<?php
session_start();
include_once("conexao.php");


// $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
// $id_endereço = filter_input(INPUT_POST, 'id2', FILTER_SANITIZE_NUMBER_INT);

$result_usuario = "SELECT * FROM Tb_Cliente"; 
$result_usuario2 = "SELECT * FROM Tb_Endereço"; 
$resultado_usuario = mysqli_query($conn, $result_usuario);
$resultado_usuario2 = mysqli_query($conn, $result_usuario2);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
$row_usuario2 = mysqli_fetch_assoc($resultado_usuario2);



if(isset($_SESSION['cadastro'])){
            echo $_SESSION['cadastro'];
            unset($_SESSION['cadastro']);
          }
          
          if(isset($_SESSION['erro-cadastro'])){
            echo $_SESSION['erro-cadastro'];
            unset($_SESSION['erro-cadastro']);
          }


?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
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
          

        ?>
    <div class="container">
        <div class="rol-md-12">
            <div class="form-group">
             <img src="Img/Mendes.Calçados.jpeg" width="250px" alt="Mendes-Calçados"
             class="img-thumbnail img-responsive mb-3"  >
            </div>
        </div>
    </div>
    
    <script type="text/javascript">
        
        function validar(){
            var nome = formulario.nome.value;
            var email = formulario.email.value;
            var senha = formulario.senha.value;
            var endereço = formulario.endereço.value;
            var numero = formulario.numero.value;
            var cep = formulario.cep.value;
            var cidade = formulario.cidade.value;
            var estado = formulario.estado.value;
            
            if (nome == ""){
                alert("Campo nome necessário")
                formulario.nome.focus();
                return false
            }
             if (senha == ""){
                alert("Campo senha necessário")
                formulario.nome.focus();
                return false
            }
             if (endereço == ""){
                alert("Campo endereço necessário")
                formulario.nome.focus();
                return false
            }
             if (cidade == ""){
                alert("Campo cidade necessário")
                formulario.nome.focus();
                return false
            }
            
            alert("Você está atualizando seus dados")
        }
        
    </script>
    <div class="container">
        <div class="row">
            <div class="rol-md-12">
                <h2 class=" text-center text-light mb-5">Mendes-Atacado</h2>
                
                  <h2 class=" text-center text-light mb-5">Você está Atualizando seus Dados</h2>
                
                <form name="formulario" method="POST" action="editardados.php">
                    
                    
			    <label class="text-light">Nome Completo</label>
			    <input type="text" class="form-control" name="nome" placeholder="Digite o seu Nome Completo" maxlength="60" required><br><br>
			
			    <label class="text-light">Email</label>
			    <input  type="email" class="form-control" name="email" placeholder="Digite seu email" maxlength="25"required><br><br>
			    
			    <label class="text-light">Senha</label>
			    <input  type="password" class="form-control" name="senha" placeholder="Digite a sua senha" maxlength="220" required><br><br>
			    
			    <label class="text-light">Endereço</label>
			    <input  type="text" class="form-control" name="endereço" placeholder="Digite seu Endereço" maxlength="30" required><br><br>
			    
			    <label class="text-light">Numero do Endereço</label>
			    <input  type="text" class="form-control" name="numero" placeholder="Digite o numero do seu enderço" maxlength="11" required><br><br>
			    
			    <label class="text-light">Complemento</label>
			    <input  type="text" class="form-control" name="complemento" placeholder="Digite o seu complemento" maxlength="15"><br><br>
			    
			    <label class="text-light">Bairro</label>
			    <input  type="text" class="form-control" name="bairro" placeholder="Digite o seu bairro" maxlength="15" required><br><br>
			    
			    <label class="text-light">Cep</label>
			    <input  type="text" class="form-control" name="cep" placeholder="Digite o seu cep" maxlength="9" required><br><br>
			    
			    <label class="text-light">Cidade</label>
			    <input  type="text" class="form-control" name="cidade" placeholder="Digite sua Cidade" maxlength="20"required ><br><br>
			    
			    <label class="text-light">Estado</label>
			    <input  type="text" class="form-control" name="estado" placeholder="Digite seu Estado" maxlength="20"required ><br><br>
			    
			
			    <input class="btn btn-success btn-lg mb-5" type="submit" name="btnLogin" value="Atualizar" onclick = "return validar()">
			    
			    
			  
			    </div>
		</div>	        
	</div>
		</form>

    <footer class="mt-5 bg-dark" >
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-light" style="text-align:center;"> <h5>&copy; Copyright Mendes Calçados</h5></div>
        <div class="col-md-6 d-flex justify-content-end">
          <h3 class="text-light";>Redes Sociais</h3>
          <a href="https://www.facebook.com/Mendes-Cal%C3%A7ados-653660021912743" class="btn btn-outline-light ml-3"><i class="fab fa-facebook fa-lg"></i></a>
          <a href="https://www.instagram.com/femendes.calcados/" class="btn btn-outline-light ml-3"><i class="fab fa-instagram fa-lg"></i></a>
          <a href="https://www.youtube.com/watch?v=u5BGx7C2Xgo&feature=youtu.be" class="btn btn-outline-light ml-3"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
    </div>
        </footer>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>