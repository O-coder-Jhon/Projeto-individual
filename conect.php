<?php
    //conectando o banco de dados e selecionando
    $con = mysqli_connect ('localhost', 'root', '') or die(mysqli_error());
    mysqli_select_db($con, "clinica") or die(mysqli_error());
        
?>

