<?php

		$query = "SELECT fkidemp FROM image WHERE fkidemp =' $id ";

		$result = mysqli_query($conexao, $query) or die('Invalid query: ' . $conexao->error);

		if ($result->num_rows > 0) {
    	$sql = "DELETE fkidemp FROM image WHERE fkidemp = $id ";
	}

	?>