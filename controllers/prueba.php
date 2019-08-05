<?php
include "printpdf.php";
include"../seguridad/conexion.inc.php";
include"../model/cComprobante.php";

$cComprobante = new cComprobante();
$print = new Printpdf();

/*prueba.php?
dato=64&
dato1=1&
tipo2=01&
tipo=factura*/
//http://localhost:8080/facturacion_st/controllers/prueba.php?dato=73&dato1=1&tipo2=01&tipo=factura

$comprobanteid = $_GET['dato'];
$empresaid = $_GET['dato1'];
$tipocomprobante = $_GET['tipo'];
$tipo_cpe = $_GET['tipo'];
$id = 1;

	$result = mysqli_query($conn,$cComprobante->listarComprobante2($comprobanteid,$empresaid,$tipocomprobante));
		$comprobante = mysqli_num_rows($result);

		while ($comprobante = mysqli_fetch_array($result)) {
	 
	   		$data['tipo_comprobante']=$comprobante['tipocomprobante_id'];
			$data['txt_subtotal_comprobante']=$comprobante['importeventa']-$comprobante['igvventa'];
			$data['txt_igv_comprobante']=$comprobante['igvventa'];
			$data['txt_total_comprobante']=$comprobante['importeventa'];
		    $data['serie_comprobante']=$comprobante['serie'];
		    $data['numero_comprobante']=$comprobante['numero'];
		    $data['fecha_comprobante']=$comprobante['fechaemision'];
		 	$data['fecha_comprobante2']="2018-12-06";
		    $data['codmoneda_comprobante']=$comprobante['moneda'];
		    $data['cliente_numerodocumento']=$comprobante['cliente_nrodoc'];
			$data['cliente_nombre']=$comprobante['cliente_descripcion'];
			$data['codigohash_comprobante']=$comprobante['codigohash'];
		    $data['cliente_tipodocumento']=$comprobante['cliente_tipodoc'];  	
		    $data['cliente_direccion']=$comprobante['cliente_direccion'];
		 //$data['FECHA_VTO']=$comprobante['fechaemision'];
		 //fecha_comprobante*/
	 
	 }

	 $result2 = mysqli_query($conn,$cComprobante->listarDetalleComprobante($comprobanteid,$empresaid,$tipocomprobante));
	 $comprobante = mysqli_num_rows($result2);


if($tipo_cpe == '01') {
	$print->get_factura($data,$result2);
}

if($tipo_cpe == '03') {
	$print->get_boleta($data,$result2);
}

if($tipo_cpe == '07') {
	$print->get_notadebito($data,$result2);
}

if($tipo_cpe == '08') {
	$print->get_notacredito($data,$result2);
}
?>