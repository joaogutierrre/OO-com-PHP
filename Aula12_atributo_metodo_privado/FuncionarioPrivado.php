<?php

/**
 * Description of Funcionario
 *
 * @copyright (c) year, João Vítor Gutierre - slaythemgods
 */
class FuncionarioPrivado {
     public $nome;
     private $salario;

     function setNome($nome){
     	$this->nome = $nome;
     }

     function setSalario($salario){
     	$this->salario = $salario;
     }
     
    public function verSalario(){
     	$this->salario = $this->validarSalario($this->salario);
     	return "O funcionário {$this->nome} tem o salário de: {$this->salario}<hr>";
     }

     private function validarSalario($salario){

     	if (is_numeric($salario) and ($salario > 0)):

     		return $this->salario = number_format($salario, '2',',','.');

     	else:

     		die('Salário inválido');

     	endif;
     }
}
