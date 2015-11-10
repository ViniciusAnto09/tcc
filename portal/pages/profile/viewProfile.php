<?php
$id = $_GET['idUsuario'];
$sql = "select * from tb_usuario where (id_usuario = $id)";
$result = mysql_fetch_array ( mysql_query( $sql ) );
?>
<div class="block-header">
    <br>
    <h2><?php echo $result['nome']; ?></h2>
    <br>
</div>


<div class="card" id="profile-main">
    <div class="pm-overview c-overflow">

        <div class="pmo-block pmo-contact hidden-xs">
            <h2>Informações de Contato</h2>

            <ul>
                <li><i class="zmdi zmdi-phone"></i><?= $result['telefone']; ?></li>
                <li><i class="zmdi zmdi-email"></i><?= $result['email']; ?></li>

            </ul>
        </div>

    </div>

    <div class="pm-body clearfix">
        <ul class="tab-nav tn-justified">
            <li class="active waves-effect"><a href="profile-about.html">Informações colaborador</a></li>

        </ul>

        <div class="pmb-block">
            <div class="pmbb-header">
                <h2><i class="zmdi zmdi-equalizer m-r-5"></i> Bio</h2>
            </div>
            <div class="pmbb-body p-l-30">
                <div class="pmbb-view">
                    <?= $result['bio']; ?>
                </div>
            </div>
        </div>
    </div>
</div>