<?php

/**
 * Description of ClientePessoaJuridica
 *
 * @copyright {c} year, João Gutierre - slaythemgods
 */
class ClientePessoaJuridica extends Cliente {
    public $nomeFantasia;
    public $cpnj;
    
    function setNomeFantasia($nomeFantasia){
        $this->nomeFantasia = $nomeFantasia;
    }
    
    function setCnpj($cnpj){
        $this->cnpj = $cnpj;
    }
    
    function verEndereco(){
        return "Endereço da pessoa jurídica:"
        . " {$this->endereco}, {$this->bairro}.<br>"
        . "Nome fantasia: {$this->nomeFantasia}.<br>"
        . "CNPJ: {$this->cnpj}.<br><hr>";
    }
}
