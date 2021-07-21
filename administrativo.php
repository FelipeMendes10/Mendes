<?php
session_start();
if(isset($_SESSION['id'])){
	echo "Olá ".$_SESSION['nome'].", Bem vindo <br>";
	echo "<a href='sair.php'>Sair</a>";
}else{
	$_SESSION['LoginErro'] = "Área restrita";
	header("Location: index.php");	
}



