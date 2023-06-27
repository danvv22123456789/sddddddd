
$(document).ready(function() {
  $("#crear_tour").click(function() {
    var form = $("#form_tour");
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
          if (res) {
            if (caso == "crear_tour") {
              alert("Agregado con Éxito");
            } else if (caso == "actualizar_tour") {
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



function actualiza_tour(id) { 
    console.log('actualizar tour: ' + id);
    $("html, body").scrollTop(0);
    var caso = 'get_tour';
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
            $("#nombretour").val(data['nombre_tour']);
            $("#descripcion").val(data['descripcion']);
            $("#comentario").val(data['comentario']);
            $("#costo").val(data['costo']);
            $("#impuesto").val(data['Impuesto']);
            $("#id").val(data["id_tour_pk"]);
            $("#caso").val("actualizar_tour");
        }
    });
}

function elimina_tour(id) {
    console.log('eliminar tour: ' + id);
    $.ajax({
        url: "./includes/querys.php?caso=eliminar_tour",
        type: "POST",
        data: {id:id},
        success: function (res) {
            alert("Registro " + id + " eliminado");
            reloadTable();
        }
    });
}
