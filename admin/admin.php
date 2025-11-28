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


    
    // Verifica se a URL está vazia, ou seja, se não há nenhum parâmetro GET após o '?'.
    if(empty($_SERVER["QUERY_STRING"])){
        
        // Define 'clientes' como o nome do arquivo padrão a ser carregado.
        $var = "clientes";
        
        // Inclui o arquivo de conteúdo padrão (clientes.php).
        include_once "$var.php";
    }else{
        
        // Obtém o valor'pg' da URL (ex: se for `?pg=clientesLista`, $pg será "clientesLista").
        $pg = $_GET['pg'];
        
        // Inclui o arquivo cujo nome corresponde ao valor de 'pg' (ex: clientesLista.php)
        include_once "$pg.php";
    }
?>






