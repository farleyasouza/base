<div class="container profile">
    <?php if (isset($_GET["error"]) && $_GET["error"] === "fields"): ?>
        <div class="alert alert-warning">
            Preencha todos os campos!
        </div>
    <?php endif; ?>
    <?php if (isset($_GET["success"])): ?>
        <div class="alert alert-success">
            <strong>Parabéns!</strong> Dados atualizados com sucesso.
        </div>
    <?php endif; ?>
    <h1>Editar perfil</h1>
    <form method="POST" action="<?= BASE_URL ?>auth/update">
        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" name="name" id="name" class="form-control" value="<?=auth()->name?>" required />
        </div>
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" class="form-control" value="<?=auth()->email?>" readonly disabled />
        </div>
        <div class="form-group">
            <label for="password">Senha:</label>
            <input type="password" name="password" id="password" class="form-control" />
        </div>
        <input type="submit" value="Atualizar" class="btn btn-success btn-custom-success" />
    </form>

</div>