

<!-- BEGIN breadcrumb -->
<ol class="breadcrumb float-xl-end">
	<li class="breadcrumb-item"><a href="javascript:;">Inicio</a></li>
	<li class="breadcrumb-item"><a href="javascript:;">Gestión Voluntario</a></li>
	<li class="breadcrumb-item active">Solicitudes</li>
</ol>
<!-- END breadcrumb -->
<!-- BEGIN page-header -->
<h1 class="page-header">Gestión Voluntario<small></small></h1>
<!-- END page-header -->
<!-- BEGIN row -->
<div class="row">
	
	<!--DUDA CON EL NAME Y ID DEL FORM -->
<form enctype="multipart/form-data" method='POST' name='form_revisar_trabajos'  id='form_revisar_trabajos' class='form-horizontal form-bord forered' data-parsley-validate='true'> 


	<!-- BEGIN col-6 -->
	<div class="col-xl-12">
		<!-- BEGIN panel -->
		<div class="panel panel-inverse" data-sortable-id="form-validation-2">
			<!-- BEGIN panel-heading -->
			<div class="panel-heading">
				<h4 class="panel-title">Solicitudes Pendientes</h4>
				<div class="panel-heading-btn">
					<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
				</div>
			</div>
			
    
            <!-- BEGIN panel-body -->
			<div class="panel-body">
				<table id="tbl_solicitudes_voluntarios" name="tbl_solicitudes_voluntarios" class="table table-striped table-bordered align-middle display responsive no-wrap" width="100%">
					<thead>
						<tr>
							<th width="1%">N.</th>
							<th class="text-nowrap">Primer Nombre</th>
							<th class="text-nowrap">Segundo Nombre</th>
							<th class="text-nowrap">Primer Apellido</th>
							<th class="text-nowrap">Segundo Apellido</th>
							<th class="text-nowrap">Motivo</th>
                            <th class="text-nowrap">Acciones</th>
						</tr>
					</thead>
                    <tbdoy>
                    </tbdoy>

				</table>
			<!-- END panel-body -->

		</div>
		<!-- END panel -->

        <input type="hidden" id="idt" name="idt" value=""/> 
             <input type="hidden" id="idtem" name="idtem" value=""/>
            <input type="hidden" id="caso" value="aceptar_trabajo_revisar"> 
            <input type="hidden" id="nfilapcuanti" name="nfilapcuanti" value=""/> 
            <input type="hidden" id="nfilapcuali" name="nfilapcuali" value=""/> 
            <input type="hidden" id="descargo_archivo" name="descargo_archivo" value="0"/> 
	</div>
	<!-- END col-6 -->

</form>
</div>
<!-- END row -->




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

	$.getScript('../assets/js/tables/table_solicitudes.js');
	$.getScript('./js/gestion_voluntarios/gestion_voluntarios.js');


</script>
<!-- ================== END core-js ================== -->


