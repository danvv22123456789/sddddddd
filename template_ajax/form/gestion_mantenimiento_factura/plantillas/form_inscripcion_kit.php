
<!-- BEGIN breadcrumb -->
<ol class="breadcrumb float-xl-end">
	<li class="breadcrumb-item"><a href="javascript:;">Inicio</a></li>
	<li class="breadcrumb-item"><a href="javascript:;">Congresos</a></li>
	<li class="breadcrumb-item active">Mantenimiento</li>
    <li class="breadcrumb-item active">Incripción</li>
</ol>
<!-- END breadcrumb -->
<!-- BEGIN page-header -->
<h1 class="page-header">Gestión de Inscripción<small></small></h1>
<!-- END page-header -->
<!-- BEGIN row -->
<div class="row">
	<!-- BEGIN col-6 -->
	<div class="col-xl-6">
		<!-- BEGIN panel -->
		<div class="panel panel-inverse" data-sortable-id="form-validation-1">
			<!-- BEGIN panel-heading -->
			<div class="panel-heading">
				<h4 class="panel-title">Gestión de Inscripción/Kit</h4>
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
				<form class="form-horizontal" data-parsley-validate="true" method="POST"  id="form_articulo"  name = "form_articulo" role="form" role="form">
					<div class="form-group row mb-3">
						<label class="col-lg-4 col-form-label form-label" for="fullname">Artículo* :</label>
						<div class="col-lg-8">
							<input class="form-control" type="text" id = "articulo" name = "articulo" placeholder="Escriba Nombre del artículo" data-parsley-required="true" />
						</div>
					</div>
					<div class="form-group row mb-3">
						<label class="col-lg-4 col-form-label form-label" for="message">Descripción:</label>
						<div class="col-lg-8">
							<textarea class="form-control" id="descripcion" name="descripcion"  rows="4" data-parsley-minlength="20" data-parsley-maxlength="100" placeholder="Escriba una breve descripción" data-parsley-required="true"></textarea>
						</div>
					</div>

					<div class="form-group row mb-3">
						<label class="col-lg-4 col-form-label form-label" for="message">Precio:</label>
						<div class="col-lg-8">
						<div class="input-group">
						<span class="input-group-text">L.</span>
						<input type="number"  id = "precio" name = "precio" rows="4" class="form-control" placeholder="0" data-parsley-required="true"/>
						<span class="input-group-text">.00</span>
					    </div>
						</div>
					</div>
                    <div class="form-group row mb-3">
						<label class="col-lg-4 col-form-label form-label">Impuesto:</label>
						<div class="col-lg-8">
							<select class="form-select"  id="impuesto" name="impuesto" data-parsley-required="true">
								<option value="0">Seleccione una opción</option>
								<option value="1">Gravado</option>
								<option value="2">Exento</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-4 col-form-label form-label">&nbsp;</label>
						<div class="col-lg-8">
							<input type="hidden" value="crear_articulo" id="caso" name="caso">
							<input type="hidden" value="" id="id" name="id"/>
							<a id = "guardar_articulo" value="guardar_articulo" type="submit" class="btn btn-primary">Guardar</a>
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
				<h4 class="panel-title">Lista de Artículos</h4>
				<div class="panel-heading-btn">
					<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
				</div>
			</div>
			

            <!-- BEGIN panel-body -->
			<div class="panel-body">
				<table id="tbl_inscripcion" name="tbl_inscripcion" class="table table-striped table-bordered align-middle display responsive no-wrap" width="100%">
					<thead>
						<tr>
							<th width="1%">N.</th>
							<th class="text-nowrap">Artículos</th>
							<th class="text-nowrap">Descripción</th>
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
	App.setPageTitle('.:CEAT:.');
	$.getScript('../assets/plugins/datatables.net/js/jquery.dataTables.min.js'); //Datatable
	$.getScript('../assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js');//bootstrap style
	$.getScript('../assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js');//table responsive
	$.getScript('../assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js');//buttons 
	$.getScript('../assets/plugins/datatables.net-buttons/js/buttons.html5.min.js');//all functions
	$.getScript('../assets/plugins/pdfmake/build/pdfmake.min.js');//pdf 
	$.getScript('../assets/plugins/jszip/dist/jszip.min.js');//excel
	$.getScript('../assets/js/tables/table_inscripcion.js');
	$.getScript('./js/gestion_mantenimiento_factura/inscripcion_kit.js');
	$.getScript('../assets/plugins/sweetalert/dist/sweetalert.min.js');

</script>
<!-- ================== END core-js ================== -->

