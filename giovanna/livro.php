
   <?php 
require 'begin.php';
require 'conf.php';

$data = file(AUT_FILE);

$data_livs = file(LIVS_FILE);

$livro = [];


$livros = array_map('explodir', $data_livs);

?>
    
     <?php
        $livros = file('livros.csv');
        for ($i = 0; $i < sizeof($livros); $i++) {
            $livros[$i] = explode(';', $livros[$i]);
        }
    ?>
    <table class="livs-table">
        <tr>

            <th>Livros</th>
            <th>Gênero</th>
            <th>Autor</th>
            
        </tr>
        <tbody>
        <?php foreach ($livros as $id => $nu):?>
            <tr>
                <td><?= $nu['Livros'] ?></td>
                <td><?= $nu['Autor'] ?></td>
                <td><a href="information.php?id=<?= $id ?>"> Mais</a></td>
                <td><a href="removlivro.php?id=<?= $id ?>">&times;</a></td>

            </tr>

        <?php endforeach ?>
    </tbody>
        <?php foreach ($livros as $i => $dados_livros): ?>
            <tr>
                <?php foreach ($dados_livros as $livros): ?>
                    <td><?= $livros ?></td>
                <?php endforeach ?>
                <td><a href="removlivro.php?id=<?= $i?>">X<?= $i ?></a></td>
            </tr>
        <?php endforeach ?>

    </table>

     <form action="addlivro.php" method="POST">
    
        <legend>Dados Livros</legend>
        <input type="text" name="livro" placeholder="livro..">
        <input type="text" name="genero" placeholder="Gênero.."> 
        <input type="text" name="autor" placeholder="Autor..">
        <select name="select-autor" class="slt-aut">
           <?php foreach($data as $dt): ?>
                  <option value="<?= $dt ?>"><?= $dt ?></option>       
            <?php endforeach ?>
      </select>
        <input calss="but-liv" type="submit" value="Ok">

    