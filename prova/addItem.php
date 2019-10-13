<?php

include 'init.php';

if (!is_logged()) {
    redirect('index.php');
}

$livro = $_POST['livro'];
$autor = $_POST['autor'];

$autor = str_replace("\n", "<br>", $autor);
$autor = str_replace("\r", "", $autor);

$handle = fopen(ITEMS_FILE, 'a');
fwrite(
    $handle,
    join(SEPARATOR, [userEmail(), $livro, $autor, "\n"])
);
fclose($handle);

redirect('index.php');

?>