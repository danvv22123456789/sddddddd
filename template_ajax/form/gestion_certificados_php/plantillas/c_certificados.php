
<!-- BEGIN breadcrumb -->
<ol class="breadcrumb float-xl-end">
	<li class="breadcrumb-item"><a href="javascript:;">Inicio</a></li>
	<li class="breadcrumb-item"><a href="javascript:;">Gestión Certificado</a></li>
	<li class="breadcrumb-item active">Crear Certificado</li>
</ol>
<!-- END breadcrumb -->
<!-- BEGIN page-header -->
<h1 class="page-header">Gestión de Certificados<small></small></h1>
<!-- END page-header -->
<!-- BEGIN row -->
<div class="row">
	<!-- BEGIN col-6 -->
	<div class="col-xl-12">
		<!-- BEGIN panel -->
		<div class="panel panel-inverse" data-sortable-id="form-validation-1">
			<!-- BEGIN panel-heading -->
			<div class="panel-heading">
				<h4 class="panel-title">Crear Certificado</h4>
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
				<form class="form-horizontal" data-parsley-validate="true" method="POST"   name='form_certificados'  id='form_certificados' role="form" role="form">
                
                <div class="container">
                <div class="row">
                <div class="col-sm-6 col-md-5 col-lg-6">
                        
                       <div class="form-group row mb-3">
                            <label class="col-lg-4 col-form-label form-label" for="message">Nombre:</label>
                            <div class="col-lg-8">
                                <textarea class="form-control" id="nombre_c" name="nombre_c" rows="2" data-parsley-minlength="20" data-parsley-maxlength="100" placeholder="Escriba el nombre del certificado" data-parsley-required="true"></textarea>
                            </div>
                        </div>


                        <div class="form-group row mb-3">
                            <label class="col-lg-4 col-form-label form-label">Certificado especial:</label>
                            <div class="col-lg-8">

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"  value="0" data-parsley-required="true" />
                                    <label class="form-check-label" for="inlineRadio1">Si</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="1" checked="true" data-parsley-required="true" />
                                    <label class="form-check-label" for="customRadio2">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-lg-4 col-form-label form-label" for="message">Encabezado:</label>
                            <div class="col-lg-8">
                                <textarea class="form-control" id="encabezado_c" name="encabezado_c"  rows="2" data-parsley-minlength="20" data-parsley-maxlength="100" placeholder="Escriba una breve descripción" data-parsley-required="true"></textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-lg-4 col-form-label form-label" for="message">Motivo:</label>
                            <div class="col-lg-8">
                                <textarea class="form-control" id="motivo_c" name="motivo_c" rows="2" data-parsley-minlength="20" data-parsley-maxlength="100" placeholder="Escriba una breve descripción" data-parsley-required="true"></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-lg-4 col-form-label form-label" for="message">Pie:</label>
                            <div class="col-lg-8">
                                <textarea class="form-control" id="pie_c" name="pie_c"  rows="2" data-parsley-minlength="20" data-parsley-maxlength="100" placeholder="Escriba una breve descripción" data-parsley-required="true"></textarea>
                            </div>
                    </div>

                </div>

                <div class="col-sm-6 col-md-5 col-lg-6">
                    <div class="form-group row mb-3">
						<label class="col-lg-4 col-form-label form-label">Dirigido a:</label>
						<div class="col-lg-8">
							<select class="form-select"   id="slcrolescongreso" name="slcrolescongreso" data-parsley-required="true">
								<option value="0">Seleccione una opción</option>
								<option value="1">...</option>
								<option value="2">...</option>
							</select>
						</div>
					</div>   
                    <div class="form-group row mb-3">
						<label class="form-label col-form-label col-lg-4">Personas Registradas:</label>
						<div class="col-lg-8">
							<select class="selectpicker form-control"  name="origen_certificados" id="origen_certificados" multiple data-parsley-required="true">

							</select>
						</div>
					</div>
                    <div class="form-group row mb-3">
						<label class="form-label col-form-label col-lg-4">Personas que Firman:</label>
						<div class="col-lg-8">
                        <select class="selectpicker form-control" name="destino_certificados" id="destino_certificados" multiple data-parsley-required="true">

							</select>
						</div>
					</div>
                    <div class="form-group row mb-3">
						<label class="col-lg-4 col-form-label form-label">Arte del Certificado:</label>
						<div class="col-lg-8">
						<span id="nombre_archivo"></span>
                  		<input type="hidden" name="archivo_ant" id="archivo_ant">
                        <input type="file" id="arte" name="arte" class="form-control" />
						</div>
					</div>

                </div>
                </div>
                </div>

                <br>
					<div class="form-group row ">
						<label class="col-lg-4 col-form-label form-label">&nbsp;</label>
						<div class="col-lg-8">
							<input name="idcert" id="idcert" type="hidden" value="" />
							<input name="caso" id="caso" type="hidden" value="guardar_certificado" />
							<a value="btn_guardar_certificados" onclick="guardar_certificado();" id="btn_guardar_certificados" type="submit"  class="btn btn-primary">Guardar</a>
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
				<h4 class="panel-title">Certificados existentes</h4>
				<div class="panel-heading-btn">
					<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
				</div>
			</div>
			

            <!-- BEGIN panel-body -->
			<div class="panel-body">
				<table id="tbl_certificado" name="tbl_certificado" class="table table-striped table-bordered align-middle display responsive no-wrap" width="100%">
					<thead>
						<tr>
							<th width="1%">N.</th>
							<th class="text-nowrap">Nombre</th>
							<th class="text-nowrap">Motivo</th>
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
	$.getScript('../assets/js/tables/table_certificado.js');
	$.getScript('./js/gestion_certificados/c_certificados.js?upd=2');

</script>
<!-- ================== END core-js ================== -->
