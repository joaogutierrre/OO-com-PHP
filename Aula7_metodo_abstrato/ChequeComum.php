<?php

/**
 * Description of ChequeComum
 *
 * @copyright (c) year, João Vítor Gutierre - slaythemgods
 */
class ChequeComum extends Cheque {
    
    function calcularJuros()
    {
        $this->valor = $this->valor*1.25;
        $this->valor = parent::real($this->valor);
        return "Valor do cheque {$this->tipo}: R$ {$this->valor}<hr>";
    }
}
