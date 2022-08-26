<?php  
	
	include_once 'conexao.php';
	include_once 'funcoes.php';
	
	$emprestimos = select("emprestimos", null, null, " ORDER BY idemprestimos ASC");

?>

<!DOCTYPE html>
<html>
<head>
	<title> Emprestimos  </title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
	<meta charset="utf-8">
</head>
<body>
	<div class="container-fluid">
	  <div class="row">
		<div class="col-1"></div>			    
		<div class="col-10">
			<h1 class="text-center"> Listagem de Emprestimos </h1><hr>
			<div class="row">
				<table class="table table-striped" id="myTable">
				  <thead>
				  	<th> Codigo </th>	
				  	<th> Aluno </th>	
				  	<th> Funcionario </th>	
				  	<th> Data </th>	
				  </thead>
				  
				  <tbody>
				  	<?php foreach($emprestimos as $emprestimo): ?>
					  	<tr>
					  		<td><?=$emprestimo['idemprestimos'];?></td>
					  		<td><?=$emprestimo['idalunos'];?></td>
					  		<td><?=$emprestimo['idfuncionarios'];?></td>
							<td><?=$emprestimo['dataemprestimos'];?></td>
					  		<td>
					  			<a href="form_edita_aluno.php?id=<?=$alunos['idalunos'];?>" class="btn btn-warning btn-sm" title="Editar"><span class="iconify" data-icon="bi:pencil-square"></span></a>
					  								  			
					  			<button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal-<?=$aluno['idemprestimos'];?>" title="Excluir"><span class="iconify" data-icon="bi:trash"></span></button>

					  			<!-- Modal de exclusão -->
					  			<div class="modal fade" id="exampleModal-<?=$emprestimo['idemprestimos'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog">
								    <form action="delete_produto.php" method="POST">
								    <div class="modal-content">
								      <div class="modal-header">
								        <h5 class="modal-title" id="exampleModalLabel">Exclusão de Registro</h5>
								        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								      </div>
								      <div class="modal-body">
								        Tem certeza que deseja excluir <strong><?=$emprestimo['idemprestimos'];?></strong> ?
								      </div>
								      <input type="hidden" name="idemprestimos" value="<?=$aluno['idemprestimos'];?>">
								      <div class="modal-footer">
								        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
								        <button type="submit" class="btn btn-primary">Sim</button>
								      </div>
								    </form>
								    </div>
								  </div>
								</div>

					  		</td>

					  	</tr>
				  	<?php endforeach; ?>	
				  </tbody>
				</table>
			</div>
		</div>			    
		<div class="col-1"></div>			    
	  </div>
	</div>

	


	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>
	<script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
	<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

	<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>


	<script type="text/javascript">
		$(document).ready(function() {
		    $('#myTable').DataTable( {
		        dom: 'Bfrtip',
		        buttons: [
		            'copy', 'csv', 'excel', 'pdf', 'print'
		        ]
		    } );
		} )
	</script>
</body>
</html>


