<?php


// Datos de conexion a la base de datos
$servidor='buah3bvfztgypsbrhijc-mysql.services.clever-cloud.com';
$usuario='utqlaf0uataif76a';
$pass='lvj0IqIPdmSzHVyat6wA';
$bd='buah3bvfztgypsbrhijc';

// Nos conectamos a la base de datos
$conexion = new mysqli($servidor, $usuario, $pass, $bd);	

// Definimos que nuestros datos vengan en utf8
$conexion->set_charset('utf8');

// verificamos si hubo algun error y lo mostramos
if ($conexion->connect_errno) {
	echo "Error al conectar la base de datos {$conexion->connect_errno}";
}

// Url donde estara el proyecto, debe terminar con un "/" al final
$base_url="mysql://utqlaf0uataif76a:lvj0IqIPdmSzHVyat6wA@buah3bvfztgypsbrhijc-mysql.services.clever-cloud.com:3306/buah3bvfztgypsbrhijc";

?>

