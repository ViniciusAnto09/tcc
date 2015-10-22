<?php
	$id = $_GET['id_trabalho'];
	
	$query = "delete from tb_trabalho where (id_trabalho = $id)";
	$queryReplies = mysql_query($query);

	print ('<script> javascript:window.history.go(-1) </script>');
?>