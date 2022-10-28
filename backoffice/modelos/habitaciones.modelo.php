<?php 

require_once "conexion.php";

class ModeloHabitaciones{


    /*=============================================
	MOSTRAR HABITACIONES
	=============================================*/
	
	static public function mdlMostrarHabitaciones($tabla, $item, $valor){
		
		if($item != null && $valor != null){
			
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
			
			$stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);
			
			$stmt -> execute();
			
			return $stmt -> fetch();
			
		}else{
			
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
			
			$stmt -> execute();
			
			return $stmt -> fetchAll();
			
		}
		
		
		
		$stmt = null;
		
	}

	/*=============================================
	REGISTRAR HABITACION
	=============================================*/

	static public function mdlRegistroHabitacion($tabla, $datos){
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(numero, detalle, precio, id_estado_habitacion,id_piso, id_categoria) VALUES (:numero, :detalle, :precio, :id_estado_habitacion, :id_piso, :id_categoria)");

		$stmt -> bindParam(":numero",$datos["numero"], PDO::PARAM_STR);
		$stmt -> bindParam(":detalle",$datos["detalle"], PDO::PARAM_STR);
		$stmt -> bindParam(":precio",$datos["precio"], PDO::PARAM_STR);
		$stmt -> bindParam(":id_estado_habitacion",$datos["id_estado_habitacion"], PDO::PARAM_STR);
		$stmt -> bindParam(":id_piso",$datos["id_piso"], PDO::PARAM_STR);
		$stmt -> bindParam(":id_categoria",$datos["id_categoria"], PDO::PARAM_STR);

		if($stmt->execute()){
			return 'ok';
		}else{
			return print_r(Conexion::conectar()->errorInfo());
		}
		$stmt = null;
	

	}

}

?>