<?php

require_once 'pessoas.php';
$p = new pessoa;


$nome =  $_POST['nome'];
$usuario = $_POST['usuario'];
$email= $_POST['email'];
$senha = $_POST['senha'];

$p->conectar("recuperacao", "localhost", "root", "");
if($p->erro == "")
{
    $p->cadastrar($nome, $usuario, $email, $senha);
}
else{
    echo "erro na conexão";
}


 header("location: listagemPessoa.php");

?>
