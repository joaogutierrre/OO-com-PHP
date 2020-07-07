<?php

/**
 * Description of Conn
 *
 * @copyright (c) year, João Vítor Gutierre - slaythemgods
 */
class Conn {
    public static $Host = "localhost";
    public static $User = "root";
    public static $Pass = "";
    public static $Dbname = "gutierre";
    private static $Connect = null;
    
    private static function Conectar()
    {
        try{
            if(self::$Connect == null):
                self::$Connect = new PDO('mysql:host=' . self::$Host . ';dbname = ' . self::$Dbname , self::$User , self::$Pass);
            endif;
        } catch (Exception $ex) {
            echo 'Mensagem:' . $ex->getMessage();
            die;
        }
         
        return self::$Connect;
    }
    
    public static function  getConn(){
        return self::Conectar();
    }
}
