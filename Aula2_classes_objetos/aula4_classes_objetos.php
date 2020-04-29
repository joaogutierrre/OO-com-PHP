<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Gutierre</title>
    </head>
    <body>
        <?php
        
        require 'Usuario.php';
        
        $usuario = new Usuario();
        echo $usuario->getDadosUser("João Vítor Lima da Silva Gutierre", "gutierrejoao@gmail.com");
        ?>
    </body>
</html>
