<?php

include_once("../dao/manipuladados.php");

$dados = new ManipulaDados();
$dados->setTable("tb_restaurantes");
$lista = $dados->getAllDataTable();
?>

<form method="post" action="controller/inserirComida.php" enctype="multipart/form-data"> <!-- mandar arquivos grandes transformados em bytes que serão convertidos posteriormente -->
<div class="form-group">
    <label>Nome do prato:</label>
    <input type="text" class="form-control" name="txtPrato" require>
  </div>
  <div class="form-group">
    <label>Ingredientes:</label>
    <textarea class="form-control" id="txtIng" name="txtIng" rows="3" require></textarea>
  </div>
  <div class="form-group">
    <label>Preço:</label>
    <input type="number" class="form-control" id="txtPreco" name="txtPreco" require>
  </div>
  <div class="form-group">
      <label>Restaurante:</label>
      <select id="cbxRest" name="cbxRest" class="form-control">
      <?php
      foreach ($lista as $restaurante) {
       ?>
     <option value="<?php echo $restaurante['id'];?>"><?php echo $restaurante['nome'];?></option>
      <?php } ?>
     </select>
      <br>
     <button type="submit" class="btn btn-primary">Enviar</button>
    </form>




