

<!-- BEGIN breadcrumb -->
<ol class="breadcrumb float-xl-end">
	<li class="breadcrumb-item"><a href="javascript:;">Inicio</a></li>
	<li class="breadcrumb-item"><a href="javascript:;">Gestión de Actividad</a></li>
	<li class="breadcrumb-item active">Crear Actividad</li>
</ol>
<!-- END breadcrumb -->
<!-- BEGIN page-header -->
<h1 class="page-header">Gestión de Actividades<small></small></h1>
<!-- END page-header -->
<!-- BEGIN row -->
<div class="row">
	<!-- BEGIN col-6 -->
	<div class="col-xl-12">
		<!-- BEGIN panel -->
		<div class="panel panel-inverse" data-sortable-id="form-validation-1">
			<!-- BEGIN panel-heading -->
			<div class="panel-heading">
				<h4 class="panel-title">Administración de Actividades</h4>
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
				<form class="form-horizontal" data-parsley-validate="true" method='POST' name='form_actividades'  id='form_actividades'  role="form">
                
                <div class="container">
                <div class="row">
                <div class="col-sm-6 col-md-5 col-lg-6">
                        
                <div class="form-group row mb-3">
						<label class="col-lg-4 col-form-label form-label" for="fullname">Nombre de la Actividad* :</label>
						<div class="col-lg-8">
							<input class="form-control" type="text" name="nombre_actividad" id="nombre_actividad" placeholder="Escriba Nombre de la actividad" data-parsley-required="true" />
						</div>
					</div>
                    <div class="form-group row mb-3">
						<label class="col-lg-4 col-form-label form-label" for="fullname">Responsable* :</label>
						<div class="col-lg-8">
							<select class="form-select" id="responsable" name="responsable" data-parsley-required="true">
								<option value="0">Seleccione una opción</option>
								<option value="1">Gravado</option>
								<option value="2">Exento</option>
							</select>
						</div>
					</div>
                    <div class="form-group row mb-3">
						<label class="form-label col-form-label col-lg-4">Fecha de la actividad</label>
						<div class="col-lg-8">
							<input type="date" class="form-control"   id="fecha" name="fecha" placeholder="Seleccione la fecha" data-parsley-required="true" />
						</div>
					</div>
                        
                    <div class="form-group row mb-3">
					<label class="form-label col-form-label col-lg-4">Hora de Inicio</label>
						<div class="col-lg-8">
							<div class="input-group bootstrap-timepicker">
								<input id="hora_inicio" name="hora_inicio" type="time" class="form-control" data-parsley-required="true" />
							</div>
						</div>
					</div>
					
					<div class="form-group row mb-3">
					<label class="form-label col-form-label col-lg-4">Hora de finalización</label>
						<div class="col-lg-8">
							<div class="input-group bootstrap-timepicker">
								<input id="hora_fin" name="hora_fin" type="time" class="form-control" data-parsley-required="true" />
							</div>
						</div>
					</div>
                </div>

                <div class="col-sm-6 col-md-5 col-lg-6">

                    <div class="form-group row mb-3">
                            <label class="col-lg-4 col-form-label form-label" for="message">Comentarios:</label>
                            <div class="col-lg-8">
                                <textarea class="form-control" id="comentarios" name="comentarios"  rows="4" data-parsley-minlength="20" data-parsley-maxlength="100" placeholder="Escriba los comentatios" data-parsley-required="true"></textarea>
                            </div>
                        </div>
						
						<div class="form-group row mb-3">
						<label class="col-lg-4 col-form-label form-label">Espacio de Actividad:</label>
						<div class="col-lg-8">
							<select class="form-select" id="espacio_actividad" name="espacio_actividad" data-parsley-required="true">
								<option value="0">Seleccione una opción</option>
								<option value="1">Gravado</option>
								<option value="2">Exento</option>
							</select>
						</div>
						</div>
						<div class="form-group row mb-3">
						<label class="col-lg-4 col-form-label form-label">Tipo de Actividad:</label>
						<div class="col-lg-8">
							<select class="form-select"  id="tactividad" name="tactividad" data-parsley-required="true">
								<option value="0">Seleccione una opción</option>
								<option value="1">Gravado</option>
								<option value="2">Exento</option>
							</select>
						</div>
						</div>
						<div class="form-group row mb-3">
						<label class="col-lg-4 col-form-label form-label">Temática Asociada:</label>
						<div class="col-lg-8">
							<select class="form-select"  id="tematicas_trabajo" name="tematicas_trabajo" data-parsley-required="true">
								<option value="0">Seleccione una opción</option>
								<option value="1">Gravado</option>
								<option value="2">Exento</option>
							</select>
						</div>
						</div>
                </div>
                </div>
                </div>

                <br>
					<div class="form-group row ">
						<label class="col-lg-4 col-form-label form-label">&nbsp;</label>
						<div class="col-lg-8">
							<input type='hidden' name='caso' id='caso' value='insertar_actividad'/>
                            <input type='hidden' name='id' id='id' value='0'/>
							<a onclick="guardar_actividad();" id="btn_guardar_actividad" class="btn btn-primary" type="submit">Guardar</a>
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
				<h4 class="panel-title">Actividades Creadas</h4>
				<div class="panel-heading-btn">
					<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
				</div>
			</div>
			

            <!-- BEGIN panel-body -->
			<div class="panel-body">
				<table id="tbl_generacion_actividades" name="tbl_generacion_actividades" class="table table-striped table-bordered align-middle display responsive no-wrap" width="100%">
					<thead>
						<tr>
							<th width="1%">N.</th>
							<th class="text-nowrap">Nombre de Actividad</th>
							<th class="text-nowrap">Responsable</th>
							<th class="text-nowrap">Descripción</th>
                            <th class="text-nowrap">Hora Inicio</th>
                            <th class="text-nowrap">Hora Fin</th>
                            <th class="text-nowrap">Acciones</th>
						</tr>
					</thead>
				<!--	<tbody>
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
	$.getScript('../assets/js/tables/table_generacion_actividades.js');
	$.getScript('./js/gestion_programa/form_actividades.js');
</script>
<!-- ================== END core-js ================== -->

