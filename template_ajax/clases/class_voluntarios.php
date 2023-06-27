<?php
/*
Clase 
creado por:  OM
fecha: 24/02/17

*/
require_once 'class_base.php';
require_once 'class_persona.php';

class voluntarios
{
    private $base;
    //variables crear actividad

    private $id;
    private $nombre;
    private $descripcion;
    private $cantidad_horas;
    private $persona_apoyo;
    private $fecha_inicio;
    private $fecha_fin;
    private $fecha_creacion;
    private $archivo;
    public function __construct()
    {
        $this->base = new basedatos();
    }
    public function inicializar_voluntarios(
        $nombre,
        $descripcion,
        $cantidad_horas,
        $persona_apoyo,
        $fecha_inicio,
        $fecha_fin,
        $archivo,
        $fecha_creacion
    ) {
        //$this->idtrabajo=$idtrabajo;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->cantidad_horas = $cantidad_horas;
        $this->persona_apoyo = $persona_apoyo;
        $this->fecha_inicio = $fecha_inicio;
        $this->fecha_fin = $fecha_fin;
        $this->archivo = $archivo;
        $this->fecha_creacion = $fecha_creacion;
    }


    //:: insertar voluntarios :://

    public function insertar_voluntario()
    {
        $pdo = $this->base->abrir_conexion();
        $datos   =   $pdo->prepare("INSERT INTO tbl_voluntario (numero_horas,comentarios,
      estado,id_rol_congreso_fk) 
              VALUES (?,?,?,?)");

        $resultado = $datos->execute([
            $this->cantidad_horas,
            $this->descripcion, 1, 1
        ]);
        echo $resultado;
        //  return $pdo->lastInsertId();
    }

    //:: consultar registros gestion voluntarios - crear actividad :://

    public function tbl_voluntarios()
    {
        $pdo = $this->base->abrir_conexion();
        $datos = $pdo->query("SELECT * FROM tbl_voluntario");
        return $datos;
    }

    public function tbl_actividad_voluntarios()
    {
        $pdo = $this->base->abrir_conexion();
        $datos = $pdo->query("SELECT * FROM tbl_actividad_voluntario");
        return $datos;
    }

    //:: buscar registro voluntarios segun id :://

    public function tbl_voluntarios_id($id)
    {

        $pdo = $this->base->abrir_conexion();
        $datos = $pdo->query("SELECT * FROM tbl_voluntario where id_voluntario_pk = '$id'");
        $tipo_trabajo = $datos->fetch(PDO::FETCH_ASSOC);
        echo json_encode($tipo_trabajo);
    }

     //:: eliminar voluntarios activdad :://

     public function eliminarvoluntarios($id)
     { //eliminar		
         $pdo = $this->base->abrir_conexion();
         $datos = $pdo->prepare("DELETE FROM tbl_voluntario WHERE id_voluntario_pk=?");
         $resultado =  $datos->execute([$id]);
         echo $resultado;
     }

     public function inicializar_tarea_voluntarios(
        $id,
        $nombre,
        $descripcion,
        $cantidad_horas,
        $persona_apoyo,
        $fecha_inicio,
        $fecha_fin,
        $archivo,
        $fecha_creacion
    ) {
        $this->id=$id;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->cantidad_horas = $cantidad_horas;
        $this->persona_apoyo = $persona_apoyo;
        $this->fecha_inicio = $fecha_inicio;
        $this->fecha_fin = $fecha_fin;
        $this->archivo = $archivo;
        $this->fecha_creacion = $fecha_creacion;
    }

     public function ingresar_tarea_voluntario(){
        $pdo = $this->base->abrir_conexion();
        $datos = $pdo->prepare("INSERT INTO tbl_tarea_voluntario(nombre_tarea,descripcion,hora_tarea,persona_apoyo,fecha_tarea,archivo_complementario,fecha_creacion) 
              VALUES (?,?,?,?,?,?,?)");

        try {
            $resultado = $datos->execute([
                $this->nombre,
                $this->descripcion,
                $this->cantidad_horas,
                $this->persona_apoyo,
                $this->fecha_inicio,
                $this->archivo,
                date("y-m-d")
            ]);
            return $resultado;
        } catch (Exception $e) {
            return 0;
        }
     }

     public function actualizar_tarea_voluntario($id){
        $pdo = $this->base->abrir_conexion();
        $datos = $pdo->prepare("UPDATE tbl_tarea_voluntario set nombre_tarea = ?,descripcion = ?,hora_tarea = ?,persona_apoyo = ?,fecha_tarea = ?,archivo_complementario = ?,fecha_creacion = ? where id_tarea_voluntario_pk=?");
        $resultado = $datos->execute([
                $this->nombre,
                $this->descripcion,
                $this->cantidad_horas,
                $this->persona_apoyo,
                $this->fecha_inicio,
                $this->archivo,
                $this->fecha_creacion,$id]);
        echo $resultado;
     }
/*
    public function actualizar_tarea_voluntario(){
        $pdo = $this->base->abrir_conexion(); 
    
        $datos= $pdo->prepare("UPDATE tbl_tarea_voluntario set nombre_tarea=?,descripcion=?,archivo_complementario=?,persona_apoyo=?,fecha_modificacion=?,fecha_tarea=?,hora_tarea=? where id_tarea_voluntario_pk=?");
       $resultado = $datos->execute([$this->nombre,$this->descripcion,$this->archivo_complementario,$this->persona_apoyo,date('Y-m-d'),$this->fecha_tarea,$this->hora_tarea,$this->id_tarea_voluntario_pk]);
        return $resultado;
    }*/

     public function elimina_tarea_voluntario($id){
        $pdo = $this->base->abrir_conexion();
        $datos = $pdo->prepare("DELETE FROM tbl_tarea_voluntario WHERE id_tarea_voluntario_pk=?");
        $resultado =  $datos->execute([$id]);
        echo $resultado;
     }

}
