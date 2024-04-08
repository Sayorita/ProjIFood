<?php
include_once("../dao/manipuladados.php");

$id = $_GET['id'];
$dados = new ManipulaDados();
$dados->getComidaByRestaurante($id); //terminar de escrever essa parte


?>