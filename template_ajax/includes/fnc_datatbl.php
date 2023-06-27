<?php
require '../clases/class_base.php';

session_start();
//print_r($_POST);
//print_r($_SESSION);
$funcion= filter_input(INPUT_GET,'caso');
switch ($funcion) {
    case 'datatbl_congresos':
        datatbl_congresos();
        break;
    case 'datatbl_lineas_investigacion':
        datatbl_lineas_investigacion();
        break;
    case 'datatbl_certificados':
        datatbl_certificados();
        break;
    case 'datatbl_tematicas_investigacion':
        datatbl_tematicas_investigacion();
       break;
    case 'datatbl_tbl_tours':
        datatbl_tbl_tours();
       break;
    case 'datatbl_tbl_inscripcion':
        datatbl_tbl_inscripcion();
        break;
    case 'datatl_usuarios_para_administrador':
        datatl_usuarios_para_administrador(); 
        break;
    case 'datatbl_tbl_espacios':
        datatbl_tbl_espacios(); 
        break;
    case 'datatbl_tbl_actividades':
         datatbl_tbl_actividades(); 
        break;
    case 'datatbl_tbl_programa_creado':
        datatbl_tbl_programa_creado();  
       break;
    case 'datatbl_tbl_trabajos_subidos':
    datatbl_tbl_trabajos_subidos();  
    break;
    case 'datatbl_solicitudes_voluntarios':
        datatbl_solicitudes_voluntarios();  
        break;
     case 'datatbl_inscribir_voluntario':
        datatbl_inscribir_voluntario();  
         break;
    case 'datatbl_actividades_voluntarios':
        datatbl_actividades_voluntarios();  
         break;
    case 'ultima_linea':
        devolver_ultima_linea();
        break;
    case 'ultima_tematica':
        devolver_ultima_tematica();
        break;
    case 'linea_modificar':
        linea_modificar();
        break;
    case 'tematica_modificar':
        tematica_modificar();
        break;
  
    case 'ultimo_congreso':
        ultimo_congreso();
        break;
    case 'datatbl_resumenes_subidos':
        datatbl_tbl_resumenes_subidos();
        break;
    case 'datatbl_trabajos_ep':
        datatbl_tbl_trabajos_ep();
        break;
    case 'datatbl_dictaminar_trabajos_ep':   //OBED
        datatbl_tbl_dictaminar_trabajos_ep();
        break;
    case 'datatbl_premio_a_trabajo':
        datatbl_tbl_premio_a_trabajo();
        break;
    case 'datatbl_trabajos_epseccion':
        datatbl_tbl_trabajos_epseccion();
        break;
    case 'datatbl_dictaminar_trabajos_eps':
        datatbl_tbl_dictaminar_trabajos_eps();
        break;
    case 'datatbl_trabajos_ess':
        datatbl_tbl_trabajos_ess();
         break;
    case 'datatbl_form_tem':
        datatbl_tbl_form_tem();
        break;
    case 'datatbl_editar_form':
        datatbl_tbl_editar_form();
        break;
        
 
}


function datatbl_solicitudes_traductores() {
    require "../clases/class_solicitud.php";
    $obj = new solicitud();
    $json   =   $obj->json_sol_idioma();
    echo $json;
}

function datatbl_congresos() {
       require "../clases/clase_Congreso.php";
       $obj = new Congreso();
       $congresos   =   $obj->mostrarCongresos(); 
       $arreglo = array();
       if($arreglo  == 0) {
           echo '{
                  "sEcho": 1,
                  "iTotalRecords": "0",
                  "iTotalDisplayRecords": "0",
                  "aaData": []
                }';
       }
       else {
           foreach ($congresos as  $data) {
             $arreglo["data"][] = $data;
           }
          echo json_encode($arreglo);
       }
    
   
}

function datatbl_lineas_investigacion() {
    require "../clases/class_lineainvestigacion.php";
    $obj = new Lineainvestigacion();

    //require_once '../funciones/funcion_traducir.php';
   // $id_congreso = filter_input(INPUT_GET, 'id_congreso');
    $lineas   =   $obj->mostrarLineasInvestigacion(); 
    //echo $id_congreso;           
    $arreglo = array();
    if($arreglo == 0) {
        echo '{
               "sEcho": 1,
               "iTotalRecords": "0",
               "iTotalDisplayRecords": "0",
               "aaData": []
             }';
    }
    else {
        foreach ($lineas as  $data) {
          $arreglo["data"][] = $data;
        }
       echo json_encode($arreglo);
    }
    
}

function datatbl_tematicas_investigacion() {
    require "../clases/class_tematica.php";
    $obj = new Tematica();
    $tematicas   =   $obj->mostrarTematicas(); 
    $arreglo = array();
    if($arreglo  == 0) {
        echo '{
               "sEcho": 1,
               "iTotalRecords": "0",
               "iTotalDisplayRecords": "0",
               "aaData": []
             }';
    }
    else {
        foreach ($tematicas as  $data) {
          $arreglo["data"][] = $data;
        }
       echo json_encode($arreglo);
    }
}


function datatbl_certificados() {
    require "../clases/class_certificados.php";
    $obj = new certificados();
    $certificados   =   $obj->mostrarCertificado();
    $arreglo = array();
    if($arreglo  == 0) {
        echo '{
               "sEcho": 1,
               "iTotalRecords": "0",
               "iTotalDisplayRecords": "0",
               "aaData": []
             }';
    }
    else {
        foreach ($certificados as  $data) {
          $arreglo["data"][] = $data;
        }
       echo json_encode($arreglo);
    }
 

}
function datatbl_tbl_tours() {
    require "../clases/class_factura.php";
    $obj = new factura();
    $mostrar_tour = $obj->mostrarfacturas();
    $arreglo = array();
    if($arreglo  == 0) {
        echo '{
               "sEcho": 1,
               "iTotalRecords": "0",
               "iTotalDisplayRecords": "0",
               "aaData": []
             }';
    }
    else {
        foreach ($mostrar_tour as  $data) {
          $arreglo["data"][] = $data;
        }
       echo json_encode($arreglo);
    }
 

}
function datatbl_tbl_inscripcion() {
    require "../clases/class_factura.php";
    $obj = new factura();
    $mostrar_articulos = $obj->mostrararticulos();
    $arreglo = array();
    if($arreglo  == 0) {
        echo '{
               "sEcho": 1,
               "iTotalRecords": "0",
               "iTotalDisplayRecords": "0",
               "aaData": []
             }';
    }
    else {
        foreach ($mostrar_articulos as  $data) {
          $arreglo["data"][] = $data;
        }
       echo json_encode($arreglo);
    }
 

}
function datatbl_usuarios_para_administrador() {
    require "../clases/clase_Congreso.php";
    $idcongreso = filter_input(INPUT_POST, "id_congreso_pk");
    $obj = new Congreso();
    $obj->cinicializar3($idcongreso, $_SESSION['idusuario']);
    $json   =   $obj->json_usuarios_congreso();
    echo $json;
}

function datatbl_tbl_espacios() {
    require "../clases/class_programa.php";
    $obj = new programa();
    $datos   =   $obj->tbl_espacios_creados();
    $arreglo = array();
    if($arreglo  == 0) {
        echo '{
               "sEcho": 1,
               "iTotalRecords": "0",
               "iTotalDisplayRecords": "0",
               "aaData": []
             }';
    }
    else {
        foreach ($datos as  $data) {
          $arreglo["data"][] = $data;
        }
       echo json_encode($arreglo);
    }
 
}
function datatbl_tbl_actividades() {
 
    require "../clases/class_programa.php";
    $obj = new programa();
    $datos   =   $obj->tbl_actividades();
    $arreglo = array();
    if($arreglo  == 0) {
        echo '{
               "sEcho": 1,
               "iTotalRecords": "0",
               "iTotalDisplayRecords": "0",
               "aaData": []
             }';
    }
    else {
        foreach ($datos as  $data) {
          $arreglo["data"][] = $data;
        }
       echo json_encode($arreglo);
    }
 

}
function datatbl_tbl_programa_creado() {
 
    require "../clases/class_programa.php";
    $obj = new programa();
    $programa_creado = $obj->tbl_programacreado();
    $arreglo = array();
    if($arreglo  == 0) {
        echo '{
               "sEcho": 1,
               "iTotalRecords": "0",
               "iTotalDisplayRecords": "0",
               "aaData": []
             }';
    }
    else {
        foreach ($programa_creado as  $data) {
          $arreglo["data"][] = $data;
        }
       echo json_encode($arreglo);
    }
 

}

function datatbl_tbl_trabajos_subidos() {
 
    require "../clases/class_trabajos.php";
    $obj = new trabajo();
    $datos =  $obj->tbl_trabajos_subidos();
    $arreglo = array();
    if($arreglo  == 0) {
        echo '{
               "sEcho": 1,
               "iTotalRecords": "0",
               "iTotalDisplayRecords": "0",
               "aaData": []
             }';
    }
    else {
        foreach ($datos as  $data) {
          $arreglo["data"][] = $data;
        }
       echo json_encode($arreglo);
    }
 

}


function datatbl_solicitudes_voluntarios() {
 
    require "../clases/class_usuario.php";
    $obj = new voluntario();
    $datos = $obj->tbl_solicitudes_voluntarios();
    $arreglo = array();
    if($arreglo  == 0) {
        echo '{
               "sEcho": 1,
               "iTotalRecords": "0",
               "iTotalDisplayRecords": "0",
               "aaData": []
             }';
    }
    else {
        foreach ($datos as  $data) {
          $arreglo["data"][] = $data;
        }
       echo json_encode($arreglo);
       
    }
 

}

function datatl_usuarios_para_administrador() {

require "../clases/class_trabajos.php";
    $obj = new trabajo();
    $datos = $obj->mostrar_trabajos_subidos_eg($id_congreso);
 

    $arreglo = array();
    if($arreglo  == 0) {
        echo '{
               "sEcho": 1,
               "iTotalRecords": "0",
               "iTotalDisplayRecords": "0",
               "aaData": []
             }';
    }
    else {
        foreach ($datos as  $data) {
          $arreglo["data"][] = $data;
        }
       echo json_encode($arreglo);
       
    }

}

function datatbl_inscribir_voluntario() {
 
    require "../clases/class_usuario.php";
    $obj = new voluntario();
    $datos = $obj->tbl_solicitudes_voluntarios();
 

    $arreglo = array();
    if($arreglo  == 0) {
        echo '{
               "sEcho": 1,
               "iTotalRecords": "0",
               "iTotalDisplayRecords": "0",
               "aaData": []
             }';
    }
    else {
        foreach ($datos as  $data) {
          $arreglo["data"][] = $data;
        }
       echo json_encode($arreglo);
       
    }



}
function datatbl_actividades_voluntarios() {
    require "../clases/class_usuario.php";
    $obj = new  voluntario();
    $datos = $obj->tbl_tarea_voluntario();
    

        $arreglo = array();
        if($arreglo  == 0) {
            echo '{
                "sEcho": 1,
                "iTotalRecords": "0",
                "iTotalDisplayRecords": "0",
                "aaData": []
                }';
        }
        else {
            foreach ($datos as  $data) {
            $arreglo["data"][] = $data;
            }
        echo json_encode($arreglo);
        
        }


    
    //$voluntarios = $obj->tbl_actividades_voluntarios();
    
    /*
    foreach ($voluntarios as $voluntario){
        //$nombre_persona = $voluntario['primer_nombre']." ".$voluntario['segundo_nombre']." ".$voluntario['primer_apellido']." ".$voluntario['segundo_apellido'] ;
        $id_voluntario = $voluntario['id_voluntario_pk'] ; 
        
            $actividades_mostar = ""; 
            
            $actividades_voluntarios = $obj->actividades_voluntarios($id_voluntario);
            $total = $actividades_voluntarios;
            
            if($total != ""){
                foreach ($actividades_voluntarios as $actividades){
                    $actividades_mostar .="<li>".$actividades['nombre_tarea']." </li><br> "  ;
                }
            }else{
                $actividades_mostar= "no_actividad" ;
            }
        }*/
        /*
        $arreglo = array();
        if($arreglo  == 0) {
            echo '{
                "sEcho": 1,
                "iTotalRecords": "0",
                "iTotalDisplayRecords": "0",
                "aaData": []
                }';
        }
        else {
            foreach ($voluntarios as  $data) {
                $arreglo["data"][] = $data;

                $id_voluntario = $data['id_voluntario_pk'] ; 
                $actividades_mostar = "";
                $actividades_voluntarios = $obj->actividades_voluntarios($id_voluntario);
                $total = $actividades_voluntarios;
                if($total != ""){
                    foreach ($actividades_voluntarios as $actividades){
                        $actividades_mostar .="<li>".$actividades['nombre_tarea']." </li><br> "  ;
                    }
                }else{
                    $actividades_mostar= "no_actividad" ;
                }

            }
            $arreglo["nombre_tarea"]["tarea"] = $actividades_mostar;
            echo json_encode($arreglo);
        
        }*/
}

function devolver_ultima_linea() {
    global  $bdd;
    $bdd =  new basedatos();
    $datos = $bdd->select("SELECT  * FROM `tbl_linea_investigacion` WHERE 1=1 ORDER BY `id_linea_investigacion_pk` DESC LIMIT 1 ");
    foreach ($datos as  $data) {
        $arreglo["data"][] = $data;
    }
    echo json_encode($arreglo);
}

function linea_modificar() {
    global  $bdd;
    $bdd =  new basedatos();
    $id = filter_input(INPUT_POST, 'id');
    $datos = $bdd->select("SELECT  * FROM `tbl_linea_investigacion` WHERE id_linea_investigacion_pk =".$id);
    $arreglo = array();
    foreach ($datos as  $data) {
          $arreglo["data"][] = $data;
    }
       echo json_encode($arreglo);
}

function tematica_modificar() {
    global  $bdd;
    $bdd =  new basedatos();
    $id = filter_input(INPUT_POST, 'id');
    $datos = $bdd->select("SELECT a.id_tematica_pk, a.nombre_tematica, b.id_linea_investigacion_pk, b.nombre_linea_investigacion, a.abreviacion, a.descripcion_tematica, a.comentarios
                           FROM tbl_tematica a, tbl_linea_investigacion b, tbl_congreso_linea_investigacion c
                           WHERE a.id_linea_investigacion_fk = b.id_linea_investigacion_pk AND
                                 b.id_linea_investigacion_pk = c.id_linea_investigacion_pk AND
                                 c.id_congreso_pk = ".$_SESSION['idcongreso']." AND a.id_tematica_pk=".$id."");
    //$arreglo = array();
    foreach ($datos as  $data) {
          $arreglo["data"][] = $data;
    }
       echo json_encode($arreglo);
}

function devolver_ultima_tematica() {
    global  $bdd;
    $bdd =  new basedatos();
    $datos = $bdd->select("SELECT a.id_tematica_pk, a.nombre_tematica, b.id_linea_investigacion_pk, b.nombre_linea_investigacion, a.abreviacion, a.descripcion_tematica, a.comentarios
                           FROM tbl_tematica a, tbl_linea_investigacion b, tbl_congreso_linea_investigacion c
                           WHERE a.id_linea_investigacion_fk = b.id_linea_investigacion_pk AND
                                 b.id_linea_investigacion_pk = c.id_linea_investigacion_pk AND
                                 c.id_congreso_pk = ".$_SESSION['idcongreso']." ORDER BY `id_tematica_pk` DESC LIMIT 1 ");
    foreach ($datos as  $data) {
        $arreglo["data"][] = $data;
    }
    echo json_encode($arreglo);
}

function ultimo_congreso() {
    require "../clases/clase_Congreso.php";
    $congreso   =   new Congreso();
    echo $congreso->json_ultimo_congreso();
    
}

function datatbl_tbl_resumenes_subidos() {
 
    require "../clases/class_trabajos.php";
    $obj = new trabajo();
    $datos =  $obj->tbl_resumenes_subidos();
    $arreglo = array();
    if($arreglo  == 0) {
        echo '{
               "sEcho": 1,
               "iTotalRecords": "0",
               "iTotalDisplayRecords": "0",
               "aaData": []
             }';
    }
    else {
        foreach ($datos as  $data) {
          $arreglo["data"][] = $data;
        }
       echo json_encode($arreglo);
    }
 

}

function datatbl_tbl_trabajos_ep() {
 
    require "../clases/class_trabajos.php";
    //$idcongreso = $_SESSION['idcongreso'];
    $obj = new trabajo();
    $datos =  $obj->mostrar_tbl_trabajos_ep();

    $arreglo = array();

 


    if($arreglo  == 0) {
        echo '{
               "sEcho": 1,
               "iTotalRecords": "0",
               "iTotalDisplayRecords": "0",
               "aaData": []
             }';
    }
    else {
        foreach ($datos as  $data) {
          $arreglo["data"][] = $data;
        }
       echo json_encode($arreglo);
    }
}


function datatbl_tbl_dictaminar_trabajos_ep() {
 
    require "../clases/class_trabajos.php";
    //$idcongreso = $_SESSION['idcongreso'];
    $obj = new trabajo();
    $datos =  $obj->mostrar_tbl_dictaminar_trabajos_ep();

    $arreglo = array();

 


    if($arreglo  == 0) {
        echo '{
               "sEcho": 1,
               "iTotalRecords": "0",
               "iTotalDisplayRecords": "0",
               "aaData": []
             }';
    }
    else {
        foreach ($datos as  $data) {
          $arreglo["data"][] = $data;
        }
       echo json_encode($arreglo);
    }
}

function datatbl_tbl_premio_a_trabajo() {
 
    require "../clases/class_trabajos.php";
    //$idcongreso = $_SESSION['idcongreso'];
    $obj = new trabajo();
    $datos =  $obj->mostrar_tbl_premio_a_trabajo();

    $arreglo = array();

 


    if($arreglo  == 0) {
        echo '{
               "sEcho": 1,
               "iTotalRecords": "0",
               "iTotalDisplayRecords": "0",
               "aaData": []
             }';
    }
    else {
        foreach ($datos as  $data) {
          $arreglo["data"][] = $data;
        }
       echo json_encode($arreglo);
    }
}



function datatbl_tbl_trabajos_epseccion() {
 
    require "../clases/class_trabajos.php";
    //$idcongreso = $_SESSION['idcongreso'];
    $obj = new trabajo();
    $datos =  $obj->mostrar_tbl_trabajos_epseccion();

    $arreglo = array();


    if($arreglo  == 0) {
        echo '{
               "sEcho": 1,
               "iTotalRecords": "0",
               "iTotalDisplayRecords": "0",
               "aaData": []
             }';
    }
    else {
        foreach ($datos as  $data) {
          $arreglo["data"][] = $data;
        }
       echo json_encode($arreglo);
    }
}



function datatbl_tbl_dictaminar_trabajos_eps() {
 
    require "../clases/class_trabajos.php";
    //$idcongreso = $_SESSION['idcongreso'];
    $obj = new trabajo();
    $datos =  $obj->mostrar_tbl_dictaminar_trabajos_eps();

    $arreglo = array();


    if($arreglo  == 0) {
        echo '{
               "sEcho": 1,
               "iTotalRecords": "0",
               "iTotalDisplayRecords": "0",
               "aaData": []
             }';
    }
    else {
        foreach ($datos as  $data) {
          $arreglo["data"][] = $data;
        }
       echo json_encode($arreglo);
    }
}


function datatbl_tbl_trabajos_ess() {
 
    require "../clases/class_trabajos.php";
    //$idcongreso = $_SESSION['idcongreso'];
    $obj = new trabajo();
    $datos =  $obj->mostrar_tbl_trabajos_ess();

    $arreglo = array();


    if($arreglo  == 0) {
        echo '{
               "sEcho": 1,
               "iTotalRecords": "0",
               "iTotalDisplayRecords": "0",
               "aaData": []
             }';
    }
    else {
        foreach ($datos as  $data) {
          $arreglo["data"][] = $data;
        }
       echo json_encode($arreglo);
    }
}



function datatbl_tbl_form_tem() {
 
    require "../clases/class_formulario.php";
    //$idcongreso = $_SESSION['idcongreso'];
    $obj = new formulario();
    $datos =  $obj->mostrar_form_asociar();

    $arreglo = array();


    if($arreglo  == 0) {
        echo '{
               "sEcho": 1,
               "iTotalRecords": "0",
               "iTotalDisplayRecords": "0",
               "aaData": []
             }';
    }
    else {
        foreach ($datos as  $data) {
          $arreglo["data"][] = $data;
        }
       echo json_encode($arreglo);
    }
}


function datatbl_tbl_editar_form() {
 
    require "../clases/class_formulario.php";
    //$idcongreso = $_SESSION['idcongreso'];
    $obj = new formulario();
    $datos =  $obj->mostrar_editar_form();

    $arreglo = array();


    if($arreglo  == 0) {
        echo '{
               "sEcho": 1,
               "iTotalRecords": "0",
               "iTotalDisplayRecords": "0",
               "aaData": []
             }';
    }
    else {
        foreach ($datos as  $data) {
          $arreglo["data"][] = $data;
        }
       echo json_encode($arreglo);
    }
}

?>
