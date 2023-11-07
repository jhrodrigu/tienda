<?php


class ControladorPlantilla
{
  /*==============================================
  LLAMAMOS LA PLANTILLA
  ===============================================*/

  public function Plantilla()
  {
    include "vistas/plantilla.php";
  }

  /*=================================================
    TRAEMOS LOS ESTILOS DINAMICOS DE LA PLANTILLA
    =================================================*/

  public function ctrEstiloPlantilla()
  {
    $tabla = "plantilla";

    $respuesta = ModeloPlantilla::mdlEstiloPlantilla($tabla);

    return $respuesta;
  }
}
