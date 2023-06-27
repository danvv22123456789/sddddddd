

<!-- BEGIN breadcrumb -->
<ol class="breadcrumb float-xl-end">
	<li class="breadcrumb-item"><a href="javascript:;">Inicio</a></li>
	<li class="breadcrumb-item"><a href="javascript:;">Congresos</a></li>
	<li class="breadcrumb-item active">Gestión Temáticas de investigación</li>
</ol>
<!-- END breadcrumb -->
<!-- BEGIN page-header -->
<h1 class="page-header">Gestionar Temáticas de investigación<small></small></h1>
<!-- END page-header -->
<!-- BEGIN row -->
<div class="row">
	<!-- BEGIN col-6 -->
	<div class="col-xl-6">
		<!-- BEGIN panel -->
		<div class="panel panel-inverse" data-sortable-id="form-validation-1">
			<!-- BEGIN panel-heading -->
			<div class="panel-heading">
				<h4 class="panel-title">Gestionar Temáticas de investigación</h4>
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
				<form class="form-horizontal" data-parsley-validate="true" method="POST"  id = "form_tematica" name = "form_tematica" role="form">
					
                <div class="form-group row mb-3">
						<label class="form-label col-form-label col-lg-4">Línea de Investigación:</label>
						<div class="col-lg-8">
							<select id="lineas_investigacion"  name = "lineas_investigacion" class="default-select2 form-control" data-parsley-required="true">
							</select>
						</div>
					</div>

                    <div class="form-group row mb-3">
						<label class="col-lg-4 col-form-label form-label" for="fullname">Nombre* :</label>
						<div class="col-lg-8">
							<input class="form-control" type="text"  id = "nombretematica" name = "nombretematica" placeholder="Escriba el nombre de la temática" data-parsley-required="true" />
						</div>
					</div>
                    <div class="form-group row mb-3">
						<label class="col-lg-4 col-form-label form-label" for="fullname">Abreviación* :</label>
						<div class="col-lg-8">
							<input class="form-control" type="text" id = "abreviacion" name = "abreviacion" placeholder="Escriba la abreviación" data-parsley-required="true" />
						</div>
					</div>
					<div class="form-group row mb-3">
						<label class="col-lg-4 col-form-label form-label" for="message">Descripción:</label>
						<div class="col-lg-8">
							<textarea class="form-control" id = "descripcion_tematica" name = "descripcion_tematica"  rows="4" data-parsley-minlength="20" data-parsley-maxlength="100" placeholder="Escriba una breve descripción de la temática" data-parsley-required="true"></textarea>
						</div>
					</div>
                    <div class="form-group row mb-3">
						<label class="col-lg-4 col-form-label form-label" for="message">Comentario:</label>
						<div class="col-lg-8">
							<textarea class="form-control" id = "comentarios_tematica" name = "comentarios_tematica"  rows="4" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-required="true" placeholder="Escriba un breve comentario"></textarea>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-4 col-form-label form-label">&nbsp;</label>
						<div class="col-lg-8">
							<input type="hidden" value="crear_tematica" id="caso" name="caso">
							<input type="hidden" value="" id="id" name="id"/>
							<a id = "crear_tematica"  type="submit" class="btn btn-primary">Guardar</a>
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
	<div class="col-xl-6">
		<!-- BEGIN panel -->
		<div class="panel panel-inverse" data-sortable-id="form-validation-2">
			<!-- BEGIN panel-heading -->
			<div class="panel-heading">
				<h4 class="panel-title">Lista de temáticas</h4>
				<div class="panel-heading-btn">
					<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
				</div>
			</div>
			
            <!-- BEGIN panel-body -->
			<div class="panel-body">
				<table id="tbl_tematica" name="tbl_tematica" class="table table-striped table-bordered align-middle display responsive no-wrap" width="100%">
					<thead>
						<tr>
							<th class="text-nowrap" width="1%">N.</th>
							<th class="text-nowrap">Nombre temática</th>
							<th class="text-nowrap">Línea</th>
                            <th class="text-nowrap">Descripción</th>
							<th class="text-nowrap">Acciones</th>
						</tr>
					</thead>
					<tbody>

					</tbody>
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
	//$.getScript('../assets/plugins/jszip/dist/jszip.min.js');//excel
	$.getScript('../assets/js/tables/table_gestion_ti.js');
	$.getScript('./js/gestion_congresos_js/gestion_tematicas_investigacion.js?upd=1');
</script>
<!-- ================== END core-js ================== -->



