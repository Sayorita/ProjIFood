<form method="post" action="controller/inseriRestaurante.php" enctype="multipart/form-data"> <!-- mandar arquivos grandes transformados em bytes que serão convertidos posteriormente -->
<div class="form-group">
    <label>Nome do restaurante:</label>
    <input type="text" class="form-control" id="txtRestaurante" name="txtRestaurante" require>
  </div>
  <div class="form-group">
    <label>Descrição:</label>
    <textarea class="form-control" id="txtDescricao" name="txtDescricao" rows="3" require></textarea>
  </div>
  <div class="form-group">
    <label>Categorias:</label>
    <input type="text" class="form-control" id="txtCategoria" name="txtCategoria" require>
  </div>
  <div class="form-group">
    <label>Imagem do restaurante</label>
    <input type="file" class="form-control-file" id="arquivo" name="arquivo">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>