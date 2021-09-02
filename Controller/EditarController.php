<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cliente = new Cliente($mysql); 
    $cliente->editar($_POST['id'],$_POST['nome'], $_POST['sobrenome'], $_POST['email'],$_POST['idade']);
    redireciona('index.php');
}

$cliente = new Cliente($mysql); 
$cli = $cliente->encontrarPorId($_GET['id']);

?>