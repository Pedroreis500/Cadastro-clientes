<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cliente = new Cliente($mysql); 
    $cliente->remover($_POST['id']);
    redireciona('index.php');
}

?>