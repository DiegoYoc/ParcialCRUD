<?php  
include ('conexion.php');
//require_once "conexion.php"; 
//extends es para heredar
class procesos_productos extends conexion 
{     
    //atributos
    public $codigo;
    public $nombre;
    public $tipo;


    //metodo constructor
    public function __construct() 
    { 
        //llamada al metodo construtor de la clase padre (conexion)
        parent::__construct(); 
    } 

    public function buscar() 
    { 
        $result = $this->conexion_db->query('select * from datos'); 
         
        $datos = $result->fetch_all(MYSQLI_ASSOC); 
        return $datos;
        
    } 

    public function insertar($cod, $nom, $fech)
    {
       
       $this->codigo=$cod;
       $this->nombre=$nom;
       $this->tipo=$fech;
       

       $Almacenar = $this->conexion_db ->query('insert into datos values('.$this->codigo.',"'. $this->nombre .'","'.$this->tipo.'")');
          
        
    } 
    public function modificar($cod, $nom, $fech)
    {
       
       $this->codigo=$cod;
       $this->nombre=$nom;
       $this->tipo=$fech;
       

       $Actua = $this->conexion_db ->query('update datos set(Nombre="'. $this->nombre .'",Fecha="'.$this->tipo.'") where Id='.$this->codigo.'');
          
        
    } 
    public function eliminar($cod)
    {
       $this->codigo=$cod;
       $Borrar = $this->conexion_db ->query('delete from datos where Id=('.$this->codigo.')');
        
    }   
} 
  ?> 