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
                <th>Trabalho</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th data-column-id="commands" data-formatter="commands" data-sortable="false">Informações</th>
            </tr>
        </thead>
        <tbody>
            <?php
                

                $sql = "select tb_usuario.nome as nomeUsuario, tb_usuario.id_usuario as usuarioId, tb_trabalho.id_trabalho as idTrabalho, tb_trabalho.nome as nomeTrabalho from tb_usuario_trabalho
                            inner join tb_usuario
                            on (tb_usuario_trabalho.id_usuario= tb_usuario.id_usuario)
                            inner join tb_trabalho
                            on (tb_usuario_trabalho.id_trabalho = tb_trabalho.id_trabalho)
                            where (tb_trabalho.id_usuario = '$idUsuario')
                            and (tb_usuario_trabalho.id_usuario != '$idUsuario')
                            group by nomeUsuario, nomeTrabalho
                            order by tb_trabalho.id_trabalho";
                           
                $search_query = mysql_query($sql);
                while($select = mysql_fetch_array($search_query)){
                    $nome = $select["nomeUsuario"];
                    $nomeTrabalho = $select["nomeTrabalho"];
                    $idTrabalho = $select["idTrabalho"];
                    $usuario = $select["usuarioId"];

                    print('<tr>');
                        print('<td>'."$nome".'</td>');  
                        print('<td></td>');
                        print('<td></td>');
                        print('<td><a href="index.php?page=10.5&id_trabalho='."$idTrabalho".'&trabalho='."$nomeTrabalho".'&usuario='."$idUsuario".'">'."$nomeTrabalho".'<a/></td>');
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