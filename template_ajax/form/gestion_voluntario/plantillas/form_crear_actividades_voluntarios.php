
<!-- BEGIN breadcrumb -->
<ol class="breadcrumb float-xl-end">
	<li class="breadcrumb-item"><a href="javascript:;">Inicio</a></li>
	<li class="breadcrumb-item"><a href="javascript:;">Gestión Voluntarios</a></li>
	<li class="breadcrumb-item active">Crear actividad</li>
</ol>
<!-- END breadcrumb -->
<!-- BEGIN page-header -->
<h1 class="page-header">Gestión de Voluntarios<small></small></h1>
<!-- END page-header -->
<!-- BEGIN row -->
<div class="row">
	<!-- BEGIN col-6 -->
	<div class="col-xl-12">
		<!-- BEGIN panel -->
		<div class="panel panel-inverse" data-sortable-id="form-validation-1">
			<!-- BEGIN panel-heading -->
			<div class="panel-heading">
				<h4 class="panel-title">Crear Actividad</h4>
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
			<form enctype="multipart/form-data" method='POST' name='form_actividades_voluntarios'  id='form_actividades_voluntarios' class='form-horizontal form-bord forered' data-parsley-validate='true'> 
					<div class="form-group row mb-3">
						<label class="col-lg-4 col-form-label form-label" for="fullname">Nombre* :</label>
						<div class="col-lg-6">
							<input class="form-control" type="text" id="nombre_actividad" name="nombre_actividad" placeholder="Escriba Nombre de la Actividad" data-parsley-required="true" />
						</div>
					</div>
					<div class="form-group row mb-3">
						<label class="col-lg-4 col-form-label form-label" for="message">Descripción:</label>
						<div class="col-lg-6">
							<textarea class="form-control" id="desc_actividad" name="desc_actividad"  rows="2" data-parsley-minlength="20" data-parsley-maxlength="100" placeholder="Escriba una breve descripción de la actividad" data-parsley-required="true"></textarea>
						</div>
					</div>
					<div class="form-group row mb-3">
						<label class="col-lg-4 col-form-label form-label" for="message">Cantidad de horas:</label>
						<div class="col-lg-6">
						<div class="input-group">
						<input type="number" id="horas_sumar" name="horas_sumar" min="0"  class="form-control" placeholder="Cantidad de horas" data-parsley-required="true"/>
					    </div>
						</div>
					</div>
					<div class="form-group row mb-3">
						<label class="col-lg-4 col-form-label form-label" for="fullname">Persona de Apoyo* :</label>
						<div class="col-lg-6">
							<input class="form-control" type="text" id="persona_apoyo" name="persona_apoyo" placeholder="Persona de Apoyo" data-parsley-required="true" />
						</div>
					</div>
                    <div class="form-group row mb-3">
						<label class="col-lg-4 col-form-label form-label" for="fullname">Fecha de la actividad :</label>
						<div class="col-lg-6">
							<input class="form-control" type="date" id="fecha_actividad_voluntario" name="fecha_actividad_voluntario" placeholder="Persona de Apoyo" data-parsley-required="true" />
						</div>
					</div>
					<!----
                    <div class="form-group row mb-3">
						<label class="col-lg-4 col-form-label form-label" for="fullname">Fecha de la actividad :</label>
						<div class="col-lg-8">
							<input class="form-control" type="date" id="fecha_actividad_voluntario" name="fecha_actividad_voluntario" placeholder="Persona de Apoyo" data-parsley-required="true" />
						</div>
					</div>---->

                    <div class="form-group row mb-3">
						<label class="col-lg-4 col-form-label form-label">Archivo Completmentario:</label>
						<div class="col-lg-6">
                        <input type="file" id="archio_complementario" name="archio_complementario"  class="form-control" />
						</div>
					</div>
					<br>
					<div class="form-group row">
						<label class="col-lg-4 col-form-label form-label">&nbsp;</label>
						<div class="col-lg-6">
							<input type="hidden" name="id" id="id">
							<input type="hidden" name="caso" id="caso" value="guardar_actividades_voluntarios">
							<a onclick="guardar_actividades_voluntarios();" id="btn_guardar_actividad_voluntario" value="btn_guardar_actividad_voluntario"  type="submit" class="btn btn-primary">Guardar</a>
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
	<div class="col-xl-12" >
		<!-- BEGIN panel -->
		<div class="panel panel-inverse" data-sortable-id="form-validation-2">
			<!-- BEGIN panel-heading -->
			<div class="panel-heading">
				<h4 class="panel-title">Lista de Actividades</h4>
				<div class="panel-heading-btn">
					<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
				</div>
			</div>
			
            <!-- BEGIN panel-body -->
			<div class="panel-body">
				<table  id="tbl_actividades_voluntarios" name="tbl_actividades_voluntarios" class="table table-striped table-bordered align-middle display responsive no-wrap" width="100%">
					<thead>
						<tr>
						<!---
							<th width="1%">N.</th>
							<th class="text-nowrap">Primer Nombre</th>
							<th class="text-nowrap">Segundo Nombre</th>
							<th class="text-nowrap">Primer Apellido</th>
							<th class="text-nowrap">Segundo Apellido</th>
							<th class="text-nowrap">Actividades Asignadas</th>
							<th class="text-nowrap">Acciones</th>
						--->
							<th width="1%">N.</th>
							<th class="text-nowrap">Nombre actividad</th>
							<th class="text-nowrap">Descripción</th>
							<th class="text-nowrap">Persona apoyo</th>
							<th class="text-nowrap">Fecha tarea</th>
							<th class="text-nowrap">Horas</th>
							<th class="text-nowrap">Acciones</th>
						</tr>
					</thead>
				
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
	App.setPageTitle('.:CCE:.');
	$.getScript('../assets/plugins/datatables.net/js/jquery.dataTables.min.js'); //Datatable
	$.getScript('../assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js');//bootstrap style
	$.getScript('../assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js');//table responsive
	$.getScript('../assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js');//buttons 
	$.getScript('../assets/plugins/datatables.net-buttons/js/buttons.html5.min.js');//all functions
	$.getScript('../assets/plugins/pdfmake/build/pdfmake.min.js');//pdf 
	$.getScript('../assets/plugins/jszip/dist/jszip.min.js');//excel
	$.getScript('../assets/js/tables/table_cactividad_voluntario.js');
	$.getScript('./js/gestion_voluntario/form_crear_actividades_voluntarios.js');

</script>
<!-- ================== END core-js ================== -->

