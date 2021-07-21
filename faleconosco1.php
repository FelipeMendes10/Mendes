<?php
session_start();

include_once("conexao.php");

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
	$texto = filter_input(INPUT_POST, 'texto', FILTER_SANITIZE_STRING);
	
	
	if(empty($_POST['nome'])){
		$_SESSION['vazio_nome'] = "Campo nome é obrigatório";
		$url = 'https://mendesatacados.000webhostapp.com/faleconosco.php';
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>
		";
	}else{
		$_SESSION['value_nome'] = $_POST['nome'];
	}
	
	if(empty($_POST['email'])){
		$_SESSION['vazio_email'] = "Campo e-mail é obrigatório";
		$url = 'https://mendesatacados.000webhostapp.com/faleconosco.php';
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>
		";
	}else{
		$_SESSION['value_email'] = $_POST['email'];
	}
	
	if(empty($_POST['texto'])){
		$_SESSION['vazio_assunto'] = "Campo assunto é obrigatório";
		$url = 'https://mendesatacados.000webhostapp.com/faleconosco.php';
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>
		";
	}else{
		$_SESSION['value_assunto'] = $_POST['texto'];
	}
	
	/*
	if(empty($_POST['texto'])){
		$_SESSION['vazio_mensagem'] = "Campo mensagem é obrigatório";
		$url = 'https://mendesatacados.000webhostapp.com/faleconosco.php';
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>
		";
	}else{
		$_SESSION['value_mensagem'] = $_POST['texto'];
	}
	
    */	
    
    if(empty($nome) or empty($email) or empty($texto)){
        $_SESSION['cadastro'] = "<div class='alert alert-warning'>Erro! Não foi possível enviar!</div>";
         $url = 'https://mendesatacados.000webhostapp.com/faleconosco.php';
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>
		";
    }
    
    else{
    
    
    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$texto = mysqli_real_escape_string($conn, $_POST['texto']);
	//$mensagem = mysqli_real_escape_string($conn, $_POST['mensagem']);
    
    $result_usuario = "insert into Tb_Formulário(Nome_Completo, Email, Texto) values ('$nome','$email','$texto')";
    $resultado_usuario =  mysqli_query($conn,$result_usuario);

    }
    
    if(mysqli_insert_id($conn)){
        $_SESSION['cadastro'] = "<div class='alert alert-success'>Enviado com sucesso</div>";
        header("location: https://mendesatacados.000webhostapp.com/faleconosco.php");
        
    }
    