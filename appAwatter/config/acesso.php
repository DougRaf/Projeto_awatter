<?php

    $servidor = "92.205.11.133:3306";
    $usuario = "desqu_agrocota";
    $senha_db = "Douglas@2019";
    $dbname = "desquinela_sqlserver";
 
    $email = $_POST['email']; 
    $senha = $_POST['senha'];
    
    $link = mysqli_connect($servidor, $usuario, $senha_db, $dbname);
    mysqli_set_charset($link, "utf8"); 

    $sql =  "SELECT * FROM `Usuarios` WHERE `email` = '$email' AND `senha` = '$senha'";
    $query = mysqli_query($link,$sql);
    $rows = mysqli_num_rows($query);   
  
    if ($rows != 0){ 
        header("Location:../pages/home.php");
    } else {
        echo "<script>alert('erro ao conectar');location.href=\"../index.php\";</script>"; 
    }
    
    ?>