<?php
require_once 'class_base.php';
class Tematica  {

    private $base;
    private $idlinea;
    private $idtematica;
    private $nombre_tematica;
    private $abreviacion;
    private $descripcion;
    private $comentario;
    private $idusuario;
    private $idcongreso;

    public function __construct() {
        $this->base = new basedatos();
        
    }
    
    public function tematica_inicializar($idtematica, $nombre_tematica, $idlinea, $abreviacion, $descripcion, $comentario, $idusuario) {
        $this->idtematica = $idtematica;
        $this->idlinea = $idlinea;
        $this->nombre_tematica = $nombre_tematica;
        $this->abreviacion = $abreviacion;
        $this->descripcion = $descripcion;
        $this->comentario = $comentario;
        $this->idusuario = $idusuario;
    }
    

    public function crear_tematica() {
        $pdo = $this->base->abrir_conexion();    
        $datos =  $pdo->prepare("INSERT INTO tbl_tematica(id_tematica_pk,nombre_tematica, abreviacion,
        descripcion_tematica,  comentarios,  id_linea_investigacion_fk,  creado_por,fecha_creacion,
        modificado_por,fecha_modificacion)
        VALUES (?,?,?,?,?,?,?,?,?,?)");

        $resultado=$datos->execute([NULL,$this->nombre_tematica, $this->abreviacion,  
        $this->descripcion,$this->comentario,  $this->idlinea,
        $this->idusuario, date("y-m-d"),$this->idusuario, date("y-m-d")]);

      

    }

    public function mostrarTematicas() {
        $datos = $this->base->select("SELECT a.id_tematica_pk, a.nombre_tematica, b.id_linea_investigacion_pk, b.nombre_linea_investigacion, a.abreviacion, a.descripcion_tematica, a.comentarios
        FROM tbl_tematica a 
JOIN tbl_linea_investigacion b ON a.id_linea_investigacion_fk = b.id_linea_investigacion_pk"); 
        return $datos;
    }

    public function modificar_tematica() {

          $pdo = $this->base->abrir_conexion();    
          $datos =  $pdo->prepare("UPDATE tbl_tematica SET nombre_tematica=?,
          abreviacion=?, id_linea_investigacion_fk=?, descripcion_tematica=?, comentarios=?,
           modificado_por=?, fecha_modificacion=? WHERE id_tematica_pk=?");

        $resultado=$datos->execute([$this->nombre_tematica, $this->abreviacion,  $this->idlinea,
        $this->descripcion,  $this->comentario,  $this->idusuario, date("y-m-d"),  $this->idtematica,]);

        $datos =  $pdo->prepare("INSERT INTO tbl_log(id_log_pk,id_usuario_fk, fecha, hora, ip,
        informacion_extra,  id_tipo_log_fk) VALUES (?,?,?,?,?,?,?)");
        $resultado=$datos->execute([NULL,$this->idusuario, date("y-m-d"), date('H:i:s'),
        $_SERVER['REMOTE_ADDR'], "Modificación de una temática de investigación", 2]);

        echo $datos;
    }
    
    public function eliminar_tematica($id_tematica,$idusuario) {
        $pdo = $this->base->abrir_conexion();  
        $dato = $pdo->prepare("DELETE FROM `tbl_tematica` WHERE `id_tematica_pk` = ?");
        try {
            $dato->execute([$id_tematica]);
            /*
            $dato = $pdo->prepare("INSERT INTO tbl_log(id_usuario_fk, fecha, hora, ip, informacion_extra, id_tipo_log_fk) VALUES(?,?,?,?,?,?)");
            $dato = $dato->execute([$idusuario, date("y-m-d"), date('H:i:s'), $_SERVER['REMOTE_ADDR'], "Eliminación de una temática de investigación", 3]);
            */
        } catch (PDOException $e) {
            echo "Error al ejecutar la consulta: " . $e->getMessage();
        }
        
        echo json_encode($dato);
        
    }

    public function gettematica($id){
        $bdd = new basedatos();
        $datos = $bdd ->select("SELECT * FROM tbl_tematica
        WHERE id_tematica_pk = '$id'");
        return $datos;
    }
    
    public function get_ultima_linea() {
        $datos = $this->base->select("SELECT  * FROM `tbl_temmatica` WHERE 1=1 ORDER BY `id_tematica_pk` DESC LIMIT 1 ");
        echo $datos;
    }
    
    public function inicializar_linea_congreso($id_congreso) {
        $this->idcongreso = $id_congreso;
    }

    function select_lineas_investigacion(){
        $pdo = $this->base->abrir_conexion();    
        $datos = $pdo->query("SELECT a.id_linea_investigacion_pk, a.nombre_linea_investigacion
        FROM tbl_linea_investigacion a");
        return $datos;
    }
}
