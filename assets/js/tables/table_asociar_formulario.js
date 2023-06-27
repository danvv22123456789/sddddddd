if ($('#tbl_form_tem').length !== 0) {
    $('#tbl_form_tem').DataTable({

        "bVisible": false,
        "destroy": true,
        "fnDestroy": true,
        ajax: {
            "method": "POST",
            "dataType": "json",
            "url": "./includes/fnc_datatbl.php?caso=datatbl_form_tem"

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
                    let id = data["idform"];
                    let botones = '<button type="button"  class="btn btn-outline-primary btn-xs" title="Asignar Temática"  onclick="asociar_tematica('+ id +' );"><i class="fa fa-sliders" style="font-size:10px;"></i></button>';
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