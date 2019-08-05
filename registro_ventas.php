<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>*Sistema de Facturación - ServiTec Perú - </title>
	
	
	<!--****************OPEN GRAPH(DATOS EXTRUCTURADOS)****************-->
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:site_name" content="Servitec Perú (Servicios Técnicos)" />
<meta property="og:locale" content="es_PE" />
<meta property="og:type" content="website" />
<meta property="og:title" content="ServiTec Perú" />
<meta property="og:description" content="Factuiración electronica para tu negocio..." />
<meta property="og:url" content="https://www.facturacion.servitecperu.com" />
<meta property="og:image" content="assets/images/imalogo-software.png"/>
<!--****************FINN OPEN GRAPH(DATOS EXTRUCTURADOS)****************-->
<link rel="icon" href="assets/images/logos/imalogo-software.png" type="image/x-icon">
<meta type="icon" src="assets/images/logos/imalogo-software.png" >


	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="assets/css/icons/fontawesome/styles.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="js/ajax.js"></script> 
	<script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/ui/nicescroll.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/ui/drilldown.js"></script>
	<script type="text/javascript" src="assets/js/plugins/ui/fab.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="assets/js/plugins/notifications/bootbox.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/notifications/sweet_alert.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/selects/select2.min.js"></script>

	<script type="text/javascript" src="assets/js/core/app.js"></script>

	<script type="text/javascript" src="assets/js/plugins/forms/selects/select2.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/validation/validate.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/inputs/touchspin.min.js"></script>
	<!-- /theme JS files -->

	<script src="assets/js/plugins/jqgrid/js/i18n/grid.locale-es.js" type="text/javascript"></script>
	<script src="assets/js/plugins/jqgrid/js/jquery.jqGrid.min.js" type="text/javascript"></script>
	

	<link rel="stylesheet" type="text/css" media="screen" href="assets/js/plugins/jqgrid/css/ui.jqgrid.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="assets/js/plugins/jqgrid/css/custom.css" />

	<script type="text/javascript" src="js/numeros_a_letras.js?i=<?php echo rand(); ?>"></script>	
	<script type="text/javascript" src="js/documentoelectronico_interaccion.js?i=<?php echo rand(); ?>"></script>	
	<script type="text/javascript" src="js/documentoelectronico_consultas.js?i=<?php echo rand(); ?>"></script>	

	<script type="text/javascript" src="assets/js/plugins/ui/ripple.min.js"></script>

	<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window, document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '179248925778029');
	fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	src="https://www.facebook.com/tr?id=179248925778029&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Facebook Pixel Code -->


</head>

<body class="navbar-bottom">

	<!-- Page header -->
	<?php include("layout/page-header.php"); ?>
	<!-- /Page header -->



	<!-- Your customer chat code -->
	<style type="text/css" media="screen">
	

	    
	  #contenedor-table table{
	      background:#ffffff;
	      border-radius:7px;
	    padding:10px;
	    max-width:100%;
	  }
	   #contenedor-table #fila-datos td{
	      padding:5px;
	      margin:5px;
	       
	   }
    </style>




	<!-- Page container -->
	<div class="container-fluid">

				<!-- content -->
				<div class="row" id="contenedor-table">
					    
					    <table class="table table-hover table-bordered">
					        <tr style="color:#fff;background:#72A7D1;">
					            <td>COMPROBANTE</td>
					            <td>TIPO DOC.</td>
					            <td>CLIENTE</td>
					            <td>FECHA EMISION</td>
					            <td>FECHA VENCIMIENTO</td>
					            <td>MONEDA</td>
					            <td>TOTAL</td>
					        </tr>
					        
					        <?php 

                            include("seguridad/conexion.inc.php");
                            
                            $sql = "SELECT `id`,`tipocomprobante_id`, `serie`, `numero`, `tipooperacion`, `tiponota`, `cliente_tipodoc`, `cliente_nrodoc`, `cliente_descripcion`,  `fechaemision`, `fechavencimiento`,`moneda`, `igvventa`, `importeventa`, `estado` FROM `comprobante`";
                            
                            $result = mysqli_query($conn,$sql);
                            
                            while($row=mysqli_fetch_array($result)){
                                
?>
					        <!--******IMPRIMIENDO CONTENIDO******-->
					        <tr id="fila-datos">
					            <td>
					            <?php  if($row['serie']=="F001"){
					                echo "<label>Factura: F001"."-".$row['numero']."</label>";
					            }elseif($row['serie']=="B001"){
					                echo "<label>Boleta de venta: B001"."-".$row['numero']."</label>";
					            } ?>
					            </td>
					          
					            <td>
					                <?php
					                if($row['cliente_tipodoc']==1){
					                    echo "<label>DNI</label>";
					                }elseif($row['cliente_tipodoc']==6){
					                    echo "<label>RUC</label>";
					                }?>
					            </td>
					            
					            <td><?= $row['cliente_nrodoc']."<br>".$row['cliente_descripcion']?></td>
					            <td><?=$row['fechaemision']?></td>
					            <td><?=$row['fechavencimiento']?></td>
					            <td>
					                <?=$row['moneda']?>
					            </td>
		
					            <td><?=$row['importeventa']?></td>
					            
					        </tr>
					        
					        <?php } ?>
					        
					    </table>

		</div>
	</div>
	<!-- /primary modal -->


	<!-- Footer -->
	<div class="navbar navbar-default navbar-fixed-bottom footer">
		<ul class="nav navbar-nav visible-xs-block">
			<li><a class="text-center collapsed" data-toggle="collapse" data-target="#footer"><i class="icon-circle-up2"></i></a></li>
		</ul>

		<div class="navbar-collapse collapse" id="footer">
			<div class="navbar-text">
				&copy; 2019. <a href="https://servitec-peru.com" class="navbar-link">Facturación Electrónica Sunat - Perú</a> by <a href="#" class="navbar-link" target="_blank">Servitec - Perú</a>
			</div>

			<div class="navbar-right">
				<ul class="nav navbar-nav">
					<li><a href="https://servitec-peru.com">Nosotros</a></li>
					<li><a href="#">Terminos</a></li>
					<li><a href="https://servitec-peru.com">Contacto</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- /footer -->

</body>
</html>
