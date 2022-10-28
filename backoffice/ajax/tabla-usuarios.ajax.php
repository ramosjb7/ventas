<?php 

require_once "../controladores/usuarios.controlador.php";
require_once "../modelos/usuarios.modelo.php";

class TablaUsuarios{

	public function mostrarTabla(){

		$item = null;
		$valor = null;
		$usuarios = ControladorUsuarios::ctrMostrarusuarios($item, $valor);

		if(count($usuarios) == 0){

			echo '{ "data":[]}';

			return;

		}


		$datosJson = '{"data":[';

		foreach ($usuarios as $key => $value) {

			if($value["perfil"] != "admin"){

				/*=============================================
				FOTO USUARIOS
				=============================================*/	

				if($value["foto"] == ""){

					$foto = "<img src='vistas/img/usuarios/default/default.png' class='img-fluid rounded-circle' width='30px'>";

				}else{

					$foto = "<img src='".$value["foto"]."' class='img-fluid rounded-circle' width='30px'>";

				}
				
				$datosJson .= '[

					   "'.$key.'",
					   "'.$value["perfil"].'",
				       "'.$foto.'",
				       "'.$value["nombre"].'",
				       "'.$value["email"].'",
				       "'.$value["fecha"].'"

				],';

			}

		}

		$datosJson = substr($datosJson, 0, -1);

		$datosJson .= ']}';

		echo $datosJson;

	}
	// cierre metodo


}
// cierre clase

$activarTabla = new TablaUsuarios();
$activarTabla -> mostrarTabla();
