<?php

namespace Sts\Controllers;

use Sts\Models\StsListarBlog;

/**
 * 
 * 
 * 
 * @copyright (c) 2020, João Gutierre.
 * 
 */

class Blog{
    public $Dados;

    public function index(){
        //echo "Carregando a porra da controller da página blog.<br><hr>";

        $listarArtigo = new StsListarBlog();
        $this->Dados = $listarArtigo->listar();
        var_dump($this->Dados);
    }
}