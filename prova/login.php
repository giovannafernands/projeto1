<?php

include 'init.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

if ( login($email, sha1($senha)) ) {
    redirect('index.php');
}
redirect('reg_login.php?mes_log=OPS! Email ou senha incorreto');

?>