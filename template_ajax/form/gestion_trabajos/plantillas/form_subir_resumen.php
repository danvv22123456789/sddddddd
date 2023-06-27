<!-- BEGIN breadcrumb -->
<ol class="breadcrumb float-xl-end">
	<li class="breadcrumb-item"><a href="javascript:;">Inicio</a></li>
	<li class="breadcrumb-item"><a href="javascript:;">Gestión Trabajos</a></li>
	<li class="breadcrumb-item active">Subir Resumen</li>
</ol>
<!-- END breadcrumb -->
<!-- BEGIN page-header -->
<h1 class="page-header">Gestión de Trabajos<small></small></h1>
<!-- END page-header -->
<!-- BEGIN row -->
<div class="row">
	<!-- BEGIN col-6 -->
	<div class="col-xl-12">
		<!-- BEGIN panel -->
		<div class="panel panel-inverse" data-sortable-id="form-validation-1">
			<!-- BEGIN panel-heading -->
			<div class="panel-heading">
				<h4 class="panel-title">Subir Resumen</h4>
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
				<form class="form-horizontal" data-parsley-validate="true" method="POST" enctype="multipart/form-data" name='form_resumen' id='form_resumen' role="form">

					<div class="container">
						<div class="row">
							<div class="col-sm-6 col-md-5 col-lg-6">
								<br>
								<div class="form-group row mb-3">
									<label class="col-lg-4 col-form-label form-label" for="message">Título*:</label>
									<div class="col-lg-8">
										<textarea class="form-control" id="titulo_trabajo" name="titulo_trabajo" rows="2" data-parsley-minlength="20" data-parsley-maxlength="1000" placeholder="Escriba el título del trabajo" data-parsley-required="true"></textarea>
									</div>
								</div><br><br>


								<div class="form-group row mb-3">
									<label class="col-lg-4 col-form-label form-label">Documento de investigación:</label>
									<div class="col-lg-8">
										<input type="file" id="archivo_trabajo" name="archivo_trabajo_resumen" accept=".odt, .doc, .docx" class="form-control" />
									</div>
								</div><br><br>

								<div class="form-group row mb-3">
									<label class="col-lg-4 col-form-label form-label">Nombre:</label>
									<div class="col-lg-8">
										<input class="form-control" type="text" id="nombreautor" name="nombreautor" placeholder="Escriba Nombre del Autor" data-parsley-required="true" />
									</div>
								</div><br><br>


								<div class="form-group row mb-3">
									<label class="col-lg-4 col-form-label form-label">Correo:</label>
									<div class="col-lg-8">
										<input type="text" id="correo" name="correo" class="form-control" placeholder="Escriba el correo electrónico" required/>
									</div>
								</div>


							</div>

							<div class="col-sm-6 col-md-5 col-lg-6">


								<br>
								<div class="form-group row mb-3" id="preguntaautores" name="preguntaautores">
									<label class="col-lg-4 col-form-label form-label">El trabajo tiene mas autores:</label>
									<div class="col-lg-8">
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="tautor" id="tautor_si" value="1" />
											<label for="tautor_si">Si</label></input>
										</div>

										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="tautor" id="tautor_no" value="0" checked="true" />
											<label for="tautor_no">No</label></input>
										</div>
									</div>
								</div>
								<div class="form-group row mb-3" id="tautores" name="tautores">
									<label class="col-lg-4 col-form-label form-label">Ingrese el número de autores además de usted...</label>
									<div class="col-lg-8">
										<input id="n_autores" name="n_autores" type="number" class="form-control" placeholder="Número de autores" min="0" max="99" maxlength="2"></input>
									</div>
								</div>

								<div class="form-group row mb-3" id="frm_coautores" name="frm_coautores">

								</div>

							</div>
						</div>
					</div>

					<br>
					<div class="form-group row ">
						<label class="col-lg-4 col-form-label form-label">&nbsp;</label>
						<div class="col-lg-8">
							<input type='hidden' name='caso' id='caso' value='crear_resumen' />
							<input type='hidden' name='id' id='id' value='' />
							<a id="subir_resumen" onclick="subir_resumen()" type="submit" class="btn btn-success btn-primary d-block h-45px w-50 btn-lg fs-14px">Guardar</a>
						</div>
					</div>

					</div>
				</form>
			</div>
			<!-- END panel-body -->
		</div>
		<!-- END panel -->
	</div>
	<!-- END col-6 -->
	<!-- END col-6 -->
</div>

</div>
<!-- END row -->



<!-- ================== BEGIN core-js ================== -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
<script>
	App.setPageTitle('.:CCE:.');
	$.getScript('./js/gestion_trabajos/subir_resumen.js');
</script>
<!-- ================== END core-js ================== -->



<script>
	$("#tautores").hide();
	$("#frm_coautores").hide(); //ocultamos al cargar el formulario el div frm_coautores
	$("input[type=radio][name=tautor]").change(function() {
		if ($("#tautor_si").is(":checked")) {
			$("#tautores").show();
		} else {
			$("#tautores").hide();
		}
	});

	//CUANDO INGRESE EL NUMERO DE AUTORES, CONSTRUYE EL FORMULARIO PARA INGRESAR EL COAUTOR
	$("input[type=number][name=n_autores]").change(function() {

		if ($(this).val() > 0) {
			$("#frm_coautores").show();
			$("#frm_coautores").html("");

			var num = 1;
			var limite = this.value;
			//alert(num);
			/*onkeypress="autocompletarusuariost(this.value,'+i+');"*/
			if (num != 0 && num <= limite) {
				$("#frm_coautores").append('<div class="alert alert-warning alert-dismissible fade show text-center"> Ingrese la información de los autores<button type="button" class="btn-close" data-bs-dismiss="alert"></span></div>');
				for (var i = 1; i <= limite; i++) {
					$("#frm_coautores").append('<div class="panel panel-inverse"><div class="panel-heading bg-cyan-700 text-white"><h4 class="panel-title">Autor: ' + ' ' + i + '</h4></div><div class="panel-body bg-gray-200"><div class="form-group row mb-3" ><input autocomplete="false" type="text" name="correo_autor' + i + '" id="correo_autor' + i + '" placeholder="Ingrese el correo del autor" class="form-control"  ></input></div><div class="form-group row mb-3" ><input type="text" name="primer_nombre' + i + '" id="primer_nombre' + i + '" placeholder="Ingrese el primer nombre del autor" class="form-control"></input></div><div class="form-group row mb-3" ><input type="text" name="primer_apellido' + i + '" id="primer_apellido' + i + '" placeholder="Ingrese el primer apellido del autor" class="form-control"></input></div><div class="form-group row mb-3"><label class="col-lg-5 col-form-label form-label">¿Es el autor principal del trabajo?</label><div class="col-lg-7"><div class="form-check form-check-inline"><input class="form-check-input" type="radio" id="rd_ap_si' + i + '" value="1" name="rd_ap_' + i + '" /><label  for="rd_ap_si' + i + '">Si</label></input></div><div class="form-check form-check-inline"><input class="form-check-input" type="radio" id="rd_ap_no' + i + '" value="0" name="rd_ap_' + i + '" onclick="radios_autores(this.value,' + i + ',' + num + ');" checked="true"/><label for="rd_ap_no' + i + '">No</label></input></div></div></div></div></div></div></div>');
				}
			}

		} else {
			$("#frm_coautores").hide();
		}

	});
</script>