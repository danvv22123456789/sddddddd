
<head>
	<meta charset="utf-8" />
	<title>.:CEAT:.</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN core-css ================== -->
	<link href="../assets/css/vendor.min.css" rel="stylesheet" />
	<link href="../assets/css/default/app.min.css" rel="stylesheet" />
	<!-- ================== END core-css ================== -->
	<script src="../assets/js/jquery.min.js"></script>
	<script src="../assets/js/jquery.slimscroll.js"></script>
	<script src="../assets/js/jquery.nicescroll.js"></script>
    <script src="../assets/js/jquery.scrollTo.min.js"></script>
</head>

<!-- BEGIN breadcrumb -->
<ol class="breadcrumb float-xl-end">
	<li class="breadcrumb-item"><a href="javascript:;">Inicio</a></li>
	<li class="breadcrumb-item"><a href="javascript:;">Congresos</a></li>
	<li class="breadcrumb-item active">Gestión Líneas de investigación</li>
</ol>
<!-- END breadcrumb -->
<!-- BEGIN page-header -->
<h1 class="page-header">Gestionar líneas de investigación<small></small></h1>
<!-- END page-header -->
<!-- BEGIN row -->
<div class="row">
	<!-- BEGIN col-6 -->
	<div class="col-xl-6">
		<!-- BEGIN panel -->
		<div class="panel panel-inverse" data-sortable-id="form-validation-1">
			<!-- BEGIN panel-heading -->
			<div class="panel-heading">
				<h4 class="panel-title">Gestionar líneas de investigación</h4>
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
				<form class="form-horizontal"  method="POST"  id="form_lineas_investigacion"  name = "form_lineas_investigacion" role="form" data-parsley-validate novalidate>
					<div class="form-group row mb-3">
						<label class="col-lg-4 col-form-label form-label" for="fullname">Nombre* :</label>
						<div class="col-lg-8">
							<input class="form-control" type="text" id = "nombrelinea" name = "nombrelinea"  placeholder="Escriba el Nombre de la línea" data-parsley-required="true" required/>
						</div>
					</div>
                    <div class="form-group row mb-3">
						<label class="col-lg-4 col-form-label form-label" for="fullname">Abreviación* :</label>
						<div class="col-lg-8">
							<input class="form-control" type="text"  id = "abreviacion" name = "abreviacion"  placeholder="Escriba la abreviación" data-parsley-required="true" required />
						</div>
					</div>
					<div class="form-group row mb-3">
						<label class="col-lg-4 col-form-label form-label" for="message">Descripción:</label>
						<div class="col-lg-8">
							<textarea class="form-control" id = "descripcion_linea" name = "descripcion_linea"   rows="4" data-parsley-minlength="20" data-parsley-maxlength="100" placeholder="Escriba una breve descripción" data-parsley-required="true" required></textarea>
						</div>
					</div>
                    <div class="form-group row mb-3">
						<label class="col-lg-4 col-form-label form-label" for="message">Comentario:</label>
						<div class="col-lg-8">
							<textarea class="form-control" id = "comentarios_linea" name = "comentarios_linea"   rows="4" data-parsley-minlength="20" data-parsley-maxlength="100" placeholder="Escriba un breve comentario" data-parsley-required="true" required></textarea>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-lg-4 col-form-label form-label">&nbsp;</label>
						<div class="col-lg-8">
							<input type='hidden' name='caso' id='caso' value='crear_linea'/>
                            <input type='hidden' name='id' id='id' value='0'/>
							<a id = "crear_linea"   class="crear_linea btn btn-primary waves-effect waves-light">Guardar</a>
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
	<div class="col-xl-6">
		<!-- BEGIN panel -->
		<div class="panel panel-inverse" data-sortable-id="form-validation-2">
			<!-- BEGIN panel-heading -->
			<div class="panel-heading">
				<h4 class="panel-title">Lista de Líneas de investigación</h4>
				<div class="panel-heading-btn">
					<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
				</div>
			</div>
			

            <!-- BEGIN panel-body -->
			<div class="panel-body">
				<table id="tbl_gestion_li" name="tbl_gestion_li" class="table table-striped table-bordered align-middle display responsive no-wrap" width="100%">
					<thead>
						<tr>
							<th width="1%">N.</th>
							<th class="text-nowrap">Nombre Línea</th>
							<th class="text-nowrap">Descripción</th>
                            <th class="text-nowrap">Comentario</th>
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
	App.setPageTitle('.:CCE:.');
	$.getScript('../assets/plugins/datatables.net/js/jquery.dataTables.min.js'); //Datatable
	$.getScript('../assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js');//bootstrap style
	$.getScript('../assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js');//table responsive
	$.getScript('../assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js');//buttons 
	$.getScript('../assets/plugins/datatables.net-buttons/js/buttons.html5.min.js');//all functions
	$.getScript('../assets/plugins/pdfmake/build/pdfmake.min.js');//pdf 
	$.getScript('../assets/plugins/jszip/dist/jszip.min.js');//excel

	$.getScript('../assets/js/tables/table_gestion_li.js');
	$.getScript('./js/gestion_congresos_js/gestionar_linea_investigacion.js');
</script>	
