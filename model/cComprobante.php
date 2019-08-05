<?php

class cComprobante{
	

	
function insertar($id,$empresa_id,$tipocomprobante_id,$serie,$numero,$codestablecimiento,$tipooperacion,$cliente_tipodoc,$cliente_nrodoc,$cliente_descripcion,$cliente_direccion,$fechaemision,$moneda,$descuento,$igvventa,$iscventa,$otrostributos,$otroscargos,$importeventa,$usumod,$nombrexml){
		
	$result = "INSERT INTO comprobante (`id`, `empresa_id`, `tipocomprobante_id`, `serie`, `numero`, `codestablecimiento`, `tipooperacion`, `tiponota`, `cliente_tipodoc`, `cliente_nrodoc`, `cliente_descripcion`, `cliente_direccion`, `cliente_email`, `fechaemision`, `fechavencimiento`, `glosa`, `moneda`, `tipocambio`, `descuento`, `igvventa`, `iscventa`, `otrostributos`, `otroscargos`, `importeventa`, `regimenpercepcion`, `porcentajepercepcion`, `importepercepcion`, `regimendetraccion`, `codigobbssdetraccion`, `numctabanconacion`, `porcentajedetraccion`, `importedetraccion`, `importerefdetraccion`, `indicaanticipo`, `importeanticipo`, `importefinal`, `indicagratuito`, `docreftipo`, `docrefnumero`, `ordencompra`, `placavehiculo`, `estado`, `sunat`, `nombrexml`, `codigohash`, `xmlgenerado`, `indicaenviomail`, `usureg`, `fecreg`, `usumod`, `fecmod`) VALUES ($id, $empresa_id, '$tipocomprobante_id','$serie', $numero, '$codestablecimiento', '$tipooperacion', NULL, '$cliente_tipodoc', '$cliente_nrodoc', '$cliente_descripcion', '$cliente_direccion', NULL, '$fechaemision', '', NULL, '$moneda', NULL, $descuento, '$igvventa', '$iscventa', '$otrostributos', '$otroscargos', '$importeventa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$nombrexml', NULL, NULL, NULL, NULL, NOW( ), '$usumod', '')";

	return $result;

}

function insertarDetalleComprobante($id,$empresa_id,$tipocomprobante_id,$item,$codigointernoproducto,$codigosunatproducto,$nombreproducto,$indicaafectoigv,$indicaafectoisc,$tipoigv,$unida,$cantidad,$preciounitario,$valorbruto,$valordscto,$valorventa,$isc,$igv){

	$total=$valorbruto+$igv;
	$result = "INSERT INTO `detallecomprobante` (`comprobante_id`, `empresa_id`, `tipocomprobante_id`, `item`, `codigointernoproducto`, `codigosunatproducto`, `nombreproducto`, `indicaafectoigv`, `indicaafectoisc`, `tipoafectacionigv`, `tipocalculoisc`, `unidad`, `cantidad`, `preciounitario`, `precioreferencial`, `valorunitario`, `valorbruto`, `valordscto`, `valorventa`, `isc`, `igv`, `total`) 
	VALUES
	 ($id, $empresa_id, '$tipocomprobante_id', '$item', '$codigointernoproducto', '$codigosunatproducto', '$nombreproducto', '$indicaafectoigv', '$indicaafectoisc', '$tipoigv', '', '$unida', '$cantidad', '$preciounitario', '$valordscto', '$valorventa', '$valorbruto', '$valordscto', '$valorbruto', 'isc', '$igv', '$total');";

	return $result;

}




function listarEmpresa($id){

	$result = "SELECT e.id as emp_id, e.numeroruc as emp_numeroruc, e.razonsocial as emp_razonsocial, 
				e.nombrecomercial as emp_nomcomercial, 
				e.coddistrito as emp_ubigeo, e.direccion, dp.descripcion as direccion_departamento,
				pv.descripcion as direccion_provincia, dt.descripcion as direccion_distrito,
				c.usersecundario, c.clavesecundario FROM empresa e 
				inner join certificado c on e.id = c.empresa_id
				inner join udepartamentos dp on e.coddepartamento = dp.id
				inner join uprovincias pv on e.codprovincia = pv.id
				inner join udistritos dt on e.coddistrito = dt.id
				where e.id = $id ";

	return $result;

}

//LISTADO PARA FACTURA
	function listarComprobante2($id,$empresa_id,$tipocomprobante_id)
		{
		 $sql  =  "SELECT * FROM comprobante
             WHERE id =$id
			 AND  empresa_id = $empresa_id
			 AND tipocomprobante_id = '$tipocomprobante_id'" ; 
             //$query = $this->db->get_where('users', array('id' => $id));
            return $sql;
		} 

	
		function listarDetalleComprobante($comprobante_id,$empresa_id,$tipocomprobante_id)
		{
		 $sql  =  "SELECT cantidad,nombreproducto,unidad,valorunitario,valorventa FROM detallecomprobante
					  WHERE comprobante_id = $comprobante_id
					  AND  empresa_id = $empresa_id
					  AND tipocomprobante_id = '$tipocomprobante_id'" ; 
             //$query = $this->db->get_where('users', array('id' => $id));
            return $sql;
		} 




		function listarUltimoId($b,$c)

		{
	
	
	
			  $sql  =  " SELECT MAX(id) as id FROM comprobante 
					  WHERE empresa_id = $b and tipocomprobante_id = '$c' " ; 
				 //$query = $this->db->get_where('users', array('id' => $id));
				return $sql;
			} 

}
?>