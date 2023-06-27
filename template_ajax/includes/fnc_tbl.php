<?php

/* * ----Archivo con funciones para llenar dinamicamente las tablas de una página----
 *
 * @author José L. Rodríguez
 * @copyright 2017
 * @version 1
 */

require '../clases/class_base.php';
//require '../funciones/funcion_traducir.php';
session_start();
switch ($_POST['funcion']) {
    /*case 'tbl_congresos':
        tbl_congresos();
        break;
    case 'tbl_lineas_investigacion':
        tbl_lineas_investigacion();
        break;
    case 'tbl_tematica':
        tbl_tematica();
        break;*/
    case 'tbl_tours';
        tbl_tours();
        break;
    case 'tbl_articulos';
        tbl_articulos();
        break;
        
        case 'tbl_editar_form':
        tbl_editar_form();
        break;
        
        
    case 'tbl_certificados':   //OBED
        tbl_certificados();
        break;
    case 'tbl_espacios':
        tbl_espacios();
        break;
    case 'tbl_actividades':
        tbl_actividades();
        break;
    case 'tbl_programa_creado':
        tbl_programa_creado();
        break;

    case 'tbl_listas_actividades':
        tbl_listas_actividades();
        break;
    case 'tbl_actividades_voluntarios';
         tbl_actividades_voluntarios();
        break;
    case 'ver_revisiones':
        tbl_ver_revisiones();
    break;
}


function tbl_congresos()
{
    require "../clases/clase_Congreso.php";
    $contador = 1;
    $bdd = new Congreso();
    //$bdd =  new basedatos();
    $datos = $bdd->mostrarCongresos();
    $html = "<tbody>";
    foreach ($datos as $clave => $valor) {
        // $arreglo["data"][] = $datos;
        $html .= "<tr class='gradeA'>
                    <td>" . $contador . "</td>
                    <td>" . $valor['nombre_congreso'] . "</td>
                    <td>" . $valor['siglas'] . "</td>
                    <td>" . $valor['anio'] . "</td>
                    <td class='actions'>
                        <a href='#' class='hidden on-editing save-row'><i class='fa fa-save'></i></a>
                        <a href='#' class='hidden on-editing cancel-row'><i class='fa fa-times'></i></a>
                        <a href='#' class='on-default edit-row'><i class='fa fa-pencil'></i></a>
                        <a href='#' class='on-default remove-row'><i class='fa fa-trash-o'></i></a>
                    </td>
                    
                </tr>";
        $contador++;
    }
    $html .= "</tbody>";
    //echo json_encode($arreglo);
    echo $html;
    
}

function tbl_lineas_investigacion()
{
    require "../clases/class_lineainvestigacion.php";
    $contador = 1;

    $bdd = new Lineainvestigacion();
    $datos = $bdd->mostrarLineasInvestigacion();
    $contador = 1;
    $html = "<tbody >";
    foreach ($datos as $fila) {
        $html .= "<tr class='gradeX'>
                <td align='justify'>" . $contador . "</td>
                <td align='justify'>" . $fila['nombre_linea_investigacion'] . "</td>
                <td align='center'>" . $fila['descripcion_linea_investigacion'] . "</td>
                <td align='center'>" . $fila['comentarios'] . "</td>
                <td class='actions'  align='center'>
                <a href='#' class='on-default edit-row' title='@@cambiar_documento@@' onclick='cambiadoc(" . $fila['id_linea_investigacion_pk'] . ");' ><i class='fa fa-pencil'></i></a>  
                <a href='#' class='on-default remove-row' ><i class='fas fa-trash-alt' style='color:red'></i></a>                  
                </td></tr>";
        $contador++;
    }
    $html .= "</tbody>";

    echo $html;
}

function tbl_tematica()
{
    require "../clases/class_tematica.php";
    $contador = 1;
    $bdd = new Tematica();
    $datos  =   $bdd->mostrarTematicas();
    $html = "";

    foreach ($datos as $fila) {
        $html .= "<tr class='gradeA'>"
            . "<td align='center'>" . $contador . "</td>"
            . "<td align='center'>" . $fila['nombre_tematica'] . "</td>"
            . "<td align='center'>" . $fila['nombre_linea_investigacion'] . "</td>"
            . "<td align='center'>" . $fila['descripcion_tematica'] . "</td>"
            . "   <td class='actions'>
                <a href='#' class='on-default edit-row'><i class='fa fa-pencil'></i></a>
                <a href='#' class='on-default remove-row' ><i class='fas fa-trash-alt' style='color:red'></i></a>
            </td>>";
        $contador++;
    }


    echo $html;
}


function tbl_editar_form(){
    require "../clases/class_formulario.php";
    $obj = new formulario();
    $formulario   =   $obj->mostrar_editar_form(); 
    $idioma = $_SESSION['idioma'];
    $i = 1 ;  
    $html = "<tbody>";
    
     foreach ($formulario as $fila) {
        //print_r($formulario);
        $tematica_asociada =  " " ;
        $idformulario =  $fila['id_formulario_pk']; 
        $formulario_tematica   =   $obj->mostrar_editar_form_revision($fila['id_formulario_pk']);       
        $contar = $formulario_tematica ;
        if ($contar != 0){
            foreach ($formulario_tematica as $fila1) { 
                $tematica_asociada .= "<li>".$fila1['nombre_tematica']."</li><br>" ;
            }
        }else{
            $tematica_asociada = "@@sintematica@@";
        }   
        $html .= "<tr class='gradeX'>
               <td style='text-align: justify;'>".$i."</td>
               <td style='text-align: justify;'>".$fila['nombre_formulario']."</td>
               <td style='text-align: justify;'>".$fila['descripcion']."</td>
               <td style='text-align: justify;'>".$tematica_asociada."</td>    
               ";      
        $html.="<td style='background-color: #dae6ec;' align='center' width='2%'>   
        <button  title='@@editar_preguntas@@' class='on-default edit-row'  onclick='modal_editar_pcualitativas(".$idformulario.");' ><i class='md-mode-edit'></i></button>                         
       </td>
                </tr>";   
        $i++;
    }
    $i--;
    $html .= "</tbody>";
    $html .= "<tr class='alert alert-success'><td align='left' colspan='12'><p id='numeros' class='text-success'><strong  >@@totalform@@: ".$i."   </strong></p></td></tr></tbody>";
   //print_r($html);
    $html1 = traducirstring($html, '../idiomas/'.$idioma.'/'.$idioma.'.php');
    echo $html1;
}







function tbl_tours()
{
    require "../clases/class_factura.php";

    $obj = new factura();
    $mostrar_tour = $obj->mostrarfacturas();

    $contador = 1;
    $html = "<tbody >";

    foreach ($mostrar_tour as $fila) {

        $id_tour = $fila['id_tour_pk'];
        $html .= "<tr>
                        <td>" . $contador . "</td>
                        <td>" . $fila['nombre_tour'] . "</td>
                        <td>" . $fila['descripcion'] . "</td>
                        <td class='actions'>
                    <a href='#' class='on-default edit-row'><i class='fa fa-pencil'></i></a>
                    <a href='#' class='on-default remove-row' ><i class='fas fa-trash-alt' style='color:red'></i></a>
                        <td align='left' width='5%'><a  href='#'  class='on-default edit-row' title='@@modificar_tour@@' onclick='llenar_tour(" . $id_tour . ");' ><i class='md-mode-edit'></i></a> </td>
                    </tr>
                    ";
        $contador++;
    }

    $html .= "</tbody>";

    echo $html;

}


function tbl_articulos()
{
    require "../clases/class_factura.php";
    $obj = new factura();
    $mostrar_articulos = $obj->mostrararticulos();
    $contador = 1;
    $html = "<tbody >";

    foreach ($mostrar_articulos as $fila) {

        $id_costo = $fila['id_costo_pk'];
        $html .= "<tr>
                        <td>" . $contador . "</td>
                        <td>" . $fila['producto'] . "</td>
                        <td>" . $fila['descripcion'] . "</td>
                        <td align='left' width='5%'><a  href='#'  class='on-default edit-row' title='@@modificar_articulo@@' onclick='llenar_articulo(" . $id_costo . ");'><i class='fa fa-pencil'></i></a></td>
                    </tr>
                    ";
        $contador++;
    }

    $html .= "</tbody>";
    // $html1 = traducirstring($html, '../idiomas/es/es.php');
    echo $html;
}

function tbl_certificados()
{  //OBED
    $contador = 1;
    require "../clases/class_certificados.php";
    $obj = new certificados();
    $datos   =   $obj->mostrarCertificado();
    $html = "<tbody>";

    foreach ($datos as $fila) {

        $html .= "<tr class='gradeX '>
                   <td>" . $contador . "</td>
                   <td>" . $fila['nombre_certificado'] . "</td>
                   <td>" . $fila['motivo_certificado'] . "</td>
                     <td class='actions'  align='center'>
                        <a href='#' class='on-default edit-row' onclick='modificar_certificado(" . $fila['id_certificado_pk'] . ");' ><i class='fa fa-pencil'></i></a>
                        <a href='#' class='on-default remove-row' onclick='eliminar_certificado(" . $fila['id_certificado_pk'] . ");'><i class='fas fa-trash-alt' style='color:red'></i></i></a>
                    </td></tr>";
        $contador++;
    }

    $html .= "</tbody>";
    echo $html;
}



function tbl_espacios()
{
    $contador = 1;
    require "../clases/class_programa.php";
    $obj = new programa();
    $datos   =   $obj->tbl_espacios_creados();
    $html = "<tbody>";
    $filas = $datos;
    if ($filas != 0) {
        foreach ($datos as $fila) {
            $html .= "<tr class='gradeX'>
            <td style='text-align: justify;'>" . $contador . "</td>
               <td style='text-align: justify;'>" . $fila['nombre_espacio'] . "</td>
               <td style='text-align: justify;'>" . $fila['nombre_alternativo'] . "</td>
               <td style='text-align: center;'>" . $fila['capacidad_personas'] . "</td>    
               <td style='text-align: center;'>" . $fila['numero_tomacorriente'] . "</td>
               <td style='text-align: center;'><a href='./form/gestion_programa/mapas_espacio/" . $fila['mapa_espacio'] . "' target='_blank'><img style='border-radius: 20px 20px 20px 20px;-moz-border-radius: 20px 20px 20px 20px;-webkit-border-radius: 20px 20px 20px 20px;border: 4px; box-shadow: 0 0 3px 6px #fff, 0 0 25px;' src='./form/gestion_programa/mapas_espacio/" . $fila['mapa_espacio'] . "' width='100px' height='80px'></a></td>
                 <td class='actions'  align='center'>
                    <a href='#' class='on-default edit-row' title='@@editar_espacio@@' onclick='modificar_espacio(" . $fila['id_espacio_pk'] . ");' ><i class='fa fa-pencil'></i></a>
                    <a href='#' class='on-default remove-row' title='@@eliminar_espacio@@' onclick='eliminar_espacio(" . $fila['id_espacio_pk'] . ");'><i class='fas fa-trash-alt' style='color:red'></i></a>
                </td></tr>";
            $contador++;
        }
    } else {
        $html .= "<tr class='gradeX'>
                        <td colspan='7' style='text-align: center;'><h1 class='text-primary'>@@msj_no_tiene_espacios@@</h1></td>
                     </tr>";
    }
    $html .= "</tbody>";
    // $html1 = traducirstring($html, '../idiomas/es/es.php');
    echo $html;
}


function tbl_actividades()
{
    $contador = 1;
    //global  $bdd;
    require "../clases/class_programa.php";
    $obj = new programa();
    $datos   =   $obj->tbl_actividades();

    $html = "<tbody>";
    foreach ($datos as $fila) {
        $html .= "<tr class='gradeX'>
            <td style='text-align: justify;'>" . $contador . "</td>
            <td style='text-align: center;'>" . $fila['nombre_actividad'] . "</td>
            <td style='text-align: center;'>" . $fila['nombre'] . "</td>
            <td style='text-align: center;'>" . $fila['comentarios'] . "</td>
            <td style='text-align: center;'>" . $fila['hora_inicio'] . "</td> 
            <td style='text-align: center;'>" . $fila['hora_final'] . "</td>    
            <td class='actions'  align='center'>
                <a href='#' class='on-default edit-row' onclick='modificar_actividad(" . $fila['id_actividad_pk'] . ");' ><i class='fa fa-pencil'></i></a>
                <a href='#' class='on-default remove-row' onclick='eliminar_actividad(" . $fila['id_actividad_pk'] . ");'><i class='fa fa-trash-o'></i></a>
            </td></tr>";
        $contador++;
    }
    $html .= "</tbody>";
    echo $html;
}

function tbl_programa_creado()
{
    require "../clases/class_programa.php";
    $obj = new programa();
    $programa_creado = $obj->tbl_programacreado();
   
    $i = 0;
    $valor = 0;
    $j = 0;
    $array = array();

    /*Extraigo Programas creados*/
    foreach ($programa_creado as $fi) {
        $result = in_array($fi['id_programa_pk'], $array);
        if ($result == false) {
            $array['id_programa_pk' . $i] = $fi['id_programa_pk'];
            $array['nombre_programa' . $i] = $fi['nombre_programa'];
            $array['estado_programa' . $i] = $fi['estado_programa'];
            $i++;
        }
    }

    $html = "<tbody>";
    $cont = 1;

    for ($j = 0; $j < $i; $j++) {
        $html .= "<tr>"
            . "<td align='center'>" . $cont . "</td>"
            . "<td align='center'>" . strtoupper($array['nombre_programa' . $j]) . "</td>"
            . "<td align='center' >";
        foreach ($programa_creado as $fi) {
            if ($array['id_programa_pk' . $j] == $fi['id_programa_pk']) {
                $html .= "<li><b>" . $fi['nombre_actividad'] . "</b></li>";
            }
        }

        $html .= "<td class='actions'  align='center'>
                   <a href='#' class='on-default edit-row' onclick='modificar_programa(" . $array['id_programa_pk' . $j] . ");' ><i class='fa fa-pencil'></i></a>
                   <a href='#' class='on-default remove-row' onclick='eliminar_programa(" . $array['id_programa_pk' . $j] . ");'><i class='fa fa-trash-o'></i></a>
                   </td>
                   <td align='center'><div class='radio radio-success radio-inline'>
                    <input type='radio' id='radiop" . $array['id_programa_pk' . $j] . "' value='' name='radioInline' onclick='mostrar_opc_programa_s(" . $array['id_programa_pk' . $j] . ")' >
                    <label for='radiop" . $array['id_programa_pk' . $j] . "'></label>
                </div></td></tr>";
        $cont += 1;
    }
    $html .= "</tbody>";
    //  $html1 = traducirstring($html, "../idiomas/".$_SESSION["idioma"]."/".$_SESSION["idioma"].".php");
    echo $html;
}





function tbl_listas_actividades(){
    require "../clases/class_programa.php";
    $obj = new programa();
  

    $a=1;
    //$idcongreso = $_SESSION['idcongreso']; 
   // print_r($idcongreso);
   // $idioma = $_SESSION['idioma'];
    $actividades   =   $obj->listas_de_actividad(); 
    $acti= "";
    $html = "<tbody >" ;

    
    foreach($actividades as $fila){
        $idactividad = $fila['id_actividad_pk'];
        $nombre = $fila['nombre_actividad'];
         $acti .=  "<div class='radio radio-success'>
                                        <input id='$idactividad' name='activiadad' value='$idactividad' type='radio'>
                                        <label for='radios'>
                                            $nombre
                                        </label>
                                   </div>" . "<br>" ;
        
        $html .= "<tr class='gradeX'>
            <td style='text-align: justify;'>".$a.".</td>
            <td style='text-align: justify;'>".$acti."</td>
            <td style='text-align: justify;'>".$fila['fecha_actividad']."</td>
            <td style='text-align: justify;'>".$fila['nombre_espacio']."</td>
            
            </tr>";
        $a++;
        $acti= "";
    }
     $a--;
    $html .= "<tr class='alert alert-success'><td align='left' colspan='12'><p id='numeros' class='text-success'><strong  >@@nact@@:   ".$a."</strong></p></td></tr></tbody>";
    
    //$html1 = traducirstring($html, '../idiomas/'.$idioma.'/'.$idioma.'.php');
    echo $html;
}


function tbl_actividades_voluntarios(){
    require "../clases/class_usuario.php";
    $obj = new  voluntario();

    
    $contar = 1 ;
    $html = "<tbody >";
    
    $voluntarios = $obj->tbl_actividades_voluntarios();
    
    foreach ($voluntarios as $voluntario){
        $nombre_persona = $voluntario['primer_nombre']." ".$voluntario['segundo_nombre']." ".$voluntario['primer_apellido']." ".$voluntario['segundo_apellido'] ;
        $id_voluntario = $voluntario['id_voluntario_pk'] ; 
        
            $actividades_mostar = ""; 
            
            $actividades_voluntarios = $obj->actividades_voluntarios($id_voluntario);
            $total = $actividades_voluntarios;
            
            if($total != " "){
                foreach ($actividades_voluntarios as $actividades){
                    $actividades_mostar .="<li>".$actividades['nombre_tarea']." </li><br> "  ;
                }
            }else{
                $actividades_mostar= "@@no_actividad@@" ;
            }
            
        $html .= "<tr class='gradeA' id='revisor'  name='revisor' value='' >
                <td >".$contar."</td>
                <td align='justify'>".$nombre_persona."</td>
                <td align='justify'>".$actividades_mostar."</td>
                <td align='center' width='5%'><a  href='#'  class='on-default edit-row' title='@@asignar_actividad_voluntario@@' onclick='asignar_actividad_voluntario(".$id_voluntario.");' ><i class='fas fa-align-justify'></i></a> </td>   
                                                                                                                                                                                           
                </td></tr>
                 " ;
        $contar++ ;
        
    }
    
    $contar--;
    $html .= "</tbody>";
    //$html1 = traducirstring($html, '../idiomas/es/es.php');
    echo $html;
}

function tbl_ver_revisiones() {
    require "../clases/class_trabajos.php";
    $obj = new trabajo();

    $datos =  $obj->tbl_ver_revisiones($_POST['id']);
    $html = "";
    $t = 1;
    foreach ($datos as $fila) {
        $html .= "<tr class='gradeX'  id='" . $fila['id_revisiones_trabajo_pk'] . "'>
                    <td align='center'>" . $t . "</td>
                    <td align='justify'>" . $fila['id_asignacion_a_revisor_fk'] . "</td>
                    <td align='justify'>" . $fila['descargo_archivo'] . "</td>
                    <td align='center'>" . $fila['lleno_formulario'] . "</td>
                    <td align='center'>" . $fila['fecha_reviso'] . "</td>
                    <td align='center'>" . $fila['id_tipo_dictamen_fk'] . "</td>
                    <td align='center'>" . $fila['observaciones'] . "</td>
                </tr>";
        $t += 1;
    }
    
    
    echo $html;
}