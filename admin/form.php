<h1>Cadastro de Cliente</h1>
<form action="?pg=clientescadastro" method="post">
    <!--cadastro do cliente/dono da empresa-->

    <label>Nome do proprietário:</label>
    <input type="text" name="nome"><br><br>

    <!--cadastro da empresa-->
    <label>nome da loja/empresa:</label>
    <input type="text" name="loja"><br>
    <label>CNPJ:</label>
    <input type="text" name="cnpj"><br>
    <label>Endereço da loja/empresa:</label>
    <input type="text" name="endereco"><br>
    <label>número de contato (Empresa):</label>
    <input type="text" name="numero"><br>
    <label>E-mail de contato (Empresa):</label>
    <input type="email" name="email"><br><br>
    <input type="submit" value="Cadastrar Cliente & Empresa">
</form>
