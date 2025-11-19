<?php
    echo "<h1>Painel Administrativo</h1>";

    
?>
<!-- links para listar usuários e clientes -->
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="?pg=clientesLista">Listar clientes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?pg=usuariosLista">Listar usuários</a>
            </li>
        </ul>
    </div>
</nav>

<?php

    // área de conteúdo
    if(empty($_SERVER["QUERY_STRING"])){
        $var = "principal";
        include_once "$var.php";
    }else{
        $pg = $_GET['pg'];
        include_once "$pg.php";
    }
?>

