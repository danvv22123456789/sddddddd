
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>.:CCE:.</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN core-css ================== -->
	<link href="../assets/css/vendor.min.css" rel="stylesheet" />
	<link href="../assets/css/default/app.min.css" rel="stylesheet" />
	<link href="../assets/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
	<!-- ================== END core-css ================== -->
	<!------->
	<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
	<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

	<style>
		.dataTables_wrapper .dataTables_paginate .paginate_button:hover,
		.dataTables_wrapper .dataTables_paginate .paginate_button:active {
			background:transparent !important;
			border:0;
		}
		.dataTables_wrapper .dataTables_paginate .paginate_button {
			padding: 0 !important;
		}
	</style>
	

</head>
<body>
<!-- BEGIN #loader -->
<div id="loader" class="app-loader">
	<span class="spinner"></span>
</div>
<!-- END #loader -->

<!-- BEGIN #app -->
<div id="app" class="app app-header-fixed app-sidebar-fixed">
	<!-- BEGIN #header -->
	<div id="header" class="app-header">
		<!-- BEGIN navbar-header -->
		<div class="navbar-header">
			<button type="button" class="navbar-mobile-toggler d-none" data-toggle="app-sidebar-end-mobile">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="index.html" class="navbar-brand ms-0"><span class="navbar-logo"></span> <b>CCE</b></a>
			<button type="button" class="navbar-mobile-toggler d-none" data-bs-toggle="collapse" data-bs-target="#top-navbar">
				<span class="fa-stack fa-lg">
					<i class="far fa-square fa-stack-2x"></i>
					<i class="fa fa-cog fa-stack-1x mt-1px"></i>
				</span>
			</button>
			<button type="button" class="navbar-mobile-toggler d-none" data-toggle="app-top-menu-mobile">
				<span class="fa-stack fa-lg">
					<i class="far fa-square fa-stack-2x"></i>
					<i class="fa fa-cog fa-stack-1x mt-1px"></i>
				</span>
			</button>
			<button type="button" class="navbar-mobile-toggler" data-toggle="app-sidebar-mobile">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<!-- END navbar-header -->
		
		<!-- BEGIN header-nav -->
		<div class="navbar-nav">
			<div class="navbar-item navbar-form">
				<form action="" method="POST" name="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Ingresa la palabra" />
						<button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
					</div>
				</form>
			</div>
			<div class="navbar-item dropdown">
				<a href="#" data-bs-toggle="dropdown" class="navbar-link dropdown-toggle icon">
					<i class="fa fa-bell"></i>
					<span class="badge">5</span>
				</a>
				<div class="dropdown-menu media-list dropdown-menu-end">
					<div class="dropdown-header">NOTIFICATIONS (5)</div>
					<a href="javascript:;" class="dropdown-item media">
						<div class="media-left">
							<i class="fa fa-bug media-object bg-gray-500"></i>
						</div>
						<div class="media-body">
							<h6 class="media-heading">Server Error Reports <i class="fa fa-exclamation-circle text-danger"></i></h6>
							<div class="text-muted fs-10px">3 minutes ago</div>
						</div>
					</a>
					<a href="javascript:;" class="dropdown-item media">
						<div class="media-left">
							<img src="../assets/img/user/user-1.jpg" class="media-object" alt="" />
							<i class="fab fa-facebook-messenger text-blue media-object-icon"></i>
						</div>
						<div class="media-body">
							<h6 class="media-heading">John Smith</h6>
							<p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
							<div class="text-muted fs-10px">25 minutes ago</div>
						</div>
					</a>
					<a href="javascript:;" class="dropdown-item media">
						<div class="media-left">
							<img src="../assets/img/user/user-2.jpg" class="media-object" alt="" />
							<i class="fab fa-facebook-messenger text-blue media-object-icon"></i>
						</div>
						<div class="media-body">
							<h6 class="media-heading">Olivia</h6>
							<p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
							<div class="text-muted fs-10px">35 minutes ago</div>
						</div>
					</a>
					<a href="javascript:;" class="dropdown-item media">
						<div class="media-left">
							<i class="fa fa-plus media-object bg-gray-500"></i>
						</div>
						<div class="media-body">
							<h6 class="media-heading"> New User Registered</h6>
							<div class="text-muted fs-10px">1 hour ago</div>
						</div>
					</a>
					<a href="javascript:;" class="dropdown-item media">
						<div class="media-left">
							<i class="fa fa-envelope media-object bg-gray-500"></i>
							<i class="fab fa-google text-warning media-object-icon fs-14px"></i>
						</div>
						<div class="media-body">
							<h6 class="media-heading"> New Email From John</h6>
							<div class="text-muted fs-10px">2 hour ago</div>
						</div>
					</a>
					<div class="dropdown-footer text-center">
						<a href="javascript:;" class="text-decoration-none">View more</a>
					</div>
				</div>
			</div>
			
			<div class="navbar-item navbar-user dropdown">
				<a href="#" class="navbar-link dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">
					<img src="../assets/img/user/user-13.jpg" alt="" /> 
					<span>
						<span class="d-none d-md-inline">Admin</span>
						<b class="caret"></b>
					</span>
				</a>
				<div class="dropdown-menu dropdown-menu-end me-1">

					<a href="login.php" class="dropdown-item">Cerrar Sesión</a>
				</div>
			</div>
			
		</div>
		<!-- END header-nav -->
	</div>
	<!-- END #header -->
	
	<!-- BEGIN #sidebar -->
	<div id="sidebar" class="app-sidebar">
		<!-- BEGIN scrollbar -->
		<div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
			<!-- BEGIN menu -->
			<div class="menu">
				<div class="menu-profile">
					<a href="javascript:;" class="menu-profile-link" data-toggle="app-sidebar-profile" data-target="#appSidebarProfileMenu">
						<div class="menu-profile-cover with-shadow"></div>
						<div class="menu-profile-image">
							<img src="../assets/img/user/user-13.jpg" alt="" />
						</div>
						<div class="menu-profile-info">
							<div class="d-flex align-items-center">
								<div class="flex-grow-1">
									Sean Ngu
								</div>
								<div class="menu-caret ms-auto"></div>
							</div>
							<small>Front end developer</small>
						</div>
					</a>
				</div>
				<div id="appSidebarProfileMenu" class="collapse">
					<div class="menu-divider m-0"></div>
				</div>
				<div class="menu-search mb-n3 d-none">
					<input type="text" class="form-control" placeholder="Sidebar menu filter..." data-sidebar-search="true" />
				</div>
			


				<!-- INICIO MENÚ DE NAVEGACIÓN DEL SISTEMA-->

				<div class="menu-header">Menú de Navegación</div>
				<div class="menu-item">
					<a href="#pages/index.html" data-toggle="ajax" class="menu-link">
						<div class="menu-icon">
							<i class="fa fa-sitemap"></i>
						</div>
						<div class="menu-text">Inicio</div>
					</a>
				</div>

				<!-- MÓDULO CONGRESO-->
				<div class="menu-item has-sub" id="menu_congresos" >
					<a href="javascript:;" class="menu-link">
						<div class="menu-icon">
							<i class="fa fa-desktop"></i>
						</div>
						<div class="menu-text">Congresos</div>
						<div class="menu-caret"></div>
					</a>
					<div class="menu-submenu">
						<div class="menu-item"><a id="congresos_activos" href="javascript:;"  class="menu-link"><div class="menu-text">Congresos activos para registro</div></a></div>
						<div class="menu-item"><a id="crear_congreso" href="javascript:;" class="menu-link"><div class="menu-text">Creación/Gestión</div></a></div>
						<div class="menu-item"><a id="gestionar_linea_investigacion" href="javascript:;" class="menu-link"><div class="menu-text">Gestionar Líneas de investigación</div></a></div>
						<div class="menu-item"><a id="gestionar_tematicas" href="javascript:;" class="menu-link"><div class="menu-text">Gestionar Temáticas</div></a></div>
						<div class="menu-item"><a id="asociar_administrador_congreso" href="javascript:;" class="menu-link"><div class="menu-text">Asociar administrador a congreso</div></a></div>
						<div class="menu-item has-sub">
							<a id="submenu_menu_ges_facturacion" href="javascript:;"  class="menu-link">
								<div class="menu-text">Mantenimiento</div>
								<div class="menu-caret"></div>
							</a>
							<div class="menu-submenu">
								<div class="menu-item has-sub">
								</div>
								<div class="menu-item"><a id="fcrear_tour" href="javascript:;"  class="menu-link"><div class="menu-text">Guardar Tour</div></a></div>
								<div class="menu-item"><a id="inscripcion_kit" href="javascript:;" class="menu-link"><div class="menu-text">Inscripción</div></a></div>
							</div>
						</div>
					</div>
				</div>


				<!-- MÓDULO GESTIÓN CERTIFICADO-->
				<div class="menu-item has-sub" id="menu_gcertificados">
					<a href="javascript:;" class="menu-link">
						<div class="menu-icon">
							<i class="fa fa-certificate"></i>
						</div>
						<div class="menu-text">Gestión Certificados</div>
						<div class="menu-caret"></div>
					</a>
					<div class="menu-submenu">
						<div class="menu-item"><a id="c_certificados" href="javascript:;" class="menu-link"><div class="menu-text">Crear Certificado</div></a></div>
						<div class="menu-item"><a id="generar_certificados" href="javascript:;" class="menu-link"><div class="menu-text">Generar Certificados</div></a></div>
					</div>
				</div>


				<!-- MÓDULO GESTIÓN DE LISTAS Y ROTULOS-->
				<div class="menu-item has-sub" id="menu_glistas_rotulos">
					<a href="javascript:;" class="menu-link">
						<div class="menu-icon">
							<i class="fa fa-list-ul"></i>
						</div>
						<div class="menu-text">Gestionar Listas y Rótulos</div>
						<div class="menu-caret"></div>
					</a>
					<div class="menu-submenu">
						<div class="menu-item" ><a id="listados_actividad" href="javascript:;" class="menu-link"><div class="menu-text">Listas de actividad</div></a></div>
						<div class="menu-item" ><a id="rotulos_actividad" href="javascript:;" class="menu-link"><div class="menu-text">Rótulos por actividad</div></a></div>
					</div>
				</div>


				<!-- MÓDULO GENERAR ESTADÍSTICAS-->
				<div class="menu-item has-sub" id="rotulos_actividad">
					<a href="javascript:;" class="menu-link">
						<div class="menu-icon">
							<i class="fa fa-line-chart" aria-hidden="true"></i>
						</div>
						<div class="menu-text">Generar Estadísticas</div>
						<div class="menu-caret"></div>
					</a>
					<div class="menu-submenu">
						<div class="menu-item has-sub" id="submenu_gestadisticas_trabajos">
							<a href="javascript:;" class="menu-link">
								<div class="menu-text">Gráficas</div>
								<div class="menu-caret"></div>
							</a>
							<div class="menu-submenu">
								<div class="menu-item has-sub">
								</div>
								<div class="menu-item"><a href="javascript:;" class="menu-link"><div class="menu-text">Gráfica#1</div></a></div>
								<div class="menu-item"><a href="javascript:;" class="menu-link"><div class="menu-text">Gráfica#2</div></a></div>
							</div>
						</div>
					</div>
				</div>	

				
				<!-- MÓDULO GESTIÓN DEL PROGRAMA-->
				<div class="menu-item has-sub"  id="menu_gprograma">
					<a href="javascript:;" class="menu-link">
						<div class="menu-icon">
							<i class="fa fa-align-center" aria-hidden="true"></i>
						</div>
						<div class="menu-text">Gestión del Programa</div>
						<div class="menu-caret"></div>
					</a>
					<div class="menu-submenu" id="submenu_gprograma_gespacios">
						<div class="menu-item has-sub">
							<a href="javascript:;" class="menu-link">
								<div class="menu-text">Gestión de Espacios</div>
								<div class="menu-caret"></div>
							</a>
							<div class="menu-submenu" >
								<div class="menu-item has-sub">
								</div>
								<div class="menu-item"><a id="crear_espacio" href="javascript:;" class="menu-link"><div class="menu-text">Administración de Espacios</div></a></div>
							</div>
						</div>
						<div class="menu-item has-sub" id="submenu_gprograma_gactividades">
							<a href="javascript:;" class="menu-link">
								<div class="menu-text">Gestión de Actividades</div>
								<div class="menu-caret"></div>
							</a>
							<div class="menu-submenu">
								<div class="menu-item has-sub">
								</div>
								<div class="menu-item"><a id="crear_actividad" href="javascript:;" class="menu-link"><div class="menu-text">Administración de Actividades</div></a></div>
							</div>
						</div>
						<div class="menu-item"><a id="distribucion_trabajos_sp" href="javascript:;" class="menu-link"><div class="menu-text">Distribución de Trabajos</div></a></div>
						<div class="menu-item"><a id="mover_trabajos_sp" href="javascript:;" class="menu-link"><div class="menu-text">Mover Trabajos</div></a></div>
						<div class="menu-item"><a id="emitir_programa" href="javascript:;" class="menu-link"><div class="menu-text">Crear y Emitir Programa</div></a></div>	
					</div>
				</div>


				<!-- MÓDULO GESTIÓN DE VOLUNTARIOS-->
				<div class="menu-item has-sub" id="menu_gvoluntarios">
					<a href="javascript:;" class="menu-link">
						<div class="menu-icon">
							<i class="fa fa-users" aria-hidden="true"></i>
						</div>
						<div class="menu-text">Gestión de Voluntarios</div>
						<div class="menu-caret"></div>
					</a>
					<div class="menu-submenu">
						<div class="menu-item"><a id="solicitudes" href="javascript:;" class="menu-link"><div class="menu-text">Solicitudes</div></a></div>
						<div class="menu-item"><a id="inscribir_voluntario" href="javascript:;" class="menu-link"><div class="menu-text">Inscribir Voluntario</div></a></div>
						<div class="menu-item"><a id="validar_voluntariado" href="javascript:;" class="menu-link"><div class="menu-text">Validar Voluntarios</div></a></div>
						<div class="menu-item"><a id="mensajes_voluntarios" href="javascript:;" class="menu-link"><div class="menu-text">Mensajes de Voluntarios</div></a></div>
						<div class="menu-item"><a id="crear_actividad_vol" href="javascript:;" class="menu-link"><div class="menu-text">Crear Actividad</div></a></div>
					</div>
				</div>


				<!-- MÓDULO VOLUNTARIOS-->
				<div class="menu-item has-sub" id="menu_voluntarios">
					<a href="javascript:;" class="menu-link">
						<div class="menu-icon">
							<i class="fas fa-user-friends" aria-hidden="true"></i>
						</div>
						<div class="menu-text">Voluntarios</div>
						<div class="menu-caret"></div>
					</a>
					<div class="menu-submenu">
						<div class="menu-item"><a id="actividades_voluntario" href="javascript:;" class="menu-link"><div class="menu-text">Actividades Asignadas</div></a></div>
						<div class="menu-item"><a id="mensajes_voluntario" href="javascript:;" class="menu-link"><div class="menu-text">Mensajería</div></a></div>
						<div class="menu-item has-sub">
							<a href="javascript:;" class="menu-link">
								<div class="menu-text">Validaciones</div>
								<div class="menu-caret"></div>
							</a>
							<div class="menu-submenu" id="submenu_gvoluntarios_gactividades_vol">
								<div class="menu-item has-sub">
								</div>
								<div class="menu-item"><a id="asistencia_voluntario" href="javascript:;" class="menu-link"><div class="menu-text">Asistencia Persona</div></a></div>
								<div class="menu-item"><a id="validar_pres_autores" href="javascript:;" class="menu-link"><div class="menu-text">Asistencia Autores</div></a></div>
								<div class="menu-item"><a id="pagos_voluntarios" href="javascript:;"class="menu-link"><div class="menu-text">Pagos</div></a></div>
							</div>
						</div>
					</div>
				</div>	


				<!-- MÓDULO GESTIÓN DE TRABAJO-->
				<div class="menu-item has-sub" id="menu_gtrabajos">
					<a href="javascript:;" class="menu-link">
						<div class="menu-icon">
							<i class="fa fa-briefcase" aria-hidden="true"></i>
						</div>
						<div class="menu-text">Gestión de Trabajos</div>
						<div class="menu-caret"></div>
					</a>
					<div class="menu-submenu">
					<div class="menu-item has-sub">
							<a id="submenu_menu_ges_facturacion" href="javascript:;"  class="menu-link">
								<div class="menu-text">Resumen</div>
								<div class="menu-caret"></div>
							</a>
							<div class="menu-submenu">
								<div class="menu-item has-sub">
								</div>
								<div class="menu-item"><a id="subir_resumen" href="javascript:;" class="menu-link"><div class="menu-text">Subir Resumen</div></a></div>
								<div class="menu-item"><a id="resumenes_subidos" href="javascript:;" class="menu-link"><div class="menu-text">Resumenes Subidos</div></a></div>
							</div>
						</div>
						<div class="menu-item"><a id="subir_trabajo" href="javascript:;" class="menu-link"><div class="menu-text">Subir Trabajo</div></a></div>
						<div class="menu-item"><a id="trabajos_subidos" href="javascript:;" class="menu-link"><div class="menu-text">Trabajos Subidos</div></a></div>
						<div class="menu-item"><a id="aceptar_autorias" href="javascript:;" class="menu-link"><div class="menu-text">Aceptar Autorías</div></a></div>
					</div>
				</div>		


				<!-- MÓDULO GESTIÓN DE EDITOR GESTOR-->
				<div class="menu-item has-sub" id="menu_geditor_gestor" >
					<a href="javascript:;" class="menu-link">
						<div class="menu-icon">
							<i class="fa fa-edit" aria-hidden="true"></i>
						</div>
						<div class="menu-text">Gestión de Editor Gestor</div>
						<div class="menu-caret"></div>
					</a>
					<div class="menu-submenu">
						<div class="menu-item"><a id="enviar_rechazar_trabajo_eg" href="javascript:;" class="menu-link"><div class="menu-text">Enviar/Rechazar Trabajos</div></a></div>
					</div>
				</div>		


				<!-- MÓDULO EDITORES-->
				<div class="menu-item has-sub" id="menu_edicion">
					<a href="javascript:;" class="menu-link">
						<div class="menu-icon">
							<i class="fa fa-pencil-square"></i>
						</div>
						<div class="menu-text">Editores</div>
						<div class="menu-caret"></div>
					</a>
					<div class="menu-submenu">
						<div class="menu-item has-sub" id="submenu_menu_geditor_principal">
							<a href="javascript:;" class="menu-link">
								<div class="menu-text">Editor Principal</div>
								<div class="menu-caret"></div>
							</a>
							<div class="menu-submenu">
								<div class="menu-item has-sub">
								</div>
								<div class="menu-item"><a id="gtrabajos_ep" href="javascript:;" class="menu-link"><div class="menu-text">Gestión de Trabajos</div></a></div>
								<div class="menu-item"><a id="dictaminar_resultado_trabajos" href="javascript:;" class="menu-link"><div class="menu-text">Dictaminar Trabajo</div></a></div>
								<div class="menu-item"><a id="gpremios_ep" href="javascript:;" class="menu-link"><div class="menu-text">Gestión de Premios</div></a></div>
							</div>
						</div>
						<div class="menu-item has-sub">
							<a href="javascript:;" class="menu-link">
								<div class="menu-text">Editor Principal de Sección</div>
								<div class="menu-caret"></div>
							</a>
							<div class="menu-submenu" id="submenu_menu_geditor_p_seccion">
								<div class="menu-item has-sub">
								</div>
								<div class="menu-item"><a id="gtrabajos_eps" href="javascript:;" class="menu-link"><div class="menu-text">Gestión de Trabajos</div></a></div>
								<div class="menu-item"><a id="dictaminar_resultado_eps" href="javascript:;" class="menu-link"><div class="menu-text">Dictaminar Trabajo</div></a></div>
							</div>
						</div>
						<div class="menu-item has-sub" id="submenu_menu_geditor_s_seccion">
							<a href="javascript:;" class="menu-link">
								<div class="menu-text">Editor Secundario de Sección</div>
								<div class="menu-caret"></div>
							</a>
							<div class="menu-submenu">
								<div class="menu-item has-sub">
								</div>
								<div class="menu-item" ><a id="gtrabajos_ess" href="javascript:;" class="menu-link"><div class="menu-text">Gestión de Trabajos</div></a></div>
							</div>
						</div>
					</div>
				</div>

				<!-- MÓDULO GESTIÓN REVISOR-->
				<div class="menu-item has-sub" id="menu_grevisor">
					<a href="javascript:;" class="menu-link">
						<div class="menu-icon">
							<i class="fa fa-check-square"></i>
						</div>
						<div class="menu-text">Gestión Revisor</div>
						<div class="menu-caret"></div>
					</a>
					<div class="menu-submenu">
						<div class="menu-item"><a id="solicitud_revisiones_pendientes_r" href="javascript:;"  class="menu-link"><div class="menu-text">Trabajos a Revisar</div></a></div>
					</div>
				</div>	


				<!-- MÓDULO GESTIÓN ASISTENTE-->
				<div class="menu-item has-sub" id="menu_gasistente" >
					<a href="javascript:;" class="menu-link">
						<div class="menu-icon">
							<i class="fas fa-id-badge"></i>
						</div>
						<div class="menu-text">Gestión Asistente</div>
						<div class="menu-caret"></div>
					</a>
					<div class="menu-submenu">
						<div class="menu-item"><a id="consultar_programa_congreso" href="javascript:;"  class="menu-link"><div class="menu-text">Consultar Programa</div></a></div>
						<div class="menu-item"><a id="ver_noticias" href="javascript:;" class="menu-link"><div class="menu-text">Ver Noticias</div></a></div>
						<div class="menu-item has-sub" id="submenu_gasistente_gitinerario">
							<a href="javascript:;" class="menu-link">
								<div class="menu-text">Gestión de Itinerario</div>
								<div class="menu-caret"></div>
							</a>
							<div class="menu-submenu" id="submenu_gasistente_gitinerario">
								<div class="menu-item has-sub">
								</div>
								<div class="menu-item"><a id="crear_itinerario" href="javascript:;"  class="menu-link"><div class="menu-text">Crear Itinerario</div></a></div>
								<div class="menu-item"><a id="modificar_itinerario" href="javascript:;"  class="menu-link"><div class="menu-text">Modificar Itinerario</div></a></div>
							</div>
						</div>
					</div>
				</div>	

				<!-- MÓDULO GESTIÓN FORMULARIOS DE REVISIÓN-->
				<div class="menu-item has-sub" id="menu_gformulario">
					<a href="javascript:;" class="menu-link">
						<div class="menu-icon">
							<i class="fas fa-archive"></i>
						</div>
						<div class="menu-text">Gestión Formularios de Revisión</div>
						<div class="menu-caret"></div>
					</a>
					<div class="menu-submenu">
						<div class="menu-item"><a id="crear_formulario" href="javascript:;"  class="menu-link"><div class="menu-text">Crear Formulario de Revisón</div></a></div>
						<div class="menu-item"><a id="asociar_formulario" href="javascript:;"  class="menu-link"><div class="menu-text">Asociar Formulario a Temática</div></a></div>
						<div class="menu-item"><a id="modificar_formulario" href="javascript:;"  class="menu-link"><div class="menu-text">Modificar Formulario de Revisón</div></a></div>
					</div>
				</div>	


				<!-- MÓDULO GESTIÓN DE ROLES-->
				<div class="menu-item has-sub" id="menu_groles" >
					<a href="javascript:;" class="menu-link">
						<div class="menu-icon">
							<i class="fas fa-user-cog"></i>
						</div>
						<div class="menu-text">Gestión de Roles</div>
						<div class="menu-caret"></div>
					</a>
					<div class="menu-submenu">
						<div class="menu-item"><a  id="sol_revision" href="javascript:;"   class="menu-link"><div class="menu-text">Gestión de Roles</div></a></div>
					</div>
				</div>

				<!-- BEGIN minify-button -->
				<div class="menu-item d-flex">
					<a href="javascript:;" class="app-sidebar-minify-btn ms-auto" data-toggle="app-sidebar-minify"><i class="fa fa-angle-double-left"></i></a>
				</div>
				<!-- END minify-button -->
			</div>
			<!-- END menu -->
		</div>
		<!-- END scrollbar -->
	</div>
	<div class="app-sidebar-bg"></div>
	<div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile" class="stretched-link"></a></div>
	<!-- END #sidebar -->
	
	<div data-id="app-extra-elm"></div>
	
	<!-- begin #content -->
	<div id="content" class="app-content"></div>
	<!-- END #content -->
	
	<!-- BEGIN scroll-top-btn -->
	<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
	<!-- END scroll-top-btn -->
</div>
<!-- END #app -->

	<!-- ================== BEGIN core-js ================== -->
	<script>
		$.when().done(function() {
			
			$.when().done(function() {
				$.getScript('../assets/plugins/jquery-sparkline/jquery.sparkline.min.js').done(function() {
					
				});
			});
		});

	</script>

	

	<script src="../assets/js/vendor.min.js"></script>
	<script src="../assets/js/app.min.js"></script>

	<script>
	
		App.settings({
			ajaxMode: true,
			ajaxDefaultUrl: '#pages/index.html',
			ajaxType: 'GET',
			ajaxDataType: 'html'
		});
		
	</script>

	<!-- ================== END core-js ================== -->

	<!--   Script para Gestión de Roles --> 
	<script src="./js/fnc_tbl.js"></script>
	<script src="./js/mostrar_form.js"></script>
	
	<?php /*
	 if (isset($_GET['page']) && $_GET['page'] === 'ver_trabajos') { ?>
		<script> $("#trabajos_subidos").click(); </script>
	<?php } */ ?>

</body>
</html>


