<?php

//global $bdd;

session_start();
$funcion = filter_input(INPUT_GET, 'caso');
switch ($funcion) {
    case 'get_congreso':
        get_congreso();
        break;
    case 'get_congreso_roles':
        get_congreso_roles();
        break;
    case 'crear_congreso':
        crear_congreso();
        break;
    case 'actualizar_congreso':
        actualizar_congreso();
        break;
    case 'eliminar_congreso':
        eliminar_congreso();
        break;
    case 'activar_congreso':
        activar_congreso();
        break;
    case 'inactivar_congreso':
        inactivar_congreso();
        break;
    case 'cerrar_congreso':
        cerrar_congreso();
        break;
    case 'get_linea_investigacion':
        get_linea_investigacion();
        break;
    case 'crear_linea':
        crear_linea();
        break;
    case 'modificar_linea':
        modificar_linea();
        break;
    case 'eliminar_linea':
        eliminar_linea();
        break;
    case 'crear_tematica':
        crear_tematica();
        break;
    case 'eliminar_tematica':
        eliminar_tematica();
        break;
    case 'get_tematica':
        get_tematica();
        break;
    case 'actualizar_tematica':
        actualizar_tematica();
        break;
    case 'get_tour':
        get_tour();
        break;
    case 'crear_tour':
        crear_tour();
        break;
    case 'actualizar_tour':
        actualizar_tour();
        break;
    case 'eliminar_tour':
        eliminar_tour();
        break;
    case 'crear_articulo':
        crear_articulo();
        break;
    case 'actualizar_articulo':
        actualizar_articulo();
        break;
    case 'get_articulo':
        get_articulo();
        break;
    case 'eliminar_articulo':
        eliminar_articulo();
        break;
    case 'get_trabajo':
        get_trabajo();
        break;
    case 'get_trabajo_tematica':
        get_trabajo_tematica();
        break;
    case 'crear_trabajo':
        crear_trabajo();
        break;
    case 'actualizar_trabajo':
        actualizar_trabajo();
        break;
    case 'eliminar_trabajo':
        eliminar_trabajo();
        break;
    case 'agregarautor':
        agregarautor();
        break;
    case 'mostrar_autores':
        get_autor_trabajo();
        break;
    case 'eliminar_coautor_trabajo':
        eliminar_coautor_trabajo();
        break;
    case 'cambiar_documento':
        cambiardocumento();
        break;
    case 'descargardocumento':
        descargardocumento();
        break;
    case
    'asignar_horario':
        //asignar_horario();
        break;
    case 'guardar_certificado':
        guardar_certificado('guardar');
        break;
    case 'actualizar_certificado':
        guardar_certificado('actualizar');
        break;
    case 'get_certificado': //OBED form subir trabajo
        get_certificado($_GET['id']);
        break;
    case 'delete_certificado': //OBED form subir trabajo
        delete_certificado($_GET['id']);
        break;
    case 'get_usuario_firma_certificado':
        get_usuario_firma_certificado();
        break;
    case 'get_espacio':
        get_espacio($_POST['id']);
        break;
    case 'eliminar_espacio':
        eliminar_espacio();
        break;
    case 'insertar_espacio':
        registrar_espacios();
        break;
    case 'actualizar_espacio':
        registrar_espacios();
        break;
    case 'get_actividad':
        get_actividad();
        break;
    case 'insertar_actividad':
        guardar_actividad();
        break;
    case 'actualizar_actividad':
        actualizar_actividad();
        break;
    case "eliminar_actividad":
        eliminar_actividad();
        break;
    case 'get_programa':
        get_programa();
        break;
    case 'insertar_emitir_programa':
        guardar_programa();
        break;
    case 'actualizar_emitir_programa':
        actualizar_programa();
        break;
    case 'eliminar_programa':
        eliminar_programa();
        break;
    case 'guardar_actividades_voluntarios':
        guardar_actividades_voluntarios();
        break;
    case 'actualizar_actividad_voluntario':
        actualizar_actividad_voluntario();
        break;
    case 'get_actividad_voluntario':
        get_actividad_voluntario();
        break;
    case 'eliminar_actividad_voluntario':
        eliminar_actividad_voluntario();
        break;
        /* ---- Resumenes ----- */
    case 'crear_resumen':
        crear_resumen();
        break;
    case 'eliminar_resumen':
        eliminar_resumen();
        break;
    case 'descargar_resumen':
        descargar_resumen();
        break;
}

function get_congreso()
{
    $id = filter_input(INPUT_POST, 'id');
    require '../clases/clase_Congreso.php';
    $congreso = new Congreso();
    $res = $congreso->getCongreso($id);

    if ($id != '') {
        echo json_encode($res);
    } else {
        echo $id . ' vacio';
    }
}

function get_congreso_roles()
{
    $id = filter_input(INPUT_POST, 'id');
    require '../clases/clase_Congreso.php';
    $congreso = new Congreso();
    $res = $congreso->mostrarRoles($id);

    if ($id != '') {
        echo json_encode($res);
    } else {
        echo $id . ' vacio';
    }
}

function crear_congreso()
{

    require '../clases/clase_Congreso.php';

    $nombre_congreso                     =     trim(filter_input(INPUT_POST, 'nombre_congreso'));
    $siglas                              =     trim(filter_input(INPUT_POST, 'siglas'));
    $descripcion_congreso                =     trim(filter_input(INPUT_POST, 'descripcion_congreso'));
    $lugar                               =     trim(filter_input(INPUT_POST, 'lugar'));
    $coordenadas                         =     trim(filter_input(INPUT_POST, 'coordenadas'));
    $id_pais_fk                          =     trim(filter_input(INPUT_POST, 'pais'));
    $lema                                =     trim(filter_input(INPUT_POST, 'lema'));
    $numero_cai                          =     trim(filter_input(INPUT_POST, 'numero_cai'));
    $roles_congreso_agregados = trim(filter_input(INPUT_POST, 'agregar_roles_congreso'));
    $anio                                =     filter_input(INPUT_POST, 'anio');
    $fecha_inicio                        =     filter_input(INPUT_POST, 'fecha_inicio');
    $fecha_finalizacion                  =     filter_input(INPUT_POST, 'fecha_finalizacion');
    $fecha_i_recepcion                   =     filter_input(INPUT_POST, 'fecha_i_recepcion');
    $fecha_f_recepcion                   =     filter_input(INPUT_POST, 'fecha_f_recepcion');
    $fecha_i_revision                    =     filter_input(INPUT_POST, 'fecha_i_revision');
    $fecha_f_revision                    =     filter_input(INPUT_POST, 'fecha_f_revision');
    $fecha_p_programa                    =     filter_input(INPUT_POST, 'fecha_p_programa');
    $fecha_cambio_costo_inscripcion      =     filter_input(INPUT_POST, 'fecha_cambio_costo_inscripcion');
    $idusuario_cm                        =     (int)$_SESSION['idusuario'];
    $fecha_creacion                      =     filter_input(INPUT_POST, 'fecha_creacion');
    $id_estado_congreso_fk               =     filter_input(INPUT_POST, 'id_estado_congreso_fk');

    $roles_seleccionados = $_POST['rolesSeleccionados'] ? $_POST['rolesSeleccionados'] : '0';


    $nombreArchivo = 0;
    if ($_FILES['logo_congreso']) {
        $nombreArchivo = $_FILES['logo_congreso']['name'];
        $rutaDestino = '../img/congresos/' . $nombreArchivo;

        if (move_uploaded_file($_FILES['logo_congreso']['tmp_name'], $rutaDestino)) {
            echo 'El documento se subió correctamente.';
        } else {
            echo 'Error al subir el documento.';
        }
    }

    $logo_congreso = $nombreArchivo ? $nombreArchivo : NULL;

    //$logo_congreso = $FILES;

    $congreso = new Congreso();

    $congreso->cinicializar2(
        $nombre_congreso,
        $siglas,
        $descripcion_congreso,
        $lugar,
        $coordenadas,
        $id_pais_fk,
        $logo_congreso,
        $lema,
        $numero_cai,
        $anio,
        $fecha_inicio,
        $fecha_finalizacion,
        $fecha_i_recepcion,
        $fecha_f_recepcion,
        $fecha_i_revision,
        $fecha_f_revision,
        $fecha_p_programa,
        $fecha_cambio_costo_inscripcion,
        $idusuario_cm,
    );
    $resultado = $congreso->crear_congreso();
    $lastid = json_decode($congreso->json_ultimo_congreso(), true);
    $lastid = $lastid['data'][0]['id_congreso_pk'];

    if ($roles_seleccionados != '0') {
        $actualizarroles = $congreso->crear_congreso_roles($roles_seleccionados, $lastid);
    } else {
        $actualizarroles = 1;
    }


    if ($resultado && $actualizarroles) {
        echo "1" . "<>" . $lastid;
    } else {
        echo '0';
    }
}

function actualizar_congreso()
{
    require '../clases/clase_Congreso.php';

    $nombre_congreso                     =     trim(filter_input(INPUT_POST, 'nombre_congreso'));
    $siglas                              =     trim(filter_input(INPUT_POST, 'siglas'));
    $descripcion_congreso                =     trim(filter_input(INPUT_POST, 'descripcion_congreso'));
    $lugar                               =     trim(filter_input(INPUT_POST, 'lugar'));
    $coordenadas                         =     trim(filter_input(INPUT_POST, 'coordenadas'));
    $id_pais_fk                          =     trim(filter_input(INPUT_POST, 'pais'));
    //$logo_congreso                      =       $_FILES;
    $logo_congreso                      =       filter_input(INPUT_POST, 'logo_congreso_ant');
    $lema                                =     trim(filter_input(INPUT_POST, 'lema'));
    $numero_cai                          =     trim(filter_input(INPUT_POST, 'numero_cai'));
    $roles_congreso_agregados            =     filter_input(INPUT_POST, 'agregar_roles_congreso');
    $anio                                =     filter_input(INPUT_POST, 'anio');
    $fecha_inicio                        =     filter_input(INPUT_POST, 'fecha_inicio');
    $fecha_finalizacion                  =     filter_input(INPUT_POST, 'fecha_finalizacion');
    $fecha_i_recepcion                   =     filter_input(INPUT_POST, 'fecha_i_recepcion');
    $fecha_f_recepcion                   =     filter_input(INPUT_POST, 'fecha_f_recepcion');
    $fecha_i_revision                    =     filter_input(INPUT_POST, 'fecha_i_revision');
    $fecha_f_revision                    =     filter_input(INPUT_POST, 'fecha_f_revision');
    $fecha_p_programa                    =     filter_input(INPUT_POST, 'fecha_p_programa');
    $fecha_cambio_costo_inscripcion      =     filter_input(INPUT_POST, 'fecha_cambio_costo_inscripcion');
    $idusuario_cm                        =     (int)$_SESSION['idusuario'];
    $id_congreso_pk = filter_input(INPUT_POST, 'id');

    $roles_seleccionados = $_POST['rolesSeleccionados'] ? $_POST['rolesSeleccionados'] : '0';


    $nombreArchivo = 0;
    if ($_FILES['logo_congreso']) {

        $archivoAEliminar = '../img/congresos/' . $logo_congreso;
        if (file_exists($archivoAEliminar)) {
            unlink($archivoAEliminar);
        }

        $nombreArchivo = $_FILES['logo_congreso']['name'];
        $rutaDestino = '../img/congresos/' . $nombreArchivo;

        if (move_uploaded_file($_FILES['logo_congreso']['tmp_name'], $rutaDestino)) {
            echo 'El documento se subió correctamente.';
        } else {
            echo 'Error al subir el documento.';
        }
    }

    $logo_congreso = $nombreArchivo ? $nombreArchivo : NULL;


    $congreso = new Congreso();

    $congreso->cinicializar(
        $id_congreso_pk,
        $nombre_congreso,
        $siglas,
        $descripcion_congreso,
        $lugar,
        $coordenadas,
        $id_pais_fk,
        $logo_congreso,
        $lema,
        $numero_cai,
        $anio,
        $fecha_inicio,
        $fecha_finalizacion,
        $fecha_i_recepcion,
        $fecha_f_recepcion,
        $fecha_i_revision,
        $fecha_f_revision,
        $fecha_p_programa,
        $fecha_cambio_costo_inscripcion,
        $idusuario_cm,
    );

    $resultado = $congreso->editar();

    if ($roles_seleccionados != '0') {

        $congreso->borrar_roles_congreso($id_congreso_pk);
        $actualizarroles = $congreso->crear_congreso_roles($roles_seleccionados, $id_congreso_pk);
    } else {
        $actualizarroles = 1;
    }


    if ($resultado && $actualizarroles) {
        //echo "1"."<>".$congreso->json_ultimo_congreso();
        echo '1';
    } else {
        echo '0';
    }
}

function eliminar_congreso()
{
    $id = filter_input(INPUT_POST, 'id');
    require '../clases/clase_Congreso.php';
    $congreso = new Congreso();
    $congreso->cinicializar6($id);
    $res = $congreso->eliminar();

    if ($id != '') {
        echo json_encode($res);
    } else {
        echo $id . ' vacio';
    }
}

function activar_congreso()
{
    $id = filter_input(INPUT_POST, 'id');
    $idusuario = $_SESSION['idusuario'];
    require '../clases/clase_Congreso.php';
    $congreso = new Congreso();
    $congreso->cinicializar7($idusuario, $idusuario, $id);
    $res = $congreso->activar();
    echo json_encode($res);
}

function inactivar_congreso()
{
    $id = filter_input(INPUT_POST, 'id');
    $idusuario = $_SESSION['idusuario'];
    require '../clases/clase_Congreso.php';
    $congreso = new Congreso();
    $congreso->cinicializar7($idusuario, $idusuario, $id);
    $res = $congreso->inactivar();
    echo json_encode($res);
}

function cerrar_congreso()
{
    $id = filter_input(INPUT_POST, 'id');
    $idusuario = $_SESSION['idusuario'];
    require '../clases/clase_Congreso.php';
    $congreso = new Congreso();
    $congreso->cinicializar7($idusuario, $idusuario, $id);
    $res = $congreso->cerrar();
    echo json_encode($res);
}

function crear_linea()
{
    require '../clases/class_lineainvestigacion.php';
    $linea = new Lineainvestigacion();
    $nombre_linea = trim(filter_input(INPUT_POST, 'nombrelinea'));
    $abreviacion = trim(filter_input(INPUT_POST, 'abreviacion'));
    $comentario = trim(filter_input(INPUT_POST, 'comentarios_linea'));
    $descripcion = trim(filter_input(INPUT_POST, 'descripcion_linea'));
    $idusuario = $_SESSION['idusuario'];

    $linea->linea_inicializar(null, $nombre_linea, $abreviacion, $descripcion, $comentario, $idusuario, null);
    // $linea->inicializar_linea_congreso($_SESSION['idcongreso']);
    $respuesta = $linea->crear_linea();
    if ($respuesta != 0) {
        echo json_encode($respuesta);
    } else {
        echo '0';
    }
}


function modificar_linea()
{
    require '../clases/class_lineainvestigacion.php';
    $id = trim(filter_input(INPUT_POST, 'id'));
    $nombre_linea = trim(filter_input(INPUT_POST, 'nombrelinea'));
    $abreviacion = trim(filter_input(INPUT_POST, 'abreviacion'));
    $descripcion = trim(filter_input(INPUT_POST, 'descripcion_linea'));
    $comentarios = trim(filter_input(INPUT_POST, 'comentarios_linea'));
    $linea = new Lineainvestigacion();
    $linea->linea_inicializar($id, $nombre_linea, $abreviacion, $descripcion, $comentarios, $_SESSION['idusuario'], null);
    $res = $linea->modificar_linea();

    if ($id != '') {
        echo json_encode($res);
    } else {
        echo $id . ' vacio';
    }
}


function get_linea_investigacion()
{
    $id = filter_input(INPUT_POST, 'id');
    require '../clases/class_lineainvestigacion.php';
    $linea = new Lineainvestigacion();
    $res = $linea->getLinea($id);

    if ($id != '') {
        echo json_encode($res);
    } else {
        echo $id . ' vacio';
    }
}

function eliminar_linea()
{
    $id = filter_input(INPUT_POST, 'id');
    require '../clases/class_lineainvestigacion.php';
    $linea = new Lineainvestigacion();
    $res = $linea->eliminar_linea($id);

    if ($id != '') {
        echo json_encode($res);
    } else {
        echo $id . ' vacio';
    }
}

function get_tematica()
{
    $id = filter_input(INPUT_POST, 'id');
    include '../clases/class_tematica.php';
    $action = new tematica();
    $res = $action->gettematica($id);

    if ($id != '') {
        echo json_encode($res);
    } else {
        echo $id . ' vacio';
    }
}

function crear_tematica()
{
    include '../clases/class_tematica.php';
    $action = new tematica();
    $nombre_tematica = filter_input(INPUT_POST, 'nombretematica');
    $abreviacion = filter_input(INPUT_POST, 'abreviacion');
    $descripcion = filter_input(INPUT_POST, 'descripcion_tematica');
    $comentario = filter_input(INPUT_POST, 'comentarios_linea');
    $idlinea = filter_input(INPUT_POST, 'lineas_investigacion');
    $idusuario = $_SESSION['idusuario'];

    $action->tematica_inicializar(null, $nombre_tematica, $idlinea, $abreviacion, $descripcion, $comentario, $idusuario);

    $respuesta = $action->crear_tematica();

    if ($respuesta != 0) {
        echo 1;
    } else {
        echo 0;
    }
}

function actualizar_tematica()
{
    include '../clases/class_tematica.php';
    $action = new tematica();
    $id = trim(filter_input(INPUT_POST, 'id'));
    $idlinea = filter_input(INPUT_POST, 'lineas_investigacion');
    $nombre_tematica = filter_input(INPUT_POST, 'nombretematica');
    $abreviacion = filter_input(INPUT_POST, 'abreviacion');
    $descripcion = filter_input(INPUT_POST, 'descripcion_tematica');
    $comentario = filter_input(INPUT_POST, 'comentarios_tematica');
    $idusuario = isset($_SESSION['idusuario']) ? $_SESSION['idusuario'] : 0;

    $action->tematica_inicializar($id, $nombre_tematica, $idlinea, $abreviacion, $descripcion, $comentario, $idusuario);
    $action->modificar_tematica();
}

function eliminar_tematica()
{
    $id = filter_input(INPUT_POST, 'id');
    include '../clases/class_tematica.php';
    $action = new tematica();
    $idusuario = isset($_SESSION['idusuario']) ? $_SESSION['idusuario'] : 0;
    $res = $action->eliminar_tematica($id, $idusuario);

    if ($id != '') {
        echo json_encode($res);
    } else {
        echo $id . ' vacio';
    }
}

function get_tour()
{
    $id = filter_input(INPUT_POST, 'id');
    include '../clases/class_factura.php';
    $action = new factura();
    $res = $action->gettour($id);

    if ($id != '') {
        echo json_encode($res);
    } else {
        echo $id . ' vacio';
    }
}
function crear_tour()
{
    include '../clases/class_factura.php';
    $action = new factura();

    $nombretour = filter_input(INPUT_POST, 'nombretour');
    $descripcion = filter_input(INPUT_POST, 'descripcion');
    $comentario = filter_input(INPUT_POST, 'comentario');
    $costo = filter_input(INPUT_POST, 'costo');
    $impuesto = filter_input(INPUT_POST, 'impuesto');
    $id = filter_input(INPUT_POST, 'id');
    $idusuario = $_SESSION['idusuario'];

    $action->inicia_tour(null, $nombretour, $descripcion, $comentario, $costo, $impuesto, $idusuario, null, null, null);

    $respuesta = $action->crear_tour();

    if ($respuesta != 0) {
        echo 1;
    } else {
        echo 0;
    }
}

function actualizar_tour()
{
    include '../clases/class_factura.php';
    $action = new factura();

    $nombretour = filter_input(INPUT_POST, 'nombretour');
    $descripcion = filter_input(INPUT_POST, 'descripcion');
    $comentario = filter_input(INPUT_POST, 'comentario');
    $costo = filter_input(INPUT_POST, 'costo');
    $impuesto = filter_input(INPUT_POST, 'impuesto');
    $id = filter_input(INPUT_POST, 'id');
    $idusuario = $_SESSION['idusuario'];

    $action->inicia_tour($id, $nombretour, $descripcion, $comentario, $costo, $impuesto, null, null, $idusuario, null);

    $respuesta = $action->modificar_tour();

    if ($respuesta != 0) {
        echo json_encode($respuesta);
    } else {
        echo 0;
    }
}

function eliminar_tour()
{
    $id = filter_input(INPUT_POST, 'id');
    include '../clases/class_factura.php';
    $action = new factura();
    $res = $action->eliminar_tour($id);

    if ($id != '') {
        echo json_encode($res);
    } else {
        echo $id . ' vacio';
    }
}

function crear_articulo()
{
    include '../clases/class_factura.php';
    $action = new factura();

    $producto = filter_input(INPUT_POST, 'articulo');
    $descripcion = filter_input(INPUT_POST, 'descripcion');
    $precio = filter_input(INPUT_POST, 'precio');
    $impuesto = filter_input(INPUT_POST, 'impuesto');
    $id_congreso_fk = '1';
    //$id = filter_input(INPUT_POST, 'id');
    //$idusuario = $_SESSION['idusuario'];

    $action->inicia_guardar_articulo(null, $producto, $precio, $impuesto, $descripcion, $id_congreso_fk, null);

    $respuesta = $action->guardar_articulo();

    if ($respuesta != 0) {
        echo json_encode($respuesta);
    } else {
        echo 0;
    }
}

function actualizar_articulo()
{
    include '../clases/class_factura.php';
    $action = new factura();

    $producto = filter_input(INPUT_POST, 'articulo');
    $descripcion = filter_input(INPUT_POST, 'descripcion');
    $precio = filter_input(INPUT_POST, 'precio');
    $impuesto = filter_input(INPUT_POST, 'impuesto');
    $id = filter_input(INPUT_POST, 'id');
    //$idusuario = $_SESSION['idusuario'];

    $action->inicia_guardar_articulo($id, $producto, $precio, null, $descripcion, null, $impuesto);

    $respuesta = $action->modificar_articulo();

    if ($respuesta != 0) {
        echo json_encode($respuesta);
    } else {
        echo 0;
    }
}

function get_articulo()
{
    $id = filter_input(INPUT_POST, 'id');
    include '../clases/class_factura.php';
    $action = new factura();
    $res = $action->inf_articulo($id);

    if ($id != '') {
        echo json_encode($res);
    } else {
        echo $id . ' vacio';
    }
}

function eliminar_articulo()
{
    $id = filter_input(INPUT_POST, 'id');
    include '../clases/class_factura.php';
    $action = new factura();
    $res = $action->eliminar_articulo($id);

    if ($id != '') {
        echo json_encode($res);
    } else {
        echo $id . ' vacio';
    }
}

function get_trabajo()
{
    $id = filter_input(INPUT_POST, 'id');
    include '../clases/class_trabajos.php';
    $action = new trabajo();
    $res = $action->gettrabajo($id);

    if ($id != '') {
        echo json_encode($res);
    } else {
        echo $id . ' vacio';
    }
}

function get_trabajo_tematica()
{
    $id = filter_input(INPUT_POST, 'id');
    include '../clases/class_trabajos.php';
    $action = new trabajo();
    $res = $action->gettrabajotematica($id);

    if ($id != '') {
        echo json_encode($res);
    } else {
        echo $id . ' vacio';
    }
}

function get_autor_trabajo()
{
    $id = filter_input(INPUT_POST, 'id');

    include '../clases/class_trabajos.php';
    $action = new trabajo();
    $datos =  $action->autoresxtrabajo($id);

    $html = "";
    $t = 1;

    if ($id != '') {

        foreach ($datos as $fila) {
            $html .= "<tr class='gradeX'  id='" . $fila['id'] . "'>
                            <td align='center'>" . $fila['id'] . "</td>
                            <td align='justify'>" . $fila['nombre'] . "</td>
                            <td align='justify'>" . $fila['apellido'] . "</td>
                            <td align='center'>" . $fila['identificacion'] . "</td>
                            <td align='center'>" . $fila['correo'] . "</td>
                            <td align='center'>" . $fila['nombre_usuario'] . "</td>
                            <td align='center'>" . $fila['subio'] . "</td>
                            <td align='center'>" . $fila['autor_principal'] . "</td>
                            <td align='center'>" . $fila['coautor'] . "</td>
                            <td align='center'>" . $fila['expositor'] . "</td>
                            <td align='center'>" . $fila['autoria'] . "</td>
                            <td align='center'>" . $fila['autor_correspondencia'] . "</td>
                            <td align='center'><button onclick='eliminarcoautor(" . $fila['id'] . ")' class='btn btn-danger'>x</button></td>
                        </tr>";
            $t += 1;
        }
        echo $html;
    } else {
        echo $id . ' vacio';
    }
}

function crear_trabajo()
{
    include '../clases/class_trabajos.php';
    $action = new trabajo();

    $titulotrabajo = filter_input(INPUT_POST, 'titulo_trabajo');
    $fecha = '';
    $ubicacionarchivo = filter_input(INPUT_POST, 'archivo_trabajo');
    $resumen = filter_input(INPUT_POST, 'resumen_trabajo');
    $idestado = '1';
    $idtematica = filter_input(INPUT_POST, 'tematicas_trabajo');
    $id_citacion_fk = '0';
    $horario = filter_input(INPUT_POST, 'hora_sugerida');
    $moreauthor = filter_input(INPUT_POST, 'tautor');
    $numauthor = filter_input(INPUT_POST, 'n_autores');
    $premio = filter_input(INPUT_POST, 'tpremio');
    $revista = filter_input(INPUT_POST, 'trevista');
    $idtipotrabajo = filter_input(INPUT_POST, 'ttrabajo');
    $idioma = filter_input(INPUT_POST, 'idioma');
    $palabrasclave = filter_input(INPUT_POST, 'palabras_clave');
    $resumenprograma = filter_input(INPUT_POST, 'resumen_abreviado');
    //$id = filter_input(INPUT_POST, 'id');
    //session_start();
    $idusuario = isset($_SESSION['idusuario']) ? $_SESSION['idusuario'] : '0';
    $tematicasselect = isset($_POST['tematicastrabajo']) ? $_POST['tematicastrabajo'] : '0';

    $action->inicializartrabajo(
        null,
        $titulotrabajo,
        $fecha,
        $ubicacionarchivo,
        $resumen,
        $idestado,
        $idtematica,
        $id_citacion_fk,
        $premio,
        $revista,
        $horario,
        $moreauthor,
        $numauthor,
        $idtipotrabajo,
        $idioma,
        $palabrasclave,
        $resumenprograma
    );

    $respuesta = $action->insertar();

    if (isset($_FILES["archivo_trabajo"])) {
        subirdocumento();
    }

    for ($i = 1; $i <= $numauthor; $i++) {
        $correo_autor = filter_input(INPUT_POST, 'correo_autor' . $i);
        $primer_nombre = filter_input(INPUT_POST, 'primer_nombre' . $i);
        $primer_apellido = filter_input(INPUT_POST, 'primer_apellido' . $i);
        $autor_principal = filter_input(INPUT_POST, 'rd_ap_' . $i);
        $identificacion = '0';

        /*----------------------------------*/
        $idt = filter_input(INPUT_POST, 'idt');

        // Verificar si existe en la base de datos ya registrado con este correo
        /*
        $data = $action->selectusuario($correo_autor);
        $filas = mysqli_fetch_row($data);

        $data1 = $action->selectpersona($identificacion);
        $filas1 = mysqli_fetch_row($data1);
        */

        $tprincipal = 1;
        $tidentificacion = 1;
        $pais = "HN";
        $tpersona = 1;
        $talimentacion = 1;
        $nusuario = random_cadena($length = 10);
        $contrasenia1 = random_cadena($length = 15);

        $persona = new persona();
        $persona->pinicializar(NULL, $primer_nombre, $primer_apellido, NULL, NULL, $correo_autor, $tprincipal, $tidentificacion, $pais, $identificacion, $tpersona, $talimentacion, $nusuario, $contrasenia1, NULL, null, null, NULL);
        $idperson = $persona->registro();

        $telefono = $persona->asignar_telefono($idperson);
        $correo = $persona->asignar_correo($idperson);
        $usuario = $persona->crear_usuario($idperson);
        $lastidUsuario = $usuario;

        /*-----------------------------------*/

        $res = $action->inicializarusuariotrabajo($lastidUsuario, $respuesta, NULL, $autor_principal, 1, NULL, 0, 0);
        $res = $action->usuariotrabajo();
        echo $res;
    }

    if ($tematicasselect != '0') {
        $tematicas = $action->insertartematicasarray($tematicasselect, $respuesta, '0');
    } else {
        $tematicas = 1;
    }

    if ($respuesta != 0) {
        echo json_encode($res . " - " . $tematicas);
    } else {
        echo 0;
    }
}

function actualizar_trabajo()
{
    include '../clases/class_trabajos.php';
    $action = new trabajo();

    $titulotrabajo = filter_input(INPUT_POST, 'titulo_trabajo');
    $fecha = '';
    $ubicacionarchivo = filter_input(INPUT_POST, 'archivo_trabajo');
    $resumen = filter_input(INPUT_POST, 'resumen_trabajo');
    $idestado = '1';
    $idtematica = filter_input(INPUT_POST, 'tematicas_trabajo');
    $id_citacion_fk = '0';
    $premio = filter_input(INPUT_POST, 'tpremio');
    $revista = filter_input(INPUT_POST, 'trevista');
    $horario = filter_input(INPUT_POST, 'hora_sugerida');
    $moreauthor = filter_input(INPUT_POST, 'tautor');
    $numauthor = filter_input(INPUT_POST, 'n_autores');
    $idtipotrabajo = filter_input(INPUT_POST, 'ttrabajo');
    $idioma = filter_input(INPUT_POST, 'idioma');
    $palabrasclave = filter_input(INPUT_POST, 'palabras_clave');
    $resumenprograma = filter_input(INPUT_POST, 'resumen_abreviado');
    $idtrabajo = filter_input(INPUT_POST, 'id');
    //$idusuario = $_SESSION['idusuario'];

    $action->inicializartrabajo(
        $idtrabajo,
        $titulotrabajo,
        $fecha,
        $ubicacionarchivo,
        $resumen,
        $idestado,
        $idtematica,
        $id_citacion_fk,
        $premio,
        $revista,
        $horario,
        $moreauthor,
        $numauthor,
        $idtipotrabajo,
        $idioma,
        $palabrasclave,
        $resumenprograma
    );

    $respuesta = $action->modificar();

    if ($respuesta != 0) {
        echo json_encode($action);
    } else {
        echo 0;
    }
}

function eliminar_trabajo()
{
    $id = filter_input(INPUT_POST, 'id');
    include '../clases/class_trabajos.php';
    $action = new trabajo();
    $action->inicializarautorprincipalut($id);
    $res = $action->eliminartrabajo();

    if ($id != '') {
        echo json_encode($res);
    } else {
        echo $id . ' vacio';
    }
}

function subirdocumento()
{
    //session_start();
    $idusuario = $_SESSION['idusuario'] ? $_SESSION['idusuario'] : '0';
    $nusuario = $_SESSION['nusuario'] ? $_SESSION['nusuario'] : '0';
    $idpersona = $_SESSION['idpersona'] ? $_SESSION['idpersona'] : '0';
    $idioma = isset($_SESSION['idioma']) ? $_SESSION['idioma'] : 'es';
    $idcongreso = isset($_SESSION['idcongreso']) ? $_SESSION['idcongreso'] : '';
    $fecha = date("Y-m-d_h-i-s");
    if (isset($_FILES["archivo_trabajo"])) {
        //include '../clases/class_trabajos.php';
        $tu = new trabajo();
        $documento = $_FILES["archivo_trabajo"];
        $nombredocumento = $documento["name"];
        $tipo = $documento["type"];
        $rutaprovisional = $documento["tmp_name"];
        $size = $documento["size"];
        //            $dimensiones = ($rutaprovisional);//retorna un array para visualizar hacer un vardump
        //            $width = $dimensiones[0];
        //            $height = $dimensiones[1];
        //verifico que tipo de trabajo es para darle formato al nombre del archivo
        $tipotrabajo = filter_input(INPUT_POST, 'ttrabajo');
        $carpeta = "../trabajos/" . 'congreso' . $idcongreso;
        $carpeta2 = "../trabajos/congreso$idcongreso" . '/tipotrabajo' . $tipotrabajo;
        //Carpetas para almacenar las versiones de los trabajos de acuerdo a estados de los mismos 
        $carpeta3 = "../trabajos/congreso$idcongreso" . '/tipotrabajo' . $tipotrabajo . '/Revisiones';
        $carpeta4 = "../trabajos/congreso$idcongreso" . '/tipotrabajo' . $tipotrabajo . '/Aceptados';
        //eliminamos caracteres especiales en el nombre del doc
        $nombrearch = limpiacadena($nombredocumento);
        //agregamos el identificador de la persona que lo subio, en el nombre del trabajo 
        $nombrearchivo = $idpersona . '_' . $idioma . '_' . $fecha . '_' . $nombrearch;
        //CREO O VERIFICO SI EXISTE EL DIRECTORIO CON EL ID DEL CONGRESO
        if (!file_exists($carpeta)) {
            mkdir($carpeta, 0777, true);
        }
        //CREO O VERIFICO SI EXISTE EL DIRECTORIO CON EL ID DEL TIPO DE TRABAJO
        if (!file_exists($carpeta2)) {
            mkdir($carpeta2, 0777, true);
        }
        //CREO O VERIFICO SI EXISTE EL DIRECTORIO PARA USO POSTERIOR 
        if (!file_exists($carpeta3)) {
            mkdir($carpeta3, 0777, true);
        }
        //CREO O VERIFICO SI EXISTE EL DIRECTORIO PARA USO POSTERIOR 
        if (!file_exists($carpeta4)) {
            mkdir($carpeta4, 0777, true);
        }
        //RUTA COMPLETA DEL ARCHIVO
        $src = $carpeta2 . '/' . $nombrearchivo;

        //verificamos que el archivo no existe
        $datos = $tu->selectmaxid(); //extraigo el id del trabajo
        $result = "";
        if (!file_exists($src)) {
            foreach ($datos as $val) {
                if (move_uploaded_file($rutaprovisional, $src)) {
                    $tu->inicializarmodificarubicacion($nombrearchivo, $val['id_trabajo_pk']);
                    $result = $tu->modificarubicacion();
                }
            }
            if ($result != 0) {
                //echo 1;
            } else {
                //echo 2;
            }
        } else {
            foreach ($datos as $val) {
                $tu->inicializarmodificarubicacion($nombrearchivo, $val['id_trabajo_pk']);
                $result = $tu->modificarubicacion();
            }
        }
        //echo $result;
        //            }
        // return false;
    }
}

function eliminar_coautor_trabajo()
{
    $id = filter_input(INPUT_POST, 'id');
    include '../clases/class_trabajos.php';
    $action = new trabajo();
    $res = $action->eliminar_coautor_trabajo($id);
    if ($id != '') {
        echo json_encode($res);
    } else {
        echo $id . ' vacio';
    }
}

function cambiardocumento()
{
    $id = filter_input(INPUT_POST, 'id_cambiar_documento');
    //    session_start();
    //$idusuario = $_SESSION['idusuario'] ? $_SESSION['idusuario'] : '0';  
    //$nusuario = $_SESSION['nusuario'] ? $_SESSION['nusuario'] : '0';   
    $idpersona = $_SESSION['idpersona'] ? $_SESSION['idpersona'] : '0';
    $idioma = isset($_SESSION['idioma']) ? $_SESSION['idioma'] : 'es';
    $idcongreso = isset($_SESSION['idcongreso']) ? $_SESSION['idcongreso'] : '';
    $fecha = date("Y-m-d_h-i-s");
    try {
        if (isset($_FILES["archivo_trabajo"])) {
            include '../clases/class_trabajos.php';
            $tu = new trabajo();
            $documento = $_FILES["archivo_trabajo"];
            $nombredocumento = $documento["name"];
            $tipo = $documento["type"];
            $rutaprovisional = $documento["tmp_name"];
            $size = $documento["size"];
            //            $dimensiones = ($rutaprovisional);//retorna un array para visualizar hacer un vardump
            //            $width = $dimensiones[0];
            //            $height = $dimensiones[1];
            //verifico que tipo de trabajo es para darle formato al nombre del archivo

            $dat = $tu->gettrabajo($id);
            $tipotrabajo = $dat[0]['id_tipo_trabajo_fk'] ? $dat[0]['id_tipo_trabajo_fk'] : 1;

            $carpeta = "../trabajos/" . 'congreso' . $idcongreso;
            $carpeta2 = "../trabajos/congreso$idcongreso" . '/tipotrabajo' . $tipotrabajo;
            //Carpetas para almacenar las versiones de los trabajos de acuerdo a estados de los mismos 
            $carpeta3 = "../trabajos/congreso$idcongreso" . '/tipotrabajo' . $tipotrabajo . '/Revisiones';
            $carpeta4 = "../trabajos/congreso$idcongreso" . '/tipotrabajo' . $tipotrabajo . '/Aceptados';
            //eliminamos caracteres especiales en el nombre del doc
            $nombrearch = limpiacadena($nombredocumento);
            //agregamos el identificador de la persona que lo subio, en el nombre del trabajo 
            $nombrearchivo = $idpersona . '_' . $idioma . '_' . $fecha . '_' . $nombrearch;
            //CREO O VERIFICO SI EXISTE EL DIRECTORIO CON EL ID DEL CONGRESO
            if (!file_exists($carpeta)) {
                mkdir($carpeta, 0777, true);
            }
            //CREO O VERIFICO SI EXISTE EL DIRECTORIO CON EL ID DEL TIPO DE TRABAJO
            if (!file_exists($carpeta2)) {
                mkdir($carpeta2, 0777, true);
            }
            //CREO O VERIFICO SI EXISTE EL DIRECTORIO PARA USO POSTERIOR 
            if (!file_exists($carpeta3)) {
                mkdir($carpeta3, 0777, true);
            }
            //CREO O VERIFICO SI EXISTE EL DIRECTORIO PARA USO POSTERIOR 
            if (!file_exists($carpeta4)) {
                mkdir($carpeta4, 0777, true);
            }
            //RUTA COMPLETA DEL ARCHIVO
            $src = $carpeta2 . '/' . $nombrearchivo;

            //verificamos que el archivo no existe
            //$datos = $tu ->selectmaxid();//extraigo el id del trabajo
            $result = "";
            //if (!file_exists($src)){  

            if (move_uploaded_file($rutaprovisional, $src)) {
                $tu->inicializarmodificarubicacion($nombrearchivo, $id);
                $result = $tu->modificarubicacion();
            } else {
                echo "error";
            }

            echo $result;
            /*}else{
                        
                            $tu -> inicializarmodificarubicacion($nombrearchivo, $id);
                            $result = $tu ->modificarubicacion();                       
                        
                        echo $result;
                    } */
            //            }
            // return false;
        } else {
            echo "No se encontró archivo";
        }
    } catch (exception $e) {
        echo $e;
    }
}

function descargardocumento()
{
    $id = filter_input(INPUT_GET, 'id');
    include '../clases/class_trabajos.php';
    $tu = new trabajo();
    $data = $tu->gettrabajo($id);
    $tipotrabajo = $data[0]['id_tipo_trabajo_fk'];

    $file = '../trabajos/congreso/tipotrabajo' . $tipotrabajo . '/' . $data[0]['ubicacion_archivo'];

    if (file_exists($file) && $data[0]['ubicacion_archivo'] != '') {
        header("Location: $file");
        exit;
    } else {
        //header("Location: ../dashboard.php?page=ver_trabajos");
        echo 'No hay ningún archivo vinculado';
    }
}


function limpiacadena($cadena)
{
    $cadena = trim($cadena);
    $cadena = strtr(
        $cadena,
        "ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ",
        "aaaaaaaaaaaaooooooooooooeeeeeeeecciiiiiiiiuuuuuuuuynn"
    );
    $cadena = strtr($cadena, "ABCDEFGHIJKLMNOPQRSTUVWXYZ", "abcdefghijklmnopqrstuvwxyz");
    $cadena = preg_replace('#([^.a-z0-9]+)#i', '-', $cadena);
    $cadena = preg_replace('#-{2,}#', '-', $cadena);
    $cadena = preg_replace('#-$#', '', $cadena);
    $cadena = preg_replace('#^-#', '', $cadena);
    return $cadena;
}

function  random_cadena($length = 100, $n = TRUE, $sc = FALSE)
{
    $source = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890';
    $rstr = "";
    if ($n == 1) {
        if ($length > 0) {
            $source = str_split($source, 1);
            for ($i = 1; $i <= $length; $i++) {
                mt_srand((float)microtime() * 1000000);
                $num = mt_rand(1, count($source));
                $rstr .= $source[$num - 1];
            }
        }
    }
    return $rstr;
}

function agregarautor()
{

    include '../clases/class_trabajos.php';
    $action = new trabajo();

    $correo_autor = filter_input(INPUT_POST, 'correo_autor');
    $primer_nombre = filter_input(INPUT_POST, 'primer_nombre');
    $primer_apellido = filter_input(INPUT_POST, 'primer_apellido');
    $autor_principal = filter_input(INPUT_POST, 'rd_ap_');
    $identificacion = filter_input(INPUT_POST, 'identificacion');

    /*----------------------------------*/
    $idt = filter_input(INPUT_POST, 'id_modal');

    $tprincipal = 1;
    $tidentificacion = 1;
    $pais = "HN";
    $tpersona = 1;
    $talimentacion = 1;
    $nusuario = random_cadena($length = 10);
    $contrasenia1 = random_cadena($length = 15);

    $persona = new persona();
    $persona->pinicializar(NULL, $primer_nombre, $primer_apellido, NULL, NULL, $correo_autor, $tprincipal, $tidentificacion, $pais, $identificacion, $tpersona, $talimentacion, $nusuario, $contrasenia1, NULL, null, null, NULL);
    $idperson = $persona->registro();

    $telefono = $persona->asignar_telefono($idperson);
    $correo = $persona->asignar_correo($idperson);
    $usuario = $persona->crear_usuario($idperson);
    $lastidUsuario = $usuario;

    /*-----------------------------------*/

    $res = $action->inicializarusuariotrabajo($lastidUsuario, $idt, NULL, $autor_principal, 1, NULL, 0, 0);
    $res = $action->usuariotrabajo();
    echo $res;

    /*
    $idioma = 'es'; 
    $idcongreso = $_SESSION['idcongreso'] ? $_SESSION['idcongreso'] : '0';
    //$rolescongreso = $_SESSION['roles'];
    //variable global para envio de correos 
    $enviomj = 0;  

    include '../clases/class_trabajos.php';                
    $tu = new trabajo();
    //$idt = filter_input(INPUT_POST, 'idt');
    $idt = filter_input(INPUT_POST, 'id_modal');    
    $correo = ['correo'=>filter_input(INPUT_POST, 'correo_autor'),'tipo'=>1];
    $correo_autor = filter_input(INPUT_POST, 'correo_autor');
    $primer_nombre = filter_input(INPUT_POST, 'primer_nombre');
    $primer_apellido = filter_input(INPUT_POST, 'primer_apellido');
    $identificacion = filter_input(INPUT_POST, 'identificacion');
    //verificamos si existe
    $pn = explode(" ", $primer_nombre);
    $pa = explode(" ", $primer_apellido);
    $pnombre = $pn[0];
    if(isset($pn[1]))
    {
        $snombre = $pn[1];
    }else{
        $snombre = " ";
    }
    $papellido = $pa[0];
    if(isset($pa[1]))
    {
        $sapellido = $pa[1];
    }else{
        $sapellido = " ";
    }  

    //verificar si existe en la bd ya registrado con este correo
    $data = $tu ->selectusuario($correo_autor);
    $filas = mysqli_fetch_row($data);
    //
    $data1 = $tu ->selectpersona($identificacion);
    $filas1 = mysqli_fetch_row($data1);

    if($filas == 0 && $filas1 == 0){ //DETERMINA SI VIENE VACIA
         //variables por defecto IDentificacion aleatoria 
        $tprincipal = 1; $tidentificacion = 1;  $pais = "HN";        
        $tpersona = 1; $talimentacion = 1;
        //CREAMOS USUARIO Y CONTRASENA ALEATORIAMENTE
        $nusuario = random_cadena($length=10);                                       
        $contrasenia1 = random_cadena($length=15);                                         

        $persona = new persona();
        $persona ->pinicializar(NULL, $pnombre, $snombre, $papellido, $sapellido, $correo, $tprincipal, $tidentificacion, $pais,$identificacion, $tpersona, $talimentacion,$nusuario,$contrasenia1,$idioma,null,null,null);
        $idperson = $persona -> registro();
        $telefono = $persona -> asignar_telefono();
        $correo = $persona -> asignar_correo();    
        $usuario = $persona -> crear_usuario();                                        
        
        //buscamos el rol autor en el arreglo de roles pertenecientes al congreso activo

        $idrol = array_search('Autor', $rolescongreso);                                       
        $us = new usuario();
        //inicializo y guardo el rol del usuario POR DEFECTO SERA autor
        $us ->uinicializar($usuario,$nusuario,$contrasenia1,NULL,$correo_autor,$idrol,NULL);                                     
        $rol = $us ->asignar_usuarioxrolxcongreso();  

//*********        //vinculamos este usuario al trabajo
        $aprincipal = filter_input(INPUT_POST, 'rd_ap_si');                                            
        if ($aprincipal == 1){
            $tu->inicializarautorprincipalut($idt);
            $tu->autorpusuariotrabajo();
            
            $tu->inicializarusuariotrabajo($usuario, $idt, NULL, 1, NULL, NULL,0,1);
            $tu->usuariotrabajo();
        }else{
            $tu->inicializarusuariotrabajo($usuario, $idt, NULL, NULL, 1, NULL,0,0);
            $tu->usuariotrabajo();
        }

        $congreso = $tu->selectcongreso($idcongreso);
        //enviamos el correo al usuario para validar su autoria
        $titulo="AUTORÍA DE TRABAJO";  
        $mensaje="<html>"; 
        $mensaje.="<p>";
        $mensaje.="UNIVERSIDAD NACIONAL AUTÓNOMA DE HONDURAS (UNAH).";
        $mensaje.="</p><BR>";
        $mensaje.="<p>";
        $mensaje.="INSTITUTO DE INVESTIGACIONES ECONÓMICAS Y SOCIALES (IIES).";
        $mensaje.="</p>";
        //$mensaje.="<title></title";
        $mensaje.="<body>";
        $mensaje.="<p>";
        $mensaje.="Estimado(a)";
        $mensaje.="</p><BR>";
        $mensaje.="<p>";
        foreach ($congreso as $key) {
        $mensaje.="EL CONGRESO ".strtoupper($key['nombre_congreso'])."<br>Comunica a usted lo siguiente:<br><br>";                                               
        }
        $mensaje.="Se ha subido un TRABAJO DE INVESTIGACIÓN al Congreso y se requiere de usted, para que ingrese y actualice sus datos y de igual manera confirme su AUTOR��A del trabajo, Ingresando a la secci��n de GESTION DE TRABAJOS DEL AUTOR y luego ACEPTAR AUTORIAS."
                . "<br><br>PARA DICHO PROCESO INGRESE A LA DIRECCIÓN:<br> <a href='http://ceat-unah.org/sistemas/gcongreso/beta/index.php' target='_blank'>AQU��</a>"
                . "<br><br>";
        $mensaje.="A continuación encontrará su usuario y contraseña con los que podrá tener acceso a la Plantaforma de Administraci��n de Congresos:<br>"
                . "USUARIO:  ".$nusuario."<br>"
                . "CLAVE:  ".$contrasenia1."<br>";
        $mensaje.="</p>";
        $mensaje.="<p>";     
        $mensaje.="Un saludo muy cordial, y gracias por participar en el Congreso.!!!";
        $mensaje.="</p>";
        $mensaje.="</body>";
        $mensaje.="</html>";      
        $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
        $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        
        if( mail($correo_autor, $titulo, $mensaje, $cabeceras)){
            $enviomj = 1;
        }
        echo $enviomj;
    }else{
        //en caso de que la o los autores ya esten la bd solo los agrego a la 
        //usuario trabajo
        //Extraigo el id de usuario tbl_usuario
        $array = $tu->selectusuarioreg($correo_autor);
        foreach ($array as $key) {
            $aprincipal = filter_input(INPUT_POST, 'rd_ap_si');                                            
            if ($aprincipal == 1){
                $tu->inicializarautorprincipalut($idt);
                $tu->autorpusuariotrabajo();
                
                $tu->inicializarusuariotrabajo($key['id_usuario_pk'], $idt, NULL, 1, NULL, NULL,0,1);
                $tu->usuariotrabajo();
            }else{
                $tu->inicializarusuariotrabajo($key['id_usuario_pk'], $idt, NULL, NULL, 1, NULL,0,0);
                $tu->usuariotrabajo();
            }
            
            $congreso = $tu->selectcongreso($idcongreso);
            //enviamos el correo al usuario para validar su autoria
            $titulo="AUTORÍA DE TRABAJO";  
            $mensaje="<html>"; 
            $mensaje.="<p>";
            $mensaje.="UNIVERSIDAD NACIONAL AUTÓNOMA DE HONDURAS (UNAH).";
            $mensaje.="</p><BR>";
            $mensaje.="<p>";
            $mensaje.="INSTITUTO DE INVESTIGACIONES ECONÓMICAS Y SOCIALES (IIES).";
            $mensaje.="</p>";
            //$mensaje.="<title></title";
            $mensaje.="<body>";
            $mensaje.="<p>";
            $mensaje.="Estimado(a)";
            $mensaje.="</p><BR>";
            $mensaje.="<p>";
            foreach ($congreso as $key) {
            $mensaje.="EL CONGRESO ".strtoupper($key['nombre_congreso'])."<br>Comunica a usted lo siguiente:<br><br>";                                               
            }
            $mensaje.="Se ha subido un TRABAJO DE INVESTIGACIÓN al Congreso y se requiere de usted, para que ingrese y actualice sus datos y de igual manera confirme su AUTORÍA del trabajo, Ingresando a la sección de GESTIÓN DE TRABAJOS DEL AUTOR y luego ACEPTAR AUTORÍAS."
                    . "<br><br>PARA DICHO PROCESO INGRESE A LA DIRECCIÓN:<br> <a href='http://ceat-unah.org/sistemas/gcongreso/beta/index.php' target='_blank'>AQUÍ</a>"
                    . "<br><br>";
            $mensaje.="</p>";
            $mensaje.="<p>";     
            $mensaje.="Un saludo muy cordial, y gracias por participar en el Congreso.!!!";
            $mensaje.="</p>";
            $mensaje.="</body>";
            $mensaje.="</html>";      
            $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
            $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";           
            if( mail($correo_autor, $titulo, $mensaje, $cabeceras)){
                $enviomj = 1;
            } 
        }
        echo $enviomj;
        
    }*/
}

function aceptarhora()
{
    $idt = filter_input(INPUT_POST, 'idt');
    $si = filter_input(INPUT_POST, 'rd_si');
    include '../clases/class_trabajos.php';
    $tu = new trabajo();
    $tu->inicializartrabajo($idt, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
    if ($si == 1) {
        echo $tu->aceptarhorario(1);
    } else {
        echo  $tu->aceptarhorario(0);
    }
}

function guardar_certificado($caso)
{
    require '../clases/class_certificados.php';
    $id = trim(filter_input(INPUT_POST, 'idcert'));
    $nombre = trim(filter_input(INPUT_POST, 'nombre_c'));
    $c_especial = trim(filter_input(INPUT_POST, 'flexRadioDefault'));
    $c_encabezado = trim(filter_input(INPUT_POST, 'encabezado_c'));
    $motivo = trim(filter_input(INPUT_POST, 'motivo_c'));
    $pie = trim(filter_input(INPUT_POST, 'pie_c'));
    $nombre_persona = trim(filter_input(INPUT_POST, 'slcrolescongreso'));
    $arte  =  filter_input(INPUT_POST, 'archivo_ant');

    //$arte = $_FILES;

    $origencertificados = $_POST['origencertificados'] ? $_POST['origencertificados'] : '0';
    $destinocertificados = $_POST['destinocertificados'] ? $_POST['destinocertificados'] : '0';

    $idusuario_cm = (int)isset($_SESSION['idusuario']) ? "1" : "0";

    // // $fecha_creacion                      =     filter_input(INPUT_POST, 'fecha_creacion');
    // // $id_estado_congreso_fk               =     filter_input(INPUT_POST, 'id_estado_congreso_fk');
    $dao = new certificados();
    //require_once '../clases/autoload.php';

    $res = NULL;
    if ($caso == "guardar") {

        $nombreArchivo = 0;
        if ($_FILES['arte']) {
            $nombreArchivo = $_FILES['arte']['name'];
            $rutaDestino = '../img/certificados/' . $nombreArchivo;

            if (move_uploaded_file($_FILES['arte']['tmp_name'], $rutaDestino)) {
                echo 'El documento se subió correctamente.';
            } else {
                echo 'Error al subir el documento.';
            }
        }

        $arte = $nombreArchivo ? $nombreArchivo : NULL;

        $dao->cinicializar(
            NULL,
            $nombre,
            $c_encabezado,
            $motivo,
            $pie,
            $arte,
            $c_especial,
            $nombre_persona,
            NULL
        );
        $res = $dao->insertar();

        $lastid   =  $dao->lastid();

        $dao->cinicializar(
            $lastid,
            $nombre,
            $c_encabezado,
            $motivo,
            $pie,
            $arte,
            $c_especial,
            $nombre_persona,
            NULL
        );

        $res = $dao->guardar_firma_persona();
    } else {

        $nombreArchivo = 0;
        if ($_FILES['arte']) {

            $archivoAEliminar = '../img/certificados/' . $arte;
            if (file_exists($archivoAEliminar)) {
                unlink($archivoAEliminar);
            }

            $nombreArchivo = $_FILES['arte']['name'];
            $rutaDestino = '../img/certificados/' . $nombreArchivo;

            if (move_uploaded_file($_FILES['arte']['tmp_name'], $rutaDestino)) {
                echo 'El documento se subió correctamente.';
            } else {
                echo 'Error al subir el documento.';
            }
        }

        $arte = $nombreArchivo ? $nombreArchivo : NULL;

        $dao->cinicializar(
            $id,
            $nombre,
            $c_encabezado,
            $motivo,
            $pie,
            $arte,
            $c_especial,
            $nombre_persona,
            NULL
        );
        $res = $dao->modificar();

        $res = $dao->eliminar_firma_persona($id);

        $res = $dao->guardar_firma_persona();
    }

    if ($res) {
        //echo $fecha_inicio;
        echo "1"; //."<>".$congreso->json_ultimo_congreso();
    } else {
        echo 0;
    }
}

function get_certificado($id)
{

    require '../clases/class_certificados.php';
    // // $id_estado_congreso_fk               =     filter_input(INPUT_POST, 'id_estado_congreso_fk');
    $dao = new certificados();
    //require_once '../clases/autoload.php';

    $res = $dao->getById($id);
    if ($id != '') {
        echo json_encode($res);
    } else {
        echo $id . 'vacio';
    }
}

function get_usuario_firma_certificado()
{

    require '../clases/class_certificados.php';
    $id = filter_input(INPUT_POST, 'id');
    $dao = new certificados();

    $res = $dao->usuario_firma_certificado($id);
    if ($id != '') {
        echo json_encode($res);
    } else {
        echo $id . 'vacio';
    }
}

function delete_certificado($id)
{

    require '../clases/class_certificados.php';
    // // $id_estado_congreso_fk               =     filter_input(INPUT_POST, 'id_estado_congreso_fk');
    $dao = new certificados();
    //require_once '../clases/autoload.php';

    $res = $dao->deleteById($id);
    if ($res) {
        echo 'deleted';
    } else {
        echo 'fail';
    }
}

function get_espacio($id)
{
    require_once '../clases/class_espacio.php';
    $bdd = new basedatos();
    $datos = $bdd->select("SELECT * FROM tbl_espacio WHERE id_espacio_pk = $id");
    echo json_encode($datos[0]);
}

function eliminar_espacio()
{
    $id = filter_input(INPUT_POST, 'id');
    require_once '../clases/class_espacio.php';
    $programa = new espacio();
    $programa->eliminarespacio($id);
}

function registrar_espacios()
{
    require_once '../clases/class_espacio.php';

    if (filter_input(INPUT_POST, "caso") == 'actualizar_espacio') {

        $tnombreespacio = filter_input(INPUT_POST, 'nombre_espacio');
        $tnombrealternativo = filter_input(INPUT_POST, 'nombre_alternativo');
        $tdescripcion = filter_input(INPUT_POST, 'descripcion');
        $tcantpersonas = filter_input(INPUT_POST, 'cant_personas');
        $tcanttomas = filter_input(INPUT_POST, 'cant_tomas');
        $tcomentariosadicionales = filter_input(INPUT_POST, 'comentarios_adicionales');
        $tmapaespacio = '';
        $id = filter_input(INPUT_POST, 'idespacio');

        $ant  =  filter_input(INPUT_POST, 'archivo_ant');
        $nombreArchivo = 0;
        if ($_FILES['mapa_espacio']) {

            $archivoAEliminar = '../img/espacios/' . $ant;
            if (file_exists($archivoAEliminar)) {
                unlink($archivoAEliminar);
            }

            $nombreArchivo = $_FILES['mapa_espacio']['name'];
            $rutaDestino = '../img/espacios/' . $nombreArchivo;

            if (move_uploaded_file($_FILES['mapa_espacio']['tmp_name'], $rutaDestino)) {
                echo 'El documento se subió correctamente.';
            } else {
                echo 'Error al subir el documento.';
            }
        }

        $tmapaespacio = $nombreArchivo ? $nombreArchivo : NULL;

        $espacio = new espacio();

        $espacio->einicializar('NULL', $tnombreespacio, $tnombrealternativo, $tdescripcion, $tcantpersonas, $tcanttomas, $tmapaespacio, $tcomentariosadicionales);
        $idespacio = $espacio->actualizar_espacio($id);

        if ($idespacio != 0) {
            echo 1;
        } else {
            echo 0;
        }
    } else {

        $tnombreespacio = filter_input(INPUT_POST, 'nombre_espacio');
        $tnombrealternativo = filter_input(INPUT_POST, 'nombre_alternativo');
        $tdescripcion = filter_input(INPUT_POST, 'descripcion');
        $tcantpersonas = filter_input(INPUT_POST, 'cant_personas');
        $tcanttomas = filter_input(INPUT_POST, 'cant_tomas');
        $tcomentariosadicionales = filter_input(INPUT_POST, 'comentarios_adicionales');
        $tmapaespacio = "";

        $nombreArchivo = 0;
        if ($_FILES['mapa_espacio']) {
            $nombreArchivo = $_FILES['mapa_espacio']['name'];
            $rutaDestino = '../img/espacios/' . $nombreArchivo;

            if (move_uploaded_file($_FILES['mapa_espacio']['tmp_name'], $rutaDestino)) {
                echo 'El documento se subió correctamente.';
            } else {
                echo 'Error al subir el documento.';
            }
        }

        $tmapaespacio = $nombreArchivo ? $nombreArchivo : NULL;

        $espacio = new espacio();

        $espacio->einicializar('NULL', $tnombreespacio, $tnombrealternativo, $tdescripcion, $tcantpersonas, $tcanttomas, $tmapaespacio, $tcomentariosadicionales);
        $idespacio = $espacio->registro_espacio();

        if ($idespacio != 0) {
            echo 1;
        } else {
            echo 0;
        }
    }
}


function actualizar_actividad()
{
    include(__DIR__ . "/../clases/class_actividad.php");
    $actividad = new actividad();
    $idusuario = $_SESSION['idusuario'];
    setlocale(LC_ALL, "es_ES");
    $id = filter_input(INPUT_POST, "id");
    $tnombre_actividad = filter_input(INPUT_POST, "nombre_actividad");
    $thora_inicio = filter_input(INPUT_POST, "hora_inicio");
    $thora_fin = filter_input(INPUT_POST, "hora_fin");
    $tpresento = "1";
    $tactividad = filter_input(INPUT_POST, "tactividad");
    $ttematicas_trabajo = filter_input(INPUT_POST, "tematicas_trabajo");
    $tfecha = filter_input(INPUT_POST, "fecha");
    $tresponsable = filter_input(INPUT_POST, "responsable");
    $tcomentarios = filter_input(INPUT_POST, "comentarios");
    $tespacio_actividad = filter_input(INPUT_POST, "espacio_actividad");


    $actividad->ainicializar($tnombre_actividad, $thora_inicio, $thora_fin, $tpresento, $tactividad, $tespacio_actividad, $ttematicas_trabajo, $tfecha, $tresponsable, $tcomentarios);
    $actividad->update_actividad($id);
}

function eliminar_actividad()
{
    $id = $_POST['id'];
    include(__DIR__ . "/../clases/class_actividad.php");
    $actividad = new actividad();
    $actividad->eliminaractividad($id);
}

function get_actividad()
{
    $id = filter_input(INPUT_POST, "id");
    include(__DIR__ . "/../clases/class_actividad.php");
    $bdd = new basedatos();
    $datos = $bdd->select("SELECT * FROM tbl_actividad WHERE id_actividad_pk = $id");
    echo json_encode($datos[0]);
}

function guardar_actividad()
{
    include(__DIR__ . "/../clases/class_actividad.php");
    $actividad = new actividad();
    $idusuario = $_SESSION['idusuario'];
    setlocale(LC_ALL, "es_ES");
    $id = filter_input(INPUT_POST, "id");
    $tnombre_actividad = filter_input(INPUT_POST, "nombre_actividad");
    $thora_inicio = filter_input(INPUT_POST, "hora_inicio");
    $thora_fin = filter_input(INPUT_POST, "hora_fin");
    $tpresento = "1";
    $tactividad = filter_input(INPUT_POST, "tactividad");
    $ttematicas_trabajo = filter_input(INPUT_POST, "tematicas_trabajo");
    $tfecha = filter_input(INPUT_POST, "fecha");
    $tresponsable = filter_input(INPUT_POST, "responsable");
    $tcomentarios = filter_input(INPUT_POST, "comentarios");
    $tespacio_actividad = filter_input(INPUT_POST, "espacio_actividad");


    $actividad->ainicializar($tnombre_actividad, $thora_inicio, $thora_fin, $tpresento, $tactividad, $tespacio_actividad, $ttematicas_trabajo, $tfecha, $tresponsable, $tcomentarios);
    $actividad->registro_actividad();
}

function guardar_programa()
{
    require_once '../clases/class_programa.php';

    $programa = new programa();

    $tvariableprograma = filter_input(INPUT_POST, 'nombre_programa');
    $tvariableestado = filter_input(INPUT_POST, 'estado_programa');
    $tvariabledescripcion = filter_input(INPUT_POST, 'descripcion_programa');
    $tcreadopor = $_SESSION['idusuario'];  //se puede poner valor
    $tfecha_creacion = null; //se manda curdate
    //$id = filter_input(INPUT_POST, 'id');

    $programa->pinicializar($tvariableprograma, $tvariableestado, $tvariabledescripcion, $tcreadopor, $tfecha_creacion, $tcreadopor, $tfecha_creacion);

    $idprograma = $programa->insertar_programa();

    echo json_encode($idprograma);
}

function actualizar_programa()
{
    require_once '../clases/class_programa.php';

    $programa = new programa();

    $tvariableprograma = filter_input(INPUT_POST, 'nombre_programa');
    $tvariableestado = filter_input(INPUT_POST, 'estado_programa');
    $tvariabledescripcion = filter_input(INPUT_POST, 'descripcion_programa');
    $tmodificadopor = $_SESSION['idusuario'];  //se puede poner valor
    $tfecha_modificacion = null; //se manda curdate
    $id = filter_input(INPUT_POST, 'id');

    $programa->pinicializar($tvariableprograma, $tvariableestado, $tvariabledescripcion, null, null, $tmodificadopor, $tfecha_modificacion);
    //$programa->inicializar_id_actividad($id)

    $idprograma = $programa->update_programa($id);

    echo json_encode($idprograma);
}

function get_programa()
{
    $id = filter_input(INPUT_POST, 'id');
    require_once '../clases/class_programa.php';
    $bdd = new basedatos();
    $datos = $bdd->select("SELECT * FROM tbl_programa WHERE id_programa_pk = $id");
    echo json_encode($datos[0]);
}

function eliminar_programa()
{
    $id = filter_input(INPUT_POST, 'id');
    require_once '../clases/class_programa.php';
    $programa = new programa();
    $res = $programa->eliminarprograma($id);
    echo json_encode($res);
}

function guardar_actividades_voluntarios()
{
    $id = filter_input(INPUT_POST, 'id');
    $nombre_actividad = filter_input(INPUT_POST, 'nombre_actividad');
    $desc_actividad = filter_input(INPUT_POST, 'desc_actividad');
    $horas_sumar = filter_input(INPUT_POST, 'horas_sumar');
    $persona_apoyo = filter_input(INPUT_POST, 'persona_apoyo');
    $fecha_actividad_voluntario = filter_input(INPUT_POST, 'fecha_actividad_voluntario');
    $archio_complementario = filter_input(INPUT_POST, 'archio_complementario');
    $fecha_creacion = NULL;

    include '../clases/class_voluntarios.php';
    $voluntarios = new voluntarios();

    $voluntarios->inicializar_tarea_voluntarios(
        NULL,
        $nombre_actividad,
        $desc_actividad,
        $horas_sumar,
        $persona_apoyo,
        $fecha_actividad_voluntario,
        NULL,
        $archio_complementario,
        $fecha_creacion
    );

    $insertar = $voluntarios->ingresar_tarea_voluntario();
    return $insertar;
}

function actualizar_actividad_voluntario()
{
    $id = filter_input(INPUT_POST, 'id');
    $nombre_actividad = filter_input(INPUT_POST, 'nombre_actividad');
    $desc_actividad = filter_input(INPUT_POST, 'desc_actividad');
    $horas_sumar = filter_input(INPUT_POST, 'horas_sumar');
    $persona_apoyo = filter_input(INPUT_POST, 'persona_apoyo');
    $fecha_actividad_voluntario = filter_input(INPUT_POST, 'fecha_actividad_voluntario');
    $archio_complementario = filter_input(INPUT_POST, 'archio_complementario');
    $fecha_creacion = NULL;

    include '../clases/class_voluntarios.php';
    $voluntarios = new voluntarios();

    $voluntarios->inicializar_tarea_voluntarios(
        $id,
        $nombre_actividad,
        $desc_actividad,
        $horas_sumar,
        $persona_apoyo,
        $fecha_actividad_voluntario,
        NULL,
        $archio_complementario,
        $fecha_creacion
    );

    $insertar = $voluntarios->actualizar_tarea_voluntario($id);
    return $insertar;
}

function get_actividad_voluntario()
{
    $id = filter_input(INPUT_POST, 'id');
    include '../clases/class_voluntarios.php';
    $bdd = new basedatos();
    $datos = $bdd->select("SELECT * FROM tbl_tarea_voluntario WHERE id_tarea_voluntario_pk = $id");
    echo json_encode($datos[0]);
}

function eliminar_actividad_voluntario()
{
    $id = filter_input(INPUT_POST, 'id');
    include '../clases/class_voluntarios.php';
    $voluntarios = new voluntarios();
    $res = $voluntarios->elimina_tarea_voluntario($id);
    echo json_encode($res);
}



/* ---------- Resumenes querys ---------------- */

function crear_resumen()
{

    include '../clases/class_trabajos.php';
    $action = new trabajo();

    $titulo_resumen = filter_input(INPUT_POST, 'titulo_trabajo');
    $fecha_subida_resumen = date("Y-m-d");
    $idpersona = $_SESSION['idpersona'] ? $_SESSION['idpersona'] : '0';
    $idioma = isset($_SESSION['idioma']) ? $_SESSION['idioma'] : 'es';
    $idcongreso = isset($_SESSION['idcongreso']) ? $_SESSION['idcongreso'] : '';
    $fecha = date("Y-m-d_h-i-s");
    $documento = $_FILES["archivo_trabajo_resumen"];
    $nombredocumento = $documento["name"];
    $nombrearch = limpiacadena($nombredocumento);
    $nombrearchivo = $idpersona . '_' . $idioma . '_' . $fecha . '_' . $nombrearch;
    $autor = filter_input(INPUT_POST, 'nombreautor');
    $id_estado_resumen = 1;
    $id_estado_citacion_resumen = 1;
    $more_authores_resumen = filter_input(INPUT_POST, 'tautor');
    $num_autores_resumen = filter_input(INPUT_POST, 'n_autores');
    $correo = filter_input(INPUT_POST, 'correo');
    $id_tipo_resumen = 1;
    $idioma_resumen = "es";


    //$idusuario = isset($_SESSION['idusuario']) ? $_SESSION['idusuario'] : '0';

    if ($_FILES["archivo_trabajo_resumen"]) {
        $rutaDestino = '../trabajos/congreso/resumenes/' . $nombrearchivo;

        if (move_uploaded_file($_FILES["archivo_trabajo_resumen"]['tmp_name'], $rutaDestino)) {
            echo 'El documento se subió correctamente.';
        } else {
            echo 'Error al subir el documento.';
        }
    }

    $action->inicializarresumen(
        $titulo_resumen,
        $fecha_subida_resumen,
        $nombrearchivo,
        $autor,
        $id_estado_resumen,
        $id_estado_citacion_resumen,
        $more_authores_resumen,
        $num_autores_resumen,
        $correo,
        $id_tipo_resumen,
        $idioma_resumen
    );

    $respuesta = $action->insertar_resumen();

    if ($respuesta != 0) {
        echo $respuesta;
    } else {
        echo 0;
    }
}


function eliminar_resumen()
{
    $id = filter_input(INPUT_POST, 'id');
    include '../clases/class_trabajos.php';
    $action = new trabajo();
    $res = $action->eliminarresumen($id);

    if ($id != '') {
        echo json_encode($res);
    } else {
        echo $id . ' vacio';
    }
}


function descargar_resumen()
{
    $id = filter_input(INPUT_GET, 'id');
    include '../clases/class_trabajos.php';
    $tu = new trabajo();
    $data = $tu->getresumen($id);
    //$tipotrabajo = $data[0]['id_tipo_trabajo_fk'];

    $file = '../trabajos/congreso/resumenes' . '/' . $data[0]['ubicacion_archivo'];

    if (file_exists($file) && $data[0]['ubicacion_archivo'] != '') {
        header("Location: $file");
        exit;
    } else {
        //header("Location: ../dashboard.php?page=ver_trabajos");
        echo 'No hay ningún archivo vinculado';
    }
}
