<?php

$connection = mysqli_connect("localhost", "root", "", "recuperacao");
$sql = "select * from cadastro";

try {
    mysqli_query($connection, $sql);
    header("Location:busca.html");
}
catch(\Throwable){
    echo "erro";
}
?>