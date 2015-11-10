<?php
    $usuario = $_GET['usuario'];
?>

<div class="card">
    <div class="card-header">
        <h2>Minhas Colaborações</h2>
    </div>

    <table id="data-table-command" class="table table-striped table-vmiddle table-hover">
        <thead>
            <tr>
                <th data-column-id="id" data-type="date">Data da Colaboração</th>
                <th data-column-id="work">Trabalho</th>
                <th data-column-id="sender">Colaboração</th>
                <th data-column-id="commands" data-formatter="commands" data-sortable="false">Visualizar</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "select tb_colaboracao.dataCriacao, tb_trabalho.nome, tb_colaboracao.descricao,tb_colaboracao.id_colaboracao 
                            from tb_colaboracao
                            inner join tb_trabalho
                            on (tb_colaboracao.id_trabalho= tb_trabalho.id_trabalho)
                            where(tb_colaboracao.id_usuario = $usuario)
                            order by tb_colaboracao.dataCriacao";
                           
                $search_query = mysql_query($sql);
                while($select = mysql_fetch_array($search_query)){
                    $nomeTrabalho = $select["nome"];
                    $descricao = substr(strip_tags($select["descricao"]), 0, 80);
                    $dataCriacao = date('d/m/Y', strtotime($select["dataCriacao"]));
                    $colaboracao = $select["id_colaboracao"];

                    print('<tr>');
                        print('<td>'."$dataCriacao".'</td>');
                        print('<td>'."$nomeTrabalho".'</td>');  
                        print('<td>'."$descricao".'</td>');
                        print('<td><a href="index.php?page=11&id_colaboracao='.$colaboracao.'" class="btn bgm-blue m-r-5" id="visualizar"><i class="zmdi zmdi-eye"></i></a></td>');
                    print('</tr>');
                }
            ?>
        </tbody>
    </table>
</div>