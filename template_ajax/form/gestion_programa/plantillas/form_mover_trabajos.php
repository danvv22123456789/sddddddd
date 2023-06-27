
<!-- BEGIN breadcrumb -->
<ol class="breadcrumb float-xl-end">
	<li class="breadcrumb-item"><a href="javascript:;">Inicio</a></li>
	<li class="breadcrumb-item"><a href="javascript:;">Gestión del Programa</a></li>
	<li class="breadcrumb-item active">Mover Trabajos</li>
</ol>
<!-- END breadcrumb -->
<!-- BEGIN page-header -->
<h1 class="page-header">Gestion del Programa<small></small></h1>
<!-- END page-header -->
<!-- BEGIN row -->

<form enctype="multipart/form-data" method='POST' name='form_mover_trabajos' id='form_mover_trabajos' class='form-horizontal form-bord <forered' data-parsley-validate='true'>
	<div class="row">

		<!-- BEGIN col-12 -->
		<div class="col-xl-12">
			<!-- BEGIN panel -->
			<div class="panel panel-inverse" data-sortable-id="form-validation-2">
				<!-- BEGIN panel-heading -->
				<div class="panel-heading">
					<h4 class="panel-title">Mover Trabajos en sesiones paralelas</h4>
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
					</div>
				</div>


				<!-- BEGIN panel-body -->
				<div class="panel-body">
					<div class="form-group row mb-3 justify-content-center">
						<label class="form-label col-form-label text-center">Seleccione la Tematica:</label>
						<div class="col-lg-6">
							<select id="tematicas_trabajo" name="tematicas_trabajo" class="default-select2 form-control " onchange="mostrartrab_en_act(this.value);">
								
							</select>
						</div>
					</div></br></br>

					<table id="tbl_movertrabajos_sp" name="tbl_movertrabajos_sp" class="table table-striped table-bordered align-middle display responsive no-wrap" width="100%">
						<thead>
							<tr>
								<th width="1%">N.</th>
								<th class="text-nowrap">Nombre de Sesión</th>
								<th class="text-nowrap">Fecha de Presentación</th>
								<th class="text-nowrap">Inicia</th>
								<th class="text-nowrap">Finaliza</th>
							</tr>

						</thead>
					</table>
					</br>
					</br>
					<!-- END panel-body DUDA CON ESTE INPUT -->
					<input type="hidden" id="caso" name="caso" value="cambiartrabajos_de_actividad">

				</div>
				<!-- END panel -->
			</div>
			<!-- END col-6 -->


		</div>
		<!-- END row -->
</form>


<!-- ================== BEGIN core-js ================== -->
<script>
	App.setPageTitle('.:CEAT:.');
	$.getScript('../assets/plugins/datatables.net/js/jquery.dataTables.min.js'); //Datatable
	$.getScript('../assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js');//bootstrap style
	$.getScript('../assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js');//table responsive
	$.getScript('../assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js');//buttons 
	$.getScript('../assets/plugins/datatables.net-buttons/js/buttons.html5.min.js');//all functions
	$.getScript('../assets/plugins/pdfmake/build/pdfmake.min.js');//pdf 
	$.getScript('../assets/plugins/jszip/dist/jszip.min.js');//excel
	$.getScript('../assets/js/tables/table_mover_trabajos.js');
	$.getScript('./js/fnc_slc.js');
	$.getScript('./js/gestion_programa/gestion_programa.js');
</script>
<!-- ================== END core-js ================== -->



