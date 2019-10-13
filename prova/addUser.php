<?php

include 'init.php';

// foreach($_POST as $idx => $val) {
//     $$idx = $val;
// }
$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';
$confirmar = $_POST['confirmar'] ?? '';
$nome = $_POST['nome'] ?? '';

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
$data = join(SEPARATOR, [$email, sha1($senha), $nome]) . "\n";
$handle = fopen(USERS_FILE, 'a');
fwrite($handle, $data);
redirect('reg_login.php?mes_reg=Usuário cadastrado com sucesso');

?>