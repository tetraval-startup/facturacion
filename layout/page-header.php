

<!-- Page header -->

	<div class="page-header page-header-inverse bg-indigo">

		<!-- Main navbar -->
		<div class="navbar navbar-inverse navbar-transparent">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.html"><img src="assets/images/logos/logotipo-software.png" alt=""></a>

				<ul class="nav navbar-nav pull-right visible-xs-block">
					<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-grid3"></i></a></li>
				</ul>
			</div>

			<div class="navbar-collapse collapse" id="navbar-mobile">
		

				<div class="navbar-right">
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="icon-bell2"></i>
								<span class="visible-xs-inline-block position-right">Activity</span>
								<span class="status-mark border-pink-300"></span>
							</a>

							<div class="dropdown-menu dropdown-content">
								<div class="dropdown-content-heading">
									Activity
									<ul class="icons-list">
										<li><a href="#"><i class="icon-menu7"></i></a></li>
									</ul>
								</div>

								<ul class="media-list dropdown-content-body width-350">
									<li class="media">
										<div class="media-left">
											<a href="#" class="btn bg-success-400 btn-rounded btn-icon btn-xs"><i class="icon-mention"></i></a>
										</div>

										<div class="media-body">
											<a href="#">Taylor Swift</a> mentioned you in a post "Angular JS. Tips and tricks"
											<div class="media-annotation">4 minutes ago</div>
										</div>
									</li>

									<li class="media">
										<div class="media-left">
											<a href="#" class="btn bg-teal-400 btn-rounded btn-icon btn-xs"><i class="icon-spinner11"></i></a>
										</div>
										
										<div class="media-body">
											<strong>January, 2016</strong> - 1320 new users, 3284 orders, $49,390 revenue
											<div class="media-annotation">Feb 1, 05:46</div>
										</div>
									</li>

								</ul>
							</div>
						</li>


						<li class="dropdown dropdown-user">
							<a class="dropdown-toggle" data-toggle="dropdown">
								<img src="https://scontent.flim16-3.fna.fbcdn.net/v/t1.0-9/47436673_10216123995286766_2673989717288026112_n.jpg?_nc_cat=111&_nc_ht=scontent.flim16-3.fna&oh=7e1775ed2910eb58f92fa9e434c653d1&oe=5CDE5D04" alt="">
								<span>Admin</span>
								<i class="caret"></i>
							</a>

						<!-- <ul class="dropdown-menu dropdown-menu-right">
								<li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
								<li><a href="#"><i class="icon-coins"></i> My balance</a></li>
								<li><a href="#"><span class="badge bg-blue pull-right">26</span> <i class="icon-comment-discussion"></i> Messages</a></li>
								<li class="divider"></li>
								<li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
								<li><a href="#"><i class="icon-switch2"></i> Logout</a></li>
							</ul> -->

						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /main navbar -->


		<!-- Page header content -->
		<div class="page-header-content">
			<div class="page-title">
				<h4>Inicio <small>Facturación Electrónica</small></h4>
			</div>
			

		</div>
		<!-- /page header content -->


		<!-- Second navbar -->
		<div class="navbar navbar-inverse navbar-transparent" id="navbar-second">
			<ul class="nav navbar-nav visible-xs-block">
				<li><a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-second-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>

			<div class="navbar-collapse collapse" id="navbar-second-toggle">
				<ul class="nav navbar-nav navbar-nav-material">
					<li class="active"><a href="index.html">Facturación Electrónica</a></li>
					<li class="active"><a href="registro_ventas.php">Ver Facturas,Boletas y Notas</a></li>

				</ul>
				
			</div>
		</div>
		<!-- /second navbar -->


		<!-- Floating menu -->
		<ul class="fab-menu fab-menu-top-right" data-fab-toggle="click">
			<li>
				<a class="fab-menu-btn btn bg-pink-300 btn-float btn-rounded btn-icon">
					<i class="fab-icon-open icon-plus3"></i>
					<i class="fab-icon-close icon-cross2"></i>
				</a>

				<ul class="fab-menu-inner">
					<li>
						<div data-fab-label="Ejemplo Factura en PDF">
							<a target="_blank" href="controllers/prueba.php?tipo=factura&id=0" class="btn btn-default btn-rounded btn-icon btn-float">
								<i class="icon-file-pdf text-success"></i>
							</a>
						</div>
					</li>
					<li>
						<div data-fab-label="Ejemplo Boleta de Venta en PDF">
							<a target="_blank" href="controllers/prueba.php?tipo=boleta&id=0" class="btn btn-default btn-rounded btn-icon btn-float">
								<i class="icon-file-pdf text-primary"></i>
							</a>
						</div>
					</li>
					<li>
						<div data-fab-label="Ejemplo Nota de Crédito en PDF">
							<a target="_blank" href="controllers/prueba.php?tipo=notacredito&id=0" class="btn btn-default btn-rounded btn-icon btn-float">
								<i class="icon-file-pdf text-info"></i>
							</a>
						</div>
					</li>
					<li>
						<div data-fab-label="Ejemplo Nota de Débito en PDF">
							<a target="_blank" href="controllers/prueba.php?tipo=notadebito&id=0" class="btn btn-default btn-rounded btn-icon btn-float">
								<i class="icon-file-pdf text-blue"></i>
							</a>
						</div>
					</li>
					<li>
						<div data-fab-label="Contacto">
							<a href="#" class="btn bg-pink-400 btn-rounded btn-icon btn-float">
								<img src="assets/images/face23.jpg" class="img-responsive" alt="">
							</a>
							<span class="status-mark border-pink-400"></span>
						</div>
					</li>
				</ul>
			</li>
		</ul>
		<!-- /floating menu -->

	</div>
	<!-- /page header -->