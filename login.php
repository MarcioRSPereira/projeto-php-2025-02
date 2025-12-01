<?php

   include("admin/config.inc.php");
   if(isset($_POST['email']) && strlen($_POST['email']>0)){
    if(isset($_SESSION))
        session_start();
    $_SESSION['email']=$mysqli->escape_string($_POST['email']);
    $_SESSION['senha']=md5($_POST['senha']);

    $sql_code="SELECT senha,codigo FROM usuario WHERE email='$_SESSION[email]'";
    $sql_query=$mysqli->query($sql_code) or die($mysqli->error);

    $dado=$sql_query->fetch_assoc();
    $total=$sql_query->num_rows;
    
    if($total==0){
        $erro[]="Este email não pertence a nenhum usuário.";
    }else{
        if($dado['senha']=$_SESSION['senha']){
            $_SESSION['usuario']=$dado['codigo'];
        }else{
            $erro[]="Senha incorreta";
        }
    }
    if(count($erro)==0||!isset($erro)){
        echo"<script>alert('login efetuado com sucesso');location.href='sucesso.php';</script>;";
    }
   }
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    
    <form action="" method="POST">
        <p><input value="<?php echo $_SESSION['email'];?>" type="email" placeholder="Email" name="email"></p>
        <p><input value="" type="password"  name="senha"></p>
        <a href="">Esqueceu sua senha?</a>
        <input type="submit" value="entrar">
    
</body>
</html>