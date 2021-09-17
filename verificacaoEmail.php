<?php

$connection = mysqli_connect("localhost", "root", "", "recuperacao");

$email = preg_replace("", "", $_POST['email']);


$sql = "select * from cadastro where email = '$email'";
if($sql == 0)
    

?>
