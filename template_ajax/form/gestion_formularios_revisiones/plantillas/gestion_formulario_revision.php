

<!-- BEGIN breadcrumb -->
<ol class="breadcrumb float-xl-end">
	<li class="breadcrumb-item"><a href="javascript:;">Inicio</a></li>
    <li class="breadcrumb-item"><a href="javascript:;">Gestión Formularios de Revisión</a></li>
    <li class="breadcrumb-item active">Crear Formulario</li>
</ol>
<!-- END breadcrumb -->
<!-- BEGIN page-header -->
<h1 class="page-header">Creación de Formulario<small></small></h1>
<!-- END page-header -->
<!-- BEGIN row -->
<div class="row">
	<!-- BEGIN col-6 -->
	<div class="col-xl-12">
		<!-- BEGIN panel -->
		<div class="panel panel-inverse" data-sortable-id="form-validation-2">
			<!-- BEGIN panel-heading -->
			<div class="panel-heading">
				<h4 class="panel-title">Crear Formulario</h4>
				<div class="panel-heading-btn">
					<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
				</div>
			</div>
			
               <!-- BEGIN panel-body -->
			<div class="panel-body">
            <ul>
                    <li><a href="#tab1" data-toggle="tab" id="cuali" >@@p_cualitativa@@</a></li>
                    <li><a href="#tab2" data-toggle="tab" id="cuanti" style="display: none">@@p_cuantitativa@@</a></li>
                    <li><a href="#tab3" data-toggle="tab" id="final" style="display: none">@@finalizar@@</a></li>
                </ul>

                <div class="tab-pane m-t-10 fade" id="tab1">
                        <div class="row" >
                            <div class="form-group clearfix" >
                                <label class="col-md-2 control-label " for="pregunta">@@nomb_formulario@@</label>
                                <div class="col-md-7">
                                    <input class="form-control required" id="nombre" name="pregunta" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row" >
                            <div class="form-group clearfix" >
                                <label class="col-md-2 control-label " for="pregunta">@@des_formulario@@</label>
                                <div class="col-md-7">
                                    <input class="form-control required" id="desc" name="pregunta" type="text">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row"  id="preguntas">
                            <div class="form-group clearfix" id="hijo1">
                                <label class="col-md-2 control-label " for="pregunta">@@pre@@</label>
                                <div class="col-md-7">
                                    <input class="form-control required" id="pregunta" name="pregunta" type="text"  >
                                </div>
                            </div>
                        </div>
                        <br>
                        <div  class="form-group clearfix">
                            <button class="btn btn-icon btn-rounded waves-effect waves-light btn-success m-b-5" id="agregar1" ><i c class="fa fa-plus-square"></i> Agregar Pregunta</button>
                            <span   class="btn btn-icon btn-rounded waves-effect waves-light btn-danger m-b-5" id="eliminar1" style="display:none"><i c class="fa  fa-minus-square"></i> Eliminar Pregrunta</span>
                        </div>
                        <br><br>
                        </div>



                 <div class="tab-pane m-t-10 fade" id="tab2">
                    <div class="row">
                        <div id="preguntacuanti1">
                            <div class="form-group clearfix">
                                <label class="col-md-2 control-label " for="pregunta">@@pre@@</label>
                                <div class="col-md-7">
                                    <input class="form-control required" id="pregunta" name="pregunta" type="text"  >
                                </div>
                            </div>

                            <div class="form-group clearfix"  >
                                <label class="col-md-2 control-label " >@@tipopregunta@@</label>
                                    <div class="col-md-7">
                                        <select class="form-control" id="sel1" onchange="ponderacion(this.value)" ></select>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>


                        <div  class="form-group clearfix" id="ponderaciones1"></div>
                        <div id="append"></div>


                        <div  class="form-group clearfix" id="opciones1" style="display: none">
                                <label class="col-md-2 control-label " for="pregunta">@@opcion@@</label>
                                <div class="col-md-2">
                                    <input class="form-control required" id="pregunta" name="pregunta" type="text"  >
                                </div>
                                
                                <div class="col-md-1"  >
                                    <input id="peso" class="form-control required" placeholder="@@peso@@" type="text" maxlength="6" onkeypress="return valida(event,this)" >
                                </div>
                            </div> 

                            <div  class="form-group clearfix">
                                <span  class="btn btn-icon btn-rounded waves-effect waves-light btn-success m-b-5" id="agregar2" style="display:none"><i c class="fa fa-plus-square"></i> Agregar Pregunta</span>
                                <span   class="btn btn-icon btn-rounded waves-effect waves-light btn-danger m-b-5" id="eliminar2" style="display:none"><i c class="fa  fa-minus-square"></i> Eliminar Pregrunta</span>
                            </div>
            </div>
            </div>

                    
            <div class="tab-pane m-t-10 fade" id="tab3">
                        <div class="row">
                            <div class="form-group clearfix">
                                <label class="col-md-6 control-label " for="pregunta">@@creado@@</label>
                            </div>
                        </div>
                    </div>

                    <div class="m-t-20"></div>

                    <div class="pull-right" >
                        <input type='submit' class='btn btn-primary button-next' id="guardar1" value='Guardar y Continuar'/>
                        <input type='submit' class='btn btn-primary button-next' id="guardar2" value='Guardar y Continuar' style="display: none"/>
                    </div>

                    <input type="hidden" id="numero"  value="1">
                    <input type="hidden" id="numerocuanti"  value="1">
                    <input type="hidden" id="caso"  value="instr_prcuali">
                    <input type="hidden" id="caso1"  value="instr_form">
                    <input type="hidden" id="caso2"  value="instr_prcuanti">
                    <input type="hidden" id="create_form"  value="">
                    <div class="clearfix"></div>

            </div>
		</div>
		<!-- END panel -->
	</div>
	<!-- END col-6 -->
</div>
<!-- END row -->

<script src="./js/fnc_slc.js" type="text/javascript"></script>
<script type="text/javascript">
    (function(){  
    var agregar = $("span#agregar1");
        agregar.click(function(e) {
        agregar1();    
        });
       
    var eliminar = $("span#eliminar1");
        eliminar.click(function() {
        eliminar1();
        });
        
    var agr1 = $("span#agregar2");
        agr1.click(function(e) {
        agregar2();    
        }); 
     
    $('#guardar1').click(function() {
        $("#guardar1").attr("style", "display:none");
        $("#guardar2").removeAttr("style");
        $("#cuanti").removeAttr("style");
        $("#cuali").attr("style","display:none");
        gyc();
     });
     $('#guardar2').click(function() {
        gyc2();
     }); 
    
 }());
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
                         
$(document).ready(function() {
        $('#basicwizard').bootstrapWizard({'tabClass': 'nav nav-tabs navtab-custom nav-justified bg-muted'});

        $('#progressbarwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
            var $total = navigation.find('li').length;
            var $current = index+1;
            var $percent = ($current/$total) * 100;
            $('#progressbarwizard').find('.bar').css({width:$percent+'%'});
        },
            'tabClass': 'nav nav-tabs navtab-custom nav-justified bg-muted'});
        
        $('#btnwizard').bootstrapWizard({'tabClass': 'nav nav-tabs navtab-custom nav-justified bg-muted','nextSelector': '.button-next'});

       
   

});
    </script>
<script>
			App.setPageTitle('.:CCE:.');
			$.getScript('../assets/plugins/datatables.net/js/jquery.dataTables.min.js'); //Datatable
			$.getScript('../assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js');//bootstrap style
			$.getScript('../assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js');//table responsive
			$.getScript('../assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js');//buttons 
			$.getScript('../assets/plugins/datatables.net-buttons/js/buttons.html5.min.js');//all functions
			$.getScript('../assets/plugins/pdfmake/build/pdfmake.min.js');//pdf 

			$.getScript('../assets/js/tables/table_asociar_formulario.js');
			$.getScript('./js/gestion_formulario_revisiones/form_crear_formulario.js');

		</script>
		