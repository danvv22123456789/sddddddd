<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../clases/class_base.php';

switch ($_GET['funcion']) {

    case 'pais':
        slc_pais();
        break;
    case 'tpersona':   //Tipo Persona
        tpersona();
        break;
    case 'tidentificacion':
        slc_tidentificacion();
        break;
    case 'talimentacion':
        slc_talimentacion();
         break; 
    case 'congreso': //OBED form subir trabajo
        slc_congreso();
        break;
    case 'roles_congreso':
        roles_congreso();
        break;
        case 'tselectpersona':   //Tipo Persona
            slc_tpersonas();
            break;
}

function slc_pais() {
    global $bdd;

    $bdd = new basedatos();
    $datos = $bdd->select("select * from tbl_pais where 1=1");
    $html = "<option value='0'>País procedencia</option>";
    foreach ($datos as $fila) {
        $pais = explode(';', $fila['nombre_pais']);
        $html .= "<option value='" . $fila['id_pais_pk'] . "'>" . $pais[1] . "</option>";
    }
    echo $html;
}

function slc_tpersonas() {

    global $bdd;

    $bdd = new basedatos();
    $datos = $bdd->select("select * from tbl_tipo_persona where 1=1");
    $html = "<option value='0'>Tipo persona</option>";

    foreach ($datos as $fila) {
        $html .= "<option value='" . $fila['id_tipo_persona_pk'] . "'>" . $fila['nombre_tipo_persona'] . "</option>";
    }
    echo $html;
}

function slc_tidentificacion() {
    global $bdd;

    $bdd = new basedatos();
    $datos = $bdd->select("select * from tbl_tipo_identificacion where 1=1");
    $html = "<option value='0'>Tipo identificación</option>";

    foreach ($datos as $fila) {
        $html .= "<option value='" . $fila['id_tipo_identificacion_pk'] . "'>" . $fila['nombre_tipo_identificacion'] . "</option>";
    }
   
    echo $html;
}

function slc_talimentacion() {

    global $bdd;

    $bdd = new basedatos();
    $datos = $bdd->select("select * from tbl_tipo_alimentacion where 1=1");
    $html = "<option value='0'>Tipo alimentación</option>";

    foreach ($datos as $fila) {
        $html .= "<option value='" . $fila['id_tipo_alimentacion_pk'] . "'>" . $fila['nombre_tipo_alimentacion'] . "</option>";
    }
    
    echo $html;
}

function slc_congreso() {

    global $bdd;

    $bdd = new basedatos();
    $datos=$bdd->select("select * from tbl_congreso where 1=1 and id_estado_congreso_fk > 0");
    $html="<option value='0'>Congreso</option>";

    foreach ($datos as $fila) {
        $html .= "<option value='" . $fila['id_congreso_pk'] . "'>" . $fila['nombre_congreso'] . "</option>";
    }
    echo $html;
}

function roles_congreso(){
    global $bdd;
    if(isset($_POST['congreso']))
    {
        $congreso=filter_input(INPUT_POST,'congreso');
    }else{
        session_start();        
        $congreso = $_SESSION['idcongreso'];
    }
    $bdd = new basedatos();
    $datos=$bdd->select("select a.nombre_rol,  b.tbl_rol_congreso_pk, b.id_rol_fk from tbl_roles a, tbl_roles_congreso b, tbl_congreso c
                        where a.id_rol_pk=b.id_rol_fk and b.id_congreso_fk=c.id_congreso_pk and c.id_estado_congreso_fk and b.id_congreso_fk=".$congreso."");
    $html="<option value='0'>seleccione</option>";

    foreach ($datos as $fila)
    {
        if($fila['id_rol_fk']!=1){
            $html.="<option value='".$fila['tbl_rol_congreso_pk']."'>".$fila['nombre_rol']."</option>";
        }
    }
    echo $html;    
}

function tpersona(){
    $html="";
    include '../clases/class_base.php';
switch ($_POST['tpersona']) {

    case 1:  
    case 2:  
    case 3:         
        $bdd = new basedatos();
        $datos=$bdd->select("select a.id_institucion_facultad_carrera, b.* from tbl_institucion_facultad_carrera a
                            join tbl_carrera b on b.id_carrera_pk = a.id_carrera_fk
                            where a.id_institucion_fk = 1 order by b.nombre_carrera");
        $html="<option value='0'>Seleccione</option>";

        foreach ($datos as $fila)
        {

                $html.="<option value='".$fila['id_institucion_facultad_carrera']."'>".$fila['nombre_carrera']."</option>";
        }
        break;
    case 4:  
    case 5:
    case 6: 
        $bdd = new basedatos();
        $datos=$bdd->select("select * from tbl_institucion where id_institucion_pk!=1");
        $html="<option value='0'>Seleccione </option>";

        foreach ($datos as $fila)
        {

                $html.="<option value='".$fila['id_institucion_pk']."'>".$fila['nombre_institucion']."</option>";

        }
        break;        
}

        echo $html;            
    
    
}

