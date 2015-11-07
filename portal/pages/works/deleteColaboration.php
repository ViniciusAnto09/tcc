<?php
	$id = $_GET['id_colaboracao'];
	
	$query = "delete from tb_colaboracao where (id_colaboracao = $id)";
	$queryReplies = mysql_query($query);

	print ('<script> javascript:window.history.go(-1) </script>');
?>