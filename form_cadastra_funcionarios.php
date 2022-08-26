<?php  
	
	include_once 'conexao.php';
	include_once 'funcoes.php';
	
	

?>
<!DOCTYPE html>
<html>
<head>
	<title> Funcionarios </title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
	  <div class="row">
		<div class="col-2"></div>			    
		<div class="col-8">
			<h1 class="text-center"> Cadastro de Funcionarios </h1><hr>
			<form action="cadastra_funcionarios.php" method="POST">
			<div class="row">
				<div class="mb-3 col-1">
				  	<label for="nome-completo" class="form-label">
				  		<span class="iconify" data-icon="fa:address-card"></span> Codigo 
					</label>
				  <input type="text" class="form-control" name="idfuncionarios" placeholder="Id">
				</div>
				
				<div class="mb-3 col-2">
				  	<label for="nome-completo" class="form-label">
				  		<span class="iconify" data-icon="fa:address-card"></span> Funcionario
					</label>
				  <input type="text" class="form-control" name="funcionarios" placeholder="Funcionario">
				</div>	

				<div class="mb-3 col-3">
				  	<label for="nome-completo" class="form-label">
				  		<span class="iconify" data-icon="fa:address-card"></span> Data Adissão
					</label>
				  <input type="date" class="form-control" name="dataadmissao" placeholder="Data">
				</div>					

				
				<div class="mb-3 col-12 text-end">
					<button type="submit" class="btn btn-outline-primary">
					<span class="iconify" data-icon="fluent:send-20-filled"></span>
						Enviar Dados
					</button>
				</div>

			</div>
			</form>

		</div>			    
		<div class="col-2"></div>			    
	  </div>
	</div>

	
	<script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
</body>
</html>