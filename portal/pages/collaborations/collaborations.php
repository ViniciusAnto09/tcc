<?php
    $id = $_GET['id_trabalho'];
    $nomeTrabalho = $_GET['trabalho'];
?>

<div class="card">
    <div class="card-header">
        <h2><?php echo $nomeTrabalho; ?></h2>
        <ul class="actions">
            <li class="dropdown action-show">
                <a href="" data-toggle="dropdown">
                    <i class="zmdi zmdi-more-vert"></i>
                </a>
                
                <ul class="dropdown-menu dropdown-menu-right">
                    <li>
                        <a href="index.php?page=40.5&id_trabalho=<?php echo $id;?>&trabalho= <?php echo $nomeTrabalho;?>">Colaborar</a>
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
                <th data-column-id="commands" data-formatter="commands" data-sortable="false">Opções</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "select * from tb_colaboracao
                            inner join tb_usuario
                            on (tb_colaboracao.id_usuario= tb_usuario.id_usuario)
                            where(tb_colaboracao.id_trabalho = $id)
                            order by dataCriacao desc";
                           
                $search_query = mysql_query($sql);
                while($select = mysql_fetch_array($search_query)){
                    $nome = $select["nome"];
                    $descricao = substr(strip_tags($select["descricao"]), 0, 80);
                    $dataCriacao = date('d/m/Y', strtotime($select["dataCriacao"]));
                    $colaboracao = $select["id_colaboracao"];

                    print('<tr>');
                        print('<td>'."$dataCriacao".'</td>');
                        print('<td>'."$descricao".'</td>');
                        print('<td>'."$nome".'</td>');  
                        print('<td><a href="index.php?page=11&id_colaboracao='.$colaboracao.'" class="btn bgm-blue m-r-5" id="visualizar"><i class="zmdi zmdi-eye"></i></a></td>');
                    print('</tr>');
                }
            ?>
        </tbody>
    </table>
</div>
