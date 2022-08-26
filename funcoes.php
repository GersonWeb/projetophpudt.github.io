<?php  

	function insert($table, $array){
		global $conn;

		# Recuperando as chaves do array (campos do banco)
		$fields = implode("`, `", array_keys($array));
 		
 		# Recuperado os valores do array
 		$values = implode("', '", $array);
		
		# Montando o comando SQL
		$query = "INSERT INTO `$table` (`$fields`) VALUES ('$values');";
 		
 		//echo $query;
 		# Enviar o comando SQL para o banco
		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

		# Testar o resultado
		if($result){
			return true;
		}else{
			return false;
		}
	}
	
	# SELECT `campo1`, campo2, campo3... FROM `categorias` WHERE {CONDIÇÃO} ORDER BY {ASC|DESC}
	function select($table, $fields, $filters, $extra){

		global $conn;

		$query = "SELECT ";

		# Tratando os campos
		if($fields != null){
			foreach ($fields as $value) {
				$query .= "`$value`, ";	
			}

			# Removendo a ultima virgula
			$query = substr($query, 0, -2);
		}else{
			$query .= "* ";
		}

		# Tratando a tabela
		$query .= " FROM `$table` ";

		# Tratando os filtros
		if($filters != null){
			$query .= "WHERE ";
			foreach ($filters as $key => $value) {
				$query .= "`$key` = '$value' AND ";
			}
			# Removendo o ultimo AND
			$query = substr($query, 0, -4);
		}

		# Tratando o extra
		if($extra != null){
			$query .= "$extra";
		}


		$result = mysqli_query($conn, $query);

		$data;
		while($row = mysqli_fetch_assoc($result)) {
		    $data[] = $row;
		}

		return $data;
	}

	
	# UPDATE tble SET campo = valor, campo = valor .... WHERE campo = valor
	function update($table, $new, $filters){

		global $conn;

		$query = "UPDATE `$table` SET ";

		# Tratando os campos
		if($new != null){
			foreach ($new as $key => $value) {
				$query .= "`$key` = '$value', ";	
			}

			# Removendo a ultima virgula
			$query = substr($query, 0, -2);
		}

		if($filters != null){
			$query .= " WHERE ";
			foreach ($filters as $key => $value) {
				$query .= "`$key` = '$value' AND ";
			}

			# Removendo o ultimo AND
			$query = substr($query, 0, -4);
		}

		# 
		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

		# Testar o resultado
		if($result){
			return true;
		}else{
			return false;
		}

	}

	# DELETE FROM `tble` WHERE `filers`= 'value';
	function delete($table, $filters){

		global $conn;

		$query = "DELETE FROM `$table` ";

		if($filters != null){
			$query .= " WHERE ";
			foreach ($filters as $key => $value) {
				$query .= "`$key` = '$value' AND ";
			}

			# Removendo o ultimo AND
			$query = substr($query, 0, -4);
		}

		# 
		$result = mysqli_query($conn, $query) or die(mysqli_error($conn));

		# Testar o resultado
		if($result){
			return true;
		}else{
			return false;
		}
	}


?>