<?php
	function Emp()
	{
		$db = new Conexion();
		$sql = $db ->query("SELECT * FROM empleados");
		if ($db->rows($sql)>0) {
			while ($d = $db->recorrer($sql)) {
				$emp[$d['Id_empleados']]= array(
					'id' => $d['Id_empleados'],
					'nombre'  => $d['Nombre'],
					'apellido'=> $d['Apellido'],
					'email'=> $d['Email'],
					'cargo'=> $d['Cargo'],
					'permiso'=> $d['Permiso'],
					'fk_usu' => $d['fk_Id_usuario']
					
				);
				# code...
			}
			# code...
		}else{
			$emp = false;
		}
		$db->liberar($sql);
		$db->close();
		return $emp;
	}
 ?>
