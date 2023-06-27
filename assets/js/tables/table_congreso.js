/*
Template Name: Color Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 5
Version: 5.1.5
Author: Sean Ngu
Website: http://www.seantheme.com/color-admin/
*/
var table;
var handleDataTableResponsive = function() {
	"use strict";

	if ($('#tbl_congreso').length !== 0) {
		table = $('#tbl_congreso').DataTable({
			"destroy": true,
			"fnDestroy": true,
			ajax: {
				"method": "POST",
				"dataType": "json",
				"url": "./includes/fnc_datatbl.php?caso=datatbl_congresos"
				
			},

			"columns": [
				{"order": "[[1, 'asc']]"},
				{"data": "nombre_congreso"},
				{"data": "siglas"},
				{ "data": "anio" },
				{ "data": "nombre_estado" },
				{"defaultContent": ""}
			],
			columnDefs: [
				{ targets: 5, visible: true },
				{
					targets: -1,
					orderable: false,
					data: null,
					render: function (data, type, row, meta) {
						let fila = meta.row;
						let id = data["id_congreso_pk"];
						let estado = data["id_estado_congreso_fk"];

						var botones = '';
						
						if (estado == 1) {
							var botones = '<button id="actualizar_congreso' + id + '" type="button" class="btn btn-outline-warning btn-xs me-1" onclick="actualiza_congreso(' + id + '); return false;"><i class="fa fa-edit" style="font-size:10px;"></i></button><button id="inactivar_congreso' + id + '" type="button"  class="btn btn-outline-dark btn-xs me-1" onclick="inactivar_congreso(' + id + '); return false;"><i class="fa-solid fa-eye-slash"></i></button><button id="cerrar_congreso' + id + '" type="button" class="btn btn-outline-info btn-xs me-1" onclick="cerrar_congreso(' + id + '); return false;"><i class="fa-solid fa-pause"></i></button>';
						} else if (estado == 2) {
							var botones = '<button id="actualizar_congreso' + id + '" type="button" class="btn btn-outline-warning btn-xs me-1" onclick="actualiza_congreso(' + id + '); return false;"><i class="fa fa-edit" style="font-size:10px;"></i></button><button type="button" id="activar_congreso' + id + '" class="btn btn-outline-primary btn-xs me-1" onclick="activar_congreso(' + id + '); return false;"><i class="fa-solid fa-power-off"></i></button><button id="eliminar_congreso' + id + '" type="button"  class="btn btn-outline-danger btn-xs me-1" onclick="elimina_congreso(' + id + '); return false;"><i class="fa fa-trash" style="font-size:10px;"></i></button>';
						} else if (estado == 3) {
							var botones = '<button type="button" id="activar_congreso' + id + '" class="btn btn-outline-primary btn-xs me-1" onclick="activar_congreso(' + id + '); return false;"><i class="fa-solid fa-power-off"></i></button';
						}

						return botones;
					}
				}
			],

			"bDestroy": true,
			dom: '<"dataTables_wrapper dt-bootstrap"<"row"<"col-xl-4 d-block d-sm-flex justify-center"<l>> <"col-xl-3 d-block d-sm-flex "B><"col-xl-5 d-flex justify-content-center"fr>>t<"row"<"col-xl-12 d-flex justify-content-center"p>>"row"<"col-xl-12 d-flex justify-content-center"i>>',
			buttons: [
				{
					extend:    'copyHtml5',
					text:      '  <i class="fas fa-copy"></i>',
					titleAttr: 'Copiar',
					className: 'btn btn-secondary btn-sm btn-rounded'
				},
				{
					extend:    'excelHtml5',
					text:      '  <i class="fas fa-file-excel"></i>',
					titleAttr: 'Excel',
					className: 'btn btn-success btn-sm btn-rounded'
				},
				{
					extend:    'csvHtml5',
					text:      '  <i class="fas fa-file-csv"></i>',
					titleAttr: 'CSV',
					className: 'btn btn-warning btn-sm btn-rounded'
				},
				{
					extend:    'pdfHtml5',
					text:      ' <i class="fas fa-file-pdf"></i>',
					titleAttr: 'PDF',
					className: 'btn btn-danger btn-sm btn-rounded'
				}
			],
			
			responsive: true,
			"lengthMenu": [ 5, 10, 25, 50, 75, 100 ],
			

			language: {
				"decimal": "",
				"emptyTable": "No hay informaci¨®n",
				"info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
				"infoEmpty": "Ver 0 to 0 of 0 Entradas",
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
					"next": "Siguiente",
					"previous": "Anterior"
				}
			},

		});
	}
};


var TableManageResponsive = function () {
	"use strict";
	return {
		//main function
		init: function () {
			handleDataTableResponsive();
		}
	};
}();

$(document).ready(function() {
	TableManageResponsive.init();
});

function reloadTable() {
	table.ajax.reload();
}

