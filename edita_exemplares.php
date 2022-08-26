<?php  
	
	# Incluindo os arquivos necessários
	include_once 'conexao.php';
	include_once 'funcoes.php';



	# Prepara os dados para o banco
	$filtro['idexemplares'] = $_POST['idexemplares'];
	$result = update("exemplares", $_POST, $filtro);

	if($result){
		header("location: lista_exemplares.php");
	}else{
		echo "Erro na inserção";
		die();
	}

?>