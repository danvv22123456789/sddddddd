if ($('#tbl_s_revision').length !== 0) {
    $('#tbl_s_revision').DataTable({

        "bVisible": false,
        "destroy": true,
        "fnDestroy": true,
        ajax: {
            "method": "POST",
            "dataType": "json",
            "url": "./includes/fnc_tabs.php?caso=s_revision"
        },

        "columns": [
            { "order": "[[1, 'asc']]" },
            { "data": "nombre_usuario" },
            { "data": "nombres" },
            { "data": "motivo_solicitud" },
            { "data": "fecha_solicitud" },
            { "defaultContent": "" },
            { "defaultContent": "" }
        ],
        columnDefs: [
            { targets: 6, visible: false },
            {
                targets: -2,
                orderable: false,
                data: null,
                render: function(data, type, row, meta) {
                    let fila = meta.row;
                    let botones = `
                                <button type="button" title="Aceptar" class='btn btn-outline-primary btn-xs' onclick='aceptar_solicitud("${data.id_solicitud}"); return false;'><i class="fa fa-check-circle" style="font-size:10px;"></i></button>
								<button type="button" title="rechazar" class='btn btn-outline-danger btn-xs' onclick='rechazar_solicitud("${data.id_solicitud}"); return false;'><i class="fa fa-times" style="font-size:10px;"></i></button>
                                `;
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