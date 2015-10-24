<?php
	include('scripts/connection.php');

	$usuario = $_SESSION['id_usuario'];
	$token = $_POST['txtToken'];

	$query = "select * from tb_trabalho where (token = '$token')";
	$results = mysql_query($query);
	if(mysql_num_rows($results) == 1){
		$select = mysql_fetch_array($results);
		$id = $select["id_trabalho"];
		$nome = $select["nome"];
		$descricao = nl2br($select["descricao"]);
		$token = $select["token"];
		print('<div class="col-sm-4">');
		print('<div class="card">');
		    print('<div class="card-header bgm-orange">');
		        print('<h2>'."$nome".'</h2><small class="token">TOKEN: '."$token".'</small>');
		        print('<ul class="actions actions-alt">');
		            print('<li class="dropdown">');
		                print('<a href="" data-toggle="dropdown" aria-expanded="false">');
		                    print('<i class="zmdi zmdi-more-vert"></i>');
		                print('</a>');

		                print('<ul class="dropdown-menu dropdown-menu-right">');
		                    print('<li>');
		                        print('<a href=index.php?page=40.2&id_trabalho='.$id.'&usuario='.$usuario.'>Colaborar</a>');
		                    print('</li>');
		                print('</ul>');
		            print('</li>');
		        print('</ul>');
		    print('</div>');
		    print('<div class="card-body card-padding justify">');
		        print($descricao);
		    print('</div>');
		    
		print('</div>');
		print('</div>');
	}
?>