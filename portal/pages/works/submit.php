<?php
	include('scripts/connection.php');

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

	$usuario = $_SESSION['id_usuario'];
	$titulo = $_POST['titulo'];
	$descricao = $_POST['descricao'];
	$token = geraToken(10);
	
	$query = "insert into tb_trabalhos (id_trabalho, id_usuario, nome, descricao, token)
			  values (null, '".$usuario."', '".$titulo."', '".$descricao."', '".$token."')";
		
	$result = mysql_query($query);
	
	if ($result){
		print ('<script> location.href = "index.php?page=10" </script>');
	}
?>