


<!-- BEGIN breadcrumb -->
<ol class="breadcrumb float-xl-end">
	<li class="breadcrumb-item"><a href="javascript:;">Inicio</a></li>
	<li class="breadcrumb-item"><a href="javascript:;">Gestión de Espacios</a></li>
	<li class="breadcrumb-item active">Crear Espacio</li>
</ol>
<!-- END breadcrumb -->
<!-- BEGIN page-header -->
<h1 class="page-header">Gestión de Espacios<small></small></h1>
<!-- END page-header -->
<!-- BEGIN row -->
<div class="row">
	<!-- BEGIN col-6 -->
	<div class="col-xl-12">
		<!-- BEGIN panel -->
		<div class="panel panel-inverse" data-sortable-id="form-validation-1">
			<!-- BEGIN panel-heading -->
			<div class="panel-heading">
				<h4 class="panel-title">Administración de Espacios</h4>
				<div class="panel-heading-btn">
					<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
				</div>
			</div>
			<!-- END panel-heading -->
			<!-- BEGIN panel-body -->
			<div class="panel-body">
				<form class="form-horizontal" data-parsley-validate="true" method='POST' name='form_espacios'  id='form_espacios'  role="form">
                
                <div class="container">
					<div class="row">
						<div class="col-sm-6 col-md-5 col-lg-6">
								
							<div class="form-group row mb-3">
								<label class="col-lg-4 col-form-label form-label" for="fullname">Nombre del Espacio* :</label>
								<div class="col-lg-8">
									<input class="form-control" type="text" id="nombre_espacio" name="nombre_espacio" placeholder="Escriba Nombre del Espacio" data-parsley-required="true" />
								</div>
							</div>
							<div class="form-group row mb-3">
								<label class="col-lg-4 col-form-label form-label" for="fullname">Nombre Alternativo* :</label>
								<div class="col-lg-8">
									<input class="form-control" type="text" id="nombre_alternativo" name="nombre_alternativo" placeholder="Escriba El Nombre Alternativo" data-parsley-required="true" />
								</div>
							</div>
								<div class="form-group row mb-3">
									<label class="col-lg-4 col-form-label form-label" for="message">Descripción:</label>
									<div class="col-lg-8">
										<textarea class="form-control" id="descripcion" name="descripcion"  rows="2" data-parsley-minlength="20" data-parsley-maxlength="100" placeholder="Escriba una breve descripción" data-parsley-required="true"></textarea>
									</div>
								</div>
								
							<div class="form-group row mb-3">
								<label class="col-lg-4 col-form-label form-label" for="message">Cantidad Máxima de personas:</label>
								<div class="col-lg-8">
								<div class="input-group">
								<input type="number"  min="0" id="cant_personas" name="cant_personas" rows="4" class="form-control" placeholder="0" data-parsley-required="true"/>
								</div>
								</div>
							</div>

						</div>

						<div class="col-sm-6 col-md-5 col-lg-6">
							<div class="form-group row mb-3">
									<label class="col-lg-4 col-form-label form-label" for="message">Cantidad de tomas de energía:</label>
									<div class="col-lg-8">
									<div class="input-group">
									<input type="number" id="cant_tomas" name="cant_tomas" min="0"  rows="4" class="form-control" placeholder="0" data-parsley-required="true"/>
									</div>
									</div>
								</div>

								<div class="form-group row mb-3">
									<label class="col-lg-4 col-form-label form-label">Mapa del espacio:</label>
									<div class="col-lg-8">
									<span id="nombre_archivo"></span>
									<input type="hidden" name="archivo_ant" id="archivo_ant">
									<input type="file" id="mapa_espacio" name="mapa_espacio" class="form-control" data-parsley-required="true" />
									</div>
								</div>
								<div class="form-group row mb-3">
									<label class="col-lg-4 col-form-label form-label" for="message">Comentarios adicionales</label>
									<div class="col-lg-8">
										<textarea class="form-control" id="comentarios_adicionales" name="comentarios_adicionales"  rows="4" data-parsley-minlength="20" data-parsley-maxlength="100" placeholder="Escriba una breve descripción" data-parsley-required="true"></textarea>
									</div>
								</div>

						</div>
					</div>
                </div>

                <br>
					<div class="form-group row ">
						<label class="col-lg-4 col-form-label form-label">&nbsp;</label>
						<div class="col-lg-8">
                            <input type='hidden' name='caso' id='caso' value='insertar_espacio'/>
                            <input type='hidden' name='idespacio' id='idespacio' value='0'/>
							<a onclick="guardar_espacio();" type="submit" id="btn_guardar_espacio" class="btn btn-primary">Guardar</a>
                        </div>
					</div>
                    
				</form>
			</div>
			<!-- END panel-body -->
		</div>
		<!-- END panel -->
	</div>
	<!-- END col-6 -->


	<!-- BEGIN col-6 -->
	<div class="col-xl-12">
		<!-- BEGIN panel -->
		<div class="panel panel-inverse" data-sortable-id="form-validation-2">
			<!-- BEGIN panel-heading -->
			<div class="panel-heading">
				<h4 class="panel-title">Espacios creados</h4>
				<div class="panel-heading-btn">
					<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
				</div>
			</div>
			
            <!-- BEGIN panel-body -->
			<div class="panel-body">
				<table id="tbl_administracion_espacios" name="tbl_administracion_espacios" class="table table-striped table-bordered align-middle display responsive no-wrap" width="100%">
					<thead>
						<tr>
							<th width="1%">N.</th>
							<th class="text-nowrap">Nombre del Espacio</th>
							<th class="text-nowrap">Nombre Alternativo</th>
							<th class="text-nowrap">Capacidad(Personas)</th>
                            <th class="text-nowrap">Cantidad de Tomas</th>
                            <th class="text-nowrap">Mapa del Espacio</th>
                            <th class="text-nowrap">Acciones</th>
						</tr>
					</thead>
					<!--<tbody>

					</tbody>-->
				</table>
			</div>
			<!-- END panel-body -->


		</div>
		<!-- END panel -->
	</div>
	<!-- END col-6 -->
</div>
<!-- END row -->




<!-- ================== BEGIN core-js ================== -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
<script>
	App.setPageTitle('.:CEAT:.');
	$.getScript('../assets/plugins/datatables.net/js/jquery.dataTables.min.js'); //Datatable
	$.getScript('../assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js');//bootstrap style
	$.getScript('../assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js');//table responsive
	$.getScript('../assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js');//buttons 
	$.getScript('../assets/plugins/datatables.net-buttons/js/buttons.html5.min.js');//all functions
	$.getScript('../assets/plugins/pdfmake/build/pdfmake.min.js');//pdf 
	$.getScript('../assets/plugins/jszip/dist/jszip.min.js');//excel
	$.getScript('../assets/js/tables/table_administracion_espacios.js');
	$.getScript('./js/fnc_slc.js');
	$.getScript('./js/gestion_programa/form_espacios.js');
</script>
<!-- ================== END core-js ================== -->

