<?php

/**----ARCHIVO CON FUNCION DE LLENADO DE TODAS LOS SELECT MULTIPLES QUE ACOMPAÑAN LOS FORMULARIOS DE INGRESOS----**/

require '../clases/class_base.php';

session_start();
switch ($_GET['funcion']) {
    
    case 'agregar_roles_congreso':
        agregar_roles_congreso();
        break;
    case 'tematicas_trabajo':
        tematicas_trabajo();
        break;
    
}


/*Instancia que viene de la clase_Congreso,funcion select_roles_congreso */
function agregar_roles_congreso() {
    require '../clases/clase_Congreso.php';
    $obj = new Congreso();
    $obj = $obj->select_roles_congreso();
    $html = "";
    foreach ($obj as $value) {
        $html .= "<option value='".$value['id_rol_pk']."' id='rolid".$value['id_rol_pk']."'>".$value['nombre_rol']."</option>";
    }
    echo $html;
}

function tematicas_trabajo() {
    require '../clases/class_trabajos.php';
    $obj = new trabajo();
    $obj = $obj->selecttematicas();
    $html = "";
    foreach ($obj as $value) {
        $html .= "<option value='".$value['id_tematica_pk']."' id='".$value['id_tematica_pk']."'>".$value['nombre_tematica']."</option>";
    }
    echo $html;
}