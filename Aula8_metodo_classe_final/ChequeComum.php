<?php

/**
 * Description of ChequeComum
 *
 * @copyright (c) year, João Vítor Gutierre - slaythemgods
 */
final class ChequeComum extends Cheque {
    
    function calcularJuros()
    {
        $this->valor = $this->valor*1.25;
        $this->valor = parent::real($this->valor);
        return "Valor do cheque {$this->tipo}: R$ {$this->valor}<hr>";
    }
    
    /* function real($valor){
        $this->valor = $valor + 200;
        return number_format($this->valor, '2', ',','.');
    }*/
}
