<?php
include('../../scripts/connection.php');

$id = $_GET['id_usuario'];

$nome		= $_POST['nome'];
$email		= $_POST['email'];
$telefone	= $_POST['telefone'];
$bio 		= $_POST['bio'];

$query = "update tb_usuarios set
		nome = '$nome',
		email = '$email',
		telefone = '$telefone',
		bio = '$bio'
		where (id_usuario = $id)";

$result = mysql_query($query);

session_start();

$_SESSION['nome'] = $nome;

if ($result){
	print ('<script> location.href = "../../index.php?page=30" </script>');
}
else {
	print ('<script> alert ("FALHA AO EDITAR DADOS!"); </script>');
	print ('<script> location.href = "../../../index.php?page=30" </script>');
}
?>