<?php 

require_once "../controladores/habitaciones.controlador.php";
require_once "../modelos/habitaciones.modelo.php";

class TablaHabitaciones{

	public function mostrarTabla(){

		$item = null;
		$valor = null;
		$habitaciones = ControladorHabitaciones::ctrMostrarHabitaciones($item, $valor);

		if(count($habitaciones) == 0){
            
			echo '{ "data":[]}';

			return;

		}

        
		$datosJson = '{"data":[';

		foreach ($habitaciones as $key => $value) {

           

            /*===============================================
            ESTADO
			 =================================================*/
            if($value["id_estado_habitacion"]== 1){
                $estado = "<button type='button' class='btn btn-success btn-sm'> DISPONIBLE </button>";
            }elseif($value["id_estado_habitacion"]== 2){
                $estado = "<button type='button' class='btn btn-danger btn-sm'> OCUPADO </button>";
            }else{
                $estado = "<button type='button' class='btn btn-warning btn-sm'> LIMPIEZA </button>";
            }
           
			/*===============================================
            CATEGORIA
			 =================================================*/
            if($value["id_categoria"]== '1'){
                $categoria = "MATRIMONIAL";
            }elseif($value["id_categoria"]== '2'){
                $categoria = "DOBLE";
            }else{
                $categoria = "INDIVIDUAL";
            }
			
			/*===============================================
            ACCIONES
			=================================================*/

			$accion="<button class='btn btn-primary btn-sm btnEditRol' title='Editar'><i class='fa fa-pencil'></i></button><button class='btn btn-danger btn-sm btnDelRol' title='Eliminar'><i class='fa fa-trash'></i></button>";


				$datosJson .= '[

					   "'.($key+1).'",
					   "'.$value["detalle"].'",
                       "'.$value["numero"].'",
				       "'.$value["precio"].'",
				       "'.$value["id_piso"].'",
				       "'.$categoria.'",
					   "'.$estado.'",
				       "'.$accion.'"
				       
				],';

			

		}

		$datosJson = substr($datosJson, 0, -1);

		$datosJson .= ']}';

		echo $datosJson;

	}
	// cierre metodo

	

}


// cierre clase

$activarTabla = new TablaHabitaciones();
$activarTabla -> mostrarTabla();
