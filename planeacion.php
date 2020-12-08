<?php
/*
ALUMNO: VALENTIN HERNANDEZ VALENCIA
DOCENTE: OCTAVIO AGUIRRE LOZANO
MATERIA: COMPUTACION EN EL SERVIDOR WEB
TAREA: DESARROLLO WEB AVANZADO
*/
    $cultivo=$_POST['cultivo']; //Se crean las nuevas variables asignando el valor de la variable POST que recibe de index.php
    $nombre=$_POST['nombre'];
    $telefono=$_POST['telefono'];
    $respuesta=$_POST['visitar'];
    $count = count($cultivo);

    include('funciones.php');//Se incluye el fichero "funciones.php" para hacer referencia  a las clases y funciones que en este se encuentran.
    $visita = new Funciones; //Se instancía un nuevo objeto de las clase Funciones
?>
<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body>
<h2>Bufete de Asesoría Agrícola</h2>
	<p>Portal para revisar próximas visitas, registrar bitácoras de visitas, revisar seguimiento a clientes.</p>


Visitante: 
<?php
echo strtoupper($nombre); //Se hace uso de la función para cadenas, para llevar todas las letras de la variable a mayúsculas
?> 
<br>	
Cultivos que maneja:<br>
<?php
	for ($i = 0; $i < $count; $i++) {
        echo $cultivo[$i];
        echo "<br>";
    }

    echo "<h3>Próximas vistas</h3>";

    $zonas = $visita->obtenerVisitas(); //Se hace llamado a la función de la clase y se asigna a una nueva variable

    foreach ($zonas as $k => $v) {
    echo $k .": ". $v."<br>";

}


    echo "<h5>Comentarios:</h5>";
    switch ($respuesta) {

    	case 0:
    		echo "No recibirá ninguna visita.";
    		break;

    	case 1:
    		echo "Se planeará una visita de diagnóstico, antes de eso nuestro ingeniero lo contactará al teléfono: ".$telefono;
    		break;
    	
    	default:
    		echo "Puede contactarnos siempre que guste.";
    		break;
    }
?>
<br>
<br>
<a href="index.php">Regresar al inicio</a>

</body>
</html>