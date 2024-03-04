<?php
session_start();

    $nome = $_POST['txtUser'];
    $senha = $_POST['txtPassword'];

    if($nome=="Tazmania" && $senha=="abluble"){
        //muestra la pantalla principal
        header("location: principal.php");
        $_SESSION['usuario'] = $nome;
    } else{
        //volver a la pantalla de login
        echo'<script> alert("usuario ou senha errado")</script>';
        echo "<script> location= 'index.php'</script>";
        //header("location: index.php");
        
        
    }
?>