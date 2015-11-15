<?php
    $id = $_GET['id_trabalho'];
    $sql = "select * from tb_trabalho where (id_trabalho = $id)";
    $result = mysql_fetch_array ( mysql_query( $sql ) );
?>  

<div class="block-header">
    <br>
    <h2>Editar Trabalho</h2>
    <ul class="actions">
            <li>
                <a href="javascript:window.history.go(-1)">
                    <i class="zmdi zmdi-arrow-left"></i>
                </a>
            </li>
        </ul>
    <br>
</div>

<div class="card">
    <div class="card-body card-padding">
        <form role="form" method="post" action="pages/works/edit.php?id_trabalho=<?= $id ?>">
            <div class="form-group fg-line">
                <label for="txtTitulo">Título do Trabalho</label>
                <input type="text" name="titulo" class="form-control input-sm" id="txtTitulo" value="<?= $result['nome']; ?>">
            </div>
            <div class="form-group fg-line">
                <label for="txtDescricao">Descrição</label>
                <textarea class="form-control" name="descricao" id="txtDescricao" rows="5" placeholder="Apresente informações sobre o seu trabalho.">
                    <?= $result['descricao'] ?>
                </textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-sm m-t-10">Editar</button>
        </form>
    </div>
</div>