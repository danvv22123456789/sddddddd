<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>.:CCE:.</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN core-css ================== -->
	<link href="../assets/css/vendor.min.css" rel="stylesheet" />
	<link href="../assets/css/default/app.min.css" rel="stylesheet" />
	<link href="../assets/css/default/app.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/default/resumen.css">

	<!-- ================== END core-css ================== -->
	<script src="../assets/plugins/jquery.maskedinput/src/jquery.maskedinput.js"></script>
<script src="../assets/plugins/ionicons/dist/ionicons/ionicons.js"></script>
	<script src="../assets/js/jquery.min.js"></script>
	<script src="../assets/js/jquery.slimscroll.js"></script>
	<script src="../assets/js/jquery.nicescroll.js"></script>
    <script src="../assets/js/jquery.scrollTo.min.js"></script>
</head>

<body>

    <script src="../assets/plugins/jquery.maskedinput/src/jquery.maskedinput.js"></script>
    <script src="../assets/plugins/ionicons/dist/ionicons/ionicons.js"></script>


    <body class="resumen-page">

        <!-- BEGIN resumen -->
        <div class="container-fluid">
            <div class="image row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <main>
                        <div class="resumen-block">

                            <div class="px-lg-5 pb-lg-3 pb0 w-100 mb-auto">
                                <center>
                                    <img src="../assets/img/LogoCACE.svg" class="img-fluid" id="logo" alt="">
                                    <div class=" mb-25px h1 text-center">
                                        <div class="mb-1">Congreso Académico</div>
                                        <small class="d-block fs-15px lh-16">Centroamericano en Ciencias Económicas</small>
                                    </div>
                                </center>
                            </div>

                            <div class="resumen-content align-items-center">
							<form id="form_registro" name="form_registro" action="#" method="POST" class="fs-13px">
                                    <div class="row">
									<div class="row gx-5">	
						   <div class="col-lg-6 mb-2">
							<div class="input-group">
							<span class="input-group-text"><ion-icon name="people-sharp" class="fa-1x fa-fw float-start me-2px"></ion-icon></span>
							<input type="text" id="nombres" name="nombres" class="form-control fs-13px" placeholder="Nombres" />	
							</div>
							</div>
	
						   <div class="col-lg-6 mb-2">
							<div class="input-group">
								<span class="input-group-text"><ion-icon name="people-sharp" class="fa-1x fa-fw float-start me-2px"></ion-icon></span>
								<input type="text" id="apellidos" name="apellidos" class="form-control fs-13px" placeholder="Apellidos" />
							</div> 
							</div> 

							<div class="col-lg-6 mb-2">
								<div class="input-group">
									<span class="input-group-text"><ion-icon name="phone-portrait-sharp" class="fa-1x fa-fw float-start me-2px"></ion-icon></span>
								<input type="text" id="tprincipal" name="tprincipal" class="form-control" id="masked-input-phone" placeholder="Teléfono Principal" />
							</div>
						    </div>
							<div class="col-lg-6 mb-2">
								<div class="input-group">
									<span class="input-group-text"><ion-icon name="mail-sharp" class="fa-1x fa-fw float-start me-2px"></ion-icon></span>
								<input type="email" id="cprincipal" name="cprincipal" class="form-control" placeholder="Correo Principal" />
							</div>
							</div>

							<div class="col-lg-6 mb-2">
								<div class="input-group">
									<span class="input-group-text"><ion-icon name="mail-sharp" class="fa-1x fa-fw float-start me-2px"></ion-icon></span>
								<input type="email" id="calterno" name="calterno" class="form-control" placeholder="Correo Alterno" />
							</div>
							</div>
							<div class="col-lg-6 mb-2">
								<div class="input-group">
									<span class="input-group-text"><ion-icon name="person-sharp" class="fa-1x fa-fw float-start me-2px"></ion-icon></span>
								<input type="text" id="nusuario" name="nusuario" class="form-control fs-13px" placeholder="Nombre de Usuario" autocomplete="user"/>	
							</div>
							</div>
							<div class="col-lg-6 mb-2">
								<div class="input-group">
									<span class="input-group-text"><ion-icon name="lock-closed-sharp" class="fa-1x fa-fw float-start me-2px"></ion-icon></span>
								<input type="password" id="password" name="password" class="form-control fs-13px" placeholder="Contraseña" autocomplete="password"/>
							</div>
							</div>
							<div class="col-lg-6 mb-2">
								<div class="input-group">
									<span class="input-group-text"><ion-icon name="lock-closed-sharp" class="fa-1x fa-fw float-start me-2px"></ion-icon></span>
								<input type="password" id="contrase" name="contrase" class="form-control fs-13px" placeholder="Confirmar Contraseña" autocomplete="password"/>
							</div>
							</div>
							<div class="col-lg-6 mb-2">
								<div class="input-group">
									<span class="input-group-text"><ion-icon name="person-add-sharp" class="fa-1x fa-fw float-start me-2px"></ion-icon></span>
								<select class="form-select"  id="tpersona" name="tpersona" data-parsley-required="true">
									
								</select>
							</div>
							</div>
							<div class="col-lg-6 mb-2" id="div_institucion" style="display:none;">
								<div class="input-group">
									<span class="input-group-text"><ion-icon name="clipboard-sharp" class="fa-1x fa-fw float-start me-2px"></ion-icon></span>
								<select class="form-select"  id="institucion" name="institucion" data-parsley-required="true">
								
								</select>
							</div>
							</div>
							<div class="col-lg-6 mb-2">
								<div class="input-group">
									<span class="input-group-text"><ion-icon name="earth-sharp" class="fa-1x fa-fw float-start me-2px"></ion-icon></span>
								<select class="form-select"  id="pais" name="pais" data-parsley-required="true">
								
								</select>
							</div>
							</div>
							<div class="col-lg-6 mb-2">
								<div class="input-group">
									<span class="input-group-text"><ion-icon name="language-sharp" class="fa-1x fa-fw float-start me-2px"></ion-icon></span>
								<select class="form-select"  id="idioma" name="idioma" data-parsley-required="true">
									<option value="0">Idioma</option>
									<option value="1">Inglés</option>
									<option value="2">Español</option>
								</select>
							</div>
							</div>
							<div class="col-lg-6 mb-2">
								<div class="input-group">
									<span class="input-group-text"><ion-icon name="id-card-sharp" class="fa-1x fa-fw float-start me-2px"></ion-icon></span>
								<select class="form-select"  id="tidentificacion" name="tidentificacion" data-parsley-required="true">
									
								</select>
							</div>
							</div>
							<div class="col-lg-6 mb-2">
							<div class="input-group">
								<span class="input-group-text"><ion-icon name="people-sharp" class="fa-1x fa-fw float-start me-2px"></ion-icon></span>
								<input type="text" id="identificacion" name="identificacion" class="form-control fs-13px" placeholder="N. identificacion" />
							</div> 
							</div> 
							<div class="col-lg-6 mb-2">
								<div class="input-group">
									<span class="input-group-text"><ion-icon name="nutrition-sharp" class="fa-1x fa-fw float-start me-2px"></ion-icon></span>
								<select class="form-select"  id="talimentacion" name="talimentacion" data-parsley-required="true">
									
								</select>
							</div>
							</div>
							<div class="col-lg-6 mb-2">
								<div class="input-group">
									<span class="input-group-text"><ion-icon name="clipboard-sharp" class="fa-1x fa-fw float-start me-2px"></ion-icon></span>
								<select class="form-select"  id="congreso" name="congreso" data-parsley-required="true">
								
								</select>
							</div>
							</div>
							<div class="col-lg-6 mb-2">
								<div class="input-group">
									<span class="input-group-text"><ion-icon name="journal-sharp" class="fa-1x fa-fw float-start me-2px"></ion-icon></span>
								<select class="form-select"  id="tparticipacion" name="tparticipacion" data-parsley-required="true">
									
								</select>
							</div>
							</div>
							</div>
					</div>
					</div>

					<br><br>
				<div class="col-md-12">
					<center>
					<button id="btn_registro" class="btn btn-success btn-primary d-block h-45px w-50 btn-lg fs-16px">Registrarse</button>
					</center>
				</div>

				<br>
				<p class="text-center text-gray-600">
					&copy; CCE 2023
				</p>       
					
                                </form>
                            </div>
                        </div>
                    </main>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </body>


    <!-- END resumen -->

    <div class="bg-dark mt-0">
        <footer class="textResponsive">
            <br>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center"><!-- justify-content-between -->
                <div style="width:100%;" class="d-flex justify-content-center">
                <a href="https://iies.unah.edu.hn/"><img src="../assets/img/logo_IIES_5.svg" class="logo_5"></a>
                <a href="https://www.fce.ues.edu.sv/"><img src="../assets/img/Logo_UES_4.svg" class="logo_4"></a>
                <a href="https://cienciaseconomicas.unah.edu.hn/"><img src="../assets/img/Logo_FCEAC_UNAH_3.svg" class="logo_3"></a>
                <a href="https://www.ues.edu.sv/"><img src="../assets/img/Logo_UES_2.svg" class="logo_2" ></a>
                <a href="https://www.unah.edu.hn/"> <img  src="../assets/img/Logo_UNAH_1.svg" class="logo_1"></a>
                </div>
            </div>
        </footer>
        <br>
    </div>





<script src="./js/login.js"></script>   


<script>
	


	$.getScript('../assets/plugins/jquery-migrate/dist/jquery-migrate.min.js').done(function() {
		$.when(
			$.getScript('../assets/plugins/moment/min/moment.min.js'),
			$.getScript('../assets/plugins/bootstrap-daterangepicker/daterangepicker.js'),
			$.getScript('../assets/plugins/select2/dist/js/select2.min.js'),
			$.getScript('../assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js'),
			$.getScript('../assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js'),
			$.getScript('../assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js'),
			$.getScript('../assets/plugins/jquery.maskedinput/src/jquery.maskedinput.js'),
			$.getScript('../assets/plugins/tag-it/js/tag-it.min.js'),
			$.getScript('../assets/plugins/clipboard/dist/clipboard.min.js'),
			$.getScript('../assets/plugins/spectrum-colorpicker2/dist/spectrum.min.js'),
			$.getScript('../assets/plugins/select-picker/dist/picker.min.js'),
			$.Deferred(function( deferred ){
				$(deferred.resolve);
			})
		).done(function() {
			$.getScript('../assets/js/demo/form-plugins.demo.js'),
			$.Deferred(function( deferred ){
				$(deferred.resolve);
			})
		});
	});

	$.when(
		$.getScript('../assets/plugins/@highlightjs/cdn-assets/highlight.min.js'),
		$.Deferred(function( deferred ){
			$(deferred.resolve);
		})
	).done(function() {
		$.getScript('../assets/js/demo/render.highlight.js'),
		$.Deferred(function( deferred ){
			$(deferred.resolve);
		})
	});

	$.post("./includes/funciones.php?funcion=pais",{}, function (resp){
        $("#pais").html(resp); 
        });

	$.post("./includes/funciones.php?funcion=tselectpersona",{}, function (resp){
        $("#tpersona").html(resp); 
        });
	
	$.post("./includes/funciones.php?funcion=tidentificacion",{}, function (resp){
        $("#tidentificacion").html(resp); 
        });

	$.post("./includes/funciones.php?funcion=talimentacion",{}, function (resp){
        $("#talimentacion").html(resp); 
    });
	$.post("./includes/fnc_slc.php?id=tparticipacion",{}, function (resp){
        $("#tparticipacion").html(resp); 
    });

	$.post("./includes/funciones.php?funcion=congreso",{}, function (resp){
        $("#congreso").html(resp); 
    });

	$("#congreso").change(function(){
    var congreso=$("#congreso").val();
     $.post("./includes/funciones.php?funcion=roles_congreso",{congreso:congreso},function(resp){
     $("#tparticipacion").html("");
     $("#tparticipacion").html(resp);
     })
})

$("#tpersona").change(function(){
    var tpersona=$("#tpersona").val();


    $("#div_institucion").removeAttr("style");
//    $("#div_institucion").attr("style", "display:none");

    
        $.post("./includes/funciones.php?funcion=tpersona",{tpersona:tpersona},function(resp){
     $("#institucion").html("");
     $("#institucion").html(resp);
     })
})




</script>



</body>
</html>


