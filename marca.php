<?php

	@$cod_marca = $_GET["cod_marca"];
	@$descricao_marca = $_GET["descricao_marca"];
	
	$link = mysqli_connect("127.0.0.1","root","","tabn_store");
	$sql = "INSERT INTO marca(cod_marca, descricao_marca)
			VALUES('$cod_marca','$descricao_marca')";
	$status = mysqli_query($link, $sql);
			mysqli_close($link);
				if($status==1)
					echo "Sucesso ao inserir registro!";
				else
					if($status==0) echo "Erro ao inserir!";
?>