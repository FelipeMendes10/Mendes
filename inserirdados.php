<?php
session_start();

include_once("conexao.php");

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
	 

    
    
    $result_usuario = "insert into Tb_Cliente(Nome_Completo, Email, Senha) values ('$nome','$email','$senha_criptografada')";
    $resultado_usuario =  mysqli_query($conn,$result_usuario);
    
    
    $result_endereço = "insert into Tb_Endereço(Nome, Numero, Complemento, Bairro, Cep, Cidade, Estado) values ('$endereço','$numero','$complemento','$bairro','$cep','$cidade','$estado')";
    $resultado_endereço2 =  mysqli_query($conn,$result_endereço);

    if (mysqli_insert_id($conn)){
        $_SESSION['cadastro'] = "<div class='alert alert-success'>Usuário cadastrado com sucesso</div>";
        header("location: index.php");
    }
    
    else{
        
      $_SESSION['erro-cadastro'] = "<div class='alert alert-warning'>Erro no Cadastro!</div>";
        header("location: index.php");  
    
    }
    
?>