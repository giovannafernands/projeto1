<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Sistema Login</title>
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
     <div id="corpo-form">
	 <h1>Entrar</h1>
	 </div>
	 <form method= "POST" action= "processa.php">
	 <input type="text" class="inp" style="margin-top: 50px" placeholder="Login">	
	  <input type="password" class="inp" placeholder="Senha">
	 <button type="submit"class="button" >ACESSAR</button>
     <br>
     <br>
     <a href="cadastro.php"  class= "uo"> 
     Ainda não é cadastrado?
     Cadastre-se!</a>
     <br>
     <a href="recuperar.php" class="uo">
     Esqueceu a senha?</a>
	 </form>
	 
</body>
</html>