<script src="./js/fnc_slc.js"></script>

<!-- BEGIN breadcrumb -->
<ol class="breadcrumb float-xl-end">
    <li class="breadcrumb-item"><a href="javascript:;">Inicio</a></li>
    <li class="breadcrumb-item"><a href="javascript:;">Editores</a></li>
    <li class="breadcrumb-item active">Editor Principal</li>
    <li class="breadcrumb-item active">GDictaminar Trabajos</li>
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
                <h4 class="panel-title">Administración de Trabajos de Investigación</h4>
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
                                    <h3>Seleccione una Temática:</h3>
                                </label>
                                <div class="col-lg-12">
                                    <select class="form-select"   id="tematicas_trabajo" name="tematicas_trabajo" onchange="construyetrabajos(this.value);" >
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

            <form enctype="multipart/form-data" method='POST' name='form_dictaminar_trabajos'  id='form_dictaminar_trabajos' class='form-horizontal form-bord <forered' data-parsley-validate='true'> 
            <!-- BEGIN panel-body -->
            <div class="panel-body">
                <table  id="tbl_dictaminar_trabajos_ep" name="tbl_dictaminar_trabajos_ep" class="table table-striped table-bordered align-middle display responsive no-wrap" width="100%">
                    <thead>
                        <tr>
                            <th width="1%">N.</th>
                            <th class="text-nowrap">Título</th>
                            <th class="text-nowrap">Temática</th>
                            <th class="text-nowrap">Tipo de trabajo</th>
                           <!-- <th class="text-nowrap">Idioma</th>-->
                            <th class="text-nowrap">Estado</th>
                            <th class="text-nowrap">Acciones</th>
                        </tr>
                    </thead>

                </table>
            </div>
            <!-- END panel-body -->
        </div>
        <!-- END panel -->
        <input type="hidden" id="idt" name="idt" value=""/> 
             <input type="hidden" id="idtem" name="idtem" value=""/>
             <input type="hidden" id="caso" name="caso" value=""/>
    </div>
    <!-- END col-6 -->

            
                <!-- #modal-dialog-infot--> 
                <div id='modal-dialog-infot' class='modal fade bs-example-modal-lg' tabindex="-1" role="dialog"  style='display:none;' >                                    
                        <div class='modal-dialog modal-lg' >
                                    <div class='modal-content'>
                                        <div class='modal-header' align="center">
                                                <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
                                                <h4 class='modal-title'>Información de Título de Trabajo:<a id="idtrab"></a></h4>
                                        </div>
                                        <div class='modal-body'>
                                                    <div class="modal-header">
                                                    <h4 class="text-success">Título del Trabajo:</h4>
                                                    <p id="ttrab" style="font-weight: bold;text-indent: 1cm;"></p>
                                                    </div><div class="modal-header">
                                                    <h4 class="text-success">Palabras claves:</h4>
                                                    <div id="palabrastrab" style="font-weight: bold;text-indent: 1cm;"></div>
                                                    </div><div class="modal-header">
                                                    <h4 class="text-success">Temática del Trabajo</h4>
                                                    <p id="tematrab" style="font-weight: bold;text-indent: 1cm;"></p>
                                                    </div><div class="modal-header">
                                                    <h4 class="text-success">Resumen del Trabajo </h4>
                                                    <p id="resutrab" style="font-weight: bold;text-indent: 1cm;"></p>
                                                    </div><div class="modal-header">
                                                    <h4 class="text-success">Fecha del trabajo</h4>
                                                    <p id="fechtrab" style="font-weight: bold;text-indent: 1cm;"></p>                                                        
                                                    </div><div class="modal-header">
                                                    <h4 class="text-success">Descarga de Trabajo</h4>
                                                    <div id="urlmodalinfo" style="text-indent: 0.5cm;"></div>
                                                    </div><!--<div class="modal-header">
                                                    <h4 class="text-success">@@estadotrab@@</h4>
                                                    <p id="estadtrab" class="text-danger" style="font-weight: bold;text-indent: 1cm;"></p>
                                                    </div>-->
                                        </div>
                                        <div class='modal-footer'>
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                        </div>                                    
                </div>
               <!-- /modal-dialog -->
            
                <!-- #modal-dialog-dictaminat -->                                    
                <div id='modal-dialog-dictaminat' class='modal fade bs-example-modal-lg' tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static"  style='display:none;' >                                    
                        <div class='modal-dialog modal-lg' >
                                   <div class='modal-content'>
                                        <div class='modal-header' align="center">
                                                <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
                                                <h4 class='modal-title'>Formulario Evaluación de Trabajo <a id="idtrabd"></a></h4>
                                        </div>
                                        <div class='modal-body'>
                                                    <div class="modal-header">
                                                    <h4 class="text-success">Título de Trabajo:</h4>
                                                    <p id="ttrabd" style="font-weight: bold;text-indent: 1cm;"></p>
                                                    <h4 class="text-success">Ponderación:</h4>
                                                    <p id="pond" style="font-weight: bold;text-indent: 1cm;"></p>
                                                    <h4 class="text-success">Observación</h4>
                                                    <p id="obs" style="font-weight: bold;text-indent: 1cm;"></p>
                                                    </div>
                                            
                                            <br>
                                            <div class="form-control" align="center">
                                                <label align="center" class="text-success">Preguntas cuantitativas</label>
                                            </div><br>
                                            <div id="idrevisores1" class="form-control" align="center" style="float: left; width: 49%; display: none" >
                                                <label align="center" class="text-success" >Revisor</label>
                                            </div>
                                            <div >
                                                
                                                <table id="pcuanti1" class="table table-bordered m-0" style="float: left; width: 49%; display: none" >
                                                    <thead>
                                                        <tr class="text-success"   >
                                                            <th  class="text-success"  id="nrevisor" colspan="2"  style="text-align: center;"  >Revisor</th>
                                                        </tr>
                                                        <tr class='alert alert-success'>
                                                            <th  style="text-align: justify;" width='33%'>Preguntas</th>
                                                            <th  style="text-align: justify;" width='46%'>Respuestas</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        
                                                    </tbody>
                                                    
                                                </table>
                                                
                                            </div>
                                               
                                            <div  class="modal-header" id="numero_cuanti">
                                                     
                                            </div>
                                            
                                                 
                                            <div class="form-control" align="center">
                                                <label align="center" class="text-success">Preguntas Cualitativas</label>
                                            </div><br>
                                            
                                            <div >
                                                <table id="pcuali1" class="table table-bordered m-0" style="float: left; width: 49%; display: none">
                                                    <thead >
                                                        <tr class="text-success"   >
                                                            <th  class="text-success"  id="nrevisor" colspan="2"  style="text-align: center;"  >Revisor</th>
                                                        </tr>
                                                        <tr class='alert alert-success'>
                                                            <th style="text-align: center;" width='35%'>Preguntas</th>
                                                            <th style="text-align: center;" width='65%'>Respuestas</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                      
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div  class="modal-header" id="numero_cuali">
                                                     
                                            </div>
                                            <div  class="modal-header" id="numero_cuali">
                                                     
                                            </div>
                                             <div class="modal-header">
                                                <h4 class="text-success">Decisión de Trabajo</h4>
                                                <div id="desiciontrabajo" style="font-weight: bold;text-indent: 1cm;">
                                                     <div class="col-md-4">
                                                        <select class="form-control" id="tipo_dictamen"  >
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
<!--                                             <div class="modal-header">
                                                <h4 class="text-success">@@observaciones@@</h4>
                                                <div id="obstrabajo" style="font-weight: bold;text-indent: 1cm;"></div>
                                            </div>-->
                                        </div>
                                        <div class='modal-footer'>
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cerrar</button>
                                                <button type="button" class="btn btn-success waves-effect" id="btn_guardar" >Guardar</button>
                                        </div>
                                    </div>
                        </div>                                    
                </div>
               <!-- /modal-dialog1 -->
</form>
</div>
<!-- END row -->



<script src="./js/fnc_slc.js" type="text/javascript"></script>



<!-- ================== BEGIN page-js ================== -->
<script>
App.setPageTitle('.:CCE:.');
	$.getScript('../assets/plugins/datatables.net/js/jquery.dataTables.min.js'); //Datatable

	$.getScript('../assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js');//bootstrap style
	$.getScript('../assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js');//table responsive
	$.getScript('../assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js');//buttons
	$.getScript('../assets/plugins/datatables.net-buttons/js/buttons.html5.min.js');//all functions
	//$.getScript('../assets/plugins/pdfmake/build/pdfmake.min.js');//pdf 
	//$.getScript('../assets/plugins/jszip/dist/jszip.min.js');//excel            
    $.getScript('../assets/js/tables/table_dictaminar_trabajos_ep.js');
    $.getScript('./js/gestion_editor_principal/gestion_trabajos_ep.js');
</script>
<!-- ================== END page-js ================== -->


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
            
</script>