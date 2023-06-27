$.post("includes/fnc_slc.php?id=lineas_investigacion", {}, function (resp) {
    //console.log(resp);
    $("#lineas_investigacion").html(resp);
    
});


$(document).ready(function() {
  $("#crear_tematica").click(function() {
    var form = $("#form_tematica");
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
          if (r) {
            if (caso == "crear_congreso") {
              alert("Agregado con Éxito");
            } else if (caso == "actualizar_congreso") {
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



function actualiza_tematica(id) { 
    $("html, body").scrollTop(0);
    var caso = 'get_tematica';
    $.ajax({
        method: "POST",
        url: "./includes/querys.php?caso="+caso,
        data: {
            id: id
        },
        success: function (datos) {
            var data = JSON.parse(datos);
            data = data[0];
            $("#lineas_investigacion").val(data['id_linea_investigacion_fk']);
            $("#nombretematica").val(data['nombre_tematica']);
            $("#abreviacion").val(data['abreviacion']);
            $("#descripcion_tematica").val(data['descripcion_tematica']);
            $("#comentarios_tematica").val(data['comentarios']);
            $("#id").val(data["id_tematica_pk"]);
            $("#caso").val("actualizar_tematica");
        }
    });
}

function elimina_tematica(id) {
    
    $.ajax({
        url: "./includes/querys.php?caso=eliminar_tematica",
        type: "POST",
        data: {id:id},
        success: function (res) {

            if (res.includes("Error")) {
            alert("Error al eliminar el registro: " + res);
        } else {
            alert("Registro " + id + " eliminado");
            reloadTable();
        }
        },
        error: function (xhr, status, error) {
            alert("Error al eliminar el registro: " + error);
        }
    });
}