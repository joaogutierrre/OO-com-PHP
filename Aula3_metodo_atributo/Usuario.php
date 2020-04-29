<?php

/**
 * Description of Usuario
 *
 * @copyright (c) year, João Vítor Gutierre - slaythemgods
 */
class Usuario {

    public $nome;
    public $email;
    public $prova;
    public $trabalho;

    function setUsuario($nome, $email) {
        $this->nome = $nome;
        $this->email = $email;
    }
    function getUsuario(){
        return "Nome do usuario: ($this->nome). <br> Email do usuario: ($this->email)<br>";
    }
    function setNotaUsuario($prova, $trabalho){
        $this->prova = $prova;
        $this->trabalho = $trabalho;
    }
    function getNotaUsuario(){
       return "Nota do aluno: " . ($this->prova + $this->trabalho) ;
    }
}
