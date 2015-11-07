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
    
    <table id="data-table-command" class="table table-striped table-vmiddle">
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
                            order by status"; 
                           
                $search_query = mysql_query($sql);
                while($select = mysql_fetch_array($search_query)){
                    $nome = $select["nome"];
                    $descricao = substr($select["descricao"],0,98);
                    $dataCriacao = date('d/m/Y', strtotime($select["dataCriacao"]));
                    $status = $select["status"];

                    if($status == "A"){
                        print('<tr class="warning">');
                            print('<td>'."$dataCriacao".'</td>');
                            print('<td>'."$descricao".'...</td>');
                            print('<td>'."$nome".'</td>'); 
                            print('<td><a class="btn bgm-green waves-effect"><i class="zmdi zmdi-check"></i></a>
                                       <a class="btn bgm-red waves-effect"><i class="zmdi zmdi-close"></i></a> </td>');  
                        print('</tr>');
                    }
                    else if($status == "O"){
                        print('<tr class="success">');
                            print('<td>'."$dataCriacao".'</td>');
                            print('<td>'."$descricao".'...</td>');
                            print('<td>'."$nome".'</td>'); 
                            print('<td><a class="btn bgm-red waves-effect"><i class="zmdi zmdi-close"></i></a> </td>');  
                        print('</tr>');
                    }
                    else if($status == "R"){
                        print('<tr class="danger">');
                            print('<td>'."$dataCriacao".'</td>');
                            print('<td>'."$descricao".'...</td>');
                            print('<td>'."$nome".'</td>'); 
                            print('<td><a class="btn bgm-green waves-effect"><i class="zmdi zmdi-check"></i></a></td>');  
                        print('</tr>');
                    }
                }   
            ?>
          
        </tbody>


    </table>
</div>