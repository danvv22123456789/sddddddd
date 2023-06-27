
function guardar_actividades_voluntarios() {
    var caso = $("#caso").val();
    var formData = new FormData($("#form_actividades_voluntarios")[0]);
    var ruta = "./includes/querys.php?caso=" + caso;

    if (!$("#form_actividades_voluntarios").parsley().validate()) {
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
                if (caso == "guardar_actividades_voluntarios") {
                    alert("Agregado con Exito");
                } else if (caso == "actualizar_actividad_voluntario") {
                    alert("Actualizado con Exito");
                }
                reloadTable();
                $("#form_actividades_voluntarios")[0].reset();
            } else {
                alert("Fallo el server");
            }
        }
    });
}


function modificar_actividad_voluntario(id) {

    var ruta = "./includes/querys.php?caso=get_actividad_voluntario";
    $.ajax({
        url: ruta,
        type: "POST",
        data: {id:id},
        success: function (datos)
        {
            console.log(datos);    
            datos = JSON.parse(datos);
          
            document.getElementById("nombre_actividad").value = datos['nombre_tarea'];
            document.getElementById("desc_actividad").value = datos['descripcion'];
          //  document.getElementById("archio_complementario").value = datos['archivo_complementario'];
            document.getElementById("horas_sumar").value = datos['hora_tarea'];
          document.getElementById("persona_apoyo").value = datos['persona_apoyo'];
          document.getElementById("fecha_actividad_voluntario").value = datos['fecha_tarea'];
          document.getElementById("caso").value = 'actualizar_actividad_voluntario';
          document.getElementById("id").value = id;
        }
    });

}

function eliminar_actividad_voluntario(id){
  var caso = "eliminar_actividad_voluntario"
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
      alert("registro eliminado exitosamente");
      reloadTable();
    })
    .fail(function (jqXHR, textStatus) {
      console.log("Error en la operación: " + textStatus);
     
    });
}