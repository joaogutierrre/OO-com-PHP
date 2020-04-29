<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Gutierre - Métodos e atributos</title>
    </head>
    <body>
        <?php
        
            require 'Usuario.php';
            
            $usuario = new Usuario();
            $usuario->setUsuario("João Vítor Lima da Silva Gutierre","gutierrejoao@gmail.com");
            echo $usuario->getUsuario();
            
            echo $usuario->setNotaUsuario(5,2);
            echo $usuario->getNotaUsuario();
             
        ?>
    </body>
</html>
