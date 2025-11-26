<?php
    echo "<h1>Painel Administrativo</h1>";

    
?>
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="?pg=clientesLista"> listar clientes</a>
            </li>
            </li>
        </ul>
    </div>
</nav>

<?php

    // área de conteúdo
    if(empty($_SERVER["QUERY_STRING"])){
        $var = "clientes";
        include_once "$var.php";
    }else{
        $pg = $_GET['pg'];
        include_once "$pg.php";
    }
?>





