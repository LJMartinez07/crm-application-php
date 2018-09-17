<?php
	function Users()
	{
		$db = new Conexion();
		$sql = $db ->query("SELECT * FROM usuarios");
		if ($db->rows($sql)>0) {
			while ($d = $db->recorrer($sql)) {
				$users[$d['Id_usuario']]= array(
					'id' => $d['Id_usuario'],
					'nombre'  => $d['Nombre'],
					'apellido'=> $d['Apellido'],
					'email'=> $d['Email'],
					'pais'=> $d['Pais'],
					'dominio'=> $d['Dominio'],
					'cargo'=> $d['Cargo'],
					'telefono'=> $d['Telefono'],
					'celular'=> $d['Celular'],
					'permiso'=> $d['Permiso']
				);
				# code...
			}
			# code...
		}else{
			$users = false;
		}
		$db->liberar($sql);
		$db->close();
		return $users;
	}
 ?>
