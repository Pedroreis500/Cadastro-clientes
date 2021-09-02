<?php
require_once 'config/conexao.php';
require_once 'Layouts/header.php';
require_once 'Models/Cliente.php';
require_once 'Layouts/redireciona.php';
require_once 'Controller/AdicionarController.php'

?>
<div class="row">
    <div class="col s12 m6 push-m3">
    <h3 class="light">Novo Cliente</h3>
        <form action="" method="POST">
            <div class="input-field col s12">
            <label for="nome">Nome</label>
            <?php echo '<br>'?>
            <input type="text" name = "nome" id="nome">
              
            </div>

                <div class="input-field col s12">
                <label for="sobrenome">Sobrenome</label>
                <?php echo '<br>'?>
                <input type="text" name = "sobrenome" id="sobrenome">                
              </div>

                <div class="input-field col s12">
                <label for="email">Email</label>
                <?php echo '<br>'?>
                    <input type="text" name = "email" id="email">
                </div>
                <div class="input-field col s12">
                    <label for="idade">Idade</label>
                    <?php echo '<br>'?>
                    <input type="text" name="idade" id="idade">
                   
                  
                </div>
                <button  href="index.php" type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
                <a href="index.php" class="btn green">Lista de clientes</a>
        </form>
    </div>
</div>
<?php
require_once 'Layouts/footer.php';
?>