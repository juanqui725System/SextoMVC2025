<?php

class ConexionPDO
{
    static private $cnn;
    function __construct()
    {
        $pdo='mysql:host'.HOST.';port='.PORT.';dbname='.DATABASE.';'.CHARSET;
        $options=[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION];
        try{
            self::$cnn=new PDO($pdo,USERNAME,PASSWORD);
            echo "Conexion Satisfactoria";
        }catch(EXCEPTION $e)
        {
            die("ERROR=".$e->getMessage());
        }
    }
    static public function Conexion()
    {
        return self::$cnn;
    }
}