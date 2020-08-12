<?php

namespace Sts\Models;

use PDO;
/**
 * 
 * 
 * @copyright (c) 2020, João Gutierre.
 * 
 */

 class StsListarBlog{

    public $Resultado;
    public function listar(){
        //echo "Pesquisa arquivos no bd<br>";
        
    
        $listarArtigos = new Conn();
        //$listarArtigos->getConn();
        
        $limit = 10;
        $result_artigos = "SELECT * FROM gutierre.artigos LIMIT :limit";
        $resultado_artigos= $listarArtigos->getConn()->prepare($result_artigos);
        $resultado_artigos->bindParam(':limit', $limit, PDO::PARAM_INT);
        $resultado_artigos->execute();

        $resultado_artigos->fetch(PDO::FETCH_ASSOC);
        $this->Resultado = $resultado_artigos->fetchAll();
        return $this->Resultado;
        //var_dump($this->Resultado);
        


    }
 }