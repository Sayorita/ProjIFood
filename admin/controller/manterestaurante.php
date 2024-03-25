<?php
    include_once("../../dao/manipuladados.php");

    $manter = new ManipulaDados();
    $manter->setTable("tb_restaurantes");
    $manter->setFieldPk("id");

    $id = $_POST['txtId'];
    $nome = $_POST['txtNome'];
    $descricao = $_POST['txtDescricao'];
    $categoria = $_POST['txtCategoria'];
    $url = $_POST['txtUrl'];
    $botao = $_POST['botao'];

    switch ($botao) {
        case "excluir":
            $manter->setValuePk($id);
            $manter->delete();
            echo "<script>location= '../principal.php' </script>";
            break;
        case "editar":
            echo '<form method="post" action="alteraRestaurante.php" enctype="multipart/form-data">
            <input type="hidden" name="txtId" value="'.$id.'"/>
            <p>
                <label> Digite o nome do restaurante: </label>
                <input type="text" name="txtRestaurante" value="'.$nome.'"/>
            </p>
            <p>
                <label> Digite a descrição do restaurante: </label>
                <textarea rows="10" cols="40" name="txtDescricao">'.$descricao.'</textarea>
            </p>
            <p>
                <label> Categoria: </label>
                <input type="text" name="txtCategoria" value="'.$categoria.'"/>
            </p>
            <p>
                <label> Imagem do restaurante: </label>
                <input type="file" name="arquivo"/>
            </p>
            <p>
                <input type="submit" value="Enviar"/>
                <input type="reset" value="Limpar"/>
            </p>';
            break;
        default:
            break;
    }

?>