<?php

include_once("../../dao/manipuladados.php");
include_once("../../model/comida.php");
function converte($String) {
    return iconv("UTF-8","ISO8859-1", $String);
}

$comida = new Comida();
$alterar = new ManipulaDados();

$comida->setNome($_POST['txtNome']);
$comida->setIngredientes($_POST['txtIng']);
$comida-> setPreco($_POST['txtPreco']);
$comida->setIdRestaurante($_POST['cbxRest']);
$nome_restaurante = $restaurante->getNameById($comida->getIdRestaurante());

$alterar->setTable("tb_comida");
$alterar->setFields("nome='{$comida->getNome()}', ingredientes='{$comida->getIngredientes()}',preco='{$comida->getPreco()}','{$comida->getIdRestaurante()}','$nome_restaurante'");

$alterar->setFieldPk("id");
$alterar->setValuePk("{$comida->getId()}");
$alterar->update();

echo "<script> alert ('Comida alterada com sucesso') </script>";
echo "<script>location='../../admin/principal.php?secao=manutrestaurante'</script>";
?>

