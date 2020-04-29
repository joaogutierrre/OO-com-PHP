<?php

/**
 * Description of Usuario
 *
 * @copyright (c) year, João Vítor Gutierre - slaythemgods
 */
class Usuario {
   public $nome;
   public $email;
   
   function getDadosUser($nome,$email)
   {
       echo "O usuario ('$nome') tem o email ('$email')";
   }
}
