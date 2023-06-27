<?php
require '../clases/class_base.php';
session_start();


$funcion = filter_input(INPUT_GET, 'caso');
switch ($funcion) {

    case 's_revision':
        tabs_srevision();
        break;
    case 'interes':
        interes();
        break;
    case 'irevisores':
        tabs_gestion_roles(6);
        break; 
    case 'ieditores_gestores':
        tabs_gestion_roles(7);
        break; 
    case 'ieditores_principales':
        tabs_gestion_roles(10);
        break; 
    case 'ieditores_pseccion':
        tabs_gestion_roles(8);
        break; 
    case 'ieditores_sseccion':
        tabs_gestion_roles(9);
        break; 
    case 'iencargado_programa':
        tabs_gestion_roles(11);
        break; 
    case 'iencargado_vol':
        tabs_gestion_roles(12);
        break;  
    
    // case 'intereses_revisor':
    //     intereses_revisor();
    //     break;
}

function tabs_srevision()
{ //Solicitudes para ser revisor
    require '../clases/class_usuario.php';
    $obj = new usuario();
    
    $datos = $obj->tabs_srevision();
    $arreglo = array();
    if ($arreglo == 0) {
        echo '{
               "sEcho": 1,
               "iTotalRecords": "0",
               "iTotalDisplayRecords": "0",
               "aaData": []
             }';
    } else {
        foreach ($datos as  $data) {
          
            $arreglo["data"][] = $data;
        }
        echo json_encode($arreglo);
    }

}



function interes()
{

    require '../clases/class_usuario.php';
    $obj = new usuario();

    $datos = $obj->interes();
    $arreglo = array();
    if ($arreglo == 0) {
        echo '{
               "sEcho": 1,
               "iTotalRecords": "0",
               "iTotalDisplayRecords": "0",
               "aaData": []
             }';
    } else {
        foreach ($datos as  $data) {
            $arreglo["data"][] = $data;
        }
        echo json_encode($arreglo);
    }
}




function tabs_gestion_roles($id_rol){
    require '../clases/class_usuario.php';
    $obj = new usuario();

    $datos = $obj->tabs_gestion_roles($id_rol);
    $arreglo = array();
    if ($arreglo == 0) {
        echo '{
               "sEcho": 1,
               "iTotalRecords": "0",
               "iTotalDisplayRecords": "0",
               "aaData": []
             }';
    } else {
        foreach ($datos as  $data) {
            $arreglo["data"][] = $data;
        }
        echo json_encode($arreglo);
    }
    
}

