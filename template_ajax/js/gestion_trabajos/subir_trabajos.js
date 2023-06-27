$(document).ready(function () {
    $.post("./includes/fnc_select_multiple.php?funcion=tematicas_trabajo", {}, function (resp) {
        $("#tematicas_trabajo").html("");
        $("#tematicas_trabajo").html(resp);
    });
    $.post("./includes/fnc_slc.php?id=ttrabajo", {}, function (resp) {
        $("#ttrabajo").html("");
        $("#ttrabajo").html(resp);
    });
});



function subir_trabajo(){

        var formData = new FormData($("#form_trabajo")[0]);
        console.log(formData)
        var tematicastrabajo = $("#tematicas_trabajo").val();
    
        $.each(tematicastrabajo, function(key, value) {
            formData.append('tematicastrabajo[]', value);
        });

        var caso = $("#caso").val();
 
        if (!$("#form_trabajo").parsley().validate()) {
            alert('Debe llenar los campos requeridos');
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
                console.log(r);
                if(r){
                    if (caso == "crear_trabajo") {
                        alert("Agregado con Exito");
                    } else if (caso == "actualizar_trabajo"){
                        alert("Actualizado con Exito");    
                    }
                    $("#form_trabajo")[0].reset();
                }else{
                    alert("Fallo el server");
                }
            }
		});

    return false;
}


function actualiza_trabajo(id) { 
    $("html, body").scrollTop(0);
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
}

function elimina_trabajo(id) {
    alert("Registro " + id + " eliminado");
    $.ajax({
        url: "./includes/querys.php?caso=eliminar_trabajo",
        type: "POST",
        data: {id:id},
        success: function (res) {
            console.log(res);
    
        }
    });
}

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