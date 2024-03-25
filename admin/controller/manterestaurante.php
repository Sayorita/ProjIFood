<?php
    include_once("../../dao/manipuladados.php");

    $manter = new ManipulaDados();
    $manter->setTable("tb_restaurantes");
    $manter->setFieldPk("id");

    $id = $_POST['txtId'];
    $botao = $_POST['botao'];

    switch ($botao) {
        case "excluir":
            $manter->setValuePk($id);
            $manter->delete();
            echo "<script>location= '../principal.php' </script>";
            break;
        case "editar":
            break;
        default:
            break;
    }

?>