	<?php
	session_start();
	?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<title>Gutierre</title>
</head>

<body>
	<h1>Listar Usuário</h1>
	<a href="cadastrar.php">Cadastrar<a/><br><br>
	<?php
	if(isset($_SESSION['msg'])):
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
	endif;

	require 'Conn.php';
	$conn = new Conn();

	$result_user = "SELECT * FROM gutierre.usuarios";

	$resultado_user = $conn->getConn()->prepare($result_user);
	$resultado_user->bindParam(':nome', $nome, PDO::PARAM_STR);
	$resultado_user->execute();

	while ($row_user = $resultado_user->fetch(PDO::FETCH_ASSOC)) :
		// var_dump($row_user);
		echo "ID: " . $row_user['id'] . "<br>";
		echo "Nome User: " . $row_user['nome'] . "<br>";
		echo "Email: " . $row_user['email'] . "<br>";
		echo "Usuario: " . $row_user['usuario'] . "<br>";
		echo "Foto: " . $row_user['foto'] . "<br>";
		echo "Criado em: " . date('d/m/Y H:i:s', strtotime($row_user['created'])) . "<br>";

		if (!empty($row_user['modified'])) :
			echo "Ultima alteração em: " . date('d/m/Y H:i:s', strtotime($row_user['modified'])) . "<br>";
		else :
			echo "Ainda não houveram alterações<br>";
		endif;

		echo "<a href='visualizar.php?id=" . $row_user['id'] . "'>Visualizar</a><br>";
		echo "<a href='editar.php?id=" . $row_user['id'] . "'>Editar</a><br>";
		echo "<a href='apagar.php?id=" . $row_user['id'] . "'>Apagar</a><br><hr>";


	endwhile;




	?>

</body>

</html>