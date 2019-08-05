<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Presentación Código Fuente PHP - Facturación Electrónica</title>

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

	<meta property="og:title" content="Prensentación del Código Fuente en PHP - Facturación Electrónica" />
    <meta property="og:description" content="Aquí podrás ver cómo tenemos estructurado todo nuestro código fuente... además te mostraremos algunas funcionalidades extras que hemos preparado para ti... " />
    <meta property="og:image" content="https://i3.ytimg.com/vi/hxpzpN0KHDI/maxresdefault.jpg" />      
    <meta property="og:url" content="https://sistemadefacturacionelectronicasunat.com/sis_facturacion/presentacion_codigo.php" />

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
	<!-- Load Facebook SDK for JavaScript -->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<!-- Your customer chat code -->
	<div class="fb-customerchat"
	attribution="setup_tool"
	page_id="740404332826448"
	logged_in_greeting="Hola!. ¿Deseas Comprar el Código Fuente?"
	logged_out_greeting="Hola!. ¿Deseas Comprar el Código Fuente?">
	</div>

	<style type="text/css" media="screen">
		.stepy-header {
			margin: 0 auto;
			max-width: 500px;
		}
		.stepy-navigator {
			text-align: center;
		}
		.custom-textarea:focus {
		    /* outline: 0; */
		    /* border-color: transparent; */
		    border-bottom-color: #009688;
		    -webkit-box-shadow: 0 1px 0 #009688;
		    box-shadow: 0 1px 0 #009688;
		    border-color: #ddd;
		    outline: 0;
		    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(221, 221, 221, 0.6);
		    box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(221, 221, 221, 0.6);
		}
		.custom-textarea {
		    display: block;
		    width: 100%;
		    padding: 8px 16px;
		    font-size: 13px;
		    line-height: 1.5384616;
		    color: #333333;
		    background-color: transparent;
		    background-image: none;
		    border: 1px solid #ddd;
		    border-radius: 3px;
		    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
		    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
		    -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
		    -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
		    transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
		}
		.panel-factura {
			margin-bottom: 20px;
		    background-color: #eeeded;
		    border: 1px solid transparent;
		    border-radius: 0px;
		    -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
		    box-shadow: 0 0px 0px rgba(0, 0, 0, 0.05);
		}
		.form-control {
		    display: block !important;
		    width: 100% !important;
		    height: 38px !important;
		    padding: 8px 16px !important;
		    font-size: 13px !important;
		    line-height: 1.5384616 !important;
		    color: #333333 !important;
		    background-color: transparent !important;
		    background-image: none !important;
		    border: 1px solid #ddd !important;
		    border-radius: 3px !important;
		    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075) !important;
		    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075) !important;
		    -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s !important;
		    -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s !important;
		    transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s !important;
		}
		iframe.ytb-embed {
		    max-width: 96% !important;
		    display: block;
		    margin: 10px auto;
		}
	</style>

	<!-- Page header -->
	<?php include("layout/page-header.php"); ?>
	<!-- /Page header -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- content -->
				<div class="row">
					<!-- Documento Electrónico -->
					<form name="frm_comprobanteelectronico" id="frm_comprobanteelectronico" action="#" method="post" accept-charset="utf-8">
						<div class="row">
			                <div class="col-md-12" style="margin-bottom: 15px;">
			                    <div class="panel" style="max-width: 1100px; margin: 0 auto;">
			                        <div class="panel-body" id="cuerpo_comprobante">

			                        	<div class="videoWrapper">
											<iframe class="ytb-embed" width="720" height="405" src="https://www.youtube.com/embed/0ccXwhRyrwM?autoplay=1&color=white&rel=0&showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
										</div>

										<div class="col-md-12 text-center" style="padding-bottom: 25px;">
											<a href="https://sistemadefacturacionelectronicasunat.com/sis_facturacion/" target="_blank" class="btn btn-primary btn-labeled btn-xs legitRipple"><b><i class="icon-link"></i></b> Haz Click Aquí para Ver La Demo Online!</a>
										</div>

										<div class="col-md-4 text-center">
											<a href="https://api.whatsapp.com/send?phone=+51956295282&text=Necesito%20m%C3%A1s%20informaci%C3%B3n%20sobre%20el%20c%C3%B3digo%20fuente%20php%20del%20facturador%20electr%C3%B3nico%20sunat..." target="_blank" class="btn btn-success btn-labeled btn-xs legitRipple"><b><i class="fa fa-whatsapp"></i></b> Contactar Via WhatsApp</a>
										</div>

										<div class="col-md-4 text-center">
										<a href="https://m.me/740404332826448" target="_blank" class="btn btn-primary btn-labeled btn-xs legitRipple"><b><i class="fa fa-facebook-official"></i></b> Contactar Via Facebook</a>
										</div>

										<div class="col-md-4 text-center">
										<a href="https://gumroad.com/l/codigo_fuente_php_facturacion_electronica?locale=es" target="_blank" class="btn btn-info btn-labeled btn-xs legitRipple"><b><i class="icon-cart5"></i></b> Obtener el Código Fuente</a>
										</div>
										<div class="col-md-12" style="padding: 30px;">
											<div class="alert alert-info alert-styled-left alert-bordered" style="max-width: 696px; margin: 0 auto;">
												<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
												<span class="text-semibold">También Aceptamos Paypal!</span> Luego de enviar el dinero via Paypal, debes enviarme un email a: aquino.alex@gmail.com con tu nombre, email, dirección y teléfono para crear tu cuenta en el sistema y puedas descargar el código fuente y todos los bonos... <br /> <br />

												También aceptamos depósitos via BCP e Interbank, tanto en dólares como su equivalente en soles, si deseas depositar en uno de los bancos anteriormente mencionados, contacta con nosotros a travéz de <a target="_blank" href="https://www.facebook.com/ACastaneda.Emprendedor/">facebook</a> o <a href="https://api.whatsapp.com/send?phone=+51956295282&text=Necesito%20m%C3%A1s%20informaci%C3%B3n%20sobre%20el%20c%C3%B3digo%20fuente%20php%20del%20facturador%20electr%C3%B3nico%20sunat..." target="_blank">whatsapp</a>...    
											</div>                                

											<p class="text-center" style="padding-top: 20px;">
												<a target="_blank" href="https://paypal.me/AlexCastanedaAquino" class="btn btn-primary btn-labeled btn-xs"><b><i class="fa fa-paypal"></i></b> Enviar $297 via Paypal</a>
											</p>
										</div>
			                        <div>
			                    </div>
			                </div>
			            </div>
					</form>
					<!-- /Documento Electrónico -->

				</div>
				<!-- /content -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

	
	<!-- vm_agregar_articulo -->
	<div id="vm_agregar_articulo" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header bg-primary">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h6 class="modal-title">Agregar Artículo</h6>
				</div>

				<div class="modal-body">
					<div class="col-md-12">
						<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered"> 
							Esta pantalla fué creada simplemente a modo de demostración, para que puedas agregar cualquier producto... en tu caso, cuando tu sistema de encuentre en producción, tendrás que mostrar automáticamente tus productos desde tu base de datos!
						</div>
					</div>
					<form action="#" id="frm_producto" method="get" accept-charset="utf-8">
						<div class="row">
							<div class="form-group col-md-6">
		                        <label for="producto_codigo">Codigo</label>
		                        <input type="text" class="form-control" value="" name="producto_codigo" id="producto_codigo">
		                    </div>
		                    <div class="form-group col-md-6">
		                        <label for="producto_unidadmedida">Und/Medida</label>
		                        <select class="form-control valid" name="producto_unidadmedida" id="producto_unidadmedida">
		                            <option value="NIU">KILOGRAMOS</option>
		                            <option value="NIU">LIBRAS</option>
		                            <option value="NIU">TONELADAS LARGAS</option>
		                            <option value="NIU">TONELADAS METRICAS</option>
		                            <option value="NIU">TONELADAS CORTAS</option>
		                            <option value="NIU">GRAMOS</option>
		                            <option value="NIU">UNIDADES</option>
		                            <option value="NIU">LITROS</option>
		                            <option value="NIU">GALONES</option>
		                            <option value="NIU">BARRILES</option>
		                            <option value="NIU">LATAS</option>
		                            <option value="NIU">CAJAS</option>
		                            <option value="NIU">MILLARES</option>
		                            <option value="NIU">METROS CUBICOS</option>
		                            <option value="NIU">METROS</option>
		                        </select>
		                    </div>
		                    <div class="form-group col-md-12">
		                        <label for="producto_descripcion">Descripcion</label>
		                        <input type="text" class="form-control" value="" name="producto_descripcion" id="producto_descripcion">
		                    </div>
		                    <div class="form-group col-md-6">
		                        <label for="producto_preciounidad">Precio/Uni(Inc.IGV)</label>
		                        <input type="text" class="form-control" value="" name="producto_preciounidad" id="producto_preciounidad">
		                    </div>
		                    <div class="form-group col-md-6">
		                        <label for="producto_cantidad">Cantidad</label>
		                        <input type="text" class="form-control" value="" name="producto_cantidad" id="producto_cantidad">
		                    </div>
		                    <div class="form-group col-md-4">
		                        <label for="producto_subtotal">Sub.Total</label>
		                        <input type="text" class="form-control" value="" name="producto_subtotal" id="producto_subtotal" disabled="disabled">
		                    </div>
		                    <div class="form-group col-md-4">
		                        <label for="producto_igv">IGV (18%)</label>
		                        <input type="text" class="form-control" value="" name="producto_igv" id="producto_igv" disabled="disabled">
		                    </div>
		                    <div class="form-group col-md-4">
		                        <label for="producto_total">Total</label>
		                        <input type="text" class="form-control" value="" name="producto_total" id="producto_total" disabled="disabled">
		                    </div>

		                    <div class="form-group col-md-12">
		                    	<button type="button" class="btn btn-success btn_agregarproducto_detalle">Agregar</button>
		                    	<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
		                    </div>
		                </div>
	            	</form>
				</div>

			</div>
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
				&copy; 2017. <a href="#" class="navbar-link">Facturación Electrónica Sunat - Perú</a> by <a href="#" class="navbar-link" target="_blank">Alex Castaneda</a>
			</div>

			<div class="navbar-right">
				<ul class="nav navbar-nav">
					<li><a href="#">About</a></li>
					<li><a href="#">Terms</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- /footer -->

</body>
</html>