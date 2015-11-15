<?php
	$trabalho = $_GET['id_trabalho'];
	$usuario = $_GET['usuario'];

	$query = "insert into tb_usuario_trabalho (id_usuario, id_trabalho)
		values ('".$usuario."', '".$trabalho."')";
		$result = mysql_query($query);		
		

	if ($result){
		// print ('<script> location.href = "index.php?page=40.4&id_trabalho='.$trabalho.'&usuario='.$usuario.'" </script>');
		print ('<script> location.href = "index.php?page=40.3" </script>');
	}
	else {
		print ('<script> alert ("FALHA AO EDITAR DADOS!"); </script>');
		print ('<script> location.href = "../../../index.php?page=10" </script>');
	}
?>