<?php
require_once __DIR__ . "/../Modelo/ComunidadModel.php";

class ComunidadController {

     private $model;

  public function __construct() {
    $this->model = new ComunidadModel();
  }

  public function listar(): array {
    return $this->model->obtenerTodas();
  }
}
