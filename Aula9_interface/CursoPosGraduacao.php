<?php

/**
 * Description of CursoPosGraduacao
 *
 * @copyright (c) year, João Vítor Gutierre - slaythemgods
 */
class CursoPosGraduacao implements ICurso {
    public $nomeDisciplina;
    public $nomeProfessor;

    
    public function disciplina($nomeDisciplina)
    {
        $this->nomeDisciplina = $nomeDisciplina;
    	return "Disciplina: {$this->nomeDisciplina}<hr>";
    }

    public function professor($nomeProfessor)
    {
        $this->nomeProfessor = $nomeProfessor;
        return "Nome do professor: {$this->nomeProfessor}<hr>";
    }

}
