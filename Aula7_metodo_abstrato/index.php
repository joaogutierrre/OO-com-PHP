<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Gutierre</title>
    </head>
    <body>
        <?php
            require 'Cheque.php';
            require 'ChequeComum.php';
            require 'ChequeEspecial.php';
            
            $chequeComun = new ChequeComum(100.10, "Comum");
            echo $chequeComun->calcularJuros();
            
            $chequeEspecial = new ChequeEspecial(100.10, "Especial");
            echo $chequeEspecial->calcularJuros();
            
        ?>
    </body>
</html>
