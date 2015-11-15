<?php
$id = $_SESSION['id_usuario'];
$sql = "select * from tb_usuario where (id_usuario = $id)";
$result = mysql_fetch_array ( mysql_query( $sql ) );

$imagem = $result['imagem'];
$imagem = substr($imagem, 6);
?>
<div class="block-header">
    <br>
    <h2><?php echo $_SESSION['nome']; ?>
    <br>
    <ul class="actions m-t-20 hidden-x"s>
        <li class="dropdown">
            <a href="" data-toggle="dropdown">
                <i class="zmdi zmdi-more-vert"></i>
            </a>

            <ul class="dropdown-menu dropdown-menu-right">
                <li>
                    <a href="index.php?page=30.1&id_usuario=<?php echo $id; ?>">Editar Informações </a>
                </li>

            </ul>
        </li>
    </ul>
</div>


<div class="card" id="profile-main">
    <div class="pm-overview c-overflow">
        <div class="pmo-pic">
            <div class="p-relative">
                <a href="">
                   <?php echo '<img class="img-responsive" src="'.$imagem.'" />';?>
                </a>




            </div>


            <div class="pmo-stat">
                <h2 class="m-0 c-white"><?= $result['telefone']; ?></h2>
                <?= $result['email']; ?>
            </div>
        </div>
        

        
    </div>

    <div class="pm-body clearfix">
        <ul class="tab-nav tn-justified">
            <li class="active waves-effect"><a href="profile-about.html">Minhas Informações</a></li>

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
