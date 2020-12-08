<?php
/*
ALUMNO: VALENTIN HERNANDEZ VALENCIA
DOCENTE: OCTAVIO AGUIRRE LOZANO
MATERIA: COMPUTACION EN EL SERVIDOR WEB
TAREA: DESARROLLO WEB AVANZADO
*/
/**
 * 
 */
class Funciones
{
	public function obtenerVisitas(){
		$visitas = array (
			'Lunes' => "Zona Los Angeles",
			'Martes' => "Zona San Francisco",
			'Miercoles' => "Zona Los Limones",
			'Jueves' => "Zona Atapan",
			'Viernes' => "Zona Corona",
		); 
		return $visitas;
	}

	public function obtenerZonas(){
		$zonas = array(
			'A' => 'Zona Los Angeles', 
			'B' => 'Zona San Francisco', 
			'C' => 'Zona Los Limones', 
			'D' => 'Zona Atapan', 
			'E' => 'Zona Corona', 
		);
		return $zonas;
	}

	public function obtenerCultivos(){
		$cultivos = array(
			1 => 'Zarzamora', 
			2 => 'Frambuesa', 
			3 => 'Aguacate', 
			4 => 'Arándano', 
			5 => 'Higo', 
			6 => 'Fresa', 
		);
		return $cultivos;
	}

	public function obtenerClientes(){
		$clientes = array (
			'Zona Los Angeles' => "Javier Sánchez",
			'Zona Los Angeles' => "Gregorio Chavez",
			'Zona Los Angeles' => "Guadalupe Reyes",
			'Zona Atapan' => "Mario Delgado",
			'Zona Atapan' => "Yahir Oseguera",
			'Zona Atapan' => "Rosa Mora",
			'Zona Corona' => "Federico Garcia",
			'Zona Corona' => "Martha Esquivel",
			'Zona Corona' => "Luis Perez",
			'Zona Los Limones' => "Jose Nava",
			'Zona Los Limones' => "Liliana Nava",
			'Zona Los Limones' => "Irineo Nava",
			'Zona San Francisco' => "Felipe Diaz",
			'Zona San Francisco' => "Antonio Pedro",
			'Zona San Francisco' => "Lucía Medina",

		); 
		return $clientes;
	}
}
?>