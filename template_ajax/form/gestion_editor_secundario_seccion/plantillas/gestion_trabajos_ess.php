
<!-- BEGIN breadcrumb -->
<ol class="breadcrumb float-xl-end">
	<li class="breadcrumb-item"><a href="javascript:;">Inicio</a></li>
    <li class="breadcrumb-item"><a href="javascript:;">Editores</a></li>
    <li class="breadcrumb-item active">Editor Secundario Sección</li>
    <li class="breadcrumb-item active">Gestión de Trabajos</li>
</ol>
<!-- END breadcrumb -->
<!-- BEGIN page-header -->
<h1 class="page-header">Editor Secundario Sección<small></small></h1>
<!-- END page-header -->
<!-- BEGIN row -->
<div class="row">
	<!-- BEGIN col-6 -->
	<div class="col-xl-12">
		<!-- BEGIN panel -->
		<div class="panel panel-inverse" data-sortable-id="form-validation-2">
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

    
            <!-- BEGIN panel-body -->
			<div class="panel-body">
				<table  id="tbl_trabajos_ess" name="tbl_trabajos_ess" class="table table-striped table-bordered align-middle display responsive no-wrap" width="100%">
					<thead>
						<tr>
							<th width="1%">N.</th>
							<th class="text-nowrap">Título</th>
							<th class="text-nowrap">Palabras Clave</th>
                            <th class="text-nowrap">Temática Asociada</th>
                            <th class="text-nowrap">Tipo de Trabajo</th>
                            <th class="text-nowrap">Revisores Aceptado</th>
                            <th class="text-nowrap">Revisores Aceptado</th>
                            <th class="text-nowrap">Acciones</th>
						</tr>
					</thead>
                    <tbdoy>
                    </tbdoy>

				</table>
			<!-- END panel-body -->

		</div>
		<!-- END panel -->

        <input type="hidden" id="tematica" value="">
        <div class='modal fade' id='asignar_revisores_trabajo'  >                                    
                        <div class='modal-dialog' id="modal_revisores1" >
                                    <div class='modal-content'>
                                        <button type="button" class="close" data-dismiss="modal" >
                                            <span>×</span><span class="sr-only">Close</span>
                                        </button>
                                        <div class='modal-header'>
                                                
                                                <h4 class='modal-title'>Asignar Trabajo Revisor</h4>
                                        </div>

                                        <div class='modal-body'>
                                            <div class="row">
                                               <div class='form-group' align="center">
                                                   <div class="col-md-11">
                                                       <label class='control-label' for='fullname'>Revisores</label>
                                                        <select style="height: 95px;" multiple='' id='origen_todos_revisores_ess' name='origen_todos_revisores_ess' class='form-control'>

                                                        </select>      
                                                    </div>

                                                    <div class="col-md-11">
                                                        <label class='control-label' for='fullname'>Asignar Revisores</label>
                                                        <select style="height: 95px;" multiple='' id='destino_revisores_ess' name='destino_revisores_ess[]' class='form-control'>

                                                        </select>
                                                     </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <input type="hidden" id="trabajo_a_revisor" value="">
                                        <input type="hidden" id="cancelar_a_revisor" value="">
                                        <input type="hidden" id="caso" value="trabajo_a_revisor">
                                        <input type="hidden" id="caso1" value="cancelar_a_revisor">

                                        <input type="hidden" id="totaltrab" value="">
                                        <input type="hidden" id="idtrabajo" value="">
                                        <div class='modal-footer'>
                                            <a href='javascript:;'  class='btn btn-sm btn-danger btn-rounded' data-dismiss="modal" id="cancelar_asuignar_form_revisor">Cancelar</a>
                                            <a type='button' id="btn_asignar_revisoress" class='btn btn-sm btn-success btn-rounded'>Guardar</a>
                                        </div>
                                    </div>
                        </div>                                    
        </div>
        
        
        <div class='modal fade' id='cancelar_solicitud_revisor_ess'  >                                    
                        <div class='modal-dialog' id="modal_revisores1" >
                                    <div class='modal-content'>
                                        <button type="button" class="close" data-dismiss="modal" >
                                            <span>×</span><span class="sr-only">Cerrar</span>
                                        </button>
                                        <div class='modal-header'>
                                                
                                                <h4 class='modal-title'>Cancelar Trabajo Revisor</h4>
                                        </div>

                                        <div class='modal-body'>
                                            <div class="row">
                                               <div class='form-group' align="center">
                                                   <div class="col-md-11">
                                                       <label class='control-label' for='fullname'>Revisores</label>
                                                        <select style="height: 95px;" multiple='' id='origen_todos_revisores' name='origen_todos_revisores' class='form-control'>

                                                        </select>      
                                                    </div>

                                                    <div class="col-md-11">
                                                        <label class='control-label' for='fullname'>Cancelar Revisores</label>
                                                        <select style="height: 95px;" multiple='' id='cancelar_revisores_ess' name='cancelar_revisores_ess[]' class='form-control'>

                                                        </select>
                                                     </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                       
                                        <div class='modal-footer'>
                                            <a href='javascript:;'  class='btn btn-sm btn-danger btn-rounded' data-dismiss="modal" id="cancelar_asuignar_form_revisor">Cancelar</a>
                                            <a type='button' id="btn_cancelar_revisor_ess" class='btn btn-sm btn-success btn-rounded'>Guardar</a>
                                        </div>
                                    </div>
                        </div>                                    
        </div>
        
        <div class='modal fade' id='cancelar_revisores_trabajo'  >                                    
        </div>
    </div>
     
	</div>
	<!-- END col-6 -->
</div>
<!-- END row -->



<script src="./js/fnc_select_multiple.js" type="text/javascript"></script>
<script src="./js/gestion_editor_secundario_seccion/gestion_trabajos_ess.js"></script>
<script src="./js/fnc_slc.js" type="text/javascript"></script>



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
			$.getScript('../assets/js/tables/table_gestion_trabajos_ess.js'),
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



<script>
function doSearch() {
    var tableReg = document.getElementById('tbl_trabajos_ess');
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
     
function agregar(valor,nombre){
    mover("origen_todos_revisores_ess", "destino_revisores_ess", valor, nombre);
}
function quitar(valor,nombre){

    mover1("destino_revisores_ess","origen_todos_revisores_ess", valor, nombre);
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


function agregar1(valor,nombre){
    mover3("origen_todos_revisores", "cancelar_revisores_ess", valor, nombre);
}
function quitar1(valor,nombre){

    mover4("cancelar_revisores_ess","origen_todos_revisores", valor, nombre);
}
function mover3(origen, destino)
{
      $("#" + origen + " option:selected" ).removeAttr('onclick');
      $("#" + origen + " option:selected" ).attr('onclick','quitar1(this.value,this.id)');
      $("#" + origen + " option:selected" ).remove().appendTo("#" + destino);                      

}
function mover4(destino, origen)
{
    $("#" + destino + " option:selected" ).removeAttr('onclick');
    $("#" + destino + " option:selected" ).attr('onclick','agregar1(this.value,this.id);');
    $("#" + destino + " option:selected").remove().appendTo("#" + origen);

}

</script>



