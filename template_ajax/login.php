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
    <link rel="stylesheet" href="../assets/css/default/login.css">



    <!-- ================== END core-css ================== -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/jquery.slimscroll.js"></script>
    <script src="../assets/js/jquery.nicescroll.js"></script>
    <script src="../assets/js/jquery.scrollTo.min.js"></script>
</head>

<body class="login-page">

    <script src="../assets/plugins/jquery.maskedinput/src/jquery.maskedinput.js"></script>
    

    <!-- BEGIN login -->

    <div class="container-fluid">
        <div class="image row">

            <div class="col-md-7">
            </div>
            <div class="col-md-5">
                <main>
                    <div>
                        <div class="login-block">
                           <div class="px-lg-5 pb-lg-3 pb0 w-100 mb-auto">
                                <img src="../assets/img/LogoCACE.svg" class="img-fluid" id="logo" alt="">
                            </div>
                            <div class="login-content align-items-center">
                                <form id="form_login" action="#" method="POST" class="fs-13px">
                                    <div class=" d-md-flex justify-content-md-center mb-15px ">
                                        <span class="input-group-text">
                                            <ion-icon name="person-sharp" class="fa-1x fa-fw float-start me-2px">
                                            </ion-icon>
                                        </span>
                                        <input type="text" name="nusuario" id="nusuario"
                                            class="form-control textbox d-block h-45px w-50 btn-lg fs-14px"
                                            placeholder="Usuario" id="usuario" />
                                    </div>
                                    <div class=" d-md-flex justify-content-md-center mb-15px ">
                                        <span class="input-group-text">
                                            <ion-icon name="lock-closed-sharp" class="fa-1x fa-fw float-start me-2px">
                                            </ion-icon>
                                        </span>
                                        <input type="password"
                                            class="form-control textbox d-block h-45px w-50 btn-lg fs-14px"
                                            placeholder="Contraseña" name="contrase" id="contrase"
                                            autocomplete="password" />
                                    </div>
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-center mb-15px ">
                                        <input class="form-check-input" type="checkbox" value="1" id="Recuerdame" />
                                        <label class="form-check-label" for="Recuerdame">
                                            Recuerdame
                                        </label>
                                    </div>
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-center mb-15px ">
                                        <button type="submit"
                                            class="btn btn-success btn-primary d-block h-45px w-50 btn-lg fs-14px">Iniciar
                                            Sesión</button>
                                    </div>
                                    <div class="mb-15px text-center text-dark">
                                        <!--  pb-40px -->
                                        ¿No tienes una cuenta? Selecciona <a href="registro.php" data-toggle="ajax"
                                            class="text-primary">Aquí</a> para Registrarte.
                                    </div>
                                    <hr class="bg-gray-600 opacity-2 b-logbox m-4" /> <!-- BARRITA ABAJO-->
                                    <div class="text-gray-600 text-center mb-0">
									    &copy; CACCE 2023
								    </div>
                                </form>
                            </div>
                            <!-- END login-content -->
                        </div>
                        <!-- END login-container -->
                    </div>

                </main>
            </div>
        </div>
    </div>

    <!-- END resumen -->

    <div class="bg-dark mt-0">
        <footer class="textResponsive">
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
    </div>


    

<script src="./js/login.js"></script>

</html>