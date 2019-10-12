<?php
require_once 'Processamento02.php';


class Processamento extends Paciente implements Processamento02 {
   private $con;
    public function conect(){
    
    //conectando o banco de dados e selecionando
    $this->con = mysqli_connect ('localhost', 'root', '') or die(mysqli_error());
    mysqli_select_db($this->con, "clinica") or die(mysqli_error());
        
    }

    public function cadastrar(){
    $nome = $this->getNome();
    $data_nascimento = $this->getData_nascimento();
    $cpf = $this->getCpf();
    $rg = $this->getRg();
    $email = $this->getEmail();
    $endereco = $this->getEndereco();
    $cep = $this->getCep();
    $telefone = $this->getTelefone();
    
    $sql = "INSERT INTO paciente (nome,nascimento,cpf,rg,email,endereco,cep,telefone) 
            values ('$nome','$data_nascimento','$cpf','$rg','$email','$endereco','$cep','$telefone')";
    
                    if (mysqli_query($this->con, $sql)) //Realiza uma consulta no banco de dados e retornando uma mensagem 
                        {
                            
                            echo "Paciente cadastrado com sucesso!";
                        } 
                    else
                        {
                            echo "Error: " . $sql . "<br>" . mysqli_error($this->con);
                        }
                            mysqli_close($this->con);
    
    }
    public function consultar(){
        
        
    }
}
