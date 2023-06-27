//espacios
$.post("./includes/fnc_slc.php?id=tselectespacios",{}, function (resp){
    $("#espacio_actividad").html(resp); 
});

//actividad
$.post("./includes/fnc_slc.php?id=tselectactividad",{}, function (resp){
    $("#tactividad").html(resp); 
});

//tematica
$.post("./includes/fnc_slc.php?id=tselecttematica",{}, function (resp){
    $("#tematicas_trabajo").html(resp); 
});

//responsable
$.post("./includes/fnc_slc.php?id=slc_persona",{}, function (resp){
    $("#responsable").html(resp); 
});


function guardar_actividad() {
    var caso = $("#caso").val();
    var formData = new FormData($("#form_actividades")[0]);
    var ruta = "./includes/querys.php?caso=" + caso;

    if (!$("#form_actividades").parsley().validate()) {
        alert('Debe llenar los campos requeridos');
        return false;
    }

    $.ajax({
        url: ruta,
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (res) {
            console.log(res);
            if (res) {
                if (caso == "insertar_actividad") {
                    alert("Agregado con Exito");
                } else if (caso == "actualizar_actividad") {
                    alert("Actualizado con Exito");
                }
                reloadTable();
                $("#form_actividades")[0].reset();
            } else {
                alert("Fallo el server");
            }
        }
    });
}


function modificar_actividad(id) {

    var ruta = "./includes/querys.php?caso=get_actividad";
    $.ajax({
        url: ruta,
        type: "POST",
        data: {id:id},
        success: function (datos)
        {
            console.log(datos);    
            datos = JSON.parse(datos);
          
            document.getElementById("nombre_actividad").value = datos['nombre_actividad'];
            document.getElementById("responsable").value = datos['responsable'];
            document.getElementById("fecha").value = datos['fecha_actividad'];
            document.getElementById("hora_inicio").value = datos['hora_inicio'];
            document.getElementById("hora_fin").value = datos['hora_final'];
            document.getElementById("comentarios").value = datos['comentarios'];
            document.getElementById("espacio_actividad").value = datos['id_espacio_pk'];
            document.getElementById("tactividad").value = datos['id_tipo_actividad_fk'];
            document.getElementById("tematicas_trabajo").value = datos['nombre_tematica'];
            document.getElementById("caso").value = 'actualizar_actividad';
            document.getElementById("id").value = id;
        }
    });

}

function eliminar_actividad(id){
  var caso = "eliminar_actividad"
  $.ajax({
    method: "POST",
    url: "./includes/querys.php?caso=" + caso,
    data: {
      id: id,
      caso: caso,
    },
  })
    .done(function (response) {
      console.log(response); // Aquí se maneja la respuesta del servidor
      if (response == "1") {
        alert("registro eliminado exitosamente");
      }
      reloadTable();
    })
    .fail(function (jqXHR, textStatus) {
      console.log("Error en la operación: " + textStatus);
    });
}