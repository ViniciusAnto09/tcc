<?php
    $id = $_GET['id_trabalho'];
    $nomeTrabalho = $_GET['trabalho'];
    $idUsuario = $_GET['usuario'];
?>

<div class="block-header">
    <br>
    <h2>Realizar Colaboração</h2>
    <br>
</div>

<div class="card">
    <div class="card-body card-padding">
        <form role="form" method="post" action="index.php?page=40.6&id_trabalho=<?php echo $id;?>&trabalho=<?php echo $nomeTrabalho;?>&usuario=<?php echo $idUsuario;?>">
            <div class="form-group fg-line">
                <textarea class="form-control" name="colaboracao" id="txtColaboracao" rows="5" placeholder="Digite sua colaboração"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-sm m-t-10">Colaborar</button>
        </form>
    </div>
</div>