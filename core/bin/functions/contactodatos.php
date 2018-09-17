<?php
	/*function ContactoD()
	{
		$db = new Conexion();
    $id_usuario = $_SESSION['app_id'];
		$sql = $db ->query("SELECT * FROM contacto_cliente WHERE fk_Id_usuario = '$id_usuario' ");
		if ($db->rows($sql)>0) {
			while ($d = $db->recorrer($sql)) {
				$users[$d['Id_Contacto']]= array(
					'id' => $d['Id_contacto'],
					'nombre'  => $d['Nombre'],
					'apellido'=> $d['Apellido'],
					'cuenta'=> $d['Cuenta'],
          'email'=> $d['Email'],
          'telefono'=> $d['Telefono'],
          'telefono_ex'=> $d['Telefono_ex'],
          'celular'=> $d['Celular'],
          'fuente'=> $d['Fuente']
				);
				# code...
			}
			# code...
		}else{
			$contacto = false;
		}
		$db->liberar($sql);
		$db->close();
		return $users;
	}*/
 ?>
