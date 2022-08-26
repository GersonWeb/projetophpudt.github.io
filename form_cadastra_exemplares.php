<?php  
	
	include_once 'conexao.php';
	include_once 'funcoes.php';
	
	$categorias = select("categorias", null, null, " ORDER BY categoria");

?>
<!DOCTYPE html>
<html>
<head>
	<title> Exemplares </title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
	  <div class="row">
		<div class="col-2"></div>			    
		<div class="col-8">
			<h1 class="text-center"> Cadastro de Exemplares </h1><hr>
			<form action="cadastra_exemplares.php" method="POST">
			<div class="row">
				<div class="mb-3 col-5">
				  	<label for="nome-completo" class="form-label">
				  		<span class="iconify" data-icon="fa:address-card"></span> Titulo 
					</label>
				  <input type="text" class="form-control" name="titulo" placeholder="Titulo">
				</div>
				
				<div class="mb-3 col-7">
				  	<label for="nome-completo" class="form-label">
				  		<span class="iconify" data-icon="fa:address-card"></span> Quantidade
					</label>
				  <input type="number" class="form-control" name="quantidade" placeholder="Quantidade">
				</div>	

				<div class="mb-3 col-3">
				  	<label for="nome-completo" class="form-label">
				  		<span class="iconify" data-icon="fa:address-card"></span> Data da Compra
					</label>
				  <input type="date" class="form-control" name="data" placeholder="data">
				</div>					

				<div class="mb-3 col-6">
				  	<label for="nome-completo" class="form-label">
				  		<span class="iconify" data-icon="fa:address-card"></span> Categoria
					</label>
				  
				  	<select name="categoria_id" class="form-control">
						<?php foreach ($categorias as $categoria): ?>
							<option value="<?=$categoria['idcategoria'];?>">
								<?=$categoria['categoria'];?>
							</option>
						<?php endforeach; ?>
					</select>
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