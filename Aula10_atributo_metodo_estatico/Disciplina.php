<?php

/**
 * Description of Disciplina
 *
 * @copyright (c) year, João Vítor Gutierre - slaythemgods
 */
class Disciplina {
    
    public $aluno;
    public $notaTrabalho;
    public $notaProva;
    public static $media;

    function __construct($aluno,$notaTrabalho,$notaProva)
    {

        $this->aluno = $aluno;
        $this->notaTrabalho = $notaTrabalho;
        $this->notaProva = $notaProva;

        self::$media = $this->notaTrabalho + $this->notaProva;

    }

    function situacao()
    {
        if (self::$media >= 6):

            return "Aluno {$this->aluno} <b>aprovado<b> com média:" . self::$media . ".<hr>";

        else:

            return "Aluno {$this->aluno} <b>reprovado<b> com média:" . self::$media . ".<hr>";

        endif;	
    }

    static function situacaoAluno()
    {
        if (self::$media >= 6):

            return "Aluno aprovado com média: " . self::$media . ".";

        else:

            return "Aluno reprovado com média: " . self::$media . ".";

        endif;
    }
}

