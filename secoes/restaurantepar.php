<?php

include_once("dao/manipuladados.php");

$dados = new ManipulaDados();
$dados->setTable("tb_restaurantes");
$lista = $dados->getAllDataTable();
?>

<section>
  <div class="container">
    <hr />

    <div class="row">
      <?php
      $count = 0;
      foreach ($lista as $restaurante) {
        // Abre uma nova linha a cada 3 cards
        if ($count % 3 == 0) {
          echo '</div><div class="row">';
        }
      ?>
        <div class="col-md-4">
          <div class="card mb-4" ">
            <img class="card-img-top" src="<?= $restaurante["url"] ?>" alt="Imagem do restaurante">
            <div class="card-body">
              <h5 class="card-title"><?= $restaurante["nome"] ?></h5>
              <p class="card-text"><?= $restaurante["descricao"] ?></p>
              <form action="restauranteComida.php" method="GET">
              <a href="?secao=restauranteComida?id=<?= $restaurante["id"]?>" class="btn btn-primary">Ver cardápio</a>
              </form>
            </div>
          </div>
        </div> <!-- col-md-4-->
        <?php
        $count++;
      }
        ?>
        </div> <!--card-deck-->
    </div><!--row-->
  </div> <!--container-->
</section>