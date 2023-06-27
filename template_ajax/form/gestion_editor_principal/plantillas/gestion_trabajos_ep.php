<script src="./js/fnc_slc.js"></script>

<!-- BEGIN breadcrumb -->
<ol class="breadcrumb float-xl-end">
    <li class="breadcrumb-item"><a href="javascript:;">Inicio</a></li>
    <li class="breadcrumb-item"><a href="javascript:;">Editores</a></li>
    <li class="breadcrumb-item active">Editor Principal</li>
    <li class="breadcrumb-item active">Gestión de Trabajos</li>
</ol>
<!-- END breadcrumb -->
<!-- BEGIN page-header -->
<h1 class="page-header">Editor Principal<small></small></h1>
<!-- END page-header -->
<!-- BEGIN row -->
<div class="row">
    <!-- BEGIN col-6 -->
    <div class="col-xl-12">
        <!-- BEGIN panel -->
        <div class="panel panel-inverse" data-sortable-id="form-validation-1">
            <!-- BEGIN panel-heading -->
            <div class="panel-heading">
                <h4 class="panel-title">Gestión de Trabajos</h4>
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
                     <div class="container">
                        <div class="row">
                            <div class="form-group row mb-3">
                                <label class="col-lg-12 col-form-label form-label text-center">
                                    <h3>Seleccione una Línea de Investigación:</h3>
                                </label>
                                <div class="col-lg-12">
                                    <select class="form-select"  id="lineas_investigacion" name="lineas_investigacion" onchange="muestra_tematica()" >
                                        <option value="0">Seleccione una opción</option>
                                        <option value="1">...</option>
                                        <option value="2">...</option>
                                    </select>
                                </div>
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


    <!-- BEGIN col-6 -->
    <div class="col-xl-12">
        <!-- BEGIN panel -->
        <div class="panel panel-inverse" data-sortable-id="form-validation-2">
            <!-- BEGIN panel-heading -->
            <div class="panel-heading">
                <h4 class="panel-title">Lista de trabajos</h4>
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
                </div>
            </div>

            <!-- BEGIN panel-body -->
            <div class="panel-body">
                <table  id="tbl_trabajos_ep" name="tbl_trabajos_ep" class="table table-striped table-bordered align-middle display responsive no-wrap" width="100%">
                    <thead>
                        <tr>
                            <th width="1%">N.</th>
                            <th class="text-nowrap">Título</th>
                            <th class="text-nowrap">Palabras Clave</th>
                            <th class="text-nowrap">Tipo de trabajo</th>
                            <th class="text-nowrap">Revisores Aceptado</th>
                            <th class="text-nowrap">Revisores Pendientes</th>
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
    <input type="hidden" id="tematica" value="">
        <div class='modal fade' id='asignar_revisores_trabajo'  >                                    
                        <div class='modal-dialog' id="modal_revisores1" >
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                                
                                                <h4 class='modal-title'>Asignar Revisor Trabajo</h4>
                                        </div>

                                        <div class='modal-body'>
                                            <div class="row">
                                               <div class='form-group' align="center">
                                                    <div class='col-md-11' id="revisor">
                                                       
                                                    </div>

                                                    <div class="col-md-11">
                                                        <label class='control-label' for='fullname'>Asignar Revisor</label>
                                                        <select style="height: 95px;" multiple='' id='destino_revisores' name='destino_revisores[]' class='form-control'>

                                                        </select>
                                                     </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <input type="hidden" id="trabajo_a_revisor" value="">
                                        <input type="hidden" id="cancelar_a_revisor" value="">
                                        <input type="hidden" id="caso" value="trabajo_a_revisor">
                                        <input type="hidden" id="caso1" value="cancelar_a_revisor">
                                        <input type="hidden" id="linea_invest" value="">
                                        <input type="hidden" id="totaltrab" value="">
                                        <div class='modal-footer'>
                                            <a href='javascript:;'  class='btn btn-sm btn-danger btn-rounded' data-dismiss="modal" id="cancelar_asuignar_form_revisor">Cancelar</a>
                                            <a type='button' id="btn_asignar_revisor" onclick="asignar_revisor_trabajo()" class='btn btn-sm btn-success btn-rounded'>Guardar</a>
                                        </div>
                                    </div>
                        </div>                                    
        </div>
        
        
        <div class='modal fade' id='cancelar_revisores_trabajo'  >                                    
                                                            
        </div>
        <div  id="usuariorolrevisor1" style="visibility: hidden">
             <label class='control-label' for='fullname'>Revisores</label>
            <select style="height: 95px;" multiple='' id='origen_todos_revisores' name='origen_todos_revisores' class='form-control'>

            </select>                                         
        </div>

    </div>
</div>
<!-- END row -->



<script src="./js/fnc_slc.js" type="text/javascript"></script>
<script src="./js/fnc_select_multiple.js" type="text/javascript"></script>

<script>
	App.setPageTitle('.:CCE:.');
	$.getScript('../assets/plugins/datatables.net/js/jquery.dataTables.min.js'); //Datatable

	$.getScript('../assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js');//bootstrap style
	$.getScript('../assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js');//table responsive
	$.getScript('../assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js');//buttons
	$.getScript('../assets/plugins/datatables.net-buttons/js/buttons.html5.min.js');//all functions
	//$.getScript('../assets/plugins/pdfmake/build/pdfmake.min.js');//pdf 
	//$.getScript('../assets/plugins/jszip/dist/jszip.min.js');//excel
	$.getScript('../assets/js/tables/table_gestion_trabajos_ep.js');
    $.getScript('./js/gestion_editor_principal/gestion_trabajos_ep.js');


	//$.getScript('./js/fnc_slc.js');
</script>



<script>
function doSearch() {
    var tableReg = document.getElementById('tbl_trabajos_ep');
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

$('#cancelar_asuignar_form_revisor').click(function() {
     $('#asignar_revisores_trabajo').modal('toggle');
     b_sm('origen_todos_revisores');
     $('#destino_revisores').find('option').remove().end();    
       
     });
     
 

function agregar(valor,nombre){
    mover("origen_todos_revisores1", "destino_revisores", valor, nombre);
}
function quitar(valor,nombre){

    mover1("destino_revisores","origen_todos_revisores1", valor, nombre);
}
function mover(origen, destino)
{
      $("#" + origen + " option:selected" ).removeAttr('onclick');
      $("#" + origen + " option:selected" ).attr('onclick','quitar(this.value,this.id)');
      $("#" + origen + " option:selected" ).remove().appendTo("#" + destino);                      

}
function mover1(destino, origen)
{
    $("#" + destino + " option:selected" ).removeAttr('onclick');
    $("#" + destino + " option:selected" ).attr('onclick','agregar(this.value,this.id);');
    $("#" + destino + " option:selected").remove().appendTo("#" + origen);

}

function agregar2(valor,nombre){
    mover2("origen_todos_revisores2", "destino_revisores2", valor, nombre);
}
function quitar2(valor,nombre){

    mover3("destino_revisores2","origen_todos_revisores2", valor, nombre);
}
function mover2(origen, destino)
{
      $("#" + origen + " option:selected" ).removeAttr('onclick');
      $("#" + origen + " option:selected" ).attr('onclick','quitar2(this.value,this.id)');
      $("#" + origen + " option:selected" ).remove().appendTo("#" + destino);                      

}
function mover3(destino, origen)
{
    $("#" + destino + " option:selected" ).removeAttr('onclick');
    $("#" + destino + " option:selected" ).attr('onclick','agregar2(this.value,this.id);');
    $("#" + destino + " option:selected").remove().appendTo("#" + origen);

}

</script>
