function guardar_espacio() {
    var caso = $("#caso").val();
    var formData = new FormData($("#form_espacios")[0]);
    var ruta = "./includes/querys.php?caso=" + caso;

    if (!$("#form_espacios").parsley().validate()) {
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
            //console.log(res);
            if (res) {
                if (caso == "insertar_espacio") {
                    alert("Agregado con Exito");
                } else if (caso == "actualizar_espacio") {
                    alert("Actualizado con Exito");
                }
              reloadTable();
              $("#form_espacios")[0].reset();
            } else {
                alert("Fallo el server");
            }
        }
    });
}



function modificar_espacio(id) {
  var ruta = "./includes/querys.php?caso=get_espacio";
    $.ajax({
        url: ruta,
        type: "POST",
        data: {funcion:'get_espacio',id:id},
        success: function (datos)
        {
            //console.log(datos);
            datos = JSON.parse(datos);
            
            document.getElementById("nombre_espacio").value = datos['nombre_espacio'];
            document.getElementById("nombre_alternativo").value = datos['nombre_alternativo'];
            document.getElementById("descripcion").value = datos['descripcion_espacio'];
            document.getElementById("cant_personas").value = datos['capacidad_personas'];
            document.getElementById("cant_tomas").value = datos['numero_tomacorriente'];

            document.getElementById("comentarios_adicionales").value = datos['comentarios'];
            document.getElementById("caso").value = 'actualizar_espacio';
          document.getElementById("idespacio").value = id;
          
          document.getElementById("archivo_ant").value = datos["mapa_espacio"];
          document.getElementById("nombre_archivo").textContent = datos["mapa_espacio"];
        }
    });
}

function eliminar_espacio(id){
  var caso = "eliminar_espacio"
  $.ajax({
    method: "POST",
    url: "./includes/querys.php?caso=" + caso,
    data: {
      id: id,
      caso: caso,
    },
  })
    .done(function (response) {
      console.log(response);
      if (response == "1") {
        alert("registro eliminado exitosamente");
      }
      reloadTable();
    })
    .fail(function (jqXHR, textStatus) {
      console.log("Error en la operación: " + textStatus);
     
    });
}