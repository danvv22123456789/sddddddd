

<!-- BEGIN breadcrumb -->
<ol class="breadcrumb float-xl-end">
	<li class="breadcrumb-item"><a href="javascript:;">Inicio</a></li>
	<li class="breadcrumb-item"><a href="javascript:;">Gestión de roles</a></li>
	<li class="breadcrumb-item active">Roles</li>
</ol>
<!-- END breadcrumb -->
<!-- BEGIN page-header -->
<h1 class="page-header">Gestión de Roles<small></small></h1>
<!-- END page-header -->
<!-- BEGIN panel -->




<div class="row">

	<div class="col-xl-12">

		<div class="panel panel-inverse">
			<!-- BEGIN panel-heading -->
			<div class="panel-heading">
				<h4 class="panel-title">Congresos</h4>
				<div class="panel-heading-btn">
					<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
				</div>
			</div>
			<!-- END panel-heading -->

			<!-- BEGIN panel-heading -->
			<div class="panel-body">
				<div class="container">
					<div class="row">
						<div class="form-group row mb-3">
							<label class="col-lg-12 col-form-label form-label text-center">
								<h3>Seleccione el Congreso:</h3>
							</label>
							<div class="col-lg-12">
								<select class="form-select" id="congresos" name="congresos" onchange="muestra_tematica()">
								
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END panel-body -->

		</div>
	</div>




	<div class="col-xl-4">
		<div class="panel panel-inverse">
			<!-- BEGIN panel-heading -->
			<div class="panel-heading">
				<h4 class="panel-title">Creación de Roles</h4>
				<div class="panel-heading-btn">
					<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
				</div>
			</div>
			<!-- END panel-heading -->

			<!-- BEGIN panel-heading -->
			<div class="panel-body">
				<form class="form-horizontal" data-parsley-validate="true" method="POST" id="form_congresos" name="form_congresos" role="form" role="form">
					<!-- BEGIN nav-tabs -->
					<ul id="ioniconsTab" class="nav nav-pills flex-column">
						<li class="nav-item"><a href="#s_revision" data-bs-toggle="tab" class="nav-link active d-flex align-items-center"><ion-icon name="aperture-outline" class="fs-10px"></ion-icon><span class="d-none d-lg-inline ms-2">Solicitudes de Revisión</span>&nbsp;</a></li>
						<li class="nav-item"><a href="#irevisores" data-bs-toggle="tab" class="nav-link d-flex align-items-center"><ion-icon name="aperture" class="fs-10px"></ion-icon><span class="d-none d-lg-inline ms-2">Revisores</span>&nbsp;</a></li>
						<li class="nav-item"><a href="#ieditores_gestores" data-bs-toggle="tab" class="nav-link d-flex align-items-center"><ion-icon name="aperture" class="fs-10px"></ion-icon><span class="d-none d-lg-inline ms-2">Editor Gestor</span>&nbsp;</a></li>
						<li class="nav-item"><a href="#ieditores_principales" data-bs-toggle="tab" class="nav-link d-flex align-items-center"><ion-icon name="aperture" class="fs-10px"></ion-icon><span class="d-none d-lg-inline ms-2">Editores Principales</span>&nbsp;</a></li>
						<li class="nav-item"><a href="#ieditores_pseccion" data-bs-toggle="tab" class="nav-link  d-flex align-items-center"><ion-icon name="aperture" class="fs-10px"></ion-icon><span class="d-none d-lg-inline ms-2">Editores Principales de Sección</span>&nbsp;</a></li>
						<li class="nav-item"><a href="#ieditores_sseccion" data-bs-toggle="tab" class="nav-link d-flex align-items-center"><ion-icon name="aperture" class="fs-10px"></ion-icon><span class="d-none d-lg-inline ms-2">Editores Secundarios de Sección</span>&nbsp;</a></li>
						<li class="nav-item"><a href="#iencargado_programa" data-bs-toggle="tab" class="nav-link d-flex align-items-center"><ion-icon name="aperture" class="fs-10px"></ion-icon><span class="d-none d-lg-inline ms-2">Encargado de Programa</span>&nbsp;</a></li>
						<li class="nav-item"><a href="#iencargado_vol" data-bs-toggle="tab" class="nav-link d-flex align-items-center"><ion-icon name="aperture" class="fs-10px"></ion-icon><span class="d-none d-lg-inline ms-2">Encargado Voluntarios</span>&nbsp;</a></li>
						<li class="nav-item"><a href="#intereses_revisor" data-bs-toggle="tab" class="nav-link d-flex align-items-center"><ion-icon name="aperture" class="fs-10px"></ion-icon><span class="d-none d-lg-inline ms-2">Intereses Revisor</span>&nbsp;</a></li>
					</ul>
					<!-- END nav-tabs -->
					<hr class="bg-gray-500" />


				</form>
			</div> <!-- END panel-body -->
		</div>
	</div>




	<!-- INICIO SECCIÓN DE TABLAS-->
	<div class="col-xl-8">

		<!-- BEGIN tab-content -->
		<div id="ioniconsTabContent" class="tab-content rounded-bottom fs-13px">


			<!-- INICIO TABLA SOLICITUDES DE REVISIÓN -->
			<div class="tab-pane fade show active" id="s_revision">
				<!-- BEGIN row -->
				<div class="row">
					<div class="container">

						<!-- BEGIN TABLA -->
						<div class="panel panel-inverse" data-sortable-id="form-validation-2">
							<!-- BEGIN panel-heading -->
							<div class="panel-heading">
								<h4 class="panel-title">Lista Solicitudes de Revisión</h4>
								<div class="panel-heading-btn">
									<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
									<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
									<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
									<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
								</div>
							</div>

							<!-- BEGIN panel-body -->
							<div class="panel-body">
								<table id="tbl_s_revision" name="tbl_s_revision" class="table table-striped table-bordered align-middle display responsive no-wrap" width="100%">
									<thead>
										<tr>
											<th width="1%">N.</th>
											<th class="text-nowrap">Nombre de Usuario</th>
											<th class="text-nowrap">Nombres</th>
											<th class="text-nowrap">Motivo</th> 
											<th class="text-nowrap">Fecha de Solicitud</th>
											<th class="text-nowrap">Acción</th>
											<th></th>
										</tr>
									</thead>

								</table>
							</div>
							<!-- END panel-body -->
						</div>
						<!-- END TABLA -->

					</div><!-- END container -->
				</div><!-- END ROW -->
			</div>
			<!-- FIN TABLA SOLICITUDES DE REVISIÓN -->


				<!-- BEGIN ENCARGADO VOLUNTARIOS -->
				<div class="tab-pane fade" id="irevisores">
				<div class="row">
					<div class="container">
						<!-- BEGIN TABLA -->
						<div class="panel panel-inverse" data-sortable-id="form-validation-2">
							<!-- BEGIN panel-heading -->
							<div class="panel-heading">
								<h4 class="panel-title">Lista De Revisores</h4>
								<div class="panel-heading-btn">
									<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
									<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
									<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
									<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
								</div>
							</div>


							
							<!-- BEGIN panel-body -->
							<div class="panel-body">
								<table id="tbl_irevisores" name="tbl_irevisores" class="table table-striped table-bordered align-middle display responsive no-wrap" width="100%">
									<thead>
										<tr>
											<th width="1%">N.</th>
											<th class="text-nowrap">Nombre de usuario</th>
											<th class="text-nowrap"  id="rowinscri">Nombre</th>
											<th class="text-nowrap"  id="rowinscri">Acción</th>
											<th></th>
										</tr>
									</thead>

								</table>
												
							</div>
							<!-- END panel-body -->
						</div>
						<!-- END TABLA -->
					</div><!-- END container -->
				</div><!-- END ROW -->
			</div>
			<!-- END ENCARGADO VOLUNTARIOS -->

				<!-- BEGIN ENCARGADO VOLUNTARIOS -->
			<div class="tab-pane fade" id="ieditores_gestores">
				<div class="row">
					<div class="container">
						<!-- BEGIN TABLA -->
						<div class="panel panel-inverse" data-sortable-id="form-validation-2">
							<!-- BEGIN panel-heading -->
							<div class="panel-heading">
								<h4 class="panel-title">Lista gestores</h4>
								<div class="panel-heading-btn">
									<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
									<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
									<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
									<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
								</div>
							</div>


							
							<!-- BEGIN panel-body -->
							<div class="panel-body">
								<table id="tbl_ieditores_gestores" name="tbl_ieditores_gestores" class="table table-striped table-bordered align-middle display responsive no-wrap" width="100%">
									<thead>
										<tr>
											<th width="1%">N.</th>
											<th class="text-nowrap">Nombre de usuario</th>
											<th class="text-nowrap"  id="rowinscri">Nombre</th>
											<th class="text-nowrap"  id="rowinscri">Acción</th>
											<th></th>
										</tr>
									</thead>

								</table>
												
							</div>
							<!-- END panel-body -->
						</div>
						<!-- END TABLA -->
					</div><!-- END container -->
				</div><!-- END ROW -->
			</div>
			<!-- END ENCARGADO VOLUNTARIOS -->


				<!-- BEGIN ENCARGADO VOLUNTARIOS -->
				<div class="tab-pane fade" id="ieditores_principales">
				<div class="row">
					<div class="container">
						<!-- BEGIN TABLA -->
						<div class="panel panel-inverse" data-sortable-id="form-validation-2">
							<!-- BEGIN panel-heading -->
							<div class="panel-heading">
								<h4 class="panel-title">Lista Editores Principal</h4>
								<div class="panel-heading-btn">
									<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
									<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
									<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
									<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
								</div>
							</div>


							
							<!-- BEGIN panel-body -->
							<div class="panel-body">
								<table id="tbl_ieditores_principales" name="tbl_ieditores_principales" class="table table-striped table-bordered align-middle display responsive no-wrap" width="100%">
									<thead>
										<tr>
											<th width="1%">N.</th>
											<th class="text-nowrap">Nombre de usuario</th>
											<th class="text-nowrap"  id="rowinscri">Nombre</th>
											<th class="text-nowrap"  id="rowinscri">Acción</th>
											<th></th>	
										</tr>
									</thead>

								</table>
												
							</div>
							<!-- END panel-body -->
						</div>
						<!-- END TABLA -->
					</div><!-- END container -->
				</div><!-- END ROW -->
			</div>
			<!-- END ENCARGADO VOLUNTARIOS -->

			<!-- BEGIN ENCARGADO VOLUNTARIOS -->
			<div class="tab-pane fade" id="ieditores_pseccion">
				<div class="row">
					<div class="container">
						<!-- BEGIN TABLA -->
						<div class="panel panel-inverse" data-sortable-id="form-validation-2">
							<!-- BEGIN panel-heading -->
							<div class="panel-heading">
								<h4 class="panel-title">Lista De Editores Principales De Sección</h4>
								<div class="panel-heading-btn">
									<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
									<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
									<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
									<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
								</div>
							</div>


							
							<!-- BEGIN panel-body -->
							<div class="panel-body">
								<table id="tbl_ieditores_pseccion" name="tbl_ieditores_pseccion" class="table table-striped table-bordered align-middle display responsive no-wrap" width="100%">
									<thead>
										<tr>
											<th width="1%">N.</th>
											<th class="text-nowrap">Nombre de usuario</th>
											<th class="text-nowrap"  id="rowinscri">Nombre</th>
											<th class="text-nowrap"  id="rowinscri">Acción</th>
											<th></th>
										</tr>
									</thead>

								</table>
												
							</div>
							<!-- END panel-body -->
						</div>
						<!-- END TABLA -->
					</div><!-- END container -->
				</div><!-- END ROW -->
			</div>
			<!-- END ENCARGADO VOLUNTARIOS -->

			<!-- BEGIN ENCARGADO VOLUNTARIOS -->
			<div class="tab-pane fade" id="ieditores_sseccion">
				<div class="row">
					<div class="container">
						<!-- BEGIN TABLA -->
						<div class="panel panel-inverse" data-sortable-id="form-validation-2">
							<!-- BEGIN panel-heading -->
							<div class="panel-heading">
								<h4 class="panel-title">Lista Editores Secundarios De Sección</h4>
								<div class="panel-heading-btn">
									<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
									<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
									<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
									<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
								</div>
							</div>


							
							<!-- BEGIN panel-body -->
							<div class="panel-body">
								<table id="tbl_ieditores_sseccion" name="tbl_ieditores_sseccion" class="table table-striped table-bordered align-middle display responsive no-wrap" width="100%">
									<thead>
										<tr>
											<th width="1%">N.</th>
											<th class="text-nowrap">Nombre de usuario</th>
											<th class="text-nowrap"  id="rowinscri">Nombre</th>
											<th class="text-nowrap"  id="rowinscri">Acción</th>
											<th></th>
										</tr>
									</thead>

								</table>
												
							</div>
							<!-- END panel-body -->
						</div>
						<!-- END TABLA -->
					</div><!-- END container -->
				</div><!-- END ROW -->
			</div>
			<!-- END ENCARGADO VOLUNTARIOS -->

			<!-- BEGIN ENCARGADO VOLUNTARIOS -->
			<div class="tab-pane fade" id="iencargado_programa">
				<div class="row">
					<div class="container">
						<!-- BEGIN TABLA -->
						<div class="panel panel-inverse" data-sortable-id="form-validation-2">
							<!-- BEGIN panel-heading -->
							<div class="panel-heading">
								<h4 class="panel-title">Lista De Encargado de programas</h4>
								<div class="panel-heading-btn">
									<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
									<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
									<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
									<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
								</div>
							</div>


							
							<!-- BEGIN panel-body -->
							<div class="panel-body">
								<table id="tbl_iencargado_programa" name="tbl_iencargado_programa" class="table table-striped table-bordered align-middle display responsive no-wrap" width="100%">
									<thead>
										<tr>
											<th width="1%">N.</th>
											<th class="text-nowrap">Nombre de usuario</th>
											<th class="text-nowrap"  id="rowinscri">Nombre</th>
											<th class="text-nowrap"  id="rowinscri">Acción</th>
											<th></th>
										</tr>
									</thead>

								</table>
												
							</div>
							<!-- END panel-body -->
						</div>
						<!-- END TABLA -->
					</div><!-- END container -->
				</div><!-- END ROW -->
			</div>
			<!-- END ENCARGADO VOLUNTARIOS -->

			<!-- BEGIN ENCARGADO VOLUNTARIOS -->
			<div class="tab-pane fade" id="iencargado_vol">
				<div class="row">
					<div class="container">
						<!-- BEGIN TABLA -->
						<div class="panel panel-inverse" data-sortable-id="form-validation-2">
							<!-- BEGIN panel-heading -->
							<div class="panel-heading">
								<h4 class="panel-title">Lista De Encargados Voluntarios</h4>
								<div class="panel-heading-btn">
									<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
									<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
									<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
									<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
								</div>
							</div>


							
							<!-- BEGIN panel-body -->
							<div class="panel-body">
								<table id="tbl_iencargado_vol" name="tbl_iencargado_vol" class="table table-striped table-bordered align-middle display responsive no-wrap" width="100%">
									<thead>
										<tr>
											<th width="1%">N.</th>
											<th class="text-nowrap">Nombre de usuario</th>
											<th class="text-nowrap"  id="rowinscri">Nombre</th>
											<th class="text-nowrap"  id="rowinscri">Acción</th>
											<th></th>
										</tr>
									</thead>

								</table>
												
							</div>
							<!-- END panel-body -->
						</div>
						<!-- END TABLA -->
					</div><!-- END container -->
				</div><!-- END ROW -->
			</div>
			<!-- END ENCARGADO VOLUNTARIOS -->
			

				<!-- BEGIN ENCARGADO VOLUNTARIOS -->
			<div class="tab-pane fade" id="intereses_revisor">
				<div class="row">
					<div class="container">
						<!-- BEGIN TABLA -->
						<div class="panel panel-inverse" data-sortable-id="form-validation-2">
							<!-- BEGIN panel-heading -->
							<div class="panel-heading">
								<h4 class="panel-title">Lista Interés Revisor</h4>
								<div class="panel-heading-btn">
									<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
									<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
									<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
									<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
								</div>
							</div>


							
							<!-- BEGIN panel-body -->
							<div class="panel-body">
								<table id="tbl_intereses" name="tbl_intereses" class="table table-striped table-bordered align-middle display responsive no-wrap" width="100%">
									<thead>
										<tr>
											<th width="1%">N.</th>
											<th class="text-nowrap">Nombre de Temática</th>
											<th class="text-nowrap"  id="rowinscri">Inscribir</th>
										</tr>
									</thead>

								</table>
												
							</div>
							<!-- END panel-body -->
						</div>
						<!-- END TABLA -->
					</div><!-- END container -->
				</div><!-- END ROW -->
			</div>
			<!-- END ENCARGADO VOLUNTARIOS -->

		</div><!-- FIN FIN DE TABLAS -->
	</div>



						

		<script>
			App.setPageTitle('.:CCE:.');
			$.getScript('../assets/plugins/datatables.net/js/jquery.dataTables.min.js'); //Datatable
			$.getScript('../assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js');//bootstrap style
			$.getScript('../assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js');//table responsive
			$.getScript('../assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js');//buttons 
			$.getScript('../assets/plugins/datatables.net-buttons/js/buttons.html5.min.js');//all functions
			$.getScript('../assets/plugins/pdfmake/build/pdfmake.min.js');//pdf 
			//$.getScript('../assets/plugins/jszip/dist/jszip.min.js');//excel

			// $.getScript('../assets/js/tables/table_creacion_roles/table_revisores.js');
			
			
			
			$.getScript('../assets/js/tables/table_creacion_roles/table_encargado_voluntario.js')

			$.getScript('../assets/js/tables/table_creacion_roles/table_revisores.js');
			$.getScript('../assets/js/tables/table_creacion_roles/table_editor_gestor.js');
			$.getScript('../assets/js/tables/table_creacion_roles/table_editor_principal.js');
			$.getScript('../assets/js/tables/table_creacion_roles/table_editor_principal_seccion.js');
			$.getScript('../assets/js/tables/table_creacion_roles/table_editor_secundario_seccion.js');
			$.getScript('../assets/js/tables/table_creacion_roles/table_encargado_programa.js');
			$.getScript('../assets/js/tables/table_creacion_roles/table_interes_revisor.js');
			$.getScript('../assets/js/tables/table_creacion_roles/table_solicitudes_revision.js');
			$.getScript('./js/gestion_roles/gestion_roles.js');
			$.getScript('./js/fnc_slc.js');



		</script>
		