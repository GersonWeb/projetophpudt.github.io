<?php  
	
	# Incluindo os arquivos necessários
	include_once 'conexao.php';
	include_once 'funcoes.php';

	# Prepara os dados para o banco
	$result = insert("alunos", $_POST);

	if($result){
		header("location: lista_alunos.php");
	}else{
		echo "Erro na inserção";
		die();
	}

?>