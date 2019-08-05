<?php
//Archivo de conexion
$con = mysqli_connect("localhost", "servitec_root", "garciagodos1", "servitec_almacen");
if(mysqli_connect_errno()){
	echo "Error al conectar a MySql: ".mysqli_connect_error();
}
mysqli_set_charset($con,"utf8");
?>