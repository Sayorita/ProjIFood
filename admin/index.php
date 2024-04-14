<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

    <style>
        /* Adiciona estilos para centralizar o formulário */
        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* altura total da tela */
        }

        /* Estiliza o formulário */
        form {
            width: 100%; /* largueza de 100% */
            max-width: 400px; /* largura máxima de 400px */
            padding: 20px; /* padding para espaçamento interno */
            border: 1px solid #ccc; /* borda para separar visualmente o formulário */
            border-radius: 8px; /* cantos arredondados */
            background-color: #f9f9f9; /* cor de fundo clara */
        }
    </style>
</head>
<body>
    <main class="form-container">
        <form method="post" action="login.php">
            <!-- usuário -->
            <div class="form-outline mb-4">
                <input type="text" name="txtUser" placeholder="Digite o nome do usuário" class="form-control" required/>
            </div>

            <!-- senha -->
            <div class="form-outline mb-4">
                <input type="password" name="txtPassword" placeholder="Senha" class="form-control" required />
            </div>

            <!-- Grid de 2 colunas para estilo em linha -->
            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                        <label class="form-check-label" for="form2Example31"> Lembre de mim </label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block mb-4">Entrar</button>
            <button type="reset" class="btn btn-danger btn-block mb-4">Limpar</button>
        </form>
    </main>
    <script src='../js/bootstrap.bundle.js'></script>
</body>
</html>
