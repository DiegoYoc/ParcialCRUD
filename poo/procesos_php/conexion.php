<?php  
    
    define('SERVIDOR','localhost'); 
    define('DB_USUARIO','root'); 
    define('DB_CONTRA',''); 
    //define('BASE_DATOS','parcial_bd'); 
    const BASE_DATOS='parcial_bd';
    //define('DB_CHARSET','utf-8');  


class conexion 
{ 

    protected $conexion_db; 
    //metodo constructor
    public function __construct() 
    { 
        $this->conexion_db = new mysqli(SERVIDOR, DB_USUARIO, DB_CONTRA, BASE_DATOS); 

        if ( $this->conexion_db->connect_errno ) 
        { 
            echo "Error en Conexión: ". $this->conexion_db->connect_error; 
            return;     
        } 

        //$this->conexion_db->set_charset(DB_CHARSET); 
    } 
} 
?> 