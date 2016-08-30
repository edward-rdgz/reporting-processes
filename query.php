<?php 
//$opt = array { PDO::ATTR_ERRMODE => ERRMODE_EXCEPTION, PDO:: MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"}
$conexion = new PDO("mysql:host=localhost;dbname=rem;",'root','');

//ejecuta consulta completa.
$res = $conexion->query("SELECT * FROM usuariosder");
$resultado = $res->fetchAll(PDO::FETCH_ASSOC);
print_r(json_encode($resultado));
/*
foreach ($resultado as $array){
	echo "<pre>";
		print_r($array);
	echo "</pre>";
}*/

//cerrar conexion.
$conexion = null;
?>