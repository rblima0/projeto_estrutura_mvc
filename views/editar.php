
<div class="container">
    <div class="row">

    <h2>Formulário de Edição</h2>

    <form method="POST" enctype="multipart/form-data" action="<?php echo BASE_URL; ?>contato/editar_submit">

        <input type="hidden" name="id" value="<?php echo $info["id"]; ?>"/>

        <div class="form-group">
            <label for="nome">Nome: </label>
            <input type="text" name="nome" value="<?php echo $info["nome"]; ?>" class="form-control" />
        </div>

        <div class="form-group">
            <label for="telefone">Telefone: </label>
            <input type="text" name="telefone" value="<?php echo $info["telefone"]; ?>" class="form-control" />
        </div>

        <div class="form-group">
            <label for="email">E-mail: </label>
            <input type="email" name="email" value="<?php echo $info["email"]; ?>" class="form-control" />
        </div>

        <div class="form-group">
            <label for="foto">Imagem de perfil:</label>
            <input type="file" name="foto" class="form-control" /><br/>

            <div class="panel panel-default">
                <div class="panel-heading">Imagem atual</div>
                <div class="panel-body">
                <?php if(!empty($info['foto'])): ?>
                    <div class="foto-item">
                        <img class="img-thumbnail" src="<?php echo BASE_URL; ?>assets/images/contatos/<?php echo $info['foto']; ?>" alt="Foto Atual"><br/>
                    </div>
                <?php endif; ?>
                </div>
            </div>
        </div>

        <input type="submit" value="Alterar" class="btn btn-default">
    </form>

    </div>
</div>