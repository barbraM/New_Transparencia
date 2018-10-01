<?php
	$tipo = $_FILES['archivo']['type'];
	$tamanio = $_FILES['archivo']['size'];
	$archivotmp = $_FILES['archivo']['tmp_name'];
	$respuesta = new stdClass();

	if( $tipo == 'application/vnd.ms-excel'){ 		

		$archivo = "archivos/listado.csv";		

		if(move_uploaded_file($archivotmp, $archivo) ){ 
	 		$respuesta->estado = true;
		} else { 
    		$respuesta->estado = false;
			$respuesta->mensaje = "El archivo no se pudo subir al servidor, intentalo mas tarde";
		}

		if($respuesta->estado){
			
			$lineas = file('archivos/listado.csv');

			$respuesta->mensaje = "";
			$respuesta->estado = true;
			//$conexion = new mysqli('localhost','usuario','password','basedatos',3306);
			$conexion = new mysqli('mysql5-admin.s461.sureserver.com','semara','8ncQZGNQ','semara_transparencia');
			mysqli_set_charset($conexion, "utf8");
			foreach ($lineas as $linea_num => $linea)
			{
			
				$datos = explode(";",$linea);
				//$id_transparencia = trim($datos[0]);
				//$numero = trim($datos[0]);
				$fecha = trim($datos[0]);
				$ponencia = trim($datos[1]);
				$tipo = trim($datos[2]);
				$expediente = trim($datos[3]);
				$nombre_pro = trim($datos[4]);
				$autoridad = trim($datos[5]);
				$fecha_acu = trim($datos[6]);
				$sintesis = trim($datos[7]);


	    		$consulta = "INSERT INTO transparencia(fecha,ponencia,tipo,expediente,nombre_pro,autoridad,fecha_acu, sintesis) VALUES('$fecha', '$ponencia','$tipo','$expediente','$nombre_pro','$autoridad','$fecha_acu','$sintesis');";
				if(!$conexion->query($consulta)){
					$respuesta->estado = false;
					$respuesta->mensaje .= "El registro concon el numero $numero no se guardó, verifica la información \n";
				}
			}
		}
		if($respuesta->estado == true){
			$respuesta->mensaje = "Todos los registros se guardaron correctamente\n";

		}
	}
	else {
		$respuesta->mensaje = "Solo se admiten archivos .csv, vuelvelo a intentar\n";
	}
	echo json_encode($respuesta);
?>
