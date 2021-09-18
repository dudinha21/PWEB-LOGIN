<?php

    $connection = mysqli_connect("localhost", "root", "", "recuperacao");

    $usuario = preg_replace("", "", $_POST['usuario']);
    
    
    $sql = "select * from pessoa where usuario = '$usuario'";

    try {
        mysqli_query($connection, $sql);
        echo "busca com sucesso";
    }
    catch(\Throwable){
        echo "erro";
    }
        
    
?>