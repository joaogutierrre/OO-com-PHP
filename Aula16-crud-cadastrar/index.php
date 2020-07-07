<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Gutierre</title>
    </head>
    <body>
    	<h1>Cadastrar Usuário</h1>
        <?php
			require 'Conn.php';
			

			/*filter_input_array: Recebe tudo como array
			  INPUT_POST: Via método POST
			  FILTER_DEFAULT: Recebe o POST como STRING
			  Depois encapsula esses dados dentro da variável.

			*/
			$Dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
			






	        var_dump($Dados);
	        if(!empty($Dados['SendCadUser'])):
	        	unset($Dados['SendCadUser']);

	        	var_dump($conn = new Conn());

	        	$result_cadastrar = "INSERT INTO  gutierre.usuarios (nome, email, usuario, senha, created) VALUES (:nome, :email, :usuario, :senha, NOW())";
	            
	            $cadastrar = $conn->getConn()->prepare($result_cadastrar);
	            
	            $cadastrar->bindParam(':nome', $Dados['nome'], PDO::PARAM_STR);
	            $cadastrar->bindParam(':email', $Dados['email'], PDO::PARAM_STR);
	            $cadastrar->bindParam(':usuario', $Dados['usuario'], PDO::PARAM_STR);
	            $cadastrar->bindParam(':senha', $Dados['senha'], PDO::PARAM_STR);
	            
	            
	            $cadastrar->execute();
	          
	            if($cadastrar->rowCount()):
	                echo "Cadastrado com suceso";
	            endif;
	        endif;


        ?>
        <form name="CadUsuario" action="" method="POST">
        	<label>Nome:</label>
        	<input type="text" name="nome" placeholder="Nome completo"><br><br>
        	<label>E-mail:</label>
        	<input type="email" name="email" placeholder="Seu melhor e-mail"><br><br>
        	<label>Usuário:</label>
        	<input type="text" name="usuario" placeholder="Usuário para acessar o sistema"><br><br>
        	<label>Senha:</label>
        	<input type="password" name="senha" placeholder="Sua senha"><br><br>
        	<input type="submit" value="Cadastrar" name="SendCadUser">

        </form>
        
    </body>
</html>
