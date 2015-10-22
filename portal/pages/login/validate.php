<?php
	include('../../scripts/connection.php');

	$page = $_GET['page'];
	session_start();

	if (($page == '') || ($page == 1)){ 
		$page = 'login.php';
	}

	if ($page == 2) { 
		$email = $_POST['email'];
		$password = sha1($_POST['password']);
		
		$_SESSION['valid'] = false;
	
		function anti_sql($txt){
			$txt = get_magic_quotes_gpc() == 0 ? addslashes($txt) : $txt;
			return preg_replace("@(--|\#|\*|;|=)@s", "", $txt);
		}

		$email = anti_sql($email);
		$password = anti_sql($password);
		
		$query = "select * from tb_usuario where (email = '$email') and (senha = '$password')";
		$results = mysql_query($query);
		if(mysql_num_rows($results) == 1){
			$_SESSION['valid'] = true;
			$array = mysql_fetch_array($results);
			$_SESSION['id_usuario'] = $array['id_usuario'];
			$_SESSION['nome'] = $array['nome'];
			
			print ("<script> location.href = '../../index.php';</script>");
		}
		else{
			$_SESSION['valid'] = false;
			print ("<script> location.href = 'login.php';</script>");
		}
	}
?>