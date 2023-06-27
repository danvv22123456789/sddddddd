function emitir_programa() {
    var caso = $("#caso").val();
    var formData = new FormData($("#form_emitir_programa")[0]);
    var ruta = "./includes/querys.php?caso=" + caso;

    if (!$("#form_emitir_programa").parsley().validate()) {
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
                if (caso == "insertar_emitir_programa") {
                    alert("Agregado con Exito");
                } else if (caso == "actualizar_emitir_programa") {
                    alert("Actualizado con Exito");
                }
                reloadTable();
                $("#form_emitir_programa")[0].reset();
            } else {
                alert("Fallo el server");
            }
        }
    });
}



function eliminar_programa(id){
  var caso = "eliminar_programa"
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

function modificar_programa(id) {
  var ruta = "./includes/querys.php?caso=get_programa";
    $.ajax({
        url: ruta,
        type: "POST",
        data: {funcion:'get_programa',id:id},
        success: function (datos)
        {
          console.log(datos);
          datos = JSON.parse(datos);
            
            document.getElementById("nombre_programa").value = datos['nombre_programa'];
            document.getElementById("descripcion_programa").value = datos['descripcion'];
          document.getElementById("estado_programa").value = datos['estado_programa'];
          document.getElementById("caso").value = 'actualizar_emitir_programa';
            document.getElementById("id").value = id;
        }
    });
}
