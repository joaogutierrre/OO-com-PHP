<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Gutierre</title>
    </head>
    <body>
        <?php
        	require 'Funcionario.php';

        	$funcionario = new Funcionario();
        	$funcionario->setNome("João Gutierre");
        	$funcionario->setSalario(13700);
        	echo $funcionario->verSalario();
            

        ?>
    </body>
</html>
