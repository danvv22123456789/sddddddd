
<!-- BEGIN breadcrumb -->
<ol class="breadcrumb float-xl-end">
	<li class="breadcrumb-item"><a href="javascript:;">Inicio</a></li>
	<li class="breadcrumb-item"><a href="javascript:;">Gestión Trabajos</a></li>
	<li class="breadcrumb-item active">Resumenes Subidos</li>
</ol>
<!-- END breadcrumb -->
<!-- BEGIN page-header -->
<h1 class="page-header">Gestión de Trabajos<small></small></h1>
<!-- END page-header -->
<!-- BEGIN row -->


	<!-- BEGIN col-6 -->
	<div class="col-xl-12">
		<!-- BEGIN panel -->
		<div class="panel panel-inverse" data-sortable-id="form-validation-2">
			<!-- BEGIN panel-heading -->
			<div class="panel-heading">
				<h4 class="panel-title">Resumenes Subidos</h4>
				<div class="panel-heading-btn">
					<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
				</div>
			</div>
			
            <!-- BEGIN panel-body -->
			<div class="panel-body">
				<table id="tbl_resumenes_subidos" name ="tbl_resumenes_subidos" class="table table-striped table-bordered align-middle display responsive no-wrap" width="100%">
					<thead>
						<tr>
							<th width="1%">N.</th>
							<th class="col-sm-2">Título</th>
							<th class="text-nowrap">Fecha</th>
                            <th class="text-nowrap">Autor</th>
							<th class="text-nowrap">Correo</th>
							<th class="col-sm-2">Acciones</th>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- ================== BEGIN core-js ================== -->
<script>
	App.setPageTitle('.:CCE:.');
	$.getScript('../assets/plugins/datatables.net/js/jquery.dataTables.min.js'); //Datatable
	$.getScript('../assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js');//bootstrap style
	$.getScript('../assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js');//table responsive
	$.getScript('../assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js');//buttons 
	$.getScript('../assets/plugins/datatables.net-buttons/js/buttons.html5.min.js');//all functions
	$.getScript('../assets/plugins/pdfmake/build/pdfmake.min.js');//pdf 
	$.getScript('../assets/plugins/jszip/dist/jszip.min.js');//excel
	$.getScript('../assets/js/tables/table_subir_resumen.js');
	$.getScript('./js/gestion_trabajos/subir_resumen.js');
	//$.getScript('./js/fnc_slc.js');
</script>
<!-- ================== END core-js ================== -->


