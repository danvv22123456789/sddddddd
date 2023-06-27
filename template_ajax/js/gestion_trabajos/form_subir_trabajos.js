/* 
 * Certificado de Asistente.
 * autor: Obed Martinez
 * 20/02/2017.
 */

//CONTRUCCION DEL FORMULARIO
function retorno(resp){
    $('#contenedor').html(resp);
}
//FUNCION PARA CARGAR EL FORMULARIO DE CERTIFICADOS EN EL MENU PRINCIPAL (PAGINA DE INICIO)
/*$("#subir_trabajo").click(function (){
   $.post("./form/gestion_trabajos/form_subir_trabajo.php", {}, function (resp) {     
       //console.log(resp);
       $('#contenedor').html("");
       retorno(resp);
    }); */

//VAlida formulario por congreso
//function valida_congreso(idcongreso){
//    var caso = 'valida_congreso';
//    $.post("./form/gestion_trabajos/plantillas/funciones.php", {caso:caso, idcongreso:idcongreso}, function (resp) {
//        console.log(resp);
//    });
//}


$(document).ready(function () {
    $.post("./includes/fnc_select_multiple.php?funcion=tematicas_trabajo", {}, function (resp) {
        $("#tematicas_trabajo").html("");
        $("#tematicas_trabajo").html(resp);
    });
});

//VAlida formulario por tipo de trabajo
function valida_tp(tp){
    var caso = 'valida_tp';
    $("#pn_palabras").removeAttr("style");
    $("#pn_caracteres").removeAttr("style");
    $("#pn_tematicas").removeAttr("style");
    $.post("./form/gestion_trabajos/plantillas/funciones.php", {caso:caso, tp:tp}, function (resp) {
        //console.log(resp);
        var dataJson = JSON.parse(resp);
        /*$("#resumen_abreviado").attr("maxlength",dataJson.numero_maximo_palabras_resumen);*/
     
        $("#n_palabras").text(dataJson.numero_maximo_palabras_clave);
        $("#n_caracteres").text(dataJson.numero_maximo_palabras_resumen);        
        $("#n_autores").removeAttr("max");
        $("#n_autores").attr("max",dataJson.numero_maximo_autores - 1); 
        $("#n_autores").attr("onkeypress","autores(this.value,"+dataJson.numero_maximo_autores+")");
        $("#n_autores").attr("onkeydown","autores(this.value,"+dataJson.numero_maximo_autores+")");
        $("#n_autores").attr("onkeyup","autores(this.value,"+dataJson.numero_maximo_autores+")");
        $("#n_autores").attr("onchange","autores(this.value,"+dataJson.numero_maximo_autores+")");
        if(tp == 1 ){ // validar que active la partici[pacion en los premios y en la revista
            $("#publipremio").removeAttr('style');
            $("#publirevista").removeAttr('style');
        }else{
            $("#publipremio").css('display','none');
            $("#publirevista").css('display','none');
        }
        $("#n_autores").val("");
        $("#coautores").html("");
        $("#tautores").css("display", "none");
    });   
}

//funcion construyen tematicas

function tcarga(id_tem){
    var caso = 'tem2';  
    $("#div_tem2").css('display','none');
    $("#div_tem3").css('display','none');
    if(id_tem != 0){
        $.post("./form/gestion_trabajos/plantillas/funciones.php", {caso:caso,id_tem:id_tem}, function (resp) {
                   //    alert(resp);
                   //console.log(resp);
               var dataJson = JSON.parse(resp);       
               $("#tematicas_trabajo2").html("");
               $("#tematicas_trabajo3").html("");
               $("#tematicas_trabajo2").append("<option selected='true' value='0'>Seleccione</option>");
               $("#tematicas_trabajo3").append("<option selected='true' value='0'>Seleccione</option>");
               
               for (var i=1; i<=dataJson.n_tematicas;i++){ 
                   if(typeof(dataJson['id_tematica_pk'+i]) !== 'undefined'){
                        $("#tematicas_trabajo2").append("<option value="+dataJson['id_tematica_pk'+i]+">"+dataJson['nombre_tematica'+i]+"</option>");
                    }
                }
                $("#div_tem2").removeAttr('style');
                $("#div_tem3").css('display','none');
            });   
    }
    
}
function tcarga1(id_tem){
    var caso = 'tem3';
    var id_tem1 = $("#tematicas_trabajo").val();
//    alert(id_tem);
    $("#div_tem3").css('display','none');
     if(id_tem != 0 && id_tem1 != 0){
         $.post("./form/gestion_trabajos/plantillas/funciones.php", {caso:caso,id_tem:id_tem,id_tem1:id_tem1}, function (resp) {
               //alert(resp);
               //console.log(resp);
               var dataJson = JSON.parse(resp);
               $("#tematicas_trabajo3").html("");
               $("#tematicas_trabajo3").append("<option selected value='0'>Seleccione</option>");
               for (var i=1; i<=dataJson.n_tematicas;i++){ 
                   if(typeof(dataJson['id_tematica_pk'+i]) != 'undefined'){
                       $("#tematicas_trabajo3").append("<option value="+dataJson['id_tematica_pk'+i]+">"+dataJson['nombre_tematica'+i]+"</option>");
                   }                   
               }
               $("#div_tem3").removeAttr('style');
            }); 
     }
      
}


$("#actualizar_trabajo").click(function () {
        
        //var datos = $("#form_trabajo").serialize();
        var formData = new FormData($("#form_trabajo_actualizar")[0]);

        var tematicastrabajo = $("#tematicas_trabajo").val();
        
        $.each(tematicastrabajo, function(key, value) {
            formData.append('tematicastrabajo[]', value);
        });

        var nombre = $('#titulo_trabajo').val();
        var caso = $("#caso").val();
 
       if(nombre === '') {
            alert('Error: Todos los campos son requeridos');
            return false;
        }
        
		$.ajax({
            cache:false,
            async: false,
			type:"POST",
			url:"./includes/querys.php?caso="+caso,
            data: formData,
            contentType: false,
            processData: false,
            success: function (r) {
                if(r){
                    if (caso == "actualizar_trabajo"){
                        alert("Actualizado con Exito");    
                        cerrarModal('modalActualizar');
                    }
                    
                }else{
                    alert("Fallo el server");
                
                }
            }
		});
    
 
    });

/*
 * Guardar Trabajo
 */
/*
function subir_trabajo(){
    var caso = $("#caso").val();
    
    $("#btn_subir_trabajo").prop('disabled', true);
    $.ajax({
           url: "./includes/querys.php?caso="+caso,
           type: "POST",
           data: $('#form_subir_trabajos').serialize(),
           success: function (resp) {
              alert(resp);
                 if(resp==1){                   
                           //SUBIMOS EL TRABAJO 
                       var formData = new FormData($("#form_subir_trabajos")[0]);
                       var ruta = "form/gestion_trabajos/plantillas/doc-ajax.php";
                       $.ajax({
                           url: ruta,
                           type: "POST",
                           data: formData,
                           contentType: false,
                           processData: false,
                           success: function(datos)
                           {
                            alert(datos);
                          
                            if(datos){
               
                                swal("¡Datos Guardados Exitosamente!", ":D" , "success");
                                $('#form_subir_trabajos').trigger("reset");//limpiar formulario                    
                                    //funcion para actualizar tabla donde se visualizan los campos ingresados
                                 $.post("./form/gestion_trabajos/form_subir_trabajo.php", {}, function (resp) {     
                                    //console.log(resp);
                                    $('#contenedor').html("");
                                    retorno(resp);
                                 });  
                                 $("#btn_subir_trabajo").prop('disabled', false);
                            }else{
                                swal("¡Error!", ":(" , "error");
                            }
                           }
                       });

                      
                          // FIN DE SUBIDA DE IMAGENES                   
                }else{
                  
                    //  alert('Ha ocurrido un error y no se pudo subir su trabajo, por favor inténtelo nuevamente!');
                }
           }
       });
}
*/
function actualiza_trabajo(id) {
    var caso = 'get_trabajo';
    $.ajax({
        method: "POST",
        url: "./includes/querys.php?caso="+caso,
        data: {
            id: id
        },
        success: function (datos) {

            console.log(datos);

            var data = JSON.parse(datos);
            data = data[0];
            $("#titulo_trabajo").val(data['titulo_trabajo']);
            $("#resumen_trabajo").val(data['resumen']);
            $("#tematicas_trabajo").val(data['id_tematica_fk']);
            $("#hora_sugerida").val(data['horario_sugerido']);
            $("#n_autores").val(data['num_authors']);
            $("#tpremio").val(data['premio']);
            $("#trevista").val(data['revista']);
            $("#ttrabajo").val(data['id_tipo_trabajo_fk']);
            $("#idioma").val(data['id_idioma_fk']);
            $("#palabras_clave").val(data['palabrasclave']);
            $("#resumen_abreviado").val(data['resumenprograma']);

            $("#id").val(data["id_trabajo_pk"]);
            $("#caso").val("actualizar_trabajo");

            if (data['more_authors'] == 1 || data['more_authors'] == '1') {
                $("#tautor_si").prop("checked", true);
                $("#tautores").show();
            } else {
                $("#tautor_no").prop("checked", true);
                $("#tautores").hide();
            }

            //$("#archivo_trabajo").val(data['ubicacion_archivo']);

        }
    });

    var caso = 'get_trabajo_tematica';

    $.ajax({
        method: "POST",
        url: "./includes/querys.php?caso="+caso,
        data: {},
        success: function (datos) {
            /*
                $("#tematicas_trabajo option").prop("selected", false);

                var data = JSON.parse(datos);
                var select = document.getElementById("tematicas_trabajo");
                for (var i = 0; i < data.length; i++) {
                    var option = select.querySelector("#tematicaid" + data[i].id_rol_fk);
                    if (option) {
                        option.selected = true;
                    }
                }
            */

               
        }
    });

    $('#modalActualizar').modal('show');
}

function cerrarModal(id) {
    $('#'+id).modal('hide');
}

//mostrar modal de agregar autores
function agregarautor(idt, idtp, nma) {
        $("#ocultarautores").css("display", "none");
        $("#table-view-authors").css('display','none');
        $("#idt").val(idt);
        $("#id_modal").val(idt);
        $("#idtp").val(idtp);
        $("#nummaxautores").val(nma);
        $("#caso").val('agregarautor');
        $("#ta").css('display','none');
        $("#mostrarta").removeAttr("style");
        $("#mostrarta").css('cursor','pointer'); 
        $("#correo_autor").val("");
        $("#primer_nombre").val("");
        $("#primer_apellido").val("");
        $("#identificacion").val("");
        $("#rd_ap_no").prop("checked", true);
        $("#rd_ap_si").prop("checked", false);

        $('#modal-agregarautores').modal('show');
}

function cambiar_documento(id){
    $('#modal-cambiardocumento').modal('show');
    $("#id_cambiar_documento").val(id);
}

function horario_presentacion(){
    $('#modal-asignarhorario').modal('show');
}


/*autocompletar usuarios en subir trabajos*/

function autocompletarusuariost(valor, fila){ 
        $("#primer_nombre"+fila).val("");
        $("#primer_apellido"+fila).val("");
        var caso = 'completarcorreo';
        $.post("./form/gestion_trabajos/plantillas/funciones.php", {caso:caso, correo:valor}, function (resp) {
                 var json = JSON.parse(resp);
                 var element = $("#correo_autor"+fila);
                element.autocomplete({
                    minLength: 1,
                    delay: 100,
                    source: json
                });                                             
                element.focusout(function(){
                    var caso = 'autocompletarcorreo';
                    $.post("./form/gestion_trabajos/plantillas/funciones.php", {caso:caso,correo:$("#correo_autor"+fila).val()}, function (resp) { 
                               var json = JSON.parse(resp);
                               if(typeof(json['segundo_nombre'+fila]) == 'undefined'){
                                   json['segundo_nombre'+fila] = "";
                               }
                                if(typeof(json['segundo_apellido'+fila]) == 'undefined'){
                                   json['segundo_apellido'+fila] = "";
                               }
                               $("#primer_nombre"+fila).val(json['primer_nombre']+' '+json['segundo_nombre']);
                               $("#primer_apellido"+fila).val(json['primer_apellido']+' '+json['segundo_apellido']);
                    }); 
                });
        });
    }
/*autocompletar usuarios en trabajos subidos*/

function autocompletarusuario(valor){ 
        $("#primer_nombre").val("");
        $("#primer_apellido").val("");
        var caso = 'completarcorreo1';
        $.post("./form/gestion_trabajos/plantillas/funciones.php", {caso:caso, correo:valor}, function (resp) {       
    //            console.log(resp);
                 var json = JSON.parse(resp);
                 var element = $("#correo_autor");
                element.autocomplete({
                    minLength: 1,
                    delay: 100, 
                    source: json

                });                                                                 
                element.focusout(function(){
                    var caso = 'autocompletarcorreo1';
                    $.post("./form/gestion_trabajos/plantillas/funciones.php", {caso:caso,correo:$("#correo_autor").val()}, function (resp) { 
    //                             console.log(resp);
                               var json = JSON.parse(resp);
                               if(typeof(json['segundo_nombre']) == 'undefined'){
                                   json['segundo_nombre'] = "";
                               }
                                if(typeof(json['segundo_apellido']) == 'undefined'){
                                   json['segundo_apellido'] = "";
                               }
                               $("#primer_nombre").val(json['primer_nombre']+' '+json['segundo_nombre']);
                               $("#primer_apellido").val(json['primer_apellido']+' '+json['segundo_apellido']);
                               $("#identificacion").val(json['identificacion']);
                    }); 
                });
        });
    }

/*
 * 
 * TRABAJOS SUBIDOS
 * 
 */

/*
$("#trabajos_subidos").click(function (){
    $.post("./form/gestion_trabajos/form_trabajos_subidos.php", {}, function (resp) {     
       //console.log(resp);
       $('#contenedor').html("");
       retorno(resp);
       b_func('tbl_trabajos_subidos');
    });  
});
*/


/*
 * 
 * ACEPTAR O RECHAZAR AUTORIAS
 * 
 */

function verificarautorias(){
    $.post("./includes/fnc_div.php", {funcion:'divcautorias'}, function (resp) { 
        //console.log(resp);
        if(resp == ""){
            $("#mensajeautoria").removeAttr("style");
        }
    });
}
$("#aceptar_autorias").click( function (){
    $.post("./form/gestion_trabajos/form_aceptar_autorias.php", {}, function (resp) {     
       //console.log(resp);
       $('#contenedor').html("");
       retorno(resp);
        incluirdiv('divcautorias');
        //verificamos si hay autorias pendientes
        verificarautorias();
    }); 
});

function aceptara(idusuariotrabajo){
    if(confirm('¿Usted aceptarà la autoria de este trabajo?'))
	{
            var caso = 'aautoria';
                $.post("./includes/querys.php?caso="+caso, {idusuariotrabajo:idusuariotrabajo}, function (resp) {  
           //         alert(resp)
                  //console.log(resp); 
                  if(resp ==1){
                      alert('Autorìa de trabajo ACEPTADA...!!!');
                      $.post("./form/gestion_trabajos/form_aceptar_autorias.php", {}, function (resp) {     
                           //console.log(resp);
                           $('#contenedor').html("");
                           retorno(resp);
                           incluirdiv('divcautorias');
                           //verificamos si hay autorias pendientes
                           verificarautorias();
                        }); 
                  }else{
                      alert('Error, ha ocurrido un problema, inténtelo nuevamente.');   
                  }   
               });
	}
    
}
function rechazara(idusuariotrabajo){
    if(confirm('¿Usted recharà la autorìa de este trabajo?'))
	{
                var caso = 'rautoria';
                 $.post("./includes/querys.php?caso="+caso, {idusuariotrabajo:idusuariotrabajo}, function (resp) {     
                   //console.log(resp); 
                   if(resp ==1){
                       alert('Autorìa de trabajo RECHAZADA...!!!');
                       $.post("./form/gestion_trabajos/form_aceptar_autorias.php", {}, function (resp) {     
                            //console.log(resp);
                            $('#contenedor').html("");
                            retorno(resp);
                            incluirdiv('divcautorias');
                            //verificamos si hay autorias pendientes
                            verificarautorias();
                         }); 
                   }else{
                       alert('Error, ha ocurrido un problema, inténtelo nuevamente.');     
                   }
                });
        }        
}


/*
 * AGREGAR AUTORES MODAL 
 * 2
 */

function ocultarta(){
    $("#table-view-authors").css('display','none');
    $("#mostrarta").removeAttr("style");
    $("#mostrarta").css('cursor', 'pointer');
    $("#ocultarautores").css("display", "none");
}
function mostrarautores(){
    var id = $("#id_modal").val();
    var caso = 'mostrar_autores';
     $.ajax({
           url:"./includes/querys.php?caso="+caso,
           type: "POST",
           data: {id:id},
           success: function (resp) {

               console.log(resp);
               $("#table-view-authors").css("display", "block");
               $("#cautores tbody").html("");
               $("#cautores").append(resp);        
               $("#mostrarta").css('display', 'none');
               $("#ocultarautores").css("display", "block");
           }
       });
}
function guardarautores() {  
    console.log("Guardar autores");
    var caso = $("#caso_autores").val();
    if($("#correo_autor").val() != "" || $("#primer_nombre").val() != "" || $("#primer_apellido").val() != "" || $("#identificacion").val() != ""){
        $.ajax({
           url: "./includes/querys.php?caso="+caso,
           type: "POST",
           data: $('#form_agregar_autores').serialize(),
           success: function (resp) { 
            console.log(resp);
               //if(resp == 1){
                   alert('Autor agregado exitosamente');
                   $('#correo_autor').val("");
                   $('#primer_nombre').val("");
                   $('#primer_apellido').val("");
                   $('#identificacion').val("");
                   $('#rd_ap_no').prop("checked",true);
                    $('#rd_ap_si').prop("checked", false); 
                    cerrarModal('modal-agregarautores');
                    mostrarautores();
                    
              // }else{
                //   alert('Ha ocurrido un ERROR mientras se ingresaba el autor, Inténtelo nuevamente y verifique la información que esta ingresando.!!!');
                //   mostrarautores();
               //}  
           }
       });
    } else {
        alert("Debe llenar los campos requeridos");
    }    
}

function guardarexpositores(){
     var caso = "guardarexpositores";
     var num_a = $("#totalautores").val();
     var idt = $("#idt").val();
     var exposelect  = '';     
        for (var i = 0; i<num_a; i++){
            if($("#expo"+i).is(':checked')){
                exposelect += $("#expo"+i).val()+',';
            }
        }
     var idexpos = exposelect.substring(0,exposelect.length - 1);     
     
     /*autor de corespondencia*/

     var autor_co = '';
     for (var i = 0; i<num_a; i++){
            if($("#autor_corres"+i).is(':checked')){
                autor_co += $("#autor_corres"+i).val()+',';
            }
        }
     var id_autor_co = autor_co.substring(0,autor_co.length - 1);  
     if(exposelect != "" && id_autor_co != ""){
         $.ajax({
           url: "./includes/querys.php?caso="+caso,
           type: "POST",
           data: {idexpos:idexpos,id_autor_co:id_autor_co,idt:idt},
           success: function (resp) { 
               //console.log(resp);
               if(resp == 1){
                   alert('Expositores y Autores de correspondencia actualizados exitosamente.!!!');                  
                   mostrarautores();
               }else{
                   alert('Ha ocurrido un ERROR mientras se actualizaban los expositores y autores de correspondencia, Inténtelo nuevamente!!!')
               }  
           }
        });
     }else{
         alert('Seleccione al menos un expositor y un autor de correspondencia de su trabajo de investigación');
     }
}
//eliminar trabajo
function eliminatrabajo(idt){
     if(confirm('¿Desea realmente eliminar este trabajo?'))
	{
            $("#idt").val(idt);    ;
            $("#caso").val('eliminartrabajo');
            $.ajax({
                   url: "./includes/querys.php?caso=eliminartrabajo",
                   type: "POST",
                   data: {idt:idt},
                   success: function (resp) {
                       //alert(resp)
                       //console.log(resp);
                       if(resp == 1){
                           alert('Trabajo eliminado exitosamente.!!!');                  
                           //recargamos la table de trabajos subidos
                            $.post("./form/gestion_trabajos/form_trabajos_subidos.php", {}, function (resp) {     
                                //console.log(resp);
                                $('#contenedor').html("");
                                retorno(resp);
                                b_func('tbl_trabajos_subidos');
                             }); 
                       }else{
                           alert('Ha ocurrido un ERROR mientras se eliminaba el trabajo, Inténtelo nuevamente!!!')
                       }  
                   }
                });
        }
}

//guardar horario
function guardarhorario(){
    var caso = $("#caso").val();
    if($("#rd_si").is(':checked') || $("#rd_no").is(':checked')){
        $.ajax({
        url: "./includes/querys.php?caso="+caso,
        type: "POST",
        data: $('#form_trabajos_subidos').serialize(),
        success: function (resp) { 
            //alert(resp)
            //console.log(resp);
            if(resp == 1){
                alert('Horario guardado exitosamente.!!!');
                $('#modal-dialog4').modal('hide');     //oculta el modal
                $('body').removeClass('modal-open');  //quita la clase que mantiene activo el modal
                $('.modal-backdrop').remove();        //habilita en formulario contenedor  
                $('#form_trabajos_subidos').trigger("reset");//limpiar formulario
                //recargamos la table de trabajos subidos
                 $.post("./form/gestion_trabajos/form_trabajos_subidos.php", {}, function (resp) {     
                     //console.log(resp);
                     $('#contenedor').html("");
                     retorno(resp);
                     b_func('tbl_trabajos_subidos');
                  }); 
            }else if($("#rd_no").is(':checked') ||  resp == 0){
                alert('El horario sugerido no fue guardado!!!')
            }  
        }
     });
    }else{
        alert('Para continuar, acepte o rechace el horario sugerido, por favor.!!!');
    }
}

/*eliminar autor de trabajo*/

function eliminarautortrabajo(idusuario, idtrabajo){  
   if(confirm('¿Desea realmente eliminar este Autor?'))
	{            
            $.ajax({
                   url: "./includes/querys.php?caso=eliminarautortrabajo",
                   type: "POST",
                   data: {idusuario:idusuario,idtrabajo:idtrabajo},
                   success: function (resp) { 
                       if(resp == 1){
                           alert('Autor eliminado exitosamente.!!!'); 
                            mostrarautores(); 
                       }else{
                           alert('Ha ocurrido un ERROR mientras se eliminaba el autor, Inténtelo nuevamente!!!')
                       }  
                   }
                });
        }
}

function elimina_trabajo(id) {
    
    $.ajax({
        url: "./includes/querys.php?caso=eliminar_trabajo",
        type: "POST",
        data: {id:id},
        success: function (res) {
            //console.log(res);
            alert("Registro " + id + " eliminado");
        }
    });
}

function ver_revisiones(id) {
    $.ajax({
        url: "./includes/fnc_tbl.php?function=ver_revisiones",
        type: "POST",
        data: {funcion:"ver_revisiones",id:id},
        success: function (resp) {
            //console.log(resp);
            $("#ver_revisiones_tbl").html(resp);
        }
    });
    $('#modal-ver-revisiones').modal('show');
}

function guardardocumento() {
    //$('#modal-cambiardocumento').modal('show');
    var formData = new FormData($("#form_cambiar_documentos")[0]);
    $.ajax({
        url: "./includes/querys.php?caso=cambiar_documento",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (resp) {
            console.log(resp);
            alert("Documento cambiado");
        }
    });
}

function descargar_original(id) {
    window.location.href = "./includes/querys.php?caso=descargardocumento&id=" + id;
}

function asignar_horario(){
    console.log('hoa')
    $.ajax({
        url: "./includes/querys.php?function=horario_presentacion",
        type: "POST",
        data: {funcion:"horario_presentacion"},
        success: function (resp) {
            alert('Horario agendado con éxito');
            $('#modal-asignarhorario').modal('hide');
        }
    });
    
}

function eliminarcoautor(id) {
    
    $.ajax({
        url: "./includes/querys.php?caso=eliminar_coautor_trabajo",
        type: "POST",
        data: {id:id},
        success: function (res) {
            alert("Autor " + id + " eliminado");
        }
    });
}
