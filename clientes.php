<?php
/*
ALUMNO: VALENTIN HERNANDEZ VALENCIA
DOCENTE: OCTAVIO AGUIRRE LOZANO
MATERIA: COMPUTACION EN EL SERVIDOR WEB
TAREA: DESARROLLO WEB AVANZADO
*/
    $numeroclientes=$_POST['numeroclientes']; //Se crea una nueva variable asignando el valor de la variable POST que recibe de index.php

    include('funciones.php'); //Se incluye el fichero "funciones.php" para hacer referencia  a las clases y funciones que en este se encuentran.
    $funciones = new Funciones; //Se instancía un nuevo objeto de las clase Funciones
?>
<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body>
<h2>Bufete de Asesoría Agrícola</h2>
	<p>Portal para revisar próximas visitas, registrar bitácoras de visitas, revisar seguimiento a clientes.</p>
<br>	

<table>
	<tr>
		<td>Nombre de cliente</td>
		<td>Telefono</td>
		<td>Zona</td>
		<td>Cultivo</td>
	</tr>
		<?php
		$zona = $funciones->obtenerZonas(); //Se hace llamado a la función de la clase y se asigna a una nueva variable
		$cultivo = $funciones->obtenerCultivos(); //Se hace llamado a la función de la clase y se asigna a una nueva variable
		$cont = 1;
		while ($cont <= $numeroclientes){ //Se hace uso de la estructura de control WHILE para generar los input de registro de clientes

			echo '
			<tr>
			<td><input type="text" name="nombrecliente$cont" /></td>
			<td><input type="text" name="telefonocliente$cont" /></td>
			<td><select name="zona">';

			foreach ($zona as $id => $lugar) {
				echo '<option>'.$id.' - '.$lugar.'</option>';
			}

			echo '</select></td>
			<td><select name="cultivo">';

			foreach ($cultivo as $idc => $cult) {
				echo '<option>'.$idc.' - '.$cult.'</option>';
			}

			echo '</select></td>
			</tr>

			';
			$cont++;

		}

		?>
	
</table>


 

<br>
<br>
<a href="index.php">Regresar al inicio</a>

</body>
</html>