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
    
    //abstract function calcularJuros();
            
    function verValor()
    {
        return "Valor do cheque {$this->tipo}: {$this->real($this->valor)}.";
    }
    
   final  function real($valor){
        return number_format($this->valor, '2', ',','.');
    }
}
