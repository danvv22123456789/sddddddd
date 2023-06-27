/*
Template Name: Color Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 5
Version: 5.1.5
Author: Sean Ngu
Website: http://www.seantheme.com/color-admin/
*/



var handleDataTableResponsive = function() {
	"use strict";

	if ($('#tbl_dictaminar_trabajos_ep').length !== 0) {
		$('#tbl_dictaminar_trabajos_ep').DataTable({

			"destroy": true,
			"fnDestroy": true,
			ajax: {
				"method": "POST",
				"dataType": "json",
				"url": "./includes/fnc_datatbl.php?caso=datatbl_dictaminar_trabajos_ep"
			},

			"columns": [
				{"order": "[[1, 'asc']]"},
				{"data": "titulo_trabajo"},
				{"data": "nombre_tematica"},
				{"data": "nombre_tipo_trabajo"},
				//{"data": "idioma"},
				{"data": "estado"},
				{"defaultContent": ""}
			],

			columnDefs: [
				{ targets: 6, visible: false },
				{
					targets: -1,
					orderable: false,
					data: null,
					render: function (data, type, row, meta) {
						let fila = meta.row;
						let botones = `
								<button type="button" class='btn btn-outline-info btn-xs' title='@@verinfotrabajo@@' onclick=inftrabajo('".$fila['id_trabajo_pk']."');><i class="fa fa-info-circle" style="font-size:10px;"></i></button>
								<button type="button"  class='btn btn-outline-success btn-xs' title='@@verdocoriginal@@' download='".$fila['ubicacion_archivo']."'  href='form/gestion_trabajos/trabajos/congreso$idcongreso/tipotrabajo".$fila['id_tipo_trabajo_fk']."/".$fila['ubicacion_archivo']."' ><i class="fa fa-download" style="font-size:10px;"></i></button>
								<button type="button"  class='btn btn-outline-primary btn-xs' title='@@verdocrevision@@' download='".$fila['ubicacion_archivo']."'  href='form/gestion_trabajos/trabajos/congreso$idcongreso/tipotrabajo".$fila['id_tipo_trabajo_fk']."/Revisiones/".$fila['ubicacion_archivo']."'><i class="fa fa-cloud-download" style="font-size:10px;"></i></button>
								<button type="button"  class='btn btn-outline-secondary btn-xs' title='@@dictaminatrab@@' onclick=dictaminartrabajo('".$fila['id_trabajo_pk']."','".$fila['id_tematica_pk']."');'><i class="fa fa-pencil-square" style="font-size:10px;"></i></button>
								`;	
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
				"emptyTable": "No hay información",
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
					"next": ">",
					"previous": "<"
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



