


<!-- BEGIN breadcrumb -->
<ol class="breadcrumb float-xl-end">
	<li class="breadcrumb-item"><a href="javascript:;">Inicio</a></li>
    <li class="breadcrumb-item"><a href="javascript:;">Gestión Formularios de Revisión</a></li>
    <li class="breadcrumb-item active">Modificar Formulario</li>
</ol>
<!-- END breadcrumb -->
<!-- BEGIN page-header -->
<h1 class="page-header">Modificar Formulario de Revisión<small></small></h1>
<!-- END page-header -->
<!-- BEGIN row -->
<div class="row">
<form enctype="multipart/form-data" method='POST' name='form_a_tematica'  id='editar_formulario_tematica' class='form-horizontal form-bord forered' data-parsley-validate='true'> 
	<!-- BEGIN col-6 -->
	<div class="col-xl-12">
		<!-- BEGIN panel -->
		<div class="panel panel-inverse" data-sortable-id="form-validation-2">
			<!-- BEGIN panel-heading -->
			<div class="panel-heading">
				<h4 class="panel-title">Modificar Formulario</h4>
				<div class="panel-heading-btn">
					<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
				</div>
			</div>
			
               <!-- BEGIN panel-body -->
			<div class="panel-body">
            <table  id="tbl_editar_form" name="tbl_editar_form" class="table table-striped table-bordered align-middle display responsive no-wrap" width="100%">
					<thead>
						<tr>
							<th width="1%">N.</th>
							<th class="text-nowrap">Formulario de Revisión</th>
							<th class="text-nowrap">Descripción</th>
                            <th class="text-nowrap">Temática Asociada</th>
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
               <div class='modal fade' id=''  >                                    
                    <div class='modal-dialog' >
                        <div class='modal-content'>
                            
                            <table class="table table-striped" id="tbl_preguntas_cualitativas">
                                <thead>
                                <tr class="alert alert-success">
                                    <th width="3%%" >@@num@@</th>
                                    <th width="15%">@@pregunta@@ </th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>                                    
                </div>
                <div id='preguntas_cualitativas' class='modal fade bs-example-modal-lg' tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static"  style='display:none;' >                                    
                        <div class='modal-dialog modal-lg' >
                                   <div class='modal-content'>
                                        <div class='modal-header' align="center">
                                                <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
                                                <h4 class='modal-title'>@@editarform@@ <a id=""></a></h4>
                                        </div>
                                        <div class='modal-body'>
                                                    <div class="modal-header">
                                                    <h4 class="text-success">@@nomb_formulario@@</h4>
                                                    <p id="nform" style="font-weight: bold;text-indent: 1cm;"></p>
                                                    </div>
                                            <br>
                                               <div class="row" style="float: right; width: 102%">
                                                <div class="col-sm-12">
                                                    <div class="card-box"> 
                                                        <div class="form-control" align="center">
                                                            <label align="center" class="text-success">@@preguntascuantitativas@@</label>
                                                        </div>
                                                        
                                                        <p class="text-muted m-b-30 font-13" style="text-align: justify; width: 90%; margin-left: 3%;">
                                                            @@info_modificar_pcuantis@@
                                                        </p>
                                                        <div> 
                                                            <span><a href='#' class="btn btn-primary waves-effect waves-teal m-b-5" id="agregar_pregunta" title='@@agregar_pregunta@@'  > <i class='ion ion-plus'></i> @@agregar_pregunta@@</a> </span>
                                                            <span><a href='#' style="display: none" class="btn btn-success waves-effect waves-teal m-b-5" id="guardar_pregunta" title='@@btn_guardar@@'  > @@agregar_pregunta@@</a> </span>
                                                        </div><br>
                                                        <div id="p_cuanti1" style="display: none">
                                                            <div class="form-group clearfix">
                                                                <label class="col-md-2 control-label " for="pregunta">@@pre@@</label>
                                                                <div class="col-md-7">
                                                                    <input class="form-control required" id="pregunta" name="pregunta" type="text"  >
                                                                </div>
                                                            </div>

                                                            <div class="form-group clearfix"  >
                                                                <label class="col-md-2 control-label " >@@tipopregunta@@</label>
                                                                    <div class="col-md-5">
                                                                        <select class="form-control" id="sel1">
                                                                        </select>
                                                                    </div>
                                                            </div>
                                                            
                                                        </div>
                                                        <div id="opciones_ponderaciones1">
                                                            
                                                        </div>
                                                        <div class="form-group clearfix" id="opcionespeso1" style="display: none">
                                                            <label class="col-md-2 control-label " for="pregunta">@@opcion@@</label>
                                                            <div class="col-md-2">
                                                                <input class="form-control required " placeholder="@@opcion@@" id="pregunta" name="pregunta" type="text"  >
                                                            </div>

                                                            <div class="col-md-2"  >
                                                                <input id="peso" class="form-control required" placeholder="@@peso@@" type="text" maxlength="6" onkeypress="return valida(event,this)" >
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        <div id="nuevas_pcuantis"> 
                                                        
                                                        </div>
                                                        <div class="table-responsive">
                                                            <table id="tblpreguntascuantitativas" name="tabla" class="table table-striped m-b-0">
                                                                <thead>
                                                                <tr>
                                                                    <th width='25%'>@@pregunta@@</th>
                                                                    <th width='15%'>@@opciones@@</th>
                                                                    <th width='15%'>@@peso@@</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody id="preg_cuanti">

                                                                </tbody>
                                                                <tfoot>
                                                                <tr>
                                                                    
                                                                </tr>
                                                                </thead>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" id="ponderaciones" value="">
                                            <input type="hidden" id="opciones" value="">
                                            <input type="hidden" id="idnumero" value="">
                                            <input type="hidden" id="idform" value="">
                                            <input type="hidden" id="tipo" value="">
                                            <br>
                                            <div class="row" style="float: right; width: 102%">
                                                <div class="col-sm-12">
                                                    <div class="card-box"> 
                                                        <div class="form-control" align="center">
                                                            <label align="center" class="text-success">@@preguntascualitativas@@</label>
                                                        </div>
                                                        <div> 
                                                        <p class="text-muted m-b-30 font-13" style="text-align: justify; width: 90%; margin-left: 3%;">                                                            
                                                        </p>
                                                            <span><a href='#' class="btn btn-primary waves-effect waves-teal m-b-5" id="agregar_pregunta_cualitativa" title='@@agregar_pregunta@@'  > <i class='ion ion-plus'></i> @@agregar_pregunta@@</a> </span>
                                                            <span><a href='#' style="display: none" class="btn btn-success waves-effect waves-teal m-b-5" id="guardar_pregunta_cualitativa" title='@@btn_guardar@@'  > @@agregar_pregunta@@</a> </span>
                                                        </div><br>
                                                        <div class="form-group clearfix" id="hijo1" style="display: none">
                                                            <label class="col-md-2 control-label " for="pregunta">@@pre@@</label>
                                                            <div class="col-md-7">
                                                                <input class="form-control required" id="pregunta" name="pregunta" type="text"  >
                                                            </div>
                                                        </div>
                                                        <div id="nuevas_pcualis">
                                                            
                                                        </div>
                                                        <div class="table-responsive">
                                                            <table id="tblpregunrascualitativas" name="tabla" class="table table-striped m-b-0">
                                                                <thead>
                                                                <tr>
                                                                    <th width='50%'>@@tipo_pregunta@@</th>
                                                                    <th width='50%'>@@pregunta@@</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody id="datos">

                                                                </tbody>
                                                                <tfoot>
                                                                <tr>
                                                                </tr>
                                                                </thead>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div  class="modal-header" >
                                            </div>
                                        </div>
                                        <div class='modal-footer'>
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">@@btn_cerrar@@</button>
                                                <button type="button" class="btn btn-success waves-effect" id="btn_modificar_form" >@@btn_guardar@@</button>
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

			$.getScript('../assets/js/tables/table_modificar_formulario.js');
			$.getScript('./js/gestion_formulario_revisiones/asoc_form_tematica.js');
		</script>
	
    <script>
function doSearch() {
    var tableReg = document.getElementById('tbl_editar_form');
    var searchText = document.getElementById('buscar').value.toLowerCase();
    for (var i = 1; i < tableReg.rows.length; i++) {
        var cellsOfRow = tableReg.rows[i].getElementsByTagName('td');
        var found = false;
        for (var j = 0; j < cellsOfRow.length && !found; j++) {
            var compareWith = cellsOfRow[j].innerHTML.toLowerCase();
            if (searchText.length == 0 || (compareWith.indexOf(searchText) > -1)) {
                found = true;
            }
        }
        if (found) {
            tableReg.rows[i].style.display = '';
        } else {
            tableReg.rows[i].style.display = 'none';
        }
    }
}

$('#tblpregunrascualitativas').editableTableWidget().numericInputExample().find('td:first').focus();
$('#tblpreguntascuantitativas').editableTableWidget().numericInputExample().find('td:first').focus();


 function valida(e, field) {
  var key = e.keyCode ? e.keyCode : e.which
  // backspace
  if (key == 8) return true
  // 0-9
  if (key > 47 && key < 58) {
    if (field.value == "") return true
    regexp = /.[0-9]{2}$/
    return !(regexp.test(field.value))
  }
  // .
  if (key == 46) {
    if (field.value == "") return false
    regexp = /^[0-9]+$/
    return regexp.test(field.value)
  }
  // other key
  return false
 
}
</script>
<script src="./js/fnc_slc.js" type="text/javascript"></script>