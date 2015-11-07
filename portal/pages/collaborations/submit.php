<?php
	include('scripts/connection.php');


	$usuario = $_SESSION['id_usuario'];
	$idTrabalho = $_GET['id_trabalho'];
	$nomeTrabalho = $_GET['trabalho'];
	$colaboracao = $_POST['colaboracao'];


	$query = "select * from tb_trabalho where (id_trabalho = '$idTrabalho')";
	$results = mysql_query($query);

	if(mysql_num_rows($results) == 1){
		$array = mysql_fetch_array($results);
		$owner = $array['id_usuario'];

		if($usuario == $owner){
			$query2 = "insert into tb_colaboracao (id_colaboracao, descricao, dataCriacao, dataAceite, status, id_usuario, id_trabalho)
			values (null, '".$colaboracao."', now(), null, 'O', '".$usuario."', '".$idTrabalho."' )";
			$result2 = mysql_query($query2);
			print ('<script> javascript:window.history.go(-2) </script>');
		}
		else{
			$query2 = "insert into tb_colaboracao (id_colaboracao, descricao, dataCriacao, dataAceite, status, id_usuario, id_trabalho)
			values (null, '".$colaboracao."', now(), null, 'A', '".$usuario."', '".$idTrabalho."' )";
			$result2 = mysql_query($query2);
			print ('<script> javascript:window.history.go(-2) </script>');
		}	
	}


?>