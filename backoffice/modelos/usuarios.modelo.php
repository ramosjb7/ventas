<?php

require_once "conexion.php";

class ModeloUsuarios{
	
	/*=============================================
	Registro de usuarios
	=============================================*/
	
	static public function mdlRegistroUsuario($tabla, $datos){
		
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(perfil, nombre, email, password, verificacion, email_encriptado) VALUES (:perfil, :nombre, :email, :password, :verificacion, :email_encriptado)");
		
		$stmt->bindParam(":perfil", $datos["perfil"], PDO::PARAM_STR);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
		$stmt->bindParam(":verificacion", $datos["verificacion"], PDO::PARAM_STR);
		$stmt->bindParam(":email_encriptado", $datos["email_encriptado"], PDO::PARAM_STR);
		
		if($stmt->execute()){
			
			return "ok";
			
		}else{
			
			return print_r(Conexion::conectar()->errorInfo());
		}
		
		
		$stmt = null;
		
	}
	
	/*=============================================
	Mostrar Usuarios
	=============================================*/
	
	static public function mdlMostrarUsuarios($tabla, $item, $valor){
		
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
	Actualizar usuario
	=============================================*/
	
	static public function mdlActualizarUsuario($tabla, $id, $item, $valor){
		
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item = :$item WHERE id_usuario = :id_usuario");
		
		$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
		$stmt -> bindParam(":id_usuario", $id, PDO::PARAM_INT);
		
		if($stmt -> execute()){
			
			return "ok";
			
		}else{
			
			return print_r(Conexion::conectar()->errorInfo());
			
		}
		
		
		
		$stmt = null;
		
	}
	
	/*=============================================
	Mostrar recepciones
	=============================================*/
	
	static public function mdlMostrarRecepciones($tabla, $item, $valor){
		
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
	
	


}

