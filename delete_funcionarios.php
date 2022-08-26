<?php  
	
	# Incluindo os arquivos necessários
	include_once 'conexao.php';
	include_once 'funcoes.php';



	# Prepara os dados para o banco
	$filtro['id_funcionarios'] = $_POST['id_funcionarios'];
	$result = delete("funcionarios", $filtro);

	if($result){
		header("location: lista_funcionarios.php");
	}else{
		echo "Erro na Exclusão";
		die();
	}

?>