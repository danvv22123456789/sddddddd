<?php

/* 
 * Clase noticia
 * Brayan Triminio
 * 28/7/17
 */
require_once  'class_base.php';
class noticias{
    private $base;
    private $id_noticia_pk ;
    private $titulo ;
    private $imagen ;
    private $descripcion ;
    private $id_usuario_congreso_rol_fk ;
    private $fecha ;
    private $creado_por ;
    private $fecha_creacion ;
    private $modificado_por ;
    private $fecha_modificacion ;   


    public function __construct()
    {
        $this->base = new basedatos();
    }

    /*Metodo para visualizar las noticias por el asistente */
    public function ver_noticias(){
        $pdo = $this->base->abrir_conexion();
        $datos= $pdo -> query("select * from tbl_noticia"); 
        return $datos;
    }
    
}
