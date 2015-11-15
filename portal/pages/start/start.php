<?php
    $idUsuario =  $_SESSION['id_usuario'];
?>
<div class="block-header">
    <br>
    <h2>Painel informativo</h2>
    <br>
</div>

<div class="mini-charts">
    <div class="row">
        <?php
            $query = "select count(DISTINCT id_trabalho) as qtdTrabalhos from tb_trabalho where (id_usuario = '$idUsuario')";
            $results = mysql_query($query);
            $array = mysql_fetch_array($results);
            $qtdTrabalhos = $array['qtdTrabalhos'];
        ?>
        <div class="col-sm-6 col-md-3">
            <div class="mini-charts-item bgm-red">
                <div class="clearfix">
                    <div class="chart stats-bar"></div>
                    <div class="count">
                        <small>Meus <br/>Trabalhos</small>
                        <h2><?php echo $qtdTrabalhos; ?></h2>
                    </div>
                </div>
            </div>
        </div>

        <?php
            $query = "select count(DISTINCT tb_usuario_trabalho.id_trabalho) as qtdTrabalhos
                      from tb_usuario_trabalho
                      inner join tb_trabalho
                      on tb_usuario_trabalho.id_trabalho = tb_trabalho.id_trabalho
                      where (tb_usuario_trabalho.id_usuario = '$idUsuario')
                      and (tb_trabalho.id_usuario != '$idUsuario')";
            $results = mysql_query($query);
            $array = mysql_fetch_array($results);
            $qtdTrabalhos = $array['qtdTrabalhos'];
        ?>
        <div class="col-sm-6 col-md-3">
            <div class="mini-charts-item bgm-deeporange">
                <div class="clearfix">
                    <div class="chart stats-bar"></div>
                    <div class="count">
                        <small>Trabalhos <br/> que participo</small>
                        <h2><?php echo $qtdTrabalhos; ?></h2>
                    </div>
                </div>
            </div>
        </div>
    

        <?php
            $query = "select count(id_colaboracao) as qtdTrabalhos from tb_colaboracao where (id_usuario = '$idUsuario')";
            $results = mysql_query($query);
            $array = mysql_fetch_array($results);
            $qtdTrabalhos = $array['qtdTrabalhos'];
        ?>
        <div class="col-sm-6 col-md-3">
            <div class="mini-charts-item bgm-cyan">
                <div class="clearfix">
                    <div class="chart stats-bar"></div>
                    <div class="count">
                        <small>Colaborações<br/> de Minha Autoria</small>
                        <h2><?php echo $qtdTrabalhos; ?></h2>
                    </div>
                </div>
            </div>
        </div>
    


        <?php
            $query = "select count(id_colaboracao) as qtdTrabalhos from tb_colaboracao
            inner join tb_trabalho
            on tb_colaboracao.id_trabalho = tb_trabalho.id_trabalho where (tb_trabalho.id_usuario = '$idUsuario')";
            $results = mysql_query($query);
            $array = mysql_fetch_array($results);
            $qtdTrabalhos = $array['qtdTrabalhos'];
        ?>
        <div class="col-sm-6 col-md-3">
            <div class="mini-charts-item bgm-green">
                <div class="clearfix">
                    <div class="chart stats-bar"></div>
                    <div class="count">
                        <small>Total de Colaborações <br/>em Meus Trabalhos </small>
                        <h2><?php echo $qtdTrabalhos; ?></h2>
                    </div>
                </div>
            </div>
        </div>
    

        <?php
            $query = "select count(DISTINCT tb_colaboracao.id_usuario) as qtdTrabalhos
                      from tb_colaboracao
                      inner join tb_trabalho
                      on tb_colaboracao.id_trabalho = tb_trabalho.id_trabalho
                      where (tb_colaboracao.id_usuario != '$idUsuario')";
            $results = mysql_query($query);
            $array = mysql_fetch_array($results);
            $qtdTrabalhos = $array['qtdTrabalhos'];
        ?>
        <div class="col-sm-8 col-md-3">
            <div class="mini-charts-item bgm-orange">
                <div class="clearfix">
                    <div class="chart stats-bar"></div>
                    <div class="count">
                        <small>Pessoas que Colaboraram<br/> em Meus Trabalhos</small>
                        <h2><?php echo $qtdTrabalhos; ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>   
</div>
