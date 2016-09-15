<?php 
require_once('Conexao.php');

$conexao = new Conexao();
$conexao->sql_query("UPDATE cliente SET username = 'nutic', password = 'nutic', status = 1, administrador = 1 where id = 8");
?>