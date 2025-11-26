<?php
    require_once "admin/config.inc.php";
    $sql = "SELECT * FROM clientes";
    $resultado = mysqli_query($conexao, $sql);
    if(mysqli_num_rows($resultado)>0){

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php
        if(mysqli_num_rows($resultado)>0){

    ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Empresa</th>
                <th>N° de Contato</th>
                <th>E-mail de Contato</th>
            </tr>
            <tbody>
                <?php
                    while($dados=mysqli_fetch_array($resultado)){
                ?>
                <tr>
                    <td><?=$dados['cliente']?></td>
                    <td><?=$dados['numero']?></td>
                    <td><?=$dados['email']?></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </thead>
    </table>
    <?php
        }else{
    ?>
    <p class="text-center">Nenhum cliente cadastrado!</p>
    <?php
        }
    ?>
    

    
</body>
</html>