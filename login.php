<?php
    session_start();    
    if(isset($_SESSION['user-logado'])){
        header("location:cadastrar.php");
        //die();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>LOGIN</title>
    </head>
    <body>
        <h1><center>CLINICA VITALMED</center></h1>
        <h1><center>ACESSO ADMIN</center></h1>
        
        <form method="POST" action="conexao.php">
            <center>
            <legend>USUARIO</legend>
            <input type="text" name="usuario" size="30" maxlength="100" required=""/><p/>
            <legend>PASSWORD</legend>
            <input type="password" name="senha" size="30" maxlength="100" required=""/><p/>
           ----------------------------------------------<p/>
           <input type="submit" value="LOGIN" size="30" maxlength="100"/>
            </center>
        </form>
    </body>
</html>