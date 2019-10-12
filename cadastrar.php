<?php
    session_start();
    
    if(!isset($_SESSION['user-logado'])){  
        header("location:cadastrar.php"); 
        session_destroy();
    }
    if(isset($_GET['deslogar'])){               
        session_destroy();                     
        header("location:home.php");             
    }
   
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Clinica - Cadastro</title>
    </head>
    <center><h1>CADASTRO DE PACIENTES</h1></center>
    <body>
        <form method="POST" action="index.php">
            <h3>INFORMAÇÕES PESSOAIS</h3>
                
                <legend>NOME:</legend>
                <input type="text" name="nome" placeholder="Digite aqui o seu nome" size="22" maxlength="100" required=""/><p/>
                
                <legend>DATA DE NASCIMENTO:</legend>
                <input type="date" name="nascimento" size="22" required=""/><p/>
                
                <legend>CPF:</legend>
                <input type="text" name="cpf" size="22" maxlength="12" required=""/><p/>
                
                <legend>RG:</legend>
                <input type="text" name="rg"  size="22" maxlength="12" required=""/><p/>
                
            <h3>CONTATOS</h3>
                
                <legend>EMAIL:</legend>
                <input type="email" name="email" placeholder="Digite aqui o seu email" size="22" required="" /><p/>
                
                <legend>ENDEREÇO:</legend>
                <input type="text" name="endereço" placeholder="Digite aqui o seu endereço" size="22"required=""/><p/>
                
                <legend>CEP:</legend>
                <input type="text" name="cep" size="15" maxlength="10" required=""/><p/>
                
                <legend>TELEFONE:</legend>
                <input type="text" name="telefone" placeholder="Digite aqui o seu nome" size="22" maxlength="15" required=""/><p/>
            
            <h3>CADASTRAR</h3>
                
            <input type="submit" name="cadastrar" value="Cadastrar"/><p/>
            
         
           <li><a  href="?deslogar">SAIR</a></li>
           <li><a  href="consultar.php">CONSULTAR PACIENTES</a></li>
        
        </form>
    </body>
</html>

