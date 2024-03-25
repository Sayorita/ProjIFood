<?php

include_once("../dao/manipuladados.php");

$dados = new ManipulaDados();
$dados->setTable("tb_restaurantes");
$lista = $dados->getAllDataTable();
?>

<section>
<table>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>DESCRIÇÃO</th>
            <th>CATEGORIA</th>
            <th>URL</th>
            <th>ALTERAR</th>
            <th>EXCLUIR</th>
        </tr>
     
<?php
   foreach ($lista as $restaurante) {
    ?>
    <form method="post" action="controller/manteRestaurante.php">
        <tr>
            <td><?= $restaurante["id"] ?></td>
            <td><?= $restaurante["nome"] ?></td>
            <td><?= $restaurante["descricao"] ?></td>
            <td><?= $restaurante["categoria"] ?></td>
            <td><?= $restaurante["url"] ?></td>

            <input type="hidden" name="txtId" value="<?= $restaurante["id"] ?>">
            <input type="hidden" name="txtNome" value="<?= $restaurante["nome"] ?>">
            <input type="hidden" name="txtDescricao" value="<?= $restaurante["descricao"] ?>">
            <input type="hidden" name="txtCategoria" value="<?= $restaurante["categoria"] ?>">
            <input type="hidden" name="txtUrl" value="<?= $restaurante["url"] ?>">
            <td><button type="submit" name="botao" value="editar">imagme pra editar</td>
            <td><button type="submit" name="botao" value="excluir">imagem pra excluir</td>
        </tr> 
        </form>
     <?php
   }
   ?>
</table>
</section>