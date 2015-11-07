<?php
    $id = $_GET['id_trabalho'];
    $nomeTrabalho = $_GET['trabalho'];
    $usuario = $_SESSION['id_usuario'];
?>

<div class="card">
    <div class="card-header">
        <h2><?php echo $nomeTrabalho; ?> </h2>
        <ul class="actions">
            <li class="dropdown action-show">
                <a href="" data-toggle="dropdown">
                    <i class="zmdi zmdi-more-vert"></i>
                </a>
                
                <ul class="dropdown-menu dropdown-menu-right">
                    <li>
                        <a href="index.php?page=40.5&id_trabalho=<?php echo $id; ?>&trabalho=<?php echo $nomeTrabalho; ?>&usuario=<?php echo $usuario; ?>">Cadastrar andamento</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    
    <table id="data-table-command" class="table table-striped table-vmiddle table-hover">
        <thead>
            <tr>
                <th data-column-id="id" data-type="date">Data da Colaboração</th>
                <th data-column-id="sender">Colaboração</th>
                <th data-column-id="received" data-order="desc">Colaborador</th>
                <th data-column-id="commands" data-formatter="commands" data-sortable="false">Opção</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "select * from tb_colaboracao
                            inner join tb_usuario
                            on (tb_colaboracao.id_usuario= tb_usuario.id_usuario)
                            where(tb_colaboracao.id_trabalho = $id)
                            order by dataCriacao"; 
                           
                $search_query = mysql_query($sql);
                while($select = mysql_fetch_array($search_query)){
                    $nome = $select["nome"];
                    $descricao = substr(strip_tags($select["descricao"]), 0, 80);
                    $dataCriacao = date('d/m/Y', strtotime($select["dataCriacao"]));
                    $status = $select["status"];
                    $colaboracao = $select["id_colaboracao"];

                    if($status == "A"){
                        print('<tr class="warning">');
                            print('<td>'."$dataCriacao".'</td>');
                            print('<td>'."$descricao".'...</td>');
                            print('<td>'."$nome".'</td>');
                            
                            print('<td style="width:150px;"><a class="btn bgm-blue m-r-5" id="visualizar"><i class="zmdi zmdi-eye"></i></a> 
                            <a href="index.php?page=10.8&id_colaboracao='.$colaboracao.'" class="btn bgm-green m-r-5 waves-effect" id="aceitar"><i class="zmdi zmdi-check"></i></a>
                            <a href="index.php?page=10.7&id_colaboracao='.$colaboracao.'" class="btn bgm-red m-r-5 waves-effect" id="excluir"><i class="zmdi zmdi-close"></i></a></td>');
                             
                        print('</tr>');
                    }
                    else if($status == "O"){
                        print('<tr class="success">');
                            print('<td>'."$dataCriacao".'</td>');
                            print('<td>'."$descricao".'...</td>');
                            print('<td>'."$nome".'</td>'); 
                            print('<td style="width:200px;"><a class="btn bgm-blue m-r-5" id="visualizar"><i class="zmdi zmdi-eye"></i></a>
                            <a href="index.php?page=10.9&id_colaboracao='.$colaboracao.'" class="btn bgm-orange waves-effect m-r-5" id="analisar"><i class="zmdi zmdi-undo"></i></a> 
                            <a href="index.php?page=10.7&id_colaboracao='.$colaboracao.'" class="btn bgm-red m-r-5 waves-effect" id="excluir"><i class="zmdi zmdi-close"></i></a></td>');                        print('</tr>');
                    }
                    // else if($status == "R"){
                    //     print('<tr class="danger">');
                    //         print('<td>'."$dataCriacao".'</td>');
                    //         print('<td>'."$descricao".'...</td>');
                    //         print('<td>'."$nome".'</td>');
                    //         print('<td style="width:200px;"><a class="btn bgm-blue m-r-5" id="visualizar"><i class="zmdi zmdi-eye"></i></a>
                    //         <a class="btn bgm-orange waves-effect m-r-5"><i class="zmdi zmdi-undo"></i></a> 
                    //         <a class="btn bgm-green m-r-5 waves-effect"><i class="zmdi zmdi-check"></i></a></td>');
                            
                    //     print('</tr>');
                    // }
                }   
            ?>
          
        </tbody>


    </table>
</div>