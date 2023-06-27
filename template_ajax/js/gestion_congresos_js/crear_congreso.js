

$(document).ready(function () {
    $.post("./includes/fnc_select_multiple.php?funcion=agregar_roles_congreso", {}, function (resp) {
        $("#agregar_roles_congreso").html("");
        $("#agregar_roles_congreso").html(resp);

    });

    $.post("./includes/fnc_slc.php?id=pais", {}, function (resp) {
		
        $("#pais").html("");
        $("#pais").html(resp);

    });

});

function get_estado_congreso(estado,id) {
    if (estado == 1) {
        $("#eliminar_congreso" + id).hide();
        $("#activar_congreso" + id).hide();
    } else if (estado == 2) {
        $("#cerrar_congreso" + id).hide();
        $("#inactivar_congreso" + id).hide();
    } else if (estado == 3) {
        $("#eliminar_congreso" + id).hide();
        $("#cerrar_congreso" + id).hide();
        $("#inactivar_congreso" + id).hide();
        $("#actualizar_congreso" + id).hide();
    }
    console.log("changed: "+estado+" id:"+id);
}

$("form").submit(function (e) {
    e.preventDefault();
    var caso = $("#caso").val();
    var form = $("#form_congresos");
    
    // Validar el formulario
    if (form.parsley().validate()) {
        var formData = new FormData(form[0]);
        var rolesSeleccionados = $("#agregar_roles_congreso").val();
        $.each(rolesSeleccionados, function(key, value) {
            formData.append('rolesSeleccionados[]', value);
        });
        var ruta = "./includes/querys.php?caso=" + caso;
        $.ajax({
            url: ruta,
            type: "POST",
            data: formData,
            roles: rolesSeleccionados,
            contentType: false,
            processData: false,
            success: function(res) {
                console.log(res);
                if (res) {
                    if (caso == "crear_congreso") {
                        alert("Agregado con Éxito");
                    } else if (caso == "actualizar_congreso") {
                        alert("Actualizado con Éxito");    
                    }
                    reloadTable();
                    $("#form_congresos")[0].reset();
                } else {
                    alert("Fallo el servidor");
                }
            }
        });
    } else {
        alert("Por favor, complete todos los campos requeridos.");
    }
});


function actualiza_congreso(id) {

    $("html, body").scrollTop(0);
    var caso = 'get_congreso';
    $.ajax({
        method: "POST",
        url: "./includes/querys.php?caso="+caso,
        data: {
            id: id
        },
        success: function (datos) {
            var data = JSON.parse(datos);
            data = data[0];

            $("#nombre_congreso").val(data["nombre_congreso"]);
            $("#siglas").val(data["siglas"]);

            $("#descripcion_congreso").val(data["descripcion_congreso"]);
            $("#lugar").val(data["lugar"]);
            $("#coordenadas").val(data["coordenadas"]);
            $("#lema").val(data["lema"]);
            $("#pais").val(data["id_pais_fk"]);
            $("#numero_cai").val(data["numero_cai"]);
            $("#anio").val(data["anio"]);
            $("#fecha_inicio").val(data["fecha_inicio"]);
            $("#fecha_finalizacion").val(data["fecha_finalizacion"]);
            $("#fecha_i_recepcion").val(data["fecha_i_recepcion"]);
            $("#fecha_f_recepcion").val(data["fecha_f_recepcion"]);
            $("#fecha_i_revision").val(data["fecha_i_revision"]);
            $("#fecha_f_revision").val(data["fecha_f_revision"]);
            $("#fecha_p_programa").val(data["fecha_p_programa"]);
            $("#fecha_cambio_costo_inscripcion").val(data["fecha_cambio_costo_inscripcion"]);

            $("#logo_congreso_ant").val(data["logo_congreso"]);
            $("#nombre_archivo").text(data["logo_congreso"]);
            
            $("#id").val(data["id_congreso_pk"]);
            $("#caso").val("actualizar_congreso");
        }
    });
    var caso = 'get_congreso_roles';
    $.ajax({
        method: "POST",
        url: "./includes/querys.php?caso="+caso,
        data: {
            id: id
        },
        success: function (datos) {
            $("#agregar_roles_congreso option").prop("selected", false);

            var data = JSON.parse(datos);
            var select = document.getElementById("agregar_roles_congreso");
            for (var i = 0; i < data.length; i++) {
                var option = select.querySelector("#rolid" + data[i].id_rol_fk);
                if (option) {
                    option.selected = true;
                }
            }
        }
    });
    
}

function elimina_congreso(id) {
    alert("Registro " + id + " eliminado");
    $.ajax({
        url: "./includes/querys.php?caso=eliminar_congreso",
        type: "POST",
        data: {id:id},
        success: function (res) {
            console.log(res);
            reloadTable();
        }
    });
    
}

function activar_congreso(id) {
    alert("Se activó el congreso");
    $.ajax({
        url: "./includes/querys.php?caso=activar_congreso",
        type: "POST",
        data: {id:id},
        success: function (res) {
            console.log(res);
            reloadTable();
        }
    });
}
function inactivar_congreso(id) {
    alert("Se inactivó el congreso");
    $.ajax({
        url: "./includes/querys.php?caso=inactivar_congreso",
        type: "POST",
        data: {id:id},
        success: function (res) {
            console.log(res);
            reloadTable();
        }
    });
}
function cerrar_congreso(id) {
    alert("Se cerró el congreso");
    $.ajax({
        url: "./includes/querys.php?caso=cerrar_congreso",
        type: "POST",
        data: {id:id},
        success: function (res) {
            console.log(res);
            reloadTable();
        }
    });
}