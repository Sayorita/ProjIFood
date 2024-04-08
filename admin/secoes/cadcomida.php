<?php

include_once("../dao/manipuladados.php");

$dados = new ManipulaDados();
$dados->setTable("tb_restaurantes");
$lista = $dados->getAllDataTable();
?>

<form method="post" action="controller/inserirComida.php" enctype="multipart/form-data"> <!-- mandar arquivos grandes transformados em bytes que serão convertidos posteriormente -->
<p>
    <label> Nome do prato: </label>
    <input type="text" name="txtPrato" require/>
</p>
<p>
    <label> Ingredientes: </label>
    <input type="text" name="txtIng" require/>
</p>
<p>
    <label> Preço: </label>
    <input type="number" name="txtPreco" require/>
</p>
<p>
<label> Restaurante: </label>
<select name="cbxRest">

 <?php
   foreach ($lista as $restaurante) {
    ?>
    <option value="<?php echo $restaurante['id'];?>"><?php echo $restaurante['nome'];?></option>
    <?php } ?>
    </select>
</p>
<p>
    <input type="submit" value="Enviar"/>
</p>