<div class="block-header">
    <br>
    <h2>Trabalhos Cadastrados</h2>
    <br>
</div>
<?php
    $usuario = $_SESSION['id_usuario'];

    $sql = "select * from tb_trabalho where (id_usuario = '$usuario')";
    $search_query = mysql_query($sql);
    while($select = mysql_fetch_array($search_query)){
        $id = $select["id_trabalho"];
        $nome = $select["nome"];
        $nomeTrabalho = htmlspecialchars($nome);
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
                                    print('<a href=index.php?page=10.3&id_trabalho='.$id.'>Editar</a>');
                                print('</li>');
                                print('<li>');
                                    print('<a href=index.php?page=10.4&id_trabalho='.$id.'&id_usuario='.$usuario.'>Excluir</a>');
                                print('</li>');
                                print('<li>');
                                ?>
                                    <a href="index.php?page=10.5&id_trabalho=<?php echo $id; ?>&trabalho=<?php echo $nomeTrabalho; ?>&usuario=<?php echo $usuario; ?>">Vizualizar Colaboração</a>
                                <?php 
                                print('</li>');
                                print('<li>');
                                 ?>
                                    <a href="pages/works/report.php?id_trabalho=<?php echo $id; ?>&trabalho=<?php echo $nomeTrabalho; ?>">Gerar Relatório</a>
                                <?php 
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