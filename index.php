<?php
/*
ALUMNO: VALENTIN HERNANDEZ VALENCIA
DOCENTE: OCTAVIO AGUIRRE LOZANO
MATERIA: COMPUTACION EN EL SERVIDOR WEB
TAREA: DESARROLLO WEB AVANZADO
*/
if (isset($_POST['tipousuario'])) { //Se usa el control If para verificar si la variable POST que se recibe existe o tiene un valor
 	$tipoUsuario = $_POST['tipousuario']; //Si la variable existe con un valor, este se asigana a la nueva varible que se declara.
 } 
?>
<!DOCTYPE html> <!-- se indica el tipo de documento -->
<html>
<head>
	<title>Bufete de Asesoría Agrícola | Visitas a Campo</title>
</head>
<body>

	<h2>Bufete de Asesoría Agrícola</h2>
	<p>Portal para revisar próximas visitas, registrar nuevos clientes, revisar seguimiento a clientes.</p>

	<form method="POST" action="index.php">
		<input type="radio" name="tipousuario" value="1" /> Productor <br>
		<input type="radio" name="tipousuario" value="2" /> Ingeniero <br>
		<input type="submit" name="enviar" value="Enviar respuestas" />
	</form>

	<?php if (isset($tipoUsuario)): //Se verifica que la varible exista o tenga un valor ?> 

		<?php if ($tipoUsuario == 1): //Se compara la variable recibida por medio de POST, donde '1' es tipo de usuario "Productor" ?>
			<h4>Cultivos que maneja:</h4>
			Para continuar es necesario que llene el siguiente formulario:
			<form method="POST" action="planeacion.php">
				<input type="checkbox" name="cultivo[]" value="Zarzamora">Zarzamora<br>	
				<input type="checkbox" name="cultivo[]" value="Aguacate">Aguacate<br>	
				<input type="checkbox" name="cultivo[]" value="Frambuesa">Frambuesa<br>	
				<input type="checkbox" name="cultivo[]" value="Arándano">Arándano<br>	
				<input type="checkbox" name="cultivo[]" value="Fresa">Fresa<br>	
				<input type="checkbox" name="cultivo[]" value="Higo">Higo<br>	<br>	
				<label>Escriba su nombre:</label><br>	
				<input type="text" name="nombre" placeholder="Escriba su nombre" /><br>	
				<label>Escriba su teléfono:</label><br>	
				<input type="text" name="telefono" placeholder="Escriba su telefono" /><br>
				<label>Deseo recibir una visita de diagnóstico</label>
				<select name="visitar">
					<option value="0">NO</option>
					<option value="1">SÍ</option>
					<option value="1">QUIZÁ DESPUÉS</option>
				</select>
				<input type="submit" name="enviar2" value="continuar">
			</form>

			<?php elseif($tipoUsuario == 2): //Se compara la variable recibida por medio de POST, donde '2' es tipo de usuario "Ingeniero"?>

				<h4>Lista de Clientes</h4>
				Para continuar es necesario que llene el siguiente formulario:
				<form method="POST" action="clientes.php">
				<label>Número de clientes a registrar:</label>
				<input type="number" name="numeroclientes">
				<input type="submit" name="enviar3" value="continuar">
				</form>
				<?php endif; ?>		

	<?php endif; ?>

	

</body>
</html>