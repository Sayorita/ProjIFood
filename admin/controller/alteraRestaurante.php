<?php

include_once("../../dao/manipuladados.php");
include_once("../../model/restaurante.php");
function converte($String) {
    return iconv("UTF-8","ISO8859-1", $String);
}

$restaurante = new Restaurante();
$alterar = new ManipulaDados();

$restaurante->setId($_POST['txtId']);
$restaurante->setName($_POST['txtRestaurante']);
$restaurante->setDescricao($_POST['txtDescricao']);
$restaurante-> setCategoria($_POST['txtCategoria']);

$nomearquivo = $_FILES['arquivo']['name'];
$restaurante-> setUrl("img/restaurantes/".$nomearquivo);

$nomearquivosalvo = converte($_FILES['arquivo']['name']);
$urllocalsalvo = "../../img/restaurantes/".$nomearquivosalvo;
move_uploaded_file($_FILES['arquivo']['tmp_name'],$urllocalsalvo);

$alterar->setTable("tb_restaurantes");
$alterar->setFields("nome='{$restaurante->getName()}', descricao='{$restaurante->getDescricao()}',categoria='{$restaurante->getCategoria()}',url='{$restaurante->getUrl()}'");

$alterar->setFieldPk("id");
$alterar->setValuePk("{$restaurante->getId()}");
$alterar->update();

echo "<script> alert ('Restaurante alterado com sucesso') </script>";
echo "<script>location='../../admin/principal.php?secao=manutrestaurante'</script>";
?>

