<?php
session_start();

include_once("conexao.php");
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
	$endereço = filter_input(INPUT_POST, 'endereço', FILTER_SANITIZE_STRING);
	$numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_STRING);
	$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);


    
    $result_usuario_delete = "DELETE from Tb_Cliente WHERE Nome_Completo = '$nome'";
    $resultado_usuário =  mysqli_query($conn,$result_usuario_delete);
    
    $result_usuario_delete2 = "DELETE from Tb_Cliente WHERE Email = '$email'";
    $resultado_usuário2 =  mysqli_query($conn,$result_usuario_delete2);
    
    $result_usuario_delete3 = "DELETE from Tb_Cliente WHERE Senha = '$senha'";
    $resultado_usuário3 =  mysqli_query($conn,$result_usuario_delete3);
    
    
    $result_Endereço_delete = "DELETE from Tb_Endereço WHERE Nome = '$endereço";
    $resultado_usuário =  mysqli_query($conn,$result_Endereço_delete);
    
    $result_Endereço_delete2 = "DELETE from Tb_Endereço WHERE Numero = '$numero',";
    $resultado_usuário2 =  mysqli_query($conn,$result_Endereço_delete2);
    
     $result_Endereço_delete3 = "DELETE from Tb_Endereço WHERE Bairro = '$bairro'";
    $resultado_usuário3 =  mysqli_query($conn,$result_Endereço_delete3);
    
    
    

    if (mysqli_affected_rows($conn)){
        $_SESSION['cadastro'] = "<div class='alert alert-danger'>Usuário deletado com sucesso</div>";
        header("location: index.php");
    }
    
    else{
        
      $_SESSION['erro-cadastro'] = "<div class='alert alert-warning'>Erro! Você precisa confirmar seus dados para conseguir deletar o usuário</div>";
        header("location: home2.php");  
    
    }
   
?>