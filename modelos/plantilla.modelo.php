 <?php
 

  require_once "conexion.php";

  class ModeloPlantilla
  {

    static public function mdlestiloPlantilla($tabla)
    {
      $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
      // $stmt -> execute();
      return $stmt ->fetch();
      // $stmt -> close();
    }
  }
