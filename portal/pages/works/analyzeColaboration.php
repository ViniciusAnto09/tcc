<?php
	include('../../scripts/connection.php');

	$id = $_GET['id_colaboracao'];


	$query = "update tb_colaboracao set
				 status = 'A'
	  		 where (id_colaboracao = $id)";
			
	$result = mysql_query($query);
		

	if ($result){
		print ('<script> javascript:window.history.go(-1) </script>');
	}
	else {
		print ('<script> alert ("FALHA AO EDITAR DADOS!"); </script>');
		print ('<script> location.href = "../../../index.php?page=10" </script>');
	}
?>