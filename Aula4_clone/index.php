<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Gutierre</title>
    </head>
    <body>
        <?php 
        
        require 'Nota.php';
        
        $notaAluno = new Nota();
        $notaAluno->setNota("João Gutierre", "Matemática", 7, 9);
        echo $notaAluno->getNota();
        
        $notaAluno2 = clone $notaAluno;
        $notaAluno2->setDisciplina("Geografia");
        $notaAluno2->setTrabalho(7);
        $notaAluno2->setProva(10);
        echo $notaAluno2->getNota();
        
        $notaAluno3 = clone $notaAluno;
        $notaAluno3-> setDisciplina('História');
        $notaAluno3->setTrabalho(4);
        $notaAluno3->setProva(6);
        echo $notaAluno3->getNota();
        
        
        ?>
    </body>
</html>
