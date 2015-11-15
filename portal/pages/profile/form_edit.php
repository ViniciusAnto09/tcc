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
        <form id="upload_form" role="form" enctype="multipart/form-data" method="post" action="pages/profile/edit.php?id_usuario=<?= $id ?>" onsubmit="return checkForm()">

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

            <!--  -->

            <!-- hidden crop params -->
                <input type="hidden" id="x1" name="x1" />
                <input type="hidden" id="y1" name="y1" />
                <input type="hidden" id="x2" name="x2" />
                <input type="hidden" id="y2" name="y2" />


                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <label for="image_file">Selecionar Imagem</label><br>

                    <div>
                        <span class="btn btn-primary btn-file">
                            <span class="fileinput-new" >Selecionar Imagem</span>
                            <span class="fileinput-exists">Selecionar Imagem</span>

                            <input type="file" class="fileinput-nefw" name="image_file" id="image_file" onchange="fileSelectHandler()" >
                        </span>
                    </div>
                </div>

                <div class="error"></div>

                <div class="step2">
                    <img class="fileinput-preview thumbnail" id="preview" data-trigger="fileinput" />

                    <div class="info">
                        <input type="hidden" id="w" name="w" />
                        <input type="hidden" id="h" name="h" />
                    </div>
                    <button type="submit" name="cadastre"  class="btn btn-primary btn-sm m-t-10">Salvar</button>
                </div>

            <!--  -->
           
            
        </form>
    </div>
</div>