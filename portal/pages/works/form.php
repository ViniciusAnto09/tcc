<div class="block-header">
    <br>
    <h2>Cadastrar Trabalho</h2>
    <br>
</div>

<div class="card">
    <div class="card-body card-padding">
        <form role="form" method="post" action="index.php?page=10.2">
            <div class="form-group fg-line">
                <label for="txtTitulo">Título do Trabalho</label>
                <input type="text" name="titulo" class="form-control input-sm" id="txtTitulo" placeholder="Qual o título do seu trabalho?">
            </div>
            <div class="form-group fg-line">
                <label for="txtDescricao">Descrição</label>
                <textarea class="form-control" name="descricao" id="txtDescricao" rows="5" placeholder="Apresente informações sobre o seu trabalho."></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-sm m-t-10">Cadastrar</button>
        </form>
    </div>
</div>