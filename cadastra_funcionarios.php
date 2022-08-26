<?php  
	
	# Incluindo os arquivos necessários
	include_once 'conexao.php';
	include_once 'funcoes.php';

	# Prepara os dados para o banco
	$result = insert("funcionarios", $_POST);

	if($result){
		header("location: lista_funcionarios.php");
	}else{
		echo "Erro na inserção";
		die();
	}

?>