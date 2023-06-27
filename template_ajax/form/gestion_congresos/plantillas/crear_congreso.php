
<!-- BEGIN breadcrumb -->
<ol class="breadcrumb float-xl-end">
	<li class="breadcrumb-item"><a href="javascript:;">Inicio</a></li>
	<li class="breadcrumb-item"><a href="javascript:;">Congresos</a></li>
	<li class="breadcrumb-item active">Creación/Gestión</li>
</ol>
<!-- END breadcrumb -->
<!-- BEGIN page-header -->
<h1 class="page-header">Creación/Gestión<small></small></h1>
<!-- END page-header -->
<!-- BEGIN panel -->
<div class="panel panel-inverse">
	<!-- BEGIN panel-heading -->
	<div class="panel-heading">
		<h4 class="panel-title">Creación de Congreso</h4>
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
			<li class="nav-item"><a href="#outline" data-bs-toggle="tab" class="nav-link active d-flex align-items-center"><ion-icon name="aperture-outline" class="fs-18px"></ion-icon><span class="d-none d-lg-inline ms-2">Datos Generales</span>&nbsp;</a></li>
			<li class="nav-item ms-2"><a href="#filled" data-bs-toggle="tab" class="nav-link d-flex align-items-center"><ion-icon name="aperture" class="fs-18px"></ion-icon><span class="d-none d-lg-inline ms-2">Período</span>&nbsp;</a></li>
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
                <div class="row">
                <div class="col-sm-6 col-md-5 col-lg-6">
                        
                        <div class="form-group row mb-3">
                            <label class="col-lg-4 col-form-label form-label" for="fullname">Nombre* :</label>
                            <div class="col-lg-8">
                            <input class="form-control" type="text" id = "nombre_congreso"   name = "nombre_congreso" placeholder="Escriba el Nombre del congreso" data-parsley-required="true" />
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-lg-4 col-form-label form-label" for="fullname">Siglas* :</label>
                            <div class="col-lg-8">
                            <input class="form-control" type="text" id = "siglas" name = "siglas" placeholder="Escriba las siglas" data-parsley-required="true" />
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-lg-4 col-form-label form-label" for="message">Descripción:</label>
                            <div class="col-lg-8">
                                <textarea class="form-control" id = "descripcion_congreso" name = "descripcion_congreso"  rows="2" data-parsley-minlength="20" data-parsley-maxlength="100" placeholder="Escriba una breve descripción" data-parsley-required="true"></textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-lg-4 col-form-label form-label" for="fullname">Lugar :</label>
                            <div class="col-lg-8">
                            <input class="form-control" type="text" id = "lugar" name = "lugar" placeholder="Escriba el lugar" data-parsley-required="true" />
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-lg-4 col-form-label form-label" for="fullname">Coordenadas :</label>
                            <div class="col-lg-8">
                            <input class="form-control" type="text" id = "coordenadas" name = "coordenadas" placeholder="Escriba las coordenadas" data-parsley-required="true" />
                            </div>
                        </div>

                </div>

                <div class="col-sm-6 col-md-5 col-lg-6">
                    <div class="form-group row mb-3">
						<label class="col-lg-4 col-form-label form-label">País Procedente:</label>
						<div class="col-lg-8">
							<select class="form-select"  id="pais" name="pais" data-parsley-required="true">
								
							</select>
						</div>
					</div>
                    <div class="form-group row mb-3">
                            <label class="col-lg-4 col-form-label form-label" for="fullname">Lema:</label>
                            <div class="col-lg-8">
                            <input class="form-control" type="text" id = "lema" name = "lema" placeholder="Escriba el lema del congreso" data-parsley-required="true" />
                            </div>
                        </div>   
                        <div class="form-group row mb-3">
                            <label class="col-lg-4 col-form-label form-label" for="fullname">Clave de autorización:</label>
                            <div class="col-lg-8">
                            <input class="form-control" type="text" id = "numero_cai" name = "numero_cai"  placeholder="Escriba la clave de autorización de impresión" data-parsley-required="true" />
                            </div>
                        </div> 
                    <div class="form-group row mb-3">
						<label class="form-label col-form-label col-lg-4">Agregar Roles:</label>
						<div class="col-lg-8">
							<select multiple="" id="agregar_roles_congreso" name="agregar_roles_congreso" class="form-control multi-select">
							
							</select>
						</div>
					</div>

                    <div class="form-group row mb-3">
						<label class="col-lg-4 col-form-label form-label">Logo oficial:</label>
						<div class="col-lg-8">
                  <span id="nombre_archivo"></span>
                  <input type="hidden" name="logo_congreso_ant" id="logo_congreso_ant">
                  <input type="file" id = "logo_congreso" name = "logo_congreso" class="form-control" />
						</div>
					</div>
                </div>
                </div>
                </div>


                </div>
				<!-- END row -->
			</div>
			<!-- END tab-pane -->



			<!-- BEGIN tab-pane -->
			<div class="tab-pane fade" id="filled">
				<div class="row">

                <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-5 col-lg-6">
                    <div class="form-group row mb-3">
						<label class="col-lg-4 col-form-label form-label">Año:</label>
						<div class="col-lg-8">
							<select class="form-select"  id="anio" name="anio" data-parsley-required="true">
								
							</select>
						</div>
					</div>  
                            
                    <div class="form-group row mb-3">
						<label class="form-label col-form-label col-lg-4">Fecha de Inicio:</label>
						<div class="col-lg-8">
							<input type="date" class="form-control"  name = "fecha_inicio" id="fecha_inicio" placeholder="Seleccione la fecha" data-parsley-required="true" />
						</div>
					</div>
                    <div class="form-group row mb-3">
						<label class="form-label col-form-label col-lg-4">Fecha de Fin:</label>
						<div class="col-lg-8">
							<input type="date" class="form-control" name = "fecha_finalizacion" id="fecha_finalizacion" placeholder="Seleccione la fecha" data-parsley-required="true" />
						</div>
					</div>
                    <div class="form-group row mb-3">
						<label class="form-label col-form-label col-lg-4">Fecha de Inicio de Recepción de Trabajos:</label>
						<div class="col-lg-8">
							<input type="date" class="form-control" name = "fecha_i_recepcion" id="fecha_i_recepcion" placeholder="Seleccione la fecha" data-parsley-required="true" />
						</div>
					</div>
                    <div class="form-group row mb-3">
						<label class="form-label col-form-label col-lg-4">Fecha de Finalización de Recepción de Trabajos:</label>
						<div class="col-lg-8">
							<input type="date" class="form-control" name = "fecha_f_recepcion" id="fecha_f_recepcion" placeholder="Seleccione la fecha" data-parsley-required="true" />
						</div>
					</div>

                </div>

                <div class="col-sm-6 col-md-5 col-lg-6">
                    
                    <div class="form-group row mb-3">
						<label class="form-label col-form-label col-lg-4">Fecha de Inicio de Revisión de Trabajos:</label>
						<div class="col-lg-8">
							<input type="date" class="form-control" name = "fecha_i_revision"  id="fecha_i_revision" placeholder="Seleccione la fecha" data-parsley-required="true" />
						</div>
					</div>
                    <div class="form-group row mb-3">
						<label class="form-label col-form-label col-lg-4">Fecha de Final de Revisión de Trabajos:</label>
						<div class="col-lg-8">
							<input type="date" class="form-control" name = "fecha_f_revision"   id="fecha_f_revision" placeholder="Seleccione la fecha" data-parsley-required="true" />
						</div>
					</div>
                    <div class="form-group row mb-3">
						<label class="form-label col-form-label col-lg-4">Fecha de publicación del programa:</label>
						<div class="col-lg-8">
							<input type="date" class="form-control" name = "fecha_p_programa" id="fecha_p_programa" placeholder="Seleccione la fecha" data-parsley-required="true" />
						</div>
					</div>
                    <div class="form-group row mb-3">
						<label class="form-label col-form-label col-lg-4">Fecha de cambio de costo de inscripción:</label>
						<div class="col-lg-8">
							<input type="date" class="form-control" name = "fecha_cambio_costo_inscripcion"  id="fecha_cambio_costo_inscripcion" placeholder="Seleccione la fecha" data-parsley-required="true" />
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
							<input type="hidden" name="id" id="id" value="">
							<input type="hidden" name="caso" id="caso" value="crear_congreso">
							<button id ="cr_c"   value='crear_congreso'  class="btn btn-primary">Guardar</button>
						</div>
					</div>
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
				<table id="tbl_congreso" name="tbl_congreso" class="table table-striped table-bordered align-middle display responsive no-wrap" width="100%">
					<thead>
						<tr>
							<th width="1%">N.</th>
							<th class="text-nowrap">Nombre del congreso</th>
							<th class="text-nowrap">Siglas</th>
							<th class="text-nowrap">Año</th>
							<th class="text-nowrap">Estado</th>
							<th class="col-sm-2">Acciones</th>
						</tr>
					</thead>

				</table>
			</div>
			<!-- END panel-body -->

<!-- Custom Modal -->
    <div id="congreso_nopuede_activarse" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content p-0 b-0">
                <div class="panel panel-color panel-primary">
                    <div class="panel-heading">
                        <button type="button" class="close m-t-5" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 class="panel-title">El Congreso no puede ser activado</h3>
                    </div>
                    <div class="panel-body">
                        <p>Aún falta asociar ciertos datos básicos para que este congreso pueda ser acivado, como Organizadores, Lineas, Temáticas, Tipos de Trabajo o Costo por tipo de persona. Asegúrate de asociar esta información e intenta nuevamente.</p>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
<!-------------->
<script>
//Validacio solo Letras y Numeros **************************************************************************************************
    function SoloLetras_Espacio_uno(e)
            {
                key=e.keyCode || e.which;
                tecla=String.fromCharCode(key).toString();
                letras ="{ABCDEFGHIJKLMNÑOPQRSTUVWXYZáabcdéefghíijklmnñóopqrstúuvwxyz123456789.,}";

                especiales = [8,13,32]
                tecla_especial =false
                for(var i in especiales){
                    if(key ==especiales[i]){
                        tecla_especial = true;
                        break;
                    }
                }
                if(letras.indexOf(tecla) == -1 && !tecla_especial)
                {
                    alert("No se Permiten Caracteres Especiales");
                    return false
                }

            }

        
</script>
<script>
    /*VALIDACION EN LOS CAMPOS FECHAS, NO SE PUEDE INGRESAR UNA FECHA MENOR A LA ACTUAL*/ 
 var myDate = $('#fecha_inicio');
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth() + 1;
var yyyy = today.getFullYear();
if(dd < 10)
  dd = '0' + dd;

if(mm < 10)
  mm = '0' + mm;

today = yyyy + '-' + mm + '-' + dd;
myDate.attr("min", today);

function myFunction(){
  var date = myDate.val();
  if(Date.parse(date)){
    if(date < today){
      alert('La fecha no puede ser menor a la actual');
      myDate.val("");
    }
  }
}
    </script>
<script>
        /*
VALIDACION EN LOS CAMPOS FECHAS, NO SE PUEDE INGRESAR UNA FECHA MENOR A LA ACTUAL*/ 
var myDate = $('#fecha_finalizacion');
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth() + 1;
var yyyy = today.getFullYear();
if(dd < 10)
  dd = '0' + dd;

if(mm < 10)
  mm = '0' + mm;

today = yyyy + '-' + mm + '-' + dd;
myDate.attr("min", today);

function myFunction(){
  var date = myDate.val();
  if(Date.parse(date)){
    if(date < today){
      alert('La fecha no puede ser menor a la actual');
      myDate.val("");
    }
  }
}


    </script>      
    <script>
            /*VALIDACION EN LOS CAMPOS FECHAS, NO SE PUEDE INGRESAR UNA FECHA MENOR A LA ACTUAL*/ 
var myDate = $('#fecha_i_recepcion');
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth() + 1;
var yyyy = today.getFullYear();
if(dd < 10)
  dd = '0' + dd;

if(mm < 10)
  mm = '0' + mm;

today = yyyy + '-' + mm + '-' + dd;
myDate.attr("min", today);

function myFunction(){
  var date = myDate.val();
  if(Date.parse(date)){
    if(date < today){
      alert('La fecha no puede ser menor a la actual');
      myDate.val("");
    }
  }
}


    </script>     
    <script>
            /*
VALIDACION EN LOS CAMPOS FECHAS, NO SE PUEDE INGRESAR UNA FECHA MENOR A LA ACTUAL*/ 
var myDate = $('#fecha_f_recepcion');
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth() + 1;
var yyyy = today.getFullYear();
if(dd < 10)
  dd = '0' + dd;

if(mm < 10)
  mm = '0' + mm;

today = yyyy + '-' + mm + '-' + dd;
myDate.attr("min", today);

function myFunction(){
  var date = myDate.val();
  if(Date.parse(date)){
    if(date < today){
      alert('La fecha no puede ser menor a la actual');
      myDate.val("");
    }
  }
}


    </script>     
    <script>
            /*VALIDACION EN LOS CAMPOS FECHAS, NO SE PUEDE INGRESAR UNA FECHA MENOR A LA ACTUAL*/ 
var myDate = $('#fecha_i_revision');
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth() + 1;
var yyyy = today.getFullYear();
if(dd < 10)
  dd = '0' + dd;

if(mm < 10)
  mm = '0' + mm;

today = yyyy + '-' + mm + '-' + dd;
myDate.attr("min", today);

function myFunction(){
  var date = myDate.val();
  if(Date.parse(date)){
    if(date < today){
      alert('La fecha no puede ser menor a la actual');
      myDate.val("");
    }
  }
}


    </script>     
    <script>
            /*VALIDACION EN LOS CAMPOS FECHAS, NO SE PUEDE INGRESAR UNA FECHA MENOR A LA ACTUAL*/ 
var myDate = $('#fecha_f_revision');
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth() + 1;
var yyyy = today.getFullYear();
if(dd < 10)
  dd = '0' + dd;

if(mm < 10)
  mm = '0' + mm;

today = yyyy + '-' + mm + '-' + dd;
myDate.attr("min", today);

function myFunction(){
  var date = myDate.val();
  if(Date.parse(date)){
    if(date < today){
      alert('La fecha no puede ser menor a la actual');
      myDate.val("");
    }
  }
}


    </script>     
    <script>
            /*VALIDACION EN LOS CAMPOS FECHAS, NO SE PUEDE INGRESAR UNA FECHA MENOR A LA ACTUAL*/ 
var myDate = $('#fecha_p_programa');
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth() + 1;
var yyyy = today.getFullYear();
if(dd < 10)
  dd = '0' + dd;

if(mm < 10)
  mm = '0' + mm;

today = yyyy + '-' + mm + '-' + dd;
myDate.attr("min", today);

function myFunction(){
  var date = myDate.val();
  if(Date.parse(date)){
    if(date < today){
      alert('La fecha no puede ser menor a la actual');
      myDate.val("");
    }
  }
}


    </script>     
    <script>
            /*VALIDACION EN LOS CAMPOS FECHAS, NO SE PUEDE INGRESAR UNA FECHA MENOR A LA ACTUAL*/ 
var myDate = $('#fecha_cambio_costo_inscripcion');
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth() + 1;
var yyyy = today.getFullYear();
if(dd < 10)
  dd = '0' + dd;

if(mm < 10)
  mm = '0' + mm;

today = yyyy + '-' + mm + '-' + dd;
myDate.attr("min", today);

function myFunction(){
  var date = myDate.val();
  if(Date.parse(date)){
    if(date < today){
      alert('La fecha no puede ser menor a la actual');
      myDate.val("");
    }
  }
}


  </script>     

<script>
			App.setPageTitle('.:CCE:.');
			$.getScript('../assets/plugins/datatables.net/js/jquery.dataTables.min.js'); //Datatable
			$.getScript('../assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js');//bootstrap style
			$.getScript('../assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js');//table responsive
			$.getScript('../assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js');//buttons 
			$.getScript('../assets/plugins/datatables.net-buttons/js/buttons.html5.min.js');//all functions
			$.getScript('../assets/plugins/pdfmake/build/pdfmake.min.js');//pdf 
			//$.getScript('../assets/plugins/jszip/dist/jszip.min.js');//excel
      
        $.getScript('../assets/js/tables/table_congreso.js'),
        $.getScript('./js/fnc_slc.js'),
        $.getScript('./js/fnc_select_multiple.js')
        $.getScript('./js/gestion_congresos_js/crear_congreso.js')


</script>
<!-- ================== END core-js ================== -->







