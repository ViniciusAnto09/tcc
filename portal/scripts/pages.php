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

	elseif($page == 10.5){
		if ($_SESSION['valid'] == true){
			$page = 'pages/works/collaborations.php';
		}
		else{
			print("<script>location.href = 'pages/login/login.php';</script>");
		}
	}

	elseif($page == 10.6){
		if ($_SESSION['valid'] == true){
			$page = 'pages/works/delete_confirm.php';
		}
		else{
			print("<script>location.href = 'pages/login/login.php';</script>");
		}
	}


	elseif($page == 10.7){
		if ($_SESSION['valid'] == true){
			$page = 'pages/works/deleteColaboration.php';
		}
		else{
			print("<script>location.href = 'pages/login/login.php';</script>");
		}
	}

	elseif($page == 10.8){
		if ($_SESSION['valid'] == true){
			$page = 'pages/works/confirmColaboration.php';
		}
		else{
			print("<script>location.href = 'pages/login/login.php';</script>");
		}
	}

	elseif($page == 10.9){
		if ($_SESSION['valid'] == true){
			$page = 'pages/works/analyzeColaboration.php';
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
			$page = 'pages/profile/form_edit.php';
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

	elseif($page == 40){
		if ($_SESSION['valid'] == true){
			$page = 'pages/collaborations/form_search.php';
		}
		else{
			print("<script>location.href = 'pages/login/login.php';</script>");
		}
	}

	elseif($page == 40.1){
		if ($_SESSION['valid'] == true){
			$page = 'pages/collaborations/search.php';
		}
		else{
			print("<script>location.href = 'pages/login/login.php';</script>");
		}
	}

	elseif($page == 40.2){
		if ($_SESSION['valid'] == true){
			$page = 'pages/collaborations/choice.php';
		}
		else{
			print("<script>location.href = 'pages/login/login.php';</script>");
		}
	}

	elseif($page == 40.3){
		if ($_SESSION['valid'] == true){
			$page = 'pages/collaborations/collaborate.php';
		}
		else{
			print("<script>location.href = 'pages/login/login.php';</script>");
		}
	}

	elseif($page == 40.4){
		if ($_SESSION['valid'] == true){
			$page = 'pages/collaborations/collaborations.php';
		}
		else{
			print("<script>location.href = 'pages/login/login.php';</script>");
		}
	}

	elseif($page == 40.5){
		if ($_SESSION['valid'] == true){
			$page = 'pages/collaborations/form_colaborate.php';
		}
		else{
			print("<script>location.href = 'pages/login/login.php';</script>");
		}
	}

	elseif($page == 40.6){
		if ($_SESSION['valid'] == true){
			$page = 'pages/collaborations/submit.php';
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