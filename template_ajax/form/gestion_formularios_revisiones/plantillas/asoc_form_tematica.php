

<!-- BEGIN breadcrumb -->
<ol class="breadcrumb float-xl-end">
	<li class="breadcrumb-item"><a href="javascript:;">Inicio</a></li>
    <li class="breadcrumb-item"><a href="javascript:;">Gestión Formularios de Revisión</a></li>
    <li class="breadcrumb-item active">Asociar Temática</li>
</ol>
<!-- END breadcrumb -->
<!-- BEGIN page-header -->
<h1 class="page-header">Asociar Formulario a Temática<small></small></h1>
<!-- END page-header -->
<!-- BEGIN row -->
<div class="row">
<form enctype="multipart/form-data" method='POST' name='form_a_tematica'  id='form_a_tematica' class='form-horizontal form-bord forered' data-parsley-validate='true'> 
	<!-- BEGIN col-6 -->
	<div class="col-xl-12">
		<!-- BEGIN panel -->
		<div class="panel panel-inverse" data-sortable-id="form-validation-2">
			<!-- BEGIN panel-heading -->
			<div class="panel-heading">
				<h4 class="panel-title">Asociar Temática</h4>
				<div class="panel-heading-btn">
					<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
				</div>
			</div>
			
               <!-- BEGIN panel-body -->
			<div class="panel-body">
				<table  id="tbl_form_tem" name="tbl_form_tem" class="table table-striped table-bordered align-middle display responsive no-wrap" width="100%">
					<thead>
						<tr>
							<th width="1%">N.</th>
							<th class="text-nowrap">Formulario de Revisión</th>
							<th class="text-nowrap">Descripción</th>
                            <th class="text-nowrap">Temática Asociada</th>
                            <th class="text-nowrap">Asociar Temática</th>
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
    
                  <!-- #modal-dialog1 -->                                    
                  <div class='modal fade' id='tematica_form'  >                                    
                        <div class='modal-dialog' >
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                                <h4 class='modal-title'>@@asociar_for_tematica@@</h4>
                                        </div>
                                        <div class='modal-body'>
                                            <div class="row">
                                               <div class='form-group' align="center">
                                                    <div class='col-md-11'>
                                                        <label class='control-label' for='fullname'>@@tematicas@@</label>
                                                        <select style="height: 95px;" multiple='' id='origen_tematica' name='origen_tematica' class='form-control'>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-11">
                                                        <label class='control-label' for='fullname'>@@asociar@@</label>
                                                        <select style="height: 95px;" multiple='' id='destino_tematica' name='destino_tematica[]' class='form-control'>
                                                         </select>
                                                     </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" id="formulario" value="">
                                        <input type="hidden" id="caso" value="asoc_form_tematica">
                                        <div class='modal-footer'>
                                            <a href='javascript:;'  class='btn btn-sm btn-danger btn-rounded' id="cancelar_asociar_form_tematica">@@btn_cancelar@@</a>
                                            <a type='button' onclick="guardar()" class='btn btn-sm btn-success btn-rounded'>@@btn_guardar@@</a>
                                        </div>
                                    </div>
                        </div>                                    
                </div>

               <!-- /modal-dialog1 -->
</form>
</div>
<!-- END row -->



<script>
			App.setPageTitle('.:CCE:.');
			$.getScript('../assets/plugins/datatables.net/js/jquery.dataTables.min.js'); //Datatable
			$.getScript('../assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js');//bootstrap style
			$.getScript('../assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js');//table responsive
			$.getScript('../assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js');//buttons 
			$.getScript('../assets/plugins/datatables.net-buttons/js/buttons.html5.min.js');//all functions
			$.getScript('../assets/plugins/pdfmake/build/pdfmake.min.js');//pdf 

			$.getScript('../assets/js/tables/table_asociar_formulario.js');
			$.getScript('./js/gestion_formulario_revisiones/asoc_form_tematica.js');




		</script>
		