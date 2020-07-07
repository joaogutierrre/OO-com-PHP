<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Gutierre</title>
    </head>
    <body>
        <?php
        require 'Conn.php';
        
        $conn = new Conn();
        $conn->getConn();
        
        $email = "joao@gmail.com";
        $usuario = "joao";
        $senha = "123";
        
        try {
            $result_cadastrar = "INSERT INTO  gutierre.usuarios (email, usuario, senha, created) VALUES (:email, :usuario, :senha, NOW())";
            
            $cadastrar = $conn->getConn()->prepare($result_cadastrar);
            
            $cadastrar->bindParam(':email', $email, PDO::PARAM_STR);
            $cadastrar->bindParam(':usuario', $usuario, PDO::PARAM_STR);
            $cadastrar->bindParam(':senha', $senha, PDO::PARAM_STR);
            
            print_r($cadastrar) ;
            $cadastrar->execute();
          
            if($cadastrar->rowCount()):
                echo "Cadastrado com suceso";
            endif;
           
        } catch (Exception $exc) {
            
        }

        
        ?>
    </body>
</html>
