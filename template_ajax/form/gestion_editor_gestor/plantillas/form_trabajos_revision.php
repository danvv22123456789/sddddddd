<script src="./js/fnc_slc.js"></script>

<!-- BEGIN breadcrumb -->
<ol class="breadcrumb float-xl-end">
    <li class="breadcrumb-item"><a href="javascript:;">Inicio</a></li>
    <li class="breadcrumb-item"><a href="javascript:;">Gestión Editor Gestor</a></li>
    <li class="breadcrumb-item active">Trabajos</li>
</ol>
<!-- END breadcrumb -->
<!-- BEGIN page-header -->
<h1 class="page-header">Gestión Editor Gestor<small></small></h1>
<!-- END page-header -->
<!-- BEGIN row -->
<div class="row">
    <!-- BEGIN col-6 -->
    <div class="col-xl-12">
        <!-- BEGIN panel -->
        <div class="panel panel-inverse" data-sortable-id="form-validation-1">
            <!-- BEGIN panel-heading -->
            <div class="panel-heading">
                <h4 class="panel-title">Administración de trabajos de investigación</h4>
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
                <form enctype="multipart/form-data" method='POST' name='form_trabajos_revision' id='form_trabajos_revision' class='form-horizontal form-bord <forered' data-parsley-validate='true'>

                    <div class="container">
                        <div class="row">
                            <div class="form-group row mb-3">
                                <label class="col-lg-12 col-form-label form-label text-center">
                                    <h3>Seleccione una Temática:</h3>
                                </label>
                                <div class="col-lg-12">
                                    <select class="form-select" id="tematicas_trabajo" name="tematicas_trabajo" onchange="construyetrabajos(this.value);">
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
                <table id="tbl_trabajos_subidos_eg" name="tbl_trabajos_subidos_eg" class="table table-striped table-bordered align-middle display responsive no-wrap" width="100%">
                    <thead>
                        <tr>
                            <th width="1%">N.</th>
                            <th class="text-nowrap">Título</th>
                            <th class="text-nowrap">Tipo de Trabajo</th>
                            <th class="text-nowrap">Idioma</th>
                            <th class="text-nowrap">Estado</th>
                            <th class="text-nowrap">Autoría Confirmada</th>
                            <th class="text-nowrap">Acciones</th>
                        </tr>
                    </thead>

                </table>
            </div>
            <input type="hidden" id="idt" name="idt" value="" />
            <input type="hidden" id="caso" name="caso" value="" />
            <!-- END panel-body -->
        </div>
        <!-- END panel -->
    </div>
    <!-- END col-6 -->
    <!-- #modal-dialog1 -->
    <div class='modal fade' id='modal-dialog1' style='display:none;'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
                    <h4 class='modal-title'>Documento de Investigación</h4>
                </div>

                <div class='modal-body'>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group no-margin">
                                <label class='col-md-5 control-label' for='fullname'>Archivo Ajunto <p class="text-danger">Leyenda de Archivo</p></label>
                                <div class="col-md-4">
                                    <input type="file" id="nuevo_trabajo" name="nuevo_trabajo" class="btn-default btn-rounded" accept=".odt, .doc, .docx" /><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='modal-footer'>
                    <a href='javascript:;' class='btn btn-sm btn-white' data-dismiss='modal'>Cancelar</a>
                    <a type='button' onclick='cargarnversion();' class='btn btn-primary btn-success'>Guardar</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal-dialog1 -->

    </form>
</div>
<!-- END row -->



<script src="./js/fnc_slc.js" type="text/javascript"></script>
<script src="./js/gestion_editor_gestor/form_trabajos_revision.js"></script>





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
            $.getScript('../assets/js/tables/table_trabajos_revision_eg.js'),
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
                alert('@@nodisponible@@');
            }
            function avisoarchivo(){
                alert('@@trabajonoenviadoarevision@@');
            }
            function avisonoexiste(){
                 alert('@@archivonoexiste@@');
            }
            
</script>