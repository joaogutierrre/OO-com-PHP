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

        	$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        	var_dump($dados);

        	if(!empty($dados['SendCadUser'])):
        		unset($Dados['SendCadUser']);
        	endif;

        	$result_cadastrar = "INSERT INTO  usuarios (email, usuario, senha, created) VALUES (:email, :usuario, :senha, NOW())";
            $cadastrar = $conn->getConn()->prepare($result_cadastrar);
            
            $cadastrar->bindParam(':email', $dados['nome'], PDO::PARAM_STR);
            $cadastrar->bindParam(':usuario', $dados, PDO::PARAM_STR);
            $cadastrar->bindParam(':email', $senha, PDO::PARAM_STR);
            
            $cadastrar->execute();
        ?>

        <form name="cadUsuario" action="" method="POST">
            <label>Nome: </label>
            <input type="name" name="nome" placeholder="Nome completo"><br>
            <label>E-mail:</label>
            <input type="email" name="email" placeholder="Seu melhor email"><br>
            <label>Usuário:</label>
            <input type="name" name="usuario" placeholder="Usuário para acessar o site"><br>
            <label>Senha:</label>
            <input type="password" name="senha" placeholder="Crie uma senha"><br>

            <input type="submit" value="Cadastrar" name="SendCadUser">
        </form>
    </body>
</html>
