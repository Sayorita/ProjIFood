<?php

include_once("dao/manipuladados.php");

$dados = new ManipulaDados();
$dados->setTable("tb_comida");
$lista = $dados->getAllDataTable();
?>

<section>
  <div class="container">
    <hr />

    <div class="row">
      <?php
      $count = 0;
      foreach ($lista as $comida) {
        // Abre uma nova linha a cada 3 cards
        if ($count % 3 == 0) {
          echo '</div><div class="row">';
        }
      ?>
        <div class="col-md-4">
          <div class="card mb-4" ">
            <div class="card-body">
              <h5 class="card-title"><?= $comida["nome"] ?></h5>
              <p class="card-text"><?= $comida["ingredientes"] ?></p>
              <a href="#" class="btn btn-primary">Detalhes</a>
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