<?php
require_once 'config/conexao.php';
require_once 'Layouts/header.php';
require_once 'Models/Cliente.php';
require_once 'Layouts/redireciona.php';

$cliente = new Cliente($mysql);
$clientes = $cliente->exibirTodos();
?>
<div class="row">
    <div class="col s12 m6 push-m3">
    <h3 class="light">Clientes</h3>
<table class="striped">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Email</th>
            <th>Idade</th>
        </tr>
    </thead>
        <tbody>
            <?php foreach ($clientes as $cli) : ?>
            <tr>
                <td id="nome">  <?php echo $cli['nome'] ?>  </td>
                <td id="sobrenome"> <?php echo $cli['sobrenome'] ?>   </td>
                <td id="email"> <?php echo $cli['email'] ?> </td>
                <td id ="idade"> <?php echo $cli['idade'] ?>  </td>
                
                <td><a href="editar.php?id=<?php echo $cli['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
                <td><a href="excluir.php?id=<?php echo $cli['id']; ?>" class="btn-floating red"><i class="material-icons">delete</i></a></td>
                
            </tr>
            <?php endforeach; ?>

        </tbody>
</table>
<br>
    <a href="adicionar.php" class="btn">Adicionar cliente</a>
</div>
</div>
<?php
require_once 'Layouts/footer.php';
?>