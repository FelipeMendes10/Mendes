<?php
session_start();

include_once("conexao.php");

    //$id =  filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
    //$id_endereço =   filter_input(INPUT_POST, 'id2', FILTER_SANITIZE_NUMBER_INT);
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
	$endereço = filter_input(INPUT_POST, 'endereço', FILTER_SANITIZE_STRING);
	$numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_STRING);
	$complemento = filter_input(INPUT_POST, 'complemento', FILTER_SANITIZE_STRING);
	$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
	$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
	$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
	$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
	
	 $senha_criptografada = password_hash($senha,PASSWORD_DEFAULT);
	 

    
    
    $result_usuario = "UPDATE Tb_Cliente set Email = '$email'  , Senha = '$senha_criptografada' where Nome_Completo = '$nome'";
    $resultado_usuario =  mysqli_query($conn,$result_usuario);
    
   $result_endereço = "UPDATE Tb_Endereço INNER JOIN Tb_Cliente  ON Tb_Endereço.Fk_Id_Cliente = Tb_Cliente.Id_Cliente 
         set Nome = '$endereço', Numero = '$numero', Complemento = '$complemento', Bairro = '$bairro', Cep = '$cep', Cidade = '$cidade', Estado = '$estado'  where Nome_Completo = '$nome'";

   
    
    $resultado_endereço2 =  mysqli_query($conn,$result_endereço);

    if (mysqli_affected_rows($conn)){
        $_SESSION['cadastro'] = "<div class='alert alert-success'>Usuário Editado com sucesso</div>";
        header("location: home2.php");
    }
    
    else{
        
      $_SESSION['erro-cadastro'] = "<div class='alert alert-danger'>Erro na Atualização de dados!</div>";
        header("location: editar.php");  
    
    }
    