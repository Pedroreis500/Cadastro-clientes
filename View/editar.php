<?php
require_once 'config/conexao.php';
require_once 'Layouts/header.php';
require_once 'Models/Cliente.php';
require_once 'Layouts/redireciona.php';
require_once 'Controller/EditarController.php'

?>
<div class="row">
    <div class="col s12 m6 push-m3">
    <h3 class="light">Editar Cliente</h3>
        <form action="editar.php" method="post">
            <div class="input-field col s12">
                <label for="nome">Novo Nome</label>
                <?php echo '<br>'?>
                <input type="text" name = "nome" id="nome" value=<?php echo $cli['nome']; ?>>
            </div>
                <div class="input-field col s12">
                    <label for="sobrenome">Novo Sobrenome</label>
                    <?php echo '<br>'?>
                    <input type="text" name = "sobrenome" id="sobrenome" value=<?php echo $cli['sobrenome']; ?>>
                </div>

                     <p>
                     <input type="hidden" name="id" value="<?php echo $cli['id']; ?>" />
                    </p>

                <div class="input-field col s12">
                    <label for="email">Novo Email</label>
                    <?php echo '<br>'?>
                    <input type="text" name = "email" id="email" value=<?php echo $cli['email']; ?>>
                </div>

                <div class="input-field col s12">
                    <label for="idade">Nova Idade</label>
                    <?php echo '<br>'?>
                    <input type="text" name="idade" id="idade" value=<?php echo $cli['idade']; ?>>
                </div>

                <button  href="index.php" type="submit" name="btn-cadastrar" class="btn">Atualizar</button>
                <a href="index.php" class="btn green">Lista de clientes</a>
        </form>
    </div>
</div>

<?php
require_once 'Layouts/footer.php';
?>