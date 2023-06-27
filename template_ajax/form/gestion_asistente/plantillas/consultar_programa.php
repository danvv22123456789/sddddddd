


<!-- BEGIN breadcrumb -->
<ol class="breadcrumb float-xl-end">
	<li class="breadcrumb-item"><a href="javascript:;">Inicio</a></li>
	<li class="breadcrumb-item"><a href="javascript:;">Gestión Asistente</a></li>
	<li class="breadcrumb-item active">Consultar Progama</li>
</ol>
<!-- END breadcrumb -->
<!-- BEGIN page-header -->
<h1 class="page-header">Gestión Asistente<small></small></h1>
<!-- END page-header -->
<!-- BEGIN row -->
<div class="row">

<!-- DUDA NAME Y ID-->
<form enctype="multipart/form-data" method='POST' name='c_programa'  id='c_programa' class='form-horizontal form-bord forered' data-parsley-validate='true'> 

	<!-- BEGIN col-6 -->
	<div class="col-xl-12">
		<!-- BEGIN panel -->
		<div class="panel panel-inverse" data-sortable-id="form-validation-2">
			<!-- BEGIN panel-heading -->
			<div class="panel-heading">
				<h4 class="panel-title">Consultar Programa</h4>
				<div class="panel-heading-btn">
					<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
				</div>
			</div>
			
           
            <!-- BEGIN panel-body -->
			<div class="panel-body">
				<table id="tbl_asis_programa" name="tbl_asis_programa"class="table table-striped table-bordered align-middle display responsive no-wrap" width="100%">
					<thead>
						<tr>
							<th width="1%">N.</th>
							<th class="text-nowrap">Tipo de Actividad</th>
                            <th class="text-nowrap">Actividades</th>
                            <th class="text-nowrap">Fecha</th>
                            <th class="text-nowrap">Fecha</th>
						</tr>
					</thead>

				</table>
</br>
                <div class="form-group" align="center">
                            <button type="submit" id="descargar_programa"  href="form/gestion_asistente/plantillas/descargar_programa.php" target="_blank" class="btn btn-success btn-rounded w-md waves-effect waves-light m-b-5">Descargar Programa</button>
                       </div>
			</div>
			<!-- END panel-body -->
		</div>
		<!-- END panel -->
	</div>
	<!-- END col-6 -->

</form>
</div>
<!-- END row -->





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
			$.getScript('../assets/js/tables/table_consultar_programa.js'),
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


