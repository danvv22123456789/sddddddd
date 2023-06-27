

<!-- BEGIN breadcrumb -->
<ol class="breadcrumb float-xl-end">
	<li class="breadcrumb-item"><a href="javascript:;">Inicio</a></li>
	<li class="breadcrumb-item"><a href="javascript:;">Congresos</a></li>
	<li class="breadcrumb-item active">Asociar Administrador</li>
</ol>
<!-- END breadcrumb -->
<!-- BEGIN page-header -->
<h1 class="page-header">Generar certificados<small></small></h1>
<!-- END page-header -->
<!-- BEGIN row -->
<div class="row">



	<!-- BEGIN col-6 -->
	<div class="col-xl-12">
		<!-- BEGIN panel -->
		<div class="panel panel-inverse" data-sortable-id="form-validation-2">
			<!-- BEGIN panel-heading -->
			<div class="panel-heading">
				<h4 class="panel-title">Tipo certificado</h4>
				<div class="panel-heading-btn">
					<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
				</div>
			</div>
			
            <form enctype="multipart/form-data" target="_blank" action="form/gestion_certificados_php/plantillas/pdfcertificados.php" method='POST' name='form_genera_certificados'  id='form_genera_certificados' class='form-horizontal form-bord ' data-parsley-validate='true'> 
            <!-- BEGIN panel-body -->
			<div class="panel-body">
				<table id="tbl_genera_certificados" name="tbl_genera_certificados" class="table table-striped table-bordered align-middle display responsive no-wrap" width="100%">
					<thead>
						<tr>
							<th width="1%">N.</th>
							<th class="text-nowrap">Selección</th>
							<th class="text-nowrap">Nombre</th>
						</tr>
					</thead>
                    <tbdoy>
                        <tr>
                        <div class="card-box col-md-5"   id="checkbox_certificado" name="checkbox_certificado">
                        </tr>
                    </tbdoy>

				</table>

                <div class="form-group" align="center">
                            <button type="submit"  id="btn_generar_certificados" class="btn btn-success btn-rounded w-md waves-effect waves-light m-b-5">Generar Cetificado</button>
                            <input type='hidden' name='caso' id='caso' value='generar_certificados'/>
                            <input type='hidden' name='idcert' id='idcert' value='0'/>
                            <input type='hidden' name='idtrab' id='idtrab' value='0'/>
                       </div>
			</div>
			<!-- END panel-body -->
		</div>
		<!-- END panel -->
	</div>
	<!-- END col-6 -->


</div>
<!-- END row -->



<!-- ================== BEGIN core-js ================== -->
<script>
	App.setPageTitle('.:CEAT:.');
	$.getScript('../assets/plugins/datatables.net/js/jquery.dataTables.min.js'); //Datatable
	$.getScript('../assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js');//bootstrap style
	$.getScript('../assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js');//table responsive
	$.getScript('../assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js');//buttons 
	$.getScript('../assets/plugins/datatables.net-buttons/js/buttons.html5.min.js');//all functions
	$.getScript('../assets/plugins/pdfmake/build/pdfmake.min.js');//pdf 
	$.getScript('../assets/plugins/jszip/dist/jszip.min.js');//excel
	$.getScript('../assets/js/tables/table_genera_certificados.js');

</script>
<!-- ================== END core-js ================== -->


<script type="text/javascript">
     function checkval(val,idcer){
         $('input[type=checkbox]').each(function(){
                $(this).prop("checked", false);
         });
         $("#idcertificado"+val).prop("checked", true);
         $("#idtrab").val(0);
         $("#idcert").val(idcer);
     }  
     function checkval1(val,idtrab,nombretrab){
         $('input[type=checkbox]').each(function(){
                $(this).prop("checked", false);
         });
         $("#idtrabajo"+val).prop("checked", true);
         $("#idcert").val(0);
         $("#idtrab").val(idtrab);
     } 
</script>   