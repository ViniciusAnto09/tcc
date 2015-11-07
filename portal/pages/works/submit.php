<?php
	include('scripts/connection.php');
	$usuario = $_SESSION['id_usuario'];

	function geraToken($tamanho = 8, $maiusculas = true, $numeros = true, $simbolos = false){
		$lmin = 'abcdefghijklmnopqrstuvwxyz';
		$lmai = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$num = '1234567890';
		$simb = '!@#$%*-';
		$retorno = '';
		$caracteres = '';
		$caracteres .= $lmin;
		if ($maiusculas) $caracteres .= $lmai;
		if ($numeros) $caracteres .= $num;
		if ($simbolos) $caracteres .= $simb;
		$len = strlen($caracteres);
		for ($n = 1; $n <= $tamanho; $n++) {
			$rand = mt_rand(1, $len);
			$retorno .= $caracteres[$rand-1];
		}
		return $retorno;
	}

	$titulo = $_POST['titulo'];
	$descricao = $_POST['descricao'];
	$token = geraToken(10);

	$query = "insert into tb_trabalho (id_trabalho, id_usuario, nome, descricao, token)
	values (null, '".$usuario."', '".$titulo."', '".$descricao."', '".$token."')";

	$result = mysql_query($query);

	$query = "select * from tb_trabalho where (id_usuario = '$usuario') order by id_trabalho desc limit 1 ";
	$results = mysql_query($query);
	if(mysql_num_rows($results) == 1){
		$select = mysql_fetch_array($results);
		$usuario = $select['id_usuario'];
		$trabalho = $select['id_trabalho'];
		$query = "insert into tb_usuario_trabalho (id_usuario, id_trabalho)
		values ('".$usuario."', '".$trabalho."')";
		$result = mysql_query($query);

		if ($result){
			print ('<script> location.href = "index.php?page=10" </script>');
		}
	}
?>