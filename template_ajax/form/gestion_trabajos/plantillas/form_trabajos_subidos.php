
<!-- BEGIN breadcrumb -->
<ol class="breadcrumb float-xl-end">
	<li class="breadcrumb-item"><a href="javascript:;">Inicio</a></li>
	<li class="breadcrumb-item"><a href="javascript:;">Gestión CTrabajos</a></li>
	<li class="breadcrumb-item active">Subir Trabajo</li>
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
				<h4 class="panel-title">Trabajos existentes</h4>
				<div class="panel-heading-btn">
					<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
				</div>
			</div>
			
            <!-- BEGIN panel-body -->
			<div class="panel-body">
				<table id="tbl_trabajos_subidos" name ="tbl_trabajos_subidos" class="table table-striped table-bordered align-middle display responsive no-wrap" width="100%">
					<thead>
						<tr>
							<th width="1%">N.</th>
							<th class="col-sm-2">Título</th>
							<th class="text-nowrap">Resumen</th>
                            <th class="text-nowrap">Fecha</th>
							<th class="text-nowrap">Tipo de Trabajo</th>
							<th class="text-nowrap">Estado</th>
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



<!-- START modal -->

<div class="modal fade" id="modalActualizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar trabajo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="cerrarModal('modalActualizar');">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" data-parsley-validate="true" method="POST"   name='form_trabajo_actualizar'  id='form_trabajo_actualizar' role="form">
			
			<div class="container">
			<div class="row">
			<div class="col-sm-6 col-md-5 col-lg-6">
			<div class="form-group row mb-3">
					<label class="col-lg-4 col-form-label form-label">Tipo de Trabajo:</label>
					<div class="col-lg-8">
						<select class="form-select" id="ttrabajo" name="ttrabajo" onchange="valida_tp(this.value);">
							<option value="0">Seleccione una opción</option>
							<option value="1">...</option>
							<option value="2">...</option>
						</select>
					</div>
				</div>   
					<div class="form-group row mb-3">
						<label class="col-lg-4 col-form-label form-label" for="message">Título*:</label>
						<div class="col-lg-8">
							<textarea class="form-control"  id="titulo_trabajo" name="titulo_trabajo" rows="2" data-parsley-minlength="20" data-parsley-maxlength="1000" placeholder="Escriba el título del trabajo"></textarea>
						</div>
					</div>
					<div class="form-group row mb-3">
						<label class="col-lg-4 col-form-label form-label" for="message">Resumen:</label>
						<div class="col-lg-8">
							<textarea class="form-control" id="resumen_trabajo" name="resumen_trabajo" rows="2" data-parsley-minlength="20" data-parsley-maxlength="1000" placeholder="Escriba el Resumen del trabajo"></textarea>
						</div>
					</div>
					<div class="form-group row mb-3">
						<label class="col-lg-4 col-form-label form-label" for="message">Resumen Abreviado:</label>
						<div class="col-lg-8">
							<textarea class="form-control" id="resumen_abreviado" name="resumen_abreviado" rows="2" data-parsley-minlength="20" data-parsley-maxlength="1000" placeholder="Resumen abreviado del trabajo para el programa del congreso"></textarea>
						</div>
					</div>
					<div class="form-group row mb-3">
						<label class="col-lg-4 col-form-label form-label" for="message">Palabras Clave:</label>
						<div class="col-lg-8">
							<textarea class="form-control" id="palabras_clave" name="palabras_clave" rows="2" data-parsley-minlength="20" data-parsley-maxlength="1000" placeholder=" Palabras claves separadas por coma (palabra,palabra)"></textarea>
						</div>
					</div>

			</div>

			<div class="col-sm-6 col-md-5 col-lg-6">
				<div class="form-group row mb-3">
					<label class="col-lg-4 col-form-label form-label">Idioma:</label>
					<div class="col-lg-8">
						<select class="form-select"   id="idioma" name="idioma"data-parsley-required="true">
							<option value="0">Seleccione una opción</option>
							<option value="1">...</option>
							<option value="2">...</option>
						</select>
					</div>
				</div>   

				<div class="form-group row mb-3">
					<label class="form-label col-form-label col-lg-4">Temática principal:</label>
					<div class="col-lg-8">
						<select class="selectpicker form-control multi-select" name="tematicas_trabajo" id="tematicas_trabajo" multiple>
						</select>
					</div>
				</div>

				<!---Se eliminó tematica secundaria y terciaria---->
				<!--DUDA CON LOS FORM DE TEMATICA SECUNDARIA Y TERCIARIA, AL IGUAL CON PARTICIPACIÓN DE PREMIO, Y PUBLICACIÓN DE REVISTA-->

				<div class="form-group row mb-3">
				<label class="form-label col-form-label col-lg-4">Hora:</label>
					<div class="col-lg-8">
						<div class="input-group bootstrap-timepicker">
							<input id="hora_sugerida" name="hora_sugerida" type="time" class="form-control" placeholder="Hora tentativa de la defensa del trabajo" />
						</div>
					</div>
				</div>

					<div class="form-group row mb-3" id="preguntaautores" name="preguntaautores">
						<label class="col-lg-4 col-form-label form-label">El trabajo tiene mas autores:</label>
						<div class="col-lg-8">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="tautor" id="tautor_si"  value="1" />
								<label for="tautor_si">Si</label></input>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="tautor" id="tautor_no" value="0" checked="true" />
								<label for="tautor_no">No</label></input>
							</div>
						</div>
					</div>
					<div class="orm-group row mb-3" id="tautores" name="tautores" >
							<label class="col-lg-4 col-form-label form-label">Ingrese el número de autores además de usted...</label>
							<div class="col-lg-8">
								<input id="n_autores" name="n_autores" type="number"  class="form-control" placeholder="Número de autores" min="0" max="99" maxlength="2"></input>
							</div>
						</div>

						<div class="form-group row mb-3" id="premiotrabajo" name="premiotrabajo">
						<label class="col-lg-4 col-form-label form-label">¿Le gustaría participar en algún premio con su trabajo de investigación?</label>
						<div class="col-lg-8">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="tpremio" id="tpremio_si"  value="1" />
								<label for="tpremio_si">Si</label></input>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="tpremio" id="tpremio_no" value="0" checked="true" />
								<label for="tpremio_no">No</label></input>
							</div>
						</div>
					</div>

					<div class="form-group row mb-3" id="revistatrabajo" name="revistatrabajo">
						<label class="col-lg-4 col-form-label form-label">¿Le gustaría que su trabajo de investigación sea enviado para revisión en la revista E&A?</label>
						<div class="col-lg-8">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="trevista" id="trevista_si"  value="1" />
								<label for="trevista_si">Si</label></input>
							</div>

							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="trevista" id="trevista_no" value="0" checked="true" />
								<label for="trevista_no">No</label></input>
							</div>
						</div>
					</div>


			</div>
			</div>
			</div>

			<br>
				<div class="form-group row ">
					<label class="col-lg-4 col-form-label form-label">&nbsp;</label>
					<div class="col-lg-8">
						<input type='hidden' name='caso' id='caso' value='actualizar_trabajo'/>
						<input type='hidden' name='id' id='id' value='' />
						<a id="actualizar_trabajo" class="btn btn-primary">Guardar</a>
					</div>
				</div>

			</form>
      </div>
    </div>
  </div>
</div>

<!--------------------->

<!-- #modal-agregarautores AGREGAR AUTORES-->                                    
<div class='modal fade' role="dialog" id='modal-agregarautores'>                               
		<div class='modal-dialog modal-full modal-xl'>
					<style>
					.ui-autocomplete.ui-front
								{
								z-index: 1051;
								}
					</style>                                    
					<div class='modal-content'>
						<div class='modal-header'>
								<button type='button' class='close' data-dismiss='modal' aria-hidden='true' onclick="cerrarModal('modal-agregarautores');">×</button>
								<h4 class='modal-title'>agregar autores</h4>
						</div>

						<div class='modal-body'>
							<form method="POST" name='form_agregar_autores' id='form_agregar_autores'>
							<div class="row" align="center">
								<div class="col-md-12"> 
									<div class="form-group" id="correo" name="cautor" >
											<label class="col-md-6 control-label">correo autor</label>
											<div class="col-md-4">                                                               
												<input name="correo_autor" autocomplete="off" type="text" class="form-control" id="correo_autor" placeholder="correo autor"   />
												<!--<div id="correos" style="position: sticky; z-index: 1;"></div>-->
											</div>
										</div>    
									<div class="form-group"  name="pnautor" >
											<label class="col-md-6 control-label">primer nombre</label>
											<div class="col-md-4">                                                               
												<input type="text" name="primer_nombre" id="primer_nombre" placeholder="primer nombre" class="form-control">
											</div>
										</div>
										<div class="form-group"  name="paautor" >
											<label class="col-md-6 control-label">primer apellido</label>
											<div class="col-md-4">                                                               
												<input type="text" name="primer_apellido" id="primer_apellido" placeholder="primer apellido" class="form-control"> 
											</div>
										</div>
									<div class="form-group"  name="idautor" >
											<label class="col-md-6 control-label">identificacion</label>
											<div class="col-md-4">                                                               
												<input type="text" name="identificacion" id="identificacion" placeholder="identificacion" class="form-control"> 
											</div>
										</div>
									<div class="form-group"  align="center" >
										<p class="text-muted font-13 m-b-15 m-t-20">autor principal</p>
										<div class="radio radio-info radio-inline">
											<input type="radio" id="rd_ap_si" value="1" name="rd_ap_">
											<label for="rd_ap_si">si</label>
										</div>
										<div class="radio radio-inline">
											<input type="radio" id="rd_ap_no" value="0" name="rd_ap_"  checked="true">
											<label for="rd_ap_no">no</label>
									</div>
										
								</div>
							</div>
						</div>
							<div class='modal-footer' style="text-align: center;">                                                
								<a href='javascript:;'  class='btn btn-sm btn-white' title="cancelar" data-dismiss='modal' onclick="cerrarModal('modal-agregarautores');">cancelar</a>
								<a type='button' onclick='guardarautores();' title="guardar" class='btn btn-primary btn-success'>guardar</a>
						</div>
						<div class="form-group" align="left" >                                                
							<a style="cursor: pointer;" onclick="mostrarautores()"  class="text-danger" value="ver_coautores_trabajo" id="mostrarta" >ver coautores trabajo</a>
						</div>
						<div class="form-group" align="left" style="padding-left: 10px;display:none;" id="ocultarautores">                                                
								<a style="cursor: pointer;" onclick="ocultarta()"  class="text-danger" >ocultar coautores</a>
						</div>
						<div class="form-group" align="center" style="display: none;" id="table-view-authors" name="table-view-authors">
							<div class="form-group">    
								<table id="cautores" class="table table-rep-plugin" style="font-size: 10px;border-collapse: 0; padding-bottom: 5px; font-weight: bold;">
											<thead>                                                           
											<tr class="info">
												<th width="15%" style="text-align: center;font-size: 10px;">No.</th>
												<th width="15%" style="text-align: center;font-size: 10px;">nombres</th>
												<th width="15%" style="text-align: center;font-size: 10px;">apellidos</th>                                                                        
												<th width="12%" style="text-align: center;font-size: 10px;">identificacion</th>
												<th width="8%" style="text-align: center;font-size: 10px;">correo</th>                    
												<th width="10%" style="text-align: center;font-size: 10px;">usuario</th>
												<th width="5%" style="text-align: center;font-size: 10px;">subio</th>
												<th width="5%" style="text-align: center;font-size: 10px;">aprincipal</th>
												<th width="5%" style="text-align: center;font-size: 10px;">coautor</th>
												<th width="5%" style="text-align: center;font-size: 10px;">expositor</th>
												<th width="5%" style="text-align: center;font-size: 10px;">cautoria</th>
												<th width="5%" style="text-align: center;font-size: 10px;">autor correspondencia</th>
												<th width="5%" style="text-align: center;font-size: 10px;">acciones</th>
											</tr>
											</thead>
											<tbody>

											</tbody>
								</table> 
							</div>
							<div class="form-group" align="center" style="padding-right: 10px; cursor: pointer; color: white; font-size: 16px;" >                                                
								<span class="label label-success" onclick="guardarexpositores()"  >guardar expositores</span>
							</div>
						</div>
							<input type='hidden' name='caso_autores' id='caso_autores' value='agregarautor'/>
							<input type="hidden" name="id_modal" id="id_modal" value=''>
						</form>
					</div>
		</div>                                    
	</div>
</div>
<!-- /modal-dialog1 -->

<!-- MODAL VER REVISIONES-->                                    
<div class='modal fade' role="dialog" id='modal-ver-revisiones'>                               
	<div class='modal-dialog modal-full modal-lg'>                                    
		<div class='modal-content'>

			<div class='modal-header'>
				<button type='button' class='close' data-dismiss='modal' aria-hidden='true' onclick="cerrarModal('modal-ver-revisiones');">×</button>
				<h4 class='modal-title'>Ver revisiones</h4>
			</div>

			<div class='modal-body'>
				<table id="tbl_subir_trabajo" class="table table-striped table-bordered align-middle display responsive no-wrap" width="100%">

					<thead>
						<tr>
							<th width="1%">N.</th>
							<th class="text-nowrap">Id asignación a revisor</th>
							<th class="text-nowrap">Descargó archivo</th>
							<th class="text-nowrap">Llenó formulario</th>
							<th class="text-nowrap">Fecha revisó</th>
							<th class="text-nowrap">Tipo dictamen</th>
							<th class="text-nowrap">Observaciones</th>
						</tr>
					</thead>

					<tbody id="ver_revisiones_tbl">
						
					</tbody>

				</table>
			</div>

		</div>                                    
	</div>
</div>
<!-- /modal-dialog1 -->

<!-- #modal-cambiardocumento CAMBIAR DOCUMENTO-->
<div class='modal fade' role="dialog" id='modal-cambiardocumento'>                               
		<div class='modal-dialog modal-full'>
			<style>
			.ui-autocomplete.ui-front
						{
						z-index: 1051;
						}
			</style>                                    
			<div class='modal-content'>
				<div class='modal-header'>
						<button type='button' class='close' data-dismiss='modal' aria-hidden='true' onclick="cerrarModal('modal-cambiardocumento');">×</button>
						<h4 class='modal-title'>Cambiar documento investigación</h4>
				</div>
				<form method="POST" name='form_cambiar_documetos' id='form_cambiar_documentos'>
					<div class='modal-body'>
						<div class="row" align="center">
							<div class="col-md-12"> 
							<div>
								<label for="file">Choose file to upload</label>
								<input type="file" id="archivo_trabajo" name="archivo_trabajo" />
							</div>
							</div>
						</div>
					</div>
					<div class='modal-footer' style="text-align: center;">           
							<input type="hidden" id="id_cambiar_documento" name="id_cambiar_documento" value="">                                     
							<a href='javascript:;'  class='btn btn-sm btn-white' title="cancelar" data-dismiss='modal' onclick="cerrarModal('modal-cambiardocumento');">cancelar</a>
							<input type='hidden' name='caso' id='caso' value='cambiar_documento'/>
							<a type='button' type="submit" onclick='guardardocumento();' title="guardar" class='btn btn-primary btn-success'>guardar</a>
					</div>
				</form>
			</div>
		</div>                                    
	</div>
</div>


<!-- END modal -->


<!-- #modal-asignarhorario ASIGNAR HORARIO-->
<!-- <div class='modal fade' role="dialog" id='modal-asignarhorario'>                               
		<div class='modal-dialog modal-full'>
			<style>
			.ui-autocomplete.ui-front
						{
						z-index: 1051;
						}
			</style>                                    
			<div class='modal-content'>
				<div class='modal-header'>
						<button type='button' class='close' data-dismiss='modal' aria-hidden='true' onclick="cerrarModal('modal-asignarhorario');">×</button>
						<h4 class='modal-title'>Asignar Horario</h4>
				</div>
					<div class="form-group" id="horario" name="fecha" >
						<label class="col-md-6 control-label">Horario de presentación</label>
						<div class="col-md-4">
						<input
							id="hora_presentacion"
							type="datetime-local"
							name="hora_presentacion"
						/>
						</div>
					</div>
					<div class='modal-footer' style="text-align: center;">                                                
						<a href='javascript:;'  class='btn btn-sm btn-white' title="cancelar" data-dismiss='modal' onclick="cerrarModal('modal-asignarhorario');">cancelar</a>
						<a type='button' onclick='guardarautores();' title="guardar" class='btn btn-primary btn-success'>guardar</a>
				</div>
					<input type='hidden' name='caso' id='caso' value=''/>
				</form>
			</div>
		</div>                                    
	</div>
</div> -->


<div class='modal fade' role="dialog" id='modal-asignarhorario'>                               
		<div class='modal-dialog modal-full'>
					<style>
					.ui-autocomplete.ui-front
								{
								z-index: 1051;
								}
					</style>                                    
					<div class='modal-content'>
						<div class='modal-header'>
							<button type='button' class='close' data-dismiss='modal' aria-hidden='true' onclick="cerrarModal('modal-asignarhorario');">×</button>
							<h4 class='modal-title'>Asignar Horario</h4>
						</div>

						<div class='modal-body'>
							<form method="POST" name='form_trabajos_subidos' id='form_trabajos_subidos'>
							<div class="row" align="center">
								<div class="col-md-12"> 
									 <div class="form-group" id="horario" name="fecha" >
									<label class="col-md-6 control-label">Horario de presentación</label>
									<div class="col-md-4">
									<input
										id="hora_presentacion"
										type="datetime-local"
										name="hora_presentacion"
									/>
								</div>
							</div>
										
								</div>
							</div>
						</div>
							<div class='modal-footer' style="text-align: center;">                                                
								<a href='javascript:;'  class='btn btn-sm btn-white' title="cancelar" data-dismiss='modal' onclick="cerrarModal('modal-asignarhorario');">cancelar</a>
								<a type='button' onclick='asignar_horario();' title="guardar" class='btn btn-primary btn-success'>guardar</a>
							</div>
						</form>
					</div>
		</div>                                    
	</div>
</div>


<!-- END modal -->


<!-- ================== BEGIN core-js ================== -->
<script>
	App.setPageTitle('.:CCE:.');
	$.getScript('../assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js');//table responsive
	//$.getScript('../assets/plugins/datatables.net/js/jquery.dataTables.min.js'); //Datatable
	$.getScript('../assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js');//buttons
	$.getScript('../assets/plugins/datatables.net-buttons/js/buttons.html5.min.js');//all functions
	//$.getScript('../assets/plugins/pdfmake/build/pdfmake.min.js');//pdf 
	//$.getScript('../assets/plugins/jszip/dist/jszip.min.js');//excel
	$.getScript('../assets/js/tables/table_subir_trabajo.js');
	$.getScript('./js/gestion_trabajos/form_subir_trabajos.js?upd=1');
	$.getScript('./js/fnc_slc.js');
</script>
<!-- ================== END core-js ================== -->


<script>
function radios_autores(valor){
	if(valor == 0){
		$("#rd_ap_no").prop('checked', true);
		$("#rd_ap_si").prop('checked', false);
	}else{                     
		$("#rd_ap_si").prop('checked', true);
		$("#rd_ap_no").prop('checked', false); 
	}
//                return true;
}
</script>



<script>
	$('.actualizarBtn').click(function() {
	$('#modalActualizar').modal('show');
	});
</script>
