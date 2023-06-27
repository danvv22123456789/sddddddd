function subir_resumen() {
  var formData = new FormData($("#form_resumen")[0]);
  //  var tematicastrabajo = $("#tematicas_trabajo").val();

  // $.each(tematicastrabajo, function(key, value) {
  //    formData.append('tematicastrabajo[]', value);
  //  });

  var caso = $("#caso").val();

  if (!$("#form_resumen").parsley().validate()) {
    
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: 'Debes completar correctamente los campos requeridos',
    })

    //alert("Debe llenar los campos requeridos");
    return false;
  }

  $.ajax({
    cache:false,
    async: false,
    type: "POST",
    url: "./includes/querys.php?caso=" + caso,
    data: formData,
    contentType: false,
    processData: false,
    success: function (r) {
      console.log(r);
      if (r) {
        if (caso == "crear_resumen") {
          //alert("Agregado con Exito");
         
          Swal.fire({
            icon: 'success',
            confirmButtonColor: "#79E2E9",
            title: 'Resumen enviado con éxito',
            text: 'Verifique el mensaje de confirmación en la bandeja de entrada o spam de su correo electrónico',
          })


        } else if (caso == "actualizar_resumen") {
          alert("Actualizado con Exito");
        }
        $("#form_resumen")[0].reset();
      } else {
        alert("Fallo el server");
      }
    },
  });

  return false;
}



function elimina_resumen(id) {
  $.ajax({
      url: "./includes/querys.php?caso=eliminar_resumen",
      type: "POST",
      data: {id:id},
      success: function (res) {
       // alert("Registro " + id + " eliminado");

       Swal.fire({
        icon: 'success',
        title: 'El registro se ha eliminado correctamente',
      });

        reloadTable();
      }
  });
}



function descargar_resumen_original(id) {
  window.location.href = "./includes/querys.php?caso=descargar_resumen&id=" + id;
}

