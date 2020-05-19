<?php

/**
 * Description of bonus
 *
 * @copyright (c) year, João Vítor Gutierre - slaythemgods
 */
class Bonus extends FuncionarioProtegido{
   
    public function verSalario()
    {
        parent::bonus(4500);
        return parent::verSalario();
    }
}
