<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Gutierre</title>
    </head>
    <body>
        <?php

        	require_once 'ICurso.php';
        	require_once 'CursoGraduacao.php';
        	require_once 'CursoPosGraduacao.php';

        	$cursoGraduacao = new CursoGraduacao();
        	echo $cursoGraduacao->disciplina("LPOO - 120 horas");
        	echo $cursoGraduacao->professor("Mozat Brito Fonseca");

        	$cursoPos = new CursoPosGraduacao();
        	echo $cursoPos->disciplina("Exploit de vúnerabilidades em aplicações WEB - 80 horas");
        	echo $cursoPos->professor("José Augusto Pereira");

        ?>
    </body>
</html>
