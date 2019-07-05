<?php

include 'conf/init.php';

$username = $_POST['username'];
$pw = $_POST['pw'];

if (login($username, $pw)) {
    redirect('blogger.php');
}
redirect('reg_login.php?ml=Usuario ou senha incorreto');

?>