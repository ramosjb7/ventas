<?php

Class ControladorClientes{
    
    /*=============================================
	Mostrar Usuarios
	=============================================*/

	static public function ctrMostrarClientes($item, $valor){
	
		$tabla = "persona";

		$respuesta = ModeloClientes::mdlMostrarClientes($tabla, $item, $valor);

		return $respuesta;

	}
}

?>