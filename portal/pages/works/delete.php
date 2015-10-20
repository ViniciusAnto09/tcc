<?php
	$id = $_GET['id_trabalho'];
	
	$query = "delete from tb_trabalhos where (id_trabalho = $id)";
	$queryReplies = mysql_query($query);

	print ('<script> javascript:window.history.go(-1) </script>');
?>