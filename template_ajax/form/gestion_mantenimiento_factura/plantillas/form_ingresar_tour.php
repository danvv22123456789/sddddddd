

<!-- BEGIN breadcrumb -->
<ol class="breadcrumb float-xl-end">
	<li class="breadcrumb-item"><a href="javascript:;">Inicio</a></li>
	<li class="breadcrumb-item"><a href="javascript:;">Congresos</a></li>
	<li class="breadcrumb-item active">Mantenimiento</li>
    <li class="breadcrumb-item active">Guardar Tour</li>
</ol>
<!-- END breadcrumb -->
<!-- BEGIN page-header -->
<h1 class="page-header">Gestión de Tour<small></small></h1>
<!-- END page-header -->
<!-- BEGIN row -->
<div class="row">
	<!-- BEGIN col-6 -->
	<div class="col-xl-6">
		<!-- BEGIN panel -->
		<div class="panel panel-inverse" data-sortable-id="form-validation-1">
			<!-- BEGIN panel-heading -->
			<div class="panel-heading">
				<h4 class="panel-title">Gestión de Tours</h4>
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
				<form class="form-horizontal" method="POST"  id="form_tour"  name = "form_tour" role="form"  data-parsley-validate novalidate>
					<div class="form-group row mb-3">
						<label class="col-lg-4 col-form-label form-label" for="fullname">Nombre del Tour* :</label>
						<div class="col-lg-8">
							<input class="form-control" type="text" id="nombretour" name="nombretour" placeholder="Escriba Nombre del tour" data-parsley-required="true" />
						</div>
					</div>
					<div class="form-group row mb-3">
						<label class="col-lg-4 col-form-label form-label" for="message">Descripción:</label>
						<div class="col-lg-8">
							<textarea class="form-control" id="descripcion" name="descripcion"  rows="4" data-parsley-minlength="20" data-parsley-maxlength="100" placeholder="Escriba una breve descripción" data-parsley-required="true"></textarea>
						</div>
					</div>
					<div class="form-group row mb-3">
						<label class="col-lg-4 col-form-label form-label" for="message">Comentarios:</label>
						<div class="col-lg-8">
							<textarea class="form-control" id="comentario" name="comentario" rows="4" data-parsley-minlength="20" data-parsley-maxlength="100" placeholder="Escriba una breve descripción" data-parsley-required="true"></textarea>
						</div>
					</div>

					<div class="form-group row mb-3">
						<label class="col-lg-4 col-form-label form-label" for="message">Precio:</label>
						<div class="col-lg-8">
						<div class="input-group">
						<span class="input-group-text">L.</span>
						<input type="number" id ="costo" min="0" name ="costo"  class="form-control" placeholder="0" data-parsley-required="true" />
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
							<input type="hidden" value="crear_tour" id="caso" name="caso">
							<input type="hidden" value="" id="id" name="id"/>
							<a id = "crear_tour" value="crear_tour"  class="crear_linea btn btn-primary waves-effect waves-light">Guardar</a>
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
				<h4 class="panel-title">Lista de Tours</h4>
				<div class="panel-heading-btn">
					<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
				</div>
			</div>
			

            <!-- BEGIN panel-body -->
			<div class="panel-body">
				<table  class="table table-bordered" id="tbl_tours"  name="tbl_tours" width="100%">
					<thead>
						<tr>
							<th width="1%">N.</th>
							<th class="text-nowrap">Nombre del Tour</th>
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
	App.setPageTitle('.:CCE:.');
	$.getScript('../assets/plugins/datatables.net/js/jquery.dataTables.min.js'); //Datatable
	$.getScript('../assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js');//bootstrap style
	$.getScript('../assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js');//table responsive
	$.getScript('../assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js');//buttons 
	$.getScript('../assets/plugins/datatables.net-buttons/js/buttons.html5.min.js');//all functions
	$.getScript('../assets/plugins/pdfmake/build/pdfmake.min.js');//pdf 
	//$.getScript('../assets/plugins/jszip/dist/jszip.min.js');//excel
	$.getScript('../assets/js/tables/table_tour.js');
	$.getScript('./js/gestion_mantenimiento_factura/ingresar_tour.js');
</script>
<!-- ================== END core-js ================== -->

