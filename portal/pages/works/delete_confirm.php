<?php
	$usuario = $_GET['id_usuario'];
	$id = $_GET['id_trabalho'];

	$query = "delete from tb_colaboracao where (id_trabalho = $id)";
	$queryReplies = mysql_query($query);

	$query = "delete from tb_usuario_trabalho where (id_trabalho = $id)";
	$queryReplies = mysql_query($query);

	$query = "delete from tb_trabalho where (id_trabalho = $id)";
	$queryReplies = mysql_query($query);

	print ('<script> javascript:window.history.go(-3) </script>');
?>