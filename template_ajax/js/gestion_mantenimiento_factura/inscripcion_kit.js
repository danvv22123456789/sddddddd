
$(document).ready(function() {
  $("#guardar_articulo").click(function() {
    var form = $("#form_articulo");
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
        success: function(res) {
          console.log(res);
          if (res) {
            if (caso == "crear_articulo") {
              alert("Agregado con Éxito");
            } else if (caso == "actualizar_articulo") {
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


function actualiza_inscripcion_kit(id) { 
    console.log('actualizar: ' + id);
    $("html, body").scrollTop(0);
    var caso = 'get_articulo';
    $.ajax({
        method: "POST",
        url: "./includes/querys.php?caso="+caso,
        data: {
            id: id
        },
        success: function (datos) {

            var data = JSON.parse(datos);
            data = data[0];
            $("#articulo").val(data['producto']);
            $("#precio").val(data['precio_unitario']);
            $("#descripcion").val(data['descripcion']);
            $("#impuesto").val(data['grabado_exento']);
            $("#id").val(data["id_costo_pk"]);
            $("#caso").val("actualizar_articulo");
        }
    });
}

function elimina_inscripcion_kit(id) {
    $.ajax({
        url: "./includes/querys.php?caso=eliminar_articulo",
        type: "POST",
        data: {id:id},
        success: function (res) {
            alert("Registro " + id + " eliminado");
            reloadTable();
        }
    });
}
