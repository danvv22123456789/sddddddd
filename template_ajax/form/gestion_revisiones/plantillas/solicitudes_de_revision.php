<script src="./js/fnc_slc.js"></script>

<!-- BEGIN breadcrumb -->
<ol class="breadcrumb float-xl-end">
    <li class="breadcrumb-item"><a href="javascript:;">Inicio</a></li>
    <li class="breadcrumb-item"><a href="javascript:;">Gestión Revisor</a></li>
    <li class="breadcrumb-item active">Trabajos</li>
</ol>
<!-- END breadcrumb -->
<!-- BEGIN page-header -->
<h1 class="page-header">Gestión Revisor<small></small></h1>
<!-- END page-header -->
<!-- BEGIN row -->
<div class="row">
<form enctype="multipart/form-data" method='POST' name='form_revisar_trabajos'  id='form_revisar_trabajos' class='form-horizontal form-bord <forered' data-parsley-validate='true'> 
  <!-- BEGIN col-6 -->
  <div class="col-xl-12">
        <!-- BEGIN panel -->
        <div class="panel panel-inverse" data-sortable-id="form-validation-2">
            <!-- BEGIN panel-heading -->
            <div class="panel-heading">
                <h4 class="panel-title">Solicitudes Pendientes</h4>
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
                </div>
            </div>
    
            <!-- BEGIN panel-body -->
            <div class="panel-body">
                <table id="tbl_revisiones" name="tbl_revisiones" class="table table-striped table-bordered align-middle display responsive no-wrap" width="100%">
                    <thead>
                        <tr>
                            <th width="1%">N.</th>
                            <th class="text-nowrap">Título</th>
                            <th class="text-nowrap">Tipo de Trabajo</th>
                            <th class="text-nowrap">Acciones</th>
                        </tr>
                    </thead>

                </table>
            </div>

            <input type="hidden" id="idt" name="idt" value=""/> 
             <input type="hidden" id="idtem" name="idtem" value=""/>
            <input type="hidden" id="caso" value="aceptar_trabajo_revisar"> 
            <input type="hidden" id="nfilapcuanti" name="nfilapcuanti" value=""/> 
            <input type="hidden" id="nfilapcuali" name="nfilapcuali" value=""/> 
            <input type="hidden" id="descargo_archivo" name="descargo_archivo" value="0"/> 
            
           
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
                <h4 class="panel-title">Trabajos a Revisar</h4>
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
                </div>
            </div>


            <!-- BEGIN panel-body -->
            <div class="panel-body">
                <table id="tabajos_aceptados" name="tabajos_aceptados" class="table table-striped table-bordered align-middle display responsive no-wrap" width="100%">
                    <thead>
                        <tr>
                            <th width="1%">N.</th>
                            <th class="text-nowrap">Título</th>
                            <th class="text-nowrap">Palabras Claves</th>
                            <th class="text-nowrap">Tipo de Trabajo</th>
                            <th class="text-nowrap">Temática Asociada</th>
                            <th class="text-nowrap">Formulario de Revisión</th>
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
           <!-- Tabla para trabajos aceptados a revisar  -->
             <!-- #modal-dialog--> 
             <div id='modal-dialog-infot' class='modal fade bs-example-modal-lg' tabindex="-1" role="dialog"  style='display:none;' >                                    
                        <div class='modal-dialog modal-lg' >
                                    <div class='modal-content'>
                                        <div class='modal-header' align="center">
                                                <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
                                                <h4 class='modal-title'>Información Título de Trabajo:<a id="idtrab"></a></h4>
                                        </div>
                                        <div class='modal-body'>
                                                    <div class="modal-header">
                                                    <h4 class="text-success">Título de Trabajo</h4>
                                                    <p id="ttrab" style="font-weight: bold;text-indent: 1cm;"></p>
                                                    </div><div class="modal-header">
                                                    <h4 class="text-success">Palabra Clave:</h4>
                                                    <div id="palabrastrab" style="font-weight: bold;text-indent: 1cm;"></div>
                                                    </div><div class="modal-header">
                                                    <h4 class="text-success">Temática de Trabajo:</h4>
                                                    <p id="tematrab" style="font-weight: bold;text-indent: 1cm;"></p>
                                                    </div><div class="modal-header">
                                                    <h4 class="text-success" >Resumen de Trabajo</h4>
                                                    <p id="resutrab" style="font-weight: bold;text-indent: 1cm; text-align: justify" ></p>
                                                    </div><div class="modal-header">
                                                    <h4 class="text-success">Fecha de Trabajo</h4>
                                                    <p id="fechtrab" style="font-weight: bold;text-indent: 1cm;"></p>                                                        
                                                    </div><div class="modal-header" id="descargar">
                                                        <h4 class="text-success" >Descargar Trabajo</h4>
                                                    <div id="urlmodalinfo" style="text-indent: 0.5cm;"></div>
                                                    </div>
                                        </div>
                                        <div class='modal-footer'>
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                        </div>                                    
                </div>
               <!-- /modal-dialog -->
            
             <!-- #modal-dialog-revisatrab -->                                    
                <div id='modal-dialog-revisatrab' class='modal fade bs-example-modal-lg' tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static"  style='display:none;' >                                    
                        <div class='modal-dialog modal-lg' >
                                   <div class='modal-content' >
                                        <div class='modal-header' align="center">
                                                <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
                                                <h4 class='modal-title'>Formulario Evaluación de Trabajo<a id="idtrabd"></a></h4>
                                        </div>
                                        <div class='modal-body'>
                                                    <div class="modal-header">
                                                    <h4 class="text-success">Título de Trabajo</h4>
                                                    <p id="ttrabd" style="font-weight: bold;text-indent: 1cm;"></p>
                                                    </div>
                                            
                                            <div class="form-control" align="center" style="background-color: #dae6ec;">
                                                <label align="center" class="text-success">Preguntas Cuantitativas</label>
                                            </div>
                                            <div class="modal-header" style="background-color: #dae6ec;">
                                                <table id="pcuanti" class="table table-bordered m-0">
                                                    <thead>
                                                        <tr class='alert alert-success'>
                                                            <th  style="text-align: center;" width='35%'>Preguntas</th>
                                                            <th  style="text-align: center;" width='65%'>Respuestas</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="form-control" align="center" style="background-color: #dae6ec;">
                                                <label align="center" class="text-success">Preguntas Cualitativas</label>
                                            </div>
                                            <div class="modal-header" style="background-color: #dae6ec;">
                                                <table id="pcuali" class="table table-bordered m-0">
                                                    <thead >
                                                        <tr class='alert alert-success'>
                                                            <th style="text-align: center;" width='35%'>Preguntas</th>
                                                            <th style="text-align: center;" width='65%'>Respuestas</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                             <div class="modal-header" style="background-color: #dae6ec;">
                                                <h4 class="text-success">Decisión del trabajo</h4>
                                                <div id="desiciontrabajo" class="col-md-5" style="font-weight: bold;text-indent: 1cm;"></div>
                                            </div>
                                             <div class="modal-header" style="background-color: #dae6ec;">
                                                 
                                                <h4 class="text-success">Observaciones</h4>
                                                <div id="obstrabajo" class="col-md-12" style="font-weight: bold;text-indent: 0.1cm;"></div>
                                            </div>
                                        </div>
                                        <div class='modal-footer'>
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cerrar</button>
                                                <button type="button" class="btn btn-success waves-effect" id="guardarrevisiontrabajo" >Guardar</button>
                                        </div>
                                    </div>
                        </div>                                    
                </div>
               <!-- /modal-dialog1 -->

    </form>
</div>
<!-- END row -->



<script src="./js/fnc_slc.js" type="text/javascript"></script>
<script src="./js/gestion_revisiones/solicitudes_de_revision.js"></script>




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
            $.getScript('../assets/js/tables/table_revisiones.js'),
                $.Deferred(function(deferred) {
                    $(deferred.resolve);
                }),
                $.getScript('../assets/js/tables/table_revisiones_trabajos_aceptados.js'),
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
            function aviso(){
                alert('No Disponible');
            }
            function avisoarchivo(){
                alert('Trabajo no enviado a Revisión');
            }
            function avisonoexiste(){
                 alert('El Archivo no Existe');
            }
            function radiosrevtrab(idradio, opcionestot,idpregunta, fila){
                //alert(idradio)
               
               for(var i = 1; i <= opcionestot; i++){
                   //alert(fila)
                  if(i == fila){
                      $("#"+idradio).prop('checked', true); 
                  }else{
                      $("#preg_"+idpregunta+"_"+i).prop('checked', false);
                  }                   
               }
                 
            }
            function descargo_archivo(){                
                $("#descargo_archivo").val(1)
            }
</script>