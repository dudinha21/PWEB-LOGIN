<?php
$connection = mysqli_connect("localhost", "root", "", "recuperacao");

$nome = preg_replace("", "", $_POST['nome']);
$usuario = preg_replace("", "", $_POST['usuario']);
$email= preg_replace("", "", $_POST['email']);
$senha = preg_replace("", "", $_POST['senha']);

$sql = "select * from cadastro where email = '$email'";
if($sql == 0){

$sql = "insert into pessoa(nome, usuario, email, senha) values ('$nome', '$usuario', '$email', '$senha')";

}
else{
    echo "Email já está sendo utilizado";
}


try {
    mysqli_query($connection, $sql);
    echo "Cadastro sucedido";
    header("location: listagemPessoa.php");
}
catch(\Throwable){
    echo "falha no cadastro";
}

?>