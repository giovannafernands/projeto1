<?php include 'init.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> - Login / Registro</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <div class="banner">   
    <a href="index.php" class="a2"> MENU</a>
    
    
</div>
 <form action="login.php" method="POST">
        <fieldset>
            <h3>Login</h3>
           <label>Email</label> <input type="text" name="email" placeholder="Email">
            <label>Senha</label><input type="password" name="senha" placeholder="Senha">
            <input type="submit">
        </fieldset>
    </form>




    <form action="addUser.php" method="POST" >
        <fieldset>
            <h3>Cadastro</h3>
                   <input type="text" name="email" placeholder="Email...">
            <input type="text" name="nome"  placeholder="Nome...">
            <input type="text" name="sobrenome" placeholder="Sobrenome...">
            <input type="password" name="senha" placeholder="Senha...">
            <input type="password" name="confirmar" placeholder="Confirme a senha">
            
            <input type="submit">
        </fieldset>
    </form>
    <hr>
   
</body>
</html>