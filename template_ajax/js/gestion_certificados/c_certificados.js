//espacios
$.post("./includes/fnc_slc.php?id=slc_persona",{}, function (resp){
    $("#slcrolescongreso").html(resp); 
    //console.log(resp);
});
$.post("./includes/fnc_slc.php?id=slc_persona",{}, function (resp){
    $("#origen_certificados").html(resp); 
});
$.post("./includes/fnc_slc.php?id=slc_persona",{}, function (resp){
    $("#destino_certificados").html(resp); 
});

function limpiar(frm) {
    document.getElementById(frm).reset()
}
function modificar_certificado(id) {
    // $("#btn_registro").prop('disabled', true);
    var form = this.form;
    var form_id = $(this).closest("form").attr('id');
    
    var formData = new FormData($("#form_certificados")[0]);
    var ruta = "./includes/querys.php?caso=get_certificado&id="+id;
    var respuesta;
    $.ajax({
        url: ruta,
        type: "GET",
        data: formData,
        contentType: false,
        processData: false,
      success: function (resp) {
          resp= JSON.parse(resp)
          let data = resp[0];
          const nc = document.getElementById("nombre_c");
          nc.value= data["nombre_certificado"];

          
          document.getElementById("idcert").value=data["id_certificado_pk"];
          document.getElementById("flexRadioDefault1").value=data["certificado_especial"];

          document.getElementById("encabezado_c").value=data["encabezado_certificado"];
          document.getElementById("motivo_c").value=data["motivo_certificado"];
          document.getElementById("pie_c").value=data["pie_certificado"];
          document.getElementById("slcrolescongreso").value=data["nombre_persona"];
          document.getElementById("caso").value = 'actualizar_certificado';
          
          document.getElementById("archivo_ant").value = data["url_arte"];
          document.getElementById("nombre_archivo").textContent = data["url_arte"];
           
        }
    });

    var caso = 'get_usuario_firma_certificado';
    $.ajax({
        method: "POST",
        url: "./includes/querys.php?caso="+caso,
        data: {
            id: id
        },
        success: function (datos) {
            $("#destino_certificados option").prop("selected", false);

            var data = JSON.parse(datos);
            var select = document.getElementById("destino_certificados");
            for (var i = 0; i < data.length; i++) {
                var option = select.querySelector("#personaid" + data[i].id_persona_pk);
                if (option) {
                    option.selected = true;
                }
            }
        }
    });
}
function eliminar_certificado(id) {
    // $("#btn_registro").prop('disabled', true);
    var form = this.form;
    var form_id = $(this).closest("form").attr('id');
    var caso = $("#caso_congreso").val();
    var formData = new FormData($("#form_congresos")[0]);
    var ruta = "./includes/querys.php?caso=delete_certificado&id="+id;

    var respuesta;
    $.ajax({
        url: ruta,
        type: "GET",
        data: formData,
        contentType: false,
        processData: false,
        success: function(resp) {
            //console.log(resp);
			reloadTable();
           
        }
    });
}
function guardar_certificado() {
  var form = $("#form_certificados");
  form.parsley().validate();

  if (form.parsley().isValid()) {
    var caso = $("#caso").val();
    var formData = new FormData(form[0]);

    var origencertificados = $("#origen_certificados").val();
    $.each(origencertificados, function(key, value) {
      formData.append('origencertificados[]', value);
    });

    var destinocertificados = $("#destino_certificados").val();
    $.each(destinocertificados, function(key, value) {
      formData.append('destinocertificados[]', value);
    });

    var ruta = "./includes/querys.php?caso=" + caso;

    $.ajax({
      url: ruta,
      type: "POST",
      data: formData,
      origencertificados: origencertificados,
      destinocertificados: destinocertificados,
      contentType: false,
      processData: false,
      success: function(resp) {
        console.log(resp);

        if (resp.indexOf('1') !== -1) {
          alert('Se guardó correctamente');
        } else {
          //alert('Ocurrió un error');
        }

        reloadTable();
        form[0].reset();

      }
    });
  }
}
