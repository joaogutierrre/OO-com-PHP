<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Gutierre</title>
    </head>
    <body>
    	<h1>Listar Usuário</h1>
        <?php
			require 'Conn.php';
			$conn = new Conn();

			$nome = 'joao';
			$result_user = "SELECT * FROM gutierre.usuarios WHERE nome=:nome";

			$resultado_user = $conn->getConn()->prepare($result_user);
			$resultado_user->bindParam(':nome', $nome, PDO::PARAM_STR);
			$resultado_user->execute();

			while($row_user = $resultado_user->fetch(PDO::FETCH_ASSOC)):
				// var_dump($row_user);
				echo "ID: " . $row_user['id'] . "<br>";
				echo "Nome User: " . $row_user['nome'] . "<br>";
				echo "Email: " . $row_user['email'] . "<br>";
				echo "Usuario: " . $row_user['usuario'] . "<br>";
				echo "Foto: " . $row_user['foto'] . "<br>";
				echo "Criado em: " .date('d/m/Y H:i:s',strtotime($row_user['created'])) . "<br>";
				
				if(!empty($row_user['modified'])):
					echo "Ultima alteração em: " .date('d/m/Y H:i:s',strtotime($row_user['modified'])) . "<br><hr>";
				else:
					echo "Ainda não houveram alterações<br><hr>";
				endif;

				
			endwhile;

			


        ?>
        
    </body>
</html>
