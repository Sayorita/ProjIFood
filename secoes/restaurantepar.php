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
    <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="<?=$restaurante["url"]?>" alt="Imagem do restaurante">
    <div class="card-body">
    <h5 class="card-title"><?=$restaurante["nome"]?></h5>
    <p class="card-text"><?=$restaurante["descricao"]?></p>
    <a href="#" class="btn btn-primary">Acessar</a>
   </div>
   </div>
     <?php
   }
   ?>

</section>