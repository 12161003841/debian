<div class="jumbotron" style="padding: 10px;">
    <div style="float: left;">
        <h1>Alterar Infração</h1>
    </div>
    <div style="float: right;">
        <a class="btn btn-primary" href="<?= base_url(); ?>painel/crimes">Voltar</a>
    </div>
    <div style="clear: both;"></div>
</div>
<div class="row">
    <div class="col-md-12">
        <form action="" method="post">
            <div class="form-group">
                        <label>Nome:</label>
            <input class="form-control" type="text" name="nome" value="<?= $crimes->nome; ?>">
                        <label>Lei:</label>
            <input class="form-control" type="text" name="lei" value="<?= $crimes->lei; ?>">
                        <label>Descrição:</label>
            <input class="form-control" type="text" name="desc" value="<?= $crimes->desc; ?>">

            </div>
            <input type="submit" name="alterar" class="btn btn-success btn-block" value="Salvar">
        </form>
    </div>
</div>