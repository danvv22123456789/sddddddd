<?php



require_once 'class_base.php';

class espacio
{
    private $base;
    private $idespacio;
    private $nombre_espacio;
    private $nombre_alternativo;
    private $descripcion_espacio;
    private $capacidad_personas;
    private $numero_tomacorriente;
    private $mapa_espacio;
    private $comentarios;


    public function __construct()
    {
        $this->base = new basedatos();
    }
    public function einicializar($idespacio, $nombre_espacio, $nombre_alternativo, $descripcion_espacio, $capacidad_personas, $numero_tomacorriente, $mapa_espacio, $comentarios)
    {


        $this->idespacio = $idespacio;
        $this->nombre_espacio = $nombre_espacio;
        $this->nombre_alternativo = $nombre_alternativo;
        $this->descripcion_espacio = $descripcion_espacio;
        $this->capacidad_personas = $capacidad_personas;
        $this->numero_tomacorriente = $numero_tomacorriente;
        $this->mapa_espacio = $mapa_espacio;
        $this->comentarios = $comentarios;
    }

    /************setters y getters******/

    public function getIdEspacio()
    {
        return $this->idespacio;
    }

    public function setIdEspacio($idespacio)
    {
        $this->idespacio = $idespacio;
    }

    public function getNombreEspacio()
    {
        return $this->nombre_espacio;
    }

    public function setNombreEspacio($nombre_espacio)
    {
        $this->nombre_espacio = $nombre_espacio;
    }

    public function getNombreAlternativo()
    {
        return $this->nombre_alternativo;
    }

    public function setNombreAlternativo($nombre_alternativo)
    {
        $this->nombre_alternativo = $nombre_alternativo;
    }

    public function getDescripcionEspacio()
    {
        return $this->descripcion_espacio;
    }

    public function setDescripcionEspacio($descripcion_espacio)
    {
        $this->descripcion_espacio = $descripcion_espacio;
    }

    public function getCapacidadPersonas()
    {
        return $this->capacidad_personas;
    }

    public function setCapacidadPersonas($capacidad_personas)
    {
        $this->capacidad_personas = $capacidad_personas;
    }

    public function getNumeroTomacorriente()
    {
        return $this->numero_tomacorriente;
    }

    public function setNumeroTomacorriente($numero_tomacorriente)
    {
        $this->numero_tomacorriente = $numero_tomacorriente;
    }

    public function getMapaEspacio()
    {
        return $this->mapa_espacio;
    }

    public function setMapaEspacio($mapa_espacio)
    {
        $this->mapa_espacio = $mapa_espacio;
    }

    public function getComentarios()
    {
        return $this->comentarios;
    }

    public function setComentarios($comentarios)
    {
        $this->comentarios = $comentarios;
    }

    /************fin setters y getters**/



    public function registro_espacio()
    {
        $pdo = $this->base->abrir_conexion();
        $datos = $pdo->prepare("INSERT INTO tbl_espacio(nombre_espacio, nombre_alternativo, descripcion_espacio, capacidad_personas, numero_tomacorriente, mapa_espacio, comentarios) 
              VALUES (?, ?, ?, ?, ?, ?, ?)");

        try {
            $resultado = $datos->execute([
                $this->nombre_espacio, $this->nombre_alternativo, $this->descripcion_espacio,
                $this->capacidad_personas, $this->numero_tomacorriente, $this->mapa_espacio, $this->comentarios
            ]);
            return 1;
        } catch (Exception $e) {
            return 0;
        }
    }

    public function actualizar_espacio($id)
    {
        $pdo = $this->base->abrir_conexion();
        $datos = $pdo->prepare("UPDATE tbl_espacio SET nombre_espacio = ?,nombre_alternativo=?,descripcion_espacio=?,capacidad_personas=?,mapa_espacio=?,numero_tomacorriente=?,comentarios=? WHERE id_espacio_pk = ?");

        try {
            $resultado = $datos->execute([$this->nombre_espacio, $this->nombre_alternativo, $this->descripcion_espacio,
                $this->capacidad_personas, $this->mapa_espacio,$this->numero_tomacorriente,  $this->comentarios,$id]);
            return $resultado;
        } catch (Exception $e) {
            echo var_dump($e);
            return 0;
        }
    }

    public function eliminarespacio($id){
        $pdo = $this->base->abrir_conexion();
        $datos = $pdo->prepare("DELETE FROM tbl_espacio WHERE id_espacio_pk=?");
        $resultado =  $datos->execute([$id]);
        echo $resultado;
    }
}
