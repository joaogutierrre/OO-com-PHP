<?php

/**
 * Description of Cheque
 *
 * @copyright (c) year, João Vítor Gutierre - slaythemgods
 */
abstract class Cheque {
    
    public $valor;
    public $tipo;
    
    function __construct($valor, $tipo)
    {
        $this->valor = $valor;
        $this->tipo = $tipo;
    }
    
    function verValor()
    {
        return "Valor do cheque {$this->tipo}: {$this->real($this->valor)}.";
    }
    
    function real($valor){
        return number_format($this->valor, 2, ",",".");
    }
}
