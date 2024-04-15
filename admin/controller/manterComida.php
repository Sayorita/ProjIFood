<?php
    include_once("../../dao/manipuladados.php");

    $manter = new ManipulaDados();
    $manter->setTable("tb_comida");
    $manter->setFieldPk("id");

    $id = $_POST['txtId'];
    $nome = $_POST['txtPrato'];
    $ingredientes = $_POST['txtIng'];
    $preco = $_POST['txtPreco'];
    $restaurante = $_POST['cbxRest'];
    $botao = $_POST['botao'];


    switch ($botao) {
        case "excluir":
            $manter->setValuePk($id);
            $manter->delete();
            echo "<script>location= 'manutcomida.php' </script>";
            break;
        case "editar":
            echo '<form method="post" action="alterarComida.php" enctype="multipart/form-data"> 
            <input type="hidden" name="txtId" value="'.$id.'"/>
            <div class="form-group">
                <label>Nome do prato:</label>
                <input type="text" class="form-control" name="txtPrato" value="'.$nome.'">
              </div>
              <div class="form-group">
                <label>Ingredientes:</label>
                <textarea class="form-control" id="txtIng" name="txtIng" rows="3">'.$ingredientes.'</textarea>
              </div>
              <div class="form-group">
                <label>Preço:</label>
                <input type="number" class="form-control" id="txtPreco" name="txtPreco" value="'.$preco.'">
              </div>
              <div class="form-group">
                  <label>Restaurante:</label>
                  <select id="cbxRest" name="cbxRest" class="form-control">
                  <?php
                  foreach ($lista as $restaurante) {
                   ?>
                 <option value="cbxRest"></option>
                  <?php } ?>
                 </select>
                  <br>
                 <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            ';
            break;
        default:
            break;
    }

?>