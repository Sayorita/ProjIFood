<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <?php
        session_start();
        $qualquer = $_SESSION['usuario'];
        echo '<h3>Olá, ' . $qualquer . '</h3>';
        ?>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="?secao=cadcomida">CADASTRO DE COMIDA<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?secao=cadrestaurante">CADASTRO DE RESTAURANTES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?secao=manutcomida">ATUALIZAÇÕES DE COMIDAS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?secao=manutrestaurante">ATUALIZAÇÕES DE RESTAURANTES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php">LOGOUT</a>
            </li>
        </ul>
    </div>
</nav>