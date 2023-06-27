
$(document).ready(function() {
  $("#crear_linea").click(function() {
    var form = $("#form_lineas_investigacion");
    form.parsley().validate();

    if (form.parsley().isValid()) {
      var datos = form.serialize();
      var caso = $("#caso").val();

      $.ajax({
        cache: false,
        async: false,
        type: "POST",
        url: "./includes/querys.php?caso=" + caso,
        data: datos,
        success: function(r) {
          console.log(r);
          if (r) {
            if (caso == "crear_linea") {
              alert("Agregado con Éxito");
            } else if (caso == "modificar_linea") {
              alert("Actualizado con Éxito");
            }
            reloadTable();
            form[0].reset();
          } else {
            alert("Fallo el servidor");
          }
        }
      });
    }
  });
  return false;
});



function actualiza_linea_investigacion(id) { 
    $("html, body").scrollTop(0);
    var caso = 'get_linea_investigacion';
    $.ajax({
        method: "POST",
        url: "./includes/querys.php?caso="+caso,
        data: {
            id: id
        },
        success: function (datos) {

            var data = JSON.parse(datos);
            data = data[0];
            $("#nombrelinea").val(data['nombre_linea_investigacion']);
            $("#abreviacion").val(data['abreviacion']);
            $("#descripcion_linea").val(data['descripcion_linea_investigacion']);
            $("#comentarios_linea").val(data['comentarios']);
            $("#id").val(data["id_linea_investigacion_pk"]);
            $("#caso").val("modificar_linea");
        }
    });
}

function elimina_linea_investigacion(id) {
    alert("Registro " + id + " eliminado");
    $.ajax({
        url: "./includes/querys.php?caso=eliminar_linea",
        type: "POST",
        data: {id:id},
        success: function (res) {
            console.log(res);
            reloadTable();
        }
    });
}
