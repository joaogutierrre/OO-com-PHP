<?php

/**
 * Description of ChequeEspecial
 *
 * @copyright {c} year, João Gutierre - slaythemgods
 */
class ChequeEspecial extends Cheque {
    
    function calcularJuros(){
        $this->valor = $this->valor * 1.10;
        $this->valor = parent::real($this->valor);
        return "Valor do cheque {$this->tipo}: R$ {$this->valor}<hr>";
    }
}
