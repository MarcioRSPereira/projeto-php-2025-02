<h1>Cadastro de Cliente</h1>
<form action="clienteslista.php" method="post">
    <!--cadastro do cliente/dono da empresa-->
    <label>Nome:</label>
    <input type="text" name="clientname">
    <label>Sobrenome:</label>
    <input type="text" name="clientsurname">
    <label>Data de nascimento:</label>
    <input type="date" name="birthdate">
    <label>País:</label>
    <input type="text" name="country">
    <label>E-mail de contato (Cliente):</label>
    <input type="email" name="emailpers">
    <label>Estado:</label>
    <input type="text" name="state">

    <!--cadastro da empresa-->
    <label>Nome da empresa:</label>
    <input type="text" name="companyname">
    <label>Data de estabelecimento:</label>
    <input type="date" name="estdate">
    <label>País de estabelecimento:</label>
    <input type="text" name="estcountry">
    <label>Estado de estabelecimento:</label>
    <input type="text" name="eststate">
    <label>E-mail de contato (Empresa):</label>
    <input type="email" name="emailcomp">
    <input type="submit" value="Cadastrar Cliente & Empresa">
</form>