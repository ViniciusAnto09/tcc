<?php
set_time_limit(500);
$trabalho = $_GET['id_trabalho'];
$nomeDoTrabalho = $_GET['trabalho'];
include('../../scripts/connection.php');


$html="
<html>
";

$html.='
	<head>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<style="text/css">
			body{
				margin: 0;
				padding: 0;
				border: none;
				font-family: Calibri, DejaVu Sans, Arial;
				font-size: 13px;
			}
				
			.container{
				width: 700px;
				height: 980px;
				border-top: solid 10px #3F51B5;
				border-bottom: solid 10px #FFF;
				background-color: #FFF; /* RETIRAR */
				margin: auto; /* RETIRAR */
			}
			
			.container .content{
				width: 660px;
				height: 890px;
				margin: auto;
				margin-top: 20px;
			}
			
			#logo_capa{
				width: 425px;
				height: auto;
				margin: auto;
				padding-top: 300px;
				text-align: center;
				color: #3F51B5;
			}
			
			#info{
				width: 200px;
				height: 100px;
				margin: auto;
				margin-top: 870px;
				text-align: center;
				color: #3F51B5;
			}
			
			#logo{
				width: 278px;
				height: 37px;
			}
			
			#images{
				width: 660px;
				height: 140px;
				margin-top: 20px;
				margin-bottom: 20px;
			}
			
			#images img{
				width: 210px;
				height: 140px;
				margin-right: 10px;
			}
			
			h1{
				margin-top: 50px;
				color: #3F51B5;
			}
			
			h2{
				margin-top: 20px;
				color: #3F51B5;
			}
			
			#tableOfContent{
				width: 100%;
				height: 500px;
			}
			
			#tableOfContent #items{
				width: 100px;
				height: 200px;
				float: left;
				text-align: right;
			}
			
			#tableOfContent #dots{
				width: 300px;
				height: 200px;
				float: right;
			}
			
			#tableOfContent #numbers{
				width: 100px;
				height: 200px;
				margin-left: 10px;
				float: left;
				text-align: left;
			}
			
			p.capa{
				color: #3F51B5;
			}

			p{
				color: #000;
				padding-rigth: 10px;
			}
			
			p.pagination{
				margin-left: 680px;
			}
			
			#footer{
				width: 660px;
				height: 20px;
				margin: auto;
				text-decoration: none;
				text-align: center;
				color: #3F51B5;
			}
			
			table{
				width: 100%;
				font: 12px Arial, Helvetica, sans-serif;
				border: none;
				border-spacing: 2px;
			}
			thead{
				width: 100%;
				background: #FF9800;
				text-align: justify;
				font: 10px Arial, Helvetica, sans-serif;
				color: #FFF;
			}
			tbody{
				text-align: center;
			}
			
			th{
				padding: 3px 0px 3px 5px;
			}
			td{
				padding: 3px 0px 3px 5px;
				text-align: justify;
				font-size: 10px;
				background: #EEE;
			}
			
			td.indice{
				background: #FFF;
			}
			tr.line:nth-child(even){
				background: #FFF;
			}
			tr.line:nth-child(odd){
				background: #EEE;
			}
        </style>
    </head>
    <body>
		
		<div class="container">
			<div id="logo_capa">
				<h1>Relatório de Colaborações</h1>';
				$html.=' <h2>'.$nomeDoTrabalho.'</h2>
				<p class="capa">Portal do TCC</p>
                <p class="capa">http://www.portaldotcc.com.br</p>
			</div>
		</div>

		<div class="container">
		';
				$html.=' <h2>Projeto: '.$nomeDoTrabalho.'</h2>
			<div class="content">
			<table class="table table-striped table-bordered table-hover" id="dataTables-example">
		<thead><tr> <th>Data da Colaboração</th> <th>Colaborador</th><th>Descrição</th></tr>  </thead> 

	';

	$sql = "select tb_colaboracao.dataCriacao as dataCriacao, tb_trabalho.nome as nomeTrabalho, tb_usuario.nome as usuarioNome, tb_colaboracao.descricao as descricaoColaboracao from tb_colaboracao
                inner join tb_usuario
                on (tb_colaboracao.id_usuario= tb_usuario.id_usuario)
                inner join tb_trabalho
                on (tb_colaboracao.id_trabalho = tb_trabalho.id_trabalho)
                where(tb_colaboracao.id_trabalho = $trabalho)
                order by tb_colaboracao.dataCriacao";
	$search_query = mysql_query($sql);
	$total = mysql_num_rows($search_query);
	while($select = mysql_fetch_array($search_query)){
				 
						$data = date('d/m/Y', strtotime($select["dataCriacao"]));
						$nomeTrabalho = $select["nomeTrabalho"];
						$usuario = $select["usuarioNome"];
						$colaboracao = $select["descricaoColaboracao"];	
						
							$html.=' <tbody> ';
									$html.=' <tr> ';
										$html.=' <td>'."$data".'</td> ';
										$html.=' <td>'."$usuario".'</td> ';
										$html.=' <td>'."$colaboracao".'</td> ';
									$html.=' </tr> ';
							$html.=' </tbody> ';
						

					$html.=' 
			

		</div> ';
	}

	$html.=' </table> </div>';
	


$html.='	   
	 </body>
	 </html>
';



require_once("dompdf/dompdf_config.inc.php");
$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->set_paper('A4','portrait');
$dompdf->render();

$dompdf->stream("relatorio.pdf");
?>