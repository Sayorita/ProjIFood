<?php
session_start();
include_once("../dao/manipuladados.php");

    $nome = $_POST['txtUser'];
    $senha = $_POST['txtPassword'];

    $dadoslogin = new ManipulaDados();
    $dadoslogin->setTable('tb_usuario');

    if($dadoslogin->validarLogin($nome, $senha)!=0){
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