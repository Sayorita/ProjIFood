<?php

include_once("dao/manipuladados.php");

$dados = new ManipulaDados();
$dados->setTable("tb_restaurantes");
$lista = $dados->getAllDataTable();
?>

<section>
<?php
   foreach ($lista as $restaurante) {
    ?>
     <h3> <?=$restaurante["id"]?> </h3>
     <h3> <?=$restaurante["nome"]?> </h3>
     <h3> <?=$restaurante["descricao"]?> </h3>
     <?php
   }
   ?>

</section>