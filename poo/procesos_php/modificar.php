<?php 
	require_once "procesos.php"; 
    
    $codigo = $_POST['vCodigo'];
	$nombre = $_POST['vNombre'];
	$tipo = $_POST['vTipo'];
    
    $modificarproducto = new procesos_productos(); 
    $datos = $modificarproducto->modificar($codigo, $nombre, $tipo);

	include ('../lista_productos.php');	

	
 ?>