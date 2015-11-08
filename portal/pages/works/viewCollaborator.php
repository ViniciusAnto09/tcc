<?php
    $idUsuario = $_GET['usuario'];

?>

<div class="card">
    <div class="card-header">
        <h2>Todos Colaboradores</h2>
    </div>

    <table id="data-table-command" class="table table-striped table-vmiddle">
        <thead>
            <tr>
                <th data-column-id="received" data-order="desc">Colaborador</th>
                <th data-column-id="commands" data-formatter="commands" data-sortable="false">Visualizar Profile</th>
            </tr>
        </thead>
        <tbody>
            <?php
                

                $sql = "select * from tb_colaboracao
                            inner join tb_usuario
                            on (tb_colaboracao.id_usuario= tb_usuario.id_usuario)
                            where (tb_colaboracao.id_usuario != $idUsuario)
                            and (tb_usuario.id_usuario = $idUsuario)";
                            
                           
                $search_query = mysql_query($sql);
                while($select = mysql_fetch_array($search_query)){
                    $nome = $select["nome"];

                    print('<tr>');
                        print('<td>'."$nome".'</td>');  
                        print('<td><a class="btn bgm-blue" id="visualizar"><i class="zmdi zmdi-eye"></i></a></td>');
                    print('</tr>');
                }
            ?>
        </tbody>
    </table>
</div>