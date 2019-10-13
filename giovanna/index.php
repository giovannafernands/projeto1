 
<?php
session_start();
$autorizado = $_SESSION['autorizado'] ?? false;
if ($autorizado !== true) {
    header('location: cadastro.php');
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Usuário</title>
 <h1>SEJAM BEM-VINDOS!</h1
</head>

<body>
<div class="banner">   
    <a href="index.php" class="a2"> MENU</a>
    <a href="cadastro.php" class="a2"> CADASTRO</a>
    <a href="login.php" class="a2"> LOGIN</a>
</div>
</body>

</html>