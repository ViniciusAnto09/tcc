<?php
	include('scripts/connection.php');
	
	$page = $_GET['page'];
	session_start ();
	
	if($_SESSION['valid'] == false){
		print("<script>location.href = 'pages/login/login.php';</script>");
	}

	if(($page == '') || ($page == 1) && ($_SESSION['valid'] == true)){
		$page = 'pages/start/start.php';
	}

	elseif($page == 10){
		if ($_SESSION['valid'] == true){
			$page = 'pages/works/works.php';
		}
		else{
			print("<script>location.href = 'pages/login/login.php';</script>");
		}
	}

	elseif($page == 10.1){
		if ($_SESSION['valid'] == true){
			$page = 'pages/works/form.php';
		}
		else{
			print("<script>location.href = 'pages/login/login.php';</script>");
		}
	}

	elseif($page == 10.2){
		if ($_SESSION['valid'] == true){
			$page = 'pages/works/submit.php';
		}
		else{
			print("<script>location.href = 'pages/login/login.php';</script>");
		}
	}

	elseif($page == 10.3){
		if ($_SESSION['valid'] == true){
			$page = 'pages/works/form_edit.php';
		}
		else{
			print("<script>location.href = 'pages/login/login.php';</script>");
		}
	}

	elseif($page == 10.4){
		if ($_SESSION['valid'] == true){
			$page = 'pages/works/delete.php';
		}
		else{
			print("<script>location.href = 'pages/login/login.php';</script>");
		}
	}

	elseif($page == 30){
		if ($_SESSION['valid'] == true){
			$page = 'pages/profile/profile.php';
		}
		else{
			print("<script>location.href = 'pages/login/login.php';</script>");
		}
	}

	elseif($page == 30.1){
		if ($_SESSION['valid'] == true){
			$page = 'pages/profile/form-edit.php';
		}
		else{
			print("<script>location.href = 'pages/login/login.php';</script>");
		}
	}

	elseif($page == 30.2){
		if ($_SESSION['valid'] == true){
			$page = 'pages/profile/edit.php';
		}
		else{
			print("<script>location.href = 'pages/login/login.php';</script>");
		}
	}

	elseif($page == 1000){
		if ($_SESSION['valid'] == true){
			session_destroy();
			print("<script>location.href = 'pages/login/login.php';</script>");
		}
	}
	
?>