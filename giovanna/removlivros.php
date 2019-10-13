<?php

    $linha = $_GET['id'];

    $a = file('livros.csv');

    unset($a[$linha]);

    $s = "";
    foreach($a as $el) {
        $s = $s . $el;
    }

    $handle = fopen("livros.csv", "w"); 
    fwrite($handle, $s);
?>