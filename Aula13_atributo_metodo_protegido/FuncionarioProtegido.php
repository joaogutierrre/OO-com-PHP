<?php

/**
 * Description of Funcionario
 *
 * @copyright (c) year, João Vítor Gutierre - slaythemgods
 */
class FuncionarioProtegido {
     public $nome;
     private $salario;
     protected $bonus;

     function setNome($nome){
     	$this->nome = $nome;
     }

     function setSalario($salario){
     	$this->salario = $salario;
     }

     function setBonus($bonus)
     {
         $this->bonus = $bonus;
     }
     
     public function verSalario(){
     	$this->salario = $this->validarSalario($this->salario);
        return "O funcionário {$this->nome} tem o salário de: {$this->salario} e o bonus de: {$this->bonus}";
     }

     private function validarSalario($salario){

     	if (is_numeric($salario) and ($salario > 0)):

     		return $this->salario = number_format($salario, '2',',','.');

     	else:

     		die('Salário inválido');

     	endif;
     }
     
     protected function bonus($bonus){
         $this->bonus = $bonus;
     }
             
}
