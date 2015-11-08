
<?php
    $id = $_GET['id_colaboracao'];


    $sql = "select * from tb_colaboracao 
            inner join tb_usuario 
            on (tb_colaboracao.id_usuario = tb_usuario.id_usuario)
            where (tb_colaboracao.id_colaboracao = '$id')";

    
    $search_query = mysql_query($sql);
    if(mysql_num_rows($search_query) != 0){
        $select = mysql_fetch_array($search_query);
        $descricao = $select["descricao"];
        $nomeUsuario = $select["nome"];
        $dataCriacao = date('d/m/Y', strtotime($select["dataCriacao"]));
    ?>


    <div class="card">
        <div class="card-header">
            <div class="media">
                <div class="pull-left">
                    <img class="lv-img" src="img/profile-pics/1.jpg" alt="">
                </div>
                
                <div class="media-body m-t-5">
                    <h2><?php echo $nomeUsuario; ?> <small>Data da Colaboração: <?php echo $dataCriacao; ?></small></h2>
                </div>
            </div>
        </div>
        
        <div class="card-body card-padding">
            <p><?php echo $descricao; ?></p>
            
        </div>   
    </div>

    <div>
            <a href= "javascript:window.history.go(-1)" class="btn bgm-orange"><i class="zmdi zmdi-arrow-back"></i></a>
    </div>
    <?php
    }
?>