function modal_editar_pcualitativas(idformulario){
    $("#agregar_pregunta").removeClass(" class='btn btn-primary disabled m-b-5'");
    $("#agregar_pregunta").addClass(" class='btn btn-primary waves-effect waves-teal m-b-5'");
    
    $("#agregar_pregunta_cualitativa").removeClass("class='btn btn-primary disabled m-b-5'");
    $("#agregar_pregunta_cualitativa").addClass(" class='btn btn-primary waves-effect waves-teal m-b-5'");
    
    $("#guardar_pregunta").attr("style" , "display:none");
    
    $("#idform").val(idformulario);
    $("#nuevas_pcuantis").html("");
    $("#nuevas_pcualis").html("");
    var caso = 'preguntas_cualitativas' ;
    $.post("./form/funciones.php", {caso:caso,idformulario:idformulario}, function (resp) { 
        alert(resp);
        console.log(resp);
    
    $("#datos").html("");
    $("#preg_cuanti").html("");
    var dataJson = JSON.parse(resp);
    $("#nform").text("  " + dataJson.nombre_formulario.toUpperCase() + "  ");
    var tabla = 1;
        for (var i=0; i<dataJson.numero; i++){
           $("#datos").append("<tr><td style='font-weight:bold; text-align:jutify; font-size:11px;'  >"+dataJson['nombre_tipo_pregunta'+i].toUpperCase()+" </td><td id="+dataJson['id_pregunta_cualitativa_pk'+i]+" tabindex='1' style='font-weight:bold; text-align:jutify; font-size:11px;'>"+dataJson['nombre_pregunta_cualitativa'+i].toUpperCase()+"</td></tr><td><span><a href='#' class='btn btn-default waves-effect waves-red m-b-5' title='Eliminar Pregunta' onclick=eliminar_opcion('"+dataJson['id_pregunta_cualitativa_pk'+i]+"','"+idformulario+"','"+tabla+"');> <i class='ion ion-close-round'></i> Eliminar Pregunta</a> </span></td>");
        }
        
        for (var j=0; j<dataJson.numerocuanti; j++){
            tabla = 0;
            var opciones = dataJson['opciones'+j];
            var pesos = dataJson['ponderacion'+j];
         
            var myarropciones = opciones.split("<>");
            var myarrpesos = pesos.split("<>");
   
            var opcionpeso = "" ; 
            for(var a = 1; a < myarropciones.length; a++){
                opcionpeso = opcionpeso +"<tr><td id='opciones' style='font-weight:bold; text-align:jutify; font-size:11px;' tabindex='1'  width='10%'>"+myarropciones[a].toUpperCase()+"</td><td id='pesos' style='font-weight:bold; text-align:jutify; font-size:11px;' tabindex='1' width='10%' >"+myarrpesos[a]+"</td></tr>" ;
            }
            
           var totalrow = myarropciones.length ;
           $("#preg_cuanti").append("<tr><td  id='pregunta' rowspan="+totalrow+" style='font-weight:bold; text-align:jutify; font-size:11px;' tabindex='1'  >"+dataJson['nombre_pregunta_cuantitativa'+j].toUpperCase()+" </td></tr>"+opcionpeso+"<td><span><a href='#' class='btn btn-default waves-effect waves-red m-b-5' title='Eliminar Pregunta' onclick=eliminar_opcion('"+dataJson['id_pregunta_cuantitativa_pk'+j]+"','"+idformulario+"','"+tabla+"');> <i class='ion ion-close-round'></i> Eliminar Pregunta</a> </span></td><td id="+dataJson['id_pregunta_cuantitativa_pk'+j]+"></td>");
        }
        
    });
    
    $('#preguntas_cualitativas').modal({
        show: 'true'         
    });
}

if ($('#tbl_editar_form').length !== 0) {
    $('#tbl_editar_form').DataTable({

        "bVisible": false,
        "destroy": true,
        "fnDestroy": true,
        ajax: {
            "method": "POST",
            "dataType": "json",
            "url": "./includes/fnc_datatbl.php?caso=datatbl_editar_form"

        },

        "columns": [
            //{ "order": "[[1, 'asc']]" },
            { "data": "id_formulario_pk" },
            { "data": "nombre_formulario" },
            { "data": "descripcion" },
            { "data": "" },
            { "defaultContent": "" }
        ],

        columnDefs: [
            { targets: 5, visible: false },
            {
                targets: -1,
                orderable: false,
                data: null,
                render: function(data, type, row, meta) {
                    let fila = meta.row;
                    let id = data["0"];
                    let botones = '<button type="button"  class="btn btn-outline-primary btn-xs" title="Asignar Temática"  onclick="modal_editar_pcualitativas('+id+');"><i class="fa fa-edit" style="font-size:10px;"></i></button>';
                    return botones;
                }
            }
        ],


        "bDestroy": true,

        dom: '<"dataTables_wrapper dt-bootstrap"<"row"<"col-xl-4 d-block d-sm-flex justify-center"<l>> <"col-xl-3 d-block d-sm-flex "B><"col-xl-5 d-flex justify-content-center"fr>>t<"row"<"col-xl-12 d-flex justify-content-center"p>>"row"<"col-xl-12 d-flex justify-content-center"i>>',
        buttons: [{
                extend: 'copyHtml5',
                text: '  <i class="fas fa-copy"></i>',
                titleAttr: 'Copiar',
                className: 'btn btn-secondary btn-sm btn-rounded'
            },
            {
                extend: 'excelHtml5',
                text: '  <i class="fas fa-file-excel"></i>',
                titleAttr: 'Excel',
                className: 'btn btn-success btn-sm btn-rounded'
            },
            {
                extend: 'csvHtml5',
                text: '  <i class="fas fa-file-csv"></i>',
                titleAttr: 'CSV',
                className: 'btn btn-warning btn-sm btn-rounded'
            },
            {
                extend: 'pdfHtml5',
                text: ' <i class="fas fa-file-pdf"></i>',
                titleAttr: 'PDF',
                className: 'btn btn-danger btn-sm btn-rounded'
            }
        ],

        responsive: true,
        "lengthMenu": [5, 10, 25, 50, 75, 100],

        language: {
            "decimal": "",
            "emptyTable": "No hay información",
            "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
            "infoEmpty": "Ver 0 a 0 de 0 Entradas",
            "infoFiltered": "(Filtrado de _MAX_ total entradas)",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "Ver _MENU_ Entradas",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "search": "Buscar:",
            "zeroRecords": "Sin resultados encontrados",
            "paginate": {
                "first": "Primero",
                "last": "Ultimo",
                "next": ">",
                "previous": "<"
            }
        },

    });


}