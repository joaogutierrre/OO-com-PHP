<?php

/**
 * Description of Cliente
 *
 * @copyright {c} year, João Gutierre - slaythemgods
 */

class Cliente {
    public $endereco;
    public $bairro;
    
    function setEndereco($endereco){
        $this->endereco = $endereco;
    }
    
    function setBairro($bairro){
        $this->bairro = $bairro;
    }

    function verEndereco(){
        return "O endereço do cliente é: {$this->endereco} , {$this->bairro}. <br><hr>";
    }
    
}
