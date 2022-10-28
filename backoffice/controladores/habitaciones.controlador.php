<?php
class ControladorHabitaciones{

    /*=============================================
	MOSTRAR HABITACIONES
	=============================================*/

	static public function ctrMostrarHabitaciones($item, $valor){
	
		$tabla = "habitacion";

		$respuesta = ModeloHabitaciones::mdlMostrarHabitaciones($tabla, $item, $valor);

		return $respuesta;

	}

	/*=============================================
	REGISTRAR HABITACION
	=============================================*/

	public function ctrRegistroHabitacion(){
		echo "hola verifica en la pantalla";
		if(isset($_POST["txtNumeroHabitacion"])){
				$tabla = "habitacion";
				$datos = array("numero" => $_POST["txtNumeroHabitacion"],
								"detalle" => $_POST["txtDescripcion"],
								"precio" => $_POST["textPrecioNoche"],
								"id_estado_habitacion" => 1,
								"id_piso" => 1,
								//"id_piso" => $_POST["txtNumeroPiso"],
								"id_categoria" => 1
								//"id_categoria" => $_POST["txtCategoriaHabitacion"]
								);

				$respuesta = ModeloHabitaciones::mdlRegistroHabitacion($tabla, $datos);
		}

		
		return $respuesta;
	}

	

}


?>