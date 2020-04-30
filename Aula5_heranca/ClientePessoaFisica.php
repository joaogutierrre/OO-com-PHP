<?php

/**
 * Description of ClientePessoaFisica
 *
 * @copyright {c} year, João Gutierre - slaythemgods
 */
class ClientePessoaFisica extends Cliente {
    public $nome;
    public $cpf;
    
    function setNome($nome){
        $this->nome = $nome;
    }
    
    function setCpf($cpf){
        $this->cpf = $cpf;
    }
    
    function verEndereco(){
        return "O endereço do cliente é: "
        . "{$this->endereco}, {$this->bairro}.<br>" 
        . "Nome: {$this->nome}.<br>" 
        . "CPF: {$this->cpf}.<hr>";
    }
  
}
