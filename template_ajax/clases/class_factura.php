<?php

/*
  Brayan Triminio
  05-9-2017
  
 */

require_once 'class_base.php';

class factura
{
    private $base;
    /********************Datos para guardar tour********************************/
    private $id_tour_pk;
    private $nombre_tour;
    private $descripcion;
    private $comentario;
    private $costo;
    private $Impuesto;
    private $creado_por;
    private $fecha_creacion;
    private $modificado_por;
    private $fecha_modificacion;

    /********************Datos para guardar articulo (tbl_costo)****************/
    private $id_costo_pk;
    private $producto;
    private $precio_unitario;
    private $grabado_exento;
    private $id_congreso_fk;

    private $impuesto;

    /****************Datos para guardar detalle factura (tbl_factura_detalle)***/
    private $id_factura_detalle_pk;
    private $id_factura_fk;
    private $cantidad_adquirida;
    private $fecha;
    private $total_pagar;

    /****************Dato para guardar costo_x_usuario (tbl_costo_x_usuario) y tour por usuario (tbl_tour_usuario)***/
    private $idusuario;
    private $id_tour_usuario_pk;


    public function __construct()
    {
        $this->base = new basedatos();
    }

    public function inicia_tour($id_tour_pk, $nombre_tour, $descripcion, $comentario, $costo, $Impuesto, $creado_por, $fecha_creacion, $modificado_por, $fecha_modificacion)
    {
        $this->id_tour_pk       = $id_tour_pk;
        $this->nombre_tour      = $nombre_tour;
        $this->descripcion      = $descripcion;
        $this->comentario       = $comentario;
        $this->costo            = $costo;
        $this->Impuesto         = $Impuesto;
        $this->creado_por       = $creado_por;
        $this->fecha_creacion   = $fecha_creacion;
        $this->modificado_por   = $modificado_por;
        $this->fecha_modificacion = $fecha_modificacion;
    }
    public function crear_tour()
    {
        $pdo = $this->base->abrir_conexion();
        $datos   =   $pdo->prepare("INSERT INTO tbl_tour(id_tour_pk, nombre_tour, descripcion, comentario, costo,Impuesto,creado_por, fecha_creacion, modificado_por, fecha_modificacion) VALUE (?,?,?,?,?,?,?,?,?,?)");

        $resultado = $datos->execute([
            $this->id_tour_pk,  $this->nombre_tour,  $this->descripcion, $this->comentario,
            $this->costo, $this->Impuesto, $this->creado_por, $this->fecha_creacion,
            $this->modificado_por,  $this->fecha_modificacion
        ]);
    }

    public function inf_tour($id)
    {
        $pdo = $this->base->abrir_conexion();

        return $bdd = $pdo->query("select * from tbl_tour where id_tour_pk ='" . $id . "' ");
    }

    public function inicia_modificar_tour($id_tour_pk, $nombre_tour, $descripcion, $comentario, $costo, $modificado_por, $fecha_modificacion)
    {
        $this->id_tour_pk       = $id_tour_pk;
        $this->nombre_tour      = $nombre_tour;
        $this->descripcion      = $descripcion;
        $this->comentario       = $comentario;
        $this->costo            = $costo;
        $this->modificado_por   = $modificado_por;
        $this->fecha_modificacion = $fecha_modificacion;
    }

    public function gettour($id){
        $bdd = new basedatos();
        $datos = $bdd ->select("SELECT * FROM tbl_tour
        WHERE id_tour_pk = '$id'");
        return $datos;
    }

    public function modificar_tour()
    {

        $pdo = $this->base->abrir_conexion();
        $datos =  $pdo->prepare("UPDATE tbl_tour set nombre_tour=?, 
        descripcion=?, comentario=?, costo=?, modificado_por=?, fecha_modificacion=? 
        where id_tour_pk=?");
        try {
            $resultado = $datos->execute([
                $this->nombre_tour,  $this->descripcion, $this->comentario,
                $this->costo,  $this->modificado_por, date("y-m-d"), $this->id_tour_pk
            ]);
        } catch (PDOException $e) {
            echo "Error al ejecutar la consulta: " . $e->getMessage();
        }
        echo json_encode($resultado);
    }

    public function eliminar_tour($id) {
        $pdo = $this->base->abrir_conexion();  
        $dato = $pdo->prepare("DELETE FROM `tbl_tour` WHERE `id_tour_pk` = ?");
        try {
            $dato->execute([$id]);
            
        } catch (PDOException $e) {
            echo "Error al ejecutar la consulta: " . $e->getMessage();
        }
        
        echo json_encode($dato);
        
    }

    function mostrarfacturas()
    {
        $pdo = $this->base->abrir_conexion();
        $datos = $pdo->query("SELECT * From tbl_tour 
        ");
        return $datos;
    }


    public function inicia_guardar_articulo($id_costo_pk, $producto, $precio_unitario, $grabado_exento, $descripcion, $id_congreso_fk,$impuesto)
    {
        $this->id_costo_pk      = $id_costo_pk;
        $this->producto         = $producto;
        $this->precio_unitario  = $precio_unitario;
        $this->grabado_exento   = $grabado_exento;
        $this->descripcion      = $descripcion;
        $this->id_congreso_fk   = $id_congreso_fk;
        $this->impuesto         = $impuesto;
    }



    public function guardar_articulo()
    {
        $pdo = $this->base->abrir_conexion();
        $datos   = $pdo->prepare("INSERT INTO tbl_costo(producto, 
        precio_unitario, grabado_exento, descripcion, id_congreso_fk) VALUE (?,?,?,?,?)");
        $resultado = $datos->execute([
            $this->producto,  $this->precio_unitario,
            $this->grabado_exento, $this->descripcion,$this->id_congreso_fk
        ]);
        echo $resultado;
    }

    function mostrararticulos()
    {
        $pdo = $this->base->abrir_conexion();
        $datos = $pdo->query("SELECT * From tbl_costo");
        return $datos;
    }
    public function inf_articulo($id)
    {
        $bdd = new basedatos();
        $datos = $bdd ->select("SELECT * FROM tbl_costo 
        WHERE id_costo_pk = '$id'");
        return $datos;
    }

    public function modificar_articulo()
    {

        $pdo = $this->base->abrir_conexion();
        $datos =  $pdo->prepare("UPDATE tbl_costo set producto=?, 
            precio_unitario=?, grabado_exento=?, descripcion=?
            where id_costo_pk=?");
            
        $resultado = $datos->execute([
            $this->producto,  $this->precio_unitario,
            $this->grabado_exento, $this->descripcion, $this->id_costo_pk
        ]);
    }

    public function eliminar_articulo($id) {
        $pdo = $this->base->abrir_conexion();  
        $dato = $pdo->prepare("DELETE FROM `tbl_costo` WHERE `id_costo_pk` = ?");
        try {
            $dato->execute([$id]);
            
        } catch (PDOException $e) {
            echo "Error al ejecutar la consulta: " . $e->getMessage();
        }
        
        echo json_encode($dato);
        
    }
}
