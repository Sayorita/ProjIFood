<?php

include_once("../dao/manipuladados.php");

$dados = new ManipulaDados();
$dados->setTable("tb_restaurantes");
$lista = $dados->getAllDataTable();
?>

<section>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOME</th>
      <th scope="col">DESCRIÇÃO</th>
      <th scope="col">CATEGORIA</th>
      <th scope="col">URL</th>
      <th scope="col">ALTERAR</th>
      <th scope="col">EXCLUIR</th>
    </tr>
  </thead>
  <tbody>
     
<?php
   foreach ($lista as $restaurante) {
    ?>
    <form method="post" action="controller/manteRestaurante.php">
    <tr>
        <th scope="row"><?= $restaurante["id"]?></th>
        <td><?= $restaurante["nome"] ?></td>
        <td><?= $restaurante["descricao"] ?></td>
        <td><?= $restaurante["categoria"] ?></td>
        <td><?= $restaurante["url"] ?></td>

            <input type="hidden" name="txtId" value="<?= $restaurante["id"] ?>">
            <input type="hidden" name="txtNome" value="<?= $restaurante["nome"] ?>">
            <input type="hidden" name="txtDescricao" value="<?= $restaurante["descricao"] ?>">
            <input type="hidden" name="txtCategoria" value="<?= $restaurante["categoria"] ?>">
            <input type="hidden" name="txtUrl" value="<?= $restaurante["url"] ?>">
            <td><button type="submit" name="botao" value="editar"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16"><path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/><path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/></svg></td>
            <td><button type="submit" name="botao" value="excluir"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16"><path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/></svg></td>
        </tr> 
        </form>
        </tbody>
     <?php
   }
   ?>
</table>
</section>