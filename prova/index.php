<?php

include 'init.php';

$items = file(ITEMS_FILE);
$users = file(USERS_FILE);

$usersEmails = [];
foreach($users as $userRow) {
    list($email, , $nome, ) = explode(SEPARATOR, $userRow);
    $usersEmails[$email] = [$nome, ];
}
$items = array_map(function($el) {
    list($email, $name, $autor) = explode(SEPARATOR, $el);
    return [
        'email' => $email,
        'livro' => $name,
        'autor' => $autor
    ];
}, $items);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>< TITLE ></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <div class="banner">   
    <a> MENU</a>
  
</div>
    <table border="1">
        <tr>
            <th>Livros</th>
            <th>Autor</th>
            <?php if (is_logged()): ?>
            <?php endif ?>
        </tr>
        <?php foreach ($items as $id => $livro): ?>
            <tr>
                <td><?= $livro['livro'] ?></td>
                <td><?= $livro['autor'] ?></td>
                <?php if (is_logged()): ?>
                    <?php
                        $user = $usersEmails[$livro['email']];
                    ?>
                    <td><?= $user[0] ?> (<?= $user[1] ?>)</td>
                    <td>
                        <a href="moreInfo.php?id=<?= $id ?>">Mais informções...</a>
                        <?php if ($livro['email'] == userEmail()): ?>
                            <a href="deleteItem.php?id=<?= $id ?>">DELETAR</a>
                        <?php endif ?>
                    </td>
                <?php endif ?>
            </tr>
        <?php endforeach ?>
    </table>
    <?php if (!is_logged()): ?>
        <a href="reg_login.php">Login / Cadastro</a>
    <?php else: ?>
        <form action="addItem.php" method="POST">
            <input type="text" name="livro" placeholder="Nome do livro">
            <textarea name="autor" id="" cols="30" rows="10"></textarea>
            <input type="submit">
        </form>
        <a href="logout.php">Sair</a>
    <?php endif ?>
</body>
</html>