<!-- required files -->
<link href="../assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" />
<script src="../assets/plugins/select2/dist/js/select2.min.js"></script>

<!-- BEGIN breadcrumb -->
<ol class="breadcrumb float-xl-end">
	<li class="breadcrumb-item"><a href="javascript:;">Inicio</a></li>
	<li class="breadcrumb-item"><a href="javascript:;">Congresos</a></li>
	<li class="breadcrumb-item active">Gestión Líneas de investigación</li>
</ol>
<!-- END breadcrumb -->
<!-- BEGIN page-header -->
<h1 class="page-header">Gestion del Programa<small></small></h1>
<!-- END page-header -->
<!-- BEGIN row -->

<form enctype="multipart/form-data" method='POST' name='form_distribucion_trabajos' id='form_distribucion_trabajos' class='form-horizontal form-bord <forered' data-parsley-validate='true'>
	<div class="row">
		<!-- BEGIN col-6 -->
		<div class="col-xl-6">
			<!-- BEGIN panel -->
			<div class="panel panel-inverse" data-sortable-id="form-validation-1">
				<!-- BEGIN panel-heading -->
				<div class="panel-heading">
					<h4 class="panel-title">Distribución de trabajos en sesiones paralelas</h4>
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

					<div class="form-group row mb-3">
						<label class="form-label col-form-label col-lg-4">Tematica:</label>
						<div class="col-lg-8">
							<select id="tematicas_trabajo" name="tematicas_trabajo" class="default-select2 form-control" onchange="buscatrab(this.value);buscaactividad(this.value);">
								<option value="AK">Alaska</option>
								<option value="HI">Hawaii</option>
							</select>
						</div>
					</div>


					<table id="tbl_distribucion" name="tbl_distribucion" class="table table-striped table-bordered align-middle display responsive no-wrap" width="100%">
						<thead>
							<tr>
								<th width="1%">N.</th>
								<th class="text-nowrap">Opciones Disponibles</th>
								<th class="text-nowrap">Selecciones</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th style="font-size: 12px; text-align: justify;">1</th>
								<th style="font-size: 12px; text-align: center;">4 Trabajos por sesión (10-15 min c/u)</th>
								<th style="font-size: 12px; text-align: center;">
									<div class="checkbox checkbox-success">
										<input id="4hora" type="checkbox" onclick="hora4();">
										<label for="4hora"></label>
									</div>
								</th>
							</tr>
							<tr>
								<th style=" font-size: 12px; text-align: justify;">2</th>
								<th style=" font-size: 12px;  text-align: center;">3 Trabajos por sesión (15-20 min c/u)</th>
								<th style="font-size: 12px; text-align: center;">
									<div class="checkbox checkbox-success">
										<input id="3hora" type="checkbox" onclick="hora3();">
										<label for="3hora"></label>
									</div>
								</th>
							</tr>
							<tr>
								<th style="font-size: 12px; text-align: justify;">3</th>
								<th style="font-size: 12px; text-align: center;">2 Trabajos por sesión (25-30 min c/u)</th>
								<th style="font-size: 12px; text-align: center;">
									<div class="checkbox checkbox-success">
										<input id="2hora" type="checkbox" onclick="hora2();">
										<label for="2hora"></label>
									</div>
								</th>
							</tr>
							<tr>
								<th style="font-size: 12px; text-align: justify;">4</th>
								<th style="font-size: 12px; text-align: center;">1 Trabajo por sesión (55-60 min c/u)</th>
								<th style="font-size: 12px; text-align: center;">
									<div class="checkbox checkbox-success">
										<input id="1hora" type="checkbox" onclick="hora1();">
										<label for="1hora"></label>
									</div>
								</th>
							</tr>
						</tbody>
					</table>

				</div>
				<!-- END panel-body -->
				<div class="form-group" align="center">
					<button type="button" onclick="distribucion_automatica();" id="btn_distribucion_automatica" class="btn btn-success btn-rounded w-md waves-effect waves-light m-b-5">Distribución Automática</button>
					<button type="button" disabled="true" onclick="guardar_distribucion();" id="btn_guardar_distribucion" class="btn btn-primary btn-rounded w-md waves-effect waves-light m-b-5">Guardar Distribución</button>
					<input type='hidden' name='caso' id='caso' value='insertar_distribucion_trabajos' />
					<input type='hidden' name='iddistribucion' id='iddistribucion' value='0' />
					<input type='hidden' name='cant_act' id='cant_act' value='0' />
					<input type='hidden' name='cant_trab' id='cant_trab' value='0' />
				</div>
				</br>
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
					<h4 class="panel-title">Tematicas con distribución asignada</h4>
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
					</div>
				</div>


				<!-- BEGIN panel-body -->
				<div class="panel-body">
					<table id="tbl_distribuciontematica" name="tbl_distribuciontematica" class="table table-striped table-bordered align-middle display responsive no-wrap" width="100%">
						<thead>
							<tr>
								<th width="1%">N.</th>
								<th class="text-nowrap">Temáticas con Distibución</th>
								<th class="text-nowrap">Distribución Elegida</th>
							</tr>
						</thead>

					</table>
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
					<h4 class="panel-title">Distribución de Trabajos en Sesiones</h4>
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
					</div>
				</div>


				<!-- BEGIN panel-body -->
				<div class="panel-body">
					<table id='tbl_distribucion_trabajos' name="tbl_distribucion_trabajos" class="table table-striped table-bordered align-middle display responsive no-wrap" width="100%">
						<thead>
							<tr>
								<th width="1%">N.</th>
								<th class="text-nowrap">Fecha de presentación</th>
								<th class="text-nowrap">Inicia</th>
								<th class="text-nowrap">Finaliza</th>
								<th class="text-nowrap">Nombre del Trabajo</th>
								<th class="text-nowrap">Resumen</th>
								<th class="text-nowrap">Tipo de trabajo</th>
								<th class="text-nowrap">Idioma</th>
								<th class="text-nowrap">Autor(es)</th>
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

</form>




<script src="./js/fnc_slc.js" type="text/javascript"></script>
<script src="./js/gestion_programa/gestion_programa.js"></script>



<!-- required files -->
<link href="../assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" />
<script src="../assets/plugins/select2/dist/js/select2.min.js"></script>

<!-- ================== END page-css ================== -->

<!-- ================== BEGIN page-css ================== -->
<link href="../assets/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
<link href="../assets/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" />
<!-- ================== END page-css ================== -->

<!-- required files -->
<link href="../assets/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
<link href="../assets/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" />
<link href="../assets/plugins/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" />
<link href="../assets/plugins/datatables.net-colreorder-bs5/css/colReorder.bootstrap5.min.css" rel="stylesheet" />
<link href="../assets/plugins/datatables.net-keytable-bs5/css/keyTable.bootstrap5.min.css" rel="stylesheet" />
<link href="../assets/plugins/datatables.net-rowreorder-bs5/css/rowReorder.bootstrap5.min.css" rel="stylesheet" />
<link href="../assets/plugins/datatables.net-select-bs5/css/select.bootstrap5.min.css" rel="stylesheet" />

<script src="../assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="../assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="../assets/plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
<script src="../assets/plugins/datatables.net-colreorder/js/dataTables.colReorder.min.js"></script>
<script src="../assets/plugins/datatables.net-colreorder-bs5/js/colReorder.bootstrap5.min.js"></script>
<script src="../assets/plugins/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="../assets/plugins/datatables.net-keytable-bs5/js/keyTable.bootstrap5.min.js"></script>
<script src="../assets/plugins/datatables.net-rowreorder/js/dataTables.rowReorder.min.js"></script>
<script src="../assets/plugins/datatables.net-rowreorder-bs5/js/rowReorder.bootstrap5.min.js"></script>
<script src="../assets/plugins/datatables.net-select/js/dataTables.select.min.js"></script>
<script src="../assets/plugins/datatables.net-select-bs5/js/select.bootstrap5.min.js"></script>
<script src="../assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="../assets/plugins/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
<script src="../assets/plugins/datatables.net-buttons/js/buttons.colVis.min.js"></script>
<script src="../assets/plugins/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="../assets/plugins/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="../assets/plugins/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="../assets/plugins/pdfmake/build/pdfmake.min.js"></script>
<script src="../assets/plugins/pdfmake/build/vfs_fonts.js"></script>
<script src="../assets/plugins/jszip/dist/jszip.min.js"></script>




<!-- ================== BEGIN core-js ================== -->
<script>
	App.setPageTitle('.:CEAT:.');
	App.restartGlobalFunction();

	$.when(
		$.getScript('../assets/plugins/parsleyjs/dist/parsley.min.js'),
		$.getScript('../assets/plugins/@highlightjs/cdn-assets/highlight.min.js'),
		$.Deferred(function(deferred) {
			$(deferred.resolve);
		})
	).done(function() {
		$.getScript('../assets/js/demo/render.highlight.js'),
			$.Deferred(function(deferred) {
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
			$.Deferred(function(deferred) {
				$(deferred.resolve);
			})
		).done(function() {
			$.getScript('../assets/js/tables/table_gestion_li.js'),
				$.Deferred(function(deferred) {
					$(deferred.resolve);
				})
		});
	});

	$.when(
		$.getScript('../assets/plugins/@highlightjs/cdn-assets/highlight.min.js'),
		$.Deferred(function(deferred) {
			$(deferred.resolve);
		})
	).done(function() {
		$.getScript('../assets/js/demo/render.highlight.js'),
			$.Deferred(function(deferred) {
				$(deferred.resolve);
			})
	});
</script>
<!-- ================== END page-js ================== -->




<script>
	$(".default-select2").select2();
	$(".multiple-select2").select2({
		placeholder: "Select a state"
	});
</script>


<script>
            function aviso(){
                alert('@@nodisponible@@');
            }
            function avisoarchivo(){
                alert('@@trabajonoenviadoarevision@@');
            }
            function avisonoexiste(){
                 alert('@@archivonoexiste@@');
            }
            function radios_opciones(id, valor){
                $("#"+id).prop('checked', true);
                for(var i=1; i<=4;i++){
                    if(i != valor){
                        $("#"+i+"hora").prop('checked', false);
                    }
                }
            }
             /*funciones para validar el numero de trab por hora*/
            function hora4(){
                var cant_trab = $("#cant_trab").val();
                var cant_act = $("#cant_act").val();                
                if(cant_act != 0 && cant_trab != 0){
                    if(cant_trab >= cant_act){ 
                        radios_opciones('4hora',4); 
                        /*llamada a sesiones necesarias*/
                        sesiones_necesarias(4);
                    }else{
                         alert("@@mj_trabajos_insuficientes_para_la_distribucion@@");
                            $("#4hora").prop("checked", false);
                            $("#3hora").prop("checked", false);
                            $("#2hora").prop("checked", false);
                            $("#1hora").prop("checked", false);
                            $("#cont_sesiones").css('display','none');
                    }
                }else if(cant_act != 0 || cant_trab != 0){
                    if(cant_act != 0){
                        alert("@@no_exiten_trabajos@@");
                        $("#4hora").prop("checked", false);
                        $("#3hora").prop("checked", false);
                        $("#2hora").prop("checked", false);
                        $("#1hora").prop("checked", false);
                        $("#cont_sesiones").css('display','none');
                    }else{
                        alert("@@no_exiten_sesiones@@");
                        $("#4hora").prop("checked", false);
                        $("#3hora").prop("checked", false);
                        $("#2hora").prop("checked", false);
                        $("#1hora").prop("checked", false);
                        $("#cont_sesiones").css('display','none');
                    }
                }else{
                    alert("@@no_existen_trabajos_ni_sesiones@@");
                    $("#4hora").prop("checked", false);
                    $("#3hora").prop("checked", false);
                    $("#2hora").prop("checked", false);
                    $("#1hora").prop("checked", false);
                    $("#cont_sesiones").css('display','none');
                }
                
                $("#btn_guardar_distribucion").attr('disabled',true);
                $("#iddistribucion").val(4);
            }
            function hora3(){
                var cant_trab = $("#cant_trab").val();
                var cant_act = $("#cant_act").val();                
                if(cant_act != 0 && cant_trab != 0){
                    if(cant_trab >= cant_act){ 
                        radios_opciones('3hora',3);  
                        /*llamada a sesiones necesarias*/
                        sesiones_necesarias(3);
                    }else{
                         alert("@@mj_trabajos_insuficientes_para_la_distribucion@@");
                            $("#4hora").prop("checked", false);
                            $("#3hora").prop("checked", false);
                            $("#2hora").prop("checked", false);
                            $("#1hora").prop("checked", false);
                            $("#cont_sesiones").css('display','none');
                    }
                }else if(cant_act != 0 || cant_trab != 0){
                    if(cant_act != 0){
                        alert("@@no_exiten_trabajos@@");
                        $("#4hora").prop("checked", false);
                        $("#3hora").prop("checked", false);
                        $("#2hora").prop("checked", false);
                        $("#1hora").prop("checked", false);
                        $("#cont_sesiones").css('display','none');
                    }else{
                        alert("@@no_exiten_sesiones@@");
                        $("#4hora").prop("checked", false);
                        $("#3hora").prop("checked", false);
                        $("#2hora").prop("checked", false);
                        $("#1hora").prop("checked", false);
                        $("#cont_sesiones").css('display','none');
                    }
                }else{
                    alert("@@no_existen_trabajos_ni_sesiones@@");
                    $("#4hora").prop("checked", false);
                    $("#3hora").prop("checked", false);
                    $("#2hora").prop("checked", false);
                    $("#1hora").prop("checked", false);
                    $("#cont_sesiones").css('display','none');
                }
                $("#btn_guardar_distribucion").attr('disabled',true);
                $("#iddistribucion").val(3);
            }
            function hora2(){
                var cant_trab = $("#cant_trab").val();
                var cant_act = $("#cant_act").val();                
                if(cant_act != 0 && cant_trab != 0){
                    if(cant_trab >= cant_act){ 
                        radios_opciones('2hora',2);  
                        /*llamada a sesiones necesarias*/
                        sesiones_necesarias(2);
                    }else{
                         alert("@@mj_trabajos_insuficientes_para_la_distribucion@@");
                            $("#4hora").prop("checked", false);
                            $("#3hora").prop("checked", false);
                            $("#2hora").prop("checked", false);
                            $("#1hora").prop("checked", false);
                            $("#cont_sesiones").css('display','none');
                    }
                }else if(cant_act != 0 || cant_trab != 0){
                    if(cant_act != 0){
                        alert("@@no_exiten_trabajos@@");
                        $("#4hora").prop("checked", false);
                        $("#3hora").prop("checked", false);
                        $("#2hora").prop("checked", false);
                        $("#1hora").prop("checked", false);
                        $("#cont_sesiones").css('display','none');
                    }else{
                        alert("@@no_exiten_sesiones@@");
                        $("#4hora").prop("checked", false);
                        $("#3hora").prop("checked", false);
                        $("#2hora").prop("checked", false);
                        $("#1hora").prop("checked", false);
                        $("#cont_sesiones").css('display','none');
                    }
                }else{
                    alert("@@no_existen_trabajos_ni_sesiones@@");
                    $("#4hora").prop("checked", false);
                    $("#3hora").prop("checked", false);
                    $("#2hora").prop("checked", false);
                    $("#1hora").prop("checked", false);
                    $("#cont_sesiones").css('display','none');
                } 
                $("#btn_guardar_distribucion").attr('disabled',true);
                $("#iddistribucion").val(2);
            }
            function hora1(){
//                $("#cont_sesiones").Attr('display','none');
//                $("#sesiones_necesarias").text("0"); 
                var cant_trab = $("#cant_trab").val();
                var cant_act = $("#cant_act").val();                
                if(cant_act != 0 && cant_trab != 0){
                    if(cant_trab >= cant_act){ 
                        radios_opciones('1hora',1);
                         /*llamada a sesiones necesarias*/
                          sesiones_necesarias(1);
                    }else{
                         alert("@@mj_trabajos_insuficientes_para_la_distribucion@@");
                            $("#4hora").prop("checked", false);
                            $("#3hora").prop("checked", false);
                            $("#2hora").prop("checked", false);
                            $("#1hora").prop("checked", false);
                            $("#cont_sesiones").css('display','none');
                    }
                }else if(cant_act != 0 || cant_trab != 0){
                    if(cant_act != 0){
                        alert("@@no_exiten_trabajos@@");
                        $("#4hora").prop("checked", false);
                        $("#3hora").prop("checked", false);
                        $("#2hora").prop("checked", false);
                        $("#1hora").prop("checked", false);
                        $("#cont_sesiones").css('display','none');
                    }else{
                        alert("@@no_exiten_sesiones@@");
                        $("#4hora").prop("checked", false);
                        $("#3hora").prop("checked", false);
                        $("#2hora").prop("checked", false);
                        $("#1hora").prop("checked", false);
                        $("#cont_sesiones").css('display','none');
                    }
                }else{
                    alert("@@no_existen_trabajos_ni_sesiones@@");
                    $("#4hora").prop("checked", false);
                    $("#3hora").prop("checked", false);
                    $("#2hora").prop("checked", false);
                    $("#1hora").prop("checked", false);
                    $("#cont_sesiones").css('display','none');
                }
                $("#btn_guardar_distribucion").attr('disabled',true);
                $("#iddistribucion").val(1);
            }
            function sesiones_necesarias(dist){ 
                var cant_trab = $("#cant_trab").val();
//                var cant_act = $("#cant_act").val();
                var sesiones = 0;
                if(dist == 1){                     
                    sesiones = cant_trab;
                }else if(dist == 2){
                    sesiones = Math.ceil(cant_trab / 2);
                }else if(dist == 3){
                    sesiones = Math.ceil(cant_trab / 3);
                }else if(dist == 4){
                    sesiones = Math.ceil(cant_trab / 4);
                }
                $("#cont_sesiones").removeAttr('style');                
                $("#sesiones_necesarias").text(sesiones); 
                 
            }     
            
</script>