<?php
    require_once "config.inc.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM clientes WHERE id = '$id'";
    $resultado = mysqli_query($conexao, $sql);
    if(mysqli_num_rows($resultado) > 0){
        $cliente = mysqli_fetch_array($resultado);


?>

<h2>Cadastro de Clientes</h2>
<form action="?pg=clientesAlterar" method="post">
    <input type="hidden" name="id" value="<?=$cliente['id']?>">
    <label>Cliente:</label>
    <input type="text" name="cliente" value="<?=$cliente['cliente']?>"><br>
    <label>Loja:</label>
    <input type="text" name="loja" value="<?=$cliente['loja']?>"><br>
    <label>CNPJ:</label>
    <input type="number" name="cnpj" value="<?=$cliente['cnpj']?>"><br>
    <label>Endereço:</label>
    <input type="text" name="endereco" value="<?=$cliente['endereco']?>"><br>
    <label>Número:</label>
    <input type="number" name="numero" value="<?=$cliente['numero']?>"><br>
    <label>Email:</label>
    <input type="email" name="email" value="<?=$cliente['email']?>"><br>

    <input type="submit" value="Alterar cliente">
</form>

<?php
