<?php
session_start();

include_once("conexao.php");
$btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);
if($btnLogin){
	$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
	//echo "$usuario - $senha";
	if((!empty($usuario)) AND (!empty($senha))){
		//Gerar a senha criptografa
		//echo password_hash($senha,PASSWORD_DEFAULT);
		//echo password_hash($senha, PASSWORD_DEFAULT);
		
		//Pesquisar o usuário no BD
		
	$result_usuario = "SELECT Id_Cliente, Nome_Completo, Email, Senha FROM Tb_Cliente WHERE Email='$usuario' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		if($resultado_usuario){
			$row_usuario = mysqli_fetch_assoc($resultado_usuario);
			if(password_verify($senha, $row_usuario['Senha'])){
				$_SESSION['id'] = $row_usuario['Id_Cliente'];
				$_SESSION['nome'] = $row_usuario['Nome_Completo'];
				$_SESSION['email'] = $row_usuario['Email'];
				header("Location: home2.php");
			}else{
				$_SESSION['msg'] = "<div class='alert alert-danger'>Login ou senha inválidos!</div>";
				header("Location: index.php");
			}
			
		}
		
	}else{
		$_SESSION['msg'] = "<div class='alert alert-danger'>Login ou senha inválidos!</div>";
		header("Location: index.php");
	}
}else{
	$_SESSION['msg'] = "<div class='alert alert-danger'>Login ou senha inválidos!</div>";
	header("Location: index.php");
} 


		