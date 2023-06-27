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
    <link rel="stylesheet" href="../assets/css/default/resumen.css">
    <link rel="stylesheet" href="../assets/css/default/login.css">
	
	<!-- ================== END core-css ================== -->
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
                            <form method="POST" class="form-horizontal" data-parsley-validate="true" enctype="multipart/form-data" name='form_resumen' id='form_resumen' role="form">
                                <div class="row">
                                    <div class="col-sm-6 col-md-6 col-lg-6">
											
                                            <div class="form-group row mb-3">
                                                        <label class="col-lg-4 col-form-label form-label" for="message">Título*:</label>
                                                        <div class="col-lg-8">
                                                            <textarea class="form-control" id="titulo_trabajo" name="titulo_trabajo"  rows="2" data-parsley-minlength="10" data-parsley-maxlength="1000" placeholder="Escriba el título del trabajo" data-parsley-required="true"></textarea>
                                                        </div>
                                            </div><br>
        
                                            <div class="form-group row mb-3">
                                                <label class="col-lg-4 col-form-label form-label">Documento de investigación:</label>
                                                <div class="col-lg-8">
                                                    <input type="file" id="archivo_trabajo" name="archivo_trabajo_resumen" accept=".odt, .doc, .docx" class="form-control" required />
                                                </div>
                                            </div><br>
        
                                            <div class="form-group row mb-3">
                                                <label class="col-lg-4 col-form-label form-label">Nombre:</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control" type="text" id="nombreautor" name="nombreautor" placeholder="Escriba el nombre del autor" data-parsley-required="true" />
                                                </div>
                                            </div><br>
        
        
                                            <div class="form-group row mb-3">
                                                <label class="col-lg-4 col-form-label form-label">Correo:</label>
                                                <div class="col-lg-8">
                                                    <input type="text" id="correo" name="correo" class="form-control" placeholder="ejemplo@email.com" required />
                                                </div>
                                            </div>
                                    </div>


                                    <div class="col-sm-1 col-md-1 col-lg-1"></div>

                                    <div class="col-sm-5 col-md-5 col-lg-5">

                                            <div class="form-group row mb-3" id="preguntaautores" name="preguntaautores">
                                                <label class="col-lg-4 col-form-label form-label">El trabajo tiene mas autores:</label>
                                            

                                                <div class="col-lg-8">
                                                    
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="tautor" id="tautor_si" value="1" />
                                                        <label for="tautor_si">Si</label>
                                                        </input>
                                                    </div>
                                                

                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="tautor" id="tautor_no" value="0" checked="true" />
                                                        <label for="tautor_no">No</label>
                                                        </input>
                                                    </div>

                                                </div>

                                            </div>


                                            <div class="form-group row mb-3" id="tautores" name="tautores">
                                                <label class="col-lg-4 col-form-label form-label">Ingrese el número de autores además de usted...</label>
                                                <div class="col-lg-8">
                                                    <input id="n_autores" name="n_autores" type="number" class="form-control" placeholder="Número de autores" min="0" max="99" maxlength="2"></input>
                                                </div>
                                            </div>

                                            <div class="form-group row mb-3" id="frm_coautores" name="frm_coautores"></div>

                                        </div>

                                        <div class="col-sm-1 col-md-1 col-lg-1">
                                </div>

                                <br>
                                <div class="form-group row ">
                                    <label class="col-lg-4 col-form-label form-label">&nbsp;</label>
                                    <div class="col-lg-8">
                                        <input type='hidden' name='caso' id='caso' value='crear_resumen' />
                                        <input type='hidden' name='id' id='id' value='' />
                                        <a id="subir_resumen" onclick="subir_resumen()" type="submit" class="btn btn-success btn-primary d-block h-45px w-50 btn-lg fs-16px"><h5>Enviar Resumen</h5></a>
                                    </div>
                                </div>
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
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center"><!-- justify-content-between -->
                <div style="width:100%;" class="d-flex justify-content-center">
                <a href="https://iies.unah.edu.hn/" target="_blank"><img src="../assets/img/logo_IIES_5.svg" class="logo_5"></a>
                <a href="https://www.fce.ues.edu.sv/" target="_blank"><img src="../assets/img/Logo_UES_4.svg" class="logo_4"></a>
                <a href="https://cienciaseconomicas.unah.edu.hn/" target="_blank"><img src="../assets/img/Logo_FCEAC_UNAH_3.svg" class="logo_3"></a>
                <a href="https://www.ues.edu.sv/" target="_blank"><img src="../assets/img/Logo_UES_2.svg" class="logo_2" ></a>
                <a href="https://www.unah.edu.hn/" target="_blank"> <img  src="../assets/img/Logo_UNAH_1.svg" class="logo_1"></a>
                </div>
            </div>
        </footer>
    </div>


    

<!-- ================== BEGIN core-js ================== -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
<script src="./js/gestion_trabajos/subir_resumen.js"></script>   
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
	App.setPageTitle('.:CCE:.');
	//$.getScript('./template_ajax/js/gestion_trabajos/subir_resumen.js');
</script>
<!-- ================== END core-js ================== -->



<script>
	$("#tautores").hide();
	$("#frm_coautores").hide(); //ocultamos al cargar el formulario el div frm_coautores
	$("input[type=radio][name=tautor]").change(function() {
		if ($("#tautor_si").is(":checked")) {
			$("#tautores").show();
		} else {
			$("#tautores").hide();
		}
	});

	//CUANDO INGRESE EL NUMERO DE AUTORES, CONSTRUYE EL FORMULARIO PARA INGRESAR EL COAUTOR
	$("input[type=number][name=n_autores]").change(function() {

		if ($(this).val() > 0) {
			$("#frm_coautores").show();
			$("#frm_coautores").html("");

			var num = 1;
			var limite = this.value;
			//alert(num);
			/*onkeypress="autocompletarusuariost(this.value,'+i+');"*/
			if (num != 0 && num <= limite) {
				$("#frm_coautores").append('<div class="alert alert-warning  text-center "> Ingrese la información de los autores</div>');
				for (var i = 1; i <= limite; i++) {
					$("#frm_coautores").append('<div class="panel panel-inverse"><div class="panel-heading bg-cyan-700 text-white"><h4 class="panel-title">Autor: ' + ' ' + i + '</h4></div><div class="panel-body bg-gray-200"><div class="form-group row mb-3" ><input autocomplete="false" type="text" name="correo_autor' + i + '" id="correo_autor' + i + '" placeholder="Ingrese el correo del autor" class="form-control"  ></input></div><div class="form-group row mb-3" ><input type="text" name="primer_nombre' + i + '" id="primer_nombre' + i + '" placeholder="Ingrese el primer nombre del autor" class="form-control"></input></div><div class="form-group row mb-3" ><input type="text" name="primer_apellido' + i + '" id="primer_apellido' + i + '" placeholder="Ingrese el primer apellido del autor" class="form-control"></input></div><div class="form-group row mb-3"><label class="col-lg-5 col-form-label form-label">¿Es el autor principal del trabajo?</label><div class="col-lg-7"><div class="form-check form-check-inline"><input class="form-check-input" type="radio" id="rd_ap_si' + i + '" value="1" name="rd_ap_' + i + '" /><label  for="rd_ap_si' + i + '">Si</label></input></div><div class="form-check form-check-inline"><input class="form-check-input" type="radio" id="rd_ap_no' + i + '" value="0" name="rd_ap_' + i + '" onclick="radios_autores(this.value,' + i + ',' + num + ');" checked="true"/><label for="rd_ap_no' + i + '">No</label></input></div></div></div></div></div></div></div>');
				}
			}

		} else {
			$("#frm_coautores").hide();
		}

	});
</script> 
</body>
</html>