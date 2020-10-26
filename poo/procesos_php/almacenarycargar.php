<?php 
	require_once "procesos.php"; 
    
    $codigo = $_POST['vCodigo'];
	$nombre = $_POST['vNombre'];
	$tipo = $_POST['vTipo'];
    
    $almacenarproducto = new procesos_productos(); 
    $datos = $almacenarproducto->insertar($codigo, $nombre, $tipo);

	include ('../lista_productos.php');	

	
 ?>