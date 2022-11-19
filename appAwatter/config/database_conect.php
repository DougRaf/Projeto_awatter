<?php

    $servidor = "92.205.11.133:3306";
    $usuario = "desqu_agrocota";
    $senha_db = "Douglas@2019";
    $dbname = "desquinela_sqlserver";

    $nome  = $_POST['nome'];    
    $email = $_POST['email']; 
    $senha = $_POST['senha'];
    $cpf   = $_POST['cpf']; 
    $idade = $_POST['idade']; 
    $confirma = $_POST['confirma'];  

    if (empty($nome) || empty($email) || empty($senha) || empty($cpf) || empty($idade) || empty($confirma)){
        echo "<script>alert('Ha campos sem preenchimento!');location.href=\"../index.php\";</script>"; 
        exit();
    }
        //Criar a conexao
    $link = mysqli_connect($servidor, $usuario, $senha_db, $dbname);
    mysqli_set_charset($link, "utf8"); 
    
    try{

        $sql = "INSERT INTO `Usuarios` (idUsuarios, nome, email, senha, confirmacao, cpf, idade) VALUES ('', '$nome', '$email', '$senha', '$confirma', '$cpf', '$idade')";
 
        if ($link->query($sql) === TRUE) {
            echo "<script>alert('Email enviado com Sucesso!');location.href=\"../index.php\";</script>";
            $link->close();
        }    
    } catch (Exception $e){
            echo "<script>alert('Problema com base de dados');location.href=\"../index.php\";</script>";
    }


   
      
    
?>
