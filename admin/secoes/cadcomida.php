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
    <input type="text" name="txtPreco" require/>
</p>
<p>
    <label> Restaurante: </label>
    <select name="cbxRest">
    <option value=""></option>
  </select>
</p>
<p>
    <input type="submit" value="Enviar"/>
</p>