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
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th data-column-id="commands" data-formatter="commands" data-sortable="false">Informações</th>
            </tr>
        </thead>
        <tbody>
            <?php
                

                $sql = "select tb_usuario.nome from tb_colaboracao
                            inner join tb_usuario
                            on (tb_colaboracao.id_usuario= tb_usuario.id_usuario)
                            where (tb_usuario.id_usuario != '$idUsuario')
                            group by tb_usuario.nome";
                           
                $search_query = mysql_query($sql);
                while($select = mysql_fetch_array($search_query)){
                    $nome = $select["nome"];
                    $usuario = $select["tb_usuario.id_usuario"];

                    print('<tr>');
                        print('<td>'."$nome".'</td>');  
                        print('<td></td>');
                        print('<td></td>');
                        print('<td></td>');
                        print('<td></td>');
                        print('<td></td>');
                        print('<td></td>');
                        print('<td></td>');
                        ?>
                        <td style="width:150px;"><a href="index.php?page=30.3&idUsuario=<?php echo $usuario; ?>" class="btn bgm-blue" id="visualizar"><i class="zmdi zmdi-eye"></i></a></td>
                        <?php
                    print('</tr>');
                }
            ?>
        </tbody>
    </table>
</div>