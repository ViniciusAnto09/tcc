<?php
	include('../../scripts/connection.php');

	$id = $_GET['id_trabalho'];

	$nome = $_POST['titulo'];
	$descricao = $_POST['descricao'];

	$query = "update tb_trabalhos set
				 nome = '$nome',
				 descricao = '$descricao'
	  		 where (id_trabalho = $id)";
			
	$result = mysql_query($query);
		

	if ($result){
		print ('<script> javascript:window.history.go(-2) </script>');
	}
	else {
		print ('<script> alert ("FALHA AO EDITAR DADOS!"); </script>');
		print ('<script> location.href = "../../../index.php?page=10" </script>');
	}
?>