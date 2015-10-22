<?php
    $id = $_GET['id_usuario'];
    $sql = "select * from tb_usuario where (id_usuario = $id)";
    $result = mysql_fetch_array ( mysql_query( $sql ) );
?>  

<div class="block-header">
    <br>
    <h2>Editar Informações</h2>
    <br>
</div>

<div class="card">
        <div class="card-body card-padding">
        <form role="form" method="post" action="pages/profile/edit.php?id_usuario=<?= $id ?>">

            <div class="form-group fg-line">
                <label for="txtNome">Nome</label>
                <input type="text" name="nome" class="form-control input-sm" id="txtNome" value="<?= $result['nome']; ?>">
            </div>

            <div class="form-group fg-line">
                <label for="txtEmail">Email</label>
                <input type="email" name="email" class="form-control input-sm" id="txtEmail" value="<?= $result['email']; ?>">
            </div>

            <div class="form-group fg-line">
                <label for="telefone">Telefone</label>
                <input type="text" name ="telefone" class="form-control input-sm" id="telefone" value="<?= $result['telefone']; ?>">
            </div>

            <div class="form-group fg-line">
                <label for="txtBio">Bio</label>
                <input type="text" name="bio" class="form-control input-sm" id="txtBio" value="<?= $result['bio']; ?>">
            </div>
           
            <button type="submit" class="btn btn-primary btn-sm m-t-10">Editar</button>
        </form>
    </div>
</div>