<?php
    $id = $_GET['id_trabalho'];
    $nomeTrabalho = $_GET['trabalho'];
?>

<div class="card">
    <div class="card-header">
        <h2><?php echo $nomeTrabalho; ?> </h2>
    </div>
    
    <table id="data-table-command" class="table table-striped table-vmiddle">
        <thead>
            <tr>
                <th data-column-id="id" data-type="date">Data da Colaboração</th>
                <th data-column-id="sender">Colaboração</th>
                <th data-column-id="received" data-order="desc">Colaborador</th>
                <th data-column-id="commands" data-formatter="commands" data-sortable="false">Commands</th>
            </tr
        </thead>
        <tbody>
            <?php
                $sql = "select * from tb_colaboracao
                            inner join tb_usuario
                            on (tb_colaboracao.id_usuario= tb_usuario.id_usuario)
                            where(tb_colaboracao.id_trabalho = $id)"; 
                           
                $search_query = mysql_query($sql);
                while($select = mysql_fetch_array($search_query)){
                    $nome = $select["nome"];
                    $descricao = substr($select["descricao"],0,98);
                    $dataCriacao = date('d/m/Y', strtotime($select["dataCriacao"]));

                    print('<tr>');
                        print('<td>'."$dataCriacao".'</td>');
                        print('<td>'."$descricao".'...</td>');
                        print('<td>'."$nome".'</td>');  
                    print('</tr>');
                }
            ?>
          
        </tbody>


    </table>
</div>