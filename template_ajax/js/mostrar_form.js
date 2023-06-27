
$(document).ready(function () {

    var menuItems = {
        sol_revision: "./form/gestion_roles/plantillas/gestion_roles.php",
        congresos_activos: "",
        crear_congreso: "./form/gestion_congresos/plantillas/crear_congreso.php",
        gestionar_linea_investigacion: "./form/gestion_congresos/plantillas/gestion_lineas_investigacion.php",
        gestionar_tematicas: "./form/gestion_congresos/plantillas/gestion_tematicas_investigacion.php",
        asociar_administrador_congreso: "./form/gestion_congresos/plantillas/asociar_administrador_congreso.php",
        fcrear_tour: "./form/gestion_mantenimiento_factura/plantillas/form_ingresar_tour.php",
        inscripcion_kit: "./form/gestion_mantenimiento_factura/plantillas/form_inscripcion_kit.php",
        c_certificados: "./form/gestion_certificados_php/plantillas/c_certificados.php",
        generar_certificados: "./form/gestion_certificados_php/plantillas/genera_certificados.php",
        listados_actividad: "./form/gestion_listas_rotulos/plantillas/form_generar_listas_actividad.php",
        rotulos_actividad: "./form/gestion_listas_rotulos/plantillas/form_generar_rotulos_actividad.php",
        crear_espacio: "./form/gestion_programa/plantillas/form_espacios.php",
        crear_actividad: "./form/gestion_programa/plantillas/form_actividades.php",
        distribucion_trabajos_sp: "./form/gestion_programa/plantillas/form_distribucion_trabajos.php",
        mover_trabajos_sp: "./form/gestion_programa/plantillas/form_mover_trabajos.php",
        emitir_programa: "./form/gestion_programa/plantillas/form_emitir_programa.php",
        solicitudes: "./form/gestion_voluntario/plantillas/form_voluntarios_solicitudes.php",
        inscribir_voluntario: "./form/gestion_voluntario/plantillas/form_inscribir_voluntario.php",
        validar_voluntariado: "./form/gestion_voluntario/plantillas/form_validar_voluntario.php",
        crear_actividad_vol: "./form/gestion_voluntario/plantillas/form_crear_actividades_voluntarios.php",
        actividades_voluntario: "./form/gestion_voluntario/plantillas/form_crear_actividades_voluntarios.php",
        asistencia_voluntario: "./form/voluntarios/plantillas/form_asistencia_persona.php",
        validar_pres_autores: "./form/voluntarios/plantillas/form_validar_presentacion_autores.php",
        pagos_voluntarios: "./form/voluntarios/plantillas/form_validar_pagos.php",
        subir_resumen: "./form/gestion_trabajos/plantillas/form_subir_resumen.php",
        resumenes_subidos: "./form/gestion_trabajos/plantillas/form_resumenes_subidos.php",
        subir_trabajo: "./form/gestion_trabajos/plantillas/form_subir_trabajo.php",
        trabajos_subidos: "./form/gestion_trabajos/plantillas/form_trabajos_subidos.php",
        enviar_rechazar_trabajo_eg: "./form/gestion_editor_gestor/plantillas/form_trabajos_revision.php",
        gtrabajos_ep: "./form/gestion_editor_principal/plantillas/gestion_trabajos_ep.php",
        dictaminar_resultado_trabajos: "./form/gestion_editor_principal/plantillas/form_dictaminar_trabajos_ep.php",
        gpremios_ep: "./form/gestion_editor_principal/plantillas/form_gestion_premios_ep.php",
        crear_proceso_dictaminacion: "./form/gestion_editor_principal/plantillas/form_crear_proceso_dictaminacion.php",
        dictaminar_trabajos_ep: "./form/gestion_editor_principal/plantillas/form_dictaminar_trabajos_ep.php",
        elegir_proceso_dictaminacion: "./form/gestion_editor_principal/plantillas/form_elegir_proceso_dictaminacion.php",
        gtrabajos_eps: "./form/gestion_editor_principal_seccion/plantillas/gestion_trabajos_eps.php",
        gtrabajos_ess:"./form/gestion_editor_secundario_seccion/plantillas/gestion_trabajos_ess.php",
        dictaminar_resultado_eps: "./form/gestion_editor_principal_seccion/plantillas/form_dictaminar_trabajos_eps.php",
        facturar_inscripcion: "./form/facturacion/plantillas/form_facturar_inscripcion.php",
        gestionar_facturas: "./form/facturacion/plantillas/form_gestionar_facturas.php",
        crear_formulario: "./form/gestion_formularios_revisiones/plantillas/gestion_formulario_revision.php",
        asociar_formulario: "./form/gestion_formularios_revisiones/plantillas/asoc_form_tematica.php",
        modificar_formulario: "./form/gestion_formularios_revisiones/plantillas/modificar_form_revision.php"

    };
    
  $(".menu-link").click(function() {
    var id = $(this).attr("id");
    $("#content").load(menuItems[id]);
  });
    
});


//--------------------------------------------
//  CÓDIGO DE MOSTRAR FORMS LINKS ANTERIOR:
//---------------------------------------------
/*
//INICIO Mostrar formulario de Roles 

 $("#sol_revision").click(function () {
        $.post("./form/gestion_roles/plantillas/gestion_roles.php", {cache:false,async:false}, function (resp) {
                    $('#content').html("");
                    retorno(resp);
                });
});

 //FIN Mostrar formulario de Roles

 //INICIO MOSTRAS MÓDULOS Y SUBMODULOS CONGRESO
 $("#congresos_activos").click(function (){
    //$.post("./form/gestion_roles/plantillas/gestion_roles.php", {}, 
    //function (resp) {     
    //    $('#content').html("");
    //    retorno(resp);
    // });  

 });

 

 $("#crear_congreso").click(function (){
    $.post("./form/gestion_congresos/plantillas/crear_congreso.php", {cache:false,async:false}, function (resp) {     
        $('#content').html("");
        retorno(resp);
     });
 });



 $("#gestionar_linea_investigacion").click(function (){
    $.post("./form/gestion_congresos/plantillas/gestion_lineas_investigacion.php", {cache:false,async:false}, function (resp) {     
        $('#content').html("");
        retorno(resp);
     });  

 });


 $("#gestionar_tematicas").click(function (){
    $.post("./form/gestion_congresos/plantillas/gestion_tematicas_investigacion.php", {cache:false,async:false}, function (resp) {     
        $('#content').html("");
        retorno(resp);
     });  

 });

 $("#asociar_administrador_congreso").click(function (){
    $.post("./form/gestion_congresos/plantillas/asociar_administrador_congreso.php", {cache:false,async:false}, function (resp) {     
        $('#content').html("");
        retorno(resp);
     });  

 });

 $("#fcrear_tour").click(function (){
    $.post("./form/gestion_mantenimiento_factura/plantillas/form_ingresar_tour.php", {cache:false,async:false}, function (resp) {     
        $('#content').html("");
        retorno(resp);
     });  

 });


 $("#inscripcion_kit").click(function (){
    $.post("./form/gestion_mantenimiento_factura/plantillas/form_inscripcion_kit.php", {cache:false,async:false}, function (resp) {     
        $('#content').html("");
        retorno(resp);
     });  

 });
//INICIO MOSTRAS MÓDULOS Y SUBMODULOS CONGRESO



//INICIO Mostrar formulario de CERTIFICADOS
$("#c_certificados").click(function (){
    $.post("./form/gestion_certificados_php/plantillas/c_certificados.php", {cache:false,async:false}, function (resp) {     
        $('#content').html("");
        retorno(resp);
     });  

 });


 $("#generar_certificados").click(function (){
    $.post("./form/gestion_certificados_php/plantillas/genera_certificados.php", {cache:false,async:false}, function (resp) {     
        $('#content').html("");
        retorno(resp);
     });  

 });
 //FIN Mostrar formulario de CERTIFICADOS




 //INICIO Mostrar formulario de LISTAS Y ROTULOS
$("#listados_actividad").click(function (){
    $.post("./form/gestion_listas_rotulos/plantillas/form_generar_listas_actividad.php", {cache:false,async:false}, function (resp) {     
        $('#content').html("");
        retorno(resp);
     });  

 });


 $("#rotulos_actividad").click(function (){
    $.post("./form/gestion_listas_rotulos/plantillas/form_generar_rotulos_actividad.php", {cache:false,async:false}, function (resp) {     
        $('#content').html("");
        retorno(resp);
     });  

 });
 //FIN Mostrar formulario de LISTAS Y ROTULOS


  //INICIO Mostrar formulario de LISTAS Y ROTULOS
$("#listados_actividad").click(function (){
    $.post("./form/gestion_listas_rotulos/plantillas/form_generar_listas_actividad.php", {cache:false,async:false}, function (resp) {     
        $('#content').html("");
        retorno(resp);
     });  

 });


 $("#rotulos_actividad").click(function (){
    $.post("./form/gestion_listas_rotulos/plantillas/form_generar_rotulos_actividad.php", {cache:false,async:false}, function (resp) {     
        $('#content').html("");
        retorno(resp);
     });  

 });
 //FIN Mostrar formulario de LISTAS Y ROTULOS



   //INICIO Mostrar formulario de ESTADÍSTICAS

 //FIN Mostrar formulario de ESTADÍSTICAS



    //INICIO Mostrar formulario de GESTIÓN DEL PROGRAMA


    $("#crear_espacio").click(function (){
        $.post("./form/gestion_programa/plantillas/form_espacios.php", {cache:false,async:false}, function (resp) {     
            $('#content').html("");
            retorno(resp);
         });  
    
     });


     
 $("#crear_actividad").click(function (){
    $.post("./form/gestion_programa/plantillas/form_actividades.php", {cache:false,async:false}, function (resp) {     
        $('#content').html("");
        retorno(resp);
     });  

 });


 
 $("#distribucion_trabajos_sp").click(function (){
    $.post("./form/gestion_programa/plantillas/form_distribucion_trabajos.php", {cache:false,async:false}, function (resp) {     
        $('#content').html("");
        retorno(resp);
     });  

 });


 $("#mover_trabajos_sp").click(function (){
    $.post("./form/gestion_programa/plantillas/form_mover_trabajos.php", {cache:false,async:false}, function (resp) {     
        $('#content').html("");
        retorno(resp);
     });  

 });




 $("#emitir_programa").click(function (){
    $.post("./form/gestion_programa/plantillas/form_emitir_programa.php", {cache:false,async:false}, function (resp) {     
        $('#content').html("");
        retorno(resp);
     });  

 });


 //FIN Mostrar formulario de GESTIÓN DEL PROGRAMA





    //INICIO Mostrar formulario de GESTIÓN DE VOLUNTARIOS
    $("#solicitudes").click(function (){
        $.post("./form/gestion_voluntario/plantillas/form_voluntarios_solicitudes.php", {cache:false,async:false}, function (resp) {     
            $('#content').html("");
            retorno(resp);
         });  
    
     });

     $("#inscribir_voluntario").click(function (){
        $.post("./form/gestion_voluntario/plantillas/form_inscribir_voluntario.php", {cache:false,async:false}, function (resp) {     
            $('#content').html("");
            retorno(resp);
         });  
    
     });

     $("#validar_voluntariado").click(function (){
        $.post("./form/gestion_voluntario/plantillas/form_validar_voluntario.php", {cache:false,async:false}, function (resp) {     
            $('#content').html("");
            retorno(resp);
         });  
    
     });

    // $("#mensajes_voluntarios").click(function (){
    //    $.post("./form/gestion_programa/plantillas/form_emitir_programa.php", {cache:false,async:false}, function (resp) {     
    //        $('#content').html("");
    //        retorno(resp);
    //     });  
    //
     //});

     $("#crear_actividad_vol").click(function (){
        $.post("./form/gestion_voluntario/plantillas/form_crear_actividades_voluntarios.php", {cache:false,async:false}, function (resp) {     
            $('#content').html("");
            retorno(resp);
         });  
    
     });


 //FIN Mostrar formulario de GESTIÓN DE VOLUNTARIOS



 //INICIO Mostrar formulario de  VOLUNTARIOS
 $("#actividades_voluntario").click(function (){
    $.post("./form/gestion_voluntario/plantillas/form_crear_actividades_voluntarios.php", {cache:false,async:false}, function (resp) {     
        $('#content').html("");
        retorno(resp);
     });  

 });

 
 //$("#mensajes_voluntario").click(function (){
//    $.post("./form/gestion_voluntario/plantillas/form_crear_actividades_voluntarios.php", {cache:false,async:false}, function (resp) //{     
//        $('#content').html("");
//        retorno(resp);
//     });  
 //});

 $("#asistencia_voluntario").click(function (){
    $.post("./form/voluntarios/plantillas/form_asistencia_persona.php", {cache:false,async:false}, function (resp) {     
        $('#content').html("");
        retorno(resp);
     });  

 });

 $("#validar_pres_autores").click(function (){
    $.post("./form/voluntarios/plantillas/form_validar_presentacion_autores.php", {cache:false,async:false}, function (resp) {     
        $('#content').html("");
        retorno(resp);
     });  

 });

 $("#pagos_voluntarios").click(function (){
    $.post("./form/voluntarios/plantillas/form_validar_pagos.php", {cache:false,async:false}, function (resp) {     
        $('#content').html("");
        retorno(resp);
     });  

 });


  //FIN Mostrar formulario de  VOLUNTARIOS


  //INICIO Mostrar formulario de  GSTIÓN DE TRABAJOS

  $("#subir_trabajo").click(function (){
    $.post("./form/gestion_trabajos/plantillas/form_subir_trabajo.php", {cache:false,async:false}, function (resp) {     
        $('#content').html("");
        retorno(resp);
     });  

 });

 $("#trabajos_subidos").click(function (){
    $.post("./form/gestion_trabajos/plantillas/form_trabajos_subidos.php", {cache:false,async:false}, function (resp) {     
        $('#content').html("");
        retorno(resp);
     });  

 });


 //$("#aceptar_autorias").click(function (){
//    $.post("./form/voluntarios/plantillas/form_validar_pagos.php", {cache:false,async:false}, function (resp) {     
//        $('#content').html("");
//        retorno(resp);
//     });  
 //});

    //FIN Mostrar formulario de  GSTIÓN DE TRABAJOS




  //INICIO Mostrar formulario de  GSTIÓN DE EDITOR GESTOR
  $("#enviar_rechazar_trabajo_eg").click(function (){
    $.post("./form/gestion_editor_gestor/plantillas/form_trabajos_revision.php", {cache:false,async:false}, function (resp) {     
        $('#content').html("");
        retorno(resp);
     });  

 });
    //FIN Mostrar formulario de  GSTIÓN DE EDITOR GESTOR



      //INICIO Mostrar formulario de EDITORES
      $("#gtrabajos_ep").click(function (){
        $.post("./form/gestion_editor_principal/plantillas/gestion_trabajos_ep.php", {cache:false,async:false}, function (resp) {     
            $('#content').html("");
            retorno(resp);
         });  
    
     });

     $("#dictaminar_resultado_trabajos").click(function (){
        $.post("./form/gestion_editor_principal/plantillas/form_dictaminar_trabajos_ep.php", {cache:false,async:false}, function (resp) {     
            $('#content').html("");
            retorno(resp);
         });  
    
     });

     $("#gpremios_ep").click(function (){
        $.post("./form/gestion_editor_principal/plantillas/form_gestion_premios_ep.php", {cache:false,async:false}, function (resp) {     
            $('#content').html("");
            retorno(resp);
         });  
    
     });

     $("#gtrabajos_eps").click(function (){
        $.post("./form/gestion_editor_principal_seccion/plantillas/gestion_trabajos_eps.php", {cache:false,async:false}, function (resp) {     
            $('#content').html("");
            retorno(resp);
         });  
    
     });

     $("#dictaminar_resultado_eps").click(function (){
        $.post("./form/gestion_editor_principal_seccion/plantillas/form_dictaminar_trabajos_eps.php", {cache:false,async:false}, function (resp) {     
            $('#content').html("");
            retorno(resp);
         });  
    
     });

     $("#gtrabajos_ess").click(function (){
        $.post("./form/gestion_editor_secundario_seccion/plantillas/gestion_trabajos_ess.php", {cache:false,async:false}, function (resp) {     
            $('#content').html("");
            retorno(resp);
         });  
    
     });


            //FIN Mostrar formulario de EDITORES



                  //INICIO Mostrar formulario de GESTIÓN REVISOR
                  $("#solicitud_revisiones_pendientes_r").click(function (){
                    $.post("./form/gestion_revisiones/plantillas/solicitudes_de_revision.php", {cache:false,async:false}, function (resp) {     
                        $('#content').html("");
                        retorno(resp);
                     });  
                
                 });

                  //FIN Mostrar formulario de GESTIÓN REVISOR


                  //INICIO Mostrar formulario de GESTIÓN ASISTENTE

                  $("#consultar_programa_congreso").click(function (){
                    $.post("./form/gestion_asistente/plantillas/consultar_programa.php", {cache:false,async:false}, function (resp) {     
                        $('#content').html("");
                        retorno(resp);
                     });  
                
                 });

                 //$("#ver_noticias").click(function (){
                //    $.post("./form/gestion_revisiones/plantillas/solicitudes_de_revision.php", {cache:false,async:false}, function (resp) {     
                //        $('#content').html("");
                //        retorno(resp);
                //     });  
                // });


                 $("#crear_itinerario").click(function (){
                    $.post("./form/gestion_asistente/plantillas/form_crear_itinerario.php", {cache:false,async:false}, function (resp) {     
                        $('#content').html("");
                        retorno(resp);
                     });  
                
                 });

                 $("#modificar_itinerario").click(function (){
                    $.post("./form/gestion_asistente/plantillas/form_modificar_itinerario.php", {cache:false,async:false}, function (resp) {     
                        $('#content').html("");
                        retorno(resp);
                     });  
                
                 });

                  //FIN Mostrar formulario de GESTIÓN ASISTENTE


                  //INICIO Mostrar formulario de GESTIÓN REVISIÓN
                  $("#crear_formulario").click(function (){
                    $.post("./form/gestion_formularios_revisiones/plantillas/modificar_form_revision.php", {cache:false,async:false}, function (resp) {     
                        $('#content').html("");
                        retorno(resp);
                     });  
                
                 });

                 $("#asociar_formulario").click(function (){
                    $.post("./form/gestion_formularios_revisiones/plantillas/asoc_form_tematica.php", {cache:false,async:false}, function (resp) {     
                        $('#content').html("");
                        retorno(resp);
                     });  
                
                 });

                 $("#modificar_formulario").click(function (){
                    $.post("./form/gestion_formularios_revisiones/plantillas/modificar_form_revision.php", {cache:false,async:false}, function (resp) {     
                        $('#content').html("");
                        retorno(resp);
                     });  
                
                 });


                  //FIN Mostrar formulario de GESTIÓN REVISIÓN




     function retorno(resp){ 
         $('#content').html(resp);
     }
 */

