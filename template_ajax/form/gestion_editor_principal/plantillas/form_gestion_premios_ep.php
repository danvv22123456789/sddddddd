
<!-- BEGIN breadcrumb -->
<ol class="breadcrumb float-xl-end">
	<li class="breadcrumb-item"><a href="javascript:;">Inicio</a></li>
    <li class="breadcrumb-item"><a href="javascript:;">Editores</a></li>
    <li class="breadcrumb-item active">Editor Principal</li>
    <li class="breadcrumb-item active">Gestión Premios</li>
</ol>
<!-- END breadcrumb -->
<!-- BEGIN page-header -->
<h1 class="page-header">Gestión de Premios<small></small></h1>
<!-- END page-header -->
<!-- BEGIN row -->
<div class="row">
<form enctype="multipart/form-data" method='POST' name='form_gestion_premio'  id='form_gestion_premio' class='form-horizontal form-bord forered' data-parsley-validate='true'> 


	<!-- BEGIN col-6 -->
	<div class="col-xl-12">
		<!-- BEGIN panel -->
		<div class="panel panel-inverse" data-sortable-id="form-validation-2">
			<!-- BEGIN panel-heading -->
			<div class="panel-heading">
				<h4 class="panel-title">Asignar Premios a Trabajo</h4>
				<div class="panel-heading-btn">
					<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
				</div>
			</div>
			
    
            <!-- BEGIN panel-body -->
			<div class="panel-body">
				<table  id="tbl_premio_a_trabajo" name="tbl_premio_a_trabajo" class="table table-striped table-bordered align-middle display responsive no-wrap" width="100%">
					<thead>
						<tr>
							<th width="1%">N.</th>
							<th class="text-nowrap">Temática Asociada</th>
							<th class="text-nowrap">Premios disponibles</th>
                            <th class="text-nowrap">Premios ya asignados</th>
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

               <!-- #modal-dialog1 -->                                    
               <div class='modal fade' id='premio_trabajo'  >                                    
                        <div class='modal-dialog modal-lg' >
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                                <h4 class='modal-title'>Premios a Trabajo</h4>
                                        </div>
                                        <div class='modal-body'>
                                            <div class="row">
                                               <div class='form-group' align="center">
                                                    <div class='col-md-6'>
                                                        <label class='control-label' for='fullname'>Premio</label>
                                                        <select style="height: 125px;" multiple='' id='origen_premios' name='origen_premios' class='form-control'>
                                                        </select>
                                                    </div>
                                                    <div class='col-md-6' id="tabajos_tematica" style="text-align: justify; float: right;">
                                                        
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class='control-label' for='fullname'>Asociar Premio</label>
                                                        <select style="height: 95px;" multiple='' id='destino_premio' name='destino_premio[]' class='form-control'>
                                                        </select>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" id="formulario" value="">
                                        <input type="hidden" id="caso" value="asoc_form_tematica">
                                        <div class='modal-footer'>
                                            <a href='javascript:;'  class='btn btn-sm btn-danger btn-rounded' id="cancelar_asociar_pre_trab">Cancelar</a>
                                            <a type='button' id="btn_asociar_premio_trabajo" class='btn btn-sm btn-success btn-rounded'>Guardar</a>
                                        </div>
                                    </div>
                        </div>                                    
                </div>

               <!-- /modal-dialog1 -->
               
               <div class='modal fade' id='premio_automatico'  >                                    
                        <div class='modal-dialog modal-lg' >
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                                <h4 class='modal-title'>Premio Autor</h4>
                                        </div>
                                        <div class='modal-body'>
                                            <div class="row">
                                               <div class='form-group' align="center">
                                                    <div class='col-md-6' id="premios_tematica_auto" style="text-align: justify; ">
                                                        
                                                    </div>
                                                    <div class='col-md-6' id="tabajos_tematica_auto" style="text-align: justify; float: right;">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" id="formulario" value="">
                                        <input type="hidden" id="caso" value="asoc_form_tematica">
                                        <div class='modal-footer'>
                                            <a href='javascript:;'  class='btn btn-sm btn-danger btn-rounded' id="cancelar_pre_auto">Cancelar</a>
                                            <a type='button' id="btn_asociar_premio_auto" class='btn btn-sm btn-success btn-rounded'>Guardar</a>
                                        </div>
                                    </div>
                        </div>                                    
                </div>
               
</form>
</div>
<!-- END row -->



<script src="./js/fnc_select_multiple.js" type="text/javascript"></script>
<script src="./js/gestion_editor_principal/gestion_premios_ep.js"></script>





<!-- ================== BEGIN core-js ================== -->
<script>
	App.setPageTitle('.:CEAT:.');
	App.restartGlobalFunction();
	
	$.when(
		$.getScript('../assets/plugins/parsleyjs/dist/parsley.min.js'),
		$.getScript('../assets/plugins/@highlightjs/cdn-assets/highlight.min.js'),
		$.Deferred(function( deferred ){
			$(deferred.resolve);
		})
	).done(function() {
		$.getScript('../assets/js/demo/render.highlight.js'),
		$.Deferred(function( deferred ){
			$(deferred.resolve);
		})
	});
</script>
<!-- ================== END core-js ================== -->


<!-- ================== BEGIN page-js ================== -->
<script>
    
	$.getScript('../assets/plugins/datatables.net/js/jquery.dataTables.min.js').done(function() {
		$.when(
			$.getScript('../assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js'),
			$.getScript('../assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js'),
			$.getScript('../assets/plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js'),
			$.Deferred(function( deferred ){
				$(deferred.resolve);
			})
		).done(function() {
			$.getScript('../assets/js/tables/table_gestion_premios_ep.js'),
			$.Deferred(function( deferred ){
				$(deferred.resolve);
			})
		});
	});
	
	$.when(
		$.getScript('../assets/plugins/@highlightjs/cdn-assets/highlight.min.js'),
		$.Deferred(function( deferred ){
			$(deferred.resolve);
		})
	).done(function() {
		$.getScript('../assets/js/demo/render.highlight.js'),
		$.Deferred(function( deferred ){
			$(deferred.resolve);
		})
	});
</script>
<!-- ================== END page-js ================== -->

