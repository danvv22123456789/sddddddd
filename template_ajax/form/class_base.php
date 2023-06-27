<?php

/* ---------------------------------------------------------------------
  IV.  Clase base de datos las cual tiene como fin ser utilizada para establecer cualquier tipo de comunicacion entre el sistema y la base de datos. Esta aportara una facil actualizacion del codigo, modificandolo en caso de que el metodo de mysqli este obsoleto.
  --------------------------------------------------------------------- */
/*
define("bd_h", "localhost");
define("bd_b", "redcied4_congresocacce");
define("bd_u", "redcied4_cacce");
define("bd_p", "cacce_2023");
*/


define("bd_h", "localhost");
define("bd_b", "dbcongresoceat");
define("bd_u", "root");
define("bd_p", "");

class basedatos {

    private $host = bd_h;
    private $basededatos = bd_b;
    private $usuario = bd_u;
    private $password = bd_p;
    private $conexion;
    private $num_row;
    public $deleteFrom;

    /* ----------------------------------------------------------------------------------------------------------
      ABRIR CONEXION
      ---------------------------------------------------------------------------------------------------------- */
    public function __construct() { 
    }

    public function abrir_conexion(){
        $connection = "mysql:host=".$this->host.";dbname=".$this->basededatos.";charset=utf8";
    
        try{
            $this->conexion = new PDO($connection,$this->usuario,$this->password);
            $this->conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);          
        } catch (PDOException $e){
            $this->conexion = 'Error de conexión';
            echo "ERROR: ". $e->getMessage();

        }
      return $this->conexion;
    }


    /* ----------------------------------------------------------------------------------------------------------
      CERRAR CONEXION
      ---------------------------------------------------------------------------------------------------------- */

    public function cerrar_conexion() {
        mysqli_close($this->conexion);
    }

    /* ----------------------------------------------------------------------------------------------------------
      SELECT
      ---------------------------------------------------------------------------------------------------------- */

    public function select($sql) {
        $pdo = $this->abrir_conexion();
        $datos = $pdo->query($sql);
       
     
        return $filas = $datos->fetchAll();
    }

  

}



/* ----------------------------------------------------------------------------------------------------------
  COMENTARIOS
  ---------------------------------------------------------------------------------------------------------- */

/* ----------------------------------------------------------------------------------------------------------
  formato de uso: $bd->select('consulta') en caso de no necesitar parametrizar la consulta
  select('consulta','cadena de tipos ',[valores,...]) en caso de parametrizar la consulta cadena ejemplo 'isib' tipos de datos ej: i,s,d,b
  ---------------------------------------------------------------------------------------------------------- */

/* ----------------------------------------------------------------------------------------------------------
  las variables de los parametros se pasan por referencia para que las pueda recibir la funcion call_user_func_array
  ---------------------------------------------------------------------------------------------------------- */
/* ----------------------------------------------------------------------------------------------------------
  call_user_func_array... es equivalente a $sentencia->bind_param('is',$id,$nombre...);
  implemente esta forma--- & por referencia ---porque bind_param('is',$id,$nombre...); no puede recibir un arreglo de variables lo cual seria muy util ya que
  bind_param recibe las variables en secuencia hasta una cantidad n,
  por lo tanto de cara a su uso en las clases seria mas engorroso parametrizar las consultas, y gracias a este le facilita la tarea al programador,
  hacerlo unicamente mandando un arreglo de una matriz con los valores
  ---------------------------------------------------------------------------------------------------------- */

/* ----------------------------------------------------------------------------------------------------------
  insert, delete, update retornan el numero de filas afectadas. select devuelve un arreglo de los valores retornados
  ---------------------------------------------------------------------------------------------------------- */
/* ----------------------------------------------------------------------------------------------------------
  si se agrega un cuarto parametro True se devuelve el ultimo id insertado
  ---------------------------------------------------------------------------------------------------------- */
?>
