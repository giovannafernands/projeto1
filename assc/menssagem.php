<?php

include 'conf/init.php';

if (!is_logged()) {
    redirect('blogger.php');
}

$user = currentUser();
$userId = $user['id'];

$message = $_POST['message'];
$categoryId = $_POST['category'];

add_message($userId, $categoryId, $message);
redirect('blogger.php');

?>