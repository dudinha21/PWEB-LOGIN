<?php

require_once 'Classes/pessoas.php';
$p = new pessoa;


$nome =  $_POST['nome'];
$usuario = $_POST['usuario'];
$email= $_POST['email'];
$senha = $_POST['senha'];

$p->conectar("recuperacao", "localhost", "root", "");
if($p->erro == "")
{
    $p->pesquisa($usuario);
}
else{
    echo "erro na conexão";
}


?>