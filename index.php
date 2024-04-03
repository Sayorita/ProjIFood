<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IFood pobre e capenga</title>
    <link rel='stylesheet' type='text/css' href='css/bootstrap.css'>
    <link rel='stylesheet' type='text/css' href='css/style.css'>
</head>

<body>
    <?php include_once("includes/cabecalho.php"); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="menu-cor-pastel">
                <div class="col-md-2  text-center">
                    <?php include_once("includes/menu.php"); ?>
                </div> <!-- col-2-->
            </div>
            <div class="col-md-10">
                <main>
                    <?php
                    include_once("controller/verurl.php");
                    $redirecionar = new VerUrl();
                    $redirecionar->trocarUrl(@$_GET['secao']);
                    ?>
                </main>
            </div>
        </div> <!--ROW -->
    </div> <!-- CONTAINER -->
    <?php include_once("includes/rodape.php"); ?>
    <script src='js/bootstrap.bundle.js'></script>
</body>

</html>