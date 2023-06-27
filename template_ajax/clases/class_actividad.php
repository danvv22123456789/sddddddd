<?php
require_once 'class_base.php';
class actividad
{
    // Propiedades de la clase
    private $base;
    private $id_actividad;
    private $nombre_actividad;
    private $hora_inicio;
    private $hora_final;
    private $presento;
    private $id_tipo_actividad;
    private $id_espacio;
    private $id_tematica;

    private $fecha_actividad;
    private $responsable;
    private $comentarios;

    public function __construct()
    {
        $this->base = new basedatos();
    }

    // Método para inicializar las propiedades de la clase
    public function ainicializar($nombre_actividad, $hora_inicio, $hora_final, $presento, $id_tipo_actividad, $id_espacio, $id_tematica, $fecha_actividad, $responsable, $comentarios)
    {
        $this->nombre_actividad = $nombre_actividad;
        $this->hora_inicio = $hora_inicio;
        $this->hora_final = $hora_final;
        $this->presento = $presento;
        $this->id_tipo_actividad = $id_tipo_actividad;
        $this->id_espacio = $id_espacio;
        $this->id_tematica = $id_tematica;
        $this->fecha_actividad = $fecha_actividad;
        $this->responsable = $responsable;
        $this->comentarios = $comentarios;
    }

    // Métodos getter y setter para acceder a las propiedades de la clase
    public function getIdActividad()
    {
        return $this->id_actividad;
    }

    public function setIdActividad($id_actividad)
    {
        $this->id_actividad = $id_actividad;
    }

    public function getNombreActividad()
    {
        return $this->nombre_actividad;
    }

    public function setNombreActividad($nombre_actividad)
    {
        $this->nombre_actividad = $nombre_actividad;
    }

    public function getHoraInicio()
    {
        return $this->hora_inicio;
    }

    public function setHoraInicio($hora_inicio)
    {
        $this->hora_inicio = $hora_inicio;
    }

    public function getHoraFinal()
    {
        return $this->hora_final;
    }

    public function setHoraFinal($hora_final)
    {
        $this->hora_final = $hora_final;
    }

    public function getPresento()
    {
        return $this->presento;
    }

    public function setPresento($presento)
    {
        $this->presento = $presento;
    }

    public function getIdTipoActividad()
    {
        return $this->id_tipo_actividad;
    }

    public function setIdTipoActividad($id_tipo_actividad)
    {
        $this->id_tipo_actividad = $id_tipo_actividad;
    }

    public function getIdEspacio()
    {
        return $this->id_espacio;
    }

    public function setIdEspacio($id_espacio)
    {
        $this->id_espacio = $id_espacio;
    }

    public function getFechaActividad()
    {
        return $this->fecha_actividad;
    }

    public function setFechaActividad($fecha_actividad)
    {
        $this->fecha_actividad = $fecha_actividad;
    }

    public function getResponsable()
    {
        return $this->responsable;
    }

    public function setResponsable($responsable)
    {
        $this->responsable = $responsable;
    }

    public function getComentarios()
    {
        return $this->comentarios;
    }

    public function setComentarios($comentarios)
    {
        $this->comentarios = $comentarios;
    }

    // Método para registrar una actividad en la base de datos
    public function registro_actividad()
    {
        $pdo = $this->base->abrir_conexion();
        $datos = $pdo->prepare("INSERT INTO tbl_actividad(nombre_actividad, hora_inicio, hora_final, presento, id_tipo_actividad_fk, id_espacio_pk,id_tematica_fk, fecha_actividad, responsable, comentarios) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?,?)");

        try {
            $resultado = $datos->execute([$this->nombre_actividad, $this->hora_inicio, $this->hora_final, $this->presento, $this->id_tipo_actividad, $this->id_espacio, $this->id_tematica, $this->fecha_actividad, $this->responsable, $this->comentarios]);
            return 1;
        } catch (Exception $e) {
            echo var_dump($e);
            return 0;
        }
    }

    public function update_actividad($id)
    {
        $pdo = $this->base->abrir_conexion();
        $datos = $pdo->prepare("UPDATE tbl_actividad SET nombre_actividad = ?, hora_inicio = ?, hora_final = ?, presento = ?, id_tipo_actividad_fk = ?, id_espacio_pk = ?,id_tematica_fk = ?, fecha_actividad = ?, responsable = ?, comentarios = ? WHERE id_actividad_pk = ?");

        try {
            $resultado = $datos->execute([$this->nombre_actividad, $this->hora_inicio, $this->hora_final, $this->presento, $this->id_tipo_actividad, $this->id_espacio, $this->id_tematica, $this->fecha_actividad, $this->responsable, $this->comentarios,$id]);
            return $resultado;
        } catch (Exception $e) {
            echo var_dump($e);
            return 0;
        }
    }
    public function eliminaractividad($id){
        $pdo = $this->base->abrir_conexion();
        $datos = $pdo->prepare("DELETE FROM tbl_actividad WHERE id_actividad_pk=?");
        $resultado =  $datos->execute([$id]);
        echo $resultado;
    }
}
