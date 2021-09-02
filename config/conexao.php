<?php

$hostname = "127.0.0.1";
$user = "root";
$database = "CRUD";
$password = "pedro123@";

try {
$mysql = mysqli_connect($hostname, $user, $password);
$db = mysqli_select_db($mysql, $database);

} catch (Exception $e) {
    try {
    } catch (Exception $i) {
       die ('Falha: ' . $i->getMessage());
    }
}

?>