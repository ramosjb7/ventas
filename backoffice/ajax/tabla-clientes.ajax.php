<?php 

require_once "../controladores/clientes.controlador.php";
require_once "../modelos/clientes.modelo.php";

class TablaClientes{

	public function mostrarTabla(){

		$item = null;
		$valor = null;
		$usuarios = ControladorClientes::ctrMostrarClientes($item, $valor);

		if(count($usuarios) == 0){

			echo '{ "data":[]}';

			return;

		}


		$datosJson = '{"data":[';

		foreach ($usuarios as $key => $value) {

            /*===============================================
            ESTADO
            =================================================*/
            if($value["estado"]== 0){
                $estado = "<button type='button' class='btn btn-danger btn-sm'> INACTIVO </button>";
            }else{
                $estado = "<button type='button' class='btn btn-success btn-sm'> ACTIVO </button>";
            }
			
				$datosJson .= '[

					   "'.($key+1).'",
					   "'.$value["tipo_documento"].'",
                       "'.$value["nro_documento"].'",
				       "'.$value["nombres"].'",
				       "'.$value["apellido_paterno"].'",
				       "'.$value["apellido_materno"].'",
				       "'.$value["nacionalidad"].'",
                       "'.$value["correo"].'",
				       "'.$estado.'"

				],';

			

		}

		$datosJson = substr($datosJson, 0, -1);

		$datosJson .= ']}';

		echo $datosJson;

	}
	// cierre metodo


}
// cierre clase

$activarTabla = new TablaClientes();
$activarTabla -> mostrarTabla();
