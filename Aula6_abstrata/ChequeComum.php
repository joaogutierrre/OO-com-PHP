<?php

/**
 * Description of ChequeComum
 *
 * @copyright (c) year, João Vítor Gutierre - slaythemgods
 */
class ChequeComum extends Cheque {
    
    function calcularJuros($valor)
    {
        return $this->valor = $this->valor * 1.25;
    }
    
    function verValor()
    {
        parent::verValor();
    }
    
}
