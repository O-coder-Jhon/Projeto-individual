
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
      
    </body>
</html>
<?php 

//incluindo arquivos em php para conexão e requerimento
include_once 'Conexao/conect.php';
include_once 'Classes/Paciente.php';


//instaciando o objeto paciente
$paciente = new Paciente();

//passar os dados do formulario cadastrar.php para os metodos da classe Paciente.php
$paciente->setNome(filter_input(INPUT_POST,"nome",FILTER_SANITIZE_STRING));
$paciente->setEmail(filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL));
$paciente->setData_nascimento(filter_input(INPUT_POST,'nascimento'));
$paciente->setCpf(filter_input(INPUT_POST,"cpf"));
$paciente->setRg(filter_input(INPUT_POST,"rg"));
$paciente->setEndereco(filter_input(INPUT_POST,"endereço"));
$paciente->setCep(filter_input(INPUT_POST,"cep"));
$paciente->setTelefone(filter_input(INPUT_POST,"telefone"));

//inserindo os dados fornecidos pelo usuario no banco de dados
    $nome = $paciente->getNome();
    $data_nascimento = $paciente->getData_nascimento();
    $cpf = $paciente->getCpf();
    $rg = $paciente->getRg();
    $email = $paciente->getEmail();
    $endereco = $paciente->getEndereco();
    $cep = $paciente->getCep();
    $telefone = $paciente->getTelefone();
    
    $sql = "INSERT INTO `paciente`(`id_paciente`, `nome`, `nascimento`, `cpf`, `rg`, `email`, `endereço`, `cep`, `telefone`) VALUES (?,[$nome],[$data_nascimento],[$cpf],[$rg],[$email],[$endereco],[$cep],[$telefone]) ";
     
                    //Realiza uma consulta no banco de dados e retornando uma mensagem 
                    if (mysqli_query($con, $sql)) 
                        {
                            
                            echo "Paciente Cadastrado com Sucesso!";
                        } 
                    else
                        {
                            echo "Error: " . $sql . "<br>" . mysqli_error($con);
                        }
                            mysqli_close($con);
                            
               



