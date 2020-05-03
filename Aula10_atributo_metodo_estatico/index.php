<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Gutierre</title>
    </head>
    <body>
        <?php
        
        	require 'Disciplina.php';

        	$disciplina = new Disciplina("João Gutierre", 3 , 9);

        	echo $disciplina->situacao();

        	echo Disciplina::situacaoAluno();


        ?>
    </body>
</html>
