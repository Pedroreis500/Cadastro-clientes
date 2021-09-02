<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') 
{
   $cliente = new Cliente($mysql);

   $cliente->adicionar($_POST['nome'], $_POST['sobrenome'], $_POST['email'],$_POST['idade']);
   redireciona('index.php');
}

?>