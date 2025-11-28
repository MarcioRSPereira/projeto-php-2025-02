<?php
    // Inclui a conexão com o BD.
    require_once "config.inc.php";
    
    // Pega o ID do cliente da URL.
    $id = $_GET['id'];
    
    // Consulta o BD para buscar os dados do cliente por ID.
    $sql = "SELECT * FROM clientes WHERE id = '$id'";
    
   //consulta
    $resultado = mysqli_query($conexao, $sql);
    
    // Verifica se o cliente foi encontrado.
    if(mysqli_num_rows($resultado) > 0){
        
        // Carrega os dados do cliente no array $cliente.
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
    }else{
        // Mensagem de erro se o cliente não for encontrado.
        echo "<h2>Nenhum cliente cadastrado!</h2>";
    }
?>

