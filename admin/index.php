<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel='stylesheet' type='text/css' href='css/bootstrap.css'>
    <link rel='stylesheet' type='text/css' href='css/estilo.css'>
</head>
<body>
    <main>
        <form method="post" action="login.php">
            <label for="txtUser"> </label></br>
            <input type="text" name="txtUser" placeholder="Digite o nome do usuário"></br>
            <label for="txtPassword"> </label></br>
            <input type="password" name="txtPassword" placeholder="Digite sua senha"></br>
            <input type="submit" value="entrar">
            <input type="reset" value="limpar">

        </form>
    </main>
<script src='../js/bootstrap.bundle.js'></script>
</body>
</html>