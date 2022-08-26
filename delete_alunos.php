<?php  
	
	# Incluindo os arquivos necessários
	include_once 'conexao.php';
	include_once 'funcoes.php';



	# Prepara os dados para o banco
	$filtro['id_alunos'] = $_POST['id_alunos'];
	$result = delete("alunos", $filtro);

	if($result){
		header("location: lista_alunos.php");
	}else{
		echo "Erro na Exclusão";
		die();
	}

?>