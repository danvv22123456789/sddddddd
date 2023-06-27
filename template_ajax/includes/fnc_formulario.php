<?php

$formulario= filter_input(INPUT_GET,'formulario');

switch ($formulario) {
    case 'form_login':
        logear();
        break;
    case 'form_registro':
        registrar();
        break;
    case 'veri_tiempo':
        veri_tiempo();
        break;  
    }
    

/* Función para el inicio de sesión del usuario*/
function logear()
{
    require '../clases/class_usuario.php';
    $usuario = new usuario();
    $idusuario = "";
    $nusuario = filter_input(INPUT_POST,'nusuario');
    $contrasenia = filter_input(INPUT_POST,'contrase');  
    $rol = "";
    $img = "";
    $cprincipal = "";    
    $usuario ->uinicializar($idusuario, $nusuario, $contrasenia, $img, $cprincipal,NULL,NULL);
    $verificador=$usuario ->login();
    if($verificador!=0)
    {
        $usuario ->inicio_sesion();
        echo  veri_tiempo();
        
    }else{
        echo 0;
    };
    
}

function veri_tiempo(){

    //    session_start();      
        $ahorita = new DateTime();  
        $hoy = $_SESSION['hoy'];
    //    print_r($hoy);
    //    print_r($ahorita);
        $ahora = $ahorita->diff($hoy);
    //    print_r($ahora);
        $hora = ($ahora->h)*3600;
        $min = ($ahora->i)*60;
        $seg =  ($ahora->s);
        $diff = $hora+$min+$seg;
        if($diff<=300)
        {
            $_SESSION['hoy'] = $ahorita;
            return 1;
        }else{
            return 0;
        }
    }

    function registrar()
    {require '../clases/class_persona.php';
        $nombres = explode(" ", filter_input(INPUT_POST,'nombres'));
        $apellidos = explode(" ", filter_input(INPUT_POST,'apellidos'));
        $pnombre = $nombres[0];
        if(isset($nombres[1]))
        {
            $snombre = $nombres[1];
        }else{
            $snombre = " ";
        }
        $papellido = $apellidos[0];
        if(isset($apellidos[1]))
        {
            $sapellido = $apellidos[1];
        }else{
            $sapellido = " ";
        }    
        session_start();
        $correo = array("principal" => filter_input(INPUT_POST,'cprincipal'), "alterno" => filter_input(INPUT_POST,'calterno'),);
        $tprincipal = filter_input(INPUT_POST,'tprincipal');
        $pais = filter_input(INPUT_POST,'pais');    
        $tidentificacion = filter_input(INPUT_POST,'tidentificacion');
        $identificacion = filter_input(INPUT_POST,'identificacion');
        $tpersona = filter_input(INPUT_POST,'tpersona');
        $talimentacion = filter_input(INPUT_POST,'talimentacion');
        $nusuario = filter_input(INPUT_POST,'nusuario');
        $contrasenia = filter_input(INPUT_POST,'contrase');    
        $idioma=filter_input(INPUT_POST,'idioma'); 
        $rol = filter_input(INPUT_POST,'tparticipacion'); 
        
        $institucion = NULL;
        $facultad = NULL;
        
        if (isset($_POST['institucion']))
        {
            $institucion = filter_input(INPUT_POST,'institucion');
        }else{
            $facultad = filter_input(INPUT_POST,'facultad');
        }
        $persona=new persona();
        $trabaja=0;
        if($tpersona==2 || $tpersona==4 || $tpersona==6){
            $trabaja=1;
        }
            
        $persona ->pinicializar('NULL', $pnombre, $snombre, $papellido, $sapellido, $correo, $tprincipal, $tidentificacion, $pais,$identificacion, $tpersona, $talimentacion,$nusuario,$contrasenia,$idioma,$institucion,$facultad,$trabaja);
        $idpersona = $persona -> registro();

        $telefono = $persona -> asignar_telefono($idpersona);    
        $correos = $persona -> asignar_correo($idpersona); 
    
        
        $idusuario = $persona -> crear_usuario($idpersona);
        $usuario = new usuario();
        $img="img/users/usuario.png";
        $usuario ->uinicializar($idusuario, $nusuario, $contrasenia, $img,filter_input(INPUT_POST,'cprincipal'),$rol,'');

        $asignacion = $usuario ->asignar_usuarioxrolxcongreso();

    //    echo $idpersona."inst".$telefono."inst".$idusuario."inst".$correos."inst".$asignacion."inst".$pinstitucion;

        if($idpersona!=0 &&$telefono!=0 && $idusuario!=0 && $correos!=0 && $asignacion!=0)
        {
            echo 1;
        }else{
            echo 0;
        }   
    
    }
