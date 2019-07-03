<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>cadastro</title>
	<link rel="stylesheet" href="css/cadastro.css">
</head>
</head>
<body>
	<div class= "input">        
    <form class="form" action="index.php" method="POST">

        <label>Nome:</label>
        <input type="text" id="input" class="inp" name="nome" placeholder="Nome...">
        

        <label>Sobrenome:</label>
        <input type="text" class="inp" name="sobrenome" placeholder="Sobrenome...">
    
        
        <label>E-mail:</label>
        <input type="e-mail" class="inp" name="e-mail" placeholder="E-mail...">
      

        <label>Senha:</label>
        <input type="password" class="inp" name="pw" placeholder="Senha...">
  

        <label>Confirmar Senha:</label>
        <input type="password" class="inp" name="pw2" placeholder="Confirmar Senha...">
   
        <button type="submit" class="buuton" onclick="alert('Login efetuado com sucesso!')">Enviar</button>
   </form>
   <div id="debrbot" class="baixo"></div>
</body>
</html>