<?php
	$usuario = $_GET['id_usuario'];
	$id = $_GET['id_trabalho'];

	$query = "select * from tb_colaboracao where (id_trabalho = $id)";
	$queryReplies = mysql_query($query);

	if(mysql_num_rows($queryReplies) > 0){ ?>
		<script>
			var r = confirm("Existem colaborações associadas a este registro. Deseja excluir mesmo assim?")
			if (r == true) {
				location.href='index.php?page=10.6&id_trabalho=' + <?php echo $id; ?> + '&id_usuario=' + <?php echo $id; ?> + ' ';

			} else {
    			javascript:window.history.go(-1);
			}
		</script>
		<?php
	}
	else{
		$query = "delete from tb_usuario_trabalho where (id_trabalho = $id)";
		$queryReplies = mysql_query($query);

		$query = "delete from tb_trabalho where (id_trabalho = $id)";
		$queryReplies = mysql_query($query);

		print ('<script> javascript:window.history.go(-1) </script>');
	}
?>