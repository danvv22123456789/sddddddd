

<!-- BEGIN breadcrumb -->
<ol class="breadcrumb float-xl-end">
	<li class="breadcrumb-item"><a href="javascript:;">Inicio</a></li>
	<li class="breadcrumb-item"><a href="javascript:;">Voluntarios</a></li>
	<li class="breadcrumb-item active">Actividades</li>
</ol>
<!-- END breadcrumb -->
<!-- BEGIN page-header -->
<h1 class="page-header">Voluntarios<small></small></h1>
<!-- END page-header -->
<!-- BEGIN row -->
<div class="row">

<!-- DUDA CON ID Y NAME -->
<form enctype="multipart/form-data" method='POST' name='form_revisar_trabajos'  id='form_revisar_trabajos' class='form-horizontal form-bord forered' data-parsley-validate='true'> 


	<!-- BEGIN col-6 -->
	<div class="col-xl-12">
		<!-- BEGIN panel -->
		<div class="panel panel-inverse" data-sortable-id="form-validation-2">
			<!-- BEGIN panel-heading -->
			<div class="panel-heading">
				<h4 class="panel-title">Actividades Asignadas</h4>
				<div class="panel-heading-btn">
					<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
				</div>
			</div>
			
    
            <!-- BEGIN panel-body -->
			<div class="panel-body">
				<table  id="tbl_act_asignada_voluntarios" name="tbl_act_asignada_voluntarios" class="table table-striped table-bordered align-middle display responsive no-wrap" width="100%">
					<thead>
						<tr>
							<th width="1%">N.</th>
							<th class="text-nowrap">Nombre de la Actividad</th>
							<th class="text-nowrap">Descripción</th>
                            <th class="text-nowrap">Acciones</th>
						</tr>
					</thead>
                    <tbdoy>
                    </tbdoy>

				</table>
			<!-- END panel-body -->

		</div>
		<!-- END panel -->
	</div>
	<!-- END col-6 -->

    <div id='modal_info_actividad_voluntario' class='modal fade bs-example-modal-lg' tabindex="-1" role="dialog"  style='display:none;' >                                    
                        <div class='modal-dialog modal-lg' >
                                    <div class='modal-content'>
                                        <div class='modal-header' align="center">
                                                <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
                                                <h4 class='modal-title'>Información Actividad Voluntario:<a id="idtrab"></a></h4>
                                        </div>
                                        <div class='modal-body'>
                                                    <div class="modal-header">
                                                    <h4 class="text-success">Nombre de la Tarea:</h4>
                                                    <p id="ntarea" style="font-weight: bold;text-indent: 1cm;"></p>
                                                    </div><div class="modal-header">
                                                    <h4 class="text-success">Descripción:</h4>
                                                    <div id="desc_tarea_vol" style="font-weight: bold;text-indent: 1cm;"></div>
                                                    </div><div class="modal-header">
                                                    <h4 class="text-success">Cantidad de Horas:</h4>
                                                    <p id="horas_vol_sumar" style="font-weight: bold;text-indent: 1cm;"></p>
                                                    </div><div class="modal-header">
                                                    <h4 class="text-success">Persona de apoyo:</h4>
                                                    <p id="persona_apoyo" style="font-weight: bold;text-indent: 1cm;"></p>
                                                    </div><div class="modal-header">
                                                    <h4 class="text-success">Archivo complementario</h4>
                                                    <p id="doc_vol_comple" style="font-weight: bold;text-indent: 1cm;"></p>
                                                    </div>
                                            
                                        </div>
                                        <div class='modal-footer'>
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                        </div>                                    
                </div>
</form>
</div>
<!-- END row -->






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
	$.getScript('../assets/js/tables/table_actividades_asignadas_voluntario.js');
	$.getScript('./js/gestion_voluntarios/gestion_voluntarios.js');
</script>
<!-- ================== END core-js ================== -->


