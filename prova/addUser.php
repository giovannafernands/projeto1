<?php

include 'init.php';

$email = $_POST['email'] ?? '';
$nome = $_POST['nome'] ?? '';
$sobrenome = $_POST['sobrenome'] ?? '';
$senha = $_POST['senha'] ?? '';
$confirmar = $_POST['confirmar'] ?? '';


?>

<?php if ($senha != $confirmar): ?>
    <h1>Senhas não podem ser diferentes</h1>
    <a href="#" onclick="history.go(-1)">Voltar</a>
    <?php exit() ?>
<?php endif ?>
<?php if ($senha == ''): ?>
    <h1>Preencha o campo de senha</h1>
    <a href="#" onclick="history.go(-1)">Voltar</a>
    <?php exit() ?>
<?php endif ?>

<?php
$data = join(SEPARATOR, [$email, $nome, $sobrenome, sha1($senha),]) . "\n";
$handle = fopen(USERS_FILE, 'a');
fwrite($handle, $data);
redirect('reg_login.php?mes_reg=Usuário cadastrado com sucesso');

?>