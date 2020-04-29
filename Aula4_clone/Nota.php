<?php

/**
 * Description of Nota
 *
 * @copyright (c) year, João Vítor Gutierre - slaythemgods
 */
class Nota {
    
    public $aluno;
    public $disciplina;
    public $trabalho;
    public $prova;
    
    function setDisciplina($disciplina)
    {
        $this->disciplina = $disciplina;
    }

    function setTrabalho($trabalho)
    {
        $this->trabalho = $trabalho;
    }

    function setProva($prova)
    {
        $this->prova = $prova;
    }
    
    function  setNota($aluno, $disciplina, $trabalho, $prova){
        $this->aluno = $aluno;
        $this->disciplina = $disciplina;
        $this->trabalho = $trabalho;
        $this->prova = $prova;
    }
    
    function getNota(){
        
        return "Aluno: {$this->aluno} <br>"
                . "Disciplina: {$this->disciplina} <br>"
                . "Nota final:  " . ($this->trabalho + $this->prova) . "<br><hr>";
    }
    
    
}
