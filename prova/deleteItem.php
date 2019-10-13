<?php

include 'init.php';



if(is_logged()) {
    $id = $_GET['id'] ?? false;
    if ($id !== false) {
        $livros = file(ITEMS_FILE);
        $livros = array_map(function($el) {
            list($email) = explode(SEPARATOR, $el);
            return $email;
        }, $livros);

        if ($livros[$id] == userEmail()) {
            $livros = file(ITEMS_FILE);
            unset($livros[$id]);
            file_put_contents(
                ITEMS_FILE,
                join("", $livros)
            );
        }

    }
}



redirect('index.php');

?>