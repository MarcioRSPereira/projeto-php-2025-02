
<!DOCTYPE html>
<html lang="en">
<!-- estilização do frontend -->
<header>
    <head>    
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
</header>

<!-- conteúdo do site -->
<body class="text-center">
<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <div class="container-fluid">
    <ul class="navbar-nav">
     <li class="nav-item">
        <a class="nav-link" href="?pg=contato">Contato</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?pg=empresascadastradas">Empresas Cadastradas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?pg=quemsomos">Quem Somos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?pg=form">Cadastrar Empresa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin/admin.php">Entrar como Administrador</a>
      </li>
    </ul>
  </div>
</nav>
<h5 class="text-center">Bem-vindo ao Business Path, selecione um dos menus acima.</h5>
</body>
</html>

<?php
    // área de conteúdo
    if(empty($_SERVER["QUERY_STRING"])){
        echo"Nenhuma página selecionada!";
    }else{
        $pg = $_GET['pg'];
        include_once "$pg.php";
    }
?>