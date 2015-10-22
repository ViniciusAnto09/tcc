<?php
	$trabalho = $_GET['id_trabalho'];
	$usuario = $_GET['usuario'];

	$query = "insert into tb_usuario_trabalho (id_usuario, id_trabalho)
		values ('".$usuario."', '".$trabalho."')";
		$result = mysql_query($query);		
		

	if ($result){
		print ('<script> javascript:window.history.go(-2) </script>');
	}
	else {
		print ('<script> alert ("FALHA AO EDITAR DADOS!"); </script>');
		print ('<script> location.href = "../../../index.php?page=10" </script>');
	}
?>