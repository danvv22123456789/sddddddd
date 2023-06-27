

<!-- BEGIN breadcrumb -->
<ol class="breadcrumb float-xl-end">
	<li class="breadcrumb-item"><a href="javascript:;">Inicio</a></li>
	<li class="breadcrumb-item"><a href="javascript:;">Gestión de roles</a></li>
	<li class="breadcrumb-item active">Roles</li>
</ol>
<!-- END breadcrumb -->
<!-- BEGIN page-header -->
<h1 class="page-header">Gestión de Roles<small></small></h1>
<!-- END page-header -->
<!-- BEGIN panel -->
<div class="panel panel-inverse">
	<!-- BEGIN panel-heading -->
	<div class="panel-heading">
		<h4 class="panel-title">Creación de Roles</h4>
		<div class="panel-heading-btn">
			<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
			<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
		</div>
	</div>
	<!-- END panel-heading -->
	
	<!-- BEGIN panel-heading -->
	<div class="panel-body">
    <form class="form-horizontal" data-parsley-validate="true" method="POST"   id="form_congresos" name = "form_congresos" role="form" role="form">
		<!-- BEGIN nav-tabs -->
		<ul id="ioniconsTab" class="nav nav-pills mb-3">
			<li class="nav-item"><a href="#outline" data-bs-toggle="tab" class="nav-link active d-flex align-items-center"><ion-icon name="aperture-outline" class="fs-10px"></ion-icon><span class="d-none d-lg-inline ms-2">Solicitudes de Revisión</span>&nbsp;</a></li>
			<li class="nav-item ms-2"><a href="#filled" data-bs-toggle="tab" class="nav-link d-flex align-items-center"><ion-icon name="aperture" class="fs-10px"></ion-icon><span class="d-none d-lg-inline ms-2">Revisores</span>&nbsp;</a></li>
            <li class="nav-item"><a href="#outline" data-bs-toggle="tab" class="nav-link d-flex align-items-center"><ion-icon name="aperture" class="fs-10px"></ion-icon><span class="d-none d-lg-inline ms-2">Editor Gestor</span>&nbsp;</a></li>
			<li class="nav-item ms-2"><a href="#filled" data-bs-toggle="tab" class="nav-link d-flex align-items-center"><ion-icon name="aperture" class="fs-10px"></ion-icon><span class="d-none d-lg-inline ms-2">Editores Principales</span>&nbsp;</a></li>
            <li class="nav-item"><a href="#outline" data-bs-toggle="tab" class="nav-link  d-flex align-items-center"><ion-icon name="aperture" class="fs-10px"></ion-icon><span class="d-none d-lg-inline ms-2">Editores Principales de Sección</span>&nbsp;</a></li>
			<li class="nav-item ms-2"><a href="#filled" data-bs-toggle="tab" class="nav-link d-flex align-items-center"><ion-icon name="aperture" class="fs-10px"></ion-icon><span class="d-none d-lg-inline ms-2">Editores Secundarios de Sección</span>&nbsp;</a></li>
            <li class="nav-item"><a href="#outline" data-bs-toggle="tab" class="nav-link d-flex align-items-center"><ion-icon name="aperture" class="fs-10px"></ion-icon><span class="d-none d-lg-inline ms-2">Encargado de Programa</span>&nbsp;</a></li>
			<li class="nav-item ms-2"><a href="#filled" data-bs-toggle="tab" class="nav-link d-flex align-items-center"><ion-icon name="aperture" class="fs-10px"></ion-icon><span class="d-none d-lg-inline ms-2">Encargado Voluntarios</span>&nbsp;</a></li>
        </ul>
		<!-- END nav-tabs -->
		<hr class="bg-gray-500" />
		
        <!-- BEGIN tab-content -->
		<div id="ioniconsTabContent" class="tab-content rounded-bottom fs-13px">
			<!-- BEGIN tab-pane -->
			<div class="tab-pane fade show active" id="outline">
				<!-- BEGIN row -->
				<div class="row">

                <div class="container">



                </div><!-- END container -->
                </div><!-- END ROW -->

			</div>
			<!-- END tab-pane -->



			<!-- BEGIN tab-pane -->
			<div class="tab-pane fade" id="filled">
				<div class="row">

                <div class="container">

                </div><!-- END container -->
                </div><!-- END ROW -->
			</div>
			<!-- END tab-pane -->


		</form>
	</div>
	<!-- END panel-body -->

	</div>
	</div>


	

	
	<!-- BEGIN col-6 -->
	<div class="col-xl-12">
		<!-- BEGIN panel -->
		<div class="panel panel-inverse" data-sortable-id="form-validation-2">
			<!-- BEGIN panel-heading -->
			<div class="panel-heading">
				<h4 class="panel-title">Congresos existentes</h4>
				<div class="panel-heading-btn">
					<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
				</div>
			</div>

            <!-- BEGIN panel-body -->
			<div class="panel-body">
				<table id="data-table-responsive" class="table table-striped table-bordered align-middle display responsive no-wrap" width="100%">
					<thead>
						<tr>
							<th width="1%">N.</th>
							<th class="text-nowrap">Nombre del congreso</th>
							<th class="text-nowrap">Año</th>
							<th class="text-nowrap">Estado</th>
							<th class="text-nowrap">Acciones</th>
						</tr>
					</thead>
					<tbody>
						<tr class="odd gradeX">
							<td width="1%" class="fw-bold text-dark">1</td>
							<td>Win 95+</td>
							<td>4</td>
							<td>X</td>
							<td>X</td>
						</tr>
						<tr class="even gradeC">
							<td width="1%" class="fw-bold text-dark">2</td>
							<td>Win 95+</td>
							<td>5</td>
							<td>C</td>
							<td>C</td>
						</tr>
					</tbody>
				</table>
			</div>
			<!-- END panel-body -->




	



<!-- ================== BEGIN core-js ================== -->


<script>

	</script>

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
			$.getScript('../assets/js/demo/table-manage-responsive.demo.js'),
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

<!-- ================== BEGIN page-js ================== -->
<script>
	$.getScript('../assets/plugins/jquery-migrate/dist/jquery-migrate.min.js').done(function() {
		$.when(
			$.getScript('../assets/plugins/moment/min/moment.min.js'),
			$.getScript('../assets/plugins/bootstrap-daterangepicker/daterangepicker.js'),
			$.getScript('../assets/plugins/select2/dist/js/select2.min.js'),
			$.getScript('../assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js'),
			$.getScript('../assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js'),
			$.getScript('../assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js'),
			$.getScript('../assets/plugins/jquery.maskedinput/src/jquery.maskedinput.js'),
			$.getScript('../assets/plugins/tag-it/js/tag-it.min.js'),
			$.getScript('../assets/plugins/clipboard/dist/clipboard.min.js'),
			$.getScript('../assets/plugins/spectrum-colorpicker2/dist/spectrum.min.js'),
			$.getScript('../assets/plugins/select-picker/dist/picker.min.js'),
			$.Deferred(function( deferred ){
				$(deferred.resolve);
			})
		).done(function() {
			$.getScript('../assets/js/demo/form-plugins.demo.js'),
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


<!-- script -->
<script>
  $("#datepicker-autoClose1").datepicker({
    todayHighlight: true,
    autoclose: true
  });

  $("#datepicker-autoClose2").datepicker({
    todayHighlight: true,
    autoclose: true
  });

  $("#datepicker-autoClose3").datepicker({
    todayHighlight: true,
    autoclose: true
  });

  $("#datepicker-autoClose4").datepicker({
    todayHighlight: true,
    autoclose: true
  });

  $("#datepicker-autoClose5").datepicker({
    todayHighlight: true,
    autoclose: true
  });

  $("#datepicker-autoClose6").datepicker({
    todayHighlight: true,
    autoclose: true
  });

  $("#datepicker-autoClose7").datepicker({
    todayHighlight: true,
    autoclose: true
  });
</script>