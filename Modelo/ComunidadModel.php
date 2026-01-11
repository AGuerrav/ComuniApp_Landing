<?php
class ComunidadModel {
  private $db;

  public function __construct() {
    $this->db = (new Conexion())->getConexion();
  }

  public function obtenerTodas(): array {
    $sql = "SELECT id, nombre, descripcion, imagen, miembros, eventos, avistamientos
            FROM comunidades
            ORDER BY id ASC";
    $res = $this->db->query($sql);

    $data = [];
    while ($row = $res->fetch_assoc()) {
      $data[] = $row;
    }
    return $data;
  }
}
