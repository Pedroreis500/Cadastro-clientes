<?php
require_once 'config/conexao.php';
require_once 'Layouts/header.php';
require_once 'Models/Cliente.php';
require_once 'Layouts/redireciona.php';
require_once 'Controller/ExcluirController.php'
?>

    <div id="container">
        <h3>Você realmente deseja excluir o Cliente?</h3>
        <form method="post" action="excluir.php">
            <p>
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
                <button  class="btn red">Sim, excluir</button>
                <a href="index.php" class="btn green">Não, voltar</a>     
            </p>
        </form>
    </div>
    
<?php
require_once 'Layouts/footer.php';
?>