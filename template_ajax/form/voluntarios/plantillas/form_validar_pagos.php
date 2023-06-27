<!-- BEGIN breadcrumb -->
<ol class="breadcrumb float-xl-end">
    <li class="breadcrumb-item"><a href="javascript:;">Inicio</a></li>
    <li class="breadcrumb-item"><a href="javascript:;">Voluntarios</a></li>
    <li class="breadcrumb-item active">Pagos</li>
</ol>
<!-- END breadcrumb -->
<!-- BEGIN page-header -->
<h1 class="page-header">Voluntarios<small></small></h1>
<!-- END page-header -->
<!-- BEGIN row -->
<div class="row">
    <!-- DUDA CON ID Y NAME -->
    <form enctype="multipart/form-data" method='POST' name='m_itineario' id='m_itineario' class='form-horizontal form-bord forered' data-parsley-validate='true'>

        <!-- BEGIN col-6 -->
        <div class="col-xl-12">
            <!-- BEGIN panel -->
            <div class="panel panel-inverse" data-sortable-id="form-validation-2">
                <!-- BEGIN panel-heading -->
                <div class="panel-heading">
                    <h4 class="panel-title">Validar Pago</h4>
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                </div>


                <!-- BEGIN panel-body -->
                <div class="panel-body">
                    <table id="tbl_validar_pagos" name="tbl_validar_pagos" class="table table-striped table-bordered align-middle display responsive no-wrap" width="100%">
                        <thead>
                            <tr>
                                <th width="1%">N.</th>
                                <th class="text-nowrap">Título</th>
                                <th class="text-nowrap">Personas Registradas</th>
                                <th class="text-nowrap">Correo</th>
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

            <div id='modal_info_actividad_voluntario' class='modal fade bs-example-modal-lg' tabindex="-1" role="dialog" style='display:none;'>
                <div class='modal-dialog modal-lg'>
                    <div class='modal-content'>
                        <div class='modal-header' align="center">
                            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button>
                            <h4 class='modal-title'>Información Actividad Voluntario:<a id="idtrab"></a></h4>
                        </div>
                        <div class='modal-body'>
                            <div class="modal-header">
                                <h4 class="text-success">Nombre de la Tarea:</h4>
                                <p id="ntarea" style="font-weight: bold;text-indent: 1cm;"></p>
                            </div>
                            <div class="modal-header">
                                <h4 class="text-success">Descripción:</h4>
                                <div id="desc_tarea_vol" style="font-weight: bold;text-indent: 1cm;"></div>
                            </div>
                            <div class="modal-header">
                                <h4 class="text-success">Cantidad de Horas:</h4>
                                <p id="horas_vol_sumar" style="font-weight: bold;text-indent: 1cm;"></p>
                            </div>
                            <div class="modal-header">
                                <h4 class="text-success">Persona de apoyo:</h4>
                                <p id="persona_apoyo" style="font-weight: bold;text-indent: 1cm;"></p>
                            </div>
                            <div class="modal-header">
                                <h4 class="text-success">Archivo complementario</h4>
                                <p id="doc_vol_comple" style="font-weight: bold;text-indent: 1cm;"></p>
                            </div>

                        </div>
                        <div class='modal-footer'>
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
    </form>


    <div class='modal fade' id='pagos_pesona' tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static">
        <div class='modal-dialog modal-full'>
            <div class='modal-content'>
                <button type="button" class="close" data-dismiss="modal">
                    <span>×</span><span class="sr-only">Close</span>
                </button>
                <div class='modal-header'>
                    <h4 class='modal-title'>Validar Pagos</h4>
                </div>
                <div class='modal-body'>
                    <div class="row">
                        <div class='form-group' align="center">
                            <p class="text-muted m-b-25 font-13" style="text-align: justify">
                                Información de Validación de Pagos
                            </p>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Tipo de Pago</label>
                                <div class="col-md-7" align="right" id="tipo_pago">
                                    <select class="form-control" id="slc_tipo_pago" name="slc_tipo_pago" onchange="datos_pago(this.value)">

                                    </select>
                                </div>
                            </div>
                            <div id="tours" class="form-group" style="display: none">
                                <label class="col-md-3 control-label">Tipo de Tour</label>
                                <div class="col-md-7" align="right">
                                    <select class="form-control" id="slc_tipo_tour" name="slc_tipo_tour" onchange="datos_pago(this.value)">

                                    </select>
                                </div>
                            </div>

                            <div style=" display: none" class="col-sm-12" id="datos_factura">
                                <div class="card-box">
                                    <div class="form-control" align="center">
                                        <label align="center" class="text-success">Detalle de Factura</label>
                                    </div>
                                    <div>
                                        <p class="text-muted m-b-30 font-13" style="text-align: justify; width: 90%; margin-left: 3%;">
                                        </p>
                                    </div>
                                    <div class="table-responsive">
                                        <table id="tbl_info_factura" name="tabla" class="table table-striped m-b-0">
                                            <thead>
                                                <tr>
                                                    <th width='3'>N.</th>
                                                    <th width='25%'>Producto</th>
                                                    <th width='15%'>precio unitario</th>
                                                    <th width='3%'>Tipo de Impuesto</th>
                                                    <th width='15%'>Descripción</th>
                                                    <th width='3%'>Impuesto</th>
                                                    <th width='3%'>Descuento</th>
                                                    <th width='8%'>Total Antes ISV</th>
                                                    <th width='8%'>Total con IVS</th>
                                                    <th colspan="2">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody id="datos_factura_mostrar">

                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                </tr>
                                                <thead>
                                                </thead>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='modal-footer'>
                    <input type="hidden" id="voluntario" value="1">
                    <ul class="pager m-b-0 wizard" id="btn_validar_pago" style="display: none">
                        <li class="next"><a id="btn_validar_pagos" class="btn btn-primary waves-effect waves-light">@@validar_pago@@</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <input type="hidden" id="persona" value="">
        <input type="hidden" id="usuario" value="">
        <input type="hidden" id="funcion" value="tbl_info_factura">
        <input type="hidden" id="dato" value="0">
        <input type="hidden" id="num" value="1">
        <input type="hidden" id="val_antes_des" value="">
        <input type="hidden" id="val_despues_des" value="">
        <input type="hidden" id="total_a_pagar_persona" value="">
        <input type="hidden" id="id_tr_descuento" value="">
    </div>



    <div class="modal fade" id='pagos_decuento' tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" style="margin-top: 200px;">
    <div class='modal-dialog modal-lg' style="background-color: white;border-style: solid;border-color: #3bafda;">
        <button type="button" class="close" data-dismiss="modal">
            <span>×</span><span class="sr-only">Close</span>
        </button>
        <h4 class="custom-modal-title">Descuento</h4>
        <p class="text-muted m-b-25 font-13" style="text-align: justify;margin-left: 50px;margin-right: 50px;margin-top: 15px;">
            Informacion de Descuento
        </p>
        <div class="custom-modal-text">
            <div class='modal-body'>
                <div class="row">
                    <div class="form-group" id="ingreso_clave">
                        <label class="col-md-2 control-label">Clave de Descuento</label>
                        <div class="col-md-5" align="right" id="">
                            <input type="password" id="clave_desc" name="clave_desc" maxlength="11" class="form-control" required placeholder="@@clave_descuento@@" />
                        </div> <br>
                        <label style="display: none" id="error" class="col-md-2 control-label">Error</label>
                        <label style="display: none" id="error1" class="col-md-2 control-label">Error 1</label>
                    </div>
                    <div class="form-group" id="descuento_aplicar">

                    </div>

                </div>
            </div>
            <div class='modal-footer'>
                <ul style="display: none" class="pager m-b-0 wizard" id="btn_aplicar_descuento">
                    <li class="next"><a id="aplicar_descuento" class="btn btn-primary waves-effect waves-light">Aplicar</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>





<!-- END row -->


<!-- ================== BEGIN core-js ================== -->
<script>
    App.setPageTitle('.:CCE:.');
	$.getScript('../assets/plugins/datatables.net/js/jquery.dataTables.min.js'); //Datatable
	$.getScript('../assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js');//bootstrap style
	$.getScript('../assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js');//table responsive
	$.getScript('../assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js');//buttons 
	$.getScript('../assets/plugins/datatables.net-buttons/js/buttons.html5.min.js');//all functions
	$.getScript('../assets/plugins/pdfmake/build/pdfmake.min.js');//pdf 
	$.getScript('../assets/plugins/jszip/dist/jszip.min.js');//excel
    $.getScript('../assets/js/tables/table_pagos.js');
 
</script>
<!-- ================== END core-js ================== -->



<script>
    $('#tbl_info_factura').editableTableWidget().numericInputExample().find('td:first').focus();

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