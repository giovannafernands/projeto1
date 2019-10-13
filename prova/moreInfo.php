<?php

include 'init.php';

if (!is_logged()) {
    redirect();
}

$id = $_GET['id'] ?? false;
if ($id === false) {
    redirect();
}

$livros = file(ITEMS_FILE);
$livro = explode(SEPARATOR, $livros[$id]);
$users = file(USERS_FILE);
$users = array_filter($users, function($el) {
    global $livro;
    
    list($email) = explode(SEPARATOR, $el);
    return $email == $livro[0];
});
$user = array_pop($users);
$user = explode(SEPARATOR, $user);

$infos = [
    'livro' => $livro[1],
    'Autor' => $livro[2],
    'Nome' => $user[2],
    'Email' => $user[0],
    
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= TITLE ?> - Informações...</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <table>
        <?php foreach ($infos as $info => $value): ?>
            <tr>
                <th><?= $info ?></th>
                <td><?= $value ?></td>
            </tr>
        <?php endforeach ?>
    </table>
    <a href="index.php">Voltar</a>
</body>
</html>