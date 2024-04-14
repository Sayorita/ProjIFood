<?php
include_once ("validarcookie.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IFood pobre e capenga</title>
    <link rel='stylesheet' type='text/css' href='css/bootstrap.css'>
    <link rel='stylesheet' type='text/css' href='css/estilo.css'>
</head>

<body>
    <?php include_once ("includes/cabecalho.php"); ?>
    <?php include_once ("includes/menu.php"); ?>
    <main>
        <?php
        include_once ("controller/verurl.php");
        $redirecionar = new VerUrl();
        $redirecionar->trocarUrl(@$_GET['secao']);
        ?>
        <?php include_once ("includes/rodape.php"); ?>
    </main>
    <script src='js/bootstrap.bundle.js'></script>
</body>

</html>